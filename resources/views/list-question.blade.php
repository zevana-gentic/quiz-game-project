@extends('layouts.app-admin')

@section('content')
<div class="row">
    <div class="col-lg-8 col-xl-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4">
                    <h6 class="card-title mb-2">List Soal</h6>
                    <div class="d-flex" style="gap: 1rem;">
                        <form action="{{ url()->current() }}" class="form-inline" method="GET">
                            <div class="input-group" style="width:300px">
                                <input name="q" type="text" class="pl-5 form-control" placeholder="Cari data kuis" value="{{ @$_GET['q'] != '' ? $_GET['q'] : '' }}">
                                <i class="link-icon" data-feather="search" style="color: #c9c8c8; width: 14px; position: absolute; left: 20px; top: 3px;"></i>
                            </div>
                        </form>
                        <a href="{{ route('question.add') }}" class="btn btn-secondary btn-icon-text d-flex justify-content-center align-items-center">
                            <span style="font-size: 20px;">+</span>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th style="width: 650px;">Soal</th>
                                <th>Jawaban</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($questions as $question)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-justify" style="white-space: normal;">
                                        <div style="max-width: 650px;">
                                            {{ @$question->question_value }}</td>
                                        </div>
                                    <td>{{ @$question->answer_key }}</td>
                                    <td>
                                        <a href="{{ route('question.edit', ['question_id' => $question->id]) }}" class="btn btn-icon btn-secondary"><i data-feather="edit-3"></i></a>
                                        <a href="" data-toggle="modal" data-target="#delete-question" class="btn-question-delete btn btn-icon btn-secondary" data-question-id="{{ @$question->id }}"><i data-feather="trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="4">Data yang anda cari tidak valid.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="delete-question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-4">
            <form action="" class="form-question-delete" method="POST">
                @csrf
                <div class="modal-body p-5">
                    <div class="text-center" style="font-size: 24px; font-weight: 700; color: #535353;">
                        Yakin mau menghapus kuis?
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5" style="gap: 30px">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
    <script>
        $('.btn-question-delete').on('click', function(){
            const question_id = $(this).data('question-id');
            $('.form-question-delete').attr('action', '{{ url('admin') }}/question-delete/' + question_id);
        });
    </script>
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
