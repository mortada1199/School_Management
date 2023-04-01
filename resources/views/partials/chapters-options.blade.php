<div class="dropdown d-inline-block">
    <a type="button" class="btn btn-outline-primary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="uil-ellipsis-v d-none d-xl-inline-block font-size-1"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-end">


        <a class="dropdown-item" href="{{route('chapters.edit',$chapter)}}"> <span
                class="align-middle"> تعديل الفصل </span></a>
        <a class="dropdown-item" href="{{route('chapters.show',$chapter)}}"> <span
                class="align-middle"> مشاهده الفصل </span></a>
        <a class="dropdown-item"
           onclick="event.preventDefault(); document.getElementById('profile-activate-{{ $chapter->id }}').submit();"
           href="#">
            <span class="align-middle"> حذف الفصل</span>
        </a>


    </div>
</div>





<form id="profile-activate-{{ $chapter->id }}" action="{{ route('chapters.destroy', $chapter) }}" method="POST">
    @csrf
    @method('DELETE')
</form>
<div id="myModal-block-DCT-{{ $chapter->id }}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">   إنشاء فصل جديد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
{{--                <form class="needs-validation" novalidate action="{{ route("chapters.destroy,$chapter->id") }}" method="POST">--}}
                    <div class="row">
                        @csrf
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="result">   إنشاء فصل جديد</label>

                            <input type="text" name="name" class="form-control" >

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <button type="submit" class="btn  btn-primary">{{ __('save') }}</button>

                </form>
            </div>

        </div>
    </div>
</div>
