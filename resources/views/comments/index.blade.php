@extends('layouts.master')
@section('title')
    التقيم والتعليقات
@endsection

@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')
            التقيم
        @endslot
        @slot('title')
            والتعليقات
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
                                <th>إسم الطالب </th>
                                <th> تاريخ الإنشاء</th>
                                <th>  السؤال</th>
                                <th>  التقييم </th>
                                <th>الرد</th>
                                <th>الحاله</th>
                                <th> الخبارات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->student->name ?? '' }}</td>
                                    <td>{{ $comment->created_at->format('y-m-d') }}</td>
                                    <td>{{$comment->question}}</td>
                                    <td>{{$comment->rate}}</td>
                                    <th>{{$comment->replay}}</th>

                                    <td>
                                        @if ($comment->status == 'الانتظار')
                                            <span class="badge bg-soft-warning" style="font-size:small ">الإنتظار</span>
                                        @else($comment->status == 'مكتمل')
                                            <span class="badge bg-soft-success" style="font-size:small ">مكتمل</span>
                                        @endif
                                    </td>



                                    <td>@include('partials.comment-options')</td>
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
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true,
                autoWidth: false,
                order: [ [0, 'desc'] ]

            });

        });
    </script>
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
@endsection
