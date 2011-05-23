<?php
header("Cache-Control: no-cache");
$infile = '/home/gce_demo/demo1/in/'. trim($_POST["filename"]);
$workfile = '/home/gce_demo/demo1/work/'. trim($_POST["filename"]);
$outfile = '/home/gce_demo/demo1/out/'. trim($_POST["filename"]);
unlink($infile);
unlink($workfile);
unlink($outfile);
// echo '/home/gce_demo/demo1/out/' . $_POST["filename"]
// echo $_POST["filename"]

?>
