@extends('admin.layouts.app')
@section('title', ' ادارة البنرات  ')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.2/css/buttons.dataTables.min.css"> --}}

    <style>
        .dt-layout-row {
            display: flex;
            justify-content: space-between
        }
    </style>

@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                    <h3 class="mb-0 content-header-title d-inline-block">  ادارة البنرات  </h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item active">   ادارة البنرات
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">

                </div>
            </div>
            <div class="content-body">

                <!-- Bordered striped start -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#createslider">
                                     اضافة بانر
                                </button>

                                @include('admin.sliders._create')

                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    @include('admin.layouts.toaster_error')
                                    @include('admin.layouts.toaster_success')

                                    <div class="table-responsive">
                                        <table id="yajra_datatable"
                                            class="table table-striped table-bordered column-rendering">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> الصورة </th>
                                                    <th> الوصف </th>
                                                    <th> تاريخ الانشاء </th>
                                                    <th> العمليات </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bordered striped end -->
            </div>
        </div>
    </div>


@endsection

@section('js')

    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

    {{-- <script src="https://cdn.datatables.net/buttons/3.2.2/js/dataTables.buttons.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.html5.min.js"></script> --}}
    <!--------- Show Model If Have Error Validations -->


    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $("#createbrand").modal('show');
            });
        </script>
    @endif

    <script>
        var lang = "{{ app()->getLocale() }}";
        $(document).ready(function() {
            $('#yajra_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dashboard.sliders.all') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'file_name',
                        name: 'file_name',
                    },
                    {
                        data: 'note',
                        name: 'note',
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    },

                    {
                        data: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                // layout: {
                //     topStart: {
                //         buttons: [
                //              'copy'
                //         ]
                //     }
                // },
                language: lang === 'ar' ? {
                    url: '//cdn.datatables.net/plug-ins/2.2.2/i18n/ar.json',
                } : {},
            });
        });
    </script>
@endsection
