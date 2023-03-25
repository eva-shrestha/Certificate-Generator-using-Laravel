{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>

    <div class="d-flex justify-content-center align-items-center login-super-container">
        <div class="col-md-4 col-sm-12 px-5 py-5 login-container">
            <h1 class="text-center mb-5 pb-4 font-weight-bold"><b>CertiGen - Login</b></h1>
            <form method="POST" action="{{ route('login') }}">

                @csrf
                <div class="form-group">
                  <label for="Email"><b>Email</b></label>
                  <input name="email" type="text" class="form-control" id="Email" placeholder="Enter email">
                  @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
             

                <div class="form-group">
                  <label for="Password"><b>Password</b></label>
                  <input  name="password" required autocomplete="current-password" type="password" class="form-control" id="Password" placeholder="Enter Password">
                  @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-check">
                  <input name="remember" type="checkbox" class="form-check-input" id="check">
                  <label class="form-check-label" for="check">Remember me</label><br>
                  <br>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn">Login</button>
                </div>
                <div class="d-flex  justify-content-center mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}" style="color: rgb(12, 79, 110)">
                        {{ __('New to CertiGen? Sign Up') }}
                    </a>
    
                </div>
                
                </form>
        </div>
    </div>

</x-guest-layout>
