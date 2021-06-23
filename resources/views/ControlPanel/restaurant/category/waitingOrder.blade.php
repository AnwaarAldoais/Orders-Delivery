
<table class="table table-nowrap">
    <thead>
    <tr>
        <th scope="col">Order_ID</th>
        <th scope="col">Customer_Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">TotalPrice</th>
        <th scope="col">Order Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($orders as $order)
        <tbody>
        <tr>
            <th scope="row">{{$order->id}}</th>
            <td>{{$order->name}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->totalprice}}</td>
            <td>{{$order->status}}</td>
            <td><button><a href="/orderDetails/{{$order->id}}">Order Details</a></button></td>
        @if($order->status=='في انتظار العمل')
            <td><button><a href="/changeOrderStatus/{{$order->id}}/{{'قيد العمل'}}">Start Work</a></button></td>
            @elseif($order->status=='قيد العمل')
                <td><button><a href="/changeOrderStatus/{{$order->id}}/{{'بانتظار التسليم'}}">Done</a></button></td>
            @endif
        </tr>
        </tbody>
    @endforeach
</table>
