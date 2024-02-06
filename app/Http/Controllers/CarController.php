<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\Common;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use PhpParser\Node\Stmt\Case_;

class CarController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars =  Car::get();

        return view('Admin.cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','categoryName')->get();
        return view('Admin.addcar',compact('categories'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $message= $this->message();
        $data = $request->validate([
            'cartitle'=> 'required|string|max:255',
            'content'=> 'required|string|max:255',
            'luggage'=> 'integer|max:11',
            'doors'=> '',
            'passengers'=> 'integer|max:20',
            'price'=> 'required|numeric|min:0|not_in:0',
            'category_id'=>'required|string',
            'image'=> 'required|mimes:png,jpg,jpeg|max:2048'
        ], );

        $data['active'] = isset($request->active);

        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image']= $fileName;

       Car::create($data);

    // return 'data inserted successfully';
    return redirect('Admin.cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car= Car::findOrFail($id);

        return view('single', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car= Car::findOrFail($id);
        $categories = Category::select('id','categoryName')->get();
        return view('admin.editcar', compact('car','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {

        $data = $request->validate([
            'cartitle'=> 'required|string|max:255',
            'content'=> 'required|string|max:255',
            'luggage'=> 'integer|max:10',
            'doors'=> 'integer|max:8',
            'passengers'=> 'integer|max:20',
            'price'=> 'required|numeric|min:0|not_in:0',
            'image'=> 'sometimes|mimes:png,jpg,jpeg|max:2048',

        ]);
        $data['active'] = isset($request->active);
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image']= $fileName;
        }
        Car::where('id', $id)->update($data);
        return redirect('Admin.cars');
        //  return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

       Car::where('id', $id)->delete();

        return redirect()->route('Admin.cars');
}


}
