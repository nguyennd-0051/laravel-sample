<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class PagesController extends Controller
{
    public function about() {
        return view('pages.about',[
           'articles' => Article::take(3)->latest()->get()
        ]
        );
    }
    public function contact() 
    {
        $name = request('name');
        return view("pages.contact",[
            'name2' => $name
        ]);  
    }
}
