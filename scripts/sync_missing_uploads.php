<?php
/**
 * Download missing upload files from live mdcnepal.com (HTTP 200 only).
 * CLI: php scripts/sync_missing_uploads.php
 */
require_once dirname(__DIR__) . '/core/config.php';

$liveBase = 'https://www.mdcnepal.com/uploads/';
$localBase = ABS_PATH . '/uploads/';
$maxDownloads = 800;

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (!$conn) {
    fwrite(STDERR, "DB connect failed\n");
    exit(1);
}
mysqli_set_charset($conn, 'utf8');

$queries = [
    ['folder' => 'main_banner_images', 'sql' => "SELECT DISTINCT banner_image AS img FROM banner WHERE banner_image!=''"],
    ['folder' => 'main_banner_images', 'sql' => "SELECT DISTINCT mobile_image AS img FROM banner WHERE mobile_image!=''"],
    ['folder' => 'item', 'sql' => "SELECT DISTINCT image AS img FROM item WHERE image!='' AND status='Active'"],
    ['folder' => 'blog', 'sql' => "SELECT DISTINCT image AS img, folder AS sub FROM blog WHERE image!='' AND status='Active'", 'subfolder' => true],
    ['folder' => 'testimonial', 'sql' => "SELECT DISTINCT image AS img FROM testimonial WHERE image!='' AND status='Active'"],
    ['folder' => 'gallery', 'sql' => "SELECT DISTINCT image AS img FROM gallery WHERE image!='' AND status='Active'"],
    ['folder' => 'item_diseases', 'sql' => "SELECT DISTINCT image AS img FROM item_diseases WHERE image!='' AND status='Active'"],
    ['folder' => 'item_category', 'sql' => "SELECT DISTINCT image AS img FROM item_category WHERE image!='' AND status='Active'"],
    ['folder' => 'for_doctors_services', 'sql' => "SELECT DISTINCT image AS img FROM for_doctors_services WHERE image!='' AND status='Active'"],
];

$missing = [];
foreach ($queries as $q) {
    $rs = mysqli_query($conn, $q['sql']);
    if (!$rs) {
        continue;
    }
    while ($row = mysqli_fetch_assoc($rs)) {
        $img = trim($row['img']);
        if ($img === '') {
            continue;
        }
        $sub = (!empty($q['subfolder']) && !empty($row['sub'])) ? trim($row['sub']) . '/' : '';
        $rel = $q['folder'] . '/' . $sub . $img;
        $localPath = $localBase . $q['folder'] . '/' . $sub . $img;
        if (!is_file($localPath)) {
            $missing[$rel] = ['folder' => $q['folder'], 'sub' => $sub, 'file' => $img];
        }
    }
}

echo 'Missing: ' . count($missing) . PHP_EOL;
$downloaded = 0;
$failed = 0;

foreach ($missing as $entry) {
    if ($downloaded >= $maxDownloads) {
        echo "Limit reached ($maxDownloads)\n";
        break;
    }
    $folder = $entry['folder'];
    $sub = isset($entry['sub']) ? $entry['sub'] : '';
    $file = $entry['file'];
    $dir = $localBase . $folder . '/' . $sub;
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    $localPath = $dir . $file;
    $url = $liveBase . $folder . '/' . $sub . rawurlencode($file);

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 45,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/120.0.0.0',
        CURLOPT_HTTPHEADER => ['Referer: https://www.mdcnepal.com/'],
    ]);
    $data = curl_exec($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $type = (string) curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
    curl_close($ch);

    if ($code !== 200 || $data === false || strlen($data) < 500 || stripos($type, 'image') === false) {
        echo "SKIP ($code): $folder/$sub$file\n";
        $failed++;
        continue;
    }
    file_put_contents($localPath, $data);
    echo "OK: $folder/$sub$file (" . strlen($data) . ")\n";
    $downloaded++;
    usleep(80000);
}

echo PHP_EOL . "Downloaded: $downloaded, Skipped/failed: $failed\n";
