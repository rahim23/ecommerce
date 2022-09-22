<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
     
    </head>
    <body>
        {{View::make('header')}}
        @yield('content') 
        {{View::make('footer')}}
              
    </body>
    <style>
        .custom-login{
            height: 500px; 
            padding-top:100px;
        }
        img.slider-img{
            height: 400px; !important

        }
        .trending-image{
            height:100px;

        }
        .trening-item{
            float: left;
            width:20%;
        }
        .detail-img"{
            height:20%;
            width:20%;
            margin:20px ; 
            float: right;


        }
        .cart-list-devider{
            border-bottom:2px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
     
    
    </style>
</html>
