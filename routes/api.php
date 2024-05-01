<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Product;

Route::get('/products', function () {
    return Product::all();
});

Route::post('/products', function (Request $request) {
    $product = Product::create($request->all());
    return response()->json($product, 201);
});

// Update Route
Route::put('/products/{id}', function (Request $request, $id) {
    $product = Product::where(['_id' => $id])->first();
    $product->update($request->all());
    return response()->json($product, 200);
});

// Delete Route
Route::delete('/products/{id}', function ($id) {
    $product = Product::where(['_id' => $id])->first();
    $product->delete();  // or Product::destroy($id)
    return response()->json(null, 204); // No Content response for successful deletion
});


// Get single product
Route::get('/products/{id}', function($id){
    $product = Product::where(['_id' => $id])->first();
    return response()->json($product, 201);
});
