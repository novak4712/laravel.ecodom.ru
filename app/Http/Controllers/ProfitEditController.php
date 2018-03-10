<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Profit;

class ProfitEditController extends Controller
{
    //
    public function execute(Profit $profit, Request $requestd)
    {

        if ($requestd->isMethod('delete')) {
            $profit->delete();
            return redirect('admin')->with('status', 'Профит удален');
        }

        if ($requestd->isMethod('post')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'
            ];
            $input = $requestd->except('_token');

            $validator = Validator::make($input, [
                'text' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('profitEdit', ['profit' => $input['id']]))
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($requestd->hasFile('icon')) {
                $file = $requestd->file('icon');
                $file->move(public_path() . '/app/img', $file->getClientOriginalName());
                $input['icon'] = $file->getClientOriginalName();
            } else {
                $input['icon'] = $input['old_icon'];
            }

            unset($input['old_icon']);

            $profit->fill($input);

            if ($profit->update()) {
                return redirect('admin')->with('status', 'Профит обновлен');
            }

        }

        $old = $profit->toArray();
        if (view()->exists('admin.profitEdit')) {
            $data = [
                'title' => 'Редактирование профита - ' . $old['text'],
                'data' => $old
            ];
            return view('admin.profitEdit', $data);
        }
    }
}
