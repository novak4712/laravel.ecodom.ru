<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Profit;

class ProfitAddController extends Controller
{
    //
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
            ];

            $validator = Validator::make($input, [
                'text' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('profitAdd'))
                    ->withErrors($validator)
                    ->withInput();
            }

            if($request->hasFile('icon')){

                $file = $request->file('icon');

                $input['icon'] = $file->getClientOriginalName();

                $file->move(public_path().'/app/img', $input['icon']);

            }


            $profit = new Profit();
            $profit->fill($input);
            if ($profit->save()) {
                return redirect('admin')->with('status', 'Профит добавлен');
            }
        }
        if (view()->exists('admin.profitAdd')) {
            $data = [
                'title' => 'Новый профит'
            ];
            return view('admin.profitAdd', $data);
        }
        abort(404);
    }
}
