@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="d-flex justify-content-between mb-2 card-header pb-0">
                            <h6>Компьютер бүртгэл</h6>
                            <div>
                                <a href="{{ route('comReg') }}" class="btn bg-gradient-primary btn-sm mb-0"
                                    type="button">Нэмэх</a>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">

                                <table class="table align-items-center mb-0 border-1">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Бүртгэсэн хүн</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Эзэмшигч нэр</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Албаны нэр</th>
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
                                                Аниглал</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Төрөл</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Үйлдлийн систем</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Марк</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Загвар</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                CPU (gb)</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                HARD (tb)</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                RAM (gb)</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Үнэ</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Авсан огноо</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Тайлбар</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Бүртгэсэн огноо</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Шинэчлэгдсэн огноо</th>
                                        </tr>
                                    </thead>

                                    <tbody>


                                        @if (auth()->user()->is_admin == 0)
                                            @foreach ($pcinfo as $info)
                                                <tr id="tr_{{ $info->user_id }}">
                                                    <td>
                                                        <div class="d-flex px-4 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ $info->name }}
                                                                </h6>
                                                                <p class="text-xs text-secondary mb-0">
                                                                    {{ $info->email }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">{{ $info->id }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->ownerName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->orgName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->workplaceName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->positionName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->regNum }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->ubtzNum }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->serviceTag }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->deviceType }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->subDevice }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->osType }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->brand }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->mark }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->cpu }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->hard }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->ram }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->price }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->buyedDate }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->comment }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->created_at }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->updated_at }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="/computer-edit/{{ $info->id }}" class="mx-1"
                                                            data-bs-toggle="tooltip">
                                                            <i class="fas fa-user-edit text-secondary"></i>
                                                        </a>


                                                        <a href="javascript:void(0)"
                                                            onclick="deleteInfo({{ $info->id }})" class="mx-1 "
                                                            data-bs-toggle="tooltip">
                                                            <i class="cursor-pointer fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @elseif (auth()->user()->is_admin == 1)
                                            @foreach ($pcinfo as $info)
                                                <tr id="tr_{{ $info->user_id }}">
                                                    <td>
                                                        <div class="d-flex px-4 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ $info->name }}
                                                                </h6>
                                                                <p class="text-xs text-secondary mb-0">
                                                                    {{ $info->email }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->id }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->ownerName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->orgName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->workplaceName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->positionName }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->regNum }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->ubtzNum }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->serviceTag }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->deviceType }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->subDevice }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->osType }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->brand }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->mark }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->cpu }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->hard }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->ram }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->price }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->buyedDate }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->comment }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->created_at }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="px-2 py-1">
                                                            <div class="flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $info->updated_at }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="/computer-edit/{{ $info->id }}" class="mx-1"
                                                            data-bs-toggle="tooltip">
                                                            <i class="fas fa-user-edit text-secondary"></i>
                                                        </a>


                                                        <a href="javascript:void(0)"
                                                            onclick="deleteInfo({{ $info->id }})" class="mx-1 "
                                                            data-bs-toggle="tooltip">
                                                            <i class="cursor-pointer fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



<script type="text/javascript">
    function deleteInfo(id) {
        if (confirm(id + 'Та үүнийг устгахдаа итгэлтэй байна уу?')) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/delete-userId/' + id,
                type: 'delete',
                success: function(result) {
                    $("#" + result['tr']).slideUp("fast");
                }
            });
        }
    }
</script>
