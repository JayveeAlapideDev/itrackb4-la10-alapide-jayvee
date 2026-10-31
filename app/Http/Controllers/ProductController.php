<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
   public function featured()
    {
        
        $brands = Brand::all();

        return view('products.create', compact('brands'));
    }
    public function index(Request $request)
    {
    $brands = Brand::all();          

   

    $brand = $request->query('brand_id');
    $query = Product::with('brand');

    if ($brand) {
        $query = $query->where('brand_id', $brand);
    }

    $products = $query->get();

    return view('products.index', compact('products', 'brands'));
    }
    public function create()
    {
        $brands = Brand::all();

        return view('products.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
    $validated = $request->validate([
        'name'    => 'required|max:100',
        'price'   => 'required|numeric|min:1|max:1000',
        'stock'   => 'required|numeric|max:1000',
        'brand_id'   => 'required|integer|exists:brands,id',
        'package' => 'required|in:bottle,plastic,pack,sachet,stick',
    ]);

    Product::create($validated);

    return redirect()
        ->route('products.index')
        ->with('success', 'product added successfully');
    }
    
    public function show(string $id)
    {
      $products = Product::findOrFail($id);
    return view('products.show', compact('products'));

    }

    
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}