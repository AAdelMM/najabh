
<style>
    .seen-featured-section {
    background-color: #050505;
    padding: 100px 0;
    direction: rtl;
}

.section-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.gold-title {
    color: #d4af37;
    font-size: 2.5rem;
    margin-bottom: 15px;
    font-weight: 800;
}

.section-subtitle {
    color: #888;
    font-size: 1.1rem;
}

/* Card Design */
.featured-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
}

.seen-card {
    background: #111;
    border: 1px solid #222;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.4s ease;
}

.seen-card:hover {
    transform: translateY(-10px);
    border-color: #d4af37;
    box-shadow: 0 15px 40px rgba(212, 175, 55, 0.1);
}

.card-image-wrapper {
    position: relative;
    height: 220px;
}

.card-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-date {
    position: absolute;
    bottom: 15px;
    right: 15px;
    background: #d4af37;
    color: #000;
    padding: 5px 15px;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: bold;
}

.card-body {
    padding: 25px;
}

.article-title {
    color: #fff;
    font-size: 1.4rem;
    margin-bottom: 15px;
    line-height: 1.4;
}

.article-excerpt {
    color: #aaa;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 25px;
}

.btn-read-more {
    color: #d4af37;
    text-decoration: none;
    font-weight: bold;
    display: inline-flex;
    align-items: center;
}

.arrow-icon {
    margin-right: 10px;
    transition: margin 0.3s;
}

.btn-read-more:hover .arrow-icon {
    margin-right: 15px;
}

.view-all-wrapper {
    text-align: center;
    margin-top: 50px;
}

.view-all-link {
    color: #888;
    text-decoration: underline;
    transition: color 0.3s;
}

.view-all-link:hover {
    color: #d4af37;
}
</style>

<section class="seen-featured-section">
    <div class="section-container">
        <div class="section-header">
            <h2 class="gold-title">آخر تحليلات "سين"</h2>
            <p class="section-subtitle">نقرأ لك ما وراء الخبر، لنرسم لك ملامح المشهد القادم.</p>
        </div>

        <div class="featured-grid">
            @forelse($articles as $article)
                <div class="seen-card">
                    <div class="card-image-wrapper">
                        @if($article->image)
                          <img src="{{ asset('storage/' . $article->image) }}" class="hero-image-bg" alt="{{ $article->title }}">
                        @else
                            <div class="placeholder-bg"></div>
                        @endif
                        <div class="card-date">{{ $article->published_at?->format('d M') }}</div>
                    </div>
                    
                    <div class="card-body">
                        <h3 class="article-title">{{ $article->title }}</h3>
                        <p class="article-excerpt">{{ Str::limit($article->subtitle, 90) }}</p>
                            <a href="{{ route('seen.show', ['slug' => $article->slug]) }}" class="btn-read-more">
                                تفاصيل التحليل
                                <span class="arrow-icon">←</span>
                            </a>
                    </div>
                </div>
            @empty
                <p class="no-data">قريباً.. أولى نبضات "سين" التحليلية.</p>
            @endforelse
        </div>
        
        <div class="view-all-wrapper">
            <!-- <a href="{{ route('seen.index') }}" class="view-all-link">مشاهدة الأرشيف الكامل</a> -->
        </div>
    </div>
</section>