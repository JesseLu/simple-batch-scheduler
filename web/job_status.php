<?php
header("Cache-Control: no-cache");
echo exec(escapeshellcmd('/home/gce_demo/demo1/job_status' . $_POST["filename"]));
?>
