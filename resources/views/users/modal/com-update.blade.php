@extends('layouts.user_type.auth')

@section('content')
    <form action="{{ route('updateCom', $devicePcInfo->id) }}" method="POST">
        @csrf
        <div class="card mb-4">
            <div class="card-body pt-4 p-3">
                <div class="d-flex flex-row justify-content-between mb-2 pb-0">
                    <h6>Компьютер бүртгэл</h6>
                    <div>
                        <a href="{{ url('computers') }}" class="btn bg-gradient-grey btn-sm mb-0">буцах</a>
                        <button class="btn bg-gradient-primary btn-sm mb-0" type="submit" id="submit">Хадгалах</a>
                    </div>
                </div>

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
                            <label for="regNum" class="form-control-label">ҮХ дугаар</label>
                            <div class="@error('regNum') @enderror">
                                <input class="form-control" value="{{ $devicePcInfo->regNum }}" type="text"
                                    id="regNum" name="regNum">
                                @error('regNum')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="ubtzNum" class="form-control-label">УБТЗ дугаар</label>
                            <div class="@error('ubtzNum') @enderror">
                                <input class="form-control" value="{{ $devicePcInfo->ubtzNum }}" type="text"
                                    id="ubtzNum" name="ubtzNum">
                                @error('ubtzNum')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="serviceTag" class="form-control-label">Сервис таг</label>
                            <div class="@error('serviceTag') @enderror">
                                <input class="form-control" value="{{ $devicePcInfo->serviceTag }}" type="text"
                                    id="serviceTag" name="serviceTag">
                                @error('serviceTag')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ownerName" class="form-control-label">Эзэмшигчийн нэр</label>
                            <div class="@error('ownerName') @enderror">
                                <input class="form-control" value="{{ $devicePcInfo->ownerName }}" type="text"
                                    id="ownerName" name="ownerName">
                                @error('ownerName')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="deviceType" class="form-control-label">Ангилал</label>
                            <div class="@error('regNumber') @enderror">

                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select name="deviceType"
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($device_type as $dtypeName)
                                                <option value="{{ $dtypeName->deviceTypeName }}"
                                                    {{ $dtypeName->deviceTypeName == $devicePcInfo->deviceType ? 'selected' : '' }}>
                                                    {{ $dtypeName->deviceTypeName }}
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
                            <label for="subDevice" class="form-control-label">Төрөл</label>
                            <div class="@error('subDevice') @enderror">

                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select name="subDevice"
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($sub_device as $sDeviceName)
                                                <option value="{{ $sDeviceName->subDeviceName }}"
                                                    {{ $sDeviceName->subDeviceName == $devicePcInfo->subDevice ? 'selected' : '' }}>
                                                    {{ $sDeviceName->subDeviceName }}
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
                            <label for="osType" class="form-control-label">Үйлдлийн систем</label>
                            <div class="@error('osType') @enderror">
                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select name="osType"
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            <option value="Windows XP">Windows XP</option>
                                            <option value="Windows 7">Windows 7</option>
                                            <option value="Windows 8">Windows 8</option>
                                            <option value="Windows 10">Windows 10</option>
                                            <option value="Windows 11">Windows 11</option>
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
                                                <option value="{{ $oName->orgName }}"
                                                    {{ $oName->orgName == $devicePcInfo->orgName ? 'selected' : '' }}>
                                                    {{ $oName->orgName }}
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
                            <label for="brand" class="form-control-label">Марк</label>
                            <div class="@error('brand') @enderror">

                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select name="brand"
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($brandName as $bName)
                                                <option value="{{ $bName->brandName }}"
                                                    {{ $bName->brandName == $devicePcInfo->brand ? 'selected' : '' }}>
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
                            <label for="mark" class="form-control-label">Загвар</label>
                            <div class="@error('regNumber') @enderror">

                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select name="mark"
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            @foreach ($device_mark as $dMarkName)
                                                <option value="{{ $dMarkName->markName }}"
                                                    {{ $dMarkName->markName == $devicePcInfo->mark ? 'selected' : '' }}>
                                                    {{ $dMarkName->markName }}
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
                            <label for="cpu" class="form-control-label">CPU</label>
                            <div class="@error('hard') @enderror">
                                <input class="form-control" value="{{ $devicePcInfo->cpu }}" type="text"
                                    id="cpu" name="cpu">
                                @error('cpu')
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
                                                    {{ $pName->positionName == $devicePcInfo->positionName ? 'selected' : '' }}>
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
                            <label for="hard" class="form-control-label">HARD диск (gb-аар)</label>
                            <div class="@error('hard') @enderror">
                                <input class="form-control" value="{{ $devicePcInfo->hard }}" type="text"
                                    id="hard" name="hard">
                                @error('hard')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="ram" class="form-control-label">RAM диск (gb-аар)</label>
                            <div class="@error('ram') @enderror">
                                <input class="form-control" value="{{ $devicePcInfo->ram }}" type="text"
                                    id="ram" name="ram">
                                @error('ram')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="buyedDate" class="form-control-label">Авсан он сар өдөр</label>
                            <div class="@error('buyedDate') @enderror">
                                <input class="form-control" value="{{ $date }}" type="text" id="buyedDate"
                                    name="buyedDate">
                                @error('buyedDate')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
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
                                                    {{ $wName->workplaceName == $devicePcInfo->workplaceName ? 'selected' : '' }}>
                                                    {{ $wName->workplaceName }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="price" class="form-control-label">Үнэ</label>
                            <div class="@error('price') @enderror">
                                <input class="form-control" value="{{ $devicePcInfo->price }}" type="text"
                                    id="price" name="price">
                                @error('price')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="created_at" class="form-control-label">Бүртгэх он сар өдөр</label>
                            <div class="@error('created_at') @enderror">
                                <input class="form-control" value="{{ $date }}" type="text" disabled
                                    id="created_at" name="created_at">
                                @error('created_at')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="comment" class="form-control-label">Нэмэлт тайлбар</label>
                            <div class="@error('comment') @enderror">
                                <textarea class="form-control" type="text" id="comment" name="comment">{{ $devicePcInfo->comment }}</textarea>
                                @error('comment')
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
