@extends('layouts.pdetailapp')
@section('content')

<div id="main">
<div class="top">
  <div class="top1_wrapper">
    <div class="container">
      <div class="top1 clearfix">
        <div class="hello1">Hello Custumer - <a href="#">Login</a> or <a href="#">Register!</a></div>
        <div class="top1_block_right">
          <div class="store_location1"><a href="#">Store Location</a></div>
          <div class="track_order1"><a href="#">Track Your Order</a></div>

          <div class="settings1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Settings<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Profile</a></li>
              </ul>
            </div>
          </div>

          <div class="lang1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">English<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a class="ge" href="#">Deutsch</a></li>
                <li><a class="ru" href="#">Russian</a></li>
              </ul>
            </div>
          </div>

          <div class="currency1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">USD<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
                <li><a href="#">EUR</a></li>
                <li><a href="#">RUB</a></li>
              </ul>
            </div>
          </div>




        </div>
      </div>
    </div>
  </div>
  <div class="top2_wrapper">
    <div class="container">
      <div class="top2 clearfix">
        <header>
          <div class="logo_wrapper">
            <a href="index-2.html" class="logo">
              <img src="{{asset('flextop/images/logo.png')}}"" alt="" class="img-responsive">
            </a>
          </div>
        </header>
        <div class="hotline1">
          <div class="txt1">Hotline:</div>
          <div class="txt2">(800) 123 456 789</div>
        </div>
        <div class="search_section_wrapper">
          <div class="all_categories1">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">All Categories<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
                <li><a href="#">Category 4</a></li>
                <li><a href="#">Category 5</a></li>
              </ul>
            </div>
          </div>
          <div class="search-form-wrapper clearfix">
            <form class="clearfix">
              <input type="text" class="form-control" placeholder="" value="Search Here" onBlur="if(this.value=='') this.value='Search Here'" onFocus="if(this.value =='Search Here' ) this.value=''">
              <a href="#" class="">Search</a>
            </form>
          </div>
        </div>
        <div class="my_cart_wrapper">
          <div class="my_cart_button">
            <a href="shopping-cart.html">
              <span class="my_cart_icon"><span>3</span></span>
              <span class="txt1">My Cart:</span>
              <span class="txt2">3 item(s) - <span>$200.00</span></span>
            </a>
          </div>
          <div class="my_cart_popup">
            <div class="my_cart_item clearfix">
              <a href="#" class="my_cart_item_close"><i class="fa fa-times"></i></a>
              <figure>
                <img src="{{asset('flextop/images/cart01.jpg')}}"" alt="" class="img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">
                  <a href="#">Widescreen 55″ LED4K Ultra HD</a>
                </div>
                <div class="txt2">2 x $762.12</div>
              </div>
            </div>
            <div class="my_cart_item clearfix">
              <a href="#" class="my_cart_item_close"><i class="fa fa-times"></i></a>
              <figure>
                <img src="{{asset('flextop/images/cart02.jpg')}}"" alt="" class="img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">
                  <a href="#">Widescreen 55″ LED4K Ultra HD</a>
                </div>
                <div class="txt2">2 x $762.12</div>
              </div>
            </div>
            <div class="my_cart_shipping clearfix">
              <div class="left">Shipping :</div>
              <div class="right">$0.00</div>
            </div>
            <div class="my_cart_subtotal clearfix">
              <div class="left">Subtotal :</div>
              <div class="right">$762.12</div>
            </div>
            <a href="shopping-cart.html" class="my_cart_view_cart">View Cart</a>
            <a href="checkout.html" class="my_cart_check_out">Check Out</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main-content">
<div class="main-content-overlay"></div>
<br>

<div class="main-content-inner">

<div id="content">

