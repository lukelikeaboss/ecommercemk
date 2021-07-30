<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('category.category', compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('category.add-category');
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
        $rules = [            'name'=>'required|max:255|string|unique:categories'


        ];
        //a validator instance can accept data , validation rules and error messages thats what we are inputing here through the first thing is the data request all
        $validator = Validator::make($request->all(),$rules, $messages = [
            'required'=> 'chill huwezi niacha hanging.'
        ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        else {
            Category::create(['name' => $request->name,
            'description' => $request->description,
            ]);
            return redirect()->route('category');
        }

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $category = Category::findOrFail($id);
        return view('category.view-category', compact('category'));
        //
    }
 public  function category(Request $request){
        $category =Category::findOrFail($id);
        return view('category.template-category', compact('category') );
 }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = Category::findOrFail($id);

        return view('category.edit-category', compact('category'));
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
        $category = Category::findOrFail($id);

        $category->update(['name' =>$request->name,
        ]);
        return redirect()->route('category');
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

        $category = Category::findOrFail($id);
        $default_category = Category::findOrFail(1);

        if($category->id===1){

            //here we check if the user is trying to delete the default category with an alert message
            return redirect()->back()->with('error', "You cannot delete the default category");
        }
        else{
            $products = Product::where('category_id', $category->id);
            foreach ($products as $product){
                //changes the current value of category id to default category

                $product->category_id = $category->id;
                $product
                    ->save();//makes the changes to the database.
            }
        }
        $category->delete();
        return redirect()->back()->with("message", "category deleted successfully");
        //
    }
}
