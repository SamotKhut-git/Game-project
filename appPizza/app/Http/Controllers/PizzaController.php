<?php

namespace App\Http\Controllers;

use App\Models\Topping;
use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Toppings;
use PhpParser\Node\Stmt\If_;

class PizzaController extends Controller
{
    //
    public function home(){
        $pizzas = Pizza::all();
        $toppings = Toppings::all();
        return view("webpage.Pizza",["pizzas" => $pizzas,"toppings"=> $toppings]);
    }

    public function form($id)
    {
        $url = $id;
        return view("webpage.Add");
    }
    public function add($id){
        // dd($id); this line if u want to show the data or what ever on the web page
        $add_pizza = new Pizza;
        $add_topping = new Toppings;
        if ($id == "addtopping") {
            $add_topping->tname = request()->toppingName;
            $add_topping->tprice = request()->toppingPrice;
            $add_topping->save();
            return redirect()->back();
        }
        if ($id == "addpizza") {
            $add_pizza->name = request()->pizzaName;
            $add_pizza->price = request()->pizzaPrice;
            $add_pizza->type = request()->pizzaType;
            $add_pizza->crust_or_base = request()->crustorbase;
            $add_pizza->image = request()->pizzaImage;
            $add_pizza->save();
            return redirect()->back();
        }
        // }
       
        // error_log(request('pizzaPrice'));
       
    }
}
