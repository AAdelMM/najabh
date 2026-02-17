<section id="programs" class="programs-section">
  <div class="container">
    <div class="section-header">
      <span class="badge">{{ __('messages.programs') }}</span>
      <h2>{{ __('messages.programs_title') }}</h2>
      <div class="header-line"></div>
      <p>{{ __('messages.programs_description') }}</p>
    </div>
    
    <div class="programs-grid">
      @for($i = 1; $i <= 3; $i++)
      <div class="program-card" id="card-{{ $i }}">
        <div class="card-glow"></div>
        <div class="card-content">
          <div class="program-icon">
             @if($i == 1) 💎 @elseif($i == 2) 📈 @else 🤝 @endif
          </div>
          <h3 id="title-{{ $i }}">{{ __('messages.program_' . $i . '_title') }}</h3>
          <p id="desc-{{ $i }}">{{ __('messages.program_' . $i . '_desc') }}</p>
          
          <div id="full-text-{{ $i }}" style="display: none;">
              {!! nl2br(e(__('messages.program_' . $i . '_full'))) !!}
          </div>
          
          <button type="button" class="learn-more-btn" style="z-index:10" onclick="showProgramDetails('{{ $i }}')" id="btn-{{ $i }}">
            {{ __('messages.learn_more') }}
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
        </div>
      </div>
      @endfor
    </div>

    <div id="program-details-panel" class="details-panel">
        <div class="details-content">
            <button class="close-panel" onclick="hideProgramDetails()" title="إغلاق">×</button>
            <div class="details-header">
                <span id="details-icon"></span>
                <h3 id="details-title"></h3>
            </div>
            <div class="details-body">
                <div id="details-text"></div> 
                
                <div class="policy-notice">
                    <small>* تقديم هذه البرامج يخضع لـ <a href="#usage-policies">{{ __('messages.usage_policies') }}</a> المعتمدة في نجابة.</small>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

