@extends('layouts.app')

@section('content')    
<section class="contact_wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-7 contactus_lft">
<label>Contact Us</label>
<h2>let's talk about everythings !</h2>
<img class="" src="images/contactlft_img.png">
<!---<div id="trainMotion">
<img class="train" src="images/contactlft_img.png">
</div>-->
</div>
<div class="col-md-5 contactus_right">
<form>
<p>enter your ful name</p>
<input  type="text" placeholder="Your Name*">
<p>your email address</p>
<input  type="text" placeholder="Your Email*">
<p>write massage</p>
<textarea placeholder="Question*"></textarea>

<div class="contact_savewrap">
<div class="contact_saveemail"><input id="html" type="checkbox"><label for="html">Save My Email And Name</label></div>
<input type="submit" value="Get Started">
</div>

</form>
</div>
</div>
<div class="row">
<div class="col-md-4 ">
</div>
</div>
</div>
</section>

<section>
<div class="container-fluid">
<div class="contact_emiladdress">
<div class="row">
<div class="col-md-4 alleadd">
<i class="fa fa-envelope-o" aria-hidden="true"></i>
<h2>email :</h2>
<p>info@yourdomain.com</p>
<p>info@yourdomain123.com</p>
</div>
<div class="col-md-4 alleadd">
<i class="fa fa-phone" aria-hidden="true"></i>
<h2>phone :</h2>
<p>+7 (212) 654-33-35</p>
<p>+7 (212) 654-33-35</p>
</div>
<div class="col-md-4 alleadd">
<i class="fa fa-map-marker" aria-hidden="true"></i>
<h2>address :</h2>
<address>
patricia C. Amedee 4401 waldeck<br>
Street Grapevine nashville, Tx 76051

</address>
</div>
</div>
</div>
<img class="contact_map" src="images/contact-map.jpg">
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
