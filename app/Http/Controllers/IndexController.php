<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Profit;
use App\Advantage;
use App\Slider;
use App\Field;
use Illuminate\Support\Facades\Mail;


class IndexController extends Controller
{
    //
    public function execute(Request $request)
    {
        if ($request->isMethod('post')) {

            $messages = [
                'required' => "Поле :attribute обязательно к заполнению",
                'email' => "Поле :attribute должно соответствовать email адресу",
            ];

            $this->validate($request, [
                'names' => 'required|max:255',
                'email' => 'required|email',
                'tel' => 'required',
                'comment' => 'required'
            ], $messages);

            $data = $request->all();


            Mail::send('emails.mail', ['data'=>$data], function ($message) use ($data) {
                $message->to('eco_dom_nv@mail.ru')
                    ->subject('Вопрос');
                $message->from($data['email'], $data['names']);
            });

            return redirect()->route('index')->with('status', 'Письмо отправлено');


        }


        $pages = Page::all();
        $slider = Slider::all();
        $fields = Field::find(1);
        $profit = Profit::all();
        $advantage = Advantage::all();
        $meta= Page::find(1);

        $menu = array();
        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'link' => $page->link);
            array_push($menu, $item);
        }

        return view('Site.index', array(
            'menu' => $menu,
            'pages' => $pages,
            'profit' => $profit,
            'advantage' => $advantage,
            'meta' => $meta,
            'slider' => $slider,
            'fields' => $fields,
        ));
    }
}
