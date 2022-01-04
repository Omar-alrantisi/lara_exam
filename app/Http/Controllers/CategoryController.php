<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exam;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('dashboard.manage_category',compact('categories'));
    }

    public function public_index()
    {
        $categories=Category::all();
        return view('public_site.category_cards',compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.manage_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|max:250',
            'image' => 'required|mimes:jpeg,png,gif,jpg',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->image;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/category_image/', $new_file);
        }
        Category::create([
            "name" => $request->name,
            "image" => 'storage/category_image/' . $new_file

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,$id)
    {
        $exams = Exam::all();
        $singleCategories = Category::find($id);
        //  $categories ->owner;
        // redirect('companies')->back();
        return view('public_site.exam_cards', compact('exams','singleCategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('dashboard.updates.category_update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $file = $request->image;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/category_image/', $new_file);
            $category->image = 'storage/category_image/' . $new_file;
        }
        $category->name = $request->name;



        $category->update();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */


    public function destroy( $request)
    {
        $category=Category::find($request);
        $category->delete();


        return redirect()->route('category.index');
    }
}
