<section id="services" class="py-20 px-6 bg-black min-h-screen flex items-center">
 
  <div class="container mx-auto max-w-6xl">
    <div class="text-right mb-16">
      <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">{{ __('messages.services_title') }}</h2>
      <button class="px-6 py-2 border-2 border-white text-white rounded-full hover:bg-white hover:text-black transition duration-300">
        {{ __('messages.request_service') }}
      </button>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @for($i = 1; $i <= 3; $i++)
      <div class="bg-[#E8DCC8] rounded-3xl p-8 hover:scale-105 transition duration-300 flex items-center justify-center min-h-[280px]">
        <h3 class="text-2xl md:text-3xl font-bold text-black text-center">
          {{ __('messages.service_' . $i . '_title') }}
        </h3>
      </div>
      @endfor
    </div>
  </div>
</section>
 <div class="section-divider-glow"></div>
