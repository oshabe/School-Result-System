@extends('base.base')

@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication-->
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"

            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <div href="" class="mb-5">
                    <img alt="Logo" src="{{ asset('storage/images/1687489148_School Logo.jpeg') }}" class="h-100px w-100px rounded me-3"/>                 
                </div>
                <div href="" class="mb-12">
                    <span class='text-gray-h500 fw-bold fs-2 me-3'> <h>CRANE HIGH SCHOOL ENTEBBE. </h></span>
                </div>
                <!--end::Logo-->

                <!--begin::Wrapper-->
                <div class="{{ $wrapperClass ?? '' }} bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    {{ $slot }}
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->

            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10 d-none">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="{{ $theme->getOption("general", "about") }}" class="text-muted text-hover-primary px-2">{{ __('About') }}</a>

                    <a href="{{ $theme->getOption('general', 'contact') }}" class="text-muted text-hover-primary px-2">{{ __('Contact Us') }}</a>

                    <a href="{{ $theme->getOption('product', 'purchase') }}" class="text-muted text-hover-primary px-2">{{ __('Purchase') }}</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication-->
    </div>
@endsection
