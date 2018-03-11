<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Tp;
class TpAddController extends Controller
{
    //
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'unique' => 'Поле :attribute должно быть уникальным',
                'numeric' => 'Поле :attribute должно быть заполнено числом',
            ];

            $validator = Validator::make($input, [
                'name' => 'required|unique:pages|max:255',
                'description' => 'required',
                'price' => 'required|numeric',
                'units' => 'required',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('tpAdd'))
                    ->withErrors($validator)
                    ->withInput();
            }

            if($request->hasFile('image')){

                $file = $request->file('image');

                $input['image'] = $file->getClientOriginalName();

                $file->move(public_path().'/app/img', $input['image']);

            }


            $tp = new Tp();
            $tp->fill($input);
            if ($tp->save()) {
                return redirect('admin')->with('status', 'Новая карточка термопанели добавлена');
            }
        }
        if (view()->exists('admin.tpAdd')) {
            $data = [
                'title' => 'Новая карточка термопанели'
            ];
            return view('admin.tpAdd', $data);
        }
        abort(404);
    }
}
