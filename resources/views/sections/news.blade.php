<section class="py-16 bg-[#0a0a0a] text-white" x-data="{ open: false }">
    <div class="container mx-auto px-6 max-w-4xl">
        <div class="text-center">
            <h2 class="text-4xl font-bold mb-6 text-[#d4af37]">نشرة "سين"</h2>
            <p class="text-xl mb-4 text-gray-300">ليست نشرة أخبار. بل قراءة للأثر قبل أن ينعكس على السوق.</p>
            <p class="text-lg text-gray-400 mb-8">تحليل القرارات الاقتصادية والسياسية، ودراسة سيناريوهات تأثيرها على السيولة والاتجاهات.</p>
            
            <button @click="open = !open" class="text-[#d4af37] hover:underline mb-8 flex items-center justify-center w-full">
                <span x-text="open ? 'إخفاء التفاصيل' : 'اقرأ المزيد عن فلسفة سين'"></span>
                <svg class="w-4 h-4 mr-2 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
            </button>
        </div>

        <div x-show="open" x-collapse x-cloak class="bg-[#111] p-8 rounded-2xl border border-gray-800 mb-12 text-right leading-relaxed">
            <h3 class="text-2xl font-bold mb-4 text-[#d4af37]">قراءة الأثر… قبل أن يتحول إلى موجة</h3>
            <p class="mb-6">في عالم تتحرك فيه الأسواق خلال دقائق، لا يكفي أن تعرف الخبر… بل يجب أن تفهم أثره.</p>
            
            <div class="grid md:grid-cols-2 gap-6">
                <ul class="space-y-2 text-gray-300">
                    <li>• تحليل الأخبار الاقتصادية والقرارات السياسية</li>
                    <li>• تفكيك أبعادها المالية والتنظيمية</li>
                </ul>
                <ul class="space-y-2 text-gray-300">
                    <li>• دراسة السيناريوهات المحتملة وتأثيرها</li>
                    <li>• قراءة الانعكاسات على المستثمر والشركات</li>
                </ul>
            </div>
            
            <hr class="my-8 border-gray-800">
            
            <div class="space-y-6">
                <h4 class="text-[#d4af37] font-bold">ماذا نقدم في كل نشرة؟</h4>
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div class="p-4 bg-black rounded-lg"><strong>1️⃣ الحدث الرئيسي:</strong> تحليل معمّق لأهم قرار.</div>
                    <div class="p-4 bg-black rounded-lg"><strong>2️⃣ خريطة الأثر:</strong> كيف يؤثر القرار على السيولة والأسهم.</div>
                    <div class="p-4 bg-black rounded-lg"><strong>3️⃣ سيناريوهات محتملة:</strong> إيجابي، متحفظ، عالي المخاطر.</div>
                    <div class="p-4 bg-black rounded-lg"><strong>4️⃣ ماذا يعني ذلك لك؟</strong> ترجمة التحليل لخطوات عملية.</div>
                </div>
            </div>
        </div>

        <form action="{{ route('seen.subscribe') }}" method="POST" class="max-w-md mx-auto">
            @csrf
            <div class="relative">
                <input type="email" name="email" placeholder="بريدك الإلكتروني" required 
                       class="w-full bg-[#1a1a1a] border border-gray-700 rounded-full py-4 px-6 focus:outline-none focus:border-[#d4af37] transition-all">
                <button type="submit" class="absolute left-2 top-2 bottom-2 bg-[#d4af37] text-black px-8 rounded-full font-bold hover:bg-[#b8962d] transition-colors">
                    اشتراك
                </button>
            </div>
            <p class="text-xs text-center mt-4 text-gray-500">الاشتراك مجاني بالكامل لمجتمع نجابة.</p>
        </form>
    </div>
</section>