@extends('layouts.main')

@section('container')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="/css/login.css">

    <!--<title>Login & Registration Form</title>-->

    <div class="container2">

            <div class="form login">
                <span class="title">Login</span>

                <form action="/administrator/login" method="post">
                        @csrf
                    <div class="input-field">
                        <input type="text" name="email" class=" @error('email')
                        is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <i class="uil uil-envelope icon"></i>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" id="password" placeholder="Enter your password" required value="{{ old('password') }}">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Login">
                    </div>
                </form>
                
            </div>

    </div>

    <script>
        const container2 = document.querySelector(".container2"),
            pwShowHide = document.querySelectorAll(".showHidePw"),
            pwFields = document.querySelectorAll(".password"),
            login = document.querySelector(".login-link");

               //   js code to show/hide password and change icon
            pwShowHide.forEach(eyeIcon =>{
                eyeIcon.addEventListener("click", ()=>{
                    pwFields.forEach(pwField =>{
                        if(pwField.type ==="password"){
                            pwField.type = "text";

                            pwShowHide.forEach(icon =>{
                                icon.classList.replace("uil-eye-slash", "uil-eye");
                            })
                        }else{
                            pwField.type = "password";

                            pwShowHide.forEach(icon =>{
                                icon.classList.replace("uil-eye", "uil-eye-slash");
                            })
                        }
                    })
                })
            })

    </script>
</body>
</html>


@endsection
