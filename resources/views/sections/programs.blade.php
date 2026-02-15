<section id="programs" class="programs-section">
  <div class="container">
    <div class="section-header">
      <span class="badge">{{ __('messages.programs') ?? 'خدماتنا' }}</span>
      <h2>{{ __('messages.programs_title') }}</h2>
      <div class="header-line"></div>
      <p>
        {{ __('messages.programs_description') }}
      </p>
    </div>
    
    <div class="programs-grid">
      @for($i = 1; $i <= 3; $i++)
      <div class="program-card">
        <div class="card-glow"></div>
        <div class="card-content">
          <div class="program-icon">
             @if($i == 1) 💎 @elseif($i == 2) 📈 @else 🤝 @endif
          </div>
          <h3>{{ __('messages.program_' . $i . '_title') }}</h3>
          <p>{{ __('messages.program_' . $i . '_desc') }}</p>
          
          <a href="#" class="learn-more-btn">
            {{ __('messages.learn_more') }}
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>
      @endfor
    </div>
  </div>
</section>