<!doctype html>
<html lang="en">
  <head>
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
  <body>
      {{View::make('header')}}
      @yield('content')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    {{View::make('footer')}}
   
  </body>
  <style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 500px !important
    }
    .custom-product{
        height: 600px
    }

    .py-3{
        padding-top: 40rem !important;
    }
    .navbar-align{
        padding-top:0rem;

    }

    .form-control{
        padding: 0.375rem 8.00rem; 
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }
    
    .slider-text{
        background-color: #35443585 !important;
    }

    .trending-image{
        height: 110px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    /* rating */
    .rating-css div {
        color: #ffe400;
        font-size: 30px;
        font-family: sans-serif;
        font-weight: 800;
        text-align: center;
        text-transform: uppercase;
        padding: 20px 0;
    }
    .rating-css input {
        display: none;
    }
    .rating-css input + label {
        font-size: 60px;
        text-shadow: 1px 1px 0 #8f8420;
        cursor: pointer;
    }
    .rating-css input:checked + label ~ label {
        color: #b4afaf;
    }
    .rating-css label:active {
        transform: scale(0.8);
        transition: 0.3s ease;
    }

    /* End of Star Rating */

    form i {
        margin-left: -30px;
        cursor: pointer;
    }
    
    .captcha{
        display: flex;
    }

    #captchaValue{
        height: 40px;
        padding: 10px;
        font-weight: 700;
        line-height: 20px;
        background-color: #000;
        border-radius: 10px 0 0 10px;
        color: #fff;
        border-right: 2px solid gray;
    }

    .captcha input{
        border-radius:0 10px 10px 0 !import;
    }
  </style>

</html>