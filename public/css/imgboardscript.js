// Welcome to this codepen
// I am prototyping until I get kind of a Futaba Channel or 4chan look
// The CSS to the left is the Yotsuba theme
// Altough the first 3 lines are there to change the font to Roboto
// For now, almost every link redirects to the Top Gear theme song
// will add more to it in the future and if possible, turn this into an actual image board!
function startPage() {
  
  document.getElementById("threadbutton").style.display = "block";
  document.getElementById("newthread").style.display = "none";
  
}

function showThreadCreator() {
  
  document.getElementById("newthread").style.display = "block";
  document.getElementById("threadbutton").style.display = "none";
  
};
function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}