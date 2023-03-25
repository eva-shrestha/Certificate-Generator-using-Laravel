{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>


    <div class="d-flex justify-content-center align-items-center login-super-container">
        <div class="col-md-4 col-sm-12 px-5 py-5 login-container">
            <h1 class="text-center mb-5 pb-4 font-weight-bold"><b>CertiGen - Register</b></h1>
            <form method="POST" action="{{ route('register') }}">

                @csrf
                <div class="form-group">
                    <label for="name"><b>Username</b></label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter Username">
                    @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                </div>

                <div class="form-group">
                  <label for="Email"><b>Email</b></label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Enter Username">
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

                <div class="form-group">
                    <label for="password_confirmation"><b>Confirm Password</b></label>
                    <input name="password_confirmation" required type="password" class="form-control" id="password_confirmation" placeholder="Re-enter Password">
                    
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex  justify-content-center mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color: rgb(12, 79, 110)">
                        {{ __('Already Registered? Log in') }}
                    </a>
    
                </div><br>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn">Register</button>
                </div>
                
                
                </form>
        </div>
    </div>

</x-guest-layout>

