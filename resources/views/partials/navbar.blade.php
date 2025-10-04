<nav id="main-navbar" class="fixed z-50 w-full transition-all duration-500 ease-in-out">
  <div class="container mx-auto px-6 py-4">
    <div class="flex items-center justify-between">
      
      <!-- Logo - Always visible and positioned -->
      <div class="flex items-center z-50">
        <img src="{{asset('images/light_logo.png')}}" alt="Logo" class="h-8">
      </div>

      <!-- Navigation Menu - Will animate -->
      <div id="nav-menu" class="hidden md:flex items-center space-x-2 {{ app()->getLocale() == 'ar' ? 'space-x-reverse' : '' }} nav-menu">
        <a href="#home" class="nav-link menu-item hover:text-white transition-all duration-300 rounded-full px-4 py-2" data-section="home">
          {{ __('messages.home') }}
        </a>
        <a href="#about" class="nav-link menu-item hover:text-white transition-all duration-300 rounded-full px-4 py-2" data-section="about">
          {{ __('messages.about') }}
        </a>
        <a href="#programs" class="nav-link menu-item hover:text-white transition-all duration-300 rounded-full px-4 py-2" data-section="programs">
          {{ __('messages.programs') }}
        </a>
        <a href="#books" class="nav-link menu-item hover:text-white transition-all duration-300 rounded-full px-4 py-2" data-section="books">
          {{ __('messages.books') }}
        </a>
        <a href="#contact" class="nav-link menu-item hover:text-white transition-all duration-300 rounded-full px-4 py-2" data-section="contact">
          {{ __('messages.contact') }}
        </a>
      </div>

      <!-- Language Switch - Always visible and positioned -->
      <div class="flex items-center gap-2 z-50">
        <a href="{{ url()->current() }}?lang=en"  
           class="px-3 py-1 text-sm bg-gray-800 rounded-full hover:bg-gray-600 transition duration-300 {{ app()->getLocale() == 'en' ? 'bg-white text-black' : '' }}">
          EN
        </a>
        <a href="{{ url()->current() }}?lang=ar" 
           class="px-3 py-1 text-sm bg-gray-800 rounded-full hover:bg-gray-600 transition duration-300 {{ app()->getLocale() == 'ar' ? 'bg-white text-black' : '' }}">
          AR
        </a>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden z-50">
        <button id="mobile-menu-button" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-4 pb-4">
      <a href="#home" class="block hover:text-white transition duration-300 menu-item-mobile rounded-full px-4 py-2" data-section="home">
        {{ __('messages.home') }}
      </a>
      <a href="#about" class="block hover:text-white transition duration-300 menu-item-mobile rounded-full px-4 py-2" data-section="about">
        {{ __('messages.about') }}
      </a>
      <a href="#programs" class="block hover:text-white transition duration-300 menu-item-mobile rounded-full px-4 py-2" data-section="programs">
        {{ __('messages.programs') }}
      </a>
      <a href="#books" class="block hover:text-white transition duration-300 menu-item-mobile rounded-full px-4 py-2" data-section="books">
        {{ __('messages.books') }}
      </a>
      <a href="#contact" class="block hover:text-white transition duration-300 menu-item-mobile rounded-full px-4 py-2" data-section="contact">
        {{ __('messages.contact') }}
      </a>
    </div>
  </div>
</nav>

<style>
  /* Initial state - navbar at top but menu at bottom */
  #main-navbar {
    top: 0;
    left: 0;
    right: 0;
    background: transparent;
  }

  /* Navigation menu - starts at bottom of hero */
  .nav-menu {
    position: absolute;
    left: 30%;
    top: 80vh;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(1px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 50px;
    padding: 0.5rem 1rem;
    opacity: 1;
    transition: all 0.5s ease-in-out;
  }

  /* Menu items styling */
  .menu-item {
    opacity: 0.9;
    transition: all 0.3s ease-in-out;
    color: white;
    position: relative;
  }

  .menu-item:hover {
    opacity: 1;
    transform: translateY(-2px);
  }

  /* Active menu item - F1E4D0 background */
  .menu-item.active {
    background-color: #F1E4D0 !important;
    color: #000000 !important;
    opacity: 1;
    transform: translateY(-2px);
  }

  /* Mobile menu items */
  .menu-item-mobile {
    transition: all 0.3s ease-in-out;
  }

  .menu-item-mobile.active {
    background-color: #F1E4D0;
    color: #000000;
  }

  /* Scrolled state - menu moves to top */
  #main-navbar.navbar-scrolled .nav-menu {
    position: static;
    left: auto;
    bottom: auto;
    transform: translateX(0);
    background: transparent;
    backdrop-filter: none;
    border: none;
    border-radius: 0;
    padding: 0;
    opacity: 1;
  }

  /* Ensure active state works in scrolled state too */
  #main-navbar.navbar-scrolled .menu-item.active {
    background-color: #F1E4D0 !important;
    color: #000000 !important;
  }

  /* Smooth transitions */
  .nav-menu,
  .menu-item,
  .menu-item-mobile {
    transition: all 0.3s ease-in-out;
  }

  /* Ensure logo and language switcher stay in place */
  #main-navbar .flex.items-center:first-child,
  #main-navbar .flex.items-center:last-child {
    position: relative;
    z-index: 50;
  }
</style>

<script>
  // Mobile menu toggle
  document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });

  // Navbar scroll behavior and active menu management
  document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('main-navbar');
    const heroSection = document.getElementById('home');
    const navMenu = document.querySelector('.nav-menu');
    const menuItems = document.querySelectorAll('.menu-item, .menu-item-mobile');
    
    // Function to update active menu item
    function updateActiveMenuItem() {
      const sections = document.querySelectorAll('section[id]');
      let currentSection = '';
      
      // Find which section is currently in view
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.clientHeight;
        const scrollPosition = window.scrollY;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
          currentSection = section.id;
        }
      });
      
      // Update active state for all menu items
      menuItems.forEach(item => {
        const itemSection = item.getAttribute('data-section');
        if (itemSection === currentSection) {
          item.classList.add('active');
        } else {
          item.classList.remove('active');
        }
      });
    }
    
    // Function to update navbar position
    function updateNavbarPosition() {
      const heroRect = heroSection.getBoundingClientRect();
      const isInHeroSection = heroRect.bottom > window.innerHeight * 0.8;
      
      if (isInHeroSection) {
        // In hero section - menu at bottom
        navbar.classList.remove('navbar-scrolled');
      } else {
        // Scrolled past hero section - menu at top (normal position)
        navbar.classList.add('navbar-scrolled');
      }
    }

    // Smooth scroll and set active state on click
    menuItems.forEach(item => {
      item.addEventListener('click', function(e) {
        e.preventDefault();
        const targetSection = this.getAttribute('data-section');
        const targetElement = document.getElementById(targetSection);
        
        if (targetElement) {
          // Smooth scroll to section
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
          
          // Update active state after a short delay to account for scroll
          setTimeout(updateActiveMenuItem, 100);
        }
      });
    });

    // Update active menu item on scroll
    window.addEventListener('scroll', function() {
      updateNavbarPosition();
      updateActiveMenuItem();
    });

    // Update on resize
    window.addEventListener('resize', function() {
      updateNavbarPosition();
      updateActiveMenuItem();
    });
    
    // Initial setup
    updateNavbarPosition();
    updateActiveMenuItem();
  });
</script>