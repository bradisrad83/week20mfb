@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>Add Another Meal</h2>
          <form action="storeMeal" method="post">
            {{ csrf_field() }}
            <p>Food Name</p><input type="text" name="mealName" placeholder = "Meal Name"><br>
            <p>Protien</p><input type="text" name="protein" placeholder = "Protein/g"><br>
            <p>Carbohydrates</p><input type="text" name="carbs" placeholder="Carbohydrates/g"><br>
            <p>Fat</p><input type="text" name="fat" placeholder="Fat/g"><br>
            <input type = "submit">
           </form>
        </div>
    </div>
</div>
@endsection
