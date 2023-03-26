@extends('layouts.master')
@section('title')
    سجل الأطفال حديثي الولادة
@endsection

@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')
            السجل
        @endslot
        @slot('title')
            سجل الأطفال حديثي الولادة
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive mt-4">
                        <table id="myTable" class="table table-bordered dt-responsive nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>اسم المولود</th>
                                <th>اسم الأم</th>
                                <th>فصيله الطفل</th>
                                <th>فصيله الأم</th>
                                <th>النوع</th>
                                <th>ICT Test</th>
                                <th>Dct Test</th>
                                <th>تاريخ الطلب</th>
                                <th>الحالة</th>
                                <th>الخيارات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($kids as $kid)
                                <tr>
                                    <td>{{ $kid->id }}</td>
                                    <td>{{ $kid->person->name ?? '' }}</td>
                                    <td>{{ $kid->mothrName->name ?? '' }}</td>

                                    <td>{{ $kid->person->blood_group ?? '' }}</td>
                                    <td>{{ $kid->mothrName->blood_group }}</td>

                                    <td>{{ $kid->type }}</td>
                                    <td>{{ $kid->ictTest->result ?? '' }}</td>
                                    <td>{{ $kid->dctTest->result ?? '' }}</td>
                                    <td>{{ $kid->created_at ?? '' }}</td>
                                    <td>
                                        @if ($kid->status == 'الانتظار')
                                            <span class="badge bg-soft-warning" style="font-size:small ">الإنتظار</span>
                                        @elseif($kid->status == 'مكتمل')
                                            <span class="badge bg-soft-success" style="font-size:small ">مكتمل</span>
                                        @elseif($kid->status == 'مرفوض')
                                            <span class="badge bg-soft-danger" style="font-size:small ">
                                                    مرفوض
                                                </span>
                                        @elseif($kid->status == 'ملغي')
                                            <span class="badge bg-soft-secondary" style="font-size:small ">ملغي</span>
                                        @endif
                                    </td>

                                    <td>@include('partials.chapters-options')</td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                responsive: true,
                autoWidth: false,
                order: [[0, 'desc']]

            });

        });
    </script>
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
@endsection
