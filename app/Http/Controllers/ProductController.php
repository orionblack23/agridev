<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex()
    {
        return view('shop.index');
    }

    public function getAbout()
    {
        return view('shop.about');
    }

    public function getContact()
    {
        return view('shop.contact');
    }

    public function getGallery()
    {
        return view('shop.gallery');
    }

    public function getShopIndex()
    {
        $products = ProductCategory::all();
        return view('shop.boutique', ['products' => $products]);
    }

    public function getShoppingView($id)
    {
        $products = Product::where('categories_id','=', $id)->paginate(4);
        return view('shop.products', ['products' => $products]);
    }

    public function getProductDetails($shortName)
    {
        $products = Product::where('shortName', $shortName)->firstOrFail();
        return view('shop.product-details', ['products' => $products]);
    }

    public function postStore(Request $request)
    {
        Cart::add($request->id, $request->name, $request->qty, $request->price)
            ->associate('App\Product');

        return redirect()->route('product.shoppingCart')->with('success_message', 'Item was added to your cart!');
    }

    public function getShoppingCart()
    {
        return view('shop.shopping-cart');
    }

    public function getRemove($id)
    {
        Cart::remove($id);
        return back()->with('success_message', 'Item as been removed!');
    }

    public function getUpdate(Request $request, $id)
    {
        Cart::update($id, $request->qty);

        return response()->json(['success' => true]);
    }

    public function getCheckOut()
    {
        return view('shop.checkOut');
    }
}
