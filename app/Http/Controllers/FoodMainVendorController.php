<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFoodMainVendorRequest;
use App\Http\Requests\UpdateFoodMainVendorRequest;
use App\Models\Food;
use App\Models\FoodMainCategory;
use App\Models\FooodMainVendor;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class FoodMainVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = FooodMainVendor::all();
        return view("dashboard.suppliers.index",[
            'vendors'=>$vendors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.suppliers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodMainVendorRequest $request)
    {



        $category = FoodMainCategory::where("category_name", $request->selected_category)->first();
        $vendor = new FooodMainVendor();
        $vendor->vendor_name = $request->vendor_name;
        $vendor->vendor_description = $request->vendor_description;
        $vendor->vendor_email = $request->vendor_email;
        $vendor->vendor_phone = $request->vendor_phone;
        $vendor->vendor_address = $request->vendor_address;
        $vendor->food_main_category()->associate($category->category_id);
        if($request->hasFile('vendor_image')){
            $file = $request->file('vendor_image');
            $newName = time().$file->getClientOriginalName();
            $file = $file->move("./images/vendor/" ,$newName);
            $vendor->vendor_image = '/images/vendor/'.$newName;
        }

        if($request->hasFile('vendor_image_bg')){
            $file = $request->file('vendor_image_bg');
            $newName = time().$file->getClientOriginalName();
            $file = $file->move("./images/vendor/" ,$newName);
            $vendor->vendor_image_bg = '/images/vendor/'.$newName;
        }

        $vendor->save();
        toast('new vendor created successfully','success');
        return redirect(route('supplier.index'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $vendor = FooodMainVendor::findOrFail($id);
        return view('dashboard.suppliers.edit',compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodMainVendorRequest $request, $id)
    {


        $category = FoodMainCategory::where("category_name", $request->selected_category)->first();
        $vendor =  FooodMainVendor::findOrFail($id);
        $vendor->vendor_name = $request->vendor_name;
        $vendor->vendor_description = $request->vendor_description;
        $vendor->vendor_email = $request->vendor_email;
        $vendor->vendor_phone = $request->vendor_phone;
        $vendor->status = $request->status;
        $vendor->vendor_address = $request->vendor_address;
        $vendor->food_main_category()->associate($category->category_id);
        if($request->hasFile('vendor_image')){
            $file = $request->file('vendor_image');
            $newName = time().$file->getClientOriginalName();
            $file = $file->move("./images/vendor/" ,$newName);
            $vendor->vendor_image = '/images/vendor/'.$newName;
        }

        if($request->hasFile('vendor_image_bg')){
            $file = $request->file('vendor_image_bg');
            $newName = time().$file->getClientOriginalName();
            $file = $file->move("./images/vendor/" ,$newName);
            $vendor->vendor_image_bg = '/images/vendor/'.$newName;
        }

        $vendor->save();
        toast('new vendor updated successfully','success');
        return redirect(route('supplier.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $foodMainVendor = FooodMainVendor::findOrFail($id);
        $foodMainVendor->delete();

        toast('successfully deleted','error');
        return redirect()->back();

    }

    public function searchFood(Request $request, int $vendor_id, string $food_name){
        $foods= Food::where("vendor_id", $vendor_id)->where("food_name","like", "%$food_name%" )->take(5)->get();
        return $foods;
    }
}
