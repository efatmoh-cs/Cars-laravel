<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\Common;
use Illuminate\Http\RedirectResponse;

class TestimonailController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();

        return view('Admin.testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

            return view('Admin.addtestimonials');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $data = $request->validate([
            'name'=> 'required|string|max:255',
            'position' => 'required|string|max:255',
            'content'=> 'required|string|max:255',
            'image'=> 'required|mimes:png,jpg,jpeg|max:2048',

        ]);
        $data['published'] = isset($request->published);
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image']= $fileName;

       Testimonial::create($data);

    return redirect('Admin.testimonials');
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
    public function edit(string $id)
    {
        $testimonial= Testimonial::findOrFail($id);

        return view('admin.edittestimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $data = $request->validate([
            'name'=> 'required|string|max:255',
            'position' => 'required|string|max:255',
            'content'=> 'required|string|max:255',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048'
        ]);
        $data['published'] = isset($request->published);
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image']= $fileName;
        }
        Testimonial::where('id', $id)->update($data);
        return redirect('Admin.testimonials');
        //  return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        Testimonial::where('id', $id)->delete();
        return redirect()->route('Admin.testimonials');
        // Testimonial::where('id', $id)->forceDelete();
        // return redirect('Admin.testimonials');

}
}
