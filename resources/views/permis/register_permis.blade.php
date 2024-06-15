<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> CitizenConnect </title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/login_impots.css')}}">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Sign up</header>
                    <form action="{{ route('add_register_permis') }}" method="POST">
                        @csrf
                        <div class="field input-field">
                            <input type="text" placeholder="Username" class="input" name="username">
                        </div>
                        <div class="field input-field">
                            <input type="email" placeholder="Email" name="email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" name="password" class="password">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password" name="password_confirmation">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button>Sign up</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="{{ route('login_permis')}}" class="link login-link">Login</a></span>
                    </div>
                </div>

            </div>
        </section>

        <!-- JavaScript -->
        <script src="{{ asset('js/login_impots.js')}}"></script>
    </body>
</html>