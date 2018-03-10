<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advantage;
use Illuminate\Support\Facades\Validator;
class AdvantageEditController extends Controller
{
    //
    public function execute(Advantage $advantage, Request $requestd)
    {

        if ($requestd->isMethod('delete')){
            $advantage->delete();
            return redirect('admin')->with('status', 'Преимущество удалено');
        }

        if ($requestd->isMethod('post')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'unique' => 'Поле :attribute должно быть уникальным',
            ];
            $input = $requestd->except('_token');

            $validator = Validator::make($input, [
                'text' => 'required',
                'name' => 'required|max:255|unique:advantage,name,'.$input['id']
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('advantageEdit', ['page' => $input['id']]))
                    ->withErrors($validator)
                    ->withInput();
            }

            $advantage->fill($input);

            if ($advantage->update()) {
                return redirect('admin')->with('status', 'Преимущество обнавлено');
            }

        }

        $old = $advantage->toArray();
        if (view()->exists('admin.advantageEdit')) {
            $data = [
                'title' => 'Редактирование страницы - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.advantageEdit', $data);
        }
    }
}
