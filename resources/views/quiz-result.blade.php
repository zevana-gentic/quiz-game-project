@extends('layouts.app')

@section('content')
<div class="py-[130px] px-[50px]">
    <div class="mb-[50px]">
        <div class="text-center text-[#5090FF] text-[30px] animate-bounce"><b>Congratulations!</b></div>
    </div>

    <div class="flex justify-center items-center mb-[50px]">
        <div class="relative h-[220px] w-[220px] bg-[#89B2FB] rounded-[20px]">
            <div class="mt-8">
                <div class="absolute left-0 right-0 text-center font-source-potta-one text-[#FFFFFF] text-[20px] drop-shadow-lg mb-0 pb-0" style="margin: 0 auto;">Your Score:</div>
                <div class="absolute left-0 right-0 text-center font-source-potta-one text-[#FFFFFF] text-[120px] drop-shadow-lg mt-0 pt-0 animate-scaleUp" style="margin: 0 auto;">{{ @$user_score->total_score ? $user_score->total_score : 0 }}</div>
            </div>
        </div>
    </div>

    <div class="space-y-4">
        <a href="{{ route('home') }}" class="py-4 block text-center w-full h-[60px] bg-[#5F97F8] rounded-[20px] text-white px-4 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
            Home
        </a>
        <a href="{{ route('quiz.start', ['view' => 0]) }}" class="py-4 block text-center w-full h-[60px] bg-[#09B7FC] rounded-[20px] text-white px-4 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
            Play Again
        </a>
    </div>
</div>
@endsection
