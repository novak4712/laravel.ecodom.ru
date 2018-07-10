<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Foto;
use App\Field;
class GalleryController extends Controller
{
    //
    public function execute(Request $request){

        $pages = Page::all();
        $fotos = Foto::all();
        $meta= Page::find(4);
        $fields = Field::find(1);

        $menu = array();

        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'link' => $page->link);
            array_push($menu, $item);
        }

        return view('Site.gallery', array(
            'menu' => $menu,
            'pages' => $pages,
            'meta' => $meta,
            'fotos' => $fotos,
            'fields' => $fields,
        ));

    }
}
