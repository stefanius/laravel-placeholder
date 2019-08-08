<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $pieces = explode('.', $request->getHost());

        $data = [
            'domain' => $request->getHost(),
            'tld' => $pieces[2],
            'sld' => $pieces[1],
            'subdomain' => $pieces[0],
        ];

        return view('default', ['placeholder' => (object) $data]);
    }
}
