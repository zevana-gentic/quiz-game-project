@extends('layouts.app-admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
                <h6 class="card-title">Tambahkan Kuis</h6>
            </div>
            <form action="{{ route('question.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="question_value">Pertanyaan</label>
                    <textarea class="form-control" name="question_value" cols="30" rows="3">{{ old('question_value') }}</textarea>
                    @error('question_value')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Tambahkan Gambar</label>
                    @error('image')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <input name="image" type="file" class="form-control" id="myDropify">
                    {{-- <small class="text-primary">(Format: jpg, jpeg atau png. Ukuran gambar maks. 2MB. Gambar menggunakan layout landscape)</small> --}}
                </div>
                <div class="mb-3">
                    <label for="">Pilihan Jawaban</label>
                    <div class="row">
                        <label for="option_value" class="col-sm-2 col-form-label">Pilihan A</label>
                        <div class="col-sm-10">
                            <input type="text" name="option_value[0]" class="form-control" id="" value="{{ old('option_value[0]') }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="option_value" class="col-sm-2 col-form-label">Pilihan B</label>
                        <div class="col-sm-10">
                            <input type="text" name="option_value[1]" class="form-control" id="" value="{{ old('option_value[1]') }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="option_value" class="col-sm-2 col-form-label">Pilihan C</label>
                        <div class="col-sm-10">
                            <input type="text" name="option_value[2]" class="form-control" id="" value="{{ old('option_value[2]') }}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="answer_key">Kunci Jawaban</label>
                    <select name="answer_key" class="form-select">
                        <option selected disabled>--Pilih Kunci--</option>
                        <option {{ old('answer_key') == 'A' ? 'selected' : '' }} value="A">A</option>
                        <option {{ old('answer_key') == 'B' ? 'selected' : '' }} value="B">B</option>
                        <option {{ old('answer_key') == 'C' ? 'selected' : '' }} value="C">C</option>
                    </select>
                    @error('answer_key')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    {{-- <a href="" class="btn btn-secondary mr-2">Kembali</a> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="alert-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-4">
            <form action="" class="form-question-delete" method="POST">
                @csrf
                <div class="modal-body p-5">
                    <div class="text-center" style="margin-bottom: 20px;">
                        <svg width="150" height="150" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_221_801)">
                            <path d="M75 150C55.1088 150 36.0322 142.098 21.967 128.033C7.90176 113.968 0 94.8912 0 75C0 55.1088 7.90176 36.0322 21.967 21.967C36.0322 7.90176 55.1088 0 75 0C94.8912 0 113.968 7.90176 128.033 21.967C142.098 36.0322 150 55.1088 150 75C150 94.8912 142.098 113.968 128.033 128.033C113.968 142.098 94.8912 150 75 150ZM60 112.5L127.5 48.75L116.25 37.5L60 90L33.75 63.75L22.5 75L60 112.5Z" fill="#3C84FF"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_221_801">
                            <rect width="150" height="150" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                    </div>
                    <div class="text-center" style="font-size: 24px; font-weight: 700; color: #535353;">
                        {{ Session::get('success') }}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="alert-error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-4">
            <form action="" class="form-question-delete" method="POST">
                @csrf
                <div class="modal-body p-5">
                    <div class="text-center">
                        <svg width="209" height="209" viewBox="0 0 209 209" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M101.125 26.125C142.546 26.125 176.125 59.7035 176.125 101.125C176.125 142.546 142.546 176.125 101.125 176.125C59.7035 176.125 26.125 142.546 26.125 101.125C26.125 59.7035 59.7035 26.125 101.125 26.125ZM132.773 57.6969L101.13 89.3398L69.5457 57.7559L57.7605 69.541L89.3445 101.125L57.7605 132.709L69.5457 144.494L101.13 112.91L132.773 144.553L144.558 132.768L112.915 101.125L144.558 69.482L132.773 57.6969Z" fill="#E45D5D"/>
                        </svg>
                    </div>
                    <div class="text-center" style="font-size: 24px; font-weight: 700; color: #535353;">
                        {{ Session::get('error') }}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
@if (Session::has('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('#alert-success').modal('show');
        });
    </script>
@elseif (Session::has('error'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('#alert-error').modal('show');
        });
    </script>
@endif
@endsection
