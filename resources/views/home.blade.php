@extends('layouts.app')

@section('content')
<div class="pt-[110px] px-[50px]">
    <div class="mb-[80px]">
        <img src="https://placehold.co/350x250" alt="">
    </div>

    <div class="space-y-4 mb-[100px]">
        <a href="{{ route('instruction') }}" class="block">
            <div class="relative h-[80px] z-0 w-full text-white bg-[#6CA2FF] rounded-[20px]">
                <div class="w-full h-full flex items-center">
                    <div class="ml-[30px] mr-[30px]">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_53_454)">
                            <rect x="4" width="40" height="40" rx="10" fill="#4683EB"/>
                            <path d="M20 13.14V29.14L33 21.14L20 13.14Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_53_454" x="0" y="0" width="48" height="48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_53_454"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_53_454" result="shape"/>
                            </filter>
                            </defs>
                            </svg>
                    </div>
                        Mulai Kuis
                </div>
            </div>
        </a>
        <a href="{{ route('profile') }}" class="block">
            <div class="relative h-[80px] z-0 w-full text-white bg-[#6CA2FF] rounded-[20px]">
                <div class="w-full h-full flex items-center">
                    <div class="ml-[30px] mr-[30px]">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_53_457)">
                            <rect x="4" width="40" height="40" rx="10" fill="#4683EB"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20 15C20 13.9391 20.4214 12.9217 21.1716 12.1716C21.9217 11.4214 22.9391 11 24 11C25.0609 11 26.0783 11.4214 26.8284 12.1716C27.5786 12.9217 28 13.9391 28 15C28 16.0609 27.5786 17.0783 26.8284 17.8284C26.0783 18.5786 25.0609 19 24 19C22.9391 19 21.9217 18.5786 21.1716 17.8284C20.4214 17.0783 20 16.0609 20 15ZM20 21C18.6739 21 17.4021 21.5268 16.4645 22.4645C15.5268 23.4021 15 24.6739 15 26C15 26.7956 15.3161 27.5587 15.8787 28.1213C16.4413 28.6839 17.2044 29 18 29H30C30.7956 29 31.5587 28.6839 32.1213 28.1213C32.6839 27.5587 33 26.7956 33 26C33 24.6739 32.4732 23.4021 31.5355 22.4645C30.5979 21.5268 29.3261 21 28 21H20Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_53_457" x="0" y="0" width="48" height="48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_53_457"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_53_457" result="shape"/>
                            </filter>
                            </defs>
                            </svg>
                    </div>
                    Profil
                </div>
            </div>
        </a>
        <a href="" class="block">
            <div class="relative h-[80px] z-0 w-full text-white bg-[#6CA2FF] rounded-[20px]">
                <div class="w-full h-full flex items-center">
                    <div class="ml-[30px] mr-[30px]">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_53_460)">
                            <rect x="4" width="40" height="40" rx="10" fill="#4683EB"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18 10C17.2044 10 16.4413 10.3161 15.8787 10.8787C15.3161 11.4413 15 12.2044 15 13V27C15 27.7956 15.3161 28.5587 15.8787 29.1213C16.4413 29.6839 17.2044 30 18 30H24C24.7956 30 25.5587 29.6839 26.1213 29.1213C26.6839 28.5587 27 27.7956 27 27V13C27 12.2044 26.6839 11.4413 26.1213 10.8787C25.5587 10.3161 24.7956 10 24 10H18ZM28.293 15.293C28.4805 15.1055 28.7348 15.0002 29 15.0002C29.2652 15.0002 29.5195 15.1055 29.707 15.293L33.707 19.293C33.8945 19.4805 33.9998 19.7348 33.9998 20C33.9998 20.2652 33.8945 20.5195 33.707 20.707L29.707 24.707C29.5184 24.8892 29.2658 24.99 29.0036 24.9877C28.7414 24.9854 28.4906 24.8802 28.3052 24.6948C28.1198 24.5094 28.0146 24.2586 28.0123 23.9964C28.01 23.7342 28.1108 23.4816 28.293 23.293L30.586 21H22C21.7348 21 21.4804 20.8946 21.2929 20.7071C21.1054 20.5196 21 20.2652 21 20C21 19.7348 21.1054 19.4804 21.2929 19.2929C21.4804 19.1054 21.7348 19 22 19H30.586L28.293 16.707C28.1055 16.5195 28.0002 16.2652 28.0002 16C28.0002 15.7348 28.1055 15.4805 28.293 15.293Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_53_460" x="0" y="0" width="48" height="48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_53_460"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_53_460" result="shape"/>
                            </filter>
                            </defs>
                            </svg>
                    </div>
                    Logout
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
