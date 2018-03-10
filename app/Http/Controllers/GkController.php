<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gk;
class GkController extends Controller
{
    //
    public function execute()
    {

        if (view()->exists('admin.gk')) {
            $gk = Gk::all();
            $data = [
                'title' => 'Карточки гибкого камня',
                'gk' => $gk
            ];
            return view('admin.gk', $data);
        }
        abort(404);
    }
}
