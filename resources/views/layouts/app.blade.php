<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- CSRF Token -->
    
        

        <title>{{config('app.name')}}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files 
        as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="description" content="">  
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            

           

            <style>
                .text-indent {
                    text-indent: 30px;		//กำหนดค่าย่อหน้า
                }
                </style>  



<style>
    .fontLogo {
        font-family: 'Prompt', sans-serif;
        font-family: 'Sofia', cursive;      
            }

     .fontLogin{
            font-family: 'Montserrat', sans-serif;
        }

        .fonth4{
            font-family: 'Montserrat', sans-serif;
            font-family: 'Playfair Display', serif;
        }
        .p{
            font-family: 'Montserrat', sans-serif;
            font-family: 'Playfair Display', serif;
            font-family: 'K2D', sans-serif;
        }
        .fonth3{
            font-family: 'K2D', sans-serif;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Playfair Display', serif;
        }
        body {
    background-color: #eaecea;
}   

   
</style>


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100&family=Sofia&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=K2D:wght@200;300;400;500&family=Montserrat:wght@300;500&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;200;300;400;500&family=Montserrat:wght@300;500&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
            
            
</head>
<body>
  
   
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top fontLogo" style="background-color: #795548;">
           
            
                <a class="navbar-brand " href="{{ URL::to('home/')}}">Beer Wedding</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('prewedding/')}}">Pre Wedding</a>
                    </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="{{ URL::to('tasks/')}}">Clothing </a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('tasks/create')}}">Add Product</a>
                      </li>
                    </ul>
                   
                      
                      <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}" style="padding-left: 50px;"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                      </li>
                        </ul>
                        
                            
                        
                
                </div>
            
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="container py-5" >
       
        <div class="row mt-10 pt-5">
          <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
          </div> 
          <div class="col-6 col-md p">
            <h5>O U R S T O R E</h5>
            <ul class="list-unstyled text-small">
              <p >Address: 1234 Nonmoung Khonkean Thailand, 40000 Street <br>

                Phone: 058-459-88542<br>
                
                Email:  bbtfansydress@gmail.com</p>
              
            </ul>
          </div>
          <div class="col-6 col-md p">
            <h5>O P E N I N G H O U R S</h5>
            <ul class="list-unstyled text-small">
              <p >Mon - Fri: 7am - 10pm<br>
                ​​Saturday: 8am - 10pm<br>
                ​Sunday: 8am - 11pm</p>
              
            </ul>
          </div>
 
          <div class="col-6 col-md p">
            <h5>A B O U T</h5>
            <ul class="list-unstyled text-small">
                <p > Team<br>
                Locations<br>
               Privacy<br>
              Terms</p>
            </ul>
          </div>
        </div>
       
      </footer>
</body>
</html>
