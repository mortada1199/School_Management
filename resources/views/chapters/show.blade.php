@extends('layouts.master')
@section('title')
    @lang('translation.show_driver')
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')
           تفاصيل الفصل
        @endslot
        @slot('title')
            تفاصيل الفصل

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

                            <td> الفصل</td>
                            <td>{{ $chapter->name }}</td>

                        </tr>
                        <tr>
                            <td>الحصص</td>
                            @foreach ($chapter->getMedia('classes') as $media)

                            <td>{{ $media->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('chapters.downloadfile', $media->id) }}"
                                           class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                            <button class="btn-primary">تنزيل</button>
                                        </a>
                                        <a href="{{ route('chapters.deletefile', [$media->id, $chapter->id]) }}"
                                           class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                            <button class="btn-danger">حذف</button>
                                        </a>
                                    </div>
                                </td>
                            @endforeach

                        </tr>
                        <tr>
                            <td>النتائج</td>

                            @foreach ($chapter->getMedia('grades') as $media)

                                <td>{{ $media->name }}</td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('chapters.downloadfile', $media->id) }}"
                                           class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                            <button class="btn-primary">تنزيل</button>
                                        </a>
                                        <a href="{{ route('chapters.deletefile', [$media->id, $chapter->id]) }}"
                                           class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                            <button class="btn-danger">حذف</button>
                                        </a>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>تاريخ الإنشاء</td>
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
