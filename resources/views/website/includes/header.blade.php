    <!--header start-->
      <header id="stickyheader">
         <div class="mobile-fix-option"></div>
         <div class="top-header">
            <div class="custom-container">
               <div class="row">
                  <div class="col-xl-5 col-md-7 col-sm-6">
                     <div class="top-header-left">
                        <div class="shpping-order">
                           <h6>مبيعات باقل الاسعار</h6>
                        </div>
                        <div class="app-link">
                           <h6>
                             التحميل االتطبيق قريبا
                           </h6>
                           <ul>
                              <li><a><i class="fa fa-apple" ></i></a></li>
                              <li><a><i class="fa fa-android" ></i></a></li>
                              <li><a><i class="fa fa-windows" ></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-7 col-md-5 col-sm-6">
                     <div class="top-header-right">
                        <div class="top-menu-block">
                           <!-- <ul>
                              <li><a href="javascript:void(0)">gift cards</a></li>
                              <li><a href="javascript:void(0)">Notifications</a></li>
                              <li><a href="javascript:void(0)">help & contact</a></li>
                              <li><a href="javascript:void(0)">todays deal</a></li>
                              <li><a href="javascript:void(0)">track order</a></li>
                              <li><a href="javascript:void(0)">shipping </a></li>
                              <li><a href="javascript:void(0)">easy returns</a></li>
                           </ul> -->
                        </div>
                        <!-- <div class="language-block">
                           <div class="language-dropdown">
                              <span  class="language-dropdown-click">
                              اللغة  <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                              <ul class="language-dropdown-open">
                                 <li><a href="javascript:void(0)">العربية</a></li>

                              </ul>
                           </div>
                           <div class="curroncy-dropdown">
                              <span class="curroncy-dropdown-click">
                              العملات<i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                              <ul class="curroncy-dropdown-open">
                                 <li><a href="javascript:void(0)"><i class="fa fa-inr"></i>الريال السعودي</a></li>

                              </ul>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="layout-header1">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="main-menu-block">
                        <div class="menu-left">
                           <div class="sm-nav-block">
                              <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                              <!-- <ul class="nav-slide">
                                 <li>
                                    <div class="nav-sm-back">
                                       back <i class="fa fa-angle-right ps-2"></i>
                                    </div>
                                 </li>
                                 <li><a href="category-page(left-sidebar).html">western ware</a></li>
                                 <li><a href="category-page(left-sidebar).html">TV, Appliances</a></li>
                                 <li class="mor-slide-open">
                                    <ul>
                                       <li><a href="category-page(left-sidebar).html">Bags, Luggage</a></li>
                                       <li><a href="category-page(left-sidebar).html">Movies, Music </a></li>
                                       <li><a href="category-page(left-sidebar).html">Video Games</a></li>
                                       <li><a href="category-page(left-sidebar).html">Toys, Baby Products</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a class="mor-slide-click">
                                    mor category
                                    <i class="fa fa-angle-down pro-down" ></i>
                                    <i class="fa fa-angle-up pro-up" ></i>
                                    </a>
                                 </li>
                              </ul> -->
                           </div>
                           <div class="brand-logo logo-sm-center">
                              <a href="{{route('website')}}">
                              <img src="{{asset('website/images/layout-5/logo/animal_logo1.png')}}" class="img-fluid " alt="logo-header">
                              </a>
                           </div>
                        </div>
                        <div class="menu-block">
                           <nav id="main-nav">
                              <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                              <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                 <li>
                                    <div class="mobile-back text-right">الرجوع<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                 </li>
                                 <!--HOME-->
                                 <li>
                                    <a class="" href="{{route('website')}}">الرئيسية</a>
                                 </li>
                                 <!--HOME-END-->
                                 <!--SHOP-->
                                 <li>
                                    <a class="dark-menu-item" href="javascript:void(0)">الاقسام</a>
                                    <ul>
                                        <li> <a href="{{route('website')}}"> الكل </a> </li>
                                    @foreach($categories as $category)
                                       <li><a href="{{route('website',$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach

                                    </ul>
                                 </li>
                                 <!--SHOP-END-->




                                 <!--pages meu start-->
                                 <li>
                                    <a  class="dark-menu-item" href="javascript:void(0)">المنتجات</a>
                                    <ul>

                                    @foreach($products as $product)
                                       <li><a href="{{route('product',$product->id)}}">{{$product->name}}</a></li>
                                    @endforeach

                                    </ul>
                                 </li>
                                 <!--product-end end-->

                                 <!--blog-meu start-->
                                 <li>
                                    <a  class="dark-menu-item" href="javascript:void(0)">من نحن</a>
                                 </li>
                                 <!--blog-meu end-->
                              </ul>
                           </nav>
                        </div>
                        <div class="menu-right">
                           <div class="icon-nav icon-block">

                           </div>
                           <div class="toggle-nav">
                              <i class="fa fa-bars sidebar-bar"></i>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="searchbar-input">
               <div class="input-group">
                 <span class="input-group-text">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28.931px" height="28.932px" viewBox="0 0 28.931 28.932" style="enable-background:new 0 0 28.931 28.932;" xml:space="preserve">
                       <g>
                          <path d="M28.344,25.518l-6.114-6.115c1.486-2.067,2.303-4.537,2.303-7.137c0-3.275-1.275-6.355-3.594-8.672C18.625,1.278,15.543,0,12.266,0C8.99,0,5.909,1.275,3.593,3.594C1.277,5.909,0.001,8.99,0.001,12.266c0,3.276,1.275,6.356,3.592,8.674c2.316,2.316,5.396,3.594,8.673,3.594c2.599,0,5.067-0.813,7.136-2.303l6.114,6.115c0.392,0.391,0.902,0.586,1.414,0.586c0.513,0,1.024-0.195,1.414-0.586C29.125,27.564,29.125,26.299,28.344,25.518z M6.422,18.111c-1.562-1.562-2.421-3.639-2.421-5.846S4.86,7.983,6.422,6.421c1.561-1.562,3.636-2.422,5.844-2.422s4.284,0.86,5.845,2.422c1.562,1.562,2.422,3.638,2.422,5.845s-0.859,4.283-2.422,5.846c-1.562,1.562-3.636,2.42-5.845,2.42S7.981,19.672,6.422,18.111z"/>
                       </g>
                    </svg>
                 </span>
                  <input type="text" class="form-control" placeholder="search your product">
                   <span class="input-group-text close-searchbar">
                      <svg viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg">
                         <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/>
                      </svg>
                   </span>
               </div>
            </div>
         </div>
         <div class="category-header">
            <div class="custom-container">
               <div class="row">
                  <div class="col-12">
                     <div class="navbar-menu">
                        <div class="category-left">
                           <div class=" nav-block">
                              <div class="nav-left">
                                 <nav class="navbar" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent">
                                    <button class="navbar-toggler" type="button">
                                    <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                                    </button>
                                    <h5 class="mb-0 ms-3 text-white title-font">بحث</h5>
                                 </nav>
                                 <!-- <div class="collapse hide nav-desk" id="navbarToggleExternalContent">
                                    <ul class="nav-cat title-font">
                                       <li><a href="category-page(left-sidebar).html"> <img src="{{asset('website/images/layout-1/nav-img/01.png')}}" alt="catergory-product"> western ware</a></li>
                                       <li><a href="category-page(left-sidebar).html"> <img src="{{asset('website/images/layout-1/nav-img/02.png')}}" alt="catergory-product"> TV, Appliances</a></li>

                                       <li class="mor-slide-open">
                                          <ul>
                                             <li><a href="category-page(left-sidebar).html"> <img src="{{asset('website/images/layout-1/nav-img/08.png')}}" alt="catergory-product"> Sports</a></li>
                                             <li><a href="category-page(left-sidebar).html"> <img src="{{asset('website/images/layout-1/nav-img/09.png')}}" alt="catergory-product"> Bags, Luggage</a></li>
                                             <li><a href="category-page(left-sidebar).html"> <img src="{{asset('website/images/layout-1/nav-img/10.png')}}" alt="catergory-product"> Movies, Music </a></li>
                                             <li><a href="category-page(left-sidebar).html"> <img src="{{asset('website/images/layout-1/nav-img/11.png')}}" alt="catergory-product"> Video Games</a></li>
                                             <li><a href="category-page(left-sidebar).html"> <img src="{{asset('website/images/layout-1/nav-img/12.png')}}" alt="catergory-product"> Toys, Baby Products</a></li>
                                          </ul>
                                       </li>
                                       <li> <a class="mor-slide-click">mor category <i class="fa fa-angle-down pro-down"></i><i class="fa fa-angle-up pro-up"></i></a></li>
                                    </ul>
                                 </div> -->
                              </div>
                           </div>
                           <div class="input-block">
                              <div class="input-box">
                                 <form method="get" action="{{route('productSearch')}}" class="big-deal-form">
                                    <div class="input-group ">
                                       <button type="submit"> <span class="search"><i class="fa fa-search"></i></span></button>
                                       <input type="text" name="search" class="form-control" placeholder="بحث عن منتج" >
                                        <select>
                                                <option> <a href="{{route('website')}}"> الكل </a> </option>
                                        @foreach($categories as $category)
                                                <option> <a href="{{route('website',$category->id)}}"> {{$category->name}} </a> </option>
                                            @endforeach

                                        </select>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="category-right">
                           <div class="contact-block">
                              <div>
                                 <i class="fa fa-volume-control-phone"></i>
                                 <span>call us<span>123-456-76890</span></span>
                              </div>
                           </div>
                           {{-- <div class="btn-group">
                              <div  class="gift-block" data-bs-toggle="dropdown" >
                                 <div class="grif-icon">
                                    <i class="icon-gift"></i>
                                 </div>
                                 <div class="gift-offer">
                                    <p>gift box</p>
                                    <span>Festivel Offer</span>
                                 </div>
                              </div>

                           </div> --}}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--header end-->
