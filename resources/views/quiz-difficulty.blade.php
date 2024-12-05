@extends('layouts.app')

@section('content')
<div class="pt-[90px] px-[50px]">
    <div class="mb-[40px]">
        <div class="flex justify-end">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_107_2)">
                <circle cx="24" cy="20" r="20" fill="#598FEB"/>
                </g>
                <path d="M22 28V22H26V28H31V20H34L24 11L14 20H17V28H22Z" fill="white"/>
                <defs>
                <filter id="filter0_d_107_2" x="0" y="0" width="48" height="48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_107_2"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_107_2" result="shape"/>
                </filter>
                </defs>
                </svg>

        </div>
        <div class="mt-[20px] relative text-[#5A5A5A] text-[40px]"><b>Let's Play</b></div>
        <p class="text-light text-[#5A5A5A]">Be the first!</p>
    </div>

    <div class="space-y-8">
        <div class="relative h-[150px] z-0 w-full text-white bg-[#ED709C] rounded-[20px] px-8 py-5">

        </div>
        <div class="relative h-[150px] z-0 w-full text-white bg-[#A58ED3] rounded-[20px] px-8 py-5">

        </div>
        <div class="relative h-[150px] z-0 w-full text-white bg-[#5F97F8] rounded-[20px] px-8 py-5">

        </div>
    </div>
</div>
@endsection
