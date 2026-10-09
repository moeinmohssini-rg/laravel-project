<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index');
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('employees.index');
    }

    public function show(string $id)
    {
        return view('employees.show');
    }

    public function edit(string $id)
    {
        return view('employees.edit');
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('employees.index');
    }

    public function destroy(string $id)
    {
        return redirect()->route('employees.index');
    }
}