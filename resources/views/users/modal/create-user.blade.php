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
                            <input class="form-control" value="" type="email" placeholder="@example.com"
                                id="email" name="email">
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
                            <input class="form-control" value="" type="text" placeholder="password" id="password"
                                name="password">
                            @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('users') }}" class="btn bg-white mt-4 mb-4" type="submit">cancel</a>
                        <button type="submit" id="submit" class="btn bg-gradient-primary btn-md mt-4 mb-4">
                            save
                        </button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection