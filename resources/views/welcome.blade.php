<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <title>Laravel</title>
        
        <!-- Fonts -->
        

        <!-- Styles -->
        
    </head>
    <body>
        <div id="app">
         <v-app>
            <mcomponent mainpath="{{ url('/') }}"></mcomponent>
            
         </v-app>
            
         
        </div>
        
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
