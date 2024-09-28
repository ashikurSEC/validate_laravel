<x-layout>
</x-layout>
<div class="hero bg-base-200 min-h-screen">
    
      <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <form action="{{ route('register') }}" method="post" class="card-body">
          @csrf
          <h1 class="text-3xl text-center font-bold">Registration Form</h1>

          <div class="form-control">
            <label class="label">
              <span class="label-text">Name</span>
            </label>
            <input type="text" name="username" value="{{ old('username') }}" placeholder="Enter your full name" class="input input-bordered border hover:border-gray-500 focus:border-gray-500 transition-all duration-300 @error('username') border-red-500 @enderror">

            @error('username')
                <p class="text-red-500 text-xs mt-1 py-1 px-1">{{ $message }}</p>
            @enderror

          </div>

          <div class="form-control">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" class="input input-bordered hover:border-gray-500 focus:border-gray-500 transition-all duration-300 @error('email') border-red-500 @enderror">

            @error('email')
                <p class="text-red-500 text-xs mt-1 py-1 px-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-control">
            <label class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="password" name="password" placeholder="Enter Your password" class="input input-bordered hover:border-gray-500 focus:border-gray-500 transition-all duration-300 @error('password') border-red-500 @enderror">

            @error('password')
                <p class="text-red-500 text-xs mt-1 py-1 px-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-control">
            <label class="label">
              <span class="label-text">Contfirm Password</span>
            </label>
            <input type="password" name="password_confirmation" placeholder="Confirm password" class="input input-bordered hover:border-gray-500 focus:border-gray-500 transition-all duration-300 @error('password') border-red-500 @enderror">
          </div>

          <label class="label">
            Do you have an account? <a href="{{ route('login') }}" class="label-text-alt link link-hover">Login</a>
          </label>


          <div class="form-control mt-6">
            <button class="btn btn-success">Register</button>
          </div>

        </form>
      </div>
    </div>
  </div>