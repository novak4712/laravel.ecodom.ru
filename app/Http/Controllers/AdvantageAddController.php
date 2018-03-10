<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advantage;
use Illuminate\Support\Facades\Validator;
class AdvantageAddController extends Controller
{
    //
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'
            ];

            $validator = Validator::make($input, [
                'name' => 'required|max:255|unique:advantage',
                'text' => 'required'
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('advantageAdd'))
                    ->withErrors($validator)
                    ->withInput();
            }
            $advantage = new Advantage();
            $advantage->fill($input);
            if ($advantage->save()) {
                return redirect('admin')->with('status', 'Преимущество добавлено');
            }
        }
        if (view()->exists('admin.advantageAdd')) {
            $data = [
                'title' => 'Новое преимущество'
            ];
            return view('admin.advantageAdd', $data);
        }
        abort(404);
    }
}
