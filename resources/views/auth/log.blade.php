<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"/>
    <title>Log in</title>
  </head>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="theme-color" content="#000000" />
      <link rel="shortcut icon" href="./assets/img/favicon.ico" />
      <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"/>
      
    </head>
  
  <body class="text-gray-800 antialiased">
      
      <main>
        <section class="absolute w-full h-full">
          <div
            class="absolute top-0 w-full h-full bg-gray-900"
            style="background-image: url(./assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;"
          ></div>
          <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
              <div class="w-full lg:w-4/12 px-4">
                <div
                  class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
                >
                  <div class="rounded-t mb-0 px-6 py-6">
                    <div class="text-center mb-3">
                      <h6 class="text-gray-600 text-sm font-bold">
                        Sign in with
                      </h6>
                    </div>
                    <div class="btn-wrapper text-center">
                      <button
                        class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                        type="button"
                        style="transition: all 0.15s ease 0s;"
                      >
                        <img
                          alt="..."
                          class="w-5 mr-1"
                          src="./assets/img/github.svg"
                        />Github</button
                      ><button
                        class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                        type="button"
                        style="transition: all 0.15s ease 0s;"
                      >
                        <img
                          alt="..."
                          class="w-5 mr-1"
                          src="./assets/img/google.svg"
                        />Google
                      </button>
                    </div>
                    <hr class="mt-6 border-b-1 border-gray-400" />
                  </div>
                  <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <div class="text-gray-500 text-center mb-3 font-bold">
                      <small>Or sign in with credentials</small>
                    </div>
  
                    
                  <form method="POST" action="{{ route('login') }}">
                          @csrf
                 
                      <div class="relative w-full mb-3">
                          <label class="block uppercase text-gray-700 text-xs font-bold mb-2"for="email">{{ __('Email Address') }}</label>
                          <input type="email" id="email" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none 
                            focus:ring w-full " required autocomplete="email"placeholder="Email"
                            style="transition: all 0.15s ease 0s;"/>
                      </div>
                              
  
  
  
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">{{ __('Password') }}</label>
                          <input type="password" class="border-0 px-3 py-3 placeholder-gray-400 
                          text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full "
                           placeholder="Password"style="transition: all 0.15s ease 0s;"/>
                      </div>
                      
  
  
                      <div class="form-check" >
                        <label class="inline-flex items-center cursor-pointer">
                          <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="form-checkbox border-0 rounded text-gray-800 ml-1 w-5 h-5"
                            style="transition: all 0.15s ease 0s;"/>
                            <span class="ml-2 text-sm font-semibold text-gray-700">{{ __('Remember Me') }}</span></label>
                      </div>
  
  
                      <div class="text-center mt-6">
  
                        <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold 
                          uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none 
                          mr-1 mb-1 w-full"
                          type="submit"
                          style="transition: all 0.15s ease 0s;">
                          <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> {{ __('Login') }}</a>
                        </button>
                    
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                       @endif
                      </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
  
  
  
  
  
  
  
          <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
            <div class="container mx-auto px-4">
              <hr class="mb-6 border-b-1 border-gray-700" />
              <div
                class="flex flex-wrap items-center md:justify-between justify-center"
              >
                <div class="w-full md:w-4/12 px-4">
                  <div class="text-sm text-white font-semibold py-1">
                    Copyright © 2019
                    <a
                      href="https://www.creative-tim.com"
                      class="text-white hover:text-gray-400 text-sm font-semibold py-1"
                      >Creative Tim</a
                    >
                  </div>
                </div>
                <div class="w-full md:w-8/12 px-4">
                  <ul
                    class="flex flex-wrap list-none md:justify-end  justify-center"
                  >
                    <li>
                      <a
                        href="https://www.creative-tim.com"
                        class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                        >Creative Tim</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://www.creative-tim.com/presentation"
                        class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                        >About Us</a
                      >
                    </li>
                    <li>
                      <a
                        href="http://blog.creative-tim.com"
                        class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                        >Blog</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                        class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                        >MIT License</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        </section>
      </main>
    </body>
    <script>
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
      }
    </script>
  </html>
  