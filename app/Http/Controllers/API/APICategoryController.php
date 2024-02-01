<?php

namespace App\Http\Controllers\Api;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class APICategoryController extends Controller
{
    protected $category;

    public function __construct()
    {
        $this->category = new Category();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->category->all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->category->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->category->find($id);
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
