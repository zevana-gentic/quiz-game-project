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
@endsection

@section('script')
    <script>
        $('.btn-question-delete').on('click', function(){
            const question_id = $(this).data('question-id');
            $('.form-question-delete').attr('action', '{{ url('admin') }}/question-delete/' + question_id);
        });
    </script>
@endsection
