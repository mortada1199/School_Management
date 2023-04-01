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
                            @endforeach

                        </tr>
                        <tr>
                            <td>النتائج</td>

                            @foreach ($chapter->getMedia('grades') as $media)

                                <td>{{ $media->name }}</td>
                            @endforeach
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('chapter.downloadfile', $media->id) }}"
                                       class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('chapter.deletefile', [$media->id, $chapter->id]) }}"
                                       class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </td>
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
