@extends('layouts.app')

@section('content')
<div class="pt-[120px] px-[50px]">
    <div class="mb-[80px]">
        <div class="text-[55px] text-[#676767]"><b>Login</b></div>
        <div class="pt-0 mt-0 text-[40px] text-[#747474]"><b>to Play!</b></div>
    </div>

    <form action="" method="POST" class="mt-9 space-y-4">
        @csrf
        <div class="relative">
            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class="relative h-[60px] z-0 w-full text-white bg-[#81AEFC] rounded-[20px] px-4 pl-10 py-3 outline-0 placeholder:text-white" />
        </div>
        @error('email')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
        <div class="relative">
            <input type="password" placeholder="Password" name="password" value=""
                class="relative z-0 w-full h-[60px] text-white bg-[#81AEFC] rounded-[20px] px-4 pl-10 py-3 outline-0 placeholder:text-white" />
        </div>
        @error('password')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
        <div class="pt-2">
            <button type="submit" class="w-full h-[60px] bg-[#3C84FF] rounded-[20px] text-white px-4 py-2.5 rounded-2lg shadow-inner">
                Login
            </button>
        </div>
        <div class="text-center text-[#464646]">
            Belum punya akun? <a href="#" class="text-[#0083D4]">Register</a>
        </div>
    </form>
</div>
@endsection
