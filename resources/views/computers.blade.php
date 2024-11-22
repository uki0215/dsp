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
                                        @foreach ($pcinfoJson as $pcinfo)
                                            <tr id="tr_{{$pcinfo->id}}">
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../assets/img/team-3.jpg"
                                                                class="avatar avatar-sm me-3" alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            @if (auth()->user()->name)
                                                                <h6 class="mb-0 text-sm">{{ auth()->user()->name }}
                                                                </h6>
                                                                <p class="text-xs text-secondary mb-0">
                                                                    {{ auth()->user()->email }}
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0" name="pcInfoId">{{ $pcinfo->id }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->ownerName }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->orgName }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->workplaceName }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->positionName }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $pcinfo->regNum }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $pcinfo->ubtzNum }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->serviceTag }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->deviceType }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->subDevice }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $pcinfo->osType }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $pcinfo->brand }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $pcinfo->mark }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $pcinfo->cpu }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $pcinfo->hard }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $pcinfo->ram }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">{{ $pcinfo->price }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->buyedDate }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->comment }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->created_at }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="px-2 py-1">
                                                        <div class="flex-column justify-content-center">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                {{ $pcinfo->updated_at }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/computer-edit/{{ $pcinfo->id }}" class="mx-1"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fas fa-user-edit text-secondary"></i>
                                                    </a>
                                                  
                            
                                                        <a href="javascript:void(0)" onclick="deleteInfo({{$pcinfo->id}})" class="mx-1 " 
                                                        data-bs-toggle="tooltip">
                                                        <i class="cursor-pointer fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
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

    function deleteInfo(id)
    {
        if(confirm('Та үүнийг устгахдаа итгэлтэй байна уу?'))
        {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url:'/delete-pcinfo/'+id,
                type:'delete',
                success:function(result) 
                {
                    $("#"+result['tr']).slideUp("fast");
                }
            });
        }
    }

</script>

