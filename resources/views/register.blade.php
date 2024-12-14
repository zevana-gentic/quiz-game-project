@extends('layouts.app')

@section('content')
@if (Session::get('success'))
<a href="{{ route('login.index') }}">
    <div class="min-h-[874px] flex flex-col items-center justify-center border">
        <svg width="150" height="150" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_221_36)">
            <path d="M75 150C55.1088 150 36.0322 142.098 21.967 128.033C7.90176 113.968 0 94.8912 0 75C0 55.1088 7.90176 36.0322 21.967 21.967C36.0322 7.90176 55.1088 0 75 0C94.8912 0 113.968 7.90176 128.033 21.967C142.098 36.0322 150 55.1088 150 75C150 94.8912 142.098 113.968 128.033 128.033C113.968 142.098 94.8912 150 75 150ZM60 112.5L127.5 48.75L116.25 37.5L60 90L33.75 63.75L22.5 75L60 112.5Z" fill="#3C84FF"/>
            </g>
            <defs>
            <clipPath id="clip0_221_36">
            <rect width="150" height="150" fill="white"/>
            </clipPath>
            </defs>
            </svg>
        <div class="mt-[40px] text-center font-source-poppins text-[#747474] text-[32px] max-w-[136px]">
            <b>Berhasil Register</b>
        </div>
    </div>
</a>
@elseif (Session::get('error') || $errors->any())
<a href="{{ route('register.index') }}" class="">
    <div class="min-h-[874px] flex flex-col items-center justify-center border">
        <svg width="209" height="209" viewBox="0 0 209 209" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M101.125 26.125C142.546 26.125 176.125 59.7035 176.125 101.125C176.125 142.546 142.546 176.125 101.125 176.125C59.7035 176.125 26.125 142.546 26.125 101.125C26.125 59.7035 59.7035 26.125 101.125 26.125ZM132.773 57.6969L101.13 89.3398L69.5457 57.7559L57.7605 69.541L89.3445 101.125L57.7605 132.709L69.5457 144.494L101.13 112.91L132.773 144.553L144.558 132.768L112.915 101.125L144.558 69.482L132.773 57.6969Z" fill="#E45D5D"/>
            </svg>
        <div class="mt-[5px] text-center font-source-poppins text-[#747474] text-[32px] max-w-[136px]">
            <b>Register Gagal</b>
        </div>
        @error('email')
            <div class="mt-[150px] text-[#E45D5D]">
                {{ $message }}
            </div>
        @enderror
    </div>
</a>
@else
<div class="pt-[50px] px-[50px]">
    <div class="mb-[40px]">
        <div class="pt-0 mt-0 text-[40px] text-[#747474]"><b>Register</b></div>
        <p class="font-light text-[#5D5D5D]">Lengkapi data untuk melakukan register!</p>
    </div>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="{{ route('register.submit') }}" method="POST" class="mt-9 space-y-4">
        @csrf
        <div class="relative">
            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" class="relative h-[60px] z-0 w-full text-white bg-[#81AEFC] rounded-[20px] px-4 pl-10 py-3 outline-0 placeholder:text-white" />
        </div>
        @error('name')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
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
            <button type="submit" class="w-full h-[60px] bg-[#3C84FF] rounded-[20px] text-white px-4 py-2.5 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                Register
            </button>
        </div>
        <div class="text-center text-[#464646]">
            Sudah punya akun? <a href="{{ route('login.index') }}" class="text-[#0083D4]">Login</a></a>
        </div>
    </form>
</div>
@endif
@endsection
