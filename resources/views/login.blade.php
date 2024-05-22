<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <title>LoginPages</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section>
            <div class="login-box">
                <form action="" method="post">
                    <h2>LOGIN</h2>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $item)
                                    <li>{{$item}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="email" value="{{ old('email') }}" name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                        <input type="password"  name="password">
                        <label>Password</label>
                    </div>
                    <div class="remember-forget">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forget Password?</a>
                    </div>
                    <button type="submit">Login</button>
                    <div class="register-link">
                        <p>Don't have an account?<a href=""> Register </a></p>
                    </div>
                </form>
            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  
        <!-- <script src='js/script.js'></script> -->
    </body>
</html>