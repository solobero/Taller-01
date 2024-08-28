<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = "Products - Online Store";
        $viewData['subtitle'] = "List of products";
        $viewData['products'] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product->getName() . " IMEC - Online Store";
        $viewData['subtitle'] = $product->getName() . " - Product information";
        $viewData['product'] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = "Create product";
        return view('product.create')->with("viewData", $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        //mover la validación al modelo como funcion ó usar laravel form request y luego usar aqui
        //Product::validate($request)
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => "string",
            'image' => 'image|mimes:jpg,jpeg,png|max:2048',
            'price' => 'required|numeric',
            'warranty' => "integer",
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
        }

        Product::create($request->only([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $imagePath,
            'price' => $request->input('price'),
            'warranty' => $request->input('warranty'),
        ]));

        return redirect()->route('product.create')->with('status', 'Item created successfully!');
    }

    public function delete($id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        if ($product->getImage() && Storage::exists('public/' . $product->getImage())) {
            Storage::delete('public/' . $product->getImage());
        }

        $product->delete();

        return redirect()->route('product.index')->with('status', 'Product deleted successfully!');
    }  
}
