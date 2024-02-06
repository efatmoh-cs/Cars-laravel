<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = Category::get();

        return view('Admin.categories', compact('categorys'));
        // return view('Admin.categories');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'categoryName'=> 'required|string|max:255',

        ]);




       Category::create($data);
//  return 'data inserted successfully';
    return redirect('Admin.categories');
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
        $category= Category::findOrFail($id);

        return view('admin.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'categoryName'=> 'required|string|max:255',

        ]);


        Category::where('id', $id)->update($data);
        return
        redirect('Admin.categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Category::where('id', $id)->forceDelete();
        return redirect('Admin.categories');}
    }

