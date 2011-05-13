<?php
header("Cache-Control: no-cache");
$infile = '/home/gce_demo/demo1/in/'. trim($_POST["filename"]);
$outfile = '/home/gce_demo/demo1/out/'. trim($_POST["filename"]);
unlink($infile);
unlink($outfile);
// echo '/home/gce_demo/demo1/out/' . $_POST["filename"]
// echo $_POST["filename"]

?>
