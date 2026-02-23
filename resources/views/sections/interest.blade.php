<section id="interest" class="py-16 bg-black flex flex-col items-center justify-center">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4 text-white">{{ __('messages.register_interest') }}</h2>
        <p class="text-gray-400 mb-8">{{ __('messages.register_interest_description') }}</p>
    </div>

    <div>
        <form action="{{ route('interest.store') }}" method="POST" class="formR">
            @csrf 
            @if(session('success'))
                <div class="bg-green-500/10 text-green-500 p-3 rounded-lg mb-4 text-center border border-green-500/20">
                    {{ session('success') }}
                </div>
            @endif

            <p class="titleR">{{ __('messages.register_interest') }} </p>
            
            <div class="flexR">
                <label>
                    <input class="inputR" type="text" name="first_name" required="">
                    <span>{{ __('messages.first_name') }}</span>
                </label>
                <label>
                    <input class="inputR" type="text" name="last_name" required="">
                    <span>{{ __('messages.last_name') }}</span>
                </label>
            </div>  

            <label>
                <input class="inputR" type="email" name="email" required="">
                <span>{{ __('messages.email') }}</span>
            </label> 

            <label>
                <select name="category" class="inputR" required style="appearance: none; background: #1a1a1a;">
                    <option value="" disabled selected hidden></option>
                    <option value="foundation" style="color: black;">{{ __('messages.build_foundation') }}</option>
                    <option value="growth" style="color: black;">{{ __('messages.balance_growth') }}</option>
                    <option value="wealth" style="color: black;">{{ __('messages.wealth_management') }}</option>
                </select>
                <span>{{ __('messages.interest_type') }}</span>
            </label>
            
            <button type="submit" class="submit">{{ __('messages.register_interest') }}</button>
        </form>
    </div>
</section>