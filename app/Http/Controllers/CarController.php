<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{

    public function index(Request $request)
    {
        if (empty($request->get('search'))) {
            $cars = Car::all();
        } else {
            // Uso de scopes
            // https://www.youtube.com/watch?v=lsFXi1ILD2Y
            $cars = Car::searchitem($request->get('search'))->get();
        }
        return view('front.crud-mongodb.index', compact('cars'));
    }

    public function create()
    {
        return view('front.crud-mongodb.create');
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
        return redirect('crud-with-mongodb')->with('success', 'Car has been successfully added');
    }


    public function edit($id)
    {
        $car = Car::find($id);
        return view('front.crud-mongodb.edit', compact('car', 'id'));
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
        return redirect('crud-with-mongodb')->with('success', 'Car has been successfully update');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('crud-with-mongodb')->with('success', 'Car has been  deleted');
    }
}
