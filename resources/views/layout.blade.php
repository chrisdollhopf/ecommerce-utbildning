<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <script
      src="https://kit.fontawesome.com/e74c7778db.js"
      crossorigin="anonymous"
    ></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>Document</title>
    <style>
	
      .duration-200 {
        transition-duration: 200ms;
      }
      .ease-in {
        transition-timing-function: cubic-bezier(0.4, 0, 1, 1);      
      }
      .ease-out {
        transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
      }
      
      .transition {
        transition: transform 250ms ease, color 250ms ease;
      }
      .transform-180 {
        transform: rotate(-180deg);
      }
      
      </style>

  </head>

  <body class="overflow-x-hidden">
    

    <div id='app'>

      @include('nav')

      @include('header')

      @include('courses')

      @include('contact')

      @include('footer')

    </div>

  </body>
  </html>