<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Gk;
use Illuminate\Support\Facades\Mail;

class KamenController extends Controller
{
    //
    public function execute(Request $request){

        $messages =[
            'required' => "Поле :attribute обязательно к заполнению",
            'email' => "Поле :attribute должно соответствовать email адресу",
            'integer' => "Поле :attribute должно содержать числовое значение"
        ];

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'names_order' => 'required|max:255',
                'email_order' => 'required|email',
                'tel_order' => 'required',
                'label_gk' => 'required|integer',
                'count_gk' => 'required|integer|min:1'
            ], $messages);

            $data = $request->all();

            $result = Mail::send('emails.orderGkmail', ['data'=>$data], function ($message) use ($data) {
                $message->to('testlaravel4712@gmail.com')
                    ->subject('Заказ Гибкого камня');
                $message->from($data['email_order'], $data['names_order']);
            });

            if($result) {
                return redirect()->route('kamen')->with('status', 'Заказ отправлен');
            }
        }



        $pages = Page::all();
        $gk = Gk::all();

        $menu = array();
        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'link' => $page->link);
            array_push($menu, $item);
        }

        return view('site.kamen', array(
            'menu' => $menu,
            'pages' => $pages,
            'gk' => $gk,
        ));

    }
}
