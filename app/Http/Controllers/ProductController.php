<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index()
    {
        $product = product::all();
        return view("product", ["result" => $product]);
    }


    public function show($id)
    {
        $product = product::findOrFail($id);
        return view("product.show", ["result" => $product]);
    }


    public function delete($id)
    {
        $product = product::findOrFail($id);
        if (File::exists(public_path("/img/product/" . $product->cate_image))) {
            File::delete(public_path("/img/product/" . $product->cate_image));
        }
        $product->delete();
        return redirect()->route("home")->with("message3",__('language.Deleted Successfully'));
    }


    public function create()
    {
        return view("product.create");
    }


    public function store(Request $request)
    {

        $request->validate([
            'cate_image' => ['required', 'image', 'max:2048', 'mimes:jpeg,png,jpg,webp'],
            'id' => ['required', 'unique:products', 'max:20'],
            'title_en' => ['required', 'max:255'],
            'title_ar' => ['required', 'max:255'],
            'description_en' => ['required', 'max:255'],
            'description_ar' => ['required', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'quantity' => ['required', 'integer', 'min:0'],
        ]);

        $imageName = "";
        if ($request->hasFile("cate_image")) {
            $image = $request->cate_image;
            $imageName = rand(1, 1000) . "_" . time() . "." . $image->extension();                       //345_1234567.jpeg
            $image->move(public_path("/img/product"), $imageName);
        }

        product::create([
            "id" => $request->id,
            "cate_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "price"          => $request->price,
            "quantity"       => $request->quantity,
        ]);

        return redirect()->route('home')->with("message3", __('language.Created Successfully'));
    }


    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view("product.edit", ["result" => $product]);
    }


    public function update(Request $request)
    {
        $old_id = $request->old_id;
        $product = product::findOrFail($old_id);


        $request->validate([
            'cate_image' => ['image', 'max:2048', 'mimes:jpeg,png,jpg,webp'],
            'id' =>  [
                'required',
                Rule::unique('products')->ignore($old_id),
            ],
            'title_en' => ['required', 'max:255'],
            'title_ar' => ['required', 'max:255'],
            'description_en' => ['required', 'max:255'],
            'description_ar' => ['required', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'quantity' => ['required', 'integer', 'min:0'],
        ]);

        $imageName = "";
        if ($request->hasFile("cate_image")) {
            if (File::exists(public_path("/img/product/" . $product->cate_image))) {
                File::delete(public_path("/img/product/" . $product->cate_image));
            }
            $image = $request->cate_image;
            $imageName = rand(1, 1000) . "_" . time() . "." . $image->extension();                       //345_1234567.jpeg
            $image->move(public_path("/img/product"), $imageName);
        } else {
            $imageName = $product->cate_image;
        }

        $product->update([
            "id" => $request->id,
            "cate_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "price" => $request->price,
            "quantity" => $request->quantity,
        ]);

        return redirect()->route('home')->with("message3", __('language.Updated Successfully'));
    }
}
