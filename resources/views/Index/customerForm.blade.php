
<h1>Customer Form</h1>

<form method="post" action="/postOrderNow">
    {{ csrf_field() }}

    <div class="form-group">
        <!-- Label   -->
        <label>
            Name
        </label>

        <!-- Input -->
        <input type="text" class="form-control form-control-rounded" placeholder="name" name="name">
    </div>

    <div class="form-group">
        <!-- Label -->
        <label>
            Phone
        </label>

        <!-- Input -->
        <input type="text" class="form-control form-control-rounded" placeholder="phone" name="phone">
    </div>

    <div class="form-group">
        <!-- Label -->
        <label>
            Address
        </label>

        <!-- Input -->
        <input type="text" class="form-control form-control-rounded" placeholder="address" name="address">
    </div>


    <button class="btn btn-lg btn-block btn-primary mb-3">
        Send
    </button>
</form>
