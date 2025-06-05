<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminIndex()
    {
        $mobils_count = Mobil::count();
        $users_count = User::count();
        $reviews_count = Review::count();

        return view('dashboard.admin', compact('mobils_count', 'users_count', 'reviews_count'));
    }

    public function index()
    {
        return view('dashboard.user');
    }
}
