<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();
        $donations = Donation::all();
        return view('pages.frontend.landing', compact('transactions', 'donations'));
    }
}
