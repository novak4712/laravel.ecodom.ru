<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Gk;

class KamenController extends Controller
{
    //
    public function execute(Request $request){

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
