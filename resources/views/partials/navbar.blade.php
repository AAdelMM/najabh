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
     <!--  <div class="flex items-center gap-2 z-50">
        <a href="{{ url()->current() }}?lang=en"  
           class="px-3 py-1 text-sm bg-gray-800 rounded-full hover:bg-gray-600 transition duration-300 {{ app()->getLocale() == 'en' ? 'bg-white text-black' : '' }}">
          EN
        </a>
        <a href="{{ url()->current() }}?lang=ar" 
           class="px-3 py-1 text-sm bg-gray-800 rounded-full hover:bg-gray-600 transition duration-300 {{ app()->getLocale() == 'ar' ? 'bg-white text-black' : '' }}">
          AR
        </a>
      </div> -->
<!-- Language Switch new style start-->
<div class="toggle-container">
  <div class="toggle-wrap">
    <input class="toggle-input" id="holo-toggle" type="checkbox" {{ app()->getLocale() == 'en' ? 'checked' : '' }} />
    <label class="toggle-track" for="holo-toggle">
      <div class="track-lines">
        <div class="track-line"></div>
      </div>

      <div class="toggle-thumb">
        <div class="thumb-core"></div>
        <div class="thumb-inner"></div>
        <div class="thumb-scan"></div>
        <div class="thumb-particles">
          <div class="thumb-particle"></div>
          <div class="thumb-particle"></div>
          <div class="thumb-particle"></div>
          <div class="thumb-particle"></div>
          <div class="thumb-particle"></div>
        </div>
      </div>

      <div class="toggle-data">
        <div class="data-text off" style="font-size: medium; color:white;">AR</div>
        <div class="data-text on" style="font-size: medium;">EN</div>
        <div class="status-indicator off"></div>
        <div class="status-indicator on"></div>
      </div>

      <div class="energy-rings">
        <div class="energy-ring"></div>
        <div class="energy-ring"></div>
        <div class="energy-ring"></div>
      </div>

      <div class="interface-lines">
        <div class="interface-line"></div>
        <div class="interface-line"></div>
        <div class="interface-line"></div>
        <div class="interface-line"></div>
        <div class="interface-line"></div>
        <div class="interface-line"></div>
      </div>

      <div class="toggle-reflection"></div>
      <div class="holo-glow"></div>
    </label>
  </div>
