@extends('layouts.newmobileapp')
@section('content')
<div id="main">
   <div class="top">
      <div class="top2_wrapper">
         <div class="container">
            <div class="top2 clearfix">
               <div class="col-sm-3">
                  <header>
                     <div class="logo_wrapper">
                        <a href="index-2.html" class="logo">
                        <img src="{{asset('flextop/images/logo.png')}}" alt="" class="img-responsive">
                        </a>
                     </div>
                  </header>
               </div>
               <!-- <div class="hotline1">
                  <div class="txt1">Hotline:</div>
                  <div class="txt2">(800) 123 456 789</div>
                  </div> -->
               <div class="col-sm-6">
                  <div class="search_section_wrapper">
                     <div class="search-form-wrapper clearfix">
                        <form class="clearfix">
                           <input type="text" class="form-control" placeholder="" value="Search Here" onBlur="if(this.value=='') this.value='Search Here'" onFocus="if(this.value =='Search Here' ) this.value=''">
                           <a href="#" class="">Search</a>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-sm-3">
                  <div class="hello1">Hello Customer - <a href="#">Login</a> or <a href="#">Register</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="top3_wrapper">
         <div class="container">
            <div class="top3 clearfix">
               <div class="navbar navbar_ navbar-default">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <div class="navbar-collapse navbar-collapse_ collapse">
                     <ul class="nav navbar-nav sf-menu clearfix">
                        <li class="sub-menu sub-menu-1">
                           <a href="listing.html">Computer & Laptop</a>
                           <div class="sf-mega">
                              <ul class="sf-mega-ul">
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">iMac Computers</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="listing.html">Fashion Scarves</a></li>
                                       <li><a href="listing.html">Wallets</a></li>
                                       <li><a href="listing.html">Evening Handbags</a></li>
                                       <li><a href="listing.html">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">Makbooks</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="#">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">Windows Computers</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="#">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">Laptops</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="#">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-image">
                                    <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu-computer.jpg')}}" alt="" class="img-responsive"></div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="sub-menu sub-menu-1">
                           <a href="listing.html">TV & Audios</a>
                           <div class="sf-mega">
                              <ul class="sf-mega-ul">
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">TV Samsung</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">TV Philips</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">Lorem Audio</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">Lorem Sound Audio</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-image">
                                    <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu-audio.jpg')}}" alt="" class="img-responsive"></div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li><a href="#">Smartphone & Tablets</a></li>
                        <li><a href="{{url('/addproduct')}}">Add product</a></li>
                        <li class="sub-menu sub-menu-1">
                           <a href="listing.html">Accessories</a>
                           <div class="sf-mega">
                              <ul class="sf-mega-ul">
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">TV Samsung</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">TV Philips</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-text">
                                    <div class="menu-item-title">Lorem Audio</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                    <div class="menu-item-title">Lorem Sound Audio</div>
                                    <ul class="sf-mega-menu">
                                       <li><a href="listing.html">Flip-Flops</a></li>
                                       <li><a href="#">Fashion Scarves</a></li>
                                       <li><a href="#">Wallets</a></li>
                                       <li><a href="#">Evening Handbags</a></li>
                                       <li><a href="#">Wrist Watches</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-container-image">
                                    <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu01.jpg')}}" alt="" class="img-responsive"></div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="sub-menu sub-menu-2">
                           <a href="#">Pages <span class="caret"></span></a>
                           <div class="sf-mega">
                              <ul>
                                 <li>
                                    <a href="index-2.html">Home Page <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                                    <div class="sf-mega">
                                       <ul>
                                          <li><a href="index-2.html">Home version 1</a></li>
                                          <li><a href="index-3.html">Home version 2</a></li>
                                          <li><a href="index-4.html">Home version 3</a></li>
                                          <li><a href="index-5.html">Home version 4</a></li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li><a href="listing.html">Product Listing Page</a></li>
                                 <li><a href="product-details.html">Product Description Page</a></li>
                                 <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                 <li><a href="checkout.html">Checkout Page</a></li>
                                 <li>
                                    <a href="blog.html">Blog <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                                    <div class="sf-mega">
                                       <ul>
                                          <li><a href="blog.html">Blog Left Sidebar</a></li>
                                          <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                          <li><a href="post.html">Post Left Sidebar</a></li>
                                          <li><a href="post-right.html">Post Right Sidebar</a></li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li><a href="contact-us.html">Contact Us</a></li>
                                 <li><a href="404.html">404 Page</a></li>
                              </ul>
                           </div>
                        </li>
                        <li><a href="contact-us.html">Contact us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Slider-->
   <div id="slider_wrapper">
      <div id="slider">
         <div id="flexslider">
            <ul class="slides clearfix">
               <li>
                  <img src="{{asset('flextop/images/slide01.jpg')}}" alt="">
                  <div class="flex-caption">
                     <!-- <div class="flex-caption_inner container">
                        <div class="txt1">Sale up to 20% off!</div>
                        <div class="txt2">Alienware Desktop</div>
                        <div class="txt3">Save up to $599 off of select Alienware PCs for a limited time only.</div>
                        <div class="txt4"><a href="#" class="btn-default btn0">Get it Now</a></div>
                        </div> -->
                  </div>
               </li>
               <li>
                  <img src="{{asset('flextop/images/slide02.jpg')}}" alt="">
                  <div class="flex-caption">
                     <!-- <div class="flex-caption_inner container">
                        <div class="txt1">Sale up to 30% off!</div>
                        <div class="txt2">Futuro de la <br>Realidad virtual</div>
                        <div class="txt3">Save up to $599 off of select La Realidad Virtual  for a limited time only.</div>
                        <div class="txt4"><a href="#" class="btn-default btn0">Get it Now</a></div>
                        </div> -->
                  </div>
               </li>
               <li>
                  <img src="{{asset('flextop/images/slide03.jpg')}}" alt="">
                  <div class="flex-caption">
                     <!-- <div class="flex-caption_inner container">
                        <div class="hot-sale-wrapper"><span>Hot Sale</span></div>
                        <div class="txt2">4K 360 video<br>Colorful designs</div>
                        <div class="txt3">Now for manners use has company believe parlors. Least nor party<br>who wrote while did.</div>
                        <div class="txt4"><a href="#" class="btn-default btn0">Get it Now</a></div>
                        </div> -->
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!--Slider End-->
   <!--Main Content Starts-->
   <hr>
   <div class="main-content">
      <div class="main-content-overlay"></div>
      <div class="main-content-inner">
         <div id="content">
            <div class="container">
               <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-2 column-sidebar">
                     <div class="sidebar-block">
                        <div class="sidebar-title">
                           Categories
                        </div>
                        <div class="sidebar-content">
                           <ul class="ul1">
                              @foreach ($category as $get)
                              <li><a href="#">{{$get->name}}</a></li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar-block">
                        <div class="sidebar-title">
                           Filter By
                        </div>
                        <div class="sidebar-content">
                           <div class="sidebar-filters">
                              <div class="sidebar-filters-title">Price</div>
                              <div class="slider-range-txt">Range:  <span>$100.00 - $1.700.00</span></div>
                              <div id="slider-range"></div>
                              <div class="slider-range-text clearfix">
                                 <input type="text" id="amount" readonly>
                                 <input type="text" id="amount2" readonly>
                              </div>
                              <div><a href="#" class="btn-default btn1">Filter</a></div>
                              <br>
                              <div class="sidebar-filters-title">Brands</div>
                              <ul class="ul2">
                                 <li><a href="#">Sony <span>(09)</span></a></li>
                                 <li><a href="#">Panasonic <span>(02)</span></a></li>
                                 <li><a href="#">Apple <span>(10)</span></a></li>
                                 <li><a href="#">Samsung <span>(12)</span></a></li>
                              </ul>
                              <br>
                              <div class="sidebar-filters-title">Color</div>
                              <form>
                                 <div class="checkbox1-custom-item color1">
                                    <input id="checkbox-1" class="checkbox1-custom" name="checkbox-1" type="checkbox">
                                    <label for="checkbox-1" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color2">
                                    <input id="checkbox-2" class="checkbox1-custom" name="checkbox-2" type="checkbox">
                                    <label for="checkbox-2" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color3">
                                    <input id="checkbox-3" class="checkbox1-custom" name="checkbox-3" type="checkbox" checked>
                                    <label for="checkbox-3" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color4">
                                    <input id="checkbox-4" class="checkbox1-custom" name="checkbox-4" type="checkbox">
                                    <label for="checkbox-4" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color5">
                                    <input id="checkbox-5" class="checkbox1-custom" name="checkbox-5" type="checkbox">
                                    <label for="checkbox-5" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color6">
                                    <input id="checkbox-6" class="checkbox1-custom" name="checkbox-6" type="checkbox">
                                    <label for="checkbox-6" class="checkbox1-custom-label"></label>
                                 </div>
                                 <div class="checkbox1-custom-item color7">
                                    <input id="checkbox-7" class="checkbox1-custom" name="checkbox-7" type="checkbox">
                                    <label for="checkbox-7" class="checkbox1-custom-label"></label>
                                 </div>
                              </form>
                              <div class="sidebar-filters-title">Size</div>
                              <form>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-1" class="checkbox2-custom" name="checkbox2-1" type="checkbox">
                                    <label for="checkbox2-1" class="checkbox2-custom-label">S</label>
                                 </div>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-2" class="checkbox2-custom" name="checkbox2-2" type="checkbox">
                                    <label for="checkbox2-2" class="checkbox2-custom-label">M</label>
                                 </div>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-3" class="checkbox2-custom" name="checkbox2-3" type="checkbox" checked>
                                    <label for="checkbox2-3" class="checkbox2-custom-label">L</label>
                                 </div>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-4" class="checkbox2-custom" name="checkbox2-4" type="checkbox">
                                    <label for="checkbox2-4" class="checkbox2-custom-label">XL</label>
                                 </div>
                                 <div class="checkbox2-custom-item">
                                    <input id="checkbox2-5" class="checkbox2-custom" name="checkbox2-5" type="checkbox">
                                    <label for="checkbox2-5" class="checkbox2-custom-label">XXL</label>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-8 column-content">
                     <div id="second-tab-group" class="tabgroup">
                        <div id="tabs2-1">
                           <div class="row">
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/samsung j7 pro.jpg')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <!-- <div class="product-divider"></div> -->
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Samsung<br>Galaxy J7 Pro</a></div>
                                          <div class="product-divider"></div>
                                          <div class="product-price">Rs.34,500</div>
                                          <div class="product-divider"></div>
                                          <div class="product-prices clearfix">
                                             <br>
                                             <div class="product-price-old">-5.5 Inch<br>-3GB Ram<br>-32GB Memory<br>-Android 7.1 Nougat</div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/samsung note 8.jpg')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Samsung<br>Galaxy Note 8</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-new">New!</div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/samsung s9.jpg')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Samsung<br>Galaxy S9</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.91,000</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-sale">Sale</div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/nokia 3310.jpg')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Nokia<br>3310</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.6,490</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/nokia 8.jpg')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Nokia<br>8</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.49,990</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/appleiphoneX.jpg')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Apple<br>iPhone X</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.125,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product04.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name">
                                             <a href="#">LED4K Ultra HD</a>
                                          </div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product05.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product06.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-sale"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product04.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product05.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-sale"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product06.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product07.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-sale"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product08.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-new"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product09.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product07.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-sale"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product08.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-new"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product09.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="row">
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-sale"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product10.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-new"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product11.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product12.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-sale"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product10.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-new"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product11.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product12.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-sale"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product13.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product14.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product01.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <div class="product-card product-sale"></div>
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product13.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product14.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="product">
                                    <div class="product-inner">
                                       <figure class="product-media">
                                          <a href="#" class="product-view"><img src="{{asset('flextop/images/product01.png')}}" alt="" class="img-responsive"></a>
                                       </figure>
                                       <div class="product-divider"></div>
                                       <div class="product-caption">
                                          <div class="product-name"><a href="product-details.html">Widescreen 55″ LED4K Ultra HD</a></div>
                                          <div class="product-prices clearfix">
                                             <div class="product-price">Rs.99,999</div>
                                             <div class="product-price-old"></div>
                                          </div>
                                          <div class="product-add-to-cart"><a href="#">Add to Cart</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               <div class="pane2 clearfix">
                  <ul class="pager clearfix">
                     <li class="active"><a href="#">1</a></li>
                     <li class="li"><a href="#">2</a></li>
                     <li class="li"><a href="#">3</a></li>
                     <li class="next"><a href="#"></a></li>
                  </ul>
                  <div class="showing-results">Showing 1-36 <span>of 100 results</span></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Top Brands-->
