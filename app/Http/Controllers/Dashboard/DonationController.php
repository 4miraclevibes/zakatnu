<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        return view('pages.backend.donations.index', compact('donations'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'target_amount' => 'required'
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        Donation::create($data);
        return redirect()->route('donations.index')->with('success', 'Donasi berhasil dibuat');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'target_amount' => 'required'
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        Donation::find($id)->update($data);
        return redirect()->route('donations.index')->with('success', 'Donasi berhasil diubah');
    }
    public function destroy($id)
    {
        Donation::find($id)->delete();
        return redirect()->route('donations.index')->with('success', 'Donasi berhasil dihapus');
    }
}
