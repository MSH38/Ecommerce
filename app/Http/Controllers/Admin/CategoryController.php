<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryFormRequest $request)
    {
        $validatedData = $request->validated();
        $category = new Category;
        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['name']);
        $category->description = $validatedData['description'];
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }
        $category->meta_data = $validatedData['meta_data'];
        $category->meta_keywords = $validatedData['meta_keywords'];
        $category->meta_description = $validatedData['meta_description'];
        $category->save();
        return redirect('admin/category');

    }
    // public function store(Request $request, Category $category)
    // {

        // $validator =  Validator::make($request->all(), [
        //     'name' => ['required', 'string'],
        //     'slug'  => ['required', 'string'],
        //     'description' => ['required'],
        //     'image' => ['nullable', 'mimes:jpg,jpeg,png'],
        //     'meta_data' => ['required', 'string'],
        //     'meta_keywords' => ['required', 'string'],
        //     'meta_description' => ['required', 'string'],
        // ]);


        //  $asd = $request->all() ;

        // if (isset($asd["image"])) {
        //     $request->file('image')->store('categories');
        //     $asd["image"] = $request->file('image')->hashName();
        // }

        // $category->create($request->all());

        // return redirect('admin/category');
    // }
}
