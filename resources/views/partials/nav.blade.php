<head>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Rock+Salt&display=swap" rel="stylesheet">
</head>

<header>
    <div class="top-nav container">
      <div class="top-nav-left">
          <div style="font-size:24px;cursor:pointer; color:white; font-family: 'Rock Salt', cursive;" class="logo"><a href="/">YourCustomPc</a></div>
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          {{ menu('main', 'partials.menus.main') }}
          @endif
      </div>
      <div class="top-nav-right">
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          @include('partials.menus.main-right')
          @endif
      </div>
    </div> <!-- end top-nav -->
</header>
