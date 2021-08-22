

@if (session('info'))

    <div class="sessions">
        <div class="session-main">
            <div class="session-title session-title-info">Info!</div>

            <div class="session-body">
                {{session('info')}}
            </div>

            <div class="session-close">
                &times;
            </div>
        </div>
    </div>
    <script>

        document.querySelector('.session-close').addEventListener('click', function () {
            document.querySelector('.sessions').style.display = 'none';
        });
    
    </script>
    


@endif

@if(session('success')) 

    <div class="sessions">
        <div class="session-main">
            <div class="session-title session-title-success">Success!</div>

            <div class="session-body">
                {{session('success')}}
            </div>

            <div class="session-close">
                &times;
            </div>
        </div>
    </div>
    <script>

        document.querySelector('.session-close').addEventListener('click', function () {
            document.querySelector('.sessions').style.display = 'none';
        });
    
    </script>
    

@endif

@if(session('error')) 

    <div class="sessions">
        <div class="session-main">
            <div class="session-title session-title-danger">Error!</div>

            <div class="session-body">
                {{session('error')}}
            </div>

            <div class="session-close">
                &times;
            </div>
        </div>
    </div>
    
    <script>

        document.querySelector('.session-close').addEventListener('click', function () {
            document.querySelector('.sessions').style.display = 'none';
        });
    
    </script>
    


@endif


