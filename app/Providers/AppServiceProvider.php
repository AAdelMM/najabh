<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SeenArticle;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // استبدل 'sections.seen-articles' بمسار ملف الـ blade الذي أنشأته
    View::composer('sections.article', function ($view) {
        $view->with('articles', SeenArticle::where('is_published', true)
                                            ->orderBy('published_at', 'desc')
                                            ->take(3)
                                            ->get());
    });
    }
}
