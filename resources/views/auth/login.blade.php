@extends('heder')
@section('content')

    <!-- Session Status -->
    <br><br><br>
<section class="section-sm" id='tt'>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto " id='ttt' >
        
        <div class="content mb-5">
          <h2 id="t" align='center'>veillez s'authentifier</h2>
          <p id="bgc"></p>
        </div>

      <h2 align='center'>  <img  class="img-fluid" width="100px" src="images/cle.png"alt="Reader | Hugo Personal Blog Template"></h2>

    <form method="POST" action="{{ route('login') }}" >
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="votre email svp?" required>
          </div>
          <div class="form-group">
            <label for="email">password</label>
            <input type="password" name="password" id="email" class="form-control" placeholder="votre telephone svp">
          </div>
          
        <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div> -->

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <!-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a> -->
            @endif

            <x-primary-button class="ml-3" id='btauth'>
                {{ __('Connexion') }}
            </x-primary-button>
        </div>
    </form>
    </div>
    </div>
  </div>
</section>

@endsection
