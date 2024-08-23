<x-auth-layout>

    <!--begin::Signup Form-->
    <form method="POST" action="{{ route('register') }}" class="form w-100">
    @csrf

    <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">
                {{ __('Create an Account') }}
            </h1>
            <!--end::Title-->

            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">
                {{ __('Already have an account?') }}

                <a href="{{ theme()->getPageUrl('login') }}" class="link-primary fw-bolder">
                    {{ __('Sign in here') }}
                </a>
            </div>
            <!--end::Link-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="row fv-row mb-7">
            <!--begin::Col-->
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">{{ __('First Name') }}</label>
                <input class="form-control form-control-lg form-control-solid" type="text" name="first_name" id="first_name" autocomplete="off" value="{{ old('first_name') }}"/>
                @error('first_name')
                    <span>{{ $message }}</span>
                @enderror
                <span class="valid-feedback"></span>
                <span class="invalid-feedback">Oops! include the first Name</span>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">{{ __('Last Name') }}</label>
                <input class="form-control form-control-lg form-control-solid" type="text" id="last_name" name="last_name" autocomplete="off" value="{{ old('last_name') }}"/>
                <span class="valid-feedback"></span>
                <span class="invalid-feedback">Oops! include the Last Name!</span>
                @error('last_name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">{{ __('Email') }}</label>
            <input class="form-control form-control-lg form-control-solid" type="email" id="email" name="email" autocomplete="off" value="{{ old('email') }}"/>
            <span class="valid-feedback"></span>
            <span class="invalid-feedback">Oops! Invalid Email!</span>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">{{ __('Student Roll ID') }}</label>
            <input class="form-control form-control-lg form-control-solid" type="text" id="roll_id" name="roll_id" autocomplete="off" value="{{ old('email') }}"/>
            <span class="valid-feedback"></span>
            <span class="invalid-feedback">Oops! include your Roll Number!</span>
            @error('roll_id')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10 fv-row" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">
                    {{ __('Password') }}
                </label>
                <!--end::Label-->

                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password" id="password" name="password" autocomplete="new-password"/>
                    <span class="valid-feedback"></span>
                    <span class="invalid-feedback">Oops! Wrong Password!</span>
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror

                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <!--end::Input wrapper-->

                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Hint-->
            <div class="text-muted">
                {{ __('Use 8 or more characters with a mix of letters, numbers & symbols.') }}
            </div>
            <!--end::Hint-->
        </div>
        <!--end::Input group--->

        <!--begin::Input group-->
        <div class="fv-row mb-5">
            <label class="form-label fw-bolder text-dark fs-6">{{ __('Confirm Password') }}</label>
            <input class="form-control form-control-lg form-control-solid" type="password" id="password_confirmation" name="password_confirmation" autocomplete="off"/>
            <span class="valid-feedback"></span>
            <span class="invalid-feedback">Oops! Invalid Password!</span>
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="text-center">
            <button type="submit" name="submit_register" id="submit_register"  class="btn btn-lg btn-primary">
                Submit
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Signup Form-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{asset('demo1/js/all_jquery.js')}}"></script>
    <script>       
        $(document).ready(function(){

            $("#last_name").prop('disabled',true);
            $("#email").prop('disabled',true);
            $("#roll_id").prop('disabled',true);
            $("#password").prop('disabled',true);
            $("#password_confirmation").prop('disabled',true);
            $("#submit_register").prop('disabled',true);

            $("#first_name").focusout(function(){
                if($(this).val() !=''){
                    $("#first_name").addClass("is-valid");
                    $("#first_name").removeClass("is-invalid");
                    $("#last_name").prop('disabled',false);
                }else{
                    // 3N1X7
                    $("#first_name").removeClass("is-valid");
                    $("#first_name").addClass("is-invalid");
                    $("#last_name").prop('disabled',true);
                    $("#email").prop('disabled',true);
                    $("#roll_id").prop('disabled',true);
                    $("#password").prop('disabled',true);
                    $("#password_confirmation").prop('disabled',true);
                    $("#submit_register").prop('disabled',true);
                }
            })

            $("#last_name").focusout(function(){
                if($(this).val() !=''){
                    $("#last_name").addClass("is-valid");
                    $("#last_name").removeClass("is-invalid");
                    $("#email").prop('disabled',false);
                }else{
                    // 3N1X7
                    $("#last_name").removeClass("is-valid");
                    $("#last_name").addClass("is-invalid");
                    $("#email").prop('disabled',true);
                    $("#roll_id").prop('disabled',true);
                    $("#password").prop('disabled',true);
                    $("#password_confirmation").prop('disabled',true);
                    $("#submit_register").prop('disabled',true);
                }
            })

            $("#email").focusout(function(){
                if($(this).val() !=''){
                    $("#email").addClass("is-valid");
                    $("#email").removeClass("is-invalid");
                    $("#roll_id").prop('disabled',false);
                }else{
                    // 3N1X7
                    $("#email").removeClass("is-valid");
                    $("#email").addClass("is-invalid");
                    $("#roll_id").prop('disabled',true);
                    $("#password").prop('disabled',true);
                    $("#password_confirmation").prop('disabled',true);
                    $("#submit_register").prop('disabled',true);
                }
            })

            $("#roll_id").focusout(function(){
                if($(this).val() !=''){
                    $("#roll_id").addClass("is-valid");
                    $("#roll_id").removeClass("is-invalid");
                    $("#password").prop('disabled',false);
                }else{
                    // 3N1X7
                    $("#roll_id").removeClass("is-valid");
                    $("#roll_id").addClass("is-invalid");
                    $("#password").prop('disabled',true);
                    $("#password_confirmation").prop('disabled',true);
                    $("#submit_register").prop('disabled',true);
                }
            })

            $("#password").focusout(function(){
                if($(this).val() !=''){
                    $("#password").addClass("is-valid");
                    $("#password").removeClass("is-invalid");
                    $("#password_confirmation").prop('disabled',false);
                }else{
                    // 3N1X7
                    $("#roll_id").removeClass("is-valid");
                    $("#roll_id").addClass("is-invalid");
                    $("#password_confirmation").prop('disabled',true);
                    $("#submit_register").prop('disabled',true);
                }
            })

            $("#password_confirmation").focusout(function(){
                if($(this).val() !=''){
                    $("#password_confirmation").addClass("is-valid");
                    $("#password_confirmation").removeClass("is-invalid");
                    $("#submit_register").prop('disabled',false);
                }else{
                    // 3N1X7
                    $("#password_confirmation").removeClass("is-valid");
                    $("#password_confirmation").addClass("is-invalid");
                    $("#submit_register").prop('disabled',true);
                }
            })

            $('#registration_registrar').on('change', function() {
                var selected_registrar = this.value;
                $("#registration_type").html('');
                $.ajax({
                    url: "{{url('/registration/person/type')}}",
                    type: "POST",
                    data: {
                        selected_registrar: selected_registrar,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#registration_type').html('<option value="">Select Registration type</option>');
                        $.each(result.registration_types, function(key, value) {
                            $("#registration_type").append('<option value="' + value.uuid + '">' + value.name + '</option>');
                        });
                    }

                });
            });



        })
    </script>

</x-auth-layout>
