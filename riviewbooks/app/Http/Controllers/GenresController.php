<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GenresController extends Controller
{
    public function create()
    {
        return view('category.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
        ]);

        $now = Carbon::now();
        
        DB::table('genres')->insert([
        'name' => $request-> input('name'),
        'description' => $request-> input('description'),
        'created_at' => $now,
        'updated_at' => $now,
        
        ]);

        return redirect('/category')->with('success', 'Genre created successfully!');
    }

    public function index()
    {
        $genres = DB::table('genres')->get();
        return view('category.tampil', ['genres' => $genres]);
    }

    public function show($id)
    {
        $category = DB::table('genres')->find($id);
        return view('category.detail', ['category' => $category]);
    }

    public function edit($id)
    {
        $category = DB::table('genres')->find($id);
        return view('category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
        ]);

        $now = Carbon::now();

        DB::table('genres')->where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'updated_at' => $now,
        ]);

        return redirect('/category')->with('success', 'Genre updated successfully!');
    }

    public function destroy($id)
    {
        DB::table('genres')->where('id', $id)->delete();
        return redirect('/category')->with('success', 'Genre deleted successfully!');
    }
} 
