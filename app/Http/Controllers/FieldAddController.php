<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use Illuminate\Support\Facades\Validator;
class FieldAddController extends Controller
{
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
            ];

            $validator = Validator::make($input, [
                'email' => 'required|email',
                'phone1' => 'required|max:255',
                'phone2' => 'required|max:255',
                'address' => 'required|max:255',
                'description' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('fieldAdd'))
                    ->withErrors($validator)
                    ->withInput();
            }

            if($request->hasFile('logo')){

                $file = $request->file('logo');

                $input['logo'] = $file->getClientOriginalName();

                $file->move(public_path().'/app/img', $input['logo']);

            }


            $fields = new Field();
            $fields->fill($input);
            if ($fields->save()) {
                return redirect('admin')->with('status', 'Новые контакты добавлены');
            }
        }
        if (view()->exists('admin.fieldAdd')) {
            $data = [
                'title' => 'Новые контакты'
            ];
            return view('admin.fieldAdd', $data);
        }
        abort(404);
    }
}
