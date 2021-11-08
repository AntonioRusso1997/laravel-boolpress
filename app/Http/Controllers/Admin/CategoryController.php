<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str; //classe per utilizzare dei metodi (tipo per creare lo slug)
use App\Category;

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
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name' => 'required|max:50'
        ]);

        $form_data = $request->all();
        $new_category = new Category();
        $new_category->fill($form_data);
        
        //Metodo per creare lo slug in automatico
        $slug = Str::slug($new_category->name);
        
        $new_category->slug = $slug;
        $new_category->save();

        return redirect()->route('admin.categories.index')->with('status','La categoria è stata inserita correttamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::where('id', $id)->first();
        if(!$category){
            abort(404);
        }
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        if(!$category) {
            abort(404);
        }

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:50'
        ]);

        $form_data = $request->all();
        //Verifico se il nome ricefuto dal form è diverso dal vecchio
        if($form_data['name'] != $category->name) {
            //Il nome è stato modificando quindi devo modificare anche lo slug
            $slug = Str::slug($form_data['name']);

            $form_data['slug'] = $slug;
        }

        $category->update($form_data);

        return redirect()->route('admin.categories.index')->with('status', 'Categoria modificata correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('status','Categoria eliminata.');

    }
}
