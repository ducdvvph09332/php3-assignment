<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLogin');
        $this->authorizeResource(Product::class,'product');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category','comments'])->orderBy('id', 'DESC')->paginate(5);
        // $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.products.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $product = new Product;
        $product->fill($request->all());
        if ($request->hasFile('image_url')) {
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $path = $request->file('image_url')->storeAs('products', $fileName);
            $product->image_url = $path;
        }
        if ($product->save()) {
            return redirect()->route('products.index')->with('notify', 'Thêm sản phẩm thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $comments = Comment::with(['user', 'product'])->where('product_id', $product->id)->orderBy('id', 'DESC')->get();
        return view('admin.products.show', compact('product', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductStoreRequest $request, Product $product)
    {
        $product->fill($request->all());
        if ($request->hasFile('image_url')) {
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $path = $request->file('image_url')->storeAs('products', $fileName);
            $product->image_url = $path;
            if ($product->save()) {
                return redirect()->route('products.index')->with('notify', 'Sửa sản phẩm thành công');
            }
        } else {
            if ($product->update($request->all())) {
                return redirect()->route('products.index')->with('notify', 'Sửa sản phẩm thành công');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product) {
            $comments = Comment::where('product_id', $product->id);
            $comments->delete();
            $product->delete();
        }
        return redirect()->route('products.index')->with('notify', 'Xóa sản phẩm thành công');
    }
}
