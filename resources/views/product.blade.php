@extends("master")
@section('content')    
<h1>Page Login   </h1> 
<div class="container custom-product">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
       @foreach($products as $item)
      <div class="item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}" >  
      <div class="carousel-caption">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['descriptions']}}</p>
      </div>
       </a>
    </div>
    @endforeach
  </div>  
  <div class="trending-wrapper">
     <h3>Trading Products   </h3>
     @foreach($products as $item)
     <div class="trening-item"> 
      <a href="detail/{{$item['id']}}">
       <img class="trending-image" src="{{$item['gallery']}}" >  
     <div class="">
       <h3>{{$item['name']}}</h3>
     </div>
    </a>
   </div>
   @endforeach
   
  </div>  
  </div>

</div>   
@endsection
