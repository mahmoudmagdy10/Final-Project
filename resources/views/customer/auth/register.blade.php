<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/auth/register.css')}}">
    <title>sighn up</title>
</head>
<body>
    <div class="container">
        <div class="sign-up-form">
            <h1>Customer</h1>
            <form action="{{route('customer.storeInfo')}}" method="post">
            @csrf
                <input type="text" name ="name" class="input-box" placeholder="Full Name">
                <input type="number" name ="phone" class="input-box" placeholder="your Number">
                <input type="email" name = "email" class="input-box"  placeholder="your e-mail">
                <input type="text" name = "address" class="input-box" placeholder=" your address">
                <input type="text" name = "country" class="input-box" placeholder="your country">
                <input type="password" name = "password" class="input-box" placeholder="your password">
                <br><br>
                <button type="submit" class="sign-up-button">
                        Sign Up
                </button>
                <p>Have an Account? <a href="{{route('api.index')}}"><span class=" Sign-in">Sign in</span> </a></p>
            </form>

        </div>
    </div>
    

    
</body>
</html>