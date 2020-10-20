<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLogin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        
        $categories = new Category();
        $categories->fill($request->all());
        if($categories->save()){
            return redirect()->route('categories.index')->with('notify','Thêm thể loại thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $Category)
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.categories.show', compact('Category','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $Category)
    {
        $categories = Category::all();
        return view('admin.categories.edit', compact('Category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $Category)
    {
        if($Category->update($request->all())){
            return redirect()->route('categories.index')->with('notify','Sửa thể loại thành công');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $Category)
    {
        if($Category){
            $ParentCategory = Category::where('parent_id',$Category->id);
            $ParentCategory->update(['parent_id' => null]);
            $CategoryInProducts = Product::where('category_id',$Category->id);
            $CategoryInProducts->update(['category_id' => null]);
            $Category->delete();
        }
        return redirect()->route('categories.index')->with('notify','Xóa thể loại thành công');
    }
}
