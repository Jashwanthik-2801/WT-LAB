<form method = "POST">
CHOOSE THE FILE  :<input type = "file" value = "Choose a file" name = "filename">
<br><br>
<input value = "submit" type = "submit"><br>
</form>

<?php
$filename = $_POST["filename"];
if(isset($filename)){
	$myfile = fopen($filename , "r") or die("unable to open file");
	$myfile1 = fopen("test.txt","w") or die("Unable to open file");
	fwrite($myfile1,fread($myfile,filesize($filename)));
	fclose($myfile);
	fclose($myfile1);
	echo "Contents of ".$filename. " have been written to 'newfile.txt'";
}
?>