@extends('layouts.app')

@section('content')
<div class="pt-[110px] px-[50px]">
    <div class="mb-[40px]">
        <div class="pt-0 mt-0 text-[40px] text-[#747474]"><b>Register</b></div>
        <p class="font-light text-[#5D5D5D]">Lengkapi data untuk melakukan register!</p>
    </div>

    <form action="" method="POST" class="mt-9 space-y-4">
        @csrf
        <div class="relative">
            <input type="text" placeholder="Username" name="username" value="{{ old('username') }}" class="relative h-[60px] z-0 w-full text-white bg-[#81AEFC] rounded-[20px] px-4 pl-10 py-3 outline-0 placeholder:text-white" />
        </div>
        @error('username')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
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
        <div class="relative">
            <input type="password" placeholder="Confirmation Password" name="password_confirmation" value=""
                class="relative z-0 w-full h-[60px] text-white bg-[#81AEFC] rounded-[20px] px-4 pl-10 py-3 outline-0 placeholder:text-white" />
        </div>
        @error('password_confirmation')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
        <div class="pt-2">
            <button type="submit" class="w-full h-[60px] bg-[#3C84FF] rounded-[20px] text-white px-4 py-2.5 rounded-2lg shadow-inner">
                Register
            </button>
        </div>
        <div class="text-center text-[#464646]">
            Sudah punya akun? <a href="#" class="text-[#0083D4]"><a href="{{ route('login') }}">Login</a></a>
        </div>
    </form>
</div>
@endsection
