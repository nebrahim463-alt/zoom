<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Symfony\Contracts\Service\Attribute\Required;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view("categories", ["result" => $category]);
    }



    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view("category.show", ["result" => $category]);
    }


    public function delete($id)
    {
        $category = Category::findOrFail($id);
        if (File::exists(public_path("/img/category/" . $category->cat_image))) {
                File::delete(public_path("/img/category/" . $category->cat_image));
            }
        $category->delete();

        return redirect()->route("home")->with("message",  __('language.Deleted Successfully'));
    }


    public function create()
    {
        return view("category.create");
    }


    public function store(Request $request)
    {

        $request->validate([
            'cat_image' => [ 'image', 'max:2048', 'mimes:jpeg'],
            'id' => ['required', 'unique:categories', 'max:20'],
            'title_en' => ['required', 'max:255'],
            'title_ar' => ['required', 'max:255'],
            'description_en' => ['required', 'max:255'],
            'description_ar' => ['required', 'max:255'],
        ]);

        $imageName = "";
        if ($request->hasFile("cat_image")) {
            $image = $request->cat_image;
            $imageName = rand(1, 10000) . "_" . time() . "." . $image->extension();
            $image->move(public_path('/img/category'), $imageName);
        }

        Category::create([
            "id" => $request->id,
            "cat_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
        ]);

        return redirect()->route("home")->with("message",  __('language.Created Successfully'));
    }



    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view("category.edit", ["result" => $category]);
    }


    public function update(Request $request)
    {
        $old_id = $request->old_id;
        $category = Category::findOrFail($old_id);

         $request->validate([
            'cat_image' => [ 'image', 'max:2048', 'mimes:jpeg'],
            'id' => [
            'required',
            Rule::unique('categories')->ignore($old_id)
            ],
            'title_en' => ['required', 'max:255'],
            'title_ar' => ['required', 'max:255'],
            'description_en' => ['required', 'max:255'],
            'description_ar' => ['required', 'max:255'],
        ]);

        $imageName = "";
        if ($request->hasFile("cat_image")) {
            if (File::exists(public_path("/img/category/" . $category->cat_image))) {
                File::delete(public_path("/img/category/" . $category->cat_image));
            }
            $image = $request->cat_image;
            $imageName = rand(1, 10000) . "_" . time() . "." . $image->extension();
            $image->move(public_path('/img/category'), $imageName);
        } else {
            $imageName = $category->cat_image;
        }

        $category->update([
            "id" => $request->id,
            "cat_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
        ]);

        return redirect()->route('home')->with("message", __('language.Updated Successfully'));
    }
}
