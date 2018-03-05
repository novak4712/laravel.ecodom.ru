<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class GalleryController extends Controller
{
    //
    public function execute(Request $request){

        $pages = Page::all();

        $menu = array();
        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'link' => $page->link);
            array_push($menu, $item);
        }

        return view('site.gallery', array(
            'menu' => $menu,
            'pages' => $pages,
        ));

    }
}
