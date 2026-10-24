<?php



namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\product;
use Carbon\CarbonTimeZone;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{



    public function welcome()
    {
        $categories = DB::table("categories")->select("id", "cat_image", "title_" . app()->getLocale() . " as title", "description_" . app()->getLocale() . " as description")->get();

        $products = DB::table("products")->select("id", "cate_image", "price", "title_" . app()->getLocale() . " as title", "description_" . app()->getLocale() . " as description")->get();

        return view('welcome', [
            "categories" => $categories,
            "product" => $products
        ]);
    }


    public function shop()
    {
        $category = DB::table("categories")->select("id", "cat_image", "title_" . app()->getLocale() . " as title", "description_" . app()->getLocale() . " as description")->get();

        $product = DB::table("products")->select("id", "cate_image", "price", "title_" . app()->getLocale() . " as title", "description_" . app()->getLocale() . " as description")->get();

        $category = Category::all();
        $products = product::all();

        return view('frontend.shop', ["category" => $category, "product" => $product]);
    }



    public function productDetails($id)
    {
        $product = product::findOrFail($id);
        $category = Category::all();
        return view('frontend.product', ["product" => $product, "category" => $category]);
    }





    public function cartIndex()
    {
        $categories = DB::table("categories")->select("id", "cat_image", "title_" . app()->getLocale() . " as title", "description_" . app()->getLocale() . " as description")->get();
        $cartItems = Cart::with('product')->get();

        $total = 0;
        foreach ($cartItems as $item) {
            if ($item->product) {
                $total += $item->product->price * $item->quantity;
            }
        }

        return view('frontend.cart', compact('cartItems', 'total' , 'categories'));
    }




    public function addToCart(Request $request)
    {
        $productId = $request->product_id;

        $quantity = $request->quantity;

        $product = Product::findOrFail($productId);

        $cartItem = Cart::where('product_id', $productId)->first();


        if ($cartItem) {
            $cartItem->update([

                'quantity' => $cartItem->quantity + $quantity
            ]);
        } else {
            Cart::create([
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->route('cart')->with('message', 'Product added to cart successfully');
    }


    public function removeFromCart($id)
    {
        $cartItem = Cart::find($id);
        if ($cartItem) {
            $cartItem->delete();
        }
        return redirect()->back()->with('message', 'Item removed from cart successfully');
    }


    
}
