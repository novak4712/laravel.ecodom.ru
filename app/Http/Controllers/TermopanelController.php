<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Tp;
class TermopanelController extends Controller
{
    //
    public function execute(Request $request){

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'names_order' => 'required|max:255',
                'email_order' => 'required|email',
                'tel_order' => 'required',
                'label_tp' => 'required|integer|min:1',
                'count_tp' => 'required|integer|min:1'
            ]);

            dump($request);
            
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
