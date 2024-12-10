@extends('layouts.app-admin')

@section('content')
<div class="row">
    <div class="col-lg-8 col-xl-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4">
                    <h6 class="card-title mb-2">List Skor User</h6>
                    <div class="d-flex" style="gap: 1rem;">
                        <form action="{{ url()->current() }}" class="form-inline" method="GET">
                            <div class="input-group" style="width:300px">
                                <input name="q" type="text" class="pl-5 form-control" placeholder="Cari data skor user" value="{{ @$_GET['q'] != '' ? $_GET['q'] : '' }}">
                                <i class="link-icon" data-feather="search" style="color: #c9c8c8; width: 14px; position: absolute; left: 20px; top: 3px;"></i>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="pt-0" style="width: 60px">No</th>
                                <th class="pt-0" style="width: 300px">Nama User</th>
                                <th class="pt-0" style="width: 240px">Tanggal Pengerjaan</th>
                                <th class="pt-0">Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($user_scores as $user_score)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-justify" style="white-space: normal;">
                                        <div style="max-width: 650px;">
                                            {{ @$user_score->user->username }}</td>
                                        </div>
                                    <td>{{ \Carbon\Carbon::parse(@$user_score->created_at)->translatedFormat("j F Y") }}</td>
                                    <td>{{ @$user_score->total_score }}</td>
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
