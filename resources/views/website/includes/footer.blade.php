
<!-- footer start -->
<footer>

    <div class="subfooter footer-border">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-sm-12">
                    <div class="footer-left">
                        <p> {{date("Y")}} Copy Right by Themeforest Powered by pixel strap</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-4 col-sm-12">
                    <div class="footer-right">
                        <ul class="payment">
                            <li><a href="javascript:void(0)"><img src="{{asset("website/images/layout-1/pay/1.png")}}" class="img-fluid" alt="pay"></a></li>
                            <li><a href="javascript:void(0)"><img src="{{asset("website/images/layout-1/pay/2.png")}}" class="img-fluid" alt="pay"></a></li>
                            <li><a href="javascript:void(0)"><img src="{{asset("website/images/layout-1/pay/3.png")}}" class="img-fluid" alt="pay"></a></li>
                            <li><a href="javascript:void(0)"><img src="{{asset("website/images/layout-1/pay/4.png")}}" class="img-fluid" alt="pay"></a></li>
                            <li><a href="javascript:void(0)"><img src="{{asset("website/images/layout-1/pay/5.png")}}" class="img-fluid" alt="pay"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

{{--@include('website.components.newsletter')--}}
@include('website.components.quickModel')
@include('website.components.editModel')
@include('website.components.cart-bar')
@include('website.components.cart-popup')
@include('website.components.wishlist')

@include('website.components.account-bar')
@include('website.components.setting-bar')
@include('website.components.product-notification')


@include('website.includes.scripts')
