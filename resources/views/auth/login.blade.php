

<body>
<x-guest-layout>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div id="form_wrapper">

        <div id="form_left">
            <img src="{{ asset('storage/login.png') }}" alt="computer icon">
        </div>

        <form method="POST" action="{{ route('login') }}"  id="form_right">
            @csrf
            <h1>Connexion</h1>
            <!-- Email Address -->
            <div class="input_container">
                <i class="fas fa-envelope"></i>
                <x-text-input id="field_email" class='input_field' placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input_container mt-4">
                <i class="fas fa-lock"></i>
                <x-text-input id="field_password" class='input_field'
                                type="password" placeholder="Mot de passe"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <x-primary-button id='input_submit' class='input_field'>
                {{ __('Se connecter') }}
            </x-primary-button>

            <div class="d-flex justify-content-between">
                <span>
                    @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot your password ?') }}
                    </a>
                    @endif
                </span> &nbsp;&nbsp;&nbsp;

            <!-- Remember Me -->
                <label for="remember_me" class="inline-flex">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <span id='create_account'>
                <a href="{{ route('register') }}">Créer un compte ➡ </a>
            </span>



        </form>

    </div>


</x-guest-layout>

</body>


<style>

:root {
        --body_gradient_left:#7200D0;
        --body_gradient_right: #C800C1;
        --form_bg: #ffffff;
        --input_bg: #E5E5E5;
        --input_hover:#eaeaea;
        --submit_bg: #F28123;
        --submit_hover: #e7d4c5e4;
        --icon_color:#6b6b6b;
    }

     * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        /* make the body full height*/
        height: 100vh;
        /* set our custom font */
        font-family: 'Roboto',
        sans-serif;
        /* create a linear gradient*/
        background: linear-gradient(170deg, #e7d4c5e4, #F28123);        display:flex;
    }

    #form_wrapper {
        width: 1000px;
        height: 700px;
        /* this will help us center it*/
        margin:auto;
        background-color: var(--form_bg);
        border-radius: 50px;
        /* make it a grid container*/
        display: grid;
        /* with two columns of same width*/
        grid-template-columns: 1fr 1fr;
        /* with a small gap in between them*/
        grid-gap: 5vw;
        /* add some padding around */
        padding: 5vh 15px;
    }


    #form_left {
        /* center the image */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #form_left img {
        width: 350px;
        height: 350px;
    }

    #form_right {
        display: grid;
        /* single column layout */
        grid-template-columns: 1fr;
        /* have some gap in between elements*/
        grid-gap: 20px;
        padding: 10% 5%;
    }

    .input_container {
        background-color: var(--input_bg);
        /* vertically align icon and text inside the div*/
        display: flex;
        align-items: center;
        padding-left: 20px;
    }

    .input_container:hover {
        background-color: var(--input_hover);
    }

    .input_container,
    #input_submit {
        height: 60px;
        border-radius: 30px;
        width: 100%;
    }

    .input_field {
        color: var(--icon_color);
        background-color: inherit;
        width: 90%;
        border: none;
        font-size: 1.3rem;
        font-weight: 400;
        padding-left: 30px;
    }

    .input_field:hover,
    .input_field:focus {
        outline: none;
    }

    #input_submit {
        background-color: #F28123;
        padding-left: 0;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
    }

    #input_submit:hover {
        background-color: #34d399;
        transition: background-color,
            1s;
        cursor: pointer;
    }


    h1,
    span {
        text-align: center;
    }

    /* shift it a bit lower */
    #create_account {
        display: block;
        position: relative;
        top: 30px;
    }

    a {
        /* remove default underline */
        text-decoration: none;
        color: var(--submit_bg);
        font-weight: bold;
    }

    a:hover {
        color: var(--submit_hover);
    }

    i {
        color: var(--icon_color);
    }

    @media screen and (max-width:768px) {

        /* make the layout  a single column and add some margin to the wrapper */
        #form_wrapper {
            grid-template-columns: 1fr;
            margin-left: 10px;
            margin-right: 10px;
        }
        /* on small screen we don't display the image */
        #form_left {
            display: none;
        }
    }

</style>
