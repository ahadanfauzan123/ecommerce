@extends('auth.auth-layout.auth-layout')
@section('title')
    selectInterest
@endsection
@section('body')
    <div class="w-[80%] min-h-screen mt-12 flex flex-col justify-center space-y-6">
        <h1 class="text-[30px] font-extrabold">SELECT YOUR INTEREST</h1>
        <form action="" method="post" class="w-full flex flex-wrap">
            <div class="relative flex items-center justify-center w-[180px] h-[180px] rounded-xl bg-white shadow-sm shadow-purple-50 mr-4 mb-4">
                <h1 class="text-[22px] font-extrabold">ROCK</h1>
                <input type="checkbox" name="" id="" class="border-2 border-purple-400 w-[20px] h-[20px] rounded-md focus:ring-0 checked:text-purple-400 absolute top-2 right-2">
            </div>
            <div class="relative flex items-center justify-center w-[180px] h-[180px] rounded-xl bg-white shadow-sm shadow-purple-50 mr-4 mb-4">
                <h1 class="text-[22px] font-extrabold">JASS</h1>
                <input type="checkbox" name="" id="" class="border-2 border-purple-400 w-[20px] h-[20px] rounded-md focus:ring-0 checked:text-purple-400 absolute top-2 right-2">
            </div>
            <div class="relative flex items-center justify-center w-[180px] h-[180px] rounded-xl bg-white shadow-sm shadow-purple-50 mr-4 mb-4">
                <h1 class="text-[22px] font-extrabold">DANGDUT</h1>
                <input type="checkbox" name="" id="" class="border-2 border-purple-400 w-[20px] h-[20px] rounded-md focus:ring-0 checked:text-purple-400 absolute top-2 right-2">
            </div>
            <div class="relative flex items-center justify-center w-[180px] h-[180px] rounded-xl bg-white shadow-sm shadow-purple-50 mr-4 mb-4">
                <h1 class="text-[22px] font-extrabold">K-POP</h1>
                <input type="checkbox" name="" id="" class="border-2 border-purple-400 w-[20px] h-[20px] rounded-md focus:ring-0 checked:text-purple-400 absolute top-2 right-2">
            </div>
            <div class="relative flex items-center justify-center w-[180px] h-[180px] rounded-xl bg-white shadow-sm shadow-purple-50 mr-4 mb-4">
                <h1 class="text-[22px] font-extrabold">J-POP</h1>
                <input type="checkbox" name="" id="" class="border-2 border-purple-400 w-[20px] h-[20px] rounded-md focus:ring-0 checked:text-purple-400 absolute top-2 right-2">
            </div>
            <div class="relative flex items-center justify-center w-[180px] h-[180px] rounded-xl bg-white shadow-sm shadow-purple-50 mr-4 mb-4">
                <h1 class="text-[22px] font-extrabold">J-POP</h1>
                <input type="checkbox" name="" id="" class="border-2 border-purple-400 w-[20px] h-[20px] rounded-md focus:ring-0 checked:text-purple-400 absolute top-2 right-2">
            </div>
            <div class="relative flex items-center justify-center w-[180px] h-[180px] rounded-xl bg-white shadow-sm shadow-purple-50 mr-4 mb-4">
                <h1 class="text-[22px] font-extrabold">J-POP</h1>
                <input type="checkbox" name="" id="" class="border-2 border-purple-400 w-[20px] h-[20px] rounded-md focus:ring-0 checked:text-purple-400 absolute top-2 right-2">
            </div>
            <div class="cursor-pointer flex items-center justify-center w-[180px] h-[180px] rounded-xl bg-purple-400 shadow-sm shadow-purple-50 mr-4 mb-4">
                <a href="/home" class="text-[22px] text-white font-extrabold">DONE</a>
            </div>
        </form>
    </div>
@endsection
