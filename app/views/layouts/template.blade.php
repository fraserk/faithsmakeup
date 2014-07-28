
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faiths Makeup</title>
    {{HTML::style('css/foundation.css')}}
    {{HTML::style('css/faith.css')}}
    {{HTML::style('icons/foundation-icons.css')}}

      <link href='http://fonts.googleapis.com/css?family=Wire+One|Poiret+One' rel='stylesheet' type='text/css'>
    {{HTML::script('js/vendor/modernizr.js')}}
  </head>
  <body>
  
<section class="header"> 
    <div class="row">
      <div class="large-2 columns">
        <div class="logo"><a href="/">{{HTML::image('img/logo.png')}}</a></div>           
      </div>
        
     
        <div class="large-7 columns medium-12 small=12 nav">

            <ul class="inline-list right">
                <li><a href="{{URL::to('/')}}">Home</a></li>
                <li>{{link_to_route('about','About Faith S.')}}</li>
                <li>{{link_to_route('portfolio','Portfolio')}}</li>
                <li>{{link_to_route('faq','F.A.Q')}}</li>
                <li>{{link_to_route('blog','Blog')}}</li>
                <li>{{link_to_route('contact','Contact me')}}</li>
            </ul>
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
       

        </div>
    </div>
</section>
    
    {{HTML::script('js/vendor/jquery.js')}}
    
    {{HTML::script('js/foundation.min.js')}}
    
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
