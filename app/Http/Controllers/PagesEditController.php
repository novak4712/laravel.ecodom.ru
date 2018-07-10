<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Page;

class PagesEditController extends Controller
{
    //
    public function execute(Page $page, Request $requestd)
    {

        if ($requestd->isMethod('delete')){
            $page->delete();
            return redirect('admin')->with('status', 'Страница удалена');
        }

        if ($requestd->isMethod('post')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'unique' => 'Поле :attribute должно быть уникальным',
            ];
            $input = $requestd->except('_token');

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'link' => 'required|max:255|unique:pages,link,'.$input['id'],
                'title' => 'required|max:255'.$input['id'],
                'description' => 'required|max:255'.$input['id'],
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('pagesEdit', ['page' => $input['id']]))
                    ->withErrors($validator)
                    ->withInput();
            }

            $page->fill($input);

            if ($page->update()) {
                return redirect('admin')->with('status', 'Страница обновлена');
            }

        }

        $old = $page->toArray();
        if (view()->exists('admin.pagesEdit')) {
            $data = [
                'title' => 'Редактирование страницы - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.pagesEdit', $data);
        }
    }
}
