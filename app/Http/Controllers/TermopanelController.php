<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Tp;
use Illuminate\Support\Facades\Mail;
class TermopanelController extends Controller
{
    //
    public function execute(Request $request){


        $messages =[
            'required' => "Поле :attribute обязательно к заполнению",
            'email' => "Поле :attribute должно соответствовать email адресу",
            'integer' => "Поле :attribute должно содержать числовое значение",
            'min' => "Поле :attribute минимальное значение 1 значение",
            'max' => "Поле :attribute максимальное значение 10",
        ];

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'names_order' => 'required|max:255',
                'email_order' => 'required|email',
                'tel_order' => 'required',
                'label_tp' => 'required|integer|min:1|max:10',
                'count_tp' => 'required|integer|min:1'
            ], $messages);

            $data = $request->all();

            Mail::send('emails.orderTpmail', ['data'=>$data], function ($message) use ($data) {
                $message->to('eco_dom_nv@mail.ru')
                    ->subject('Заказ Термопанели');
                $message->from($data['email_order'], $data['names_order']);
            });

            return redirect()->route('termopanel')->with('status', 'Заказ отправлен');


        }

        $pages = Page::all();
        $tp = Tp::all();

        $menu = array();
        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'link' => $page->link);
            array_push($menu, $item);
        }

        return view('site.termopanel', array(
            'menu' => $menu,
            'pages' => $pages,
            'tp' => $tp,
        ));

    }
}
