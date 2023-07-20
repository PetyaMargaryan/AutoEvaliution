<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $brandsList;

    public function __construct()
    {
        $brands = Brand::pluck('brand')->toArray();
        $this->brandsList = [];
        foreach ($brands as $brand) {
            $this->brandsList[$brand[0]][] = $brand;
        }
    }

    public function index($selectedBrand = null) {
        $brandsList = $this->brandsList;
        $cars = Car::query();

        if ($selectedBrand) {
            $cars->where('brand', $selectedBrand);
        }

        $cars = $cars->get();

        return view('pages.home', compact('brandsList', 'selectedBrand', 'cars'));
    }

    public function cars($id) {
        $brandsList = $this->brandsList;
        $car = Car::find($id);
        $cars = Car::where('id', '!=', $id)->get();
        $selectedBrand = $car->brand;

        return view('pages.cars', compact('brandsList', 'selectedBrand', 'cars', 'car'));
    }

    public function adminPage() {
        $brands = Brand::pluck('brand')->toArray();
        $cars = Car::get();
        return view('admin.admin', compact('brands', 'cars'));
    }

    public function adminAdd(Request $request) {
        $data = $request->input();
        $data['image'] = $this->saveImage($request->file('main-image'));
        $data['small_images'] = [
            $this->saveImage($request->file('small-image-1')),
            $this->saveImage($request->file('small-image-2'))
        ];
        unset($data['_token']);
        Car::create($data);

        return redirect()->back();
    }

    public function saveImage($file) {
        $imageName = time().uniqid().'.'.$file->extension();
        $file->move(public_path('storage/cars'), $imageName);
        return url("storage/cars/$imageName");
    }

    public function store(Request $request)
    {
        dd($request->input());
        dd($request->input());
        dd($request->input());
    }

}
