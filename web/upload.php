<?php

$uploaddir = '/home/gce_demo/demo1/in/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$outdir = '/home/gce_demo/demo1/out/';
$otherfile = $outdir . basename($_FILES['userfile']['name']) . ".log";


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
     		//ouput 'success' inside <div id="output">
   		echo '<div id="output">success</div>';
  		//then output your message (optional)
  		// echo '<div id="message">Your file success message</div>';
        chmod($uploadfile, 0777); // So the job manager can pick it up.
        unlink($otherfile); // Delete previous simulations by the same name.
} else {
  		//ouput 'failed' inside <div id="output">
  		echo '<div id="output">failed</div>';
  		echo '<div id="message">Reload page to try again.</div>';
}
       

?> 


