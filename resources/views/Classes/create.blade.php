@extends('layouts.master')
@section('title') اضافة   الحصص  @endsection

@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') اضافة @endslot
        @slot('title')   الحصص @endslot
    @endcomponent

    <form action="{{route('upload-classes')}}" method="post"  enctype="multipart/form-data"   >
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-2 dropdown">
                            <label class="form-label dropdown-toggle col-lg-3"> الفصل</label>
                            <div class="col-lg-9">
                             <select class="form-control" name="chapter_id" >
                                 @foreach(App\Models\Chapter::where('user_id',auth()->id())->get() as $chapter)
                                     <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                                 @endforeach

                             </select>

                                @error('chapter_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-5">
                            <label class="form-label col-lg-3">الجدول</label>
                            <div class="col-lg-4">
                                <input class="form-control" name="classes"   type="file" >

                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="offset-3 col-9">
                                <button class="btn btn-primary" type="submit">اضافة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
@section('script')

{{--    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>--}}

{{--    <script>--}}
{{--        $(function () {--}}
{{--            $("#name_menu").css({--}}
{{--                'width': ($("#name").width() + 'px')--}}
{{--            });--}}
{{--        })--}}

{{--        $('#name').on('keyup', function () {--}}
{{--            $.ajax({--}}
{{--                'method': 'get',--}}
{{--                'url': '{{route('people.index')}}',--}}
{{--                'data': {'name': $('#name').val()},--}}
{{--                'success': function (res) {--}}
{{--                    var names = ''--}}
{{--                    for (const element of res) {--}}
{{--                        var a = 'dd';--}}
{{--                        names += '<a class="dropdown-item" onclick="setItem( \' ' + element.name +'  \',  \'' + element.birth_date +'\',  \'' + element.gender +'\',  \'' + element.phone +'\', \'' + element.job_title +'\',  \'' + element.address +'\')">' + element.name + '</a>';--}}
{{--                    }--}}
{{--                    $('#name_menu').html(names)--}}
{{--                },--}}
{{--                'error': function (err) {--}}
{{--                    console.log(err)--}}
{{--                }--}}
{{--            })--}}
{{--        })--}}

{{--        function setItem(name, birth_date, gender, phone, job_title, address) {--}}
{{--            $('#name').val(name)--}}
{{--            $('#birth_date').val(birth_date)--}}
{{--            $('#phone').val(phone != 'null'? phone :  '')--}}
{{--            $('#job_title').val(job_title  != 'null'? job_title : '')--}}
{{--            $('#address').val(address  != 'null'? address : '')--}}
{{--            if (gender == 'ذكر') {--}}
{{--                $('#male').prop('checked', true);--}}
{{--            }--}}

{{--            if (gender == 'انثى') {--}}
{{--                $('#female').prop('checked', true);--}}
{{--            }--}}
{{--        }--}}



{{--    </script>--}}

@endsection
