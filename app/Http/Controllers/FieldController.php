<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
class FieldController extends Controller
{
    public function execute()
    {

        if (view()->exists('admin.field')) {
            $fields = Field::all();
            $data = [
                'title' => 'Логотип и Контакты',
                'fields' => $fields
            ];
            return view('admin.field', $data);
        }
        abort(404);
    }
}
