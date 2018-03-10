<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tp;
class TpController extends Controller
{
    //
    public function execute()
    {

        if (view()->exists('admin.tp')) {
            $tp = Tp::all();
            $data = [
                'title' => 'Карточки термопанелей',
                'tp' => $tp
            ];
            return view('admin.tp', $data);
        }
        abort(404);
    }
}
