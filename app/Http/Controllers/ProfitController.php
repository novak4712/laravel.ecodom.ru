<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profit;
class ProfitController extends Controller
{
    //
    public function execute()
    {

        if (view()->exists('admin.profit')) {
            $profit = Profit::all();
            $data = [
                'title' => 'Пункты профита',
                'profit' => $profit
            ];
            return view('admin.profit', $data);
        }
        abort(404);
    }
}
