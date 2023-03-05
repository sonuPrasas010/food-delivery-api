<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFoodMainCategoryRequest;
use App\Models\FoodMainCategory;
use App\Http\Requests\UpdateFoodMainCategoryRequest;
use DateTime;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class FoodMainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = FoodMainCategory::all();

        return view('dashboard.categories.index',[
            'categories' =>  $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoodMainCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodMainCategoryRequest $request)
    {


        $foodMainCategory  = new FoodMainCategory();
        $foodMainCategory->category_name = $request->name;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = date_timestamp_get(Date::now()) . $file->getClientOriginalName();
            $file->move('images/category', $newName);
            $foodMainCategory->image = 'images/category/'.$newName;
        }
        if ($request->hasFile("bg_image")) {
            $file = $request->file('bg_image');
            $newName = date_timestamp_get(Date::now()) . $file->getClientOriginalName();
            $file->move('images/category', $newName);
            $foodMainCategory->bg_image = 'images/category/'.$newName;
        }

        $foodMainCategory->save();
        dd("successfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodMainCategory  $foodMainCategory
     * @return \Illuminate\Http\Response
     */
    public function show(FoodMainCategory $foodMainCategory)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodMainCategory  $foodMainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $category = FoodMainCategory::findOrFail($id);

        return view('dashboard.categories.edit',
        ['category'=>$category]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodMainCategoryRequest  $request
     * @param  \App\Models\FoodMainCategory  $foodMainCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {


        $request->validate( [
            // 'name'=> "required|unique:food_main_categories,category_name,category_id,".$id,
            'image' => 'sometimes|image',
            'bg_image'=>"sometimes|image",

         ]);

        $foodMainCategory  =  FoodMainCategory::findOrFail($id);
        $foodMainCategory->category_name = $request->name;
        $foodMainCategory->short_desc = $request->short_desc;
        $foodMainCategory->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = date_timestamp_get(Date::now()) . $file->getClientOriginalName();
            $file->move('images/category', $newName);
            $foodMainCategory->image = 'images/category/'.$newName;
        }
        if ($request->hasFile("bg_image")) {
            $file = $request->file('bg_image');
            $newName = date_timestamp_get(Date::now()) . $file->getClientOriginalName();
            $file->move('images/category', $newName);
            $foodMainCategory->bg_image = 'images/category/'.$newName;
        }
        $foodMainCategory->save();
        toast('successfully updated','success');
      return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodMainCategory  $foodMainCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id, Request $request)
    {

        $foodMainCategory = FoodMainCategory::findOrFail($id);
        $foodMainCategory->delete();

       toast('deleted successfully','success');
       return redirect()->back();
    }
}
