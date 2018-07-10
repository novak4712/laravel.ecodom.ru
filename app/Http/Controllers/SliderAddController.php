<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Validator;

class SliderAddController extends Controller
{
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
            ];

            $validator = Validator::make($input, [
                'title' => 'required|max:255',
                'alt' => 'required|max:255',
            ], $messages);

            if ($validator->fails()) {
                return redirect(route('sliderAdd'))
                    ->withErrors($validator)
                    ->withInput();
            }

            if($request->hasFile('image')){

                $file = $request->file('image');

                $input['image'] = $file->getClientOriginalName();

                $file->move(public_path().'/app/img', $input['image']);

            }


            $sliders = new Slider();
            $sliders->fill($input);
            if ($sliders->save()) {
                return redirect('admin')->with('status', 'Новый слайд добавлен');
            }
        }
        if (view()->exists('admin.sliderAdd')) {
            $data = [
                'title' => 'Новый слайд'
            ];
            return view('admin.sliderAdd', $data);
        }
        abort(404);
    }
}
