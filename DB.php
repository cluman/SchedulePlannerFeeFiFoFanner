<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<p id="idd"></p>
<p id="time"></p>
<p id="sort">push the button asshole</p>
<h id="teem"></h>
<?php
require 'DBconnection.php';

$query="SELECT * FROM courses"; //courses is the name of the table
$result=mysql_query($query);
$num=mysql_num_rows($result);

echo "<script type=\"text/javascript\">\n";
echo "var Courselist = [];\n";
echo "var j = 0;\n";
$i=8;
$n=4;
$h=0;
while ($i < 15) {
$f1=mysql_result($result,$i,"ID");
$f2=mysql_result($result,$i,"Title");
$f3=mysql_result($result,$i,"Semesters");
$f4=mysql_result($result,$i,"Hours");
$f5=mysql_result($result,$i,"Time");
$i++;

echo "var classs${h} = {\n";
echo "    ID        : \"${f1}\",\n";
echo "    Title     : \"${f2}\",\n";
echo "    Semester  : \"${f3}\",\n";
echo "    Hours     : ${f4},\n";
echo "    Time      : \"${f5}\",\n";
echo "    TimeInt   : 0,\n";
echo "    GetTime   : function() { var temp; temp = this.Time.length - 19; return this.Time.slice(temp, temp+8);},\n";
echo "    Display   : function() { return this.ID+this.Title+this.Semester+this.Hours+this.Time;}\n};\n";
echo "Courselist[${h}] = classs${h};\n";

$h++;
}
?>
</script>
<script>
function getTime (str)
{
    var temp;
    
    temp = str.length - 19;
    
    return str.slice(temp, temp+6);
}

function convert(str){
    if(str.indexOf("PM") > -1)
        str = convertPM(str);
    else 
        str = convertAM(str);

    return str;
}

function convertPM(str){
        if(str.indexOf("1") > -1 && str.indexOf("2") == -1)
            return 13;
        else if(str.indexOf("2") > -1)
            return 14;
        else if(str.indexOf("3") > -1)
            return 15;
        else if(str.indexOf("4") > -1)
            return 16;
        else if(str.indexOf("5") > -1)
            return 17;
        else if(str.indexOf("6") > -1)
            return 18;
        else if(str.indexOf("7") > -1)
            return 19;
        else if(str.indexOf("8") > -1)
            return 20;
        else if(str.indexOf("9") > -1)
            return 21;
        else if(str.indexOf("10") > -1)
            return 22;
        else if(str.indexOf("11") > -1)
            return 23;
        else
            return 12;
} 

function convertAM(str){
        if(str.indexOf("1") == 0 && str.indexOf("2") == -1 && str.indexOf("11") > -1)
            return 1;
        else if(str.indexOf("2") > -1 && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 && str.indexOf("0") > 0))
            return 2;
        else if(str.indexOf("3") > -1 && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("2") > 0 || str.indexOf("5") > 0 && str.indexOf("0") > 0))
            return 3;
        else if(str.indexOf("4") > -1 && (str.indexOf("1") > 0 || str.indexOf("2") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 && str.indexOf("0") > 0))
            return 4;
        else if(str.indexOf("5") > -1 && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("2") > 0 && str.indexOf("0") > 0))
            return 5;
        else if(str.indexOf("6") > -1 && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 && str.indexOf("0") > 0))
            return 6;
        else if(str.indexOf("7") > -1 && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 && str.indexOf("0") > 0))
            return 7;
        else if(str.indexOf("8") > -1 && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 && str.indexOf("0") > 0))
            return 8;
        else if(str.indexOf("9") > -1 && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 && str.indexOf("0") > 0))
            return 9;
        else if(str.indexOf("10") > -1 && (str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 && str.indexOf("0") > 0))
            return 10;
        else if(str.indexOf("1") > -1 && str.indexOf("2") > -1)
            return 12;
        else 
            return 11;
} 

function sortList(){
for(var p = 0; p < 6; p++){
  var teim = Courselist[p].GetTime();
  var teem = convert(teim);
      document.getElementById("teem").innerHTML += teem + "<br>";
  Courselist[p].TimeInt = teem;
}
Courselist.sort(function(a,b){
    return a.TimeInt - b.TimeInt;
})

var output = "";
var x;
for(x = 0; x < 6; x++){
    output += Courselist[x].Display() + "<br>";
}
}
    
for(var h = 0; h < 6; h++){
document.getElementById("idd").innerHTML += Courselist[h].Display() + "<br>";
document.getElementById("time").innerHTML += Courselist[h].TimeInt + "<br>";
}
</script>

<button type="button"
onclick="document.getElementById('sort').innerHTML = sortList()">
Click me to sort classes.</button>

</body>
</html>

