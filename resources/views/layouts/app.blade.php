<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Bookr - @yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    </head>
    <body>
        {{-- 
    START NAVBAR

    1. Create a Navbar with the ff. links
      - Application/Brand Name with an href "/home"
      - A Dropdown list that has the ff. list items:
        @guest the user is a guest
          - Login
          - Register
        @else
          - Home
          - Library
          @if the user is an Admin
            - Users
            - A button to add Books
            - A button to add Categories
          @else
            - Account
          @endif
          - A Dropdown toggle that has the ff. links:
            - Logout
            - A hidden form with a method POST
              - Add @csrf
        @endguest

    END NAVBAR
  --}}

  {{-- 
    2. Add a yield for the main content
    
    START MAIN

    main
      @yield('content')
    footer

    END MAIN
  --}}

  {{-- 
    3. Add a yield for the JS scripts

    @yield('script')
  --}}

  {{-- 
    4. Add custom scripts here
  --}}
        
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
