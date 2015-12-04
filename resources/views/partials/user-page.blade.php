<header class="user-header">

</header>


<div class="user-home-wrapper">

  <aside class="aside aside-1">
  <ul>
    <li>
      <a class='listing' href="#listing">List an item!</a>
      <a class='listing search' href="#search">Search </a>
    </li>
  </ul>
  </aside>
 
  <article class="main">
    <h1 class="user-h1">Welcome {{ Auth::user()->name }}, here are todays sales!</h1>
  	<ul class="flex-container">
    @foreach($listings as $listing)
    <li class="flex-item-user">
      @if($listing->image)
        <img class="user-page-image" src="/uploads/{{ $listing->image }}" alt style="width:200px; height:150px;">
      @else
        <p>No current listings! why dont you list something?</p>
      @endif    
  	</li>

    @endforeach
	</ul>
   	 
  </article>

  

</div>