<nav id="main-navbar" class="fixed z-50 w-full transition-all duration-500 ease-in-out">
  <div class="container mx-auto px-6 py-4">
    <div class="flex items-center justify-between">
      
      <!-- Logo - Always visible and positioned -->
      <div class="flex items-center z-50">
        <a href="/"><img src="{{asset('images/light_logo.png')}}" alt="Logo" class="h-8"></a>
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
        <a href="#videos_lib" class="nav-link menu-item hover:text-white transition-all duration-300 rounded-full px-4 py-2" data-section="videos_lib">
          {{ __('messages.videos_lib') }}
        </a>
      </div>

  
<!-- Language Switch new style start-->

<label class="switch">
  <input class="cb" type="checkbox"/>
  <span class="toggle">
    <span class="left">en</span>
    <span class="right">ar</span>
  </span>
</label>


<!-- Language Switch new style end-->


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

  /*switch style */
  /*switch style */
/* The switch - the box around the slider */
.switch {
  font-size: 17px;
  position: relative;
  display: inline-block;
  width: 5em;
  height: 2.5em;
  user-select: none;
}

/* Hide default HTML checkbox */
.switch .cb {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.toggle {
  position: absolute;
  cursor: pointer;
  width: 100%;
  height: 100%;
  background-color: #373737;
  border-radius: 0.1em;
  transition: 0.4s;
  text-transform: uppercase;
  font-weight: 700;
  overflow: hidden;
  box-shadow: -0.3em 0 0 0 #373737, -0.3em 0.3em 0 0 #373737,
    0.3em 0 0 0 #373737, 0.3em 0.3em 0 0 #373737, 0 0.3em 0 0 #373737;
}

.toggle > .left {
  position: absolute;
  display: flex;
  width: 50%;
  height: 88%;
  background-color: #f3f3f3;
  color: #373737;
  left: 0;
  bottom: 0;
  align-items: center;
  justify-content: center;
  transform-origin: right;
  transform: rotateX(10deg);
  transform-style: preserve-3d;
  transition: all 150ms;
}

.left::before {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  background-color: rgb(206, 206, 206);
  transform-origin: center left;
  transform: rotateY(90deg);
}

.left::after {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  background-color: rgb(112, 112, 112);
  transform-origin: center bottom;
  transform: rotateX(90deg);
}

.toggle > .right {
  position: absolute;
  display: flex;
  width: 50%;
  height: 88%;
  background-color: #f3f3f3;
  color: #111827;
  right: 1px;
  bottom: 0;
  align-items: center;
  justify-content: center;
  transform-origin: left;
  transform: rotateX(10deg) rotateY(-45deg);
  transform-style: preserve-3d;
  transition: all 150ms;
}

.right::before {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  background-color: rgb(206, 206, 206);
  transform-origin: center right;
  transform: rotateY(-90deg);
}

.right::after {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  background-color: rgb(112, 112, 112);
  transform-origin: center bottom;
  transform: rotateX(90deg);
}

.switch input:checked + .toggle > .left {
  transform: rotateX(10deg) rotateY(45deg);
  color: rgb(206, 206, 206);
}

.switch input:checked + .toggle > .right {
  transform: rotateX(10deg) rotateY(0deg);
  color: #487bdb;
}

  /*switch style end */
  
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
    left: 25vw;
    top: 80vh;
    transform: translateY(0);
    background: rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(1px);
    border: 2px solid rgba(255, 255, 255, 0.1);
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
    transform: translateY(40%);
    background: transparent;
    backdrop-filter: none;
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 50px;
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

  // Language switch toggle en to ar
 const languageSwitch = document.querySelector('.switch .cb');

languageSwitch.addEventListener('change', function() {
  const currentUrl = window.location.href;
  // When checked = AR, when unchecked = EN
  const newLang = this.checked ? 'ar' : 'en';
  
  const newUrl = currentUrl.includes('?lang=')
    ? currentUrl.replace(/lang=(en|ar)/, `lang=${newLang}`)
    : `${currentUrl}${currentUrl.includes('?') ? '&' : '?'}lang=${newLang}`;
  
  window.location.href = newUrl;
});

// Set the checkbox state based on current URL when page loads
document.addEventListener('DOMContentLoaded', function() {
  const urlParams = new URLSearchParams(window.location.search);
  const currentLang = urlParams.get('lang');
  const languageSwitch = document.querySelector('.switch .cb');
  
  if (languageSwitch) {
    // If lang=ar in URL, check the box (since checked = AR)
    languageSwitch.checked = (currentLang === 'ar');
  }
});

</script>
