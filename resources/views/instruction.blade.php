@extends('layouts.app')

@section('css')
    <style>
        .container-color {
            background-color: #DEE7FC;
        }
    </style>
@endsection

@section('content')
<div class="py-[50px] px-[50px]">
    <div id="steps-container">
        <!-- Step 1 -->
        <div id="step-1" class="flex flex-col gap-5">
            <div class="container">
                <div class="font-medium text-[#787878]">Step 1</div>
                <div class="font-bold text-[#787878] text-[25px]">Mengerjakan Kuis</div>
            </div>
            <div class="flex justify-center">
                <img src="assets/instruction-1.png" alt="">
            </div>
            <div class="container min-h-[70px]">
                <p class="text-[#5D5D5D] text-justify">Pada halaman ini kalian bisa mulai membaca soal yang tersedia dan bisa memilih jawaban yang benar</p>
            </div>
            <div class="container">
                <button type="button" class="next-btn w-full h-[60px] bg-[#3C84FF] rounded-[20px] text-white px-4 py-2.5 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                    Next
                </button>
            </div>
        </div>

        <!-- Step 2 -->
        <div id="step-2" class="flex-col gap-5 hidden">
            <div class="container">
                <div class="font-medium text-[#787878]">Step 2</div>
                <div class="font-bold text-[#787878] text-[25px]">Navigasi</div>
            </div>
            <div class="flex justify-center">
                <img src="assets/instruction-2.png" alt="">
            </div>
            <div class="container min-h-[70px]">
                <ol class="text-[#5D5D5D] list-decimal">
                    <li>Tombol Prev soal.</li>
                    <li>Nomor soal yang sedang dikerjakan.</li>
                    <li>Tombol Next soal.</li>
                </ol>
            </div>
            <div class="container">
                <button type="button" class="next-btn w-full h-[60px] bg-[#3C84FF] rounded-[20px] text-white px-4 py-2.5 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                    Next
                </button>
            </div>
        </div>

        <!-- Step 3 -->
        <div id="step-3" class="flex-col gap-5 hidden">
            <div class="container">
                <div class="font-medium text-[#787878]">Step 3</div>
                <div class="font-bold text-[#787878] text-[25px]">Submit Jawaban</div>
            </div>
            <div class="flex justify-center">
                <img src="assets/instruction-3.png" alt="">
            </div>
            <div class="container min-h-[70px]">
                <p class="text-[#5D5D5D] text-justify">Lakukan submit data apabila sudah selesai mengerjakan kuis.</p>
            </div>
            <div class="container">
                <button type="button" class="next-btn w-full h-[60px] bg-[#3C84FF] rounded-[20px] text-white px-4 py-2.5 rounded-2lg transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                    Next
                </button>
            </div>
        </div>

        <!-- Step 4 -->
        <div id="step-4" class="flex-col gap-5 hidden">
            <div class="container">
                <div class="font-medium text-[#787878]">Step 4</div>
                <div class="font-bold text-[#787878] text-[25px]">Lihat Skor</div>
            </div>
            <div class="flex justify-center">
                <img src="assets/instruction-4.png" alt="">
            </div>
            <div class="container min-h-[70px]">
                <p class="text-[#5D5D5D] text-justify">Setelah melakukan submit skor akan langsung ditampilkan.</p>
            </div>
            <div class="container">
                <a href="{{ route('quiz.start', ['view' => 0]) }}" class="block w-full h-[60px] bg-[#3C84FF] rounded-[20px] text-white px-4 py-4 rounded-2lg text-center transform transition-transform duration-200 ease-in-out hover:scale-105 active:scale-95">
                    Mulai Kuis
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
          document.addEventListener('DOMContentLoaded', () => {
            const steps = document.querySelectorAll('[id^="step-"]');
            const nextButtons = document.querySelectorAll('.next-btn');
            nextButtons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    steps[index].classList.add('hidden');

                    if (steps[index + 1]) {
                        steps[index + 1].classList.remove('hidden');
                        steps[index + 1].classList.add('flex');
                    }
                });
            });
        });
    </script>
@endsection
