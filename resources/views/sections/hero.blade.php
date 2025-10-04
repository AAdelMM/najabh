<section id="home" class="relative h-screen flex flex-col items-center justify-center text-center px-6">
  
  <!-- Background Globe Effect -->
  <div class="absolute inset-0">
    <img src="{{asset('images/planet.gif')}}" alt="Globe" 
         class="w-full h-full object-cover opacity-70">
    <div class="absolute inset-0 bg-black/60"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-3xl mx-auto">
    
    <h1 class="text-4xl md:text-[4.183rem] text-[#F1E4D0] font-bold leading-snug" style="font-family: 'gumela-bold', sans-serif;">
      {{ __('messages.hero_title') }} <br>
      <span class="text-[#F1E4D0]">{{ __('messages.hero_subtitle') }}</span>
    </h1>
    
    <p class="mt-6 text-gray-300 text-lg leading-relaxed">
      {{ __('messages.hero_description') }}
    </p>

    <!-- Buttons -->
    <div class="mt-8 flex items-center justify-center gap-4">
      <a href="#contact" 
         class="px-6 py-3 bg-[#F1E4D0] text-black rounded-full font-medium hover:bg-gray-200 transition duration-300">
        {{ __('messages.start_now') }}
      </a>
      <a href="#about" 
         class="px-6 py-3 bg-transparent border border-gray-400 text-[#F1E4D0] rounded-full font-medium hover:bg-gray-700 transition duration-300">
        {{ __('messages.learn_method') }}
      </a>
    </div>
  </div>

  <!-- Scroll Indicator -->
  <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2 opacity-70 animate-bounce">
    <div class="text-center">
      <span class="text-sm text-gray-300 mb-2 block">{{ __('messages.scroll_down') }}</span>
      <svg class="w-6 h-6 text-gray-300 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
      </svg>
    </div>
  </div>
</section>