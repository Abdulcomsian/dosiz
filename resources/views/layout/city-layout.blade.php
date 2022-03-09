<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.partials.head')
    <title>@yield('title')</title>
  </head>
  @if(Route::is(['map-grid']))
  <body class="map-page">
  @endif
  @if(Route::is(['mentor-register','login','register','mentee-register']))
  <body class="account-page">
  @endif
  @if(Route::is(['chat-mentee','chat']))
  <body class="chat-page">
  @endif
  @if(Route::is(['voice-call','video-call']))
  <body class="call-page">
  @endif
  <!-- @if(!Route::is(['login','register','forgot-password'])) @endif -->
@include('layout.partials.city-header')

@yield('content')
<!-- @if(!Route::is(['chat','chat-mentee','voice-call','video-call','login','register','forgot-password']))@endif -->
@include('layout.partials.city-footer')

@include('layout.partials.footer-scripts')
 @yield('js')
  </body>
</html>