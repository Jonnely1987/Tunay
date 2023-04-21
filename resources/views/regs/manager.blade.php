
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>Register</title>
  </head>
  <body class="text-gray-800 antialiased">
    
    <main>
      <section class="absolute w-full h-full">
        <div
          class="absolute top-0 w-full h-full bg-gray-900"
          style="background-image: url('https://images.unsplash.com/uploads/141103282695035fa1380/95cdfeef?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&fit=crop&amp;w=1130&amp;q=80'); background-size: 100%; background-repeat: no-repeat;"
         
        ></div>
        <div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-pink-200 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6">
                  <div class="text-center mb-3">
                    <h6 class="text-gray-600 text-sm font-bold">
                      Register As
                    </h6>
                  </div>
                  <div class="btn-wrapper text-center">
                    <button
                      class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                      type="submit"
                      style="transition: all 0.15s ease 0s;"><a href="{{ route('register')}}">Jobseeker</a>
                      </button>
                     
                  </div>
                  <hr class="mt-6 border-b-1 border-gray-400" />
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                  <div class="text-gray-500 text-center mb-3 font-bold">
                    <small>Sign Up Now</small>
                  </div>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="hidden" name="user_type" value="1">
                    <div class="relative w-full mb-3">
                      <label  for="name" class="block uppercase text-gray-700 text-xs font-bold mb-2"for="grid-password">{{ __('Name') }}</label>
                        <input id="name" type="name" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow form-control @error('name')is-invalid @enderror focus:outline-none focus:ring w-full"
                        name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name" style="transition: all 0.15s ease 0s;"/>
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="relative w-full mb-3">
                        <label  for="email" class="block uppercase text-gray-700 text-xs font-bold mb-2"for="grid-password">{{ __('Email Address') }}</label>
                          <input id="email" type="email" class="border-0 px-3 py-3 placeholder-gra0y-400 text-gray-700 bg-white rounded text-sm shadow form-control @error('email')is-invalid @enderror focus:outline-none focus:ring w-full"
                          name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Email" style="transition: all 0.15s ease 0s;"/>
                      </div>
                     @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror      
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-gray-700 text-xs font-bold mb-2"for="grid-password">{{ __('Password') }}</label>
                        <input id="password"  type="password" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Password" style="transition: all 0.15s ease 0s;"/>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="relative w-full mb-3">
                        <label for="password-confirm" class="block uppercase text-gray-700 text-xs font-bold mb-2">{{ __('Confirm Password') }}</label>
                          <input id="password-confirm"  type="password" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full form-control"
                          name="password_confirmation" required autocomplete="new-password" placeholder="Password" style="transition: all 0.15s ease 0s;"/>
                      </div>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror                    
                    
                    <div class="text-center mt-6">
                      <button
                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                        type="submit" style="transition: all 0.15s ease 0s;">
                        {{ __('Register') }}
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        
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