<div class="container">

  <div class="row">
    <div class="col-sm-6">

      <div class="gslider-wrapper">
        <div id="gslider2" class="flexslider flexslider-gslider">
          <ul class="slides">
            <li>
              <img src="{{asset('flextop/images/gallery01.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery02.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery03.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery04.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery01.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery02.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery03.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery04.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery01.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery02.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery03.jpg')}}"" alt="" class="img-responsive">
            </li>
            <li>
              <img src="{{asset('flextop/images/gallery04.jpg')}}"" alt="" class="img-responsive">
            </li>

          </ul>
        </div>
      </div>

    </div>
    <div class="col-sm-6">

      <div class="product-details-info">
        <div class="title">Widescreen 55″ LED4K Ultra HD</div>
        <div class="product-review clearfix">
          <div class="product-stars">
            <i class="fa fa-star-o active"></i>
            <i class="fa fa-star-o active"></i>
            <i class="fa fa-star-o active"></i>
            <i class="fa fa-star-o active"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <div class="product-review-txt">23 Review (s)</div>
        </div>
        <div class="product-prices clearfix">
          <div class="product-price">$362.23</div>
          <div class="product-price-old">$24.00  </div>
        </div>
        <div class="product-availability clearfix">
          <div class="product-availability-txt">Availability:</div>
          <div class="product-availability-status">In Stock</div>
        </div>
        <div class="product-short-description">
          <p>
            Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <ul>
            <li>Light green crewneck sweatshirt.</li>
            <li>Hand pockets.</li>
            <li>Relaxed fit.</li>
            <li>Machine wash/dry.</li>
          </ul>
        </div>
        <div class="quantity-block-wrapper2 clearfix">
          <div class="col-text">
            Quantity:
          </div>
          <div class="col-quantity">
            <div class="quantity">
              <button class="dec quantity-button">-</button>
              <input class="quantity-input" type="text" value="2">
              <button class="inc quantity-button">+</button>
            </div>
          </div>
          <div class="col-btn">
            <button type="submit" class="btn-default btn-add-to-cart">Add to Cart</button>
          </div>
          <div class="col-btn2">
            <div class="product-links2">
              <a href="#"><i class="fa fa-heart-o"></i></a>
              <a href="#"><i class="fa fa-bar-chart"></i></a>
            </div>
          </div>
        </div>
        <!-- <div class="product-categories clearfix">
          <div class="product-categories-txt">Category:</div>
          <div class="product-categories-list"><a href="#">Accessories</a>, <a href="#">Gaming</a>, <a href="#">PC Computers</a>, <a href="#">Ultrabooks</a></div>
        </div> -->
        <div class="product-share clearfix">
          <div class="product-share-txt">Share:</div>
          <div class="product-share-list"><a href="#"><img src="{{asset('flextop/images/share1.png')}}"" alt="" class="img-responsive"></a><a href="#"><img src="{{asset('flextop/images/share2.png')}}"" alt="" class="img-responsive"></a><a href="#"><img src="{{asset('flextop/images/share3.png')}}"" alt="" class="img-responsive"></a><a href="#"><img src="{{asset('flextop/images/share4.png')}}"" alt="" class="img-responsive"></a></div>
        </div>
      </div>

    </div>
  </div>

  <div class="tabs3-wrapper">
    <ul class="tabs clearfix" data-tabgroup="third-tab-group">
      <li class="active"><a href="#tabs3-1">Description</a></li>
      <li><a href="#tabs3-2">Additional Information</a></li>
      <li><a href="#tabs3-3">Reviews (06)</a></li>
    </ul>
  </div>

  <div id="third-tab-group" class="tabgroup">
    <div id="tabs3-1">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
      </p>
      <ul class="ul3">
        <li>Claritas est etiam processus dynamicus.</li>
        <li>Qui sequitur mutationem consuetudium lectorum.</li>
        <li>Claritas est etiam processus dynamicus.</li>
        <li>Qui sequitur mutationem consuetudium lectorum.</li>
        <li>Claritas est etiam processus dynamicus.</li>
        <li>Qui sequitur mutationem consuetudium lectorum.</li>
      </ul>
      <p>
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.
      </p>
    </div>
    <div id="tabs3-2">
      <p>
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.
      </p>
      <ul class="ul3">
        <li>Claritas est etiam processus dynamicus.</li>
        <li>Qui sequitur mutationem consuetudium lectorum.</li>
        <li>Claritas est etiam processus dynamicus.</li>
        <li>Qui sequitur mutationem consuetudium lectorum.</li>
        <li>Claritas est etiam processus dynamicus.</li>
        <li>Qui sequitur mutationem consuetudium lectorum.</li>
      </ul>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
      </p>
    </div>
    <div id="tabs3-3">
      <ul class="ul3">
        <li>Claritas est etiam processus dynamicus.</li>
        <li>Qui sequitur mutationem consuetudium lectorum.</li>
        <li>Claritas est etiam processus dynamicus.</li>
        <li>Qui sequitur mutationem consuetudium lectorum.</li>
        <li>Claritas est etiam processus dynamicus.</li>
        <li>Qui sequitur mutationem consuetudium lectorum.</li>
      </ul>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
      </p>
      <p>
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.
      </p>
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
                     <?php
                        $address=\App\footer::all();
                        ?>
                     @foreach ($address as $add)
                     {{$add->address}}
                     @endforeach
                  </p>
                  <p><i class="fa fa-envelope"></i>
                     <span>Email:</span>
                     <?php
                        $email=\App\footer::all();
                        ?>
                     @foreach ($email as $mail)
                     <a href="#">{{$mail->email}}</a>
                     @endforeach
                  </p>
                  <p><i class="fa fa-phone-square"></i>
                     <span>Phone Number:</span>
                     <?php
                        $phoneNumber=\App\footer::all();
                        ?>
                     @foreach ($phoneNumber as $number)
                     {{$number->phoneNumber}}
                     @endforeach
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

</div>
</div>

</body>

@endsection