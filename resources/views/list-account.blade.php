@extends('layouts.app-admin')

@section('content')
<div class="row">
    <div class="col-lg-8 col-xl-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4">
                    <h6 class="card-title mb-2">List User</h6>
                    <div class="d-flex">
                        <form action="{{ url()->current() }}" class="form-inline" method="GET">
                            <div class="input-group" style="width:395px">
                                <input name="q" type="text" class="pl-5 form-control" placeholder="Cari data user" value="{{ @$_GET['q'] != '' ? $_GET['q'] : '' }}">
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
                                <th class="pt-0" style="width: 420px">Email</th>
                                <th class="pt-0">Riwayat Pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($accounts as $account)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-justify" style="white-space: normal;">
                                        <div style="max-width: 650px;">
                                            {{ @$account->name }}</td>
                                        </div>
                                    <td>{{ @$account->email }}</td>
                                    <td>{{ @$account->user_scores_count }} {{ @$account->user_scores_count == 0 ? '' : 'x' }}</td>
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
