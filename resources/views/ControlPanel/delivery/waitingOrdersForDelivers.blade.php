
<table class="table table-nowrap">
    <thead>
    <tr>
        <th scope="col">Order_ID</th>
        <th scope="col">Customer_Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">TotalPrice</th>
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
            <td><button><a href="/receiveOrders/{{$order->id}}">Receive Order</a></button></td>
        </tr>
        </tbody>
    @endforeach
</table>
