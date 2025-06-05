<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Mobil;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('mobil')->get();
        return view('review.index', compact('reviews'));
    }

    public function create()
    {
        $mobils = Mobil::all();
        return view('review.create', compact('mobils'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'mobil_id' => 'required|exists:mobils,id',
        ]);

        Review::create($request->all());
        return redirect()->route('review.index');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $mobils = Mobil::all();
        return view('review.edit', compact('review', 'mobils'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'mobil_id' => 'required|exists:mobils,id',
        ]);

        $review = Review::findOrFail($id);
        $review->update($request->all());
        return redirect()->route('review.index');
    }

    public function show($id)
    {
        $review = Review::with('mobil')->findOrFail($id);
        return view('review.show', compact('review'));
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('review.index')->with('success', 'Review berhasil dihapus.');
    }
}
