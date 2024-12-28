@extends('layouts.app')

@section('content')
<div class="pt-[40px] px-[50px]">
    <div class="relative flex justify-center">
        @if (@$_GET['view'] != 0)
        <div class="absolute left-0 top-1/4 transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
            <a href="?view={{ !@$_GET['view'] ? 1 : $_GET['view']-1 }}">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_42_699)">
                    <circle cx="24" cy="20" r="20" fill="#598FEB"/>
                    </g>
                    <g clip-path="url(#clip0_42_699)">
                    <path d="M19.16 18.972C20.0871 17.8783 21.3276 17.0955 22.7139 16.7297C24.1002 16.3638 25.5654 16.4325 26.9114 16.9264C28.2574 17.4203 29.4193 18.3156 30.2399 19.4913C31.0606 20.6669 31.5005 22.0662 31.5 23.5C31.5 23.8978 31.6581 24.2794 31.9394 24.5607C32.2207 24.842 32.6022 25 33 25C33.3979 25 33.7794 24.842 34.0607 24.5607C34.342 24.2794 34.5 23.8978 34.5 23.5C34.5 17.977 30.023 13.5 24.5 13.5C23.1017 13.4983 21.7185 13.7908 20.4405 14.3584C19.1626 14.9261 18.0183 15.7563 17.082 16.795L16.735 14.83C16.7043 14.6329 16.6346 14.4439 16.53 14.2741C16.4254 14.1043 16.2879 13.957 16.1257 13.841C15.9635 13.7249 15.7797 13.6424 15.5852 13.5982C15.3907 13.554 15.1893 13.5491 14.9929 13.5837C14.7964 13.6182 14.6089 13.6917 14.4411 13.7996C14.2734 13.9076 14.1289 14.0479 14.016 14.2124C13.9032 14.3768 13.8243 14.5622 13.7839 14.7575C13.7436 14.9529 13.7426 15.1543 13.781 15.35L14.823 21.26C14.892 21.651 15.113 22 15.44 22.228C15.843 22.51 16.374 22.573 16.825 22.43L22.469 21.434C22.6661 21.4033 22.8551 21.3336 23.0249 21.229C23.1948 21.1243 23.342 20.9869 23.4581 20.8247C23.5741 20.6624 23.6567 20.4787 23.7008 20.2842C23.745 20.0897 23.75 19.8883 23.7154 19.6918C23.6808 19.4954 23.6074 19.3078 23.4995 19.1401C23.3915 18.9724 23.2512 18.8278 23.0867 18.715C22.9222 18.6022 22.7369 18.5233 22.5415 18.4829C22.3462 18.4426 22.1448 18.4416 21.949 18.48L19.161 18.971L19.16 18.972Z" fill="white"/>
                    </g>
                    <defs>
                    <filter id="filter0_d_42_699" x="0" y="0" width="48" height="48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="2"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_42_699"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_42_699" result="shape"/>
                    </filter>
                    <clipPath id="clip0_42_699">
                    <rect width="24" height="24" fill="white" transform="translate(12 8)"/>
                    </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        @endif
        <div class="">
            <div class="flex justify-center items-center w-[65px] h-[65px] bg-[#598FEB] rounded-full text-white font-source-pt-mono text-[30px]">
                {{-- {{ @$_GET['view'] ? @$questions[$_GET['view']]->id : $questions->first()->id }} --}}
                {{ @$_GET['view'] ? @$_GET['view']+1 : '1' }}
            </div>
        </div>
        <div class="absolute right-0 top-1/4 transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
            @if (@$_GET['view'] != 9)
                <a href="?view={{ !@$_GET['view'] ? 1 : $_GET['view']+1 }}">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_199_3)">
                        <circle cx="24" cy="20" r="20" fill="#598FEB"/>
                        </g>
                        <g clip-path="url(#clip0_199_3)">
                        <path d="M28.84 18.972C27.9129 17.8783 26.6724 17.0955 25.2861 16.7297C23.8998 16.3638 22.4346 16.4325 21.0886 16.9264C19.7426 17.4203 18.5807 18.3156 17.7601 19.4913C16.9394 20.6669 16.4995 22.0662 16.5 23.5C16.5 23.8978 16.3419 24.2794 16.0606 24.5607C15.7793 24.842 15.3978 25 15 25C14.6021 25 14.2206 24.842 13.9393 24.5607C13.658 24.2794 13.5 23.8978 13.5 23.5C13.5 17.977 17.977 13.5 23.5 13.5C24.8983 13.4983 26.2815 13.7908 27.5595 14.3584C28.8374 14.9261 29.9817 15.7563 30.918 16.795L31.265 14.83C31.2957 14.6329 31.3654 14.4439 31.47 14.2741C31.5746 14.1043 31.7121 13.957 31.8743 13.841C32.0365 13.7249 32.2203 13.6424 32.4148 13.5982C32.6093 13.554 32.8107 13.5491 33.0071 13.5837C33.2036 13.6182 33.3911 13.6917 33.5589 13.7996C33.7266 13.9076 33.8711 14.0479 33.984 14.2124C34.0968 14.3768 34.1757 14.5622 34.2161 14.7575C34.2564 14.9529 34.2574 15.1543 34.219 15.35L33.177 21.26C33.108 21.651 32.887 22 32.56 22.228C32.157 22.51 31.626 22.573 31.175 22.43L25.531 21.434C25.3339 21.4033 25.1449 21.3336 24.9751 21.229C24.8052 21.1243 24.658 20.9869 24.5419 20.8247C24.4259 20.6624 24.3433 20.4787 24.2992 20.2842C24.255 20.0897 24.25 19.8883 24.2846 19.6918C24.3192 19.4954 24.3926 19.3078 24.5005 19.1401C24.6085 18.9724 24.7488 18.8278 24.9133 18.715C25.0778 18.6022 25.2631 18.5233 25.4585 18.4829C25.6538 18.4426 25.8552 18.4416 26.051 18.48L28.839 18.971L28.84 18.972Z" fill="white"/>
                        </g>
                        <defs>
                        <filter id="filter0_d_199_3" x="0" y="0" width="48" height="48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_199_3"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_199_3" result="shape"/>
                        </filter>
                        <clipPath id="clip0_199_3">
                        <rect width="24" height="24" fill="white" transform="matrix(-1 0 0 1 36 8)"/>
                        </clipPath>
                        </defs>
                        </svg>
                </a>
            @endif
            @if (@$_GET['view'] == 9)
                <a href="{{ route('show.score') }}">
                    <svg width="88" height="48" viewBox="0 0 88 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_221_366)">
                        <rect x="4" width="80" height="40" rx="20" fill="#598FEB"/>
                        <path d="M73.3227 19.616L63.6693 14.4213C62.8587 13.984 61.92 14.7413 62.176 15.6267L63.4987 20.256C63.552 20.448 63.552 20.64 63.4987 20.832L62.176 25.4613C61.92 26.3467 62.8587 27.104 63.6693 26.6667L73.3227 21.472C73.4873 21.382 73.6248 21.2494 73.7205 21.088C73.8163 20.9265 73.8668 20.7423 73.8668 20.5547C73.8668 20.367 73.8163 20.1828 73.7205 20.0214C73.6248 19.86 73.4873 19.7273 73.3227 19.6373V19.616Z" fill="white"/>
                        <path d="M18.576 24.084C18.024 24.084 17.528 23.988 17.088 23.796C16.656 23.596 16.316 23.324 16.068 22.98C15.82 22.628 15.692 22.224 15.684 21.768H16.848C16.888 22.16 17.048 22.492 17.328 22.764C17.616 23.028 18.032 23.16 18.576 23.16C19.096 23.16 19.504 23.032 19.8 22.776C20.104 22.512 20.256 22.176 20.256 21.768C20.256 21.448 20.168 21.188 19.992 20.988C19.816 20.788 19.596 20.636 19.332 20.532C19.068 20.428 18.712 20.316 18.264 20.196C17.712 20.052 17.268 19.908 16.932 19.764C16.604 19.62 16.32 19.396 16.08 19.092C15.848 18.78 15.732 18.364 15.732 17.844C15.732 17.388 15.848 16.984 16.08 16.632C16.312 16.28 16.636 16.008 17.052 15.816C17.476 15.624 17.96 15.528 18.504 15.528C19.288 15.528 19.928 15.724 20.424 16.116C20.928 16.508 21.212 17.028 21.276 17.676H20.076C20.036 17.356 19.868 17.076 19.572 16.836C19.276 16.588 18.884 16.464 18.396 16.464C17.94 16.464 17.568 16.584 17.28 16.824C16.992 17.056 16.848 17.384 16.848 17.808C16.848 18.112 16.932 18.36 17.1 18.552C17.276 18.744 17.488 18.892 17.736 18.996C17.992 19.092 18.348 19.204 18.804 19.332C19.356 19.484 19.8 19.636 20.136 19.788C20.472 19.932 20.76 20.16 21 20.472C21.24 20.776 21.36 21.192 21.36 21.72C21.36 22.128 21.252 22.512 21.036 22.872C20.82 23.232 20.5 23.524 20.076 23.748C19.652 23.972 19.152 24.084 18.576 24.084ZM28.799 17.424V24H27.707V23.028C27.499 23.364 27.207 23.628 26.831 23.82C26.463 24.004 26.055 24.096 25.607 24.096C25.095 24.096 24.635 23.992 24.227 23.784C23.819 23.568 23.495 23.248 23.255 22.824C23.023 22.4 22.907 21.884 22.907 21.276V17.424H23.987V21.132C23.987 21.78 24.151 22.28 24.479 22.632C24.807 22.976 25.255 23.148 25.823 23.148C26.407 23.148 26.867 22.968 27.203 22.608C27.539 22.248 27.707 21.724 27.707 21.036V17.424H28.799ZM31.7348 18.648C31.9588 18.256 32.2868 17.936 32.7188 17.688C33.1508 17.44 33.6428 17.316 34.1948 17.316C34.7868 17.316 35.3188 17.456 35.7908 17.736C36.2628 18.016 36.6348 18.412 36.9068 18.924C37.1788 19.428 37.3148 20.016 37.3148 20.688C37.3148 21.352 37.1788 21.944 36.9068 22.464C36.6348 22.984 36.2587 23.388 35.7787 23.676C35.3068 23.964 34.7788 24.108 34.1948 24.108C33.6268 24.108 33.1268 23.984 32.6948 23.736C32.2708 23.488 31.9508 23.172 31.7348 22.788V24H30.6428V15.12H31.7348V18.648ZM36.1988 20.688C36.1988 20.192 36.0988 19.76 35.8988 19.392C35.6988 19.024 35.4268 18.744 35.0828 18.552C34.7468 18.36 34.3748 18.264 33.9668 18.264C33.5668 18.264 33.1948 18.364 32.8508 18.564C32.5148 18.756 32.2428 19.04 32.0348 19.416C31.8348 19.784 31.7348 20.212 31.7348 20.7C31.7348 21.196 31.8348 21.632 32.0348 22.008C32.2428 22.376 32.5148 22.66 32.8508 22.86C33.1948 23.052 33.5668 23.148 33.9668 23.148C34.3748 23.148 34.7468 23.052 35.0828 22.86C35.4268 22.66 35.6988 22.376 35.8988 22.008C36.0988 21.632 36.1988 21.192 36.1988 20.688ZM46.6601 17.304C47.1721 17.304 47.6281 17.412 48.0281 17.628C48.4281 17.836 48.7441 18.152 48.9761 18.576C49.2081 19 49.3241 19.516 49.3241 20.124V24H48.2441V20.28C48.2441 19.624 48.0801 19.124 47.7521 18.78C47.4321 18.428 46.9961 18.252 46.4441 18.252C45.8761 18.252 45.4241 18.436 45.0881 18.804C44.7521 19.164 44.5841 19.688 44.5841 20.376V24H43.5041V20.28C43.5041 19.624 43.3401 19.124 43.0121 18.78C42.6921 18.428 42.2561 18.252 41.7041 18.252C41.1361 18.252 40.6841 18.436 40.3481 18.804C40.0121 19.164 39.8441 19.688 39.8441 20.376V24H38.7521V17.424H39.8441V18.372C40.0601 18.028 40.3481 17.764 40.7081 17.58C41.0761 17.396 41.4801 17.304 41.9201 17.304C42.4721 17.304 42.9601 17.428 43.3841 17.676C43.8081 17.924 44.1241 18.288 44.3321 18.768C44.5161 18.304 44.8201 17.944 45.2441 17.688C45.6681 17.432 46.1401 17.304 46.6601 17.304ZM51.6794 16.356C51.4714 16.356 51.2954 16.284 51.1514 16.14C51.0074 15.996 50.9354 15.82 50.9354 15.612C50.9354 15.404 51.0074 15.228 51.1514 15.084C51.2954 14.94 51.4714 14.868 51.6794 14.868C51.8794 14.868 52.0474 14.94 52.1834 15.084C52.3274 15.228 52.3994 15.404 52.3994 15.612C52.3994 15.82 52.3274 15.996 52.1834 16.14C52.0474 16.284 51.8794 16.356 51.6794 16.356ZM52.2074 17.424V24H51.1154V17.424H52.2074ZM55.4005 18.324V22.2C55.4005 22.52 55.4685 22.748 55.6045 22.884C55.7405 23.012 55.9765 23.076 56.3125 23.076H57.1165V24H56.1325C55.5245 24 55.0685 23.86 54.7645 23.58C54.4605 23.3 54.3085 22.84 54.3085 22.2V18.324H53.4565V17.424H54.3085V15.768H55.4005V17.424H57.1165V18.324H55.4005Z" fill="white"/>
                        </g>
                        <defs>
                        <filter id="filter0_d_221_366" x="0" y="0" width="88" height="48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_221_366"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_221_366" result="shape"/>
                        </filter>
                        </defs>
                    </svg>
                </a>
            @endif
        </div>
    </div>

    <div class="flex justify-center items-center my-[30px]">
        @if (@$questions[$_GET['view']]->image)
            <img src="{{ asset('uploads/'. @$questions[$_GET['view']]->image) }}" alt="">
        @else
            <div class="relative mt-[135px]">
                <div class="absolute top-[-120px] left-[125px] animate-up-down-v2">
                    <img src="{{ asset('assets/bubble-lg.png') }}" width="138" height="100" alt="">
                </div>
                <div class="absolute top-[-30px] left-[100px] animate-up-down">
                    <img src="{{ asset('assets/bubble-md.png') }}" width="30" height="30" alt="">
                </div>
                <div class="absolute left-1/2 animate-up-down">
                    <img src="{{ asset('assets/bubble-sm.png') }}" width="20" height="20" alt="">
                </div>
                <img src="{{ asset('assets/cat.png') }}" width="280" height="174" alt="">
            </div>
        @endif
    </div>
        {{-- <img src="https://placehold.co/300x300" alt=""> --}}
        {{-- <img src="{{ asset('assets/giphy.webp') }}" alt=""> --}}

    <div class="font-medium text-[#787878] {{ @$questions[$_GET['view']]->image !== null ? 'mb-5' : '' }}">Question {{ @$_GET['view'] ? @$_GET['view']+1 : '1' }} of {{ @$questions->count() }}</div>

    @if (@$questions[$_GET['view']]->image === null)
        <div class="w-full min-h-[100px]">
            <p class="font-semibold text-[#787878] text-[20px]">{{ @$questions[$_GET['view']]->question_value }}</p>
        </div>
    @endif

    {{-- <div class="space-y-4 mb-[80px]">
        <div id="radio-group" class="flex flex-col gap-4">
            @foreach ($questions[$_GET['view']]->options as $index => $option)
                <label class="block relative cursor-pointer">
                    <!-- Input radio -->
                    <input
                        type="radio"
                        name="answer"
                        value="{{ $option->option_key }}"
                        data-question-id="{{ $questions[$_GET['view']]->id }}"
                        {{ \App\Helpers\AppHelper::get_user_answer($questions[$_GET['view']]->id) == $option->option_key ? 'checked' : '' }}
                        class="peer hidden answer-button"
                    />
                    <!-- Tampilan elemen radio -->
                    <div class="py-4 text-center w-full h-[60px] bg-[#5F97F8] text-white rounded-[20px] transform transition-transform duration-200 ease-in-out peer-checked:bg-[#09B7FC] peer-checked:text-white hover:scale-105 active:scale-95">
                        {{ $option->option_value }}
                        <!-- SVG yang tampil saat radio button dipilih -->
                        <div class="absolute right-8 top-1/2 transform -translate-y-1/2 peer-checked:block hidden">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Isi SVG di sini -->
                                <path
                                    d="M5.33348 23.32C5.33348 23.05 5.30348 22.93 5.18348 22.93L4.49348 23.26C4.49348 23.11 4.40348 23.02 4.25348 22.96L4.01348 22.93C3.80348 22.93 3.71348 22.96 3.41348 23.14C3.32348 22.96 3.20348 22.75 3.11348 22.57C2.33348 21.07 1.52348 18.82 1.16348 17.83C0.983477 17.32 0.803477 16.27 0.593477 14.68C0.833477 14.83 1.01348 14.89 1.10348 14.89C1.22348 14.89 1.37348 14.68 1.49348 14.26C1.55348 14.35 1.67348 14.38 1.82348 14.38C1.91348 14.38 2.03348 14.35 2.09348 14.26L2.57348 13.54L3.11348 13.72H3.14348C3.20348 13.72 3.29348 13.63 3.44348 13.54C3.59348 13.45 3.71348 13.39 3.80348 13.39L3.89348 13.42C4.37348 13.66 4.70348 14.08 4.85348 14.74C5.21348 16.27 5.54348 17.02 5.93348 17.02C6.26348 17.02 6.71348 16.63 7.19348 15.88C7.67348 15.13 8.15348 14.11 8.69348 12.88C8.72348 13.12 8.75348 13.24 8.81348 13.24C8.99348 13.24 9.44348 12.19 10.5535 10.42C12.2035 7.75 16.2835 2.62 17.3335 1.9C18.1135 1.36 18.7135 0.849999 19.1335 0.399999C19.0735 0.699999 19.0135 0.91 19.0135 0.999999C19.0135 1.09 19.0735 1.12 19.1335 1.12L19.9735 0.699999V0.819999C19.9735 0.969999 20.0035 1.06 20.0935 1.06C20.2135 1.06 20.6935 0.579999 20.7535 0.399999L20.6935 0.819999L21.7135 0.22L21.4735 0.76C21.7735 0.549999 22.0135 0.429999 22.1635 0.429999C22.3135 0.429999 22.4035 0.669999 22.4035 0.819999C22.4035 1.06 22.1935 1.39 21.8635 1.81C21.5035 2.29 20.6035 3.22 17.9035 6.31C16.7335 7.63 11.5435 14.68 10.5535 16.36L8.69348 19.51C7.88348 20.86 7.37348 21.73 7.10348 22.06C6.83348 22.39 6.50348 22.72 6.11348 23.02L5.84348 22.87L5.60348 23.02L5.33348 23.32Z"
                                    fill="white"
                                />
                            </svg>
                        </div>
                    </div>
                </label>
            @endforeach
        </div>
    </div> --}}

    <div class="space-y-4 mb-[80px]">
        <div id="radio-group" class="flex flex-col gap-4">
            @foreach ($questions[$_GET['view']]->options as $index => $option)
                <label class="block relative cursor-pointer">
                    <!-- Input radio -->
                    <input
                        type="radio"
                        name="answer"
                        value="{{ $option->option_key }}"
                        data-question-id="{{ $questions[$_GET['view']]->id }}"
                        {{ \App\Helpers\AppHelper::get_user_answer($questions[$_GET['view']]->id) == $option->option_key ? 'checked' : '' }}
                        class="answer-button hidden"
                    />
                    <!-- Tampilan elemen radio -->
                    <div class="py-4 text-center w-full h-[60px] bg-[#5F97F8] text-white rounded-[20px] transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                        {{ $option->option_value }}
                        <!-- SVG yang tampil saat radio button dipilih -->
                        <div class="absolute right-8 top-1/2 transform -translate-y-1/2 svg-container" style="display: none;">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Isi SVG di sini -->
                                <path
                                    d="M5.33348 23.32C5.33348 23.05 5.30348 22.93 5.18348 22.93L4.49348 23.26C4.49348 23.11 4.40348 23.02 4.25348 22.96L4.01348 22.93C3.80348 22.93 3.71348 22.96 3.41348 23.14C3.32348 22.96 3.20348 22.75 3.11348 22.57C2.33348 21.07 1.52348 18.82 1.16348 17.83C0.983477 17.32 0.803477 16.27 0.593477 14.68C0.833477 14.83 1.01348 14.89 1.10348 14.89C1.22348 14.89 1.37348 14.68 1.49348 14.26C1.55348 14.35 1.67348 14.38 1.82348 14.38C1.91348 14.38 2.03348 14.35 2.09348 14.26L2.57348 13.54L3.11348 13.72H3.14348C3.20348 13.72 3.29348 13.63 3.44348 13.54C3.59348 13.45 3.71348 13.39 3.80348 13.39L3.89348 13.42C4.37348 13.66 4.70348 14.08 4.85348 14.74C5.21348 16.27 5.54348 17.02 5.93348 17.02C6.26348 17.02 6.71348 16.63 7.19348 15.88C7.67348 15.13 8.15348 14.11 8.69348 12.88C8.72348 13.12 8.75348 13.24 8.81348 13.24C8.99348 13.24 9.44348 12.19 10.5535 10.42C12.2035 7.75 16.2835 2.62 17.3335 1.9C18.1135 1.36 18.7135 0.849999 19.1335 0.399999C19.0735 0.699999 19.0135 0.91 19.0135 0.999999C19.0135 1.09 19.0735 1.12 19.1335 1.12L19.9735 0.699999V0.819999C19.9735 0.969999 20.0035 1.06 20.0935 1.06C20.2135 1.06 20.6935 0.579999 20.7535 0.399999L20.6935 0.819999L21.7135 0.22L21.4735 0.76C21.7735 0.549999 22.0135 0.429999 22.1635 0.429999C22.3135 0.429999 22.4035 0.669999 22.4035 0.819999C22.4035 1.06 22.1935 1.39 21.8635 1.81C21.5035 2.29 20.6035 3.22 17.9035 6.31C16.7335 7.63 11.5435 14.68 10.5535 16.36L8.69348 19.51C7.88348 20.86 7.37348 21.73 7.10348 22.06C6.83348 22.39 6.50348 22.72 6.11348 23.02L5.84348 22.87L5.60348 23.02L5.33348 23.32Z"
                                    fill="white"
                                />
                            </svg>
                        </div>
                    </div>
                </label>
            @endforeach
        </div>
    </div>



        {{-- <div class="flex items-center mb-4">
            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Green</label>
        </div>
        <div class="flex items-center">
            <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Red</label>
        </div>
        <div class="flex items-center">
            <input checked id="default-radio-3" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-radio-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yellow</label>
        </div>
        <a href="" class="py-4 block text-center w-full h-[60px] bg-[#5F97F8] rounded-[20px] text-white px-4 rounded-2lg">
            Green
        </a>
        <a href="" class="relative py-4 block text-center w-full h-[60px] bg-[#09B7FC] rounded-[20px] text-white px-4 rounded-2lg">
            Red
            <div class="absolute right-8 bottom-5">
                <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.33348 23.32C5.33348 23.05 5.30348 22.93 5.18348 22.93L4.49348 23.26C4.49348 23.11 4.40348 23.02 4.25348 22.96L4.01348 22.93C3.80348 22.93 3.71348 22.96 3.41348 23.14C3.32348 22.96 3.20348 22.75 3.11348 22.57C2.33348 21.07 1.52348 18.82 1.16348 17.83C0.983477 17.32 0.803477 16.27 0.593477 14.68C0.833477 14.83 1.01348 14.89 1.10348 14.89C1.22348 14.89 1.37348 14.68 1.49348 14.26C1.55348 14.35 1.67348 14.38 1.82348 14.38C1.91348 14.38 2.03348 14.35 2.09348 14.26L2.57348 13.54L3.11348 13.72H3.14348C3.20348 13.72 3.29348 13.63 3.44348 13.54C3.59348 13.45 3.71348 13.39 3.80348 13.39L3.89348 13.42C4.37348 13.66 4.70348 14.08 4.85348 14.74C5.21348 16.27 5.54348 17.02 5.93348 17.02C6.26348 17.02 6.71348 16.63 7.19348 15.88C7.67348 15.13 8.15348 14.11 8.69348 12.88C8.72348 13.12 8.75348 13.24 8.81348 13.24C8.99348 13.24 9.44348 12.19 10.5535 10.42C12.2035 7.75 16.2835 2.62 17.3335 1.9C18.1135 1.36 18.7135 0.849999 19.1335 0.399999C19.0735 0.699999 19.0135 0.91 19.0135 0.999999C19.0135 1.09 19.0735 1.12 19.1335 1.12L19.9735 0.699999V0.819999C19.9735 0.969999 20.0035 1.06 20.0935 1.06C20.2135 1.06 20.6935 0.579999 20.7535 0.399999L20.6935 0.819999L21.7135 0.22L21.4735 0.76C21.7735 0.549999 22.0135 0.429999 22.1635 0.429999C22.3135 0.429999 22.4035 0.669999 22.4035 0.819999C22.4035 1.06 22.1935 1.39 21.8635 1.81C21.5035 2.29 20.6035 3.22 17.9035 6.31C16.7335 7.63 11.5435 14.68 10.5535 16.36L8.69348 19.51C7.88348 20.86 7.37348 21.73 7.10348 22.06C6.83348 22.39 6.50348 22.72 6.11348 23.02L5.84348 22.87L5.60348 23.02L5.33348 23.32Z" fill="white"/>
                </svg>
            </div>
        </a>
        <a href="" class="py-4 block text-center w-full h-[60px] bg-[#5F97F8] rounded-[20px] text-white px-4 rounded-2lg">
            Yellow
        </a> --}}
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function () {
    let timer = 0; // Timer awal
    let interval;

    // Fungsi untuk memulai timer
    function startTimer() {
        interval = setInterval(function () {
            timer++;
            console.log("Timer: " + timer + " detik");

            // Tampilkan timer di elemen yang memiliki ID #timer-display
            $('#timer-display').text(timer + " detik");
        }, 1000);
    }

    startTimer(); // Mulai timer saat halaman dimuat

    // Event listener untuk klik pada setiap radio button
    $('.answer-button').on('change', function () {
        const questionId = $(this).data('question-id');
        const answer = $(this).val();

        // Logika skor berdasarkan timer
        let score;
        if (timer < 30) {
            score = 10;
        } else if (timer >= 30 && timer < 60) {
            score = 8;
        } else {
            score = 5;
        }

        // Kirim data ke backend menggunakan jQuery AJAX
        $.ajax({
            url: "{{ route('quiz.submit') }}", // URL untuk mengirim data
            method: "POST", // HTTP method
            data: {
                _token: "{{ csrf_token() }}", // CSRF token Laravel
                question_id: questionId, // ID pertanyaan
                answer: answer, // Jawaban yang dipilih
                score: score // Skor berdasarkan timer
            },
            success: function (response) {
                console.log("Jawaban berhasil dikirim:", response);

                // Reset timer
                clearInterval(interval);
                timer = 0;
                startTimer(); // Mulai timer kembali
            },
            error: function (xhr, status, error) {
                console.error("Terjadi kesalahan saat mengirim jawaban:", error);
            }
        });

        // Menampilkan atau menyembunyikan SVG berdasarkan apakah radio button dipilih
        $(this).closest('label').find('.svg-container').show(); // Menampilkan SVG yang terkait
        $(this).closest('label').siblings().find('.svg-container').hide(); // Menyembunyikan SVG di label lainnya

        // Mengubah background elemen div yang terkait dengan radio button yang dipilih
        $(this).closest('label').find('div').css('background-color', '#09B7FC'); // Mengubah background menjadi #09B7FC

        // Mengembalikan background elemen radio button lainnya ke warna default
        $(this).closest('label').siblings().find('div').css('background-color', '#5F97F8'); // Mengatur background ke warna default
    });
});

</script>
@endsection
