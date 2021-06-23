
<table class="table table-nowrap">
    <thead>
    <tr>
        <th scope="col">Restaurant_ID</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($users as $user)
        <tbody>
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td> <img src="/uploads/restaurant/{{$user->img}}" style="width:120px;height: 100px;"></td>
            <td><button><a href="/approveRestaurant/{{$user->id}}">Approve</a></button></td>
            <td><button><a href="/rejectRestaurant/{{$user->id}}">Reject</a></button></td>
        </tr>
        </tbody>
    @endforeach
</table>
