<div class="dropdown d-inline-block">
    <a type="button" class="btn btn-outline-primary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="uil-ellipsis-v d-none d-xl-inline-block font-size-1"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-end">

        <a class="dropdown-item" href="{{route("grades.store")}}"> <span
                class="align-middle">   إنشاء فصل جديد</span></a>


         <a class="dropdown-item"
         href="#" data-bs-toggle="modal"class="align-middle"
            data-bs-target="#myModal-block-branch-{{ $grade->id }}">
            إنشاء فصل جديد </a>


    </div>
</div>






<div id="myModal-block-DCT-{{ grade->id }}" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">   إنشاء فصل جديد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate action="{{ route("grades.store") }}" method="POST">
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
