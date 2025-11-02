<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Honor Bangladesh Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">

  <div class="flex w-full max-w-6xl bg-white shadow-2xl rounded-3xl overflow-hidden">

    <!-- LEFT PANEL -->
    <div class="hidden lg:flex flex-col justify-between w-1/2 bg-gradient-to-br from-teal-500 via-cyan-500 to-violet-600 text-white p-12 relative overflow-hidden">
      
      <!-- Decorative shapes -->
      <div class="absolute inset-0 opacity-20">
        <div class="absolute w-96 h-96 bg-white/10 rounded-full -top-20 -left-20 blur-3xl"></div>
        <div class="absolute w-72 h-72 bg-white/10 rounded-full bottom-0 right-0 blur-2xl"></div>
      </div>

      <!-- Logo -->
      <div class="relative z-10 flex items-center space-x-4">
        <div class="bg-white rounded-xl p-3">
          <i class="fas fa-cash-register text-3xl text-teal-500"></i>
        </div>
        <div>
          <h1 class="text-3xl font-bold">Honor Bangladesh</h1>
          <p class="text-cyan-200 text-sm">Number one Platform Solution</p>
        </div>
      </div>

      <!-- Tagline -->
      <div class="relative z-10 mt-16">
        <h2 class="text-4xl font-bold leading-tight mb-4">Welcome Back Honor 2.0</h2>
        <p class="text-cyan-100 text-lg mb-8">
          Power your store, manage inventory, and track revenue seamlessly.
        </p>
        <ul class="space-y-4">
          <li class="flex items-center space-x-3">
            <div class="bg-white/20 p-2 rounded-lg"><i class="fas fa-chart-line"></i></div>
            <span>Sales & Analytics Dashboard</span>
          </li>
          <li class="flex items-center space-x-3">
            <div class="bg-white/20 p-2 rounded-lg"><i class="fas fa-warehouse"></i></div>
            <span>Inventory Control</span>
          </li>
          <li class="flex items-center space-x-3">
            <div class="bg-white/20 p-2 rounded-lg"><i class="fas fa-users"></i></div>
            <span>Customer Management</span>
          </li>
        </ul>
      </div>

      <div class="relative z-10 text-sm text-cyan-200 mt-8">
        © 2025 Honor Bangladesh. All Rights Reserved.
      </div>
    </div>

    <!-- RIGHT PANEL (Login Form) -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-10">
      <div class="w-full max-w-md">

        <!-- Mobile Logo -->
        <div class="lg:hidden text-center mb-8">
          <div class="inline-block bg-gradient-to-r from-teal-500 via-cyan-500 to-violet-500 rounded-xl p-4 mb-3">
            <i class="fas fa-cash-register text-3xl text-white"></i>
          </div>
          <h1 class="text-2xl font-bold text-gray-800">Honor Bangladesh</h1>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h2 class="text-3xl font-bold text-gray-800 mb-2">Sign In</h2>
          <p class="text-gray-500 mb-8">Access your dashboard below</p>

          <form id="loginForm" class="space-y-5">
            <!-- Username -->
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Username</label>
              <div class="relative">
                <i class="fas fa-user absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" id="username"
                  class="w-full pl-10 pr-4 py-3 border rounded-lg focus:ring-2 focus:ring-teal-400 focus:border-transparent"
                  placeholder="example@store.com" required>
              </div>
            </div>

            <!-- Password -->
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
              <div class="relative">
                <i class="fas fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="password" id="password"
                  class="w-full pl-10 pr-10 py-3 border rounded-lg focus:ring-2 focus:ring-teal-400 focus:border-transparent"
                  placeholder="••••••••" required>
                <button type="button" onclick="togglePassword()" 
                  class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                  <i class="fas fa-eye" id="toggleIcon"></i>
                </button>
              </div>
            </div>

            <!-- Remember -->
            <div class="flex items-center justify-between text-sm">
              <label class="flex items-center space-x-2">
                <input type="checkbox" class="accent-teal-500">
                <span>Remember me</span>
              </label>
              <a href="#" class="text-teal-600 font-semibold hover:text-teal-800">Forgot Password?</a>
            </div>

            <!-- Submit -->
            <button
              type="submit"
              class="w-full py-3 font-bold text-white bg-gradient-to-r from-teal-500 via-cyan-500 to-violet-500 rounded-lg hover:from-teal-600 hover:via-cyan-600 hover:to-violet-600 transition-transform transform hover:scale-[1.02]"
            >
              <i class="fas fa-sign-in-alt mr-2"></i> Sign In
            </button>

            <!-- Divider -->
            <div class="relative my-4">
              <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
              </div>
              <div class="relative flex justify-center text-sm">
                <span class="bg-white px-3 text-gray-500">or</span>
              </div>
            </div>

            <!-- Register -->
            <div class="text-center text-sm">
              <p class="text-gray-600">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-teal-500 font-semibold hover:text-teal-700">
                  Create one
                </a>
              </p>
            </div>
          </form>
        </div>

        <!-- Help -->
        <div class="text-center mt-6">
          <a href="#" class="text-sm text-gray-600 hover:text-gray-800">
            <i class="fas fa-question-circle mr-1"></i> Need help?
          </a>
        </div>
      </div>
    </div>
  </div>

  <script>
    function togglePassword() {
      const input = document.getElementById('password');
      const icon = document.getElementById('toggleIcon');
      if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
      } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
      }
    }

    document.getElementById('loginForm').addEventListener('submit', (e) => {
      e.preventDefault();
      const username = document.getElementById('username').value;
      const btn = e.target.querySelector('button[type="submit"]');
      btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Signing in...';
      btn.disabled = true;
      setTimeout(() => {
        alert(`Welcome back, ${username}!`);
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-sign-in-alt mr-2"></i> Sign In';
      }, 1500);
    });
  </script>
</body>
</html>
