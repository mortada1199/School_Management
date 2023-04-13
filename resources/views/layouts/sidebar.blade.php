<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ url('/') }}" class="logo logo-dark">
            {{-- <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="20">
            </span> --}}
        </a>

        <a href="{{ url('/') }}" class="logo logo-light">

    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu"
                style="

                padding-right: 0;
                margin-right: 0;">
                <li class="menu-title">القائمة</li>
                {{-- @if (auth()->user()->employee->unit == 'الادارة') --}}
                <li>

                    <a href="{{ url('/') }}">
                        <i class="uil-clinic-medical"></i>
                        <span> لوحةالتحكم</span>
                    </a>
                </li>
                {{-- @endif --}}


                <li class="menu-title"> نظام إداره المدرسة</li>

                <li>
                    {{-- @if (auth()->user()->employee->unit == 'الادارة' || auth()->user()->employee->unit == 'معمل التجانس' || auth()->user()->employee->unit == 'الاستقبال') --}}

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-heart-medical"></i>
                        <span>
                            الطلبات
                        </span>
                    </a>
                    {{-- @endif --}}

                    <ul>

                        <li>
                            <a href="{{ route('orders.index') }}">
                                <i class="uil-files-landscapes-alt"></i>
                                <span>
                                    كل الطلبات
                                </span>
                            </a>
                        </li>
                        {{-- @if (auth()->user()->employee->unit == 'الاستقبال') --}}
{{--                        <li>--}}
{{--                            <a href="{{ route('orders.create') }}">--}}
{{--                                <i class="uil-comment-medical"></i>--}}
{{--                                <span>--}}
{{--                                    اضافة طلب--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        {{-- @endif --}}

                    </ul>
                </li>
                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-social-distancing"></i>
                        <span>
                            الحصص
                        </span>
                    </a>
                    <ul>
                        <li>
                            {{-- @if (auth()->user()->employee->unit == 'الاستقبال') --}}
                            <a href="{{route('Classes.create')}}">
                                <i class="uil-user-arrows"></i>
                                <span>
                                    اضافه الحصص
                                </span>
                            </a>
                            {{-- @endif --}}

                        </li>


                    </ul>
                </li>
                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-social-distancing"></i>
                        <span>
                            الدرجات
                        </span>
                    </a>
                    <ul>
                        <li>
                            {{-- @if (auth()->user()->employee->unit == 'الاستقبال') --}}
                            <a href="{{route('grades.create')}}">
                                <i class="uil-user-arrows"></i>
                                <span>
                                    اضافه الدرجات
                                </span>
                            </a>
                            {{-- @endif --}}

                        </li>


                    </ul>
                </li>

                {{-- @if (auth()->user()->employee->unit == 'الاستقبال') --}}
                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-social-distancing"></i>
                        <span>   الفصول

                        </span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('chapters.create') }}">
                                <i class="uil-files-landscapes-alt"></i>
                                <span>
                                    إنشاء فصل
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('chapters.index') }}">
                                <i class="uil-files-landscapes-alt"></i>
                                <span>
                                    الفصول
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-social-distancing"></i>
                        <span>  التعليقات

                        </span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('comments.index')}}">
                                <i class="uil-user"></i>
                                <span>
                                    التعليقات والتقييم
                                </span>
                            </a>
                        </li>


                    </ul>
                </li>

{{--                <li>--}}
{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
{{--                        <i class="uil-social-distancing"></i>--}}
{{--                        <span>--}}
{{--                             الإشعارات--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <i class="uil-heart-rate"></i>--}}
{{--                                <span>--}}
{{--                                   الاشعارات--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <i class="uil-files-landscapes-alt"></i>--}}
{{--                                <span>--}}
{{--                                    سجل زيادة الدم--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

                {{-- @endif --}}



                {{-- <li>
                    <a href="{{ route('employees.index') }}">
                        <i class="uil-users-alt"></i>
                        <span>
                            المشتقات
                        </span>
                    </a>
                </li> --}}




                <li>

{{--                <li>--}}
{{--                    --}}{{-- @if (auth()->user()->employee->unit == 'الادارة') --}}
{{--                    <a href="#">--}}
{{--                        <i class="uil-file"></i>--}}

{{--                        <span>--}}
{{--                            التقارير--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                    --}}{{-- @endif --}}

{{--                </li>--}}
                {{-- <ul>

                        <li>
                            <a href="{{ route('BloodDischarged') }}">
                                <i class="uil-home-alt"></i>
                                <span>
                                    تقرير بنك الدم </span></a>
                        </li>
                        <li>
                            <a href="{{ route('viralDiseases-invoice') }}">
                                <i class="uil-home-alt"></i>
                                <span>
                                    تقرير الفحص الفيروسي </span></a>
                        </li>
                        <li>
                            <a href="{{ route('exclusionFromTheDoctor') }}">
                                <i class="uil-home-alt"></i>
                                <span>
                                    تقرير استبعاد من الطبيب </span></a>
                        </li>
                        <li>
                            <a href="{{ route('doners-WithDraw') }}">
                                <i class="uil-home-alt"></i>
                                <span>
                                    تقرير عدم السحب </span></a>
                        </li>

                        <li>
                            <a href="{{ route('polcythemiasrReport') }}">
                                <i class="uil-home-alt"></i>
                                <span>
                                    تقرير مرضي زياده الدم </span></a>
                        </li>


                    </ul> --}}
                </li>

            </ul>
        </div>

        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
