<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    
    public function show(Product $id)
    {
        return view('products.show', ['product' => $id]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $product = new Product;
        
        $product->make = request('make');
        $product->model = request('model');
        $product->description = request('description');
        $product->save();
    }
    




}