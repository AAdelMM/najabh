<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', __('messages.hero_title'))</title>
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
    
    h1, h2, h3, h4, h5, h6, span, p ,a{
      font-family: 'gumela-bold', sans-serif;
    }

    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }

    /* Ensure sections have proper spacing */
    section:not(#home) {
      scroll-margin-top: 80px;
    }

    /* Hero section specific styling */
    #home {
      position: relative;
    }
  </style>
  @stack('styles')
</head>
<body class="bg-black text-white font-sans">

  <!-- Navigation - Placed at top level -->
  @include('partials.navbar')

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  @include('partials.footer')

  @stack('scripts')

 @push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item, .menu-item-mobile');
    const sections = document.querySelectorAll('section[id]');
    
    // Enhanced active section detection
    function getCurrentSection() {
      let currentSection = 'home';
      let maxVisibility = 0;
      
      sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const visibility = Math.min(rect.bottom, window.innerHeight) - Math.max(rect.top, 0);
        
        if (visibility > maxVisibility && visibility > window.innerHeight * 0.3) {
          maxVisibility = visibility;
          currentSection = section.id;
        }
      });
      
      return currentSection;
    }
    
    function updateActiveMenuItem() {
      const currentSection = getCurrentSection();
      
      menuItems.forEach(item => {
        const itemSection = item.getAttribute('data-section');
        if (itemSection === currentSection) {
          item.classList.add('active');
        } else {
          item.classList.remove('active');
        }
      });
    }
    
    // Click handler for menu items
    menuItems.forEach(item => {
      item.addEventListener('click', function(e) {
        e.preventDefault();
        const targetSection = this.getAttribute('data-section');
        const targetElement = document.getElementById(targetSection);
        
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
          
          // Update active state immediately for better UX
          menuItems.forEach(i => i.classList.remove('active'));
          this.classList.add('active');
        }
      });
    });
    
    // Update active state on scroll with throttle for performance
    let scrollTimeout;
    window.addEventListener('scroll', function() {
      if (scrollTimeout) {
        clearTimeout(scrollTimeout);
      }
      scrollTimeout = setTimeout(updateActiveMenuItem, 100);
    });
    
    // Initial active state
    updateActiveMenuItem();
  });
</script>
@endpush

</body>
</html>