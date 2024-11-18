@extends('layouts.user_type.auth')

@section('content')
    <div class="card mb-4">
        <div class="card-body pt-4 p-3">
            <div class="d-flex flex-row justify-content-between mb-2 pb-0">
                <h6>Компьютер бүртгэл</h6>
                <div>
                    <a href="{{ url('computers') }}" class="btn bg-gradient-grey btn-sm mb-0">буцах</a>
                    <button class="btn bg-gradient-primary btn-sm mb-0" type="submit" id="button">Хадгалах</a>
                </div>
            </div>
            <form action="{{ route('comReg') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-text text-white">
                            {{ $errors->first() }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                @endif

                <div class="row">
                    <!-- user information and pc information register-->
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Үндсэн хөрөнгийн дугаар</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="15000356" type="text" id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">УБТЗ дугаар</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="JA0011202" type="text" id="regNumber"
                                    name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Сервис таг</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="SJ58752" type="text" id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Эзэмшигчийн нэр</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="Б.Сийлэгмаа" type="text" id="regNumber"
                                    name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Ангилал</label>
                            <div class="@error('regNumber') @enderror">

                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($device_type as $dtypeName)
                                                <option value="{{ $dtypeName->deviceTypeName }}"
                                                    {{ $dtypeName->deviceTypeName ? 'selected' : '' }}>
                                                    {{ $dtypeName->deviceTypeName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="orgName" class="form-control-label">Албаны нэр</label>
                            <div class="@error('orgName') @enderror">
                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select name="orgName"
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($orgName as $oName)
                                                <option value="{{ $oName->orgName }}" {{ $oName->orgName ? 'selected' : '' }}>
                                                    {{ $oName->orgName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Төрөл</label>
                            <div class="@error('regNumber') @enderror">

                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($sub_device as $sDeviceName)
                                                <option value="{{ $sDeviceName->subDeviceName }}"
                                                    {{ $sDeviceName->subDeviceName ? 'selected' : '' }}>
                                                    {{ $sDeviceName->subDeviceName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="workplaceName" class="form-control-label">Ажлын байршил</label>
                            <div class="@error('workplaceName') @enderror">
                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative">
                                        <select name="workplaceName"
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($workplaceName as $wName)
                                                <option value="{{ $wName->workplaceName }}"
                                                    {{ $wName->workplaceName ? 'selected' : '' }}>
                                                    {{ $wName->workplaceName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Марк</label>
                            <div class="@error('regNumber') @enderror">

                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($brandName as $bName)
                                                <option value="{{ $bName->brandName }}"
                                                    {{ $bName->brandName ? 'selected' : '' }}>
                                                    {{ $bName->brandName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <div class="form-group">
                            <label for="regNumber" class="form-control-label">Загвар</label>
                            <div class="@error('regNumber') @enderror">

                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($device_mark as $dMarkName)
                                                <option value="{{ $dMarkName->markName }}"
                                                    {{ $dMarkName->markName ? 'selected' : '' }}>
                                                    {{ $dMarkName->markName }}
                                                </option>device_mark
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">HARD диск (gb-аар)</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="512" type="text" id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="positionName" class="form-control-label">Албан тушаал</label>
                            <div class="@error('positionName') @enderror">
                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select name="positionName"
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($positionName as $pName)
                                                <option value="{{ $pName->positionName }}"
                                                    {{ $pName->positionName ? 'selected' : '' }}>
                                                    {{ $pName->positionName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">RAM диск (gb-аар)</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="16" type="text" id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Авсан он сар өдөр</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="{{ $date }}" type="text" 
                                    id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Үнэ</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="1,258,000" type="text" id="regNumber"
                                    name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Бүртгэх он сар өдөр</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="{{ $date }}" type="text" disabled
                                    id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Нэмэлт тайлбар</label>
                            <div class="@error('regNumber') @enderror">
                                <textarea class="form-control" value="SJ58752" type="text" id="regNumber" name="regNumber"></textarea>
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- end register information-->
                </div>
            </form>
        </div>
    </div>
@endsection
