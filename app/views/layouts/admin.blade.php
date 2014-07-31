
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faiths Makeup</title>
    {{HTML::style('css/foundation.css')}}
    {{HTML::style('css/backend/style.css')}}
    {{HTML::style('iconadmins/foundation-icons.css')}}

      <link href='http://fonts.googleapis.com/css?family=Wire+One|Poiret+One' rel='stylesheet' type='text/css'>
    {{HTML::script('js/vendor/modernizr.js')}}
  </head>
  <body>
  
<section class="header"> 
    <div class="row">
      <div class="large-2 columns">
        <div class="logo">{{HTML::image('img/logo.png')}}</div>    

      </div>
        
     
        <div class="large-7 columns medium-12 small=12 nav">

            
        </div>
    </div>
<hr /> 
</section>
       @if(Session::has('message'))
        <section>
            <div class="row">
                <div class="large-12 columns">
                    <div data-alert class="alert-box info radius">
                {{Session::get('message')}}
                 </div>
                
                </div>
            
            </div>
        
        
        </section>
        
        @endif    
<section class="content">
    <div class="row">
      <div class="large-3 columns menu_bg">
            <ul class="side-nav">  
              <li>{{link_to_route('homepageimage','Manage Homepage')}}</li>
              <li>{{link_to_route('create.album','Manage Portfolio')}}</li>
              <li>{{link_to_route('list.faq','Manage FAQ')}}</li>
              <li>{{link_to_route('list.aboutme','Manage About me')}}</li>
              <li>{{link_to_route('list.service','Manage Service')}}</li>

              <li>{{link_to_route('backendblogs','Blog')}}</li>
             <li>{{HTML::link('/','visit site')}}</li>
              

              


            </ul>
        </div>
   
        <div class="large-6 columns">
            @yield('content')
        </div>

        <div class="large-3 columns">
            @yield('sidebar')
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
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>
      $(document).foundation();
    </script>

    <script type="text/javascript">
tinymce.init({
    selector: ".detail",
    plugins: "image",
    image_advtab: true
 });
</script>
  </body>
</html>
