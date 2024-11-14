@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="d-flex justify-content-between mb-2 card-header pb-0">
                            <h6>Засварын акт</h6>
                            <div>
                                <a href="" class="btn bg-gradient-primary btn-sm mb-0"
                                    type="button">+ Акт</a>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0 border-1">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Эзэмшигч нэр</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Ажлын байршил</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Албан тушаал</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ҮХ Дугаар</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                УБТЗ дугаар</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Сервис таг</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Загвар</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Төрөл</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Үнэ</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Б/хугацаа</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Акт үйлдсэн</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Статус</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                            alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Б.Уламбаяр</h6>
                                                        <p class="text-xs text-secondary mb-0">admin@admin.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">Удирдах газар</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">НИи ДСП</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">14502369</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">JA548799</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">JG8H59L</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">Dell</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">Optiplex 3090</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">1.250.000</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">12 сар</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">2025-12-31</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center btn-outline-danger">
                                                        <p class="text-xs font-weight-bold mb-0">Дутуу</p>
                                            </td> 
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="">
                                                    <i class="cursor-pointer fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
