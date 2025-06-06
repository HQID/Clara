<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Add this import
use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    use AuthorizesRequests; // Add this trait

    public function index()
    {
        $mobils = Mobil::all();
        return view('mobil.index', compact('mobils'));
    }

    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    public function adminIndex()
    {
        $this->authorize('admin');
        $mobils = Mobil::all();
        return view('admin.mobil.index', compact('mobils'));
    }

    public function create()
    {
        $this->authorize('admin');
        return view('admin.mobil.create');
    }

    public function store(Request $request)
    {
        $this->authorize('admin');
        Mobil::create($request->all());
        return redirect()->route('admin.mobil.index');
    }

    public function edit($id)
    {
        $this->authorize('admin');
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.edit', compact('mobil'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('admin');
        $mobil = Mobil::findOrFail($id);
        $mobil->update($request->all());
        return redirect()->route('admin.mobil.index');
    }

    public function destroy($id)
    {
        $this->authorize('admin');
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('admin.mobil.index');
    }
}
