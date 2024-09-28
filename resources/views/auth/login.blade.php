<x-layout>
</x-layout>
<div class="hero bg-base-200 min-h-screen">

      <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <form action="{{ route('login') }}" method="post" class="card-body">
          @csrf

          <h1 class="text-3xl text-center font-bold">Welcome back</h1>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="email" name="email" placeholder="Enter your username" class="input input-bordered @error('email') border-red-500 @enderror">

            @error('email')
              <p class="text-red-500 mt-1 py-1 p-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-control">
            <label class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="password" name="password" placeholder="password" class="input input-bordered @error('password') border-red-500 @enderror">

            @error('password')
              <p class="text-red-500 mt-1 py-1 p-1">{{ $message }}</p>
            @enderror
            
          </div>

          <div class="flex items-center mt-2">
            <input type="checkbox" id="remember" name="remember" class="h-4 w-4">
            <label for="remember" class="label-text ml-2 pt-1 block text-sm text-gray-400">Remember me</label>
          </div>

          @error('failed')
            <p class="text-red-500 mt-1 py-1 p-1">{{ $message }}</p>            
          @enderror

          <div class="form-control mt-6">
            <button class="btn btn-primary">Login</button>
          </div>

          <label class="label">
            Don't have an account? <a href="{{ route('register') }}" class="label-text-alt link link-hover">Register</a>
          </label>

        </form>
      </div>
    </div>
  </div>