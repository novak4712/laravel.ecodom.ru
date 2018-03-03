<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Profit;
use App\Advantage;
use App\Gk;
use App\Tp;

class IndexController extends Controller
{
    //
    public function execute(Request $request)
    {
        $pages = Page::all();
        $profit = Profit::all();
        $advantage = Advantage::all();
        $gk = Gk::all();
        $tp = Tp::all();

        return view('site.index');
    }
}
