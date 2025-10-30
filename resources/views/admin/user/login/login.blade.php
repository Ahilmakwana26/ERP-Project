<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FintechDB Login</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Load Lucide Icons for the eye/slash icon -->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 2rem;
        }

        .login-container {
            /* The main white card with two halves */
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .loginbtn{
            background-color: rgb(183, 224, 236);
        }
        .logo{
            width: 500px;
            height: 400px;
        }
       
        @media (max-width: 768px) {
            .side-panel {
                display: none; 
            }
            .login-container {
                width: 100%;
                max-width: 400px;
            }
            .logo{
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="login-container flex flex-col md:flex-row w-full max-w-4xl rounded-2xl">

       <div>
        <img class="logo" src="/images/logo.png" alt="">
       </div>
        <!-- Right Side: Login Form -->
        <div class="login-form w-full md:w-1/2 bg-white p-8 sm:p-12 lg:p-16 rounded-2xl md:rounded-l-none">
            @include('partials.flash')
            <h2 class="text-3xl font-semibold mb-10 text-gray-800">Log in</h2>
            <form action="{{route('login.store')}}" method="post" class="space-y-6">
               {{csrf_field()}}
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-500 sr-only">Email</label>
                    <div class="relative border-b-2 border-gray-300 focus-within:border-dark-blue transition duration-300">
                        <input type="email" id="email" name="email" required placeholder="Email"
                               class="block w-full border-0 focus:ring-0 focus:outline-none placeholder-gray-500 text-lg py-1">
                    </div>
                </div>
                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-500 sr-only">Password</label>
                    <div class="relative border-b-2 border-gray-300 focus-within:border-dark-blue transition duration-300">
                        <input type="password" id="password" name="password" required placeholder="Password"
                               class="block w-full border-0 focus:ring-0 focus:outline-none placeholder-gray-500 text-lg py-1 pr-10">
                        
                        <span id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer text-gray-500 hover:text-gray-800 transition duration-150">
                            <!-- Lucide icon for eye-slash (default hidden) -->
                            <i class="ri-eye-off-line"></i>
                        </span>
                    </div>
                </div>

                <!-- Keep Me Logged In & Checkbox -->
                <div class="flex items-center pt-2">
                    <input id="remember-me" name="remember-me" type="checkbox" 
                           class="h-4 w-4 text-dark-blue border-gray-300 rounded focus:ring-dark-blue custom-checkbox">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-600">
                        Keep me logged in
                    </label>
                </div>
                <div class="pt-4">
                    <button type="submit"
                            class="loginbtn w-full flex justify-center py-3 px-4 border border-transparent 
                                   rounded-xl shadow-sm text-lg font-medium text-dark-blue bg-opacity-70 
                                   bg-color-teal hover:bg-opacity-100 transition duration-300 
                                   focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-color-teal">
                        Log In
                    </button>
                </div>
            </form>
            <div class="text-center pt-4">
                <a href="#" class="text-sm font-medium text-gray-500 hover:text-dark-blue transition duration-150">
                    Forgot password?
                </a>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
           

            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
            const iconElement = togglePassword.querySelector('i');
            let check=0;
            if (passwordInput && togglePassword) {
                togglePassword.addEventListener('click', function () {
                  if(check==0){
                    togglePassword.innerHTML=`<i class="ri-eye-line"></i>`;
                    const type= passwordInput.getAttribute('type')==='password'? 'text':'password';
                    passwordInput.setAttribute('type',type);
                    check=1;
                  }else{
                    togglePassword.innerHTML=`<i class="ri-eye-off-line"></i>`;
                    const type= passwordInput.getAttribute('type')==='password'? 'text':'password';
                    passwordInput.setAttribute('type',type);
                    check=0;
                  }
                   
                });
            }
        });
    </script>

</body>
</html>
