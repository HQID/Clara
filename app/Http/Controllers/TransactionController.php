<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::id())->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create(Request $request)
    {
        $mobil = Mobil::findOrFail($request->mobil_id);

        // Prevent access if the mobil is already rented
        if ($mobil->status === 'tersewa') {
            return redirect()->route('mobil.index')->with('error', 'Mobil ini sudah tersewa.');
        }

        return view('transactions.create', compact('mobil'));
    }

    public function store(Request $request)
    {
        $mobil = Mobil::findOrFail($request->mobil_id);

        // Parse dates into Carbon instances
        $rentalDate = Carbon::parse($request->rental_date);
        $returnDate = Carbon::parse($request->return_date);

        // Ensure rentalDate is earlier than returnDate
        if ($rentalDate->gt($returnDate)) {
            [$rentalDate, $returnDate] = [$returnDate, $rentalDate];
        }

        // Calculate the number of rental days (minimum 1 day)
        $days = max(1, $rentalDate->diffInDays($returnDate));

        // Calculate total price
        $total_price = $mobil->price * $days;

        Transaction::create([
            'code' => uniqid('CRX-'),
            'user_id' => Auth::id(),
            'mobil_id' => $mobil->id,
            'rental_date' => $rentalDate,
            'return_date' => $returnDate,
            'total_price' => $total_price,
            'payment_method' => $request->payment_method,
            'status' => 'tersewa',
        ]);

        $mobil->update(['status' => 'tersewa']);

        return redirect()->route('transactions.index');
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update(['status' => 'batal']);
        return redirect()->route('transactions.index');
    }

    public function adminIndex()
    {
        $transactions = Transaction::all();
        return view('admin.transaction.index', compact('transactions'));
    }

    public function markAsCompleted($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update(['status' => 'selesai']);
        $transaction->mobil->update(['status' => 'tersedia']);
        return redirect()->route('admin.transactions.index');
    }
}
