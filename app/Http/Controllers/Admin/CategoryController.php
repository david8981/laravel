<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\CategoryModel;
use DataTables;
use DB;
use Image;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header_name = "Category";
        #$data        = CategoryModel::all();  
        return view('admin.category.index',compact('header_name'));
    }

    /**
     * fetehing category data with help of ajax data table
     * @return datatable response
     */
    public function ajax_category() { 

	    //category record fetching
	    $category = DB::table('category')
                     ->select('*')
                     ->get();

	   return  DataTables::of($category)
                ->addColumn('action', function ($category) {
            return '<a href="' . route('category.edit', $category->id) .'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
              })
             ->editColumn('status', function ($inquiry) {
             if ($inquiry->status == 1) return '<span class="btn btn-primary">Active</span>';
             if ($inquiry->status == 0) return '<span class="btn btn-danger">In active</span>';
             })
           /* ->editColumn('id', 'ID: {{$id}}')*/
            ->rawColumns(['status','action'])   
            ->make(true);



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $result = array();
         $header_name = "Create Category";
         return view('admin.category.create_category',compact('result','header_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        * Managing slug here if slug is not empty , modify it by laravel function
        * else taking category name as slug
        */
        if($request->has('slug'))
            $request->merge(['slug'=>str_slug($request->get('slug'),'-')]);
        else
            $request->merge(['slug'=>str_slug($request->get('name'),'-')]);    

         /**
         * Validation for the category.
         * Name field is required .
         * Name must be unique . 
         */
        $this->validate($request,[
            'name'=>'required|unique:category',
            'slug'=>'unique:category',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10480'
        ]);

        //upload image in laravel 
        if($request->hasFile('image')){
            $image_name = time(). '.'.request()->image->getClientOriginalExtension();

            request()->image->move(public_path('category_image'), $image_name);
             $request->merge(['image_file'=>$image_name]);
        }

        #print_r($image_name);die;
        

        //Saving the record.
        $categorymodel = new CategoryModel();
        $fields        = $request->only($categorymodel->get_fillable()); 
        CategoryModel::create($fields);
         return redirect('/admin/category')
                    ->with('success','Category added successfully');
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
        $result = CategoryModel::find($id);
        $header_name = 'Category Edit';
        return view('admin.category.edit_category',compact('result','header_name'));

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
        /*
        * Managing slug here if slug is not empty , modify it by laravel function
        * else taking category name as slug
        */
        if($request->has('slug'))
            $request->merge(['slug'=>str_slug($request->get('slug'),'-')]);
        else
            $request->merge(['slug'=>str_slug($request->get('name'),'-')]);    

         /**
         * Validation for the category.
         * Name field is required .
         * Name must be unique . 
         */
        $this->validate($request,[
            'name'=>'required|unique:category,name,'.$id.',id',
            'slug'=>'unique:category,slug,'.$id.',id',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10480'
        ]);

         //upload image in laravel 
        if($request->hasFile('image')){
            $image_name = time(). '.'.request()->image->getClientOriginalExtension();

            request()->image->move(public_path('category_image'), $image_name);
             $request->merge(['image_file'=>$image_name]);
        }



        //Saving the record.
        $categorymodel = new CategoryModel();
        $fields        = $request->only($categorymodel->get_fillable()); 
        CategoryModel::where("id",$id)->update($fields);
         return redirect('/admin/category')
                    ->with('success','Category updated successfully');
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
