<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero Section</title>
   <link rel="preload" href="{{asset('fonts/GumelaArabic-Bold.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
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
    h1, h2, h3, h4, h5, h6,span, p {
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
        في بيئة تنافسية سريعة <br>
        <span class="text-white">النظام يضاعف كفاءتك.</span>
      </h1>
      
      <p class="mt-6 text-gray-300 text-lg leading-relaxed">
        بني نظاماً يعالج فجوات التنفيذ، يقلل التكاليف، يسهل التوظيف، 
        ويسرّع اتخاذ القرار، ليمنح منشأتكم أساساً تشغيلياً ثابتاً 
        ومَرِناً للنمو المستدام.
      </p>

      <!-- Buttons -->
      <div class="mt-8 flex items-center justify-center gap-4">
        <a href="#" 
           class="px-6 py-3 bg-white text-black rounded-full font-medium hover:bg-gray-200 transition">
          ابدأ الآن
        </a>
        <a href="#" 
           class="px-6 py-3 bg-transparent border border-gray-400 text-gray-200 rounded-full font-medium hover:bg-gray-700 transition">
          تعرف على منهجيتنا
        </a>
      </div>
    </div>

    <!-- Footer Navigation -->
    <div class="absolute bottom-6 flex gap-4 text-sm text-gray-300">
      <a href="#" class="hover:text-white">الصفحة الرئيسية</a>
      <a href="#" class="hover:text-white">عن نجاح</a>
      <a href="#" class="hover:text-white">البرامج</a>
      <a href="#" class="hover:text-white">الكتب</a>
      <a href="#" class="hover:text-white px-4 py-1 bg-gray-800 rounded-full">
        تواصل معنا
      </a>
    </div>

    <!-- Language Switch -->
    <div class="absolute top-6 left-6 flex gap-2">
      <button class="px-2 py-1 text-xs bg-gray-800 rounded-full hover:bg-gray-600">EN</button>
      <button class="px-2 py-1 text-xs bg-gray-800 rounded-full hover:bg-gray-600">AR</button>
    </div>
    
    <!-- Logo -->
    <div class="absolute top-6 right-6">
      <img src="{{asset('images/light_logo.png')}}" alt="Logo" class="h-10">
    </div>

  </section>
</body>
</html>
