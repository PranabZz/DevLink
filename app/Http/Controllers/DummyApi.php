<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class DummyApi extends Controller
{
    //
    public function index(){

        return Blog::all();
    }
}
