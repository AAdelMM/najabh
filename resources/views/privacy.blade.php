@extends('layouts.app')

@section('title', __('messages.usage_policies'))

<section id="privacy-policy" class="privacy-section">
    <div class="container">
        <div class="section-header">
            <span class="badge">الأمان والخصوصية</span>
            <h2>سياسة الخصوصية</h2>
            <div class="header-line"></div>
            <p>تحرص منصة نجابة على احترام خصوصيتك وحماية بياناتك الشخصية وفق أعلى معايير الشفافية.</p>
        </div>

        <div class="text-center mb-10">
            <button class="expand-privacy-btn" onclick="togglePrivacyDrawer()">
                <span id="privacy-btn-text">قراءة سياسة الخصوصية كاملة</span>
                <i id="privacy-icon">↓</i>
            </button>
        </div>

        <div id="privacy-drawer" class="policy-drawer">
            <div class="full-content-box">
                
                <div class="policy-item">
                    <h3>أولاً: المعلومات التي يتم جمعها</h3>
                    <p>نقوم بجمع المعلومات التي تقدمها طوعاً مثل الاسم ومعلومات التواصل، البيانات المالية الأساسية لخدمات التخطيط المالي، وتفاصيل المشاريع. كما نجمع معلومات تقنية مثل نوع الجهاز، المتصفح، وعنوان الـ (IP).</p>
                </div>

                <div class="policy-item">
                    <h3>ثانياً: كيفية استخدام المعلومات</h3>
                    <p>تُستخدم البيانات لتقديم وتحسين جودة الخدمات، إعداد الخطط المالية، التواصل معك بخصوص التحديثات، وتطوير تجربة الاستخدام داخل المنصة.</p>
                </div>

                <div class="policy-item">
                    <h3>ثالثاً: خصوصية التخطيط المالي</h3>
                    <p>يتم التعامل مع بياناتك المالية بسرية تامة وتُستخدم فقط لأغراض التحليل وبناء الخطة[cite: 71]. لا يتم مشاركة هذه المعلومات مع أطراف خارجية دون موافقة صريحة منك[cite: 72].</p>
                </div>

                <div class="policy-item">
                    <h3>رابعاً: حماية البيانات وحقوقك</h3>
                    <p>نتخذ إجراءات تقنية لمنع الوصول غير المصرح به أو فقد البيانات[cite: 78, 79]. كما يحق لك طلب معرفة بياناتك، تحديثها، أو حذفها عبر قنواتنا الرسمية.</p>
                </div>

                <div class="policy-item alert">
                    <p>
                        <strong>إقرار الموافقة</strong><br>
                        باستخدامك لمنصة نجابة، فإنك تقرّ بأنك قرأت سياسة الخصوصية هذه وفهمتها ووافقت عليها[cite: 94]. وفي حال وجود استفسارات، يمكنك التواصل مع فريق نجابة عبر قنوات التواصل المعتمدة[cite: 93].
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>