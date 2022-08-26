<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;
use Image;
use File;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = service::latest()->get();
        return view('admin.services.index',compact('images'))->with('no',1);
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
            $profileimage->save(public_path('uploads/services/'.$path),100);
            $input['image'] = $path;

        }

        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/services/popup/'.$path),100);
            $input['image_popup'] = $path;

        }

        service::create($input);
        return redirect()->route('admin.services.index')->with('success','Image Uploaded successfully.');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
        $service = service::where('id',$id)->first();

        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = service::where('id',$id)->first();
        return view('admin.services.edit', compact('service'));
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
        $service = service::where('id',$id)->first();
        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            // $profileimage = Image::make($file);
            $profileimage = Image::make($file)->resize(300, 260);
            $profileimage->save(public_path('uploads/services/'.$path),100);
            $service->image = $path;

        }

        if ($request->has('image')) {

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = time().$name;
            $profileimage = Image::make($file);
            $profileimage->save(public_path('uploads/services/popup/'.$path),100);
            $service->image_popup = $path;

        }

        $service->title = $request->title;
        $service->name = $request->name;

        $service->description = $request->description;

        if ($request->has('status')) {

            $service->status = $request->status;

        }else{

            $service->status = "off";
        }
        
        $service->save();

        return redirect()->route('admin.services.index')->with(['success'=>'service Updated Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteimage(service $service)
    {
        $image = public_path('uploads/services/'.$service->image);
        File::delete($image);

        $image_popup = public_path('uploads/services/popup/'.$service->image);
        File::delete($image_popup);
        $service->update(['image' => null, 'image_popup' => null]);

        return response()->json(["success"=>'deleted']);
    }

    public function destroy($id)
    {
        service::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    
    }
}
