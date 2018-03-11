<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gk;
use Illuminate\Support\Facades\Validator;
class GkAddController extends Controller
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
                return redirect(route('gkAdd'))
                    ->withErrors($validator)
                    ->withInput();
            }

            if($request->hasFile('image')){

                $file = $request->file('image');

                $input['image'] = $file->getClientOriginalName();

                $file->move(public_path().'/app/img', $input['image']);

            }


            $gk = new Gk();
            $gk->fill($input);
            if ($gk->save()) {
                return redirect('admin')->with('status', 'Новая карточка гибкого камня добавлена');
            }
        }
        if (view()->exists('admin.gkAdd')) {
            $data = [
                'title' => 'Новая карточка гибкого камня'
            ];
            return view('admin.gkAdd', $data);
        }
        abort(404);
    }
}
