window.onload=function () {
  render();
  document.getElementById('number').value='';
  document.getElementById('otpbutton').disabled=true;
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container',{
    size: "normal",
    callback: (response) => {
      document.getElementById('otpbutton').disabled=false;
    },
    "expired-callback": () => {
      document.getElementById('otpbutton').disabled=true;
    },
    });
    recaptchaVerifier.render();
}
function phoneAuth() {
    //get the number
    var number='+91'+document.getElementById('number').value;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        document.getElementById('databox').innerHTML=' <label for="otp">Enter the OTP</label><input type="text" class="form-control" id="otp" placeholder="******" maxlength="10"><br><button type="submit" class="btn btn-primary" onclick="codeverify();" id="otpverify">SUBMIT OTP</button>';
    }).catch(function (error) {
        console.log(error.message);
    });
}
function codeverify() {
    var code=document.getElementById('otp').value;
    confirmationResult.confirm(code).then((result) => {
        // User signed in successfully.
        const user = result.user;
        alert("Successfully registered");
        console.log(user);
      }).catch((error) => {
        // User couldn't sign in (bad verification code?)
        document.getElementById('databox').innerHTML='<label for="number">Mobile Number</label><input type="mobile" class="form-control" id="number" aria-describedby="mnohelp" placeholder="9XXXXXXXX1" maxlength="10"><small id="mnohelp" class="form-text text-muted">We will never share your mobile number with anyone else.</small><div id="recaptcha-container"></div><button type="submit" class="btn btn-primary" onclick="phoneAuth();" id="otpbutton" disabled="true">GET OTP</button>'
        alert(error.message);
      });
}