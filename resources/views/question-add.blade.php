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
                        <option  disabled>--Pilih Kunci--</option>
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
