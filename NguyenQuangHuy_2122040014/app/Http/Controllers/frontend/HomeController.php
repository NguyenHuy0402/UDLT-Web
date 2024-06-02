<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $listcategory=DB::table('category')->get();
        foreach($listcategory as $r)
        {
            echo "<h1>".$r->name."</h1>";
        }
        return view("frontend.home");
    }
}
