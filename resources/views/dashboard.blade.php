@extends('layouts.app-admin')

@section('content')
{{-- <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Selamat Datang di Dashboard Admin</h4>
    </div>
</div> --}}

{{-- <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">New Customers</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px"
                                        data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="eye"
                                            class="icon-sm mr-2"></i> <span
                                            class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="edit-2"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="trash"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="printer"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="download"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">3,897</h3>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-success">
                                        <span>+3.3%</span>
                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">New Orders</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px"
                                        data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="eye"
                                            class="icon-sm mr-2"></i> <span
                                            class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="edit-2"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="trash"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="printer"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="download"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">35,084</h3>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-danger">
                                        <span>-2.8%</span>
                                        <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Growth</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px"
                                        data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="eye"
                                            class="icon-sm mr-2"></i> <span
                                            class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="edit-2"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="trash"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="printer"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="#"><i data-feather="download"
                                            class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">89.87%</h3>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-success">
                                        <span>+2.8%</span>
                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card" style="min-height: 100vh">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title">List User</h6>
                    <div class="dropdown mb-2">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                    data-feather="eye" class="icon-sm mr-2"></i> <span
                                    class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                    data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                    class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                    data-feather="trash" class="icon-sm mr-2"></i> <span
                                    class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                    data-feather="printer" class="icon-sm mr-2"></i> <span
                                    class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                    data-feather="download" class="icon-sm mr-2"></i> <span
                                    class="">Download</span></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    @foreach ($users as $user)
                        <a href="#" class="d-flex align-items-center {{ @$loop->first ? 'pb-3' : 'py-3' }}">
                            <div class="mr-3">
                                <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">{{ @$user->name }}</h6>
                                </div>
                                <p class="text-muted tx-13">{{ @$user->email }}</p>
                            </div>
                        </a>
                    @endforeach
                    {{-- <a href="#" class="d-flex align-items-center py-3">
                        <div class="mr-3">
                            <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">Noviana Sami Ratri</h6>
                            </div>
                            <p class="text-muted tx-13">novianasmrt@gmail.com</p>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-3">
                        <div class="mr-3">
                            <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">Anando Muhammad Rahul Haz</h6>
                            </div>
                            <p class="text-muted tx-13">undo.rahul@gmail.com</p>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-3">
                        <div class="mr-3">
                            <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">Supri</h6>
                            </div>
                            <p class="text-muted tx-13">suprikurniawan@gmail.com</p>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-3">
                        <div class="mr-3">
                            <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">Sinta Lestari</h6>
                            </div>
                            <p class="text-muted tx-13">sinta567@gmail.com</p>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-3">
                        <div class="mr-3">
                            <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">Kepin Ramadhan</h6>
                            </div>
                            <p class="text-muted tx-13">kepin.ramadhan69@gmail.com</p>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-3">
                        <div class="mr-3">
                            <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">Nina Kusumawati</h6>
                            </div>
                            <p class="text-muted tx-13">nina_kus@gmail.com</p>
                        </div>
                    </a>
                    <a href="#" class="d-flex align-items-center py-3">
                        <div class="mr-3">
                            <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-body mb-2">Erlan Adi</h6>
                            </div>
                            <p class="text-muted tx-13">serlan_adi@gmail.com</p>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-xl-8 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-2">List Soal</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Soal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                <tr>
                                    <td>{{ @$loop->iteration }}</td>
                                    <td style="white-space: normal;">
                                        <div class="" style="max-width: 450px;">
                                            {{ @$question->question_value }}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr>
                                <td>1</td>
                                <td>I have __________ my homework already.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Choose the correct synonym for the word "happy": A. Sad</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Choose the correct meaning of the word "generous":</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td style="white-space: normal;">
                                    <div class="" style="max-width: 450px;">
                                        Choose the correct word to complete the sentence: She is always so __________; she helps everyone without asking for
                                        anything in return.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom">5</td>
                                <td class="border-bottom">Choose the correct antonym for the word "difficult":</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