<div class="container">
   <div class="title1">Top Brands</div>
   <div class="owl-carousel owl-carousel-wide">
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand1.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand2.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand3.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand4.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand5.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand6.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand7.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand8.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand9.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand10.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand11.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand12.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand13.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand14.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" class="product-view"><img src="{{asset('flextop/images/brand15.png')}}" alt="" class="img-responsive"></a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Top Brands End-->

<!--Footer-->
<div class="bot1_wrapper">
   <div class="container">
      <div class="bot1 clearfix">
         <div class="row">
            <div class="col-sm-5">
               <div class="newsletter">
                  <div class="txt1">Sign up to <span>Newsletter</span></div>
                  <div class="txt2">Get <span>30% Off</span> First Purchase!</div>
               </div>
            </div>
            <div class="col-sm-7">
               <div class="newsletter-form-wrapper clearfix">
                  <form class="clearfix">
                     <input type="text" class="form-control" placeholder="" value="Your email address" onBlur="if(this.value=='') this.value='Your email address'" onFocus="if(this.value =='Your email address' ) this.value=''">
                     <a href="#" class="">Subscribe!</a>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Footer Starts-->
<div class="bot2_wrapper">
   <div class="container">
      <div class="bot2 clearfix">
         <div class="row">
            <div class="col-sm-4">
               <div class="logo2">
                  <a href="#">
                  <img src="{{asset('flextop/images/logo2.png')}}" alt="" class="img-responsive">
                  </a>
               </div>
               <div class="contact-details">
                  <p><i class="fa fa-address-card"></i>
                     <span>Address:</span>
                     1234 Heaven Stress, Beverly Hill, Melbourne, USA.
                  </p>
                  <p><i class="fa fa-envelope"></i>
                     <span>Email:</span>
                     someone@example.com
                  </p>
                  <p><i class="fa fa-phone-square"></i>
                     <span>Phone Number:</span>
                     (0333) 1234567
                  </p>
               </div>
               <div class="download-app-text">Download Mobile Touch App:</div>
               <div class="download-app-wrapper">
                  <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download01.png')}}" alt="" class="img-responsive"></a></div>
                  <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download02.png')}}" alt="" class="img-responsive"></a></div>
               </div>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Information</div>
               <ul class="ul0">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">All Collection</a></li>
                  <li><a href="#">Privacy policy</a></li>
                  <li><a href="#">Terms & condition</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Custom Links</div>
               <ul class="ul0">
                  <li><a href="#">Phones & Tablets</a></li>
                  <li><a href="#">Home Entertainment</a></li>
                  <li><a href="#">Video Games & Toys</a></li>
                  <li><a href="#">Cameras & Drones</a></li>
                  <li><a href="#">Home, Kitchen & Tools</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">My Account</div>
               <ul class="ul0">
                  <li><a href="#">My orders</a></li>
                  <li><a href="#">My credit slips</a></li>
                  <li><a href="#">My addresses</a></li>
                  <li><a href="#">My personal info</a></li>
                  <li><a href="#">My vouchers</a></li>
               </ul>
            </div>
            <div class="col-sm-2">
               <div class="bot2-title">Why Choose Us</div>
               <ul class="ul0">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Investor Relations</a></li>
                  <li><a href="#">Typography</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="bot3_wrapper">
   <div class="container">
      <div class="bot3 clearfix">
         <div class="row">
            <div class="col-sm-6">
               <div class="copyrights">Copyright &copy; <a href="#">DevDigs</a> all rights reserved. Powered by <a href="#">DEVDIGS</a></div>
            </div>
            <div class="col-sm-6">
               <div class="cards">
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment01.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment02.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment03.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment04.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment05.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment06.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
                  <div class="card">
                     <a href="#"><img src="{{asset('flextop/images/payment07.png')}}" alt="" class="img-responsive">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Footer End-->
</div><!--Main Content Ends Here-->
</div>

@endsection