<?php
require 'DBConnection.php';

$query="SELECT * FROM courses"; //courses is the name of the table
$result=mysql_query($query);
$num=mysql_num_rows($result);

$i=0;
$n=4;
$Courselist;
while ($i < $n) {
$f1=mysql_result($result,$i,"ID");
$f2=mysql_result($result,$i,"Title");
$f3=mysql_result($result,$i,"Semesters");
$f4=mysql_result($result,$i,"Hours");
$f5=mysql_result($result,$i,"Time");
$i++;

echo $f1;
echo $f2;
echo $f3;
echo $f4;
echo $f5;
}

?>
