
@extends('layouts.app')

@section('title', 'Main' )


@section('content')
    
    <div class="d-flex align-items-center bg-jumbo">
            
        <div class="text-center w-100">
          <h1 class="display-4">Hi, I am Charlou Nicolas!</h1>
          <p class="lead">Welcome to my portfolio website.</p>
          <p>
              <a href="#contacts" class="btn btn-custom2 btn-xlg mx-1 my-2">Let's Talk</a>
          </p>
        </div>

    </div> 

    @include('inc.sessionmessages')

    <section id="whatido" class="d-flex align-items-center justify-content-center">

        <div id="mydetails" class="text-center">

          <div class="row justify-content-center">
              <div class="col-sm-auto">
              <div id="pic" class="mx-auto mb-4 mb-sm-0" style="max-width: 180px;">
                  <!-- insert pic -->
              </div>
              </div>
              <div class="col-sm-auto">
              <div id="details" class="py-2 mx-auto text-left" style="max-width:320px">
                  <h3><strong>What I Do</strong></h3>
                  
                  <!-- insert what i do.. statement -->
              </div>
              </div>
          </div>
        </div>

    </section>
    
    <hr class="my-hr">

       <!-- expertise... -->
    <section id="expertise" class="d-flex flex-column align-items-center justify-content-center">

        <div id="title-1" class="text-center mt-4">

          <h4><strong>Top Expertise</strong></h4>
       
          <div class="row justify-content-center mt-2">

            <div class="col-lg-* px-4 px-md-0 mb-3 mb-lg-0">
              <span>Fullstack Developer with primary focus on PHP and HTML5 Games</span><span class="d-none d-lg-inline-block ml-2">|</span>
            </div>
            <div class="col-lg">
              <a href="{{ asset('assets/pdf/charlounicolas.pdf') }}" class="btn btn-sm btn-custom3" target="_blank">Download Resume</a>
            </div>
          </div>

        </div>
    
        <div id="skill_cont" class="p-4 mx-auto mt-4" style="max-width: 850px;">

          <div class="form-row mb-2">
            <div class="col-md-4 mb-2 mb-md-0 p-2 bg-custom1 rounded my-block">
              <div class="text-light"><strong>Advanced</strong></div>
            </div>
            <div class="col-md-8">
              <div id="advanced" class="d-flex flex-wrap">
                <!-- insert skills -->
              </div>
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col-md-4 mb-2 mb-md-0 p-2 bg-custom1 rounded my-block">
              <div class="text-light"><strong>Intermediate</strong></div>
            </div>
            <div class="col-md-8">
              <div id="intermediate" class="d-flex flex-wrap">
                <!-- insert skills -->
              </div>
            </div>
          </div>

          <div class="form-row mb-2">
            <div class="col-md-4 mb-2 mb-md-0 p-2 bg-custom1 rounded my-block">
              <div class="text-light"><strong>Beginner</strong></div>
            </div>
            <div class="col-md-8">
              <div id="beginner" class="d-flex flex-wrap">
                <!-- insert skills -->
              </div>
            </div>
          </div>
         
        </div>

    </section>
        
    <hr class="my-hr">
      
    <!-- recent works -->
    <section id="projects">

        <div id="title-2" class="text-center mt-4 mb-2">
          <h4><span class="material-icons align-bottom mr-2">apps</span><strong>Recent Projects</strong></h4>
        </div>
        <div id="projects_cont" class="py-4 mb-4 row mx-auto" style="width:95%;max-width:1180px;">
        <!-- insert recent projects -->
        </div>

    </section>

    <hr class="my-hr">

    <section id="workhistory">

        <div class="text-center mt-4 mb-2">
            <h4><span class="material-icons align-bottom mr-2">work</span><strong>Work History</strong></h4>
        </div>

        <div id="work_cont" class="p-4 mx-auto" style="width:95%;max-width:960px;"> 
            <!-- insert work history -->
        </div>

        <br>
        <br>
        <br>

    
    </section>

    <script src="{{ asset('js/datahandler.js') }}"></script>
    

@endsection