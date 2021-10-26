<x-guest-layout>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
</head>
<body>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        

        <div class="container" style="max-height: 100vh;overflow: hidden">
            <div class="row">
                <div class="col-md-7 d-md-block">
                    <img src="images/login.jpg" class="w-100" alt="">
                </div>
                <div class="col-md-5 vh-100 d-flex align-items-center">

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('login') }}" class="mt-md-5 w-100">
                        @csrf

                        <input type="email" name="email" placeholder="USUARIO" id="email" class="form-control mt-4" :value="old('email')" required autofocus>
                        
                        <input type="password" name="password" placeholder="CONTRASEÑA" id="password" class="form-control mt-4" required autocomplete="current-password">
                        
                        {{-- <input type="text" name="" placeholder="FICHA SAP" id="" class="form-control mt-4"> --}}

                        <button type="submit" class="btn btn-success btn-block mt-5" style="background-color: rgb(13, 122, 122);">INGRESAR </button>
                        
                        <div class="w-100 text-center mt-5">

                            <img src="{{asset('images/logosider.png')}}"  alt="">
                        </div>
                    
                    </form>
                </div>
            </div>
        

</div>


</body>
</html>

      {{--   <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form> --}}
   
</x-guest-layout>
