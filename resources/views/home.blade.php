@extends('layouts.app')

@section('content')    
<!-----banner--->
<section class="home_banner">
<div class="container-fluid">
<div class="row">
<div class="col-md-5" data-aos="fade-right" data-aos-duration="1500">
<label>Welcome</label>
<h2>Marketing Is The Key of Business Success</h2>
<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
<a href="#">Get Started</a>

</div>
<div class="col-md-7" data-aos="fade-up" data-aos-duration="1500">
<img src="images/banner-right.png" 
                data-paroller-factor="0.1"
                data-paroller-factor-lg="0.1"
                data-paroller-factor-md="0.3"
                data-paroller-factor-sm="-0.2"
                data-paroller-factor-xs="-0.1"
                data-paroller-type="foreground"
                data-paroller-direction="horizontal"
                data-paroller-transition="transform .7s linear">

</div>
</div>
</div>
</section>
<!---<img class="bannerarrow" src="images/Group-4.png">--->
<!-------------subcategory section------------->
<section class="subcate_wraper" data-aos="fade-up" data-aos-duration="1500">
<div class="container-fluid">
<ul class="owl-carousel owl-theme"  >
    @if (count($categories) > 0)
        @foreach ($categories as $category)
        <li class="item">
            <a href="#">
                <div class="service1"><img src="{{url('/storage/images/'.$category->image)}}"></div>
                <span>{{ $category->name }}</span>
            </a>
        </li>
        @endforeach
    @else
     <li class="item">No record found</li>    
    @endif
</ul>
</div>
</section>

<!-----banner-2--->
<section class="home_banner home_banner2">
<div class="container-fluid">
<div class="home_banner2in">
<div class="row">
<div class="col-md-7" data-aos="fade-right" data-aos-duration="1500">
<img src="images/Group-46.png">
</div>
<div class="col-md-5 home_banner2text" data-aos="fade-up" data-aos-duration="1500">
<label>Welcome</label>
<h2>take your business marketing to the next</h2>
<p>But I must explain to you how all this mistaken idea of denouncing pleasure and account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or praising pain was born and I will give you a complete.</p>
<a href="#">Get Started</a>
</div>
</div>
</div>
</div>
</section>


<section class="home_banner home_banner2">
<div class="container-fluid">
<div class="home_banner2in">
<div class="row flex-row-reverse">
<div class="col-md-7" data-aos="fade-left" data-aos-duration="1500">
<img src="images/Group-46.png">
</div>
<div class="col-md-5 home_banner2text" data-aos="fade-up" data-aos-duration="1500">
<label>Welcome</label>
<h2>take your business marketing to the next</h2>
<p>But I must explain to you how all this mistaken idea of denouncing pleasure and account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or praising pain was born and I will give you a complete.</p>
<a href="#">Get Started</a>
</div>
</div>
</div>
</div>
</section>

<section class="home_banner home_banner2">
<div class="container-fluid">
<div class="home_banner2in">
<div class="row">
<div class="col-md-7" data-aos="fade-right" data-aos-duration="1500">
<img src="images/Group-46.png">
</div>
<div class="col-md-5 home_banner2text" data-aos="fade-up" data-aos-duration="1500">
<label>Welcome</label>
<h2>take your business marketing to the next</h2>
<p>But I must explain to you how all this mistaken idea of denouncing pleasure and account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or praising pain was born and I will give you a complete.</p>
<a href="#">Get Started</a>
</div>
</div>
</div>
</div>
</section>

