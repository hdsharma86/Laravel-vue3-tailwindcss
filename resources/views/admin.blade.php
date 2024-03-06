<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laravel Vue3 TailwindCss - Startup Kit</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        @vite(['resources/js/app.js', "resources/css/app.css"])
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
    </body>
</html>