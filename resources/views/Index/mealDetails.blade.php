    <form method="post" action="/addToCart/{{$meal->id}}/{{$meal->price}}">
        {{csrf_field()}}

         <img src="/uploads/meal/{{$meal->img}}" style="width:100px;height:80px;">
         <h3>{{$meal->name}}</h3>
         <p>{{$meal->description}}</p>
         <p>{{$meal->price}}</p>
     <select class="textWidth form-control" name="mealQty" id="mealQty" type="text">
         <option value="1">  1 </option>
         <option value="2">  2 </option>
         <option value="3">  3 </option>
         <option value="4">  4 </option>
         <option value="5">  5 </option>
         <option value="6">  6 </option>
         <option value="7">  7 </option>
         <option value="8">  8 </option>
         <option value="9">  9 </option>
         <option value="10">  10 </option>
         <option value="11">  11 </option>
         <option value="12">  12 </option>
     </select>
     <button type="submit">AddToCart</button>
    </form>
