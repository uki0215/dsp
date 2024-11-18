@extends('layouts.user_type.auth')

@section('content')
    <div class="card">
        <div class="card-body pt-4 p-3">
            <form action="{{ route('store-user') }}" method="POST">
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

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="workplaceName" class="form-control-label">Ажлын байршил</label>
                        <div class="@error('workplaceName') @enderror">
                            <div class="w-full max-w-sm min-w-[200px]">
                                <div class="relative">
                                    <select name="workplaceName"
                                        class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                        @foreach ($workplaceName as $wName)
                                            <option value="{{ $wName->id }}" {{ $wName->id ? 'selected' : '' }}>
                                                {{ $wName->workplaceName }}
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
                                    <select
                                        class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                        @foreach ($orgName as $oName)
                                            <option value="" id="orgName">{{ $oName->orgName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="positionName" class="form-control-label">Албан тушаал</label>
                        <div class="@error('positionName') @enderror">
                            <div class="w-full max-w-sm min-w-[200px]">
                                <div class="relative ">
                                    <select
                                        class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                        @foreach ($positionName as $pName)
                                            <option value="" id="positionName">{{ $pName->positionName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="form-control-label">Хэрэглэгчийн нэр</label>
                        <div class="@error('name') @enderror">
                            <input class="form-control" value="" type="text" placeholder="name" id="name"
                                name="name">
                            @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="form-control-label">Имэйл</label>
                        <div class="@error('email') @enderror">
                            <input class="form-control" value="" type="email" placeholder="email" id="email"
                                name="email">
                            @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password" class="form-control-label">Нууц үг</label>
                        <div class="@error('password') @enderror">
                            <input class="form-control" value="com12345687" type="password" placeholder="password"
                                id="password" disabled name="password">
                            @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div>
                            <a href="{{ url('users') }}" class="btn bg-gradient-grey btn-sm mb-0">буцах</a>
                            <button type="submit" id="submit"
                                class="btn bg-gradient-primary btn-sm mt-4 mb-4">Хадгалах</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
