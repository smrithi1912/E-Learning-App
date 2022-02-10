@extends('master');
@section("content")
 
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/register" method="POST" onsubmit="return validate()">
                 @csrf
                <div class="mb-3">
                   
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">

                </div>

                <div class="mb-3">
                   
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">

                </div>
                
              <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <div class="field">
                      <p>
                        <input type="password" name="password" id="password" />
                        <i class="bi bi-eye-slash" id="togglePassword"></i> 
                    </div>
                    </p>               
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" onkeyup="check(this)">
                    <error id="alert"></error>
                </div>

                <div class="mb-3">
               
                    <label for="exampleInputEmail1" class="form-label">Captcha</label>
                    <div class="captcha">
                        <div id="captchaValue"></div>
                        <input type="text" name="captcha_code" class="form-control" id="captcha_code" placeholder="" />
                    </div>
                    <a onclick="reload(this)"><u>Get New Captcha</u></a>    
                </div>

                <button type="submit" class="btn btn-primary" id="submitBtn">Register</button>
            </form>
        </div>         
    </div>
</div> 

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    var flag = 1; //no errors
    var allValue = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y', 'Z','1','2','3','4','5','6','7','8','9','0',];

    // function captchaNew() {

        var cVal1 = allValue[Math.floor(Math.random()*allValue.length)];
        var cValue = 0;

        for (let i = 0; i < 6; i++) {
            cValue += allValue[Math.floor(Math.random()*allValue.length)];
        }
    
        // captchaValue.innerHTML = captchaNew();
        captchaValue.innerHTML = cValue();
   
        thisValue = "";

        captcha_code.addEventListener('change',function(){  //manual captcha being stored
            thisValue = captcha_code.value;
        })

        submitBtn.addEventListener('click',function(){      //comparing
        
            if(cValue == thisValue){
                alert('Valid');
                // document.logForm.submit();
            }else if(captcha_code.value == ""){
                alert('Invalid Captcha');
            }
        })


    // }


        // var cVal[1] = allValue[Math.floor(Math.random()*allValue.length)];
        // var cVal[2] = allValue[Math.floor(Math.random()*allValue.length)];
        // var cVal[3] = allValue[Math.floor(Math.random()*allValue.length)];
        // var cVal[4] = allValue[Math.floor(Math.random()*allValue.length)];
        // var cVal[5] = allValue[Math.floor(Math.random()*allValue.length)];
        // var cVal[6] = allValue[Math.floor(Math.random()*allValue.length)];

        // var cValue = cVal1+cVal2+cVal3+cVal4+cVal5+cVal6;
        //return cValue;


    function reload(){
        captchaValue.innerHTML = captchaNew();
    }

    // Toggle eye button
    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye / eye slash icon
        this.classList.toggle('bi-eye');
    });

    //Confirm password validation
    function check(elem) {
        if(elem.value.length > 0){
            if(elem.value != password.value){
                document.getElementById('alert').innerText = "Confirm password does not match";
                document.getElementById('alert').style.color = '#d00'
                flag=0;
            }else{
                document.getElementById('alert').innerText = "";
                flag=1;
            }
        }else{
            document.getElementById('alert').innerText = "Please enter confirm password";
            document.getElementById('alert').style.color = '#d00'
            flag=0;
        }
    }

    function validate() {
        if(flag==1){
            return true;
        }else{
            return false;
        }
    }


</script>
@endsection
