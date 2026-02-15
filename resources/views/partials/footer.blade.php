<footer class="bg-gray-900 py-12 px-6">
  <div class="container mx-auto ">
    <div class="footer-content flex flex-col md:flex-row justify-between items-start gap-8">
      <div class="footer_description">
        <img src="{{asset('images/light_logo.png')}}" alt="Logo" class="h-10 mb-4">
        <p class="text-gray-300">{{ __('messages.footer_description') }}</p>
      </div>
      
      <div class="footer_quick_links">
        <h4 class="text-lg font-bold mb-4">{{ __('messages.quick_links') }}</h4>
        <ul class="space-y-2">
          <li><a href="#home" class="text-gray-300 hover:text-white transition duration-300">{{ __('messages.home') }}</a></li>
          <li><a href="#about" class="text-gray-300 hover:text-white transition duration-300">{{ __('messages.about') }}</a></li>
          <li><a href="#programs" class="text-gray-300 hover:text-white transition duration-300">{{ __('messages.programs') }}</a></li>
          <li><a href="#books" class="text-gray-300 hover:text-white transition duration-300">{{ __('messages.books') }}</a></li>
        </ul>
      </div>
      
      <div class="footer_contact">
        <h4 class="text-lg font-bold mb-4">{{ __('messages.contact_us') }}</h4>
        <ul class="space-y-2 text-gray-300">
          <li>{{ __('messages.email') }}: info@najabh.com</li>
          <li>{{ __('messages.phone') }}: <span class="text-lg" dir="ltr">+966 11 234 5678</span></li>
          <li>{{ __('messages.address') }}: Your Address Here</li>
        </ul>
      </div>
      
      <div class="footer_social">
        <h4 class="text-lg font-bold mb-4">{{ __('messages.follow_us') }}</h4>
        <div class="icons">
         
          <a href="#" class="text-gray-300 hover:scale-110 transition duration-300 mx-2 bg-amber-50 border rounded-[5px] h-[50px] w-[50px] flex items-center justify-center"><img src="{{asset('images/twitter.png')}}" alt="Twitter"></a>
          <a href="#" class="text-gray-300 hover:scale-110 transition duration-300 mx-2  h-[50px] w-[50px] flex items-center justify-center"><img src="{{asset('images/insta.png')}}" alt="Instagram"></a>
          <a href="#" class="text-gray-300 hover:scale-110 transition duration-300 mx-2  h-[50px] w-[50px] flex items-center justify-center"><img src="{{asset('images/linkedin.png')}}" alt="LinkedIn"></a>
           <a href="#" class="text-gray-300 hover:scale-110 transition duration-300 mx-2  h-[50px] w-[50px] flex items-center justify-center"><img src="{{asset('images/facebook.png')}}" alt="Facebook"></a>
        </div>
      </div>
    </div>
    
    <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
      <p>&copy; {{ date('Y') }} {{ __('messages.company_name') }}. {{ __('messages.all_rights_reserved') }}</p>
    </div>
  </div>
</footer>