<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register()
    {
        return view('page.pendaftaran');
    }
    public function welcome(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        return view('page.selamat_datang', ['data' => $data]);
    }
    public function index()
    {
        return view('sanberbook');
    }
    public function show()
    {
        return view('page.pendaftaran');
    }
    public function store(Request $request)
    {
        // Logic to handle form submission
        // For example, saving data to the database or processing it
        return redirect()->route('welcome')->with('success', 'Registration successful!');
    }
    public function create()
    {
        return view('page.pendaftaran');
    }
    public function edit($id)
    {
        // Logic to edit a specific resource
        return view('page.edit', ['id' => $id]);
    }
        
}
