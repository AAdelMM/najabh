<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class BaseController extends Controller
{
        public function __construct()
    {
        $this->setLocale();
    }
    
    protected function setLocale()
    {
        $locale = session('locale', 'ar');
        App::setLocale($locale);
    }
}
