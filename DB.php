<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<p id="idd"></p>
<p id="time"></p>
<p id="sort">push the button asshole</p>

<?php
require 'DBconnection.php';

$query="SELECT * FROM courses"; //courses is the name of the table
$result=mysql_query($query);
$num=mysql_num_rows($result);

echo "<script type=\"text/javascript\">\n";
echo "var Courselist = [];\n";
echo "var j = 0;\n";
$i=0;
$n=50;
$h=0;
while ($i < $n) {
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
echo "    GetTime   : function() { var temp; var tmp = this.Time; 
				   if(tmp.indexOf(\"11\") > -1 || tmp.indexOf(\"10\") > -1){
				      temp = this.Time.length - 20;
				      return this.Time.slice(temp, temp+8);}
				   else{ temp = this.Time.length - 19;			   
				      return this.Time.slice(temp, temp+8);}},\n";
echo "    Display   : function() { return this.ID+\"-\"+this.Title+this.Semester+\" - \"+this.Hours+\" at \"+this.Time;}\n};\n";
echo "Courselist[${h}] = classs${h};\n";

$h++;
}
?>
</script>
<script>
function convert(str){
    if(str.indexOf("PM") > -1)
        str = convertPM(str);
    else 
        str = convertAM(str);

    return str;
}

function convertPM(str){
        if(str.indexOf("1") > -1 && str.indexOf("2") == -1){
	    if(str.indexOf("1") > 1)
	      return 13.1;
	    else if(str.indexOf("2") > 1)
	      return 13.2;
	    else if(str.indexOf("3") > 1)
	      return 13.3;
	    else if(str.indexOf("4") > 1)
	      return 13.4;
	    else if(str.indexOf("5") > 1)
	      return 13.5;
	    else
	      return 13.0;    
        }
        else if(str.indexOf("2") == 0 || str.indexOf("2") == 1 && (str.indexOf("1") > 1 || str.indexOf("1") == -1)){
	    if(str.indexOf("1") > 1)
	      return 14.1;
	    else if(str.indexOf("2") > 1)
	      return 14.2;
	    else if(str.indexOf("3") > 1)
	      return 14.3;
	    else if(str.indexOf("4") > 1)
	      return 14.4;
	    else if(str.indexOf("5") > 1)
	      return 14.5;
	    else
	      return 14.0;    
        }
        else if(str.indexOf("3") == 0 || str.indexOf("3") == 1){
            if(str.indexOf("1") > 1)
	      return 15.1;
	    else if(str.indexOf("2") > 1)
	      return 15.2;
	    else if(str.indexOf("3") > 1)
	      return 15.3;
	    else if(str.indexOf("4") > 1)
	      return 15.4;
	    else if(str.indexOf("5") > 1)
	      return 15.5;
	    else
	      return 15.0;    
        }
        else if(str.indexOf("4") == 0 || str.indexOf("4") == 1){
            if(str.indexOf("1") > 1)
	      return 16.1;
	    else if(str.indexOf("2") > 1)
	      return 16.2;
	    else if(str.indexOf("3") > 1)
	      return 16.3;
	    else if(str.indexOf("4") > 1)
	      return 16.4;
	    else if(str.indexOf("5") > 1)
	      return 16.5;
	    else
	      return 16.0;    
        }
        else if(str.indexOf("5") == 0 || str.indexOf("5") == 1){
            if(str.indexOf("1") > 1)
	      return 17.1;
	    else if(str.indexOf("2") > 1)
	      return 17.2;
	    else if(str.indexOf("3") > 1)
	      return 17.3;
	    else if(str.indexOf("4") > 1)
	      return 17.4;
	    else if(str.indexOf("5") > 1)
	      return 17.5;
	    else
	      return 17.0;    
        }
        else if(str.indexOf("6") == 0 || str.indexOf("6") == 1){
            if(str.indexOf("1") > 1)
	      return 18.1;
	    else if(str.indexOf("2") > 1)
	      return 18.2;
	    else if(str.indexOf("3") > 1)
	      return 18.3;
	    else if(str.indexOf("4") > 1)
	      return 18.4;
	    else if(str.indexOf("5") > 1)
	      return 18.5;
	    else
	      return 18.0;    
        }
        else if(str.indexOf("7") == 0 || str.indexOf("7") == 1){
            if(str.indexOf("1") > 1)
	      return 19.1;
	    else if(str.indexOf("2") > 1)
	      return 19.2;
	    else if(str.indexOf("3") > 1)
	      return 19.3;
	    else if(str.indexOf("4") > 1)
	      return 19.4;
	    else if(str.indexOf("5") > 1)
	      return 19.5;
	    else
	      return 19.0;    
        }
        else if(str.indexOf("8") == 0 || str.indexOf("8") == 1){
            if(str.indexOf("1") > 1)
	      return 20.1;
	    else if(str.indexOf("2") > 1)
	      return 20.2;
	    else if(str.indexOf("3") > 1)
	      return 20.3;
	    else if(str.indexOf("4") > 1)
	      return 20.4;
	    else if(str.indexOf("5") > 1)
	      return 20.5;
	    else
	      return 20.0;    
        }
        else if(str.indexOf("9") == 0 || str.indexOf("9") == 1){
            if(str.indexOf("1") > 1)
	      return 21.1;
	    else if(str.indexOf("2") > 1)
	      return 21.2;
	    else if(str.indexOf("3") > 1)
	      return 21.3;
	    else if(str.indexOf("4") > 1)
	      return 21.4;
	    else if(str.indexOf("5") > 1)
	      return 21.5;
	    else
	      return 21.0;    
        }
        else if(str.indexOf("10") > -1)
            return 22;
        else if(str.indexOf("11") > -1)
            return 23;
        else if(str == "")
	    return 0;
        else{
            if(str.indexOf("1", 2) > 1)
	      return 12.1;
	    else if(str.indexOf("2", 2) > 1)
	      return 12.2;
	    else if(str.indexOf("3", 2) > 1)
	      return 12.3;
	    else if(str.indexOf("4", 2) > 1)
	      return 12.4;
	    else if(str.indexOf("5", 2) > 1)
	      return 12.5;
	    else
	      return 12.0;    
        }
} 

