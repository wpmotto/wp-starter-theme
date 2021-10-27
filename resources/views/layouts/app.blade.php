<div>

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')

  <div class="max-w-3xl mx-auto">
    <main id="main" class="py-8 prose main">
      @yield('content')
    </main>

    @hasSection('sidebar')
      <aside class="sidebar">
        @yield('sidebar')
      </aside>
    @endif
  </div>
  
  @include('partials.footer')
</div>
