<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Tp;
class TpEditController extends Controller
{
    //
    public function execute(Tp $tp, Request $requestd)
    {

        if ($requestd->isMethod('delete')) {
            $tp->delete();
            return redirect('admin')->with('status', 'Карточка термопанели удалена');
        }

        if ($requestd->isMethod('post')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'unique' => 'Поле :attribute должно быть уникальным',
                'numeric' => 'Поле :attribute должно быть заполнено числом',
            ];
            $input = $requestd->except('_token');

            $validator = Validator::make($input, [
                'name' => 'required|unique:pages|max:255',
                'description' => 'required',
                'price' => 'required|numeric',
                'units' => 'required',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('tpEdit', ['tp' => $input['id']]))
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

            $tp->fill($input);

            if ($tp->update()) {
                return redirect('admin')->with('status', 'Карточка термопанели обновлена');
            }

        }

        $old = $tp->toArray();
        if (view()->exists('admin.tpEdit')) {
            $data = [
                'title' => 'Редактирование карточки термопанели - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.tpEdit', $data);
        }
    }
}
