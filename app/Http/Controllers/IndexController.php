<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Profit;
use App\Advantage;


class IndexController extends Controller
{
    //
    public function execute(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'names' => 'required|max:255',
                'email' => 'required|email',
                'tel' => 'required',
                'comment' => 'required'
            ]);

//            dump($request);
        }
        $pages = Page::all();
        $profit = Profit::all();
        $advantage = Advantage::all();

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
        ));
    }
}
