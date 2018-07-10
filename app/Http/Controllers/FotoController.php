<?php

namespace App\Http\Controllers;

use App\Foto;
use Illuminate\Http\Request;


class FotoController extends Controller
{
    public function execute()
    {

        if (view()->exists('admin.foto')) {
            $fotos = Foto::all();
            $data = [
                'title' => 'Фотогалерея главная',
                'fotos' => $fotos
            ];
            return view('admin.foto', $data);
        }
        abort(404);
    }
}
