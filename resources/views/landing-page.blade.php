<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YourCustomPc</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Rock+Salt&display=swap" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">

        <!-- <link rel="preconnect" href="https://fonts.gstatic.com">  -->
		<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div style="font-size:24px;cursor:pointer; color:white; font-family: 'Rock Salt', cursive;" class="logo">YourCustomPc</div>
                        {{ menu('main', 'partials.menus.main') }}
                    </div>
                    <div class="top-nav-right">
                        @include('partials.menus.main-right')
                    </div>
                </div> <!-- end top-nav -->
                <div class="hero container">
                    <div class="hero-copy">
                        <h1 style="font-size:40px;cursor:pointer; color:white; font-family: 'Shadows Into Light', cursive;" >BUILD YOUR OWN "CUSTOM PC" RIGHT HERE!</h1>
                        <!-- <p>YAHAN COMPUTER KA SAMAN MILEGA!</p> -->
                        <div class="hero-buttons">
                            <a href="" class="button button-white">BUILD HERE</a>
                            <a href="{{ route('shop.index') }}" class="button button-white">OTHER PRODUCTS</a>
                        </div>
                    </div> <!-- end hero-copy -->

                    <div class="hero-image">
                        <img src="img/imac.png" alt="hero image">
                    </div> <!-- end hero-image -->
                </div> <!-- end hero -->
            </header>

            <div class="featured-section">

                <div class="container">
                    <h1 style="font-size:30px;cursor:pointer; color:BLACK; font-family: 'Rock Salt', cursive;" class="text-center">YourCustomPc</h1>

                    <p style="font-size:25px;cursor:pointer; color:black; font-family: 'Gochi Hand', cursive; text-align: center;"  class="section-description">WE SERVE TOP QUALITY-TRUSTED BRAND PRODUCTS. WE ARE KNOWN FOR OUR CUSTOM PC RELATED SERVICES.</p>

                    <div class="brands">

			             
                    	
                    </div>

                    <p style="font-size:25px;cursor:pointer; color:black; font-family: 'Gochi Hand', cursive; text-align: center;"  class="section-description">YOUR DREAM PC AT YOUR DOOR STEP!</p>

                    <!-- <div class="text-center button-container">
                        <a href="#" class="button">Featured</a>
                        <a href="#" class="button">On Sale</a>
                    </div> -->

                    <!-- {{-- <div class="tabs">
                        <div class="tab">
                            Featured
                        </div>
                        <div class="tab">
                            On Sale
                        </div>
                    </div> --}} -->

                    

                    <div class="products text-center">
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">Explore more products</a>
                    </div>

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            <!-- <blog-posts></blog-posts> -->

            @include('partials.footer')

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>
</html>
