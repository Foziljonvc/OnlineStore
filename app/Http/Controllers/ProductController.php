<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|integer',
            'stock_quantity' => 'required|integer',
            'image_url' => 'nullable|url',
            'is_active' => 'required|boolean',
            'deleted_at' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $product = Product::create($validator->validated());

        return response()->json([
            'message' => 'Product created successfully.',
            'product' => $product,
        ]);
    }

    public function show($id){
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'error' => 'Product not found.',
            ], 404);
        }

        return response()->json($product);
    }

    public function update(Request $request, $id){

        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'error' => 'Product not found.',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|integer',
            'stock_quantity' => 'required|integer',
            'image_url' => 'nullable|url',
            'is_active' => 'required|boolean',
            'deleted_at' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $product->update($validator->validated());

        return response()->json([
            'message' => 'Product updated successfully.',
            'product' => $product,
        ], 200);
    }

    public function destroy($id){

        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'error' => 'Product not found.',
            ], 404);
        }

        $product->delete();

        return response()->json([
            'message' => $id.' - Product deleted successfully.',
        ], 200);
    }

}
