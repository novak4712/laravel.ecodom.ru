<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use Illuminate\Support\Facades\Validator;
class FotoAddController extends Controller
{
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
            ];

            $validator = Validator::make($input, [
                'title' => 'required|max:255',
                'alt' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('fotoAdd'))
                    ->withErrors($validator)
                    ->withInput();
            }

            if($request->hasFile('image')){

                $file = $request->file('image');

                $input['image'] = $file->getClientOriginalName();

                $file->move(public_path().'/app/img', $input['image']);

            }


            $fotos = new Foto();
            $fotos->fill($input);
            if ($fotos->save()) {
                return redirect('admin')->with('status', 'Новый фото слайд добавлен');
            }
        }
        if (view()->exists('admin.fotoAdd')) {
            $data = [
                'title' => 'Новый фото слайд'
            ];
            return view('admin.fotoAdd', $data);
        }
        abort(404);
    }
}
