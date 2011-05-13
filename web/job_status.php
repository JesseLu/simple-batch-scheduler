<?php
header("Cache-Control: no-cache");
echo exec('/home/gce_demo/demo1/job_status' . $_POST["filename"])
?>
