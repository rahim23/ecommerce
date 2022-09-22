<?php
use App\Http\Controllers\Productcontroller ; 
$total=0 ; 
if(Session::has('user') ){ 
  $total=Productcontroller::cartItem() ; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    .form-control{margin:6px;}
    .btn{margin:7px;}
   
  
</style>
</head>
<body>

<nav class="navbar navbar-default">
  <div  class="container-fluid">
    <ul  class="nav navbar-nav">
      <li class="active" ><a href="/">Home</a></li>
      @if(Session::has('user') )
      <li><a href="/myorders">Orders</a></li>
      @endif
      <li>  <input type="text" class="form-control"  placeholder="Search" > </li> 
      <li>  <button class="btn btn-default" type="submit">  Submit</button></li>
    </ul>
  
  




<ul class="nav navbar-nav navbar-right">
  @if(Session::has('user') )
   <li> <a class="a1" href="/cartlist">cart{{$total}}</a>     </li>
   @endif

   @if(Session::has('user') )
   <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a  class="a2" href="/logout">Logout</a></li>
    </ul>
  </li>
  @else
  <li><a class="a3" href="/login">Login</a></li>
  <li><a class="a3" href="/registre">Register</a></li>

  @endif
</div>
</ul>

</nav>


</body>
</html>
