<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Added Succesfully');

        return redirect()->back();


    }
    public function delete_category($id)
{
        $data = Category::find($id);

        $data->delete();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Deleted Succesfully');
        return redirect()->back();
}
public function edit_category($id)
{
        $data = category::find($id);
        return view('admin.edit_category',compact('data'));

}
public function update_category(Request $request,$id)
{
        $data = Category::find($id);

        $data->category_name = $request->category;

        $data->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Update Category Succesfully');

        return redirect('/view_category');
}

public function add_product()
{
        return view('admin.add_product');
}

}
