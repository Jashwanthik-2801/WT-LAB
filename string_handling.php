<br><br><br>
<form action="">
ENTER STRING : <input type= "text" name = "string"><br><br>
ENTER A STRING TO FIND IN MAIN STRING : <input type = "text" name = "sub"><br><br>
<input type = "submit"><br>
</form>
<?php
echo "LENGTH OF STRING -> ";
echo strlen($_GET["string"])."<br><br>";
echo "WORD COUNT OF STRING -> ";
echo str_word_count($_GET["string"])."<br><br> ";
echo "REVERSE OF A STRING -> ";
echo strrev($_GET["string"])."<br><br> ";
echo "POSITION OF SPECIFIC STRING IN MAIN STRING -> ";
echo strpos($_GET["string"],$_GET["sub"])."<br> ";