<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function generateLayoutMaster(){
        return view('Admin.formtab');
    }

    public function advanpage(){
        return view('Admin.tabletab');
    }
}
