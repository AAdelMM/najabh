@extends('layouts.app') {{-- أو اسم ملف التخطيط الرئيسي لديك --}}

@section('content')

<style>
    /* التنسيقات العامة للصفحة */
    .article-page {
        background-color: #050505; /* أسود أعمق */
        color: #e0e0e0;
        direction: rtl;
        line-height: 1.8;
        padding-bottom: 100px;
        min-height: 100vh;
    }

    /* قسم الهيرو (رأس المقال) */
    .article-hero {
        position: relative;
        height: 70vh;
        min-height: 500px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        overflow: hidden;
        margin-bottom: 60px;
    }

    .hero-image-bg {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        object-fit: cover;
        opacity: 0.5; /* تعتيم الصورة لإبراز النص */
        z-index: 1;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, #050505 5%, rgba(5, 5, 5, 0.4) 50%, transparent 100%);
        z-index: 2;
    }

    .article-header {
        position: relative;
        max-width: 900px;
        width: 100%;
        margin: 0 auto;
        padding: 0 20px 40px;
        z-index: 3;
        text-align: right;
    }

    .article-meta {
        color: #d4af37; /* لون نجابة الذهبي */
        font-weight: 700;
        font-size: 0.9rem;
        letter-spacing: 1px;
        margin-bottom: 20px;
        display: block;
        text-transform: uppercase;
    }

    .article-title-main {
        font-size: clamp(2.2rem, 6vw, 4rem);
        line-height: 1.1;
        color: #ffffff;
        font-weight: 800;
        margin-bottom: 25px;
        text-shadow: 0 4px 20px rgba(0,0,0,0.5);
    }

    /* محتوى المقال */
    .article-body-content {
        max-width: 800px;
        margin: 0 auto 80px;
        padding: 0 25px;
        font-size: 1.3rem;
        color: #cfcfcf;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* دعم تنسيقات الـ Rich Editor (مهم جداً لـ Filament) */
    .article-body-content p {
        margin-bottom: 30px;
        opacity: 0.95;
    }

    .article-body-content h2, .article-body-content h3 {
        color: #ffffff;
        margin: 50px 0 25px;
        font-weight: 700;
        border-right: 4px solid #d4af37;
        padding-right: 15px;
    }

    .article-body-content blockquote {
        border-right: 4px solid #d4af37;
        background: #111;
        padding: 20px 30px;
        margin: 40px 0;
        font-style: italic;
        color: #d4af37;
    }

    .article-body-content img {
        border-radius: 24px;
        margin: 40px 0;
        border: 1px solid #222;
        width: 100%;
        height: auto;
    }

    .article-body-content ul, .article-body-content ol {
        margin-bottom: 30px;
        padding-right: 25px;
    }

    .article-body-content li {
        margin-bottom: 12px;
    }

    /* الفوتر (صندوق الاشتراك) */
    .article-footer-box {
        transition: transform 0.3s ease;
    }
    
    .article-footer-box:hover {
        transform: translateY(-5px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .article-hero { height: 50vh; }
        .article-body-content { font-size: 1.15rem; }
        .article-title-main { font-size: 2.2rem; }
    }
</style>


<div class="article-page">
    <div class="article-hero">
        @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" class="hero-image-bg" alt="{{ $article->title }}">
        @endif
        <div class="hero-overlay"></div>
        
        <header class="article-header">
            <span class="article-meta">نشرة سين • {{ $article->published_at?->format('d M, Y') }}</span>
            <h1 class="article-title-main">{{ $article->title }}</h1>
            @if($article->subtitle)
                <p class="text-xl text-gray-400">{{ $article->subtitle }}</p>
            @endif
        </header>
    </div>

    <article class="article-body-content">
        {!! $article->content !!} {{-- نستخدم !! لعرض تنسيق الـ Rich Editor --}}
    </article>

    <footer class="max-w-3xl mx-auto px-6">
        <div class="bg-[#111] p-8 rounded-3xl border border-[#d4af37]/20 text-center">
            <h3 class="text-[#d4af37] text-xl font-bold mb-4">هل أعجبك هذا التحليل؟</h3>
            <p class="text-gray-400 mb-6 text-sm">اشترك في "مجتمع نجابة" لتصلك نشرة سين دورياً على بريدك.</p>
            <a href="/#newsletter" class="inline-block bg-[#d4af37] text-black px-8 py-3 rounded-full font-bold">اشترك الآن</a>
        </div>
    </footer>
</div>
@endsection