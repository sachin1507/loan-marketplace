@extends('layouts.app')

@section('content')    
<div class="container">
<div class="article_bannerimg">
<img id="overview" src="{{url('/storage/articles/'.$article->image)}}">
<h2>{!! $article->title !!}</h2>
</div>
<div class="row">   
    <div class="col-8 article_inner">
      <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">	  
	      {!! $article->description !!}
	  </div>
	</div>

	 <div class="col-4" data-spy="scroll" data-target="#navbar-example">
	  <div class="make-me-sticky" >
       <div class="sidebar_quklink" id="navbar-example">
	   <h4>In this article</h4>
    <ul class=" nav-tabs" role="tablist">
       <li> <a class="list-group-item list-group-item-action active" href="#list-item-1">Overview</a></li>
        <li><a class="list-group-item list-group-item-action" href="#list-item-2">What is car insurance?</a></li>
        <li><a class="list-group-item list-group-item-action" href="#list-item-3">Buying car insurance</a></li>
        <li><a class="list-group-item list-group-item-action" href="#list-item-4">Do I need car insurance?</a></li>
		 <li><a class="list-group-item list-group-item-action" href="#list-item-5">What doesn’t car insurance cover?</a></li>
		</ul>
      </div>
	  <div class="sidebar_comparecard">
		<h3>Lorem Ipsum is simply dummy</h3>
		<ul>
		<li><img src="/images/CIMB_World_Mastercard-1.png"><label>10.0</label><a href="#">Visit</a></li>
			<li><img src="/images/Maybank_FC.png"><label>9.5</label><a href="#">Visit</a></li>
				<li><img src="/images/OCBC_Cashflo.png"><label>8.5</label><a href="#">Visit</a></li>
					<li><img src="/images/CIMB_World_Mastercard-1.png"><label>7.8</label><a href="#">Visit</a></li>
		</ul>
		<div class="comparebtn_sidebar"><a href="#">Compare all</a></div>
	  </div>
	  </div>
    </div>
</div>
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
