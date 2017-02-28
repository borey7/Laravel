<html>
    <head>
        <title>hw - @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    
        <div class="panel panel-default">
            <div class="container">
                <h2>
                    @section('sidebar')  
                        Howework - Layout                        
                    @show
                </h2>
            </div>                
        </div>        

        <div class="container" style="height: 70%">
            @yield('content')
        </div>

        <div class="panel panel-footer text-center">            
            hw22feb - Desinged by Borey @ 2017            
        </div>
    </body>
</html>