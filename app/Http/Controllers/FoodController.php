<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use App\Models\FoodCategory;
use App\Models\FoodMainCategory;
use App\Models\FooodMainVendor;
use Illuminate\Support\Facades\Date;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = FoodMainCategory::all();
        $vendors = FooodMainVendor::all();
        $foods =  Food::with('vendor')->get();


        return response()->view("dashboard.products.index", [
            'categories' => $categories,
            'vendors' => $vendors,
            'foods' => $foods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = FoodMainCategory::all();
        $vendors = FooodMainVendor::all();
        return response()->view("dashboard.products.add", [
            'categories' => $categories,
            'vendors' => $vendors,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodRequest $request)
    {
        $food = new Food();
        $food->food_name = $request->name;
        $food->slug = $request->slug;
        $food->short_desc = $request->short_description;
        $food->long_desc = $request->long_description;
        $food->price = $request->price;
        $food->discount = $request->discount;
        $food->vendor_id = $request->vendor;

        if ($request->hasFile('food_image')) {
            $file = $request->file('food_image');
            $newName = date_timestamp_get(Date::now()) . $file->getClientOriginalName();
            $file->move('images', $newName);
            $food->image_url = 'images'.$newName;
        }

        if ($request->hasFile('food_image_small')) {
            $file = $request->file('food_image_small');
            $newName = date_timestamp_get(Date::now()) . $file->getClientOriginalName();
            $file->move('images', $newName);
            $food->small_image_url = 'images'.$newName;
        }       
        $food->save();
        $food->categories()->attach($request->selected_category);
        
    
        toast("added successfully", "success");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $food = Food::findOrFail($id);
      return request()->view('dashboard.products.show',[
        'food'=>$food
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $food = Food::findOrFail($id);

        $categories = FoodMainCategory::all();
        $vendors = FooodMainVendor::all();

        return view("dashboard.products.edit", [
            'food' => $food, 'categories' => $categories,
            'vendors' => $vendors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodRequest  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodRequest $request, int $id)
    {
        $food = Food::findOrFail($id);
        $food->food_name = trim($request->name);
        $food->slug = trim($request->slug);
        $food->short_desc = trim($request->short_description);
        $food->long_desc = trim($request->long_description);
        $food->price = $request->price;
        $food->discount = $request->discount;
        $food->vendor_id = $request->vendor;
        $food->update();
        toast("food updated successfully","success");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $food = Food::findOrFail($id);
        if ($food->delete()) {
            toast("successfully deleted $food->food_name", "warning");
            return redirect()->back();
        }
        toast("failed to delete $food->food_name", "error");
        return redirect()->back();
    }
}