function convertAM(str){
        if(str.indexOf("1") == 0 && str.indexOf("2") == -1 && str.indexOf("11") == -1 && str.indexOf("10") == -1){
	    if(str.indexOf("1", 1) > 1)
	      return 1.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 1.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 1.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 1.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 1.5;
	    else
	      return 1.0;    
        }
        else if(str.indexOf("2") == 0 && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 && str.indexOf("0") > 0)){
	    if(str.indexOf("1", 1) > 1)
	      return 2.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 2.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 2.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 2.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 2.5;
	    else
	      return 2.0;    
        }
        else if((str.indexOf("3") == 0 || str.indexOf("3") == 1) && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("2") > 0 || str.indexOf("5") > 0 && str.indexOf("0") > 0)){
	    if(str.indexOf("1", 1) > 1)
	      return 3.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 3.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 3.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 3.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 3.5;
	    else
	      return 3.0;    
        }
        else if((str.indexOf("4") == 0 || str.indexOf("4") == 1) && (str.indexOf("1") > 0 || str.indexOf("2") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 && str.indexOf("0") > 0)){
	    if(str.indexOf("1", 1) > 1)
	      return 4.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 4.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 4.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 4.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 4.5;
	    else
	      return 4.0;    
        }
        else if((str.indexOf("5") == 0 || str.indexOf("5") == 1) && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("2") > 0 && str.indexOf("0") > 0)){
            if(str.indexOf("1", 1) > 1)
	      return 5.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 5.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 5.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 5.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 5.5;
	    else
	      return 5.0;    
        }
        else if((str.indexOf("6") == 0 || str.indexOf("6") == 1) && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 || str.indexOf("0") > 0)){
	    if(str.indexOf("1", 1) > 1)
	      return 6.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 6.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 6.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 6.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 6.5;
	    else
	      return 6.0;    
        }
        else if((str.indexOf("7") == 0 || str.indexOf("7") == 1) && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 || str.indexOf("0") > 0)){
            if(str.indexOf("1", 1) > 1)
	      return 7.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 7.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 7.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 7.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 7.5;
	    else
	      return 7.0;    
        }
        else if((str.indexOf("8") == 0 || str.indexOf("8") == 1)){// && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 || str.indexOf("0") > 0)){
	    if(str.indexOf("1", 1) > 1)
	      return 8.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 8.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 8.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 8.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 8.5;
	    else
	      return 8.0;    
        }
        else if((str.indexOf("9") == 0 || str.indexOf("9") == 1)){// && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 || str.indexOf("0") > 0)){
	    if(str.indexOf("1", 1) > 1)
	      return 9.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 9.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 9.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 9.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 9.5;
	    else
	      return 9.0;    
        }
        else if(str.indexOf("10") >= 0){ // && (str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 || str.indexOf("2") > 0 && str.indexOf("0") > 0)){
	    if(str.indexOf("1", 2) > 1)
	      return 10.1;
	    else if(str.indexOf("2", 2) > 1)
	      return 10.2;
	    else if(str.indexOf("3", 2) > 1)
	      return 10.3;
	    else if(str.indexOf("4", 2) > 1)
	      return 10.4;
	    else if(str.indexOf("5", 2) > 1)
	      return 10.5;
	    else
	      return 10.0;    
        }
        else if(str.indexOf("12") >= 0){// && str.indexOf("1") > -1 && str.indexOf("2") > -1){
	    if(str.indexOf("1", 2) > 1)
	      return 12.1;
	    else if(str.indexOf("2", 2) > 1)
	      return 12.2;
	    else if(str.indexOf("3", 2) > 1)
	      return 12.3;
	    else if(str.indexOf("4", 2) > 1)
	      return 12.4;
	    else if(str.indexOf("5", 2) > 1)
	      return 12.5;
	    else
	      return 12.0;    
        }
        else if(str == "")
	    return 0;
        else if(str.indexOf("11") >= 0){
	    if(str.indexOf("1", 2)  > 1)
	      return 11.1;
	    else if(str.indexOf("2", 2)  > 1)
	      return 11.2;
	    else if(str.indexOf("3", 2)  > 1)
	      return 11.3;
	    else if(str.indexOf("4", 2)  > 1)
	      return 11.4;
	    else if(str.indexOf("5", 2)  > 1)
	      return 11.5;
	    else
	      return 11.0;    
        }
        else
	  return -1;
} 

function sortList(){
  for(var p = 0; p < 50; p++){
    var teim = Courselist[p].GetTime();
    var teem = convert(teim);
    Courselist[p].TimeInt = teem;
  }
  Courselist.sort(function(a,b){
      return a.TimeInt - b.TimeInt;
  })
  var output = "";
  var x;
  for(x = 0; x < 50; x++){
      output += Courselist[x].Display() + "<br>";
  }
 return output;
}
    
for(var h = 0; h < 50; h++){
document.getElementById("idd").innerHTML += Courselist[h].Display() + "<br>";
}
</script>

<button type="button"
onclick="document.getElementById('sort').innerHTML = sortList()">
Click me to sort classes.</button>

</body>
</html>
