<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Slider;

class SliderEditController extends Controller
{
    public function execute(Slider $slider, Request $requestd)
    {

        if ($requestd->isMethod('delete')) {
            $slider->delete();
            return redirect('admin')->with('status', 'Слайд удален');
        }

        if ($requestd->isMethod('post')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'
            ];
            $input = $requestd->except('_token');

            $validator = Validator::make($input, [
                'title' => 'required|max:255',
                'alt' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('sliderEdit', ['slider' => $input['id']]))
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

            $slider->fill($input);

            if ($slider->update()) {
                return redirect('admin')->with('status', 'Слайд обновлен');
            }

        }

        $old = $slider->toArray();
        if (view()->exists('admin.sliderEdit')) {
            $data = [
                'title' => 'Редактирование слайда - ' . $old['title'],
                'data' => $old
            ];
            return view('admin.sliderEdit', $data);
        }
    }
}
