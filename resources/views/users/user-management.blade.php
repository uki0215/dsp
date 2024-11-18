@if (auth()->user()->is_admin == 1)
    @extends('layouts.user_type.auth')

    @section('content')
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
                                    <table class="table align-items-center mb-0 border-1">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    ID
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Нэр
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    И-мэйл
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Албаны нэр
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Ажлын байршил
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Албан тушаал
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Ролл
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Өдөр
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Шинчлэгдсэн
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $usr)
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">{{ $usr->id }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">{{ $usr->name }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">{{ $usr->email }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td class="align-middle text-center text-sm">
                                                                                                                                                <span class="badge badge-sm bg-gradient-success">Online</span>
                                                                                                                                            </td> -->
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">{{ $usr->orgName }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $usr->workplaceName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $usr->positionName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $usr->is_admin }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $usr->created_at }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $usr->updated_at }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="/edit-user/{{ $usr->id }}" class="mx-1"
                                                            data-bs-toggle="tooltip" data-bs-original-title="">
                                                            <i class="fas fa-user-edit text-secondary"></i>
                                                        </a>
                                                        <a href="/delete-user/{{ $usr->id }}" class="mx-1"
                                                            data-bs-toggle="tooltip" data-bs-original-title="">
                                                            <i class="cursor-pointer fas fa-trash"></i>
                                                        </a>
                                                    </td>
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
