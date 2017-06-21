@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>Add Another Meal</h2>
          <form action="addMeal" method="post">What are you eating?>
            {{ csrf_field() }}
            <input type="text" name="mealName" placeholder = "Meal Name">
            <input type = "submit">
          </form>
        </div>
    </div>
</div>
@endsection
