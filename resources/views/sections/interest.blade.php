
<!-- form style -->




<section >
    <div id="interest" class="py-16 bg-black flex flex-col items-center justify-center py-16 bg-black e">
        <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">{{ __('messages.register_interest') }}</h2>
        <p class="text-gray-700 mb-8">{{ __('messages.register_interest_description') }}</p>
        
        </div>
    <!-- form -->
   <!-- From Uiverse.io by ammarsaa --> 
    <div>
<form class="formR">
    <p class="titleR">{{ __('messages.register_interest') }} </p>
    <p class="messageR">{{ __('messages.register_interest_description') }} </p>
        <div class="flexR">
        <label>
            <input class="inputR" type="text" placeholder="" required="">
            <span>{{ __('messages.first_name') }}</span>
        </label>

        <label>
            <input class="inputR" type="text" placeholder="" required="">
            <span>{{ __('messages.last_name') }}</span>
        </label>
    </div>  
            
    <label>
        <input class="inputR" type="email" placeholder="" required="">
        <span>{{ __('messages.email') }}</span>
    </label> 
        
  <!--   <label>
        <input class="inputR" type="password" placeholder="" required="">
        <span>{{ __('messages.password') }}</span>
    </label>
    <label>
        <input class="inputR" type="password" placeholder="" required="">
        <span>{{ __('messages.confirm_password') }}</span>
    </label> -->
    <button class="submit">{{ __('messages.register_interest') }}</button>
   <!--  <p class="signin">{{ __('messages.already_have_account') }} <a href="#">{{ __('messages.signin') }}</a> </p> -->
</form>
</div>
</section>