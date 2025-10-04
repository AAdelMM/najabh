<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function __construct()
    {
        // Set locale in constructor to ensure it runs early
        $this->setLocaleFromSession();
    }
    
    private function setLocaleFromSession()
    {
        // Use Session facade consistently
        $locale = Session::get('locale', config('app.locale'));
        App::setLocale($locale);
    }
    
    public function index(Request $request)
    {
        // Debug info
        $debugInfo = [
            'current_locale' => App::getLocale(),
            'session_locale' => Session::get('locale', 'NOT SET'),
            'config_locale' => config('app.locale'),
            'session_id' => Session::getId(),
            'session_all' => Session::all(),
            'session_driver' => config('session.driver'),
            'session_files_count' => count(glob(storage_path('framework/sessions/*')))
        ];
        
        return view('home', compact('debugInfo'));
    }
    
    public function switchLang(Request $request, $locale)
    {
        if (!in_array($locale, ['en', 'ar'])) {
            return redirect()->back();
        }

        // Method 1: Use Session facade with immediate save
        Session::put('locale', $locale);
        Session::save(); // Force immediate save
        
        // Method 2: Also update application
        App::setLocale($locale);
        
        // Method 3: Add flash data to confirm change
        Session::flash('language_switched', $locale);
        
        return redirect()->back();
    }
}