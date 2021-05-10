@extends('layouts.app')

@section('content')    
<section class="newsarticle_wraper blogpage_wraper">
<div class="container-fluid">
<hr class="mb-5">
<!----listing--->
<div class="row newsarticle_mid">
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
<div class="row newsarticle_mid">
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
<div class="row newsarticle_mid">
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


<!----------------NEWSLETTER------------>
<section class="newsletter_wrapper">
<div class="container">
<label>Join Our Community</label>
<h2>subscribe to our newsletter</h2>
<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
<form>
<input type="email" placeholder="Enter Your Email">
<input type="submit" value="Get Started">
</form>
</div>
</section>
@endsection
