

function validateForm()
{

var w = document.getElementById("fName").value;
var x = document.getElementById("lName").value;
var y = document.getElementById("email").value;
var z = document.getElementById("phone").value;



if(w==null||w==""||x==null||x==""||y==null||y==""||z==null||z=="") {

   //Cells are blank
    
   alert("Please ensure all fileds have been completed before submitting!");
 }

else{
  if(isNaN(z)){
  alert("Please enter a valid Phone Number!");
}  
}
}

function ValidateBoardgamesAssigned()
{

var a = document.getElementById("bgID").value;
var b = document.getElementById("memID").value;

if(a==null||a==""||b==null||b=="") {

   //Cells are blank
    
   alert("Please ensure all fields have been completed before submitting!");
 }

else{
  if(isNaN(a||b)){
  alert("Please enter a valid Phone Number!");
}  
}
}

function ValidateBoardgameEntry()
{

var c = document.getElementById("bg").value;
var d = document.getElementById("pos").value;
var e = document.getElementById("notes").value;
var f = document.getElementById("date").value;
var g = document.getElementById("event").value;

if(c==null||c==""||d==null||d==""||e==null||e==""||f==null||f==""||g==null||g=="") {

   //Cells are blank
    
   alert("Please ensure all fields have been completed before submitting!");
 }

}