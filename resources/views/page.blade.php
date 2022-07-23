<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Church Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>

  <body>

<div class="container">

    <div class="row">
        <div class="col-md-12 mt-2 mb-2 h6">

            @if (count($errors) > 0)
            <div class="text-left alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <!-- <strong>Error! </strong> <br /> -->
              @foreach ($errors->all() as $error)
                {{ $error }}<br />
              @endforeach
            </div>
            @endif

            @if(session('message'))
            <div class="alert alert-success alert-dismissible" role="alert" style="background:#98FB98;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
               {!! session('message') !!}
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert" style="background:#98FB98;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
               {!! session('success') !!}
            </div>
            @endif

            @if(session('info'))
            <div class="alert alert-info alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
               {!! session('info') !!}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
               {!! session('error') !!}
            </div>
            @endif

            @if(session('warning'))
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
               {!! session('warning') !!}
            </div>
            @endif

            @if(session('danger'))
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
               {!! session('danger') !!}
            </div>
            @endif
        </div>
  </div>

    <section >

       <div class="row">

          <!-- Brand Box -->
          <div class="col-sm-6 brand">
             <a href="#" class="logo">REC.<span></span></a>

             <div class="heading">
                <h2>CHURCH</h2>
                <p>Unifying all Records</p>
             </div>

             <div class="success-msg">
                <p>Great! You are one of our members now</p>
                <a href="#" class="profile">Your Profile</a>
             </div>
          </div>


          <!-- Form Box -->
          <div class="col-sm-6 form">

             {{-- <!-- Login Form -->
             <div class="login form-peice switched">
                <form class="login-form" action="#" method="post">
                   <div class="form-group">
                      <label for="loginemail">Email Adderss</label>
                      <input type="email" name="loginemail" id="loginemail" required>
                   </div>

                   <div class="form-group">
                      <label for="loginPassword">Password</label>
                      <input type="password" name="loginPassword" id="loginPassword" required>
                   </div>

                   <div class="CTA">
                      <input type="submit" value="Login">
                      <a href="#" class="switch">I'm New</a>
                   </div>
                </form>
             </div><!-- End Login Form --> --}}


             <!-- Signup Form -->
             <div class="signup form-peice">
                <form class="" action="{{ route('signup') }}" method="post">

                   @csrf
                   <div class="form-group">
                      <label for="name">First Name</label>
                      <input type="text" name="firstname">
                      <span class="error"></span>
                   </div>
                   <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" name="lastname" >
                    <span class="error"></span>
                 </div>
                   <div class="form-group">
                      <label for="email">Email Adderss</label>
                      <input type="email" name="email"  class="email">
                      <span class="error"></span>
                   </div>

                   <div class="form-group">
                      <label for="phone">Phone Number </label>
                      <input type="text" name="phone" >
                   </div>

                   <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="pass">
                      <span class="error"></span>
                   </div>

                   <div class="form-group">
                      <label for="passwordCon">Confirm Password</label>
                      <input type="password" name="password_confirmation" class="passConfirm">
                      <span class="error"></span>
                   </div>

                   <div class="">
                      <input type="submit" value="Signup Now" >
                      {{-- <a href="#" class="switch">I have an account</a> --}}
                   </div>
                </form>
             </div><!-- End Signup Form -->
          </div>
       </div>

    </section>


    {{-- <footer>
       <p>
           <a href="http://mohmdhasan" target="_blank">Kola Genuine</a>
       </p>
    </footer> --}}

 </div>

  </body>

</html>
{{-- <script src="{{url('js/main.js')}}"></script> --}}