<!-----banner-2--->
<section class="newsarticle_wraper">
<div class="container-fluid">
<div class="row newsarticle_top">
<div class="col-md-8" data-aos="fade-right" data-aos-duration="1500">
<label>News & Article</label>
<h2>you may also like</h2>
</div>
<div class="col-md-4 text-right" data-aos="fade-left" data-aos-duration="1500">
<a href="#">View All</a>
</div>
</div>
<hr class="mb-5">
<!----listing--->
<div class="row newsarticle_mid" data-aos="fade-up" data-aos-duration="1500">
<div class="col-md-3">
<a href="#"><img src="images/newsart1.jpg"></a>
</div>
<div class="col-md-6">
<ul>
<li>Posted</li>
<li>June 14, 2020</li>
<li>By</li>
<li>News</li>
</ul>
<h3><a href="#"> Punto Pago allows quick and secure payments for services in Panama</a></h3>
</div>
<div class="col-md-3">
<a href="#" class="nextpg"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>
</div>
<div class="row newsarticle_mid" data-aos="fade-up" data-aos-duration="1500">
<div class="col-md-3">
<a href="#"><img src="images/newsart2.jpg"></a>
</div>
<div class="col-md-6">
<ul>
<li>Posted</li>
<li>June 14, 2020</li>
<li>By</li>
<li>News</li>
</ul>
<h3><a href="#">Teamwork of team members together in the best way</a></h3>
</div>
<div class="col-md-3">
<a href="#" class="nextpg"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>
</div>
<div class="row newsarticle_mid" data-aos="fade-up" data-aos-duration="1500">
<div class="col-md-3">
<a href="#"><img src="images/newsart3.jpg"></a>
</div>
<div class="col-md-6">
<ul>
<li>Posted</li>
<li>June 14, 2020</li>
<li>By</li>
<li>News</li>
</ul>
<h3><a href="#"> The user can also replenish a balance make remittances </a></h3>
</div>
<div class="col-md-3">
<a href="#" class="nextpg"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>
</div>
</section>

<!-------------testimonial-------------->

<section class="testimonils_wrapper">

<div class="container-fluid">
<label data-aos="fade-left" data-aos-duration="1500">Testimonial</label>
<h2 data-aos="fade-right" data-aos-duration="1500">what the people thinks about us</h2>
<div class="row">
<div class="col-md-4" data-aos="fade-left" data-aos-duration="1500">
<div class="testimonils_listiner">
<ul class="">
<li><img src="images/tesuser1.jpg"></li>
<li><p><strong>Charles Patterson</strong></p>
<p>one year with us</p>
</li>
<li><i class="fa fa-quote-left" aria-hidden="true"></i></li>
</ul>
<p class="testmon_desc">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
</div>
</div>
<div class="col-md-4" data-aos="fade-left" data-aos-duration="1500">
<div class="testimonils_listiner">
<ul class="">
<li><img src="images/tesuser1.jpg"></li>
<li><p><strong>Charles Patterson</strong></p>
<p>one year with us</p>
</li>
<li><i class="fa fa-quote-left" aria-hidden="true"></i></li>
</ul>
<p class="testmon_desc">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
</div>
</div>
<div class="col-md-4" data-aos="fade-left" data-aos-duration="1500">
<div class="testimonils_listiner">
<ul class="">
<li><img src="images/tesuser1.jpg"></li>
<li><p><strong>Charles Patterson</strong></p>
<p>one year with us</p>
</li>
<li><i class="fa fa-quote-left" aria-hidden="true"></i></li>
</ul>
<p class="testmon_desc">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
</div>
</div>
</div>
</div>

</section>
<!----------------NEWSLETTER------------>
<section class="newsletter_wrapper">
<div class="container">
<label data-aos="fade-up" data-aos-duration="1500">Join Our Community</label>
<h2 data-aos="fade-up" data-aos-duration="1500" >subscribe to our newsletter</h2>
<p data-aos="fade-up" data-aos-duration="1500">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
<!-- <form data-aos="fade-up" data-aos-duration="1500">
<input type="email" placeholder="Enter Your Email">
<input type="submit" value="Get Started">
</form> -->
<form data-aos="fade-up" data-aos-duration="1500" action="{{ url('news-save') }}" method="post">
        {{ csrf_field() }}
    <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Enter Your Email" required>    
    <input type="submit" value="Get Started">
</form>
</div>
</section>
@endsection
