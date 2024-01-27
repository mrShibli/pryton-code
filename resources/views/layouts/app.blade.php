<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="@yield('description_custom')@if(!Request::route()->named('seo') && !Request::route()->named('profile')){{trans('seo.description')}}@endif">
  <meta name="keywords" content="@yield('keywords_custom'){{ trans('seo.keywords') }}" />
  <meta name="theme-color" content="{{ auth()->check() && auth()->user()->dark_mode == 'on' ? '#303030' : $settings->color_default }}">
  <title>{{ auth()->check() && User::notificationsCount() ? '('.User::notificationsCount().') ' : '' }}@section('title')@show {{$settings->title.' - '.__('seo.slogan')}}</title>
  <!-- Favicon -->

  <link href="{{ url('public/img', $settings->favicon) }}" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  

  @if ($settings->google_tag_manager_head != '')
  {!! $settings->google_tag_manager_head !!}
  @endif

  @include('includes.css_general')

  @if ($settings->status_pwa)
    @laravelPWA
  @endif

  @yield('css')
  <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" /> <!-- Recommended -->
 @if ($settings->google_analytics != '')
  {!! $settings->google_analytics !!}
  @endif

<!-- Place the first <script> tag in your HTML's <head> -->
  <script src="https://cdn.tiny.cloud/1/rf8c9vd0hbcj6ki31dx8rjngpd0dfag96p1qyaymeifshg95/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
  <script>
    console.log("TinyMCE initialization script is running");

    tinymce.init({
      selector: 'textarea.my-custom-class',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>


<style>


footer{
  font-family: "Noto Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
}


</style>

</head>

<body>
  @if ($settings->google_tag_manager_body != '')
  {!! $settings->google_tag_manager_body !!}
  @endif

  @if ($settings->disable_banner_cookies == 'off')
  <div class="btn-block text-center showBanner padding-top-10 pb-3 display-none">
    <i class="fa fa-cookie-bite"></i> {{trans('general.cookies_text')}}
    @if ($settings->link_cookies != '')
      <a href="{{$settings->link_cookies}}" class="mr-2 text-white link-border" target="_blank">{{ trans('general.cookies_policy') }}</a>
    @endif
    <button class="btn btn-sm btn-primary" id="close-banner">{{trans('general.go_it')}}
    </button>
  </div>
@endif

  <div id="mobileMenuOverlay" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"></div>

  @auth
    @if (! request()->is('messages/*') && ! request()->is('live/*'))
    @include('includes.menu-mobile')
  @endif
  @endauth

  @if ($settings->alert_adult == 'on')
    <div class="modal fade" tabindex="-1" id="alertAdult">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body p-4">
          <p>{{ __('general.alert_content_adult') }}</p>
        </div>
        <div class="modal-footer border-0 pt-0">
          <a href="https://google.com" class="btn e-none p-0 mr-3">{{trans('general.leave')}}</a>
          <button type="button" class="btn btn-primary" id="btnAlertAdult">{{trans('general.i_am_age')}}</button>
        </div>
      </div>
    </div>
  </div>
  @endif


  <div class="popout popout-error font-default"></div>

@if (auth()->guest() && request()->path() == '/' && $settings->home_style == 0
    || auth()->guest() && request()->path() != '/' && $settings->home_style == 0
    || auth()->guest() && request()->path() != '/' && $settings->home_style == 1
    || auth()->check()
    )
  @include('includes.navbar')
  @endif

  <main @if (request()->is('messages/*') || request()->is('live/*')) class="h-100" @endif role="main">
    @yield('content')

    @if (auth()->guest() 
          && ! request()->route()->named('profile')
          && ! request()->is(['creators', 'category/*', 'creators/*'])
          || auth()->check()
          && request()->path() != '/'
          && ! request()->route()->named('profile')
          && ! request()->is([
            'my/bookmarks', 
            'my/likes', 
            'my/purchases', 
            'explore', 
            'messages', 
            'messages/*', 
            'creators', 
            'category/*', 
            'creators/*', 
            'live/*'
            ])          
          )

          @if (auth()->guest() && request()->path() == '/' && $settings->home_style == 0
                || auth()->guest() && request()->path() != '/' && $settings->home_style == 0
                || auth()->guest() && request()->path() != '/' && $settings->home_style == 1
                || auth()->check()
                  )

                  @if (auth()->guest() && $settings->who_can_see_content == 'users')
                    <div class="text-center py-3 px-3">
                      @include('includes.footer-tiny')
                    </div>
                  @else
                    @include('includes.footer')
                  @endif

          @endif

  @endif

  @guest

  @if (Helper::showLoginFormModal())
      @include('includes.modal-login')
    @endif

  @endguest

  @auth

    @if ($settings->disable_tips == 'off')
     @include('includes.modal-tip')
   @endif

    @include('includes.modal-payperview')

    @if ($settings->live_streaming_status == 'on')
      @include('includes.modal-live-stream')
    @endif

    @if ($settings->allow_scheduled_posts)
      @include('includes.modal-scheduled-posts')
    @endif
    
  @endauth

  @guest
    @include('includes.modal-2fa')
  @endguest
</main>

  @include('includes.javascript_general')

  @yield('javascript')

@auth
  <div id="bodyContainer"></div>
@endauth


<script>
    $(document).ready(function(){

        // $(".hover-item").hover(function(){
        //     $(this).addClass("active");
        //     $('.custom-navbar').addClass("active-navbar");
        // }, function () {
        //     $(this).removeClass("active");
        //     $('.custom-navbar').removeClass("active-navbar");
        // });

        (function ($) {
            $(function () {

                $(document).off('click.bs.tab.data-api', '[data-hover="tab"]');

                $(document).on('mouseenter.bs.tab.data-api', '[data-toggle="tab"], [data-hover="tab"]', function () {
                    $(this).tab('show');
                });

                $(".tab-head").on("mouseenter",function(){
                    let id = $(this).attr('href');
                    $(document).find('.tab-pane').removeClass('active');
                    $(document).find(id).addClass('active');
                    $('.custom-navbar').addClass("active-navbar");
                });

                $(".company-logo-part").on("mouseenter",function(){
                    $(".tab-pane").removeClass('active');
                    $('.custom-navbar').removeClass("active-navbar");
                });


                $(".custom-navbar").on("mouseleave",function(){
                    $(".tab-pane").removeClass('active');
                    $('.custom-navbar').removeClass("active-navbar");
                });

                $('#toggleSearch').on('click', function() {
                    $(this).hide();
                    $('#searchBar').show();
                });

                $('#closeSearchBox').on('click', function() {
                    $('#searchBar').hide();
                    $('#toggleSearch').show();
                });

                $(function(){
                    var pageScroll = 100;
                    $(window).scroll(function() {
                        var scroll = getCurrentScroll();
                        if ( scroll >= pageScroll ) {
                            $('.custom-navbar').addClass('fixed-navbar');
                            }
                            else {
                                $('.custom-navbar').removeClass('fixed-navbar');
                            }
                    });
                function getCurrentScroll() {
                    return window.pageYOffset || document.documentElement.scrollTop;
                    }
                });

            });
        })(jQuery);

    });


    document.addEventListener('DOMContentLoaded', function() {
            // Add an event listener to the window for a click
            window.addEventListener('click', function(event) {
                // Check if the click target is not the closeSearchBox button
                if (event.target.id !== 'closeSearchBox') {
                    // If not, trigger a click on the closeSearchBox button
                    let toggleSearch = document.getElementById('toggleSearch');
                    // console.log(toggleSearch.style.display);
                    if(toggleSearch.style.display == 'none'){
                        // document.getElementById('closeSearchBox').click();
                        console.log('Display None');
                    }
                }
            });
        });
        
</script>


<script>
   
    $('.menu-btn').click(function() {
        $('.category-menu-sidebar').toggle();
    });

    $('.category-menu-hide').click(function() {
        $('.category-menu-sidebar').toggle();
    });

    (function() {

        var accordionsMenu = document.getElementById('cd-accordion--animated');

        if( accordionsMenu.length > 0 && window.requestAnimationFrame) {
            for(var i = 0; i < accordionsMenu.length; i++) {(function(i){
                accordionsMenu[i].addEventListener('change', function(event){
                    animateAccordion(event.target);
                });
            })(i);}

            function animateAccordion(input) {
                var bool = input.checked,
                    dropdown =  input.parentNode.getElementsById('cd-accordion__sub')[0];

                Util.addClass(dropdown, 'cd-accordion__sub--is-visible');

                var initHeight = !bool ? dropdown.offsetHeight: 0,
                    finalHeight = !bool ? 0 : dropdown.offsetHeight;

                Util.setHeight(initHeight, finalHeight, dropdown, 200, function(){
                    Util.removeClass(dropdown, 'cd-accordion__sub--is-visible');
                    dropdown.removeAttribute('style');
                });
            }
        }
    }());
</script>
</body>
</html>






