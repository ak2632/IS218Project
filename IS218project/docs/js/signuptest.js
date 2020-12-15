//hard code error messages
var errors = "This field has no value";
var valueError = "Please enter a valid value";
var charError = "Invalid value/Missing one special character";

//get input values
function getValue(iValue){
   return document.getElementById(iValue).value;
}

//set error messages
function setValue(eValue, message){
    document.getElementById(eValue).innerHTML = message;
}

//check text using reg expression
function textReg(TValue,TError){
    //check if text follows reg expression
    if (!/\d/.test(getValue(TValue))) {
        setValue(TError,"");
        //clear error message when text follow reg expression
    }
    else {
        setValue(TError,valueError);
        //set value error when text does not follow reg expression
    }
}

//check email using reg expression
function emailReg(ERValue,ERError){
    //check if email follows reg expression
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(getValue(ERValue))) {
        setValue(ERError,"");
        //clear error message when email follow reg expression
    }
    else {
        setValue(ERError,valueError);
        //set value error when email does not follow reg expression
    }
}

//check password using reg expression
function passReg(PRValue,PRError){
    //check if email follows reg expression
    if (/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{2,20}$/.test(getValue(PRValue))) {
        setValue(PRError,"");
        //clear error message when email follow reg expression
    }
    else {
        setValue(PRError,charError);
        //set value error when email does not follow reg expression
    }
}

//check text for errors
function textChecker(TCValue, TCError){
    //checks if field has text
    if(getValue(TCValue)) {
        textReg(TCValue,TCError);
        //check text using reg expression
    }
    else {
        setValue(TCError,errors);
        //sets empty error when text is empty
    }
}

//check email for errors
function emailChecker(ECValue, ECError) {
    //checks if field has text
    if (getValue(ECValue)) {
        emailReg(ECValue, ECError);
        //check email using reg expression
    } else {
        setValue(ECError, errors);
        //sets empty error when email is empty
    }
}

//check password for errors
function passChecker(PCValue, PCError) {
    //checks if field has text
    if (getValue(PCValue)) {
        passReg(PCValue, PCError);
        //check password using reg expression
    } else {
        setValue(PCError, errors);
        //sets empty error when password is empty
    }
}

//run code on button press
function signUpCheck(){
    textChecker("first", "errorF");
    textChecker("last", "errorL");
	passChecker("pass", "errorP");
    emailChecker("email", "errorE");	
	textChecker("college", "errorC");
	textChecker("major", "errorM");
}

function loginCheck(){
	emailChecker("email", "errorE");	
	passChecker("pass", "errorP");
}

