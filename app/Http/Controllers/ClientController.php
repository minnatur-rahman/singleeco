<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShippingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function CategoryPage($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('product_category_id', $id)->latest()->get();
        return view('user_template.category', compact('category', 'products'));
    }

    public function SingleProduct($id)
    {
        $product = Product::findOrFail($id);
        $subcat_id = Product::where('id',$id)->value('product_subcategory_id');
        $related_product = Product::where('product_subcategory_id', $subcat_id)->latest()->get();
        return view('user_template.product', compact('product', 'related_product'));
    }

    public function AddToCart()
    {
        $user_id = Auth::id();
        $cart_items = Cart::where('user_id',$user_id)->get();
        return view('user_template.addtocart', compact('cart_items'));
    }

    public function AddProductToCart(Request $request)
    {
        $product_price = $request->price;
        $quantity = $request->quantity;
        $price = $product_price * $quantity;
        Cart::insert([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
            'quantity' => $request->quantity,
            'price' => $price,
        ]);

        return redirect()->route('addtocart')->with('message', 'Your Item Add To Cart Successfully !');
    }

    public function RemoveCartItem($id)
    {
        Cart::findOrFail($id)->delete();

        return redirect()->route('addtocart')->with('message', 'Your Item Remove Form Cart Successfully !');
    }

    public function GetShippingAddress()
    {
        return view('user_template.shippingaddress');
    }

    public function addshippingaddress(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|unique:shipping_infos',
            'city_name' => 'required',
            'postal_code' => 'required',
        ]);

        ShippingInfo::insert([
            'user_id' => Auth::id(),
            'phone_number' => $request->phone_number,
            'city_name' => $request->city_name,
            'postal_code' => $request->postal_code,
        ]);

        return redirect()->route('checkout');
    }

    public function Checkout()
    {
        $userid = Auth::id();
        $cart_items = Cart::where('user_id',$userid)->get();
        $shipping_address = ShippingInfo::where('user_id',$userid)->first();
        return view('user_template.checkout', compact('cart_items','shipping_address'));
    }

    public function UserProfile()
    {
        return view('user_template.userprofile');
    }

    public function PendingOrders()
    {
        return view('user_template.pendingorders');
    }

    public function History()
    {
        return view('user_template.history');
    }

    public function NewRelease()
    {
        return view('user_template.newrelease');
    }

    public function TodaysDeal()
    {
        return view('user_template.todaysdeal');
    }

    public function CustomerService()
    {
        return view('user_template.customerservice');
    }
}
