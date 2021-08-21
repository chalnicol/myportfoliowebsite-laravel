
@extends('layouts.app')

@section('title', 'Main' )



@section('content')
    
    <div class="d-flex h-100 bg-jumbo" style="min-height: 320px;">
            
        <div class="m-auto text-center" style="width:95%">
        <h1 class="display-4">Hi, I am Charlou Nicolas!</h1>
        <p class="lead">Welcome to my portfolio website.</p>
        <p>
            <!-- <a href="#projects" class="btn btn-outline-secondary btn-lg mx-1 my-2">Get Started</a> -->
            <a href="#contacts" class="btn btn-custom3 btn-lg mx-1 my-2">Let's Talk</a>
        </p>
        </div>

    </div> 

    <section id="whatido">

        <div class="bg-anims"></div>
        <div id="mydetails">
        <div class="row justify-content-center">
            <div class="col-sm-auto">
            <div id="pic" class="mx-auto mb-4 mb-sm-0" style="max-width: 180px;">
                <!-- insert pic -->
            </div>
            </div>
            <div class="col-sm-auto">
            <div id="details" class="py-2 mx-auto" style="max-width:320px;">
                <h3><strong>What I Do</strong></h3>
                <!-- insert what i do.. statement -->
            </div>
            </div>
        </div>
        </div>

    </section>
    
    <hr class="my-hr">

       <!-- expertise... -->
    <section id="expertise">

        <div class="text-center mt-4">

          <h4><strong>Top Expertise</strong></h4>
       
          <div class="d-flex flex-column flex-lg-row justify-content-center">
            <div>
              <p>Fullstack Developer with primary focus on PHP / HTML5 Games :</p>
            </div>
            <div class="ml-0 ml-lg-3">
              <a href="{{ url('/storage/assets/pdf/charlounicolas.pdf') }}" class="btn btn-sm btn-custom2" target="_blank">Download Resume</a>
            </div>
          </div>

        </div>
    
        <div id="skill_cont" class="p-4 mx-auto" style="max-width: 850px;">

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

        <div class="text-center mt-4 mb-2">
        <h4><span class="material-icons align-bottom mr-2">apps</span><strong>Recent Projects</strong></h4>
        </div>
        <div id="projects_cont" class="py-4 row mx-auto" style="width:95%;max-width:1180px;">
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
    
    </section>

    
    <script src="{{ asset('js/datahandler.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>

@endsection