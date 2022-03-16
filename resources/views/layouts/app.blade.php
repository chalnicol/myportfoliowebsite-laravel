
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" defer></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js" defer></script>
    
    
    
</head>
<body>


    <div id="preloader_img" class="h-100" >
      
      <div class="d-flex w-100 h-100 bg-white">

        <div class="m-auto" style="width:200px">

          <div class="text-center mb-2">Loading..</div>
          <div id="pbar" class="border w-100 rounded" style="height:10px;overflow:hidden">
            <div id="pbar_progress" class="bg-dark h-100" style="width: 2%;" ></div>
          </div>

        </div>

      </div>
     
    </div>

    <div id="app" style="display: none">
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom1">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('/assets/images/logo.png') }}" class="img-fluid align-top" width="30" alt="">
              Chalnicol</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Home</a>
                
                <a class="nav-item nav-link" href="#whatido">Author</a>
                <a class="nav-item nav-link" href="#contacts">Contacts</a>
              </div>
            </div>
        </nav>
        
        <main class="bg-custom4">
            @yield('content')
        </main>

        <footer id="contacts" class="bg-custom1 text-white p-4 rounded-top" style="min-height: 320px;">
            <div class="row justify-content-center mt-4">
                
                <div class="col-lg-5">
                  <h5>Contacts</h5>
                  <hr class="my-3 border border-bottom-0">
                  
                  <div id="contacts_cont" class="py-1">
                    <!-- <div class="mb-2"><span class="material-icons align-bottom mr-2">email</span>chalnicol@gmail.com</div>
                    <div class="mb-2"><span class="material-icons align-bottom mr-2">smartphone</span>(063) 916-635-1839</div>
                    <div class="mb-2"><span class="material-icons align-bottom mr-2">call</span>(02) 8-584-77-11</div>
                    <div class="mb-2"><span class="material-icons align-bottom mr-2">home</span>Sacred  Heart Village, Caloocan City 1400</div> -->
                  </div>
                  
                  <br><br>
                  <h5>Social Media</h5>
                  <hr class="my-3 border border-bottom-0">
                  <p>Get in touch with me through my social media sites.</p>
    
                  <div id="socials_cont" class="d-flex my-3">
                  
                    <!-- insert socials here. -->
                      
                  </div>
    
                  <br>
    
                </div>
                
    
                <div class="col-lg-5">
                  <h5>Leave A Message</h5>
                  <hr class="my-3 border border-bottom-0">
                  <p>
    
                    <form action="/sendmail" enctype=”multipart/form-data” method="post">
    
                      @csrf 

                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="msg">Message</label>
                        <textarea class="form-control" id="msg" name="msg" rows="3" required></textarea>
                      </div>
                      <button class="btn btn-custom2 btn-lg btn-block" type="submit">Submit</button>

                      
                    </form>
    
                    <!-- <small class="text-warning">* work in progress</small> -->
                  </p>
    
                  <br>
                </div>
    
                <br>
            </div>
        </footer>
        
    </div>

    <script src="{{ asset('js/disableOnSubmit.js') }}"></script>

    <script src="{{ asset('js/pageloader.js') }}"></script>



</body>
</html>