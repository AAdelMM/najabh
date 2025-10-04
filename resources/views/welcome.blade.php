<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@lang('messages.hero_title')</title>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- CSS حسب اللغة -->
  @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('/css/ar.css') }}">
  @else
    <link rel="stylesheet" href="{{ asset('/css/en.css') }}">
  @endif
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @font-face {
      font-family: 'gumela-bold';
      src: url("{{asset('fonts/GumelaArabic-Bold.woff2')}}") format('woff2'),
           url("{{ asset('fonts/GumelaArabic-Bold.woff')}}") format('woff');
      font-weight: 700;
      font-style: normal;
      font-display: swap;
    } 
    
    h1, h2, h3, h4, h5, h6, span, p {
      font-family: 'gumela-bold', sans-serif;
    }
  </style>
</head>
<body class="bg-black text-white font-sans">

 
  <!-- Hero Section -->
  <section class="relative h-screen flex flex-col items-center justify-center text-center px-6">
    
    <!-- Background Globe Effect -->
    <div class="absolute inset-0">
      <img src="{{asset('images/planet.gif')}}" alt="Globe" 
           class="w-full h-full object-cover opacity-70">
      <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-3xl mx-auto">
      
      <h1 class="text-4xl md:text-[4.183rem] font-bold leading-snug" style="font-family: 'gumela-bold', sans-serif;">
        {{ __('messages.hero_title') }} <br>
        <span class="text-white">{{ __('messages.hero_subtitle') }}</span>
      </h1>
      
      <p class="mt-6 text-gray-300 text-lg leading-relaxed">
        {{ __('messages.hero_description') }}
      </p>

      <!-- Buttons -->
      <div class="mt-8 flex items-center justify-center gap-4">
        <a href="#" 
           class="px-6 py-3 bg-white text-black rounded-full font-medium hover:bg-gray-200 transition">
          {{ __('messages.start_now') }}
        </a>
        <a href="#" 
           class="px-6 py-3 bg-transparent border border-gray-400 text-gray-200 rounded-full font-medium hover:bg-gray-700 transition">
          {{ __('messages.learn_method') }}
        </a>
      </div>
    </div>

    <!-- Footer Navigation -->
    <div class="absolute bottom-6 flex gap-4 text-sm text-gray-300">
      <a href="#" class="hover:text-white">{{ __('messages.home') }}</a>
      <a href="#" class="hover:text-white">{{ __('messages.about') }}</a>
      <a href="#" class="hover:text-white">{{ __('messages.programs') }}</a>
      <a href="#" class="hover:text-white">{{ __('messages.books') }}</a>
      <a href="#" class="hover:text-white px-4 py-1 bg-gray-800 rounded-full">
        {{ __('messages.contact') }}
      </a>
    </div>

    <!-- Language Switch -->
    <div class="absolute top-6 left-6 flex gap-2">
      <a href="{{ url()->current() }}?lang=en"  
         class="px-2 py-1 text-xs bg-gray-800 rounded-full hover:bg-gray-600 {{ app()->getLocale() == 'en' ? 'bg-white text-black' : '' }}">
        EN
      </a>
      <a href="{{ url()->current() }}?lang=ar" 
         class="px-2 py-1 text-xs bg-gray-800 rounded-full hover:bg-gray-600 {{ app()->getLocale() == 'ar' ? 'bg-white text-black' : '' }}">
        AR
      </a>
    </div>
    
    <!-- Logo -->
    <div class="absolute top-6 right-6">
      <img src="{{asset('images/light_logo.png')}}" alt="Logo" class="h-10">
    </div>

  </section>
</body>
</html>