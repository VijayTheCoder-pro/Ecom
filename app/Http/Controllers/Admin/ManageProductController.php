<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ManageProduct;
use Illuminate\Auth\Events\Validated;
use DB;

class ManageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $category_id = DB::table('manage_categories')->get();


        $data = DB::table('products')->
                join('manage_categories' ,'manage_categories.id','=','products.category_id')->
                select('products.*','manage_categories.catname')->get();
        return view('admin.manage_product', compact('data', 'category_id'));
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
            // 'category_id' => 'required',a
            'brand' => 'required',
            'price' => 'required',
            'oprice' => 'required',
            'stock' => 'required',
            'status' => 'required',
            'image' => 'required|image',
            'category_id' => 'required'
        ]);

        $data = [

            'Pname' => $request->Pname,
            'Pdescription' => $request->Pdescription,
            'brand' => $request->brand,
            'price' => $request->price,
            'oprice' => $request->oprice,
            'stock' => $request->stock,
            'status' => $request->status,
            'category_id' => $request->category_id
        ];

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/images/products'), $imageName);
        // $request->$imageName; this is wrong thing 
        $imagepath = 'assets/images/products/' . $imageName;
        $data['image'] = $imagepath;
        ManageProduct::create($data);

        return redirect()->route('manage_product')->with('success', 'Product created successfully ');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $request->validate([
            'Pname' => 'required',
            'Pdescription' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'oprice' => 'required',
            'stock' => 'required',
            'status' => 'required',
            'image' => 'sometimes|image',
            'category_id' => 'required'

        ]);

        $data = [

            'Pname' => $request->Pname,
            'Pdescription' => $request->Pdescription,
            'category_id' => $request->category_id,
            'brand' => $request->brand,
            'price' => $request->price,
            'oprice' => $request->oprice,
            'stock' => $request->stock,
            'status' => $request->status,

        ];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'), $imageName);
            $imagepath = 'assets/images/products/' . $imageName;

            $data['image'] = $imagepath;
        }
        $edit = ManageProduct::findOrFail($id);
        $edit->update($data);
        return redirect()->route('manage_product')->with('edit', 'Edit product successfully ');
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
        $delete = ManageProduct::findOrFail($id);

        $delete->delete();

        return redirect()->route('manage_product')->with('del', 'Deleted product successfully');
    }
}
