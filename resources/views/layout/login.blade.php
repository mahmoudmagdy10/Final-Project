<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my-project</title>
    <link rel="stylesheet" href="{{asset('css/auth/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth/normalise.css')}}">

</head>
<body>
    <div class="login">
    <h3>log in </h3>
    <form action="{{route('api.login')}}" method="post">
        @csrf
        <div class="email">
            <i class="fa fa-lock"></i>
            <input type="email" name="email" placeholder="enter your email">
        </div>
        <div class="password">
            <i class="fa fa-user"></i>    
            <input type="password" name ="password" placeholder="enter your password"required>
        </div>

        <a href=""><input type="submit"value="log in">
        </a>
        <div class="icon">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>            
            <a href="#"><i class="fab fa-linkedin"></i></a>            
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>            

        </div>
        <div class="signup">
            <h3>sign up as...</h3>
            <div class="option">
                <a href="{{route('customer.register')}}">customer</a>
                <a href="{{route('contractor.register')}}">contractor</a>
            </div>
        </div>
    </form>
    </div>
    <script src="{{asset('js/auth/pro.js')}}"></script>
</body>

</html>