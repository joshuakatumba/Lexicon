<?php

namespace App\Http\Controllers\admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $partner = Partner::all();   
        return view('backend.partner.index',compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('backend.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Partner $partner)
    {
        //

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'url' => 'required',
            'status' => 'required',
        ]);
      

        # Img upload  in database
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $url = $image->move('uploads/partner/', $filename);
            $partner->image = $url;
            $partner->save();
        }

        $partner->title = $request->title;
        $partner->url = $request->url;
        $partner->status = $request->status;
        $partner->save();

        $notification = array(
            'message' => 'Partner Created successfully',
            'alert-type' => 'success',
            'data' => 'Success',
        );
        return redirect()->route('partner.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        //
        return view('backend.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        //

        $partner->title = $request->title;
        $partner->url = $request->url;
        $partner->status = $request->status;

        # IF You change image
        if ($request->hasFile('image')) {

            # Old Image Delete
            if (File::exists($partner->image)) {
                File::delete($partner->image);
            }

            # Image Upload
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $url = $image->move('uploads/partner/', $filename);
            $partner->image = $url;
        }

        $partner->save();


        $notification = array(
            'message' => 'Partner Update successfully',
            'alert-type' => 'success',
            'data' => 'Update',
        );
        return redirect()->route('partner.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        
        # old img delete
        if (File::exists($partner->image)) {
            File::delete($partner->image);
        }

        $partner->destroy($partner->id);

        $notification = array(
            'message' => 'Partner Deleted successfully',
            'alert-type' => 'error',
            'data' => 'Deleted',
        );
        return redirect()->route('partner.index')->with($notification);
       
    }
}
