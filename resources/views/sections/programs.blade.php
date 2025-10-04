<section id="programs" class="py-20 px-6 bg-gray-900">
  <div class="container mx-auto max-w-6xl">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-bold mb-6">{{ __('messages.programs_title') }}</h2>
      <p class="text-gray-300 text-lg max-w-2xl mx-auto">
        {{ __('messages.programs_description') }}
      </p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      @for($i = 1; $i <= 3; $i++)
      <div class="bg-gray-800 rounded-lg p-6 hover:bg-gray-700 transition duration-300">
        <h3 class="text-xl font-bold mb-4">{{ __('messages.program_' . $i . '_title') }}</h3>
        <p class="text-gray-300 mb-4">{{ __('messages.program_' . $i . '_desc') }}</p>
        <a href="#" class="text-white hover:text-gray-300 transition duration-300">
          {{ __('messages.learn_more') }} →
        </a>
      </div>
      @endfor
    </div>
  </div>
</section>