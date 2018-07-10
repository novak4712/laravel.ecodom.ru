<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use Illuminate\Support\Facades\Validator;
class FieldEditController extends Controller
{
    public function execute(Field $field, Request $requestd)
    {

        if ($requestd->isMethod('delete')) {
            $field->delete();
            return redirect('admin')->with('status', 'Контакты удалены');
        }

        if ($requestd->isMethod('post')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'
            ];
            $input = $requestd->except('_token');

            $validator = Validator::make($input, [
                'email' => 'required|email',
                'phone1' => 'required|max:255',
                'phone2' => 'required|max:255',
                'address' => 'required|max:255',
                'description' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('fieldEdit', ['field' => $input['id']]))
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($requestd->hasFile('logo')) {
                $file = $requestd->file('logo');
                $file->move(public_path() . '/app/img', $file->getClientOriginalName());
                $input['logo'] = $file->getClientOriginalName();
            } else {
                $input['logo'] = $input['old_logo'];
            }

            unset($input['old_logo']);

            $field->fill($input);

            if ($field->update()) {
                return redirect('admin')->with('status', 'Контакты и логотип обновлены');
            }

        }

        $old = $field->toArray();
        if (view()->exists('admin.fieldEdit')) {
            $data = [
                'title' => 'Редактирование контактов и логотипа',
                'data' => $old
            ];
            return view('admin.fieldEdit', $data);
        }
    }
}
