<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::query()->latest()->get();
        $categories = Category::query()->where('type','=',1)->get();
        return view('admin.products.index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'categories' => ['nullable'],
            'description' => ['nullable'],
            'in_stock' => ['nullable'],
            'price' => ['nullable'],
            'ingredients' => ['nullable'],
            'nutrition' => ['nullable']
        ]);
        $validated = $validator->validated();
        $validated['ingredients'] = json_encode($request->ingredients);
        $validated['nutrition'] = json_encode($request->nutrition);
        $product = Product::create($validated);
        if($request->file('image'))
        {
            $validated['image'] = upload_files($request->file('image'),'/uploads/products/'.$product->id);
        }
        $product->update($validated);
        if($request->categories)
        {
            $categories = Category::query()->whereIn('id',$request->categories)->get();
            $product->categories()->saveMany($categories);
        }
        toastr()->success('Product updated successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update([
            'in_stock' => 0
        ]);
        $validated = $request->validated();
        $validated['ingredients'] = json_encode($request->ingredients);
        $validated['nutrition'] = json_encode($request->nutrition);
        if($request->file('image'))
        {
            $validated['image'] = upload_files($request->file('image'),'/uploads/products/'.$product->id);
        }
        $product->update($validated);
        $product->categories()->detach();
        if($request->categories)
        {
            $categories = Category::query()->whereIn('id',$request->categories)->get();
            $product->categories()->saveMany($categories);
        }
        toastr()->success('Product updated successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        toastr()->success('Product deleted successfully');
        return back();
    }
}
