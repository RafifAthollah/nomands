<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;


class DashboardController extends Controller
{
    public function index(Request $request) {
        return view('pages.admin.dashboard', [
            'travel_package' => travelpackage::count(),
            'transaction' => transaction::count(),
            'transaction_pending' => transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => transaction::where('transaction_status', 'SUCCESS')->count(),
        ]);
    }
}
