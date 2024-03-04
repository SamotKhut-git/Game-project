@extends('layouts.layouts')
@section('container')
<div class="container grid grid-cols-2 gap-10 ">
    <div >
        <h1 class=" text-2xl text-yellow-500 text-center font-bold ">Add Pizza</h1>
        <!-- Form for add any pizza to database -->
        <form class="p-8 bg-gray-100 shadow-lg rounded-lg mt-2" method="POST" action="/addpizza" >
            @csrf
            <div class="mb-2">
                <label class="block" label="InputName">Name</label>
                <input class="w-full h-8" type="text" name="pizzaName" placeholder="Enter name">
            </div>
            <div class="form-group mb-2 ">
                <label class="block" for="InputType">Type</label>
                <input class="w-full h-8" type="text"  name="pizzaType" placeholder="Enter type">
            </div>
           <div><p>Heloo</p></div>
            <div class="form-group mb-2">
                <label class="block" for="Inputprice">price</label>
                <input class="w-full h-8" type="text"  name="pizzaPrice" placeholder="Enter price">
            </div>
            <div class="form-group mb-2">
                <label class="block" for="InputBase">crust or base</label>
                <input class="w-full h-8" type="text"  name="crustorbase" placeholder="Enter crust or base">
            </div>
            <div class="form-group mb-2">
                <label  class="block" for="InputPizzaImage url">image</label>
                <input class="w-full h-8" type="file" name="pizzaImage">
            </div>
            <button type="submit" class="bg-blue-700 text-white font-bold rounded-lg w-20" >Submit</button>
        </form>
    </div>
    <!-- Form to add any topping to database -->
    <div>    
        <h1 class="text-2xl text-yellow-500 text-center font-bold ">Add Topping</h1>
        <form method="POST" class="p-8 bg-gray-100 shadow-lg rounded-lg mt-2" action="/addtopping">
            @csrf
            <div class="form-group mb-2">
                <label class="block" for="InputName">Topping name</label>
                <input type="text" class="w-full h-8" name="toppingName" placeholder="Enter name">
            </div>
            <div class="form-group mb-2">
                <label class="block" for="InputPrice">Topping price</label>
                <input type="text" class="w-full h-8" name="toppingPrice" placeholder="Enter price">
            </div>
            <div class="form-group mb-2">
                <label class="block" for="InputToppingimage url">Topping image</label>
                <input type="file" class="w-full h-8" name="toppingImage">
            </div>
            <button type="submit" class="bg-blue-700 text-white font-bold w-20 rounded-lg">Submit</button>
        </form>
    </div>
</div>
@endsection

