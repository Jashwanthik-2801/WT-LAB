
<br><br><br>
<form action="">
ENTER NUMBER : <input type= "number" name = "num"><br><br>
<input type = "submit"><br>
</form><?php 
$n = 0; 
for($num=1;$num<=$_GET["num"];$num++){   
$count=0;  
   for ( $i=2; $i<=$num/2; $i++){  
       if (($num%$i)==0){  
            $count++; 
             break; 
        }  
    }  
    if ($count == 0 && $num != 1){  
        echo $num." , ";  
    }  
}  
?>