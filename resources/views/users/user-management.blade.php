@if (auth()->user()->is_admin == 1)
    @extends('layouts.user_type.auth')

    @section('content')
        <div>
            {{-- <span class="text-white">
        <div class="alert alert-secondary" role="alert">
           
                <strong>Add, Edit, Delete features are not functional!</strong> This is a
                <strong>PRO</strong> feature! Click <strong>
                    <a href="https://www.creative-tim.com/live/soft-ui-dashboard-pro-laravel" target="_blank"
                        class="text-white">here</a></strong>
                to see the PRO product!
            </span> 
    </div> --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                    <span class="alert-text text-white">
                        {{ session('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </button>
                </div>
            @endif
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">
                                    <div class="d-flex justify-content-between mb-2 pb-0">
                                        <h6>Бүртгэгдсэн хэрэглэгчид:
                                            <span class="text-danger font-weight-bolder">{{ $count }}</span>
                                        </h6>
                                        <a href="{{ route('create-user') }}" class="btn bg-gradient-primary btn-sm mb-0"
                                            type="button">Нэмэх</a>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ID
                                                    </th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Зураг
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Нэр
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        И-мэйл
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Ролл
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Өдөр
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Шинчлэгдсэн
                                                    </th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $usr)
                                                    <tr>
                                                        <td class="ps-4">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $usr->id }}</p>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <img src="../assets/img/team-2.jpg"
                                                                    class="avatar avatar-sm me-3">
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $usr->name }}</p>
                                                        </td>
                                                        <td class="text-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $usr->email }}</p>
                                                        </td>
                                                        <td class="text-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $usr->is_admin }}
                                                            </p>
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $usr->created_at }}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $usr->updated_at }}</span>
                                                        </td>

                                                        <td class="text-center">
                                                            <a href="{{ route('edit-user', $usr->id) }}" class="mx-1"
                                                                data-bs-toggle="tooltip" data-bs-original-title="">
                                                                <i class="fas fa-user-edit text-secondary"></i>
                                                            </a>
                                                            <span>

                                                                <a href="{{ route('destroy-user', $usr->id) }}"
                                                                    class="mx-1" data-bs-toggle="tooltip"
                                                                    data-bs-original-title="">
                                                                    <i class="cursor-pointer fas fa-trash"></i>
                                                                </a>

                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
@endif
