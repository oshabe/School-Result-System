@section('title')
My People
@endsection
<x-base-layout>
	<!--end::Head-->
	<!--begin::Body-->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="{{ asset('public_css/datepicker.css') }}">

    <body data-kt-name="metronic" id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" data-kt-app-toolbar-fixed="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>if ( document.documentElement ) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + ( name !== null ? name + "_" : "" ) + "theme_mode_value"); if ( themeMode === null ) { if ( defaultThemeMode === "system" ) { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
				<!--begin::Toolbar-->
				<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-5">
					<!--begin::Toolbar container-->
					<div class="toolbar" id="kt_toolbar" style="height:100px;background-color: lightblue;" >
						<div id="kt_toolbar_container" class="{{ theme()->printHtmlClasses('toolbar-container', false) }} d-flex flex-stack"style="height:0%;width:100%">
							<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3" style="margin:1px">
								<!--begin::Title-->
								<div class="d-flex">
									<div class="d-flex me-5 flex-column">
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-top my-0">CRANE HIGH SCHOOL</h1>
										<div class="mt-2">
											<span class="text-gray-800 text-hover-primary">Kinyanga'ayiro cha maendeleo</span>
										</div>
									</div>
								</div>						
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar container-->
				</div>
				<!--end::Toolbar-->
				<div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="container-fluid">						
                    	<!--begin::Row-->
						<div class="row g-5 g-xl-8">
							<div class="col-xl-4">
								<!--begin::List Widget 3-->
								<div class="card card-xl-stretch mb-5 mb-xl-8">
									<!--begin::Header-->
									<div class="card-header justfy-content-center border-0">
										<h3 class="card-title fw-bold text-dark">TEACHERS AND THEIR CLASSES.</h3>
									</div>
									<!--end::Header-->
									<span class="separator separator-solid"></span>
									<!--begin::Body-->
									<div class="card-body pt-2"  style="height:280px;overflow:auto;">
										<!--begin::Item-->
										@foreach($teachers as $teacher)
											<div class="d-flex align-items-center">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-success mx-5"></span>
												<!--end::Bullet-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">{{$teacher->f_name}} {{$teacher->s_name}}</a>
												</div>
												<!--end::Description-->
												<!--begin::Controls-->
												<div class="d-flex my-2">
													<!--begin::Select-->
													<!--begin::Menu-->
													<div class="text-primary text-hover-primary" style="cursor:pointer" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
														<span><u>Classes</u></span>
													</div>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-300px py-3" id="{{$teacher->id}}" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3" id="{{$teacher->id}}" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
															@foreach ($teachersClass as $teachersClasses)
																@if ($teachersClasses->teacher_id == $teacher->id)
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">{{ $teachersClasses->name}}</span>
																	</a>
																@endif
															@endforeach
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Select-->
												</div>
												<!--end::Controls-->
											</div>
											<span class="separator separator-dashed mb-5"></span>
										@endforeach
										<!--end:Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end:List Widget 3-->
							</div>
							<div class="col-xl-4">
								<!--begin::List Widget 3-->
								<div class="card card-xl-stretch mb-5 mb-xl-8">
									<!--begin::Header-->
									<div class="card-header justfy-content-center border-0">
										<h3 class="card-title fw-bold text-dark">TEACHERS AND THEIR ROLES.</h3>
									</div>
									<!--end::Header-->
									<span class="separator separator-solid"></span>
									<!--begin::Body-->
									<div class="card-body pt-2"  style="height:200px;overflow:auto;">
										<!--begin::Item-->
										@foreach($teachers as $teacher)
											<div class="d-flex align-items-center">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-success mx-5"></span>
												<!--end::Bullet-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">{{$teacher->f_name}} {{$teacher->s_name}}</a>
												</div>
												<!--end::Description-->
												<!--begin::Controls-->
												<div class="d-flex my-2">
													<!--begin::Select-->
													<!--begin::Menu-->
													<div class="text-primary text-hover-primary" style="cursor:pointer" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
														<span><u>Roles</u></span>
													</div>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-300px py-3" id="{{$teacher->id}}" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3" id="{{$teacher->id}}" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
														@foreach ($teachersRole as $teachersRoles)
															@if ($teachersRoles->teacher_id == $teacher->id)
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">{{ $teachersRoles->name}}</span>
																</a>
															@endif
														@endforeach
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Select-->
												</div>
												<!--end::Controls-->
											</div>
											<span class="separator separator-dashed mb-5"></span>
										@endforeach
										<!--end:Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end:List Widget 3-->
							</div>
							<div class="col-xl-4">
								<!--begin::List Widget 3-->
								<div class="card card-xl-stretch mb-5 mb-xl-8">
									<!--begin::Header-->
									<div class="card-header justfy-content-center border-0">
										<h3 class="card-title fw-bold text-dark">TEACHERS AND SPECIFIC SUBJECTS THEY TEACH.</h3>
									</div>
									<!--end::Header-->
									<span class="separator separator-solid"></span>
									<!--begin::Body-->
									<div class="card-body pt-2"  style="height:200px;overflow:auto;">
										<!--begin::Item-->
										@foreach($teachers as $teacher)
											<div class="d-flex align-items-center">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-success mx-5"></span>
												<!--end::Bullet-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">{{$teacher->f_name}} {{$teacher->s_name}}</a>
												</div>
												<!--end::Description-->
												<!--begin::Controls-->
												<div class="d-flex my-2">
													<!--begin::Select-->
													<!--begin::Menu-->
												<div class="text-primary text-hover-primary" style="cursor:pointer" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
													<span><u>Subjects</u></span>
												</div>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-300px py-3" id="{{$teacher->id}}" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3" id="{{$teacher->id}}" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
													@foreach ($teachersSubject as $teachersSubjects)
														@if ($teachersSubjects->teacher_id == $teacher->id)
															<a href="#" class="menu-link px-3">
																<span class="menu-title">{{ $teachersSubjects->name}}</span>
															</a>
														@endif
													@endforeach
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
													<!--end::Select-->
												</div>
												<!--end::Controls-->
											</div>
											<span class="separator separator-dashed mb-5"></span>
										@endforeach
										<!--end:Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end:List Widget 3-->
							</div>
						</div>
						<!--begin::Row-->
						<!--begin::Followers toolbar-->
						<div class="d-flex flex-wrap flex-stack mb-6">
							<!--begin::Title-->
							<h3 class="fw-bold my-2">Teachers
							<span class="fs-6 text-gray-400 fw-semibold ms-1">({{$teachers->count()}})</span></h3>
							<!--end::Title-->
						</div>
						<!--end::Followers toolbar-->
						<!--end::Row-->
						<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
							<!--begin::Col-->
							@foreach($teachers as $teacher)
								<div class="col-sm-6 col-xl-4">
									<!--begin::Card-->
									<div class="card h-100">
										<!--begin::Card header-->
										<div class="card-header flex-nowrap border-0 pt-9">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<!--begin::Icon-->
												<div class="symbol symbol-75px w-75px bg-light me-5">
													<img src="{{ asset('storage/' . $teacher->photo) }}" alt="image" class="p-3" />
												</div>
												<!--end::Icon-->
												<!--begin::Title-->
												<div class="fs-4 fw-bold text-hover-primary text-gray-800 m-0">{{$teacher->f_name}} {{$teacher->s_name}}</div>
												<span class=""></span>
												<!--end::Title-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar m-0">
												<!--begin::Menu-->
												<span class="me-2">
													@unless(auth()->check() && (auth()->user()->status === 'Teacher' || auth()->user()->status === 'Student'))
														<a 	data-teacher-password="{{ $teacher->password}}" data-teacher-id="{{ $teacher->id }}"
															data-teacher-fname="{{ $teacher->f_name }}"     data-teacher-class="{{ $teacher->class_id }}"
															data-teacher-sname="{{ $teacher->s_name }}" data-teacher-dob="{{ $teacher->dob }}"
															data-teacher-email="{{ $teacher->email }}" data-teacher-gender="{{ $teacher->gender }}"
															data-teacher-phone="{{ $teacher->phone }}" data-teacher-address="{{ $teacher->address }}"
															data-teacher-initials="{{ $teacher->initials}}" data-teacher-nationality="{{ $teacher->nationality }}"class="btn btn-sm btn-icon btn-light btn-active-light-primary single_teacher" data-bs-toggle="tooltip" title="Edit Teacher">
															<i class="las la-edit fs-2"></i>
														</a>
													@endunless
												</span>
												<span class="me-2">
													@unless(auth()->check() && (auth()->user()->status === 'Teacher' || auth()->user()->status === 'Student'))
														<a  class="btn btn-sm btn-icon btn-light btn-active-light-danger delete_single_teacher" data-teacher-id="{{ $teacher->id }}" data-bs-toggle="tooltip" title="Delete Teacher">
															<i class="las la-trash-alt fs-2"></i>
														</a>
													@endunless
												</span>
												<!--end::Menu-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body d-flex flex-column px-9 pt-6 pb-8">
											<!--begin::Details toggle-->
											<div class="d-flex flex-stack fs-4 py-3">
												<div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details{{$teacher->id}}" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
													<span class="ms-2 rotate-180">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-3">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
											</div>
											<!--end::Details toggle-->
											<div class="separator"></div>
											<!--begin::Details content-->
											<div id="kt_user_view_details{{$teacher->id}}" class="collapse show">
												<div class="pb-5 fs-6">
													<!--begin::Details item-->
													<div class=" d-flex justify-content-between mt-5 mb-2">
														<div class="fw-bold">Email</div>
														<div class="text-gray-600">{{$teacher->email}}</div>
													</div>
													<span class="separator separator-dashed"></span>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class=" d-flex justify-content-between mt-5 mb-2">
														<div class="fw-bold">D.o.B</div>
														<div class="text-gray-600">{{$teacher->dob}}</div>
													</div>
													<span class="separator separator-dashed"></span>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class=" d-flex justify-content-between mt-5 mb-2">
														<div class="fw-bold">Address</div>
														<div class="text-gray-600">{{$teacher->address}}</div>
													</div>
													<span class="separator separator-dashed"></span>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class=" d-flex justify-content-between mt-5 mb-2">
														<div class="fw-bold">Nationality</div>
														<div class="text-gray-600">{{$teacher->nationality}}</div>
													</div>
													<span class="separator separator-dashed"></span>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class=" d-flex justify-content-between mt-5 mb-2">
														<div class="fw-bold">Gender</div>
														<div class="text-gray-600">{{$teacher->gender}}</div>
													</div>
													<span class="separator separator-dashed"></span>
													<!--begin::Details item-->
												</div>
											</div>
											<!--end::Details content-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
							@endforeach	
							<!--end::Col-->
						</div>
						<!--end::Row-->
                    </div>
                </div>
            </div>
        </div>

		<!--begin::Modal - edit teacher-->
            <div class="modal fade" id="edit_teacher" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content rounded">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                            <!--begin:Form-->
                            <form  id="teacher_form" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Heading-->
                                <div class="mb-4 text-center">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">Edit <span class="teachers_name"> Teachers </span> Details</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5 mb-9">An expert who is capable of imparting knowledge that will help learners to build, identify and to acquire skills</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <div class="p-9">
                                        <!--begin::Input group-->
                                        <div class="row mb-5">
                                            <div class="col-md-3 fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Names</span>
                                                </label>
                                            </div>
                                            <div class="col-md-4 fv-row">
                                                <input type="text" class="form-control" placeholder="First Name" name="t_name" id="t_f_name" />
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! include the First Name!</span>
                                            </div>
                                            <div class="col-md-4 fv-row">
                                                <input type="text" class="form-control" placeholder="Second Name" name="t_s_name" id="t_s_name" />
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! include the Second Name!</span>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-5">
                                            <div class="col-md-3 fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Short Name</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8 fv-row">
                                                <input type="text" class="form-control" placeholder="Name Short Form e.g M.k" name="short_form" id="short_form" />
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! include name Short form!</span>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
										<input type="hidden" class="form-control" name="t_email" id="t_email" />
										<input type="hidden" class="form-control" name="t_password" id="t_password" />
										<input type="hidden" class="form-control" name="t_class" id="t_class" />
										<input type="hidden" class="form-control" name="t_id" id="t_id" />
                                        <!--begin::Input group-->
                                        <div class="row mb-5">
                                            <div class="col-md-3 fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Address</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8 fv-row">
                                                <input type="text" class="form-control" placeholder="Mutungo plot-123" name="t_address" id="t_address" />
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! include the roll id!</span>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-5">
                                            <div class="col-md-3 fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Gender</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8 fv-row">
                                                <select class="form-select form-select-solid" name="t_gender" id="t_gender" data-control="select2" data-hide-search="true" data-placeholder="Select gender">
                                                    <option value="">Select gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! include the roll id!</span>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-5">
                                            <div class="col-md-3 fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Phone Number</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8 fv-row">
                                                <input type="text" class="form-control" placeholder="+256783499023" name="t_phone" id="t_phone" />
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! include the Phone Number!</span>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-5">
                                            <div class="col-md-3 fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Nationality</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8 fv-row">
                                                <select class="form-select form-select-solid" name="t_nationality" id="t_nationality" data-control="select2" data-hide-search="true" data-placeholder="Select Nationality" name="target_assign">
                                                    <option value="">Select Nationality</option>
                                                    <option value="Ugandan">Ugandan</option>
                                                    <option value="Kenyan">Kenyan</option>
                                                    <option value="Tanzanian">Tanzanian</option>
                                                    <option value="Rwandanese">Rwandanese</option>
                                                    <option value="Sudanese">Sudanese</option>
                                                </select>
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! include the Nationality!</span>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-5">
                                            <div class="col-md-3 fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Date of Birth</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8 fv-row">
                                                <input type="date" class="form-control" value="" name="t_dob" id="t_dob" />
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! include the Date of Birth!</span>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="separator mb-4"></div>
                                        <div class="d-flex justify-content-between mb-9" style="margin-left:15px;margin-right:20px;">
                                            <span id="teacher_step_three_back" class="btn btn-light-primary me-3">Back</span>
                                            <button type="submit" id="teacher_submit" class="btn btn-primary">Edit</button>
                                        </div>
                                        <!--end::Actions-->
                                </div>	
                                <!--begin::Actions-->
                            </form>
                            <!--end:Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
        <!--end::Modal - edit teacher-->

		<!--begin::Modal - delete teacher-->
			<div class="modal" id="deleteConfirmationModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Delete Confirmation</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<form >
							@csrf
							<div class="modal-body">
								<p>Are you sure you want to delete this teacher?</p>
							</div>
						</form>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-danger" id="deleteTeacherBtn">Delete</button>
						</div>
					</div>
				</div>
			</div>
		<!--begin::Modal - end delete teacher-->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="{{asset('demo1/js/all_jquery.js')}}"></script>

		<script>
            //create_organisation
            $(document).ready(function(){
 
				//begin teacher
				$('.delete_single_teacher').on('click', function(){

					var teacherId = $(this).data('teacher-id');
					$('#deleteConfirmationModal').modal('show');

					$('#deleteTeacherBtn').click(function() {
						$("#deleteTeacherBtn").prop('disabled',true);
						$('#deleteTeacherBtn').addClass('spinner spinner-white spinner-right').text('Deleting ...');
						// Perform the deletion using AJAX or any other method
						$.ajax({
							url: '/teachers/' + teacherId,
							type: 'DELETE',
							data: {
								_token: '{{ csrf_token() }}' // Include the CSRF token
							},
							success: function (response) {
								// Handle the success response
								console.log(response); // You can log or perform additional actions here

								// Reload the page or update the teacher list as needed
								window.location.reload();
							},
							error: function (xhr, status, error) {
								// Handle the error response
								console.log(xhr.responseText); // You can log or display the error message
							}
						});

						$('#deleteConfirmationModal').modal('hide');
					});
				});

					$('.single_teacher').on('click', function(){

						// Get the teacher details from the data attributes
						var teacherId = $(this).data('teacher-id');
						var teacherfname = $(this).data('teacher-fname');
						var teachersname = $(this).data('teacher-sname');
						var teacherdod = $(this).data('teacher-dob');
						var teacheremail = $(this).data('teacher-email');
						var teachergender = $(this).data('teacher-gender');
						var teacherphone = $(this).data('teacher-phone');
						var teacheraddres = $(this).data('teacher-address');
						var teacherinit = $(this).data('teacher-initials');
						var teachernationality = $(this).data('teacher-nationality');
						var teacherpassword = $(this).data('teacher-password');
						var teacherclass = $(this).data('teacher-class');
						

						//alert(teacherdod);

						// Set the teacher details in the modal input fields
						$('#t_dob').attr('value', teacherdod);
						$('#t_f_name').val(teacherfname);
						$('#t_s_name').val(teachersname);
						//$('#t_dob').val(teacherdod);
						$('#t_email').val(teacheremail);
						$('#t_password').val(teacherpassword);
						$('#t_gender').val(teachergender).trigger('change.select2');
						$('#t_phone').val(teacherphone);
						$('#t_address').val(teacheraddres);
						$('#short_form').val(teacherinit);
						$('#t_nationality').val(teachernationality).trigger('change.select2');
						$('#t_class').val(teacherclass);
						$('#t_id').val(teacherId);
						

						$('#edit_teacher').modal('show');
					});

					// Get the form element
					const t_form = $('#teacher_form');
					const csrfToken = $('meta[name="csrf-token"]').attr('content');

					// Listen for the form submission event
					t_form.on('submit', function(event) {
						$("#teacher_submit").prop('disabled',true);
						$('#teacher_submit').addClass('spinner spinner-white spinner-right').text('Editing ...');
						event.preventDefault(); // Prevent the default form submission

						// Create a new FormData object and append form data
						const formData = new FormData(this);

						// Append the CSRF token to the form data
						formData.append('_token', csrfToken);
						// Send an AJAX request to the Laravel controller
						$.ajax({
							url: '/teacher_edit_form',
							method: 'POST',
							data: formData,
							processData: false,
							contentType: false,
							success: function(response) {
								// Handle the success response
								console.log(response);
								
								window.location.reload();
							},
							error: function(error) {
								// Handle the error response
								console.error(error);
								alert('Error submitting bio data. Please try again.');
							}
						});
					
                    });
				//end teacher	

            })
        </script>

	</body>


</x-base-layout>