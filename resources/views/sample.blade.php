<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
          <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="style.css">
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        
        <title>E-Learning Project</title>
   </head>

   <style>
         .container{
    /* background: #fff; */
    padding: 20px 30px;
    width: 420px;
    border-radius: 5px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
  }
  .container header{
    font-size: 24px;
    font-weight: 600;
    line-height: 33px;
  }
  .container form{
    margin: 20px 5px 10px 5px;
    position: relative;
  }
  .container form .field{
    height: 45px;
    width: 100%;
    display: flex;
    position: relative;
  }

form .field input{
  width: 100%;
  height: 100%;
  border: 1px solid lightgrey;
  padding-left: 15px;
  outline: none;
  border-radius: 5px;
  font-size: 17px;
  transition: all 0.3s;
}
form .field input:focus{
  border-color: #27ae60;
  box-shadow: inset 0 0 3px #2fd072;
}
form .field .showBtn{
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  display: none;
  user-select: none;
}
form .indicator{
  height: 10px;
  margin: 10px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  display: none;
  background: lightgrey;
}
form .indicator span{
  position: relative;
  height: 100%;
  width: 100%;
  background: lightgrey;
  border-radius: 5px;
}
form .indicator span:nth-child(2){
  margin: 0 3px;
}
form .indicator span.active:before{
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  border-radius: 5px;
}
.indicator span.weak:before{
  background-color: #ff4757;
}
.indicator span.medium:before{
  background-color: orange;
}
.indicator span.strong:before{
  background-color: #23ad5c;
}
form .text{
  font-size: 20px;
  font-weight: 500;
  display: none;
  margin-bottom: -10px;
}
form .text.weak{
  color: #ff4757;
}
form .text.medium{
  color: orange;
}
form .text.strong{
  color: #23ad5c;
}
   </style>

   <body>

      <div class="container">
      
         <form action="#">
         <!-- <form action="/register" method="POST">
                 @csrf -->
            <div class="field">
               <input onkeyup="trigger()" type="password" placeholder="Type password">
               <span class="showBtn">SHOW</span>
            </div>
            <div class="indicator">
               <span class="weak"></span>
               <span class="medium"></span>
               <span class="strong"></span>
            </div>
            <div class="text"></div>
         </form>
      </div>
      <script>
         const indicator = document.querySelector(".indicator");
         const input = document.querySelector("input");
         const weak = document.querySelector(".weak");
         const medium = document.querySelector(".medium");
         const strong = document.querySelector(".strong");
         const text = document.querySelector(".text");
         const showBtn = document.querySelector(".showBtn");
         let regExpWeak = /[a-z]/;
         let regExpMedium = /\d+/;
         let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;
         function trigger(){
           if(input.value != "")
           {
             indicator.style.display = "block";
             indicator.style.display = "flex";
             if(input.value.length <= ch(regExpMedium) || input.value.match(regExpStrong)))no=1;
             if(input.value.length >= 6 && ((input.value.match(r3 && (input.value.match(regExpWeak) || input.value.mategExpWeak) && input.value.match(regExpMedium)) || (input.value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) && input.value.match(regExpStrong))))no=2;
             if(input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value.match(regExpStrong))no=3;
             if(no==1){
               weak.classList.add("active");
               text.style.display = "block";
               text.textContent = "Your password is too week";
               text.classList.add("weak");
             }
             if(no==2){
               medium.classList.add("active");
               text.textContent = "Your password is medium";
               text.classList.add("medium");
             }else{
               medium.classList.remove("active");
               text.classList.remove("medium");
             }
             if(no==3){
               weak.classList.add("active");
               medium.classList.add("active");
               strong.classList.add("active");
               text.textContent = "Your password is strong";
               text.classList.add("strong");
             }else{
               strong.classList.remove("active");
               text.classList.remove("strong");
             }
             showBtn.style.display = "block";
             showBtn.onclick = function(){
               if(input.type == "password"){
                 input.type = "text";
                 showBtn.textContent = "HIDE";
                 showBtn.style.color = "#23ad5c";
               }else{
                 input.type = "password";
                 showBtn.textContent = "SHOW";
                 showBtn.style.color = "#000";
               }
             }
           }
           else
           {
             indicator.style.display = "none";
             text.style.display = "none";
             showBtn.style.display = "none";
           }
         }
      </script>

   </body>
</html>