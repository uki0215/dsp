@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class=" d-flex flex-row justify-content-between mb-2 card-header pb-0">
                            <h6>Принтер бүртгэл</h6>
                            <a href="{{ route('printerReg') }}" class="btn bg-gradient-primary btn-sm mb-0"
                                type="button">Нэмэх
                            </a>
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
                                                Авсан огноо</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Шинэчлэгдсэн огноо</th>
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
                                            <!-- <td class="align-middle text-center text-sm">
                                                                    <span class="badge badge-sm bg-gradient-success">Online</span>
                                                                </td> -->
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
                                                        <p class="text-xs font-weight-bold mb-0">Epson 1390</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="px-2 py-1">
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">852.000</p>
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
                                                    <div class="flex-column justify-content-center">
                                                        <p class="text-xs font-weight-bold mb-0">2025-12-31</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="" class="mx-1" data-bs-toggle="tooltip"
                                                    data-bs-original-title="">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="" class="mx-1" data-bs-toggle="tooltip"
                                                    data-bs-original-title="">
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
            <!--
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card mb-4">
                                                                    <div class="card-header pb-0">
                                                                        <h6>Projects table</h6>
                                                                    </div>
                                                                    <div class="card-body px-0 pt-0 pb-2">
                                                                        <div class="table-responsive p-0">
                                                                            <table class="table align-items-center justify-content-center mb-0">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th
                                                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                                            Project</th>
                                                                                        <th
                                                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                                            Budget</th>
                                                                                        <th
                                                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                                            Status</th>
                                                                                        <th
                                                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                                                            Completion</th>
                                                                                        <th></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex px-2">
                                                                                                <div>
                                                                                                    <img src="../assets/img/small-logos/logo-spotify.svg"
                                                                                                        class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                                                                </div>
                                                                                                <div class="my-auto">
                                                                                                    <h6 class="mb-0 text-sm">Spotify</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p class="text-sm font-weight-bold mb-0">$2,500</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="text-xs font-weight-bold">working</span>
                                                                                        </td>
                                                                                        <td class="align-middle text-center">
                                                                                            <div class="d-flex align-items-center justify-content-center">
                                                                                                <span class="me-2 text-xs font-weight-bold">60%</span>
                                                                                                <div>
                                                                                                    <div class="progress">
                                                                                                        <div class="progress-bar bg-gradient-info" role="progressbar"
                                                                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                                                                            style="width: 60%;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <button class="btn btn-link text-secondary mb-0">
                                                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex px-2">
                                                                                                <div>
                                                                                                    <img src="../assets/img/small-logos/logo-invision.svg"
                                                                                                        class="avatar avatar-sm rounded-circle me-2" alt="invision">
                                                                                                </div>
                                                                                                <div class="my-auto">
                                                                                                    <h6 class="mb-0 text-sm">Invision</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p class="text-sm font-weight-bold mb-0">$5,000</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="text-xs font-weight-bold">done</span>
                                                                                        </td>
                                                                                        <td class="align-middle text-center">
                                                                                            <div class="d-flex align-items-center justify-content-center">
                                                                                                <span class="me-2 text-xs font-weight-bold">100%</span>
                                                                                                <div>
                                                                                                    <div class="progress">
                                                                                                        <div class="progress-bar bg-gradient-success"
                                                                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                                                                            aria-valuemax="100" style="width: 100%;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                                                                aria-expanded="false">
                                                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex px-2">
                                                                                                <div>
                                                                                                    <img src="../assets/img/small-logos/logo-jira.svg"
                                                                                                        class="avatar avatar-sm rounded-circle me-2" alt="jira">
                                                                                                </div>
                                                                                                <div class="my-auto">
                                                                                                    <h6 class="mb-0 text-sm">Jira</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p class="text-sm font-weight-bold mb-0">$3,400</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="text-xs font-weight-bold">canceled</span>
                                                                                        </td>
                                                                                        <td class="align-middle text-center">
                                                                                            <div class="d-flex align-items-center justify-content-center">
                                                                                                <span class="me-2 text-xs font-weight-bold">30%</span>
                                                                                                <div>
                                                                                                    <div class="progress">
                                                                                                        <div class="progress-bar bg-gradient-danger"
                                                                                                            role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                                                                            aria-valuemax="30" style="width: 30%;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                                                                aria-expanded="false">
                                                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex px-2">
                                                                                                <div>
                                                                                                    <img src="../assets/img/small-logos/logo-slack.svg"
                                                                                                        class="avatar avatar-sm rounded-circle me-2" alt="slack">
                                                                                                </div>
                                                                                                <div class="my-auto">
                                                                                                    <h6 class="mb-0 text-sm">Slack</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p class="text-sm font-weight-bold mb-0">$1,000</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="text-xs font-weight-bold">canceled</span>
                                                                                        </td>
                                                                                        <td class="align-middle text-center">
                                                                                            <div class="d-flex align-items-center justify-content-center">
                                                                                                <span class="me-2 text-xs font-weight-bold">0%</span>
                                                                                                <div>
                                                                                                    <div class="progress">
                                                                                                        <div class="progress-bar bg-gradient-success"
                                                                                                            role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                                                                            aria-valuemax="0" style="width: 0%;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                                                                aria-expanded="false">
                                                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex px-2">
                                                                                                <div>
                                                                                                    <img src="../assets/img/small-logos/logo-webdev.svg"
                                                                                                        class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                                                                                                </div>
                                                                                                <div class="my-auto">
                                                                                                    <h6 class="mb-0 text-sm">Webdev</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p class="text-sm font-weight-bold mb-0">$14,000</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="text-xs font-weight-bold">working</span>
                                                                                        </td>
                                                                                        <td class="align-middle text-center">
                                                                                            <div class="d-flex align-items-center justify-content-center">
                                                                                                <span class="me-2 text-xs font-weight-bold">80%</span>
                                                                                                <div>
                                                                                                    <div class="progress">
                                                                                                        <div class="progress-bar bg-gradient-info" role="progressbar"
                                                                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"
                                                                                                            style="width: 80%;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                                                                aria-expanded="false">
                                                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex px-2">
                                                                                                <div>
                                                                                                    <img src="../assets/img/small-logos/logo-xd.svg"
                                                                                                        class="avatar avatar-sm rounded-circle me-2" alt="xd">
                                                                                                </div>
                                                                                                <div class="my-auto">
                                                                                                    <h6 class="mb-0 text-sm">Adobe XD</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p class="text-sm font-weight-bold mb-0">$2,300</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span class="text-xs font-weight-bold">done</span>
                                                                                        </td>
                                                                                        <td class="align-middle text-center">
                                                                                            <div class="d-flex align-items-center justify-content-center">
                                                                                                <span class="me-2 text-xs font-weight-bold">100%</span>
                                                                                                <div>
                                                                                                    <div class="progress">
                                                                                                        <div class="progress-bar bg-gradient-success"
                                                                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                                                                            aria-valuemax="100" style="width: 100%;"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true"
                                                                                                aria-expanded="false">
                                                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    -->
        </div>
    </main>
@endsection
