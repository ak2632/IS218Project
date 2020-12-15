var error = "This field has no value";
var first = document.getElementById("first").value;
var last = document.getElementById("last").value;
var email = document.getElementById("email").value;
var errorF = document.getElementById("errorF").innerHTML;
var errorL = document.getElementById("errorL").innerHTML;
var errorE = document.getElementById("errorE").innerHTML;
function signUpCheck(){
    if(!first.length)){document.getElementById("errorF").innerHTML = "This field has no value";}
else{document.getElementById("errorF").innerHTML = "This field has no value";}
if(Boolean(last)){}
else{errorL = error;}
if(Boolean(email)){}
else{errorE = error;}
}