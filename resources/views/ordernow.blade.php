@extends("master")
@section('content')
<br>
<br>
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>${{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>0 $</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>10 $</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                <textarea name="address" class="form-control"  placeholder="Enter your email" > </textarea>
                </div>
                <div class="form-group">
                  <label  for="pwd" >Payment Method  </label> <br>
                  <input type="radio" value="cash" name="payment"><span>Online payment  </span> <br> 
                  <input type="radio" value="cash" name="payment"><span>EMI payment  </span> <br>
                  <input type="radio" value="cash" name="payment"><span>Payment on Delivery  </span><br> 
                  
                </div>          
                <button type="submit" class="btn btn-primary">  Order Now</button>
              </form>
          

    
          </div> 
    </div>

@endsection