<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction()
    {
        return view('index');
    }

    public function contactAction()
    {
        return view('contact');
    }

    public function sectionAction()
    {
        return view('section', ['section' => (new ArticleController())->show(), 'error'=> null]);
    }

    public function reg()
    {
        return view('reg');
    }

    public function search(Request $request)
    {
        $search = (new ArticleController())->search($request->search_field);
        if (is_null($search)) {
            return view('section', ['error' => 'Ничего не найдено']);
        }
        return view('section', ['section' => $search, 'error'=> null]);

        }
    }



