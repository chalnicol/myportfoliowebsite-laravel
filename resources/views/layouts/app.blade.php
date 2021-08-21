
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    
</head>
<body>
    <div id="app">
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom1">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('storage/assets/images/logo.png') }}" class="img-fluid align-top" width="30" alt="">
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
        
        @include('inc.sessionmessages')

        <main class="bg-custom3">
            @yield('content')
        </main>

        <footer id="contacts" class="bg-custom1 text-white p-4 rounded-top" style="min-height: 320px;">
            <div class="row justify-content-center">
                
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
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

                      
                    </form>
    
                    <!-- <small class="text-warning">* work in progress</small> -->
                  </p>
    
                  <br>
                </div>
    
                <br>
            </div>
        </footer>
    
        
    </div>
</body>
</html>