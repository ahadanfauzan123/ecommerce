@extends('auth.auth-layout.auth-layout')
@section('title')
    login
@endsection
@section('body')
    <div class="flex flex-col items-center justify-start bg-white shadow-xl shadow-purple-100 rounded-xl w-[40%] py-4">
        <h1 class="text-2xl font-extrabold">LOGIN</h1>
        <form action="" method="post" class="flex flex-col items-center space-y-4 w-full">
            @csrf
            <div class="flex flex-col space-y-2 w-[80%]">
                <label for="email" class="font-semibold">
                    Email
                </label>
                <input type="email" name="email" id="email" placeholder="Email Address" required class="w-full px-6 text-xl placeholder:text-sm placeholder:font-semibold font-extrabold h-[50px] rounded-xl outline-0 border-0 bg-gray-200">
            </div>
            <div class="flex flex-col space-y-2 w-[80%]">
                <label for="password" class="font-semibold">
                    Password
                </label>
                <input type="password" name="password" id="password" placeholder="Password" required class="w-full px-6 text-xl placeholder:text-sm placeholder:font-semibold font-extrabold h-[50px] rounded-xl outline-0 border-0 bg-gray-200">
            </div>
            <div class="flex w-[80%] justify-between items-center">
                <h1 class="text-sm">doesnt have account?, <a href="/register" class="font-semibold text-purple-400">Sign Up Here</a></h1>
                <button type="submit" class="px-6 py-2 text-white font-extrabold bg-purple-400 rounded-lg">SIGN IN</button>
            </div>
        </form>
    </div>
@endsection
