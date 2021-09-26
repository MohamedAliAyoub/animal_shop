@extends('website.layouts.master')

@section('title','animals')

@section('stylesheet')

@endsection

@section('content')
<!-- startsection -->
<section class="collection-banner section-py-space">
  <div class="container-fluid">
    <div class="row collection2">
      <div class="col-md-4">
        <div class="collection-banner-main banner-1 p-left">
          <div class="collection-img bg-size" style="background-image: url(&quot;{{asset('website/images/layout-2/collection-banner/')}}&quot;); background-size: cover; background-position: center center; display: block;">
            <img src="{{asset('images/44.jpg')}}" class="img-fluid bg-img " alt="banner" style="display: none;">
          </div>
          <div class="collection-banner-contain ">

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-banner-main banner-1 p-left">
          <div class="collection-img bg-size" style="background-image: url(&quot;{{asset('website/images/layout-2/collection-banner/')}}&quot;); background-size: cover; background-position: center center; display: block;">
            <img src="{{asset('images/22.jpg')}}" class="img-fluid bg-img " alt="banner" style="display: none;">
          </div>
          <div class="collection-banner-contain ">

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-banner-main banner-1 p-left">
          <div class="collection-img bg-size" style="background-image: url(&quot;{{asset('website/images/layout-2/collection-banner/')}}&quot;); background-size: cover; background-position: center center; display: block;">
            <img src="{{asset('images/33.jpg')}}" class="img-fluid bg-img " alt="banner" style="display: none;">
          </div>
          <div class="collection-banner-contain ">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- endsection -->

<!-- start section -->
<!--testimonial start-->
<section class="testimonial testimonial-inverse">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="slide-1 no-arrow">
          <div>
            <div class="testimonial-contain">
              <div class="media">
                <div class="testimonial-img">
                  <img src="{{asset('website//images/testimonial/1.jpg')}}" class="img-fluid rounded-circle  " alt="testimonial">
                </div>
                <div class="media-body">
                  <h5>mark jecno</h5>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="testimonial-contain">
              <div class="media">
                <div class="testimonial-img">
                  <img src="{{asset('website//images/testimonial/2.jpg')}}" class="img-fluid rounded-circle  " alt="testimonial">
                </div>
                <div class="media-body">
                  <h5>mark jecno</h5>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="testimonial-contain">
              <div class="media">
                <div class="testimonial-img">
                  <img src="{{asset('website//images/testimonial/3.jpg')}}" class="img-fluid rounded-circle  " alt="testimonial">
                </div>
                <div class="media-body">
                  <h5>mark jecno</h5>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--testimonial end-->

<!-- endsection -->


<!--tab product-->
<section class="section-pt-space" >
  <div class="tab-product-main">
    <div class="tab-prodcut-contain">
      <ul class="tabs tab-title">
          @foreach($categories as $category)
            <li class="current"><a href="tab-1">{{$category->name}}</a></li>
          @endforeach

      </ul>
    </div>
  </div>
</section>
<!--tab product-->

<!-- slider tab  -->
<section class="section-py-space ratio_square product">
  <div class="custom-container">
    <div class="row">
      <div class="col pr-0">
        <div class="theme-tab product mb--5">
          <div class="tab-content-cls ">
            <div id="tab-1" class="tab-content active default">
              <div class="product-slide-6 product-m no-arrow">
        @foreach($products as $product)
              <div>

                  <div class="product-box">
                    <div class="product-imgbox">
                      <div class="product-front">
                        <a href="{{route('product',$product->id)}}">
                          <img src="{{asset('images/'.$product->images->last()->image)}}" class="img-fluid  " alt="product">
                        </a>
                      </div>
                      <div class="product-back">
                        <a href="{{route('product',$product->id)}}">

                          <img src="{{asset('images/'.$product->images->first()->image)}}" class="img-fluid  " alt="product">

                        </a>
                      </div>
                      <div class="product-icon icon-inline">

                        </button>


                      </div>
                      <div class="new-label1">
                        <div>new</div>
                      </div>
                      <div class="on-sale1">
                        on sale
                      </div>
                    </div>
                    <div class="product-detail detail-inline ">
                      <div class="detail-title">
                        <div class="detail-left">
                          <div class="rating-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                          <a href="product-page(left-sidebar).html">
                            <h6 class="price-title">
                              {{$product->name}}
                            </h6>
                          </a>
                        </div>
                        <div class="detail-right">
                          <div class="check-price">
                            $ 56.21
                          </div>
                          <div class="price">
                            <div class="price">
                              $ {{$product->price}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        @endforeach
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- slider tab end -->


<!--  -->

@endsection

@section('javascript')
@endsection
