
<table class="table table-nowrap">
    <thead>
    <tr>
        <th scope="col">Category_ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($meals as $meal)
        <tbody>
        <tr>
            <th scope="row">{{$meal->id}}</th>
            <td>{{$meal->name}}</td>
            <td>{{$meal->description}}</td>
            <td>{{$meal->price}}</td>
            <td> <img src="/uploads/meal/{{$meal->img}}" style="width:120px;height: 100px;"></td>
            <td><button><a href="/getDiscountMeal/{{$meal->id}}">Discount</a></button></td>
            <td><button><a href="/editMeal/{{$meal->id}}">edit</a></button></td>
            <td> <form method="Post" action="/deleteMeal/{{$meal->id}}">
                    @method('DELETE')
                    @csrf
                    <div class="filed">
                        <div class="control">
                            <button  type="submit" class="button is-link">Delete</button>
                        </div>
                    </div>
                </form></td>
        </tr>
        </tbody>
    @endforeach
</table>
