<div class="dropdown d-inline-block">
    <a type="button" class="btn btn-outline-primary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
        <i class="uil-ellipsis-v d-none d-xl-inline-block font-size-1"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-end">

        <a class="dropdown-item" href="#" data-bs-toggle="modal"
           data-bs-target="#myModal-block-product-{{ $comment->id }}">
             الرد علي التعليق </a>

        <a class="dropdown-item"
           onclick="event.preventDefault(); document.getElementById('profile-activate-{{ $comment->id }}').submit();"
           href="#">
            <span class="align-middle"> حذف التعليق</span>
        </a>
        <a class="dropdown-item" href="#" data-bs-toggle="modal"
           data-bs-target="#myModal-block-lorem-{{ $comment->id }}">
            تعديل الحالة </a>


    </div>
</div>





<form id="profile-activate-{{ $comment->id }}" action="{{ route('comments.destroy', $comment) }}" method="POST">
    @csrf
    @method('DELETE')
</form>
<div id="myModal-block-product-{{ $comment->id }}" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">     الرد علي التعليق  </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate action="{{ route("comments.update",$comment) }}" method="POST">
                <div class="row">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="result">   الرد   </label>

                            <input type="text" name="replay" class="form-control" >

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <button type="submit" class="btn  btn-primary">{{ __('save') }}</button>

                </form>
            </div>

        </div>
    </div>
</div>

<div id="myModal-block-lorem-{{ $comment->id }}" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">تعديل </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate
                      action="{{ route('updateStatus', $comment->id) }}" method="POST" >
                    @method('PUT')
                    @csrf
                    <div class="row">

                        <div class="col-md-12">


                            <div class="mb-3">
                                <label for="status">اختار</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="الانتظار">الانتظار</option>
                                    <option value="مكتمل">مكتمل</option>

                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ __($message) }}</strong>
                                            </span>
                                @enderror
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <button type="submit" class="btn  btn-primary">{{ __('save') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
