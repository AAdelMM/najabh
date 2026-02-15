@extends('layouts.app')

@section('title', __('messages.hero_title'))

@section('content')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.programs')
    @include('sections.service')
    @include('sections.books')
    @include('sections.interest')
    @include('sections.video')
    <!-- Add more sections as needed -->
@endsection

@push('scripts')
<script>
  // Smooth scroll for navigation links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
</script>
@endpush