
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faith - Make up artist - @yield('title','.')</title>
	<meta name= "description" content=@yield('description', 'Best NYC makeup artist offering natural beautiful airbrush makeup and makeup lessons.')>
	<meta name ="keyword" content=@yield('keyword', 'airbrush makeup, allure magazine, best NJ makeup artist, best NYC Makuep artist, best airbrush makeup, best new york city bridal makeup, indian weddings, natural makeup, new york magazine, on location beauty services on location bridal services')>
    {{HTML::style('css/foundation.css')}}
    {{HTML::style('css/faith.css')}}
    {{HTML::style('icons/foundation-icons.css')}}

      <link href='http://fonts.googleapis.com/css?family=Wire+One|Poiret+One|Source+Sans+Pro' rel='stylesheet' type='text/css'>
      
    {{HTML::script('js/vendor/modernizr.js')}}
  </head>
  <body>
  
<section class="header"> 
    <div class="row">
      <div class="large-12 columns">
          
                <nav class="top-bar" data-topbar>
                      <ul class="title-area">
                         <li class="logo">
                           <h1><a href="/">Faith</a> </h1> <span class="tagline">Makeup Artist</span>
                             
				          
                          </li>
                             <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            <li class="toggle-topbar menu-icon"><a href="#"><span class="mobile_menu">Menu</span></a></li>
                      </ul>  		
			

                      <section class="top-bar-section">
                        <!-- Right Nav Section -->
                        <ul class="right">
                            <li><a href="{{URL::to('/')}}">Home</a></li>
                            <li>{{link_to_route('about','About Me')}}</li>
                            <li>{{link_to_route('portfolio','Portfolio')}}</li>
                            <li>{{link_to_route('faq','F.A.Q')}}</li>
                            <li>{{link_to_route('blog','Blog')}}</li>
                            <li>{{link_to_route('service','Services')}}</li>
                            <li>{{link_to_route('contact','Contact Me')}}</li>
                        </ul>

                        <!-- Left Nav Section -->
                       
                      </section>
                </nav>
          
</div>
        </div>
</section>
      
<section class="content">
    <div class="row">
        <div class="large-12 columns">
            @yield('content')
        </div>
    
    </div>
</section>
      
<section class="footer">
    <div class="row">
        <div class="large-12 columns">
          <a href="http://instagram.com/faithjeweled"><i class="fi-social-instagram large"></i></a>
          <a href="http://www.pinterest.com/fjewels/"><i class="fi-social-pinterest large"></i></a>
       
         <span class="right"><small>Site by:<a href="https://github.com/fraserk">Fraserk</a> | {{HTML::link('/backend','[login]')}}</small></span>
        </div>
    </div>
</section>
    
    {{HTML::script('js/vendor/jquery.js')}}
    
    {{HTML::script('js/foundation.min.js')}}
    
    <script>
      $(document).foundation();
    </script>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53257231-1', 'auto');
  ga('send', 'pageview');

</script>
    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'faithsmakeup'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
    
  </body>
</html>
