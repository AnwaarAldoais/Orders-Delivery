@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Right-Side">
                @if($user->type=='Admin')
                    <ul>
                        <li ><a href="/restaurantStatus">Restaurant Status</a></li>
                        <li ><a href="/manageDelivers">Manage Deliver</a></li>
                        <li ><a href="/addDeliver">Add Deliver</a></li>
                    </ul>
                @elseif($user->type=='Restaurant')
                    <li ><a href="/manageCategories">Manage Categories</a></li>
                    <li ><a href="/addCategory">Add Categories</a></li>
                    <!-- <li ><a href="/addOffers">Add Offers</a>
                     <li ><a href="/discountMeal">Discount Meals</a></li>
                    </li>!-->
                    <li ><a href="/manageMeals">Manage Meals</a></li>
                    <li ><a href="/addMeal">Add Meals</a></li>
                     <li ><a href="/waitingOrdersForRes">WaitingOrders</a></li>

                @elseif($user->type=='Deliver')
                    <li ><a href="/waitingOrdersForDelivers">WaitingOrders</a></li>
                    <li ><a href="/deliveringOrders">Delivering Orders</a></li>
                @else
                @endif
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

        </div>
    </div>
</div>
@endsection
