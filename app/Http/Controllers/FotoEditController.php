<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Foto;
class FotoEditController extends Controller
{
    public function execute(Foto $foto, Request $requestd)
    {

        if ($requestd->isMethod('delete')) {
            $foto->delete();
            return redirect('admin')->with('status', 'Слайд удален');
        }

        if ($requestd->isMethod('post')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'
            ];
            $input = $requestd->except('_token');

            $validator = Validator::make($input, [
                'title' => 'required|max:255',
                'alt' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('fotoEdit', ['foto' => $input['id']]))
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($requestd->hasFile('image')) {
                $file = $requestd->file('image');
                $file->move(public_path() . '/app/img', $file->getClientOriginalName());
                $input['image'] = $file->getClientOriginalName();
            } else {
                $input['image'] = $input['old_image'];
            }

            unset($input['old_image']);

            $foto->fill($input);

            if ($foto->update()) {
                return redirect('admin')->with('status', 'Фото слайд обновлен');
            }

        }

        $old = $foto->toArray();
        if (view()->exists('admin.fotoEdit')) {
            $data = [
                'title' => 'Редактирование фото слайда - ' . $old['title'],
                'data' => $old
            ];
            return view('admin.fotoEdit', $data);
        }
    }
}
