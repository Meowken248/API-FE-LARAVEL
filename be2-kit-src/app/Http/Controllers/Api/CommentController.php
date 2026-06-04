<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Comment; 
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;

class CommentController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
       $products = Product::find($id);
       return CommentResource::collection($products->comments);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
         $validated = $request->validate(
            [
                'content' => ['required'],
            ],
            [
                'content.required' => 'Phải nhập nội dung bình luận.',
            ]
        );

        $product = Product::find($id);
        $comment = new Comment($validated);
        $product->comments()->save($comment);

        return CommentResource::collection($product->comments);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
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
