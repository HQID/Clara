<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use App\Models\Review;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminIndex()
    {
        $mobils_count = Mobil::count();
        $users_count = User::count();
        $reviews_count = Review::count();
        $latest_transactions = Transaction::latest()->take(3)->get();

        return view('dashboard.admin', compact('mobils_count', 'users_count', 'reviews_count', 'latest_transactions'));
    }

    public function index()
    {
        $mobils = Mobil::inRandomOrder()->take(4)->get();
        $reviews = Review::inRandomOrder()->take(4)->get();

        return view('dashboard.user', compact('mobils', 'reviews'));
    }
}
