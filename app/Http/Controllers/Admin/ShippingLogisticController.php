<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingLogistic;
use Image;
use File;

class ShippingLogisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = ShippingLogistic::latest()->get();
        return view('admin.shipping-logistics.index',compact('images'))->with('no',1);
    }


    public function store(Request $request)
    {

        $input = $request->all();
        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage = Image::make($file);
            $profileimage = Image::make($file)->resize(334, 260);
            $profileimage->save(public_path('uploads/shipping-logistics/'.$path),100);
            $input['image'] = $path;

        }

        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/shipping-logistics/popup/'.$path),100);
            $input['image_popup'] = $path;

        }

        ShippingLogistic::create($input);
        return redirect()->route('admin.shipping-logistics.index')->with('success','Image Uploaded successfully.');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shipping-logistics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shipping_logistic = ShippingLogistic::where('id',$id)->first();

        return view('admin.shipping-logistics.show', compact('shipping_logistic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = ShippingLogistic::where('id',$id)->first();
        return view('admin.shipping-logistics.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial = ShippingLogistic::where('id',$id)->first();
        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage = Image::make($file);
            $profileimage = Image::make($file)->resize(300, 260);
            $profileimage->save(public_path('uploads/shipping-logistics/'.$path),100);
            $testimonial->image = $path;

        }

        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/shipping-logistics/popup/'.$path),100);
            $testimonial->image_popup = $path;

        }

        $testimonial->title = $request->title;
        $testimonial->name = $request->name;

        $testimonial->description = $request->description;

        if ($request->has('status')) {

            $testimonial->status = $request->status;

        }else{

            $testimonial->status = "off";
        }
        
        $testimonial->save();

        return redirect()->route('admin.shipping-logistics.index')->with(['success'=>'ShippingLogistic Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteimage(ShippingLogistic $testimonial)
    {
        $image = public_path('uploads/shipping-logistics/'.$testimonial->image);
        File::delete($image);

        $image_popup = public_path('uploads/shipping-logistics/popup/'.$testimonial->image);
        File::delete($image_popup);
        $testimonial->update(['image' => null, 'image_popup' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function destroy($id)
    {
        ShippingLogistic::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    
    }
}
