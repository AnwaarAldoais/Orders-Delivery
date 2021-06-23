
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <strong>{{$product['item']['name']}}</strong>
                            <span class="label label-success">{{$product['item']['price']}}</span>
                            <span class="badge">{{$product['qty']}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <strong> TotalPrice:{{$price}}  </strong>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <button type="button" class="btn btn-success"><a href="/getOrderNow">اطلب الان</a>  </button>   </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <button type="button" class="btn btn-danger"><a href="/cancelOrder"> الغاء</a> </button>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart</h2>
            </div>
        </div>
    @endif

