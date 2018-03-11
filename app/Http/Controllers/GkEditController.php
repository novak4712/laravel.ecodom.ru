<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gk;
use Illuminate\Support\Facades\Validator;
class GkEditController extends Controller
{
    //
    public function execute(Gk $gk, Request $requestd)
    {

        if ($requestd->isMethod('delete')) {
            $gk->delete();
            return redirect('admin')->with('status', 'Карточка гибкого камня удалена');
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
                return redirect(route('gkEdit', ['gk' => $input['id']]))
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

            $gk->fill($input);

            if ($gk->update()) {
                return redirect('admin')->with('status', 'Карточка гибкого камня обновлена');
            }

        }

        $old = $gk->toArray();
        if (view()->exists('admin.gkEdit')) {
            $data = [
                'title' => 'Редактирование карточки гибкого камня - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.gkEdit', $data);
        }
    }
}
