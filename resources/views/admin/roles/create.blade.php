@extends('admin.layouts.app')

@section('title', 'انشاء صلاحية جديدة')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                    <h3 class="mb-0 content-header-title d-inline-block"> الصلاحيات </h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.roles.index') }}"> الصلاحيات </a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#"> اضافة صلاحية جديدة </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> اضافة صلاحية جديدة </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="mb-0 list-inline">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        @include('admin.layouts.validation_errors')
                                        <form class="form" method="POST" action="{{ route('dashboard.roles.store') }}">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">اسم الصلاحية </label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder=" اسم الصلاحية  " name="role[ar]">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">اسم الصلاحية بالانجليزي </label>
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                placeholder=" اسم الصلاحية  " name="role[en]">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput3"> حدد الصلاحيات </label>
                                                            <br>
                                                            <div class="row">
                                                                @if (Config::get('app.locale') == 'ar')
                                                                @foreach (config('permissions_ar') as $key => $value)
                                                                    <div class="col-3">
                                                                        <div class="form-check">
                                                                            <input name="permissions[]"
                                                                                class="form-check-input" type="checkbox"
                                                                                value="{{ $key }}"
                                                                                id="{{ $value }}">
                                                                            <label class="form-check-label"
                                                                                for="{{ $value }}">
                                                                                {{ $value }}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                                @else
                                                                    @foreach (config('permissions_en') as $key => $value)
                                                                        <div class="col-3">
                                                                            <div class="form-check">
                                                                                <input name="permissions[]"
                                                                                    class="form-check-input" type="checkbox"
                                                                                    value="{{ $key }}"
                                                                                    id="{{ $value }}">
                                                                                <label class="form-check-label"
                                                                                    for="{{ $value }}">
                                                                                    {{ $value }}
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                                <button type="button" class="mr-1 btn btn-warning">
                                                    <i class="ft-x"></i> رجوع
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection