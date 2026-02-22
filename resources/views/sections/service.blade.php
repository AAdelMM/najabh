<section id="financial-planning" class="py-20 px-6 bg-black min-h-screen flex items-center">
  <div class="container mx-auto max-w-6xl">
    <div class="text-right mb-16">
      <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">{{ __('messages.financial_planning_service') }}</h2>
      <p class="text-gray-400 mb-8 max-w-2xl ml-auto">
        {{ __('messages.planning_description') }}
      </p>
      <button class="px-8 py-3 border-2 border-[#f2a900] text-[#f2a900] rounded-full hover:bg-[#f2a900] hover:text-black transition duration-300 font-bold">
        {{ __('messages.book_service') }} 
      </button>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <div class="bg-[#E8DCC8] rounded-3xl p-8 hover:scale-105 transition duration-300 flex flex-col justify-between min-h-[400px]">
        <div>
          <span class="text-sm font-bold text-gray-600 block mb-2">{{ __('messages.category_one') }}</span>
          <h3 class="text-2xl font-bold text-black mb-4">{{ __('messages.build_foundation') }} </h3>
          <p class="text-black/70 text-sm mb-6">{{ __('messages.low_income_suitable') }} </p>
          <ul class="text-black text-sm space-y-2 mb-6">
            <li>• {{ __('messages.income_organization') }} </li>
            <li>• {{ __('messages.expense_control') }} </li>
            <li>• {{ __('messages.stable_foundation') }} </li>
          </ul>
        </div>
        <div class="font-bold text-black border-t border-black/10 pt-4">
          {{ __('messages.affordable_price') }} 
        </div>
      </div>

      <div class="bg-[#f2a900] rounded-3xl p-8 hover:scale-105 transition duration-300 flex flex-col justify-between min-h-[400px] shadow-xl shadow-[#f2a900]/20">
        <div>
          <span class="text-sm font-bold text-black/60 block mb-2">{{ __('messages.category_two') }}</span>
          <h3 class="text-2xl font-bold text-black mb-4">{{ __('messages.balance_growth') }}</h3>
          <p class="text-black/70 text-sm mb-6">{{ __('messages.mid_income_suitable') }} </p>
          <ul class="text-black text-sm space-y-2 mb-6">
            <li>• {{ __('messages.debt_management') }}</li>
            <li>• {{ __('messages.saving_improvement') }}</li>
            <li>• {{ __('messages.investment_planning') }} </li>
          </ul>
        </div>
        <div class="font-bold text-black border-t border-black/20 pt-4">
          {{ __('messages.medium_price') }} 
        </div>
      </div>

      <div class="bg-white rounded-3xl p-8 hover:scale-105 transition duration-300 flex flex-col justify-between min-h-[400px]">
        <div>
          <span class="text-sm font-bold text-gray-500 block mb-2">{{ __('messages.category_three') }}</span>
          <h3 class="text-2xl font-bold text-black mb-4">{{ __('messages.wealth_management') }} </h3>
          <p class="text-black/70 text-sm mb-6">{{ __('messages.high_income_suitable') }} </p>
          <ul class="text-black text-sm space-y-2 mb-6">
            <li>• {{ __('messages.asset_management') }} </li>
            <li>• {{ __('messages.income_diversification') }} </li>
            <li>• {{ __('messages.long_term_vision') }} </li>
          </ul>
        </div>
        <div class="font-bold text-black border-t border-black/10 pt-4">
          {{ __('messages.premium_price') }} 
        </div>
      </div>

    </div>

    <div class="mt-16 bg-[#0b0f19] p-8 rounded-2xl border border-white/5">
        <p class="text-white text-center text-sm leading-relaxed">
            <span class="text-[#f2a900] font-bold">منهجيتنا:</span> 
            تجمع بين <span class="underline">الذكاء الاصطناعي</span>  والتحليل <span class="underline">السلوكي الإنساني</span>  والمراجعة <span class="underline">البشرية المتخصصة</span>. 
            نحن لا نؤمن بخطة واحدة تناسب الجميع، بل بخطة تناسب صاحبها.
        </p>
    </div>
  </div>
</section>

<div class="section-divider-glow"></div>