<header class="banner bg-light shadow-xl py-4">
  <div class="wrap flex justify-between">
    <a class="font-bold text-primary" href="{{ home_url('/') }}">
      <x-logo class="h-8">{{ get_bloginfo('title') }}</x-logo>
    </a>

    <div class="text-right">
      <modal title="Example Modal">
        <template v-slot:button>
            <span class="text-primary">Open a modal</span>
        </template>
        <template v-slot:body>
            <div class="p-12">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quod et minima quam a molestias cum non rerum enim laborum ipsum, ratione eius consequuntur dolorum odit assumenda pariatur autem at.</p>
            </div>
        </template>
      </modal>
    
  
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation', 
          'menu_class' => 'nav-primary space-x-6 hidden md:flex', 
          'echo' => false
        ]) !!}
      @endif

      @if (has_nav_menu('mobile_navigation'))
      <slide-over class="md:hidden">
        <template v-slot:button>
          <x-icons.menu class="text-primary h-8"></x-icons.menu>
        </template>
        {!! wp_nav_menu([
          'container' => 'nav',
          'theme_location' => 'mobile_navigation', 
          'menu_class' => 'nav-mobile', 
          'echo' => false
        ]) !!}
      </slide-over>
      @endif
      
    </div>
  </div>
</header>