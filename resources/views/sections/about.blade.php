
<div class="wave-divider">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="fill: #161e2d; height: 60px; width: 100%; transform: rotate(180deg);">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
    </svg>
</div>

<section id="about" class="about-platform slanted-section">
   <div class="about-container">
        <div class="about-text">
            <h2>رؤية مالية.. بلمسة عصرية</h2>
            <p>
                نحن في <strong>نجابة</strong> لسنا مجرد مستشارين، نحن شركاء في رحلتك نحو الأمان المالي. ندمج بين الخبرة العميقة وأحدث التقنيات لنمنحك حلولاً ذكية تفهم احتياجاتك وتنمو مع طموحاتك.
            </p>
            <div class="about-actions">
                <button class="btn-primary">ابدأ رحلتك الآن</button>
                <button class="btn-founder-toggle" onclick="toggleFounderBio()">
                    عن المؤسس <i id="arrow-icon"  class=" fa-solid fa-chevron-down" style="color: rgb(255, 212, 59);"></i>
                </button>
            </div>
        </div>

        <div class="features-grid">
            <div class="feature-item">
                <i>📊</i>
                <h4>تحليل ذكي</h4>
                <span>قراءة دقيقة لكل بياناتك المالية.</span>
            </div>
            <div class="feature-item">
                <i>🛡️</i>
                <h4>أمان تام</h4>
                <span>خصوصيتك هي أولويتنا القصوى.</span>
            </div>
            <div class="feature-item">
                <i>💡</i>
                <h4>حلول مبتكرة</h4>
                <span>أفكار خارج الصندوق لزيادة دخلك.</span>
            </div>
            <div class="feature-item">
                <i>🤝</i>
                <h4>دعم شخصي</h4>
                <span>خبراء معك خطوة بخطوة.</span>
            </div>
        </div>

        <div id="founder-expandable" class="founder-collapsed-content">
            <div class="founder-card-wrapper">
                <div class="founder-image">
            @if(file_exists(public_path('images/bashayer.webp')))
                <img src="{{ asset('images/bashayer.webp') }}" alt="بشاير الزهراني مؤسس منصة نجابة لمفاتيح السوق " class="founder-img-fluid">
            @else
                <div class="img-placeholder">بشاير الزهراني</div>
            @endif
        </div>
                <div class="founder-info">
                    <h3>بشاير الزهراني</h3>
                    <p class="founder-tagline">مصممة ومحللة فرص استثمارية | ماجستير إدارة أعمال</p>
                    <div class="founder-bio-text">
                        <p>بشاير الزهراني تعمل في مجال تصميم وتحليل الفرص الاستثمارية، حاصلة على درجة الماجستير في إدارة الأعمال، مع اهتمام متخصص بالاقتصاد السياسي وتحليل السوق ضمن سياق النظام الاقتصادي.</p>
                        <p>تجربتها العملية شملت النجاح والخسارة، وعايشت عن قرب أثر كل قرار مالي—الجيد والسيئ—ما شكّل لديها حسًّا استراتيجيًا عميقًا في إدارة المخاطر وبناء المشاريع على أسس واقعية قابلة للنمو.</p>
                        <p>اليوم، تقود بشاير جهودها نحو تحويل المعرفة الاقتصادية والمالية إلى أصول قابلة للتقييم، الاستثمار، والدخول في شراكات استراتيجية. هي لا تنتظر السوق، بل تخلق فرصه، وتحول الفجوات السوقية إلى مشاريع ملموسة.</p>
                        <p>في كل خطوة، تركّز على النتائج الملموسة والأصول الحقيقية، بعيدًا عن الضجيج الإعلامي. بشاير لا تقدم وعودًا، بل تبني منهجًا معرفيًا واستثماريًا متكاملًا.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
