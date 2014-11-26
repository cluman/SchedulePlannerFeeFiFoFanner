<!DOCTYPE html>
<html>
<body>
<h>Courses</h>
<p id="demo"></p>
<p id="sort">blah</p>
<script>
var Course1 = {
    ID        : "MATH2554C-001",
    Title     : "Calculus I",
    Hours     : 4,
    Semester  : "(Sp, Fa)",
    Day       : "Mon, Wed, Fri",
    TimeStart : "10:45 AM",
    Start     : "1045",
    End       : "1130",
    TimeEnd   : "11:30 AM",
    Location  : "WJWH0218",
    Instructor: "James Meek",
    Display   : function() { return this.ID+" - "+this.Title+" at "+this.TimeStart+
                            "-"+this.TimeEnd+" with "+this.Instructor;}
};
var Course2 = {
    ID        : "CHEM1113-001",
    Title     : "University Chemistry for Engineers I",
    Hours     : 3,
    Semester  : "(Su, Fa)",
    Day       : "Tue, Thu",
    TimeStart : "11:00 AM",
    Start     : "1100",
    End       : "1250",
    TimeEnd   : "12:50 PM",
    Location  : "ARKU0424",
    Instructor: "Mya Norman",
    Display   : function() { return this.ID+" - "+this.Title+" at "+this.TimeStart+
                            "-"+this.TimeEnd+" with "+this.Instructor;}
};
var Course3 = {
    ID        : "PHYS2054-001",
    Title     : "University Physics I",
    Hours     : 4,
    Semester  : "(Sp, Su, Fa)",
    Day       : "Mon, Wed, Fri",
    TimeStart : "9:40 AM",
    Start     : "940",
    End       : "1030",
    TimeEnd   : "10:30 AM",
    Location  : "ARKU0424",
    Instructor: "Julio Gea-Banacloche",
    Display   : function() { return this.ID+" - "+this.Title+" at "+this.TimeStart+
                            "-"+this.TimeEnd+" with "+this.Instructor;}
};
document.getElementById("demo").innerHTML = Course1.Display()+"<br>"+Course2.Display()+"<br>"+Course3.Display();


function sortList(){
var CourseList = [Course1, Course2, Course3];
CourseList.sort(function(a,b){
    return a.Start - b.Start;
})

var output = "";
var i, x;
for(x = 0; x < CourseList.length; x++){
    output += CourseList[x].Display() + "<br>";
}
    
return output;
}


</script>

<button type="button"
onclick="document.getElementById('sort').innerHTML = sortList()">
Click me to sort classes.</button>


</body>

</html>
