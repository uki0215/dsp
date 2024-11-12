@extends('layouts.user_type.auth')

@section('content')
    <div class="card mb-4">
        <div class="card-body pt-4 p-3">
            <div class="d-flex flex-row justify-content-between mb-2 pb-0">
                <h6>Компьютер бүртгэл</h6>
                <a href="{{ route('comReg') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Save</a>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Үндсэн хөрөнгийн дугаар</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="" type="text" id="regNumber" name="regNumber">
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
                                <input class="form-control" value="" type="text" id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Ажлын байр</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="" type="text" id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Албан тушаал</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="" type="text" id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Утасны дугаар</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="" type="text" id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="serviceTag" class="form-control-label">Сервис таг</label>
                            <div class="@error('serviceTag') @enderror">
                                <input class="form-control" value="" type="text" id="serviceTag" name="serviceTag">
                                @error('serviceTag')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Сар өдөр</label>
                            <div class="@error('regNumber') @enderror">
                                <input class="form-control" value="{{ $date }}" type="text" disabled
                                    id="regNumber" name="regNumber">
                                @error('regNumber')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- end register information-->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="model" class="form-control-label">Software info</label>
                            <div class="@error('model') @enderror">
                                @foreach ($softwareInfo as $info)
                                    <input class="form-control" value="{{ $info }}" disabled type="text"
                                        id="model" name="model">
                                    @error('model')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="model" class="form-control-label">hardwareInfo info</label>
                            <div class="@error('model') @enderror">

                                <input class="form-control" value="{{ $hardWareInfo }}" disabled type="text"
                                    id="model" name="model">
                                @error('model')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror

                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>
@endsection
