<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Huiskluis</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {!! BootForm::text('name', 'Naam') !!}

                        {!! BootForm::email('email', 'Email address') !!}

                        {!! BootForm::password('password', 'Wachtwoord') !!}

                        {!! BootForm::password('password_confirmation', 'Herhaal wachtwoord') !!}

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="{{ route('login') }}"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
