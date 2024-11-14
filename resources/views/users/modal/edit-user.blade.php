@extends('layouts.user_type.auth')

@section('content')
    <div class="card">
        <div class="card-body pt-4 p-3">
            <form action="{{ route('update-user', $user->id) }}" method="post">
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
                        <label for="name" class="form-control-label">Name</label>
                        <div class="@error('user.name') @enderror">
                            <input class="form-control" value="{{ $user->name }}" type="text" placeholder="name"
                                id="name" name="name">
                            @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="form-control-label">Email</label>
                        <div class="@error('email') @enderror">
                            <input class="form-control" value="{{ $user->email }}" type="email"
                                placeholder="@example.com" id="email" name="email">
                            @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password" class="form-control-label">Password</label>
                        <div class="@error('password') @enderror">
                            <input class="form-control" value="{{ $user->password }}" type="text" placeholder="password"
                                id="password" name="password">
                            @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div>
                            <a href="{{ url('users') }}" class="btn bg-gradient-grey btn-sm mb-0">буцах</a>
                            <button type="submit" id="submit" class="btn bg-gradient-primary btn-sm mt-4 mb-4">Хадгалах</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
