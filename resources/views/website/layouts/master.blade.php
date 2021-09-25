<!DOCTYPE html>
<html lang="en">

@include('website.includes.head')
    <body class="bg-light rtl">

    <input type="hidden" id="cart_url" value="{{url('cart')}}" />

    <!-- loader start -->
        <div class="loader-wrapper">
            <div>
                <img src="{{asset('website/images/loader.gif')}}" alt="loader">
            </div>
        </div>
    <!-- loader end -->

    @include('website.includes.header')

    <section class="b-g">
        @yield('content')
    </section>

    @include('website.includes.footer')

  </body>
</html>
