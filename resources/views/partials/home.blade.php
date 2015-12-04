<div id="slider">
<figure>
<img src="http://demosthenes.info/assets/images/austin-fireworks.jpg" alt="">
<img src="http://demosthenes.info/assets/images/taj-mahal.jpg" alt="">
<img src="http://demosthenes.info/assets/images/ibiza.jpg" alt="">
<img src="http://demosthenes.info/assets/images/ankor-wat.jpg" alt="">
<img src="http://demosthenes.info/assets/images/austin-fireworks.jpg" alt="">
</figure>
</div>


<ul class="home-container">
	@if(Auth::check())
  		<li class="home-item 2"><a href="/user/{{ Auth::user()->name }}" class="a-home">Buy & Sell</a></li>
  		<li class="home-item 3"><a href="/user/{{ Auth::user()->name }}" class="a-home">Browse Listings</a></li>
  	@else
  		<li class="home-item 2"><a href="#register" class="a-home">Buy & Sell</a></li>
  		<li class="home-item 3"><a href="#register" class="a-home">Browse Listings</a></li>
  	@endif


</ul>