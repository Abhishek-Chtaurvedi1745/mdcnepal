<?php
include("../../core/app.php");
$app = &app::get_instance();
$app->initialize();

$updated = $app->utility->seed_empty_disease_icons();

echo "Done. Updated: " . $updated . " disease icon(s).\n";
?>
