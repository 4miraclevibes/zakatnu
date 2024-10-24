<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('pages.backend.transactions.index', compact('transactions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:success,failed'
        ]);
        $data = $request->all();
        $data['status'] = $request->status;
        $transaction = Transaction::find($id);
        $transaction->update($data);
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil diubah');
    }

    public function store(Request $request, $donationId)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1000',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $donation = Donation::findOrFail($donationId);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['donation_id'] = $donationId;
        $data['status'] = 'pending';

        if ($request->hasFile('payment_proof')) {
            $data['payment_proof'] = $request->file('payment_proof')->store('payment_proofs', 'public');
        }

        Transaction::create($data);

        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan dan menunggu konfirmasi');
    }

    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
