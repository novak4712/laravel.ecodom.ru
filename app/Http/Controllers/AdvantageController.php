<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advantage;
class AdvantageController extends Controller
{
    //
    public function execute()
    {

        if (view()->exists('admin.advantage')) {
            $advantage = Advantage::all();
            $data = [
                'title' => 'Пункты преимуществ',
                'advantage' => $advantage
            ];
            return view('admin.advantage', $data);
        }
        abort(404);
    }
}
