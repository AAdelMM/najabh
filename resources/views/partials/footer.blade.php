<footer class="bg-gray-900 py-12 px-6">
  <div class="container mx-auto max-w-6xl">
    <div class="grid md:grid-cols-4 gap-8">
      <div>
        <img src="{{asset('images/light_logo.png')}}" alt="Logo" class="h-10 mb-4">
        <p class="text-gray-300">{{ __('messages.footer_description') }}</p>
      </div>
      
      <div>
        <h4 class="text-lg font-bold mb-4">{{ __('messages.quick_links') }}</h4>
        <ul class="space-y-2">
          <li><a href="#home" class="text-gray-300 hover:text-white transition duration-300">{{ __('messages.home') }}</a></li>
          <li><a href="#about" class="text-gray-300 hover:text-white transition duration-300">{{ __('messages.about') }}</a></li>
          <li><a href="#programs" class="text-gray-300 hover:text-white transition duration-300">{{ __('messages.programs') }}</a></li>
          <li><a href="#books" class="text-gray-300 hover:text-white transition duration-300">{{ __('messages.books') }}</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="text-lg font-bold mb-4">{{ __('messages.contact_us') }}</h4>
        <ul class="space-y-2 text-gray-300">
          <li>Email: info@example.com</li>
          <li>Phone: +1234567890</li>
          <li>Address: Your Address Here</li>
        </ul>
      </div>
      
      <div>
        <h4 class="text-lg font-bold mb-4">{{ __('messages.follow_us') }}</h4>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-300 hover:text-white transition duration-300">FB</a>
          <a href="#" class="text-gray-300 hover:text-white transition duration-300">TW</a>
          <a href="#" class="text-gray-300 hover:text-white transition duration-300">IG</a>
          <a href="#" class="text-gray-300 hover:text-white transition duration-300">IN</a>
        </div>
      </div>
    </div>
    
    <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
      <p>&copy; {{ date('Y') }} {{ __('messages.company_name') }}. {{ __('messages.all_rights_reserved') }}</p>
    </div>
  </div>
</footer>