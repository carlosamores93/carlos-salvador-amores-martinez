<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return view('front.mongodb-crud-car.index',compact('cars'));
    }

    public function create()
    {
        return view('front.mongodb-crud-car.create');
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->company = $request->get('company');
        $car->model = $request->get('model');
        $car->status = $request->get('status');        
        $car->slug = Str::slug($request->get('company').'-'.$request->get('model'));        
        $car->description = $request->get('description');        
        $car->save();
        return redirect('car/index')->with('success', 'Car has been successfully added');
    }


    public function edit($id)
    {
        $car = Car::find($id);
        return view('front.mongodb-crud-car.edit',compact('car','id'));
    }

    public function update(Request $request, $id)
    {
        $car= Car::find($id);
        $car->company = $request->get('company');
        $car->model = $request->get('model');
        $car->status = $request->get('status');        
        $car->slug = Str::slug($request->get('company').'-'.$request->get('model'));        
        $car->description = $request->get('description');        
        $car->save();
        return redirect('car/index')->with('success', 'Car has been successfully update');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('car/index')->with('success','Car has been  deleted');
    }

}
