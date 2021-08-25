<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketplaceCtrl extends Controller
{
    public function marketPlace(){
        $items = Market::all();
        
        return view('marketplace', compact('items'));
    }
}
