<html>
    <head>
        <title>Lesson - @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    
        <div class="panel panel-default">
            <div class="container">
                <h2>
                    @section('sidebar')  
                        <font style="color: red">Contents from layout</font>
                    @show
                </h2>
            </div>                
        </div>        

        <div class="container">
            @yield('content')
        </div>

        <div class="panel panel-footer text-center">            
            Desinged by Borey @ 2017            
        </div>
    </body>
</html>