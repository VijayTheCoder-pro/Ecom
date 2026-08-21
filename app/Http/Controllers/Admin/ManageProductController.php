<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ManageProduct;
use Illuminate\Auth\Events\Validated;

class ManageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ManageProduct::all();
        return view('admin.manage_product', compact('data'));
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
        $request->validate([
            'Pname' => 'required',
            'Pdescription' => 'required',
            'category' => 'required',
            'price' => 'required',
            'oprice' => 'required',
            'stock' => 'required',
            'status' => 'required'

        ]);


        $data = [
            'image' => $request->image,
            'Pname' => $request->Pname,
            'Pdescription' => $request->Pdescription,
            'category' => $request->category,
            'price' => $request->price,
            'oprice' => $request->oprice,
            'stock' => $request->stock,
            'status' => $request->status
        ];
        ManageProduct::create($data);

        return redirect()->route('manage_product')->with('success', 'Product created successfully ');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
