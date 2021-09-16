@extends('layouts.master')
@section('title', 'المشرفين')
@section('page-header')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> الصفحة الشخصية </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="default-color">الرئيسية</a></li>
                    <li class="breadcrumb-item active"> الصفحة الشخصية</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    @if ($message = session()->get('success'))
                        <div class="alert alert-success alert-block mb-4">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('user.profile') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="Name" class="mr-sm-2">الاسم :</label>
                                <input id="Name" type="text" name="name"
                                       class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}"
                                       required/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">البريد الالكتروني :</label>
                            <input id="email" type="email" name="email"
                                   class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="old_password">الرقم السري القديم :</label>
                            <input id="old_password" type="password" name="old_password"
                                   class="form-control @error('old_password') is-invalid @enderror" autocomplete="off"/>
                            @error('old_password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">الرقم السري الجديد :</label>
                            <input id="password" type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror" autocomplete="off"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="passwordConfirmation">تاكيد الرقم السري :</label>
                            <input id="passwordConfirmation" type="password" name="password_confirmation"
                                   class="form-control @error('password_confirmation') is-invalid @enderror"
                                   autocomplete="off"/>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <br><br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
