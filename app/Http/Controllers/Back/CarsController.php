<?php

namespace App\Http\Controllers\Back;

use App\Models\CarBrand;
use App\Models\CarDetails;
use App\Models\Cars;
use App\Models\DriverStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    public function index()
    {
        $items = Cars::with('withDriverStatus', 'carDetail')->orderBy('created_at', 'DESC')->get();

        return view('back.pages.cars', compact('items'));
    }

    public function create()
    {
        $driverstatus = DriverStatus::orderBy('created_at', 'DESC')->get();
        $brands = CarBrand::orderBy('created_at','DESC')->get();
        return view('back.cars.create', compact('driverstatus','brands'));
    }

    public function store(Request $request, $locale)
    {

        $img = imageUpload($request->img, 'car', [400, 600]);
        $car = new Cars();
        $car->fill($request->only('name', 'price', 'brand', 'driver_status_id'))->save();
        $carDetail = new CarDetails();
        $carDetail->fill(array_merge(['car_id' => $car->id, 'img' => $img],
            $request->only('year', 'gearbox', 'engine', 'freezer', 'door', 'person', 'seat', 'baggage')))->save();

        return redirect()->route('admin.cars.index', $locale)->with('success', 'Added succesfully!');
    }

    public function edit($locale, $id)
    {
        $driverstatus = DriverStatus::orderBy('created_at', 'DESC')->get();
        $brands = CarBrand::orderBy('created_at','DESC')->get();
        $item = Cars::findOrFail($id);
        return view('back.cars.edit', compact('item', 'locale', 'driverstatus','brands'));
    }

    public function update(Request $request, $locale, $id)
    {
        $img = imageUpload($request->img, 'car', [400, 600]);
        $car = Cars::findOrFail($id);
        $car->fill($request->only('name', 'price', 'brand', 'driver_status_id'))->save();
        $carDetail = CarDetails::where('car_id',$id)->first();
        $request->hasFile('img')? $arr = ['car_id' => $car->id, 'img' => $img] : $arr = ['car_id' => $car->id];
        $carDetail->fill(array_merge($arr,
            $request->only('year', 'gearbox', 'engine', 'freezer', 'door', 'person', 'seat', 'baggage')))->save();

        return redirect()->route('admin.cars.index', $locale)->with('success', 'Update succesfully!');
    }

    public function destroy($locale, $id)
    {
        $item = Cars::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.cars.index', $locale)->with('success', 'Delete succesfully!');

    }
}
