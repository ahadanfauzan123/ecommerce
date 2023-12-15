@extends('auth.auth-layout.auth-layout')
@section('title')
    register
@endsection
@section('body')
    <div class="flex flex-col items-center justify-start min-h-[300px] bg-white shadow-xl shadow-purple-100 rounded-xl w-[40%] py-4">
        <h1 class="text-2xl font-extrabold">SIGN UP</h1>
        <form action="" method="post" class="flex flex-col items-center space-y-3 w-full">
            @csrf
            {{-- username --}}
            <div class="flex w-[80%] justify-between items-center">
                <div class="flex flex-col space-y-2 w-[47%]">
                    <label for="first name" class="font-semibold">
                        first name
                    </label>
                    <input type="text" name="firstName" id="first name" placeholder="first name" required class="w-full px-6 text-xl placeholder:text-sm placeholder:font-semibold font-extrabold h-[50px] rounded-xl outline-0 border-0 bg-gray-200">
                </div>
                <div class="flex flex-col space-y-2 w-[47%]">
                    <label for="last name" class="font-semibold">
                        last name
                    </label>
                    <input type="text" name="lastName" id="last name" placeholder="last name" required class="w-full px-6 text-xl placeholder:text-sm placeholder:font-semibold font-extrabold h-[50px] rounded-xl outline-0 border-0 bg-gray-200">
                </div>
            </div>
            {{-- email --}}
            <div class="flex flex-col space-y-2 w-[80%]">
                <label for="email" class="font-semibold">
                    Email
                </label>
                <input type="email" name="email" id="email" placeholder="Email Address" required class="w-full px-6 text-xl placeholder:text-sm placeholder:font-semibold font-extrabold h-[50px] rounded-xl outline-0 border-0 bg-gray-200">
            </div>
            {{-- password --}}
            <div class="flex w-[80%] justify-between items-center">
                <div class="flex flex-col space-y-2 w-[47%]">
                    <label for="password" class="font-semibold">
                        password
                    </label>
                    <input type="password" name="password" id="password" placeholder="password" required class="w-full px-6 text-xl placeholder:text-sm placeholder:font-semibold font-extrabold h-[50px] rounded-xl outline-0 border-0 bg-gray-200">
                </div>
                <div class="flex flex-col space-y-2 w-[47%]">
                    <label for="confirm password" class="font-semibold">
                        confirm password
                    </label>
                    <input type="password" name="lastName" id="confirm password" placeholder="confirm password" required class="w-full px-6 text-xl placeholder:text-sm placeholder:font-semibold font-extrabold h-[50px] rounded-xl outline-0 border-0 bg-gray-200">
                </div>
            </div>
            {{-- age --}}
            <div class="flex flex-col space-y-2 w-[80%]">
                <label for="age" class="font-semibold">
                    age
                </label>
                <input type="range" min="0" max="100" name="age" id="age" required class="w-full px-6 text-xl placeholder:text-sm placeholder:font-semibold font-extrabold h-[50px] rounded-xl outline-0 border-0">
            </div>
            <div class="flex w-[80%] justify-between items-center">
                <h1 class="text-sm">already have account?, <a href="/login" class="font-semibold text-purple-400">Sign In Here</a></h1>
                <a href="/selectInterest" type="submit" class="px-6 py-2 text-white font-extrabold bg-purple-400 rounded-lg">SIGN UP</a>
            </div>
        </form>
    </div>
@endsection
