<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Page;

class PagesAddController extends Controller
{
    //
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'unique' => 'Поле :attribute должно быть уникальным',
            ];

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'link' => 'required|unique:pages|max:255'
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('pagesAdd'))
                    ->withErrors($validator)
                    ->withInput();
            }
            $page = new Page();
            $page->fill($input);
            if ($page->save()) {
                return redirect('admin')->with('status', 'Страница добавлена');
            }
        }
        if (view()->exists('admin.pagesAdd')) {
            $data = [
                'title' => 'Новая страница'
            ];
            return view('admin.pagesAdd', $data);
        }
        abort(404);
    }
}