</div>
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
  /* From Uiverse.io by reglobby - Modified with custom colors */
  .toggle-container {
    position: relative;
    width: 150px;
    display: flex;
    flex-direction: column;
    align-items: center;
    perspective: 800px;
    z-index: 5;
  }

  .toggle-wrap {
    position: relative;
    width: 100%;
    height: 60px;
    transform-style: preserve-3d;
  }

  .toggle-input {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
  }

  .toggle-track {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(131, 84, 64, 0.4); /* #835440 */
    border-radius: 30px;
    cursor: pointer;
    box-shadow:
      0 0 15px rgba(131, 84, 64, 0.2),
      inset 0 0 10px rgba(0, 0, 0, 0.8);
    overflow: hidden;
    backdrop-filter: blur(5px);
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    border: 1px solid rgba(224, 159, 61, 0.3); /* #E09F3D */
  }

  .toggle-track::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(
        ellipse at center,
        rgba(224, 159, 61, 0.1) 0%, /* #E09F3D */
        rgba(0, 0, 0, 0) 70%
      ),
      linear-gradient(90deg, rgba(131, 84, 64, 0.1) 0%, rgba(131, 84, 64, 0.2) 100%); /* #835440 */
    opacity: 0.6;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .toggle-track::after {
    content: "";
    position: absolute;
    top: 2px;
    left: 2px;
    right: 2px;
    height: 10px;
    background: linear-gradient(
      90deg,
      rgba(241, 228, 208, 0.3) 0%, /* #F1E4D0 */
      rgba(224, 159, 61, 0.1) 100% /* #E09F3D */
    );
    border-radius: 30px 30px 0 0;
    opacity: 0.7;
    filter: blur(1px);
  }

  .track-lines {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    transform: translateY(-50%);
    overflow: hidden;
  }

  .track-line {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: repeating-linear-gradient(
      90deg,
      rgba(224, 159, 61, 0.3) 0px, /* #E09F3D */
      rgba(224, 159, 61, 0.3) 5px, /* #E09F3D */
      transparent 5px,
      transparent 15px
    );
    animation: track-line-move 3s linear infinite;
  }

  @keyframes track-line-move {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(20px);
    }
  }

  .toggle-thumb {
    position: absolute;
    width: 54px;
    height: 54px;
    left: 3px;
    top: 3px;
    background: radial-gradient(
      circle,
      rgba(131, 84, 64, 0.9) 0%, /* #835440 */
      rgba(131, 84, 64, 0.8) 100% /* #835440 */
    );
    border-radius: 50%;
    box-shadow:
      0 2px 15px rgba(0, 0, 0, 0.5),
      inset 0 0 15px rgba(224, 159, 61, 0.5); /* #E09F3D */
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    z-index: 2;
    border: 1px solid rgba(224, 159, 61, 0.6); /* #E09F3D */
    overflow: hidden;
    transform-style: preserve-3d;
  }

  .thumb-core {
    position: absolute;
    width: 40px;
    height: 40px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: radial-gradient(
      circle,
      rgba(224, 159, 61, 0.6) 0%, /* #E09F3D */
      rgba(131, 84, 64, 0.2) 100% /* #835440 */
    );
    border-radius: 50%;
    box-shadow: 0 0 20px rgba(224, 159, 61, 0.5); /* #E09F3D */
    opacity: 0.9;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .thumb-inner {
    position: absolute;
    width: 25px;
    height: 25px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: radial-gradient(
      circle,
      rgba(255, 255, 255, 0.8) 0%,
      rgba(241, 228, 208, 0.5) 100% /* #F1E4D0 */
    );
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(241, 228, 208, 0.7); /* #F1E4D0 */
    opacity: 0.7;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    animation: pulse 2s infinite alternate;
  }

  @keyframes pulse {
    0% {
      opacity: 0.5;
      transform: translate(-50%, -50%) scale(0.9);
    }
    100% {
      opacity: 0.8;
      transform: translate(-50%, -50%) scale(1.1);
    }
  }

  .thumb-scan {
    position: absolute;
    width: 100%;
    height: 5px;
    background: linear-gradient(
      90deg,
      rgba(0, 0, 0, 0) 0%,
      rgba(224, 159, 61, 0.5) 20%, /* #E09F3D */
      rgba(241, 228, 208, 0.8) 50%, /* #F1E4D0 */
      rgba(224, 159, 61, 0.5) 80%, /* #E09F3D */
      rgba(0, 0, 0, 0) 100%
    );
    top: 0;
    left: 0;
    filter: blur(1px);
    animation: thumb-scan 2s linear infinite;
    opacity: 0.7;
  }

  @keyframes thumb-scan {
    0% {
      top: -5px;
      opacity: 0;
    }
    20% {
      opacity: 0.7;
    }
    80% {
      opacity: 0.7;
    }
    100% {
      top: 54px;
      opacity: 0;
    }
  }

  .thumb-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    overflow: hidden;
  }

  .thumb-particle {
    position: absolute;
    width: 3px;
    height: 3px;
    background: rgba(241, 228, 208, 0.8); /* #F1E4D0 */
    border-radius: 50%;
    box-shadow: 0 0 5px rgba(241, 228, 208, 0.8); /* #F1E4D0 */
    animation: thumb-particle-float 3s infinite ease-out;
    opacity: 0;
  }

  .thumb-particle:nth-child(1) {
    top: 70%;
    left: 30%;
    animation-delay: 0.2s;
  }

  .thumb-particle:nth-child(2) {
    top: 60%;
    left: 60%;
    animation-delay: 0.6s;
  }

  .thumb-particle:nth-child(3) {
    top: 50%;
    left: 40%;
    animation-delay: 1s;
  }

  .thumb-particle:nth-child(4) {
    top: 40%;
    left: 70%;
    animation-delay: 1.4s;
  }

  .thumb-particle:nth-child(5) {
    top: 80%;
    left: 50%;
    animation-delay: 1.8s;
  }

  @keyframes thumb-particle-float {
    0% {
      transform: translateY(0) scale(1);
      opacity: 0;
    }
    20% {
      opacity: 0.8;
    }
    100% {
      transform: translateY(-30px) scale(0);
      opacity: 0;
    }
  }

  .toggle-data {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 1;
  }

  .data-text {
    position: absolute;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all 0.5s ease;
  }

  .data-text.off {
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 1;
    color: rgba(224, 159, 61, 0.6); /* #E09F3D */
    text-shadow: 0 0 5px rgba(224, 159, 61, 0.4); /* #E09F3D */
  }

  .data-text.on {
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0;
    color: rgba(241, 228, 208, 0.6); /* #F1E4D0 */
    text-shadow: 0 0 5px rgba(241, 228, 208, 0.4); /* #F1E4D0 */
  }

  .status-indicator {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: radial-gradient(
      circle,
      rgba(224, 159, 61, 0.8) 0%, /* #E09F3D */
      rgba(131, 84, 64, 0.4) 100% /* #835440 */
    );
    box-shadow: 0 0 10px rgba(224, 159, 61, 0.5); /* #E09F3D */
    animation: blink 2s infinite alternate;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .status-indicator.off {
    top: 25px;
    right: 15px;
  }

  .status-indicator.on {
    top: 25px;
    left: 15px;
    opacity: 0;
    background: radial-gradient(
      circle,
      rgba(241, 228, 208, 0.8) 0%, /* #F1E4D0 */
      rgba(224, 159, 61, 0.4) 100% /* #E09F3D */
    );
    box-shadow: 0 0 10px rgba(241, 228, 208, 0.5); /* #F1E4D0 */
  }

  @keyframes blink {
    0%,
    100% {
      opacity: 0.5;
      transform: scale(0.9);
    }
    50% {
      opacity: 1;
      transform: scale(1.1);
    }
  }

  .energy-rings {
    position: absolute;
    width: 54px;
    height: 54px;
    left: 3px;
    top: 3px;
    pointer-events: none;
    z-index: 1;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .energy-ring {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    border: 2px solid transparent;
    opacity: 0;
  }

  .energy-ring:nth-child(1) {
    width: 50px;
    height: 50px;
    border-top-color: rgba(224, 159, 61, 0.5); /* #E09F3D */
    border-right-color: rgba(224, 159, 61, 0.3); /* #E09F3D */
    animation: spin 3s linear infinite;
  }

  .energy-ring:nth-child(2) {
    width: 40px;
    height: 40px;
    border-bottom-color: rgba(224, 159, 61, 0.5); /* #E09F3D */
    border-left-color: rgba(224, 159, 61, 0.3); /* #E09F3D */
    animation: spin 2s linear infinite reverse;
  }

  .energy-ring:nth-child(3) {
    width: 30px;
    height: 30px;
    border-left-color: rgba(224, 159, 61, 0.5); /* #E09F3D */
    border-top-color: rgba(224, 159, 61, 0.3); /* #E09F3D */
    animation: spin 1.5s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: translate(-50%, -50%) rotate(0deg);
    }
    100% {
      transform: translate(-50%, -50%) rotate(360deg);
    }
  }

  .interface-lines {
    position: absolute;
    width: 100%;
    height: 100%;
    pointer-events: none;
  }

  .interface-line {
    position: absolute;
    background: rgba(224, 159, 61, 0.3); /* #E09F3D */
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .interface-line:nth-child(1) {
    width: 15px;
    height: 1px;
    bottom: -5px;
    left: 20px;
  }

  .interface-line:nth-child(2) {
    width: 1px;
    height: 8px;
    bottom: -12px;
    left: 35px;
  }

  .interface-line:nth-child(3) {
    width: 25px;
    height: 1px;
    bottom: -12px;
    left: 35px;
  }

  .interface-line:nth-child(4) {
    width: 15px;
    height: 1px;
    bottom: -5px;
    right: 20px;
  }

  .interface-line:nth-child(5) {
    width: 1px;
    height: 8px;
    bottom: -12px;
    right: 35px;
  }

  .interface-line:nth-child(6) {
    width: 25px;
    height: 1px;
    bottom: -12px;
    right: 10px;
  }

  .toggle-reflection {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: linear-gradient(
      135deg,
      rgba(255, 255, 255, 0.1) 0%,
      rgba(255, 255, 255, 0) 40%
    );
    border-radius: 30px;
    pointer-events: none;
  }

  .toggle-label {
    position: relative;
    margin-top: 20px;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-align: center;
    color: rgba(224, 159, 61, 0.7); /* #E09F3D */
    text-shadow: 0 0 10px rgba(224, 159, 61, 0.5); /* #E09F3D */
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .holo-glow {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 30px;
    background: radial-gradient(
      ellipse at center,
      rgba(224, 159, 61, 0.2) 0%, /* #E09F3D */
      rgba(0, 0, 0, 0) 70%
    );
    filter: blur(10px);
    opacity: 0.5;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    z-index: 0;
  }

  .toggle-input:checked + .toggle-track {
    background: rgba(131, 84, 64, 0.4); /* #835440 */
    border-color: rgba(241, 228, 208, 0.3); /* #F1E4D0 */
    box-shadow:
      0 0 15px rgba(241, 228, 208, 0.2), /* #F1E4D0 */
      inset 0 0 10px rgba(0, 0, 0, 0.8);
  }

  .toggle-input:checked + .toggle-track::before {
    background: radial-gradient(
        ellipse at center,
        rgba(241, 228, 208, 0.1) 0%, /* #F1E4D0 */
        rgba(0, 0, 0, 0) 70%
      ),
      linear-gradient(90deg, rgba(131, 84, 64, 0.1) 0%, rgba(131, 84, 64, 0.2) 100%); /* #835440 */
  }

  .toggle-input:checked + .toggle-track::after {
    background: linear-gradient(
      90deg,
      rgba(241, 228, 208, 0.3) 0%, /* #F1E4D0 */
      rgba(224, 159, 61, 0.1) 100% /* #E09F3D */
    );
  }

  .toggle-input:checked + .toggle-track .track-line {
    background: repeating-linear-gradient(
      90deg,
      rgba(241, 228, 208, 0.3) 0px, /* #F1E4D0 */
      rgba(241, 228, 208, 0.3) 5px, /* #F1E4D0 */
      transparent 5px,
      transparent 15px
    );
    animation-direction: reverse;
  }

  .toggle-input:checked + .toggle-track .toggle-thumb {
    left: calc(100% - 57px);
    background: radial-gradient(
      circle,
      rgba(131, 84, 64, 0.9) 0%, /* #835440 */
      rgba(131, 84, 64, 0.8) 100% /* #835440 */
    );
    border-color: rgba(241, 228, 208, 0.6); /* #F1E4D0 */
    box-shadow:
      0 2px 15px rgba(0, 0, 0, 0.5),
      inset 0 0 15px rgba(241, 228, 208, 0.5); /* #F1E4D0 */
  }

  .toggle-input:checked + .toggle-track .thumb-core {
    background: radial-gradient(
      circle,
      rgba(241, 228, 208, 0.6) 0%, /* #F1E4D0 */
      rgba(131, 84, 64, 0.2) 100% /* #835440 */
    );
    box-shadow: 0 0 20px rgba(241, 228, 208, 0.5); /* #F1E4D0 */
  }

  .toggle-input:checked + .toggle-track .thumb-inner {
    background: radial-gradient(
      circle,
      rgba(255, 255, 255, 0.8) 0%,
      rgba(224, 159, 61, 0.5) 100% /* #E09F3D */
    );
    box-shadow: 0 0 10px rgba(224, 159, 61, 0.7); /* #E09F3D */
  }

  .toggle-input:checked + .toggle-track .thumb-scan {
    background: linear-gradient(
      90deg,
      rgba(0, 0, 0, 0) 0%,
      rgba(241, 228, 208, 0.5) 20%, /* #F1E4D0 */
      rgba(224, 159, 61, 0.8) 50%, /* #E09F3D */
      rgba(241, 228, 208, 0.5) 80%, /* #F1E4D0 */
      rgba(0, 0, 0, 0) 100%
    );
  }

  .toggle-input:checked + .toggle-track .thumb-particle {
    background: rgba(224, 159, 61, 0.8); /* #E09F3D */
    box-shadow: 0 0 5px rgba(224, 159, 61, 0.8); /* #E09F3D */
  }

  .toggle-input:checked + .toggle-track .data-text.off {
    opacity: 0;
  }

  .toggle-input:checked + .toggle-track .data-text.on {
    opacity: 1;
  }

  .toggle-input:checked + .toggle-track .status-indicator.off {
    opacity: 0;
  }

  .toggle-input:checked + .toggle-track .status-indicator.on {
    opacity: 1;
  }

  .toggle-input:checked + .toggle-track .energy-rings {
    left: calc(100% - 57px);
  }

  .toggle-input:checked + .toggle-track .energy-ring {
    opacity: 1;
  }

  .toggle-input:checked + .toggle-track .energy-ring:nth-child(1) {
    border-top-color: rgba(241, 228, 208, 0.5); /* #F1E4D0 */
    border-right-color: rgba(241, 228, 208, 0.3); /* #F1E4D0 */
  }

  .toggle-input:checked + .toggle-track .energy-ring:nth-child(2) {
    border-bottom-color: rgba(241, 228, 208, 0.5); /* #F1E4D0 */
    border-left-color: rgba(241, 228, 208, 0.3); /* #F1E4D0 */
  }

  .toggle-input:checked + .toggle-track .energy-ring:nth-child(3) {
    border-left-color: rgba(241, 228, 208, 0.5); /* #F1E4D0 */
    border-top-color: rgba(241, 228, 208, 0.3); /* #F1E4D0 */
  }

  .toggle-input:checked + .toggle-track .interface-line {
    background: rgba(241, 228, 208, 0.3); /* #F1E4D0 */
  }

  .toggle-input:checked ~ .toggle-label {
    color: rgba(241, 228, 208, 0.7); /* #F1E4D0 */
    text-shadow: 0 0 10px rgba(241, 228, 208, 0.5); /* #F1E4D0 */
  }

  .toggle-input:checked + .toggle-track .holo-glow {
    background: radial-gradient(
      ellipse at center,
      rgba(241, 228, 208, 0.2) 0%, /* #F1E4D0 */
      rgba(0, 0, 0, 0) 70%
    );
  }

  .toggle-input:hover + .toggle-track {
    box-shadow:
      0 0 20px rgba(224, 159, 61, 0.3), /* #E09F3D */
      inset 0 0 10px rgba(0, 0, 0, 0.8);
  }

  .toggle-input:checked:hover + .toggle-track {
    box-shadow:
      0 0 20px rgba(241, 228, 208, 0.3), /* #F1E4D0 */
      inset 0 0 10px rgba(0, 0, 0, 0.8);
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
</script>
