<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowBrawlerController extends Controller {
    public function __invoke($name) {
       return "My favourite brawler is $name.";
    }
}
