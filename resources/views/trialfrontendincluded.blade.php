<html>

    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/lib/normalize.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <script type="text/javascript" src="{{ URL::asset('js/lib/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/lib/underscore.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/lib/backbone.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/myscript.js') }}"></script>
        <script>
        </script>
    </head>
    <body>
        <div id="antwoord"></div>
        <input type="button" value="probeer javascript" onclick="proberen()">
        <input type="button" value="probeer javascript" onclick="proberenpost()">
        <input type="button" value="test in file" onclick="testinfile()">
    </body>
</html>
