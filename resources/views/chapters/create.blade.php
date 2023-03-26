@extends('layouts.master')
@section('title') إنشاء فصل  @endsection

@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') اضافة @endslot
        @slot('pagetitle')  الفصول  @endslot

    @endcomponent

    <form action="{{route('chapters.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-2 dropdown">
                            <label class="form-label dropdown-toggle col-lg-3">اسم الفصل</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" dir="rtl" name="name" id="name"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu" id="name_menu" aria-labelledby="name">

                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-4" >
                            <div class="offset-3 col-9">
                                <button class="btn btn-primary" type="submit">اضافة</button>
                            </div>
                        </div>
                    </div>
                </div>






    </form>

@endsection
@section('script')

    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>

    <script>
        $(function () {
            $("#name_menu").css({
                'width': ($("#name").width() + 'px')
            });
        })

        $('#name').on('keyup', function () {
            $.ajax({
                'method': 'get',
                'url': '{{route('people.index')}}',
                'data': {'name': $('#name').val()},
                'success': function (res) {
                    var names = ''
                    for (const element of res) {
                        if (element.gender == 'انثى') {
                            names += '<a class="dropdown-item" onclick="setItem( \' ' + element.name +'  \',  \'' + element.birth_date +'\',  \'' + element.gender +'\',  \'' + element.phone +'\', \'' + element.job_title +'\',  \'' + element.address +'\')">' + element.name + '</a>';
                        }
                    }
                    $('#name_menu').html(names)
                },
                'error': function (err) {
                    console.log(err)
                }
            })
        })
    </script>

@endsection
