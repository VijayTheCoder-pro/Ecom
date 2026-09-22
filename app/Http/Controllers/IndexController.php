<?php

namespace App\Http\Controllers;

use App\Models\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_id = DB::table('manage_categories')->get();

        $data = DB::table('products')
            ->join('manage_categories', 'manage_categories.id', '=', 'products.category_id')
            ->select('products.*', 'manage_categories.catname')
            ->get();

        $activeCategory = null;

        return view('index', compact('data', 'category_id', 'activeCategory'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category_id = DB::table('manage_categories')->get();

        $activeCategory = DB::table('manage_categories')->where('id', $id)->first();

        $data = DB::table('products')
            ->join('manage_categories', 'manage_categories.id', '=', 'products.category_id')
            ->select('products.*', 'manage_categories.catname')
            ->where('products.category_id', $id)
            ->get();

        return view('index', compact('category_id', 'data', 'activeCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(Index $index)
    {
        //
    }
}
