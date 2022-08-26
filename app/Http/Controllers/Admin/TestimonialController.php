<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Image;
use File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Testimonial::latest()->get();
        return view('admin.testimonial.index',compact('images'))->with('no',1);
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
            $profileimage->save(public_path('uploads/testimonial/'.$path),100);
            $input['image'] = $path;

        }

        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/testimonial/popup/'.$path),100);
            $input['image_popup'] = $path;

        }

        Testimonial::create($input);
        return redirect()->route('admin.testimonial.index')->with('success','Image Uploaded successfully.');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
        $testimonial = Testimonial::where('id',$id)->first();

        return view('admin.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage = Image::make($file);
            $profileimage = Image::make($file)->resize(300, 260);
            $profileimage->save(public_path('uploads/testimonial/'.$path),100);
            $testimonial->image = $path;

        }

        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/testimonial/popup/'.$path),100);
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

        return redirect()->route('admin.testimonial.index')->with(['success'=>'Testimonial Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteimage(Testimonial $testimonial)
    {
        $image = public_path('uploads/testimonial/'.$testimonial->image);
        File::delete($image);

        $image_popup = public_path('uploads/testimonial/popup/'.$testimonial->image);
        File::delete($image_popup);
        $testimonial->update(['image' => null, 'image_popup' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function destroy($id)
    {
        Testimonial::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    
    }
}
