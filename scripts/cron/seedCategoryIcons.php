<?php
include("../../core/app.php");
$app = &app::get_instance();
$app->initialize();

$updated = $app->utility->seed_empty_category_icons();

echo "Done. Updated: " . $updated . " category icon(s).\n";
?>
