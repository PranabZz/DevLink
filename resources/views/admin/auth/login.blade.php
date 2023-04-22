@extends('admin')
@section('content')
    <div class="container" style="max-width: 800px; max-height:800px; padding-top:40px;">
        <img src="{{ asset('images/logo.png') }} "  style="padding-left: 50px; "/>
        <div class="row">
            <div class="col-md-6 mx-auto">
                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <form action="{{ route('admin.login.auth') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Username <span class="text-danger">*</span></label>
                        <input class="form-control" type="name" name="name" />
                    </div>
                    <div class="mb-3">
                        <label>Password <span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="password" />
                    </div>
                    <div class="mb-9">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
