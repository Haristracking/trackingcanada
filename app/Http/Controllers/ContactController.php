<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $data['solution'] = implode(',', $request->solution);
        Contact::create($data);
        return json_encode('success');
    }

    public function index_be()
    {
        $pageTitle ='Contact Form Submissions';
        $data = Contact::get();
        return view('home_be',compact('pageTitle','data'));
    }
}
