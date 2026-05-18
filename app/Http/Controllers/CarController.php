<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ADMIN - LIST DATA MOBIL
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $cars = Car::latest()->get();

        return view('admin.cars.index', compact('cars'));
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN - FORM TAMBAH
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('admin.cars.create');
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN - SIMPAN DATA
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'price_hour' => 'required|numeric',
            'price_day' => 'required|numeric',
            'price_month' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,avif,webp|max:2048',
        ]);

        // upload gambar
        $image = $request->file('image')->store('cars', 'public');

        // simpan data
        Car::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'price_hour' => $request->price_hour,
            'price_day' => $request->price_day,
            'price_month' => $request->price_month,
            'description' => $request->description,
            'image' => $image,
        ]);

        return redirect('/admin/cars')
            ->with('success', 'Mobil berhasil ditambahkan');
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN - FORM EDIT
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $car = Car::findOrFail($id);

        return view('admin.cars.edit', compact('car'));
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN - UPDATE
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'price_hour' => 'required|numeric',
            'price_day' => 'required|numeric',
            'price_month' => 'required|numeric',
            'description' => 'required',
        ]);

        $car = Car::findOrFail($id);

        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'price_hour' => $request->price_hour,
            'price_day' => $request->price_day,
            'price_month' => $request->price_month,
            'description' => $request->description,
        ];

        // update gambar jika ada
        if ($request->hasFile('image')) {

            $data['image'] = $request
                ->file('image')
                ->store('cars', 'public');
        }

        $car->update($data);

        return redirect('/admin/cars')
            ->with('success', 'Mobil berhasil diupdate');
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN - DELETE
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        Car::findOrFail($id)->delete();

        return back()->with('success', 'Mobil berhasil dihapus');
    }

    /*
    |--------------------------------------------------------------------------
    | USER - HALAMAN CARS
    |--------------------------------------------------------------------------
    */
    public function userCars()
    {
        $cars = Car::latest()->get();

        return view('users.cars', compact('cars'));
    }

    /*
    |--------------------------------------------------------------------------
    | USER - HALAMAN PRICING
    |--------------------------------------------------------------------------
    */
    public function pricing()
    {
        $cars = Car::latest()->get();

        return view('users.pricing', compact('cars'));
    }
    public function show($id)
    {
        $car = Car::findOrFail($id);

        return view('admin.cars.show', compact('car'));
    }
    }