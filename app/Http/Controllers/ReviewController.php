<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Mobil;

class ReviewController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $reviews = Review::with('mobil', 'user')->where('user_id', auth()->id())->get();
        return view('review.index', compact('reviews'));
    }

    public function create(Request $request)
    {
        $mobils = Mobil::all();
        $mobil_id = $request->query('mobil_id');
        return view('review.create', compact('mobils', 'mobil_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'mobil_id' => 'required|exists:mobils,id',
        ]);

        $reviewData = $request->all();
        $reviewData['user_id'] = auth()->id();

        $review = Review::create($reviewData);
        return redirect()->route('mobil.show', ['id' => $review->mobil_id]);
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
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = Review::findOrFail($id);
        $review->update($request->except(['mobil_id', 'user_id']));
        return redirect()->route('review.index')->with('success', 'Review berhasil diperbarui.');
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

    public function adminIndex()
    {
        $this->authorize('admin');
        $reviews = Review::with('mobil', 'user')->get();
        return view('admin.review.index', compact('reviews'));
    }

    public function adminDestroy($id)
    {
        $this->authorize('admin');
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('admin.review.index')->with('success', 'Review berhasil dihapus.');
    }
}
