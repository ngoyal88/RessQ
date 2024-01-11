function seterror(id, error) {
  element = document.getElementById(id);
  element.getElementsByClassName("form-error")[0].innerHTML = error;
}
function validateform() {
  var returnvalue = true;
  var pass = document.forms['signInForm']["password"].value;

if(pass.length <8 ){
    seterror("id_password","Pass too small");
    returnvalue = false;
}

  var cpass = document.forms['signInForm']["cpassword"].value;

  if(cpass != pass ){
    seterror("id_cpassword","Pass not same");
    returnvalue = false;
  }
  return returnvalue;
}
