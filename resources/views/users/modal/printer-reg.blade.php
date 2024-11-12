@extends('layouts.user_type.auth')

@section('content')
    <div class="card mb-4">
        <div class="card-body pt-4 p-3">
            <div class="d-flex flex-row justify-content-between mb-2 pb-0">
                <h6>Принтер бүртгэл</h6>
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
                    <!-- -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="regNumber" class="form-control-label">Сервис таг</label>
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
                            <label for="regNumber" class="form-control-label">Загвар</label>
                            <div class="@error('regNumber') @enderror">

                                <div class="w-full max-w-sm min-w-[200px]">
                                    <div class="relative ">
                                        <select
                                            class="form-control w-full border-slate-200 pl-3 pr-8 py-2 transition duration-300 ease appearance-none cursor-pointer">
                                            <option value="brazil">Brazil</option>
                                            <option value="bucharest">Bucharest</option>
                                            <option value="london">London</option>
                                            <option value="washington">Washington</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->

                    <!-- end register information-->
                </div>
            </form>
        </div>
    </div>
@endsection
