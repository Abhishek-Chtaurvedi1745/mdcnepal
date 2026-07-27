<?php
include("../../core/app.php");
$app = &app::get_instance();
$app->initialize();

$updated = $app->utility->seed_empty_disease_descriptions();

echo "Done. Updated: " . $updated . " disease description(s).\n";
?>
