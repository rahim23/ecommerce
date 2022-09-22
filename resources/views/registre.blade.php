@extends("master")
@section('content')    

<h1>Page Login   </h1> 
<div class="container custom-login">
  <div class="row">
      <div class="col-sm-4 col-sm-offset-4">    
        <form action="/registre" method="POST">
            <div class="form-group">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">User Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="User_Name">
                  </div>
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control"  placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control"  placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Registre</button>
          </form>
        

      </div>
  </div>
</div>   
@endsection
