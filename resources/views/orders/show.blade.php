@extends('layouts.master')
@section('title')
    @lang('translation.show_driver')
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')
            تفاصيل الطلب
        @endslot
        @slot('title')
            تفاصيل الطلب

        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    المعلومات الاساسيه

                </div>
                <div class="card-body">
                    <table class="table table-hover">

                        <tbody>
                        <tr>

                            <td> الإسم</td>
                            <td>{{ $student->name }}</td>

                        </tr>
                        <tr>
                            <td>الفصل</td>
                        <td>{{ $student->chapter->name}}</td>

                        </tr>
                        <tr>
                            <td>النتائج</td>


                                <td>{{ $student->age }}</td>


                        </tr>
                        <tr>
                            <td> رقم الهاتف</td>
                            <td>{{ $chapter->created_at->format('y-m-d') }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    @lang('other')

                </div>
                <div class="card-body">
                    <table class="table table-hover">

                        <tbody>
                            <tr>

                                <td>@lang('translation.Username')</td>
                                <td>admin</td>

                            </tr>
                            <tr>

                                <td>@lang('translation.email')</td>
                                <td>012346685</td>

                            </tr>
                            <tr>
                                <td>@lang('translation.image')</td>
                                <td><img src="" alt="image.png" style="height: 200px; widows: 200px;"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}

    </div>
@endsection
