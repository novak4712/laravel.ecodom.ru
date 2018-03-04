<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Profit;
use App\Advantage;
use App\Gk;
use App\Tp;
use Mail;

class IndexController extends Controller
{
    //
    public function execute(Request $request)
    {
        $messages = [
            'required' => "Поля :attribute обязательно к заполнению",
            'email' => "Поля :attribute должно соответствовать email адресу",
        ];
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'names' => 'required|max:255',
                'email' => 'required|email',
                'tel' => 'required|max:255',
                'comment' => 'required',
            ], $messages);
//            dump($request);
//            $data= $request->all();

        }


        $pages = Page::all();
        $profit = Profit::all();
        $advantage = Advantage::all();
        $gk = Gk::all();
        $tp = Tp::all();

        $menu = array();
        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'link' => $page->link);
            array_push($menu, $item);
        }

        return view('site.index', array(
            'menu' => $menu,
            'pages' => $pages,
            'profit' => $profit,
            'advantage' => $advantage,
            'gk' => $gk,
            'tp' => $tp,
        ));
    }
}
