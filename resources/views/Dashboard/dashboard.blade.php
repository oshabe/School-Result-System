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
					<div class="toolbar" id="kt_toolbar" style="height:100px;background-color: lightblue;">
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
						<div class="row g-5 g-xl-10 mb-xl-10">
							<!--begin::Col-->
							<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
								<!--begin::Card widget 16-->
								<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10" style="background-color: #080655">
									<!--begin::Header-->
									<div class="card-header pt-5">
										<!--begin::Title-->
										<div class="card-title d-flex flex-column">
											<!--begin::Amount-->
											<div class='mb-5'>
												<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{$teachers->count()}}</span>
												<!--end::Amount-->
												<!--begin::Subtitle-->
												<span class="text-white opacity-50 pt-1 fw-semibold fs-6">Total Number of Teachers</span>
												<!--end::Subtitle-->
											</div>
											<div>
												<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{$studentCount->count()}}</span>
												<!--end::Amount-->
												<!--begin::Subtitle-->
												<span class="text-white opacity-50 pt-1 fw-semibold fs-6">Total Number of Students</span>
												<!--end::Subtitle-->
											</div>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Header-->
								</div>
								<!--end::Card widget 16-->
								<!--begin::List widget 25-->
								<div class="card card-flush h-lg-50" style="overflow-y:auto;">
									<!--begin::Header-->
									<div class="card-header pt-5">
										<!--begin::Title-->
										<h3 class="card-title text-gray-800 fw-bold">Number of Students in Every Class</h3>
										<!--end::Title-->
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body pt-5">
										<!--begin::Item-->
										<div class="d-flex flex-stack">
											<!--begin::Section-->
											<div class="text-gray-700 fw-semibold fs-6 me-2">Form One</div>
											<!--end::Section-->
											<!--begin::Statistics-->
											<div class="d-flex align-items-senter"> 
												<!--begin::Number-->
												<span class="text-gray-900 fw-bolder fs-6">{{$studentFormOne->count()}}</span>
												<!--end::Number-->
											</div>
											<!--end::Statistics-->
										</div>
										<!--end::Item-->
										<!--begin::Separator-->
										<div class="separator separator-dashed my-3"></div>
										<!--end::Separator-->
										<!--begin::Item-->
										<div class="d-flex flex-stack">
											<!--begin::Section-->
											<div class="text-gray-700 fw-semibold fs-6 me-2">Form Two</div>
											<!--end::Section-->
											<!--begin::Statistics-->
											<div class="d-flex align-items-senter"> 
												<!--begin::Number-->
												<span class="text-gray-900 fw-bolder fs-6">{{$studentFormTwo->count()}}</span>
												<!--end::Number-->
											</div>
											<!--end::Statistics-->
										</div>
										<!--end::Item-->
										<!--begin::Separator-->
										<div class="separator separator-dashed my-3"></div>
										<!--end::Separator-->
										<!--begin::Item-->
										<div class="d-flex flex-stack">
											<!--begin::Section-->
											<div class="text-gray-700 fw-semibold fs-6 me-2">Form Three</div>
											<!--end::Section-->
											<!--begin::Statistics-->
											<div class="d-flex align-items-senter"> 
												<!--begin::Number-->
												<span class="text-gray-900 fw-bolder fs-6">{{$studentFormThree->count()}}</span>
												<!--end::Number-->
											</div>
											<!--end::Statistics-->
										</div>
										<!--end::Item-->
										<!--begin::Separator-->
										<div class="separator separator-dashed my-3"></div>
										<!--end::Separator-->
										<!--begin::Item-->
										<div class="d-flex flex-stack">
											<!--begin::Section-->
											<div class="text-gray-700 fw-semibold fs-6 me-2">Form Four</div>
											<!--end::Section-->
											<!--begin::Statistics-->
											<div class="d-flex align-items-senter"> 
												<!--begin::Number-->
												<span class="text-gray-900 fw-bolder fs-6">{{$studentFormFour->count()}}</span>
												<!--end::Number-->
											</div>
											<!--end::Statistics-->
										</div>
										<!--end::Item-->
										<!--begin::Separator-->
										<div class="separator separator-dashed my-3"></div>
										<!--end::Separator-->
										<!--begin::Item-->
										<div class="d-flex flex-stack">
											<!--begin::Section-->
											<div class="text-gray-700 fw-semibold fs-6 me-2">Form Five</div>
											<!--end::Section-->
											<!--begin::Statistics-->
											<div class="d-flex align-items-senter"> 
												<!--begin::Number-->
												<span class="text-gray-900 fw-bolder fs-6">{{$studentFormFive->count()}}</span>
												<!--end::Number-->
											</div>
											<!--end::Statistics-->
										</div>
										<!--end::Item-->
										<!--begin::Separator-->
										<div class="separator separator-dashed my-3"></div>
										<!--end::Separator-->
										<!--begin::Item-->
										<div class="d-flex flex-stack">
											<!--begin::Section-->
											<div class="text-gray-700 fw-semibold fs-6 me-2">Form Six</div>
											<!--end::Section-->
											<!--begin::Statistics-->
											<div class="d-flex align-items-senter"> 
												<!--begin::Number-->
												<span class="text-gray-900 fw-bolder fs-6">{{$studentFormSix->count()}}</span>
												<!--end::Number-->
											</div>
											<!--end::Statistics-->
										</div>
										<!--end::Item-->
										<!--begin::Separator-->
										<div class="separator separator-dashed my-3"></div>
										<!--end::Separator-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::LIst widget 25-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-12 col-xl-12 col-xxl-9 mb-5 mb-xl-0">
								<!--begin::Timeline widget 3-->
								<div class="card h-md-100">
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bold text-dark">Newly Joined Students</span>
										</h3>
										<!--begin::Toolbar-->
										<div class="card-toolbar">
											<span class="me-2">
												@unless(auth()->check() && (auth()->user()->status === 'Teacher' || auth()->user()->status === 'Student'))
													<a  class="btn btn-sm btn-icon btn-light btn-active-light-primary" id="student_id" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" title="Add Student">
														<svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
															<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
														</svg>
													</a>
												@endunless
											</span>
										</div>
										<!--end::Toolbar-->
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body pt-7">
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 gy-5">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-gray-400 fw-bold fs-7 bg-light text-uppercase gs-0">
												<th class="ps-4 min-w-125px rounded-start">Student Name</th>
												<th class="min-w-125px">Email</th>
												<th class="min-w-125px">Phone Number</th>
												<th class="min-w-125px">Roll ID</th>
												<th class="min-w-125px">Gender</th>
												<th class="text-end min-w-70px"></th>
											</tr>
											<!--end::Table row-->
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody class="fw-semibold text-gray-600">
											@foreach($student as $students)
												<tr>
													<!--begin::Name=-->
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-5">
																<img src="{{ asset('storage/' . $students->image) }}" class="" alt="" />
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$students->f_name}} {{$students->s_name}}</a>
																<span class="text-muted fw-semibold text-muted d-block fs-7">Student</span>
															</div>
														</div>
													</td>
													<!--end::Name=-->
													<!--begin::Email=-->
													<td>
														<a href="#" class="text-gray-600 text-hover-primary mb-1">{{$students->email}}</a>
													</td>
													<!--end::Email=-->
													<!--begin::Date=-->
													<td>{{$students->number}}</td>
													<!--end::Date=-->
													<!--begin::Date=-->
													<td>{{$students->roll_id}}</td>
													<!--end::Date=-->
													<td>{{$students->gender}}</td>
													<!--begin::Action=-->
													<td class="text-end">
														<span class="me-2">
															<a href="/Student/{{$students->id}}" class="btn btn-sm btn-icon btn-light btn-active-light-primary" id="student_id" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" title="Student Details">
																<i class="las la-arrow-right fs-2"></i>
															</a>
														</span>
													</td>
													<!--end::Action=-->
												</tr>
											@endforeach                                    
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
									</div>
									<!--end: Card Body-->
								</div>
								<!--end::Timeline widget 3-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
							<!--begin::Col-->
							<div class="col-xxl-12">
								<!--begin::Card widget 18-->
								<div class="card card-flush h-md-100">
									<!--begin::Body-->
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bold text-dark">Newly Created Teachers</span>
										</h3>
										<!--begin::Toolbar-->
										<div class="card-toolbar">
											<span class="me-2">
												@unless(auth()->check() && (auth()->user()->status === 'Teacher' || auth()->user()->status === 'Student'))
													<a  class="btn btn-sm btn-icon btn-light btn-active-light-primary" id="teacher_id" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" title="Add Teacher">
														<svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
															<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
														</svg>
													</a>
												@endunless
											</span>
										</div>
										<!--end::Toolbar-->
									</div>
									<!--end::Header-->
									<div class="card-body py-9">
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 gy-5">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-gray-400 fw-bold fs-7 bg-light text-uppercase gs-0">
												<th class="ps-4 min-w-125px rounded-start">Student Name</th>
												<th class="min-w-125px">Email</th>
												<th class="min-w-125px">Phone Number</th>
												<th class="min-w-125px">Address</th>
												<th class="min-w-125px">Nationality</th>
												<th class="min-w-125px">Initials</th>
											</tr>
											<!--end::Table row-->
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody class="fw-semibold text-gray-600">
											@foreach( $allTeacher as $teacher)
												<tr>
													<!--begin::Name=-->
													<td>
														<div class="d-flex align-items-center">
															<div class="symbol symbol-50px me-5">
																<img src="{{ asset('storage/' . $teacher->image) }}" class="" alt="" />
															</div>
															<div class="d-flex justify-content-start flex-column">
																<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$teacher->f_name}} {{$teacher->s_name}}</a>
															</div>
														</div>
													</td>
													<!--end::Name=-->
													<!--begin::Email=-->
													<td>
														<a href="#" class="text-gray-600 text-hover-primary mb-1">{{$teacher->email}}</a>
													</td>
													<!--end::Email=-->
													<!--begin::Phone number=-->
													<td>{{$teacher->number}}</td>
													<!--end::Phone number=-->
													<!--begin::Address=-->
													<td>{{$teacher->address}}</td>
													<!--end::Address=-->
													<!--begin::Nationalit=-->
													<td>{{$teacher->nationality}}</td>
													<!--end::Nationalit=-->
													<!--begin::Date=-->
													<td>{{$teacher->initials}}</td>
													<!--end::Date=-->
												</tr>
											@endforeach                                    
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Card widget 18-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Modal - create_teacher-->
							<div class="modal fade" id="create_teacher" tabindex="-1" aria-hidden="true">
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
													<h1 class="mb-3">Create Teachers Details</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-semibold fs-5 mb-9">An expert who is capable of imparting knowledge that will help learners to build, identify and to acquire skills</div>
													<!--end::Description-->
													<!--begin: Pic-->
													<div class="me-7 mb-0">
														<div class="symbol symbol-fixed position-relative">
															<!--begin::Image input-->
															<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
																<!--begin::Preview existing avatar-->
																<div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
																	<!--end::Preview existing avatar-->
																	<!--begin::Label-->
																	<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Photo">
																		<i class="bi bi-pencil-fill fs-7"></i>
																		<!--begin::Inputs-->
																		<input type="file" name="t_image" id="t_image" accept=".png, .jpg, .jpeg" />
																		<input type="hidden" name="avatar_remove" />
																		<input type="hidden" name="t_uuid" id="t_uuid" value="" />
																		<!--end::Inputs-->
																	</label>                                                   
																	<!--begin::Cancel-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Photo">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Cancel-->
																	<!--begin::Remove-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Photo">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Remove-->
																	<!--end::Label-->
																</div>                                             
															</div>
															<!--end::Image input-->
														</div>
													</div>
													<!--end::Pic-->
												</div>
												<!--end::Heading-->
												<div class="p-9">
													<div class="teacher_step_1">
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
																<input type="text" class="form-control" placeholder="Second Name" name="t_s_name" id="t-s-name" />
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
														<!--begin::Input group-->
														<div class="row mb-5">
															<div class="col-md-3 fv-row">
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Email</span>
																</label>
															</div>
															<div class="col-md-8 fv-row">
																<input type="email" class="form-control" placeholder="example@gmail.com" name="t_email" id="t_email" />
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the email</span>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<div class="col-md-3 fv-row">
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Password</span>
																</label>
															</div>
															<div class="col-md-8 fv-row">
																<input type="password" class="form-control" placeholder="*******" name="t_password" id="t_password" />
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the Password!</span>
															</div>
														</div>
														<!--end::Input group-->
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
																	<span class="required">Class</span>
																</label>
															</div>
															<div class="col-md-8 fv-row">
																<select class="form-select form-select-solid" name="t_class" id="t_class" data-control="select2" data-hide-search="true" data-placeholder="Select Class">
																	<option value="">Select Class</option>
																	@foreach($class as $classes)
																	<option value="{{$classes->id}}">{{$classes->class}}</option>
																	@endforeach
																</select>
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the class!</span>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="separator mb-4"></div>
														<div class="d-flex justify-content-between mb-5 teacher_step_1_next" style="margin-right:20px;">
															<span class="btn btn-light-primary ms-auto">Next</span>
														</div>
														<!--end::Actions-->
													</div>	
													<div class="teacher_step_known d-none">
														<!--begin::Input group-->
														<div class="mb-5 text-center">
															<!--begin::Description-->
															<div class="text-muted fw-semibold fs-4 mb-9">Select Yr Role</div>
															<!--end::Description-->
														</div>
														<div class="row mb-5">															
															<div class="col-md-4 mb-4 fv-row">															
																<label for="subject1" class="form-check">
																	<input type="checkbox" id="head_teacher" name="role[]" value="Head Teacher" class="form-check-input">
																	<span class="text-gray-400 fs-5">Head Teacher</span>
																</label>
															</div>	
															<div class="col-md-4 mb-4 fv-row">															
																<label for="subject1" class="form-check">
																	<input type="checkbox" id="descipline_commit" name="role[]" value="Head of Discipline Commit" class="form-check-input">
																	<span class="text-gray-400 fs-5">Head of Discipline Commit</span>
																</label>
															</div>
															<div class="col-md-4 mb-4 fv-row">															
																<label for="subject1" class="form-check">
																	<input type="checkbox" id="head_staff" name="role[]" value="Head of Staff" class="form-check-input">
																	<span class="text-gray-400 fs-5">Head of Staff</span>
																</label>
															</div>
															<div class="col-md-4 mb-4 fv-row">															
																<label for="subject1" class="form-check">
																	<input type="checkbox" id="dos" name="role[]" value="Director of Studies" class="form-check-input">
																	<span class="text-gray-400 fs-5">Director of Studies</span>
																</label>
															</div>
															<div class="col-md-4 mb-4 fv-row">															
																<label for="subject1" class="form-check">
																	<input type="checkbox" id="deputy_headteacher" name="role[]" value="Deputy Head Teacher" class="form-check-input">
																	<span class="text-gray-400 fs-5">Deputy Head Teacher</span>
																</label>
															</div>																														
															<div class="col-md-4 mb-4 fv-row">															
																<label for="subject1" class="form-check">
																	<input type="checkbox" id="class_teacher" name="role[]" value="Class Teacher" class="form-check-input">
																	<span class="text-gray-400 fs-5">Class Teacher</span>
																</label>
															</div>
															<div class="col-md-4 mb-4 fv-row">															
																<label for="subject1" class="form-check">
																	<input type="checkbox" id="lab_tech" name="role[]" value="Lab Techinician" class="form-check-input">
																	<span class="text-gray-400 fs-5">Lab Techinician</span>
																</label>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="separator mb-4"></div>
														<div class="d-flex justify-content-between mb-9" style="margin-left:15px;margin-right:20px;">
															<span id="teacher_step_known_back" class="btn btn-light-primary">Back</span>
															<span id="teacher_step_known_next" class="btn btn-light-primary">Next</span>
														</div>
														<!--end::Actions-->
													</div>
													<div class="teacher_step_2 d-none">
														<!--begin::Input group-->
														<div class="mb-5 text-center">
															<!--begin::Description-->
															<div class="text-muted fw-semibold fs-4 mb-9">Select The subject you Offer</div>
															<!--end::Description-->
														</div>
														<div class="row mb-5">
															@foreach($subject as $subjects)
																<div class="col-md-3 mb-4 fv-row">															
																	<label for="subject1" class="form-check">
																		<input type="checkbox" id="{{$subjects->subject}}" name="subjects[]" value="{{$subjects->id}}" class="form-check-input">
																		<span class="text-gray-400 fs-5">{{$subjects->code}}</span>
																	</label>
																</div>	
															@endforeach															
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="separator mb-4"></div>
														<div class="d-flex justify-content-between mb-9" style="margin-left:15px;margin-right:20px;">
															<span id="teacher_step_two_back" class="btn btn-light-primary">Back</span>
															<span id="teacher_step_two_Next" class="btn btn-light-primary">Next</span>
														</div>
														<!--end::Actions-->
													</div>
													<div class="teacher_step_3 d-none">
														<!--begin::Input group-->
														<div class="row mb-5">
															<div class="col-md-3 fv-row">
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Gender</span>
																</label>
															</div>
															<div class="col-md-8 fv-row">
																<select class="form-select form-select-solid" name="t_gender" id="t_gender" data-control="select2" data-hide-search="true" data-placeholder="Select gender" name="target_assign">
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
																<input type="date" class="form-control" name="t_dob" id="t_dob" />
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the Date of Birth!</span>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="separator mb-4"></div>
														<div class="d-flex justify-content-between mb-9" style="margin-left:15px;margin-right:20px;">
															<span id="teacher_step_three_back" class="btn btn-light-primary me-3">Back</span>
															<button type="submit" id="teacher_submit" class="btn btn-primary">Create</button>
														</div>
														<!--end::Actions-->
													</div>
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
						<!--end::Modal - create_teacher-->

						<!--begin::Modal - create_student-->
							<div class="modal fade" id="create_student" tabindex="-1" aria-hidden="true">
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
											<form id="student_form">
												@csrf
												<!--begin::Heading-->
												<div class="mb-1 text-center">
													<!--begin::Title-->
													<h1 class="mb-3">Create Student Details</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-semibold fs-5 mb-9">A person enrolled in a school or other educational institution</div>
													<!--end::Description-->
													<!--begin: Pic-->
													<!--begin: Pic-->
													<div class="mb-0">
														<div class="symbol symbol-fixed position-relative">
															<!--begin::Image input-->
															<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
																<!--begin::Preview existing avatar-->
																<div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
																	<!--end::Preview existing avatar-->
																	<!--begin::Label-->
																	<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Photo">
																		<i class="bi bi-pencil-fill fs-7"></i>
																		<!--begin::Inputs-->
																		<input type="file" name="s_image" id="s_image" accept=".png, .jpg, .jpeg" />
																		<input type="hidden" name="avatar_remove" />
																		<input type="hidden" name="Objekt_uuid" id="Objekt_uuid" value="" />
																		<!--end::Inputs-->
																	</label>                                                   
																	<!--begin::Cancel-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Photo">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Cancel-->
																	<!--begin::Remove-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Photo">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Remove-->
																	<!--end::Label-->
																</div>                                             
															</div>
															<!--end::Image input-->
														</div>
													</div>
													<!--end::Pic-->
												</div>
												<!--end::Heading-->
												<div style="margin-left:30px;">
													<!--begin::Input group-->
													<div class="step_1">
														<div class="row mb-5">
															<div class="col-md-3 fv-row">
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Names</span>
																</label>
															</div>
															<div class="col-md-4 fv-row">
																<input type="text" class="form-control" placeholder="First Name" name="s_f_name" id="s-f-name" />
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the First Name!</span>
															</div>
															<div class="col-md-4 fv-row">
																<input type="text" class="form-control" placeholder="Second Name" name="s_s_name" id="s-s-name" />
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the Second Name!</span>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<div class="col-md-3 fv-row">
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Email</span>
																</label>
															</div>
															<div class="col-md-8 fv-row">
																<input type="email" class="form-control" name="s_email" id="s_email" />
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the email</span>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<div class="col-md-3 fv-row">
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Password</span>
																</label>
															</div>
															<div class="col-md-8 fv-row">
																<input type="password" class="form-control" name="s_password" id="s_password" />
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the Password!</span>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<div class="col-md-3 fv-row">
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Roll ID</span>
																</label>
															</div>
															<div class="col-md-8 fv-row">
																<input type="number" class="form-control" placeholder=" eg. 45309" name="s_roll_id" id="s_roll_id" />
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the roll id!</span>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<div class="col-md-3 fv-row">
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Class</span>
																</label>
															</div>
															<div class="col-md-8 fv-row">
																<select class="form-select form-select-solid" name="s_class" id="s_class" data-control="select2" data-hide-search="true" data-placeholder="Select Class">
																	<option value="">Select Class</option>
																	@foreach($class as $classes)
																	<option value="{{$classes->id}}">{{$classes->class}}</option>
																	@endforeach
																</select>
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the class!</span>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="separator mb-4"></div>
														<div class="d-flex justify-content-between mb-5 step_1_next" style="margin-right:20px;">
															<span class="btn btn-light-primary ms-auto">Next</span>
														</div>
														<!--end::Actions-->
													</div>
													<div class="step_2 d-none">
														<!--begin::Input group-->
														<div class="mb-5 text-center">
															<!--begin::Description-->
															<div class="text-muted fw-semibold fs-4 mb-9">Select The subject you Offer</div>
															<!--end::Description-->
														</div>
														<div class="row mb-5">
															@foreach($subject as $subjects)
																<div class="col-md-3 mb-4 fv-row">															
																	<label for="subject1" class="form-check">
																		<input type="checkbox" id="{{$subjects->subject}}" name="subjects[]" value="{{$subjects->id}}" class="form-check-input">
																		<span class="text-gray-400 fs-5">{{$subjects->code}}</span>
																	</label>
																</div>	
															@endforeach															
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="separator mb-4"></div>
														<div class="d-flex justify-content-between mb-9" style="margin-left:15px;margin-right:20px;">
															<span id="step_2_Back" class="btn btn-light-primary">Back</span>
															<span id="step_2_Next" class="btn btn-light-primary">Next</span>
														</div>
														<!--end::Actions-->
													</div>
													<div class="d-none step_3">	
														<!--begin::Input group-->
														<div class="row mb-5">
															<div class="col-md-3 fv-row">
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Address</span>
																</label>
															</div>
															<div class="col-md-8 fv-row">
																<input type="text" class="form-control" placeholder="Mutungo plot-123" name="s_address" id="s_address" />
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
																<input type="text" class="form-control" placeholder="+256783499023" name="s_phone" id="s_phone" />
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
																<select class="form-select form-select-solid" name="s_nationality" id="s_nationality" data-control="select2" data-hide-search="true" data-placeholder="Select Nationality" name="target_assign">
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
																<input type="date" class="form-control" name="s_dob" id="s_dob" />
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the Date of Birth!</span>
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
																<select class="form-select form-select-solid" name="s_gender" id="s_gender" data-control="select2" data-hide-search="true" data-placeholder="Select gender" name="target_assign">
																	<option value="">Select gender</option>
																	<option value="Male">Male</option>
																	<option value="Female">Female</option>
																</select>
																<span class="valid-feedback"></span>
																<span class="invalid-feedback">Oops! include the roll id!</span>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="separator mb-4"></div>
														<div class="d-flex justify-content-between mb-9" style="margin-left:15px;margin-right:20px;">
															<span id="step_3_Back" class="btn btn-light-primary">Back</span>
															<button type="submit" id="student_submit" class="btn btn-primary">Create</button>
														</div>
														<!--end::Actions-->
													</div>	
												</div>	
											</form>
											<!--end:Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
						<!--end::Modal - create student-->	
                    </div>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="{{asset('demo1/js/all_jquery.js')}}"></script>
        <script>
            $(document).ready(function(){

				//begin student
					$('#student_id').on('click', function(){
						$('#create_student').modal('show');
					});

					$('.step_1_next').click(function() {						
						$('.step_1').addClass('d-none');
						$('.step_2').removeClass('d-none');
					});

					$('#step_2_Back').click(function() {						
						$('.step_1').removeClass('d-none');
						$('.step_2').addClass('d-none');
					});

					$('#step_2_Next').click(function() {						
						$('.step_2').addClass('d-none');
						$('.step_3').removeClass('d-none');
					});

					$('#step_3_Back').click(function() {						
						$('.step_3').addClass('d-none');
						$('.step_2').removeClass('d-none');
					});

					// Get the form element
					const form = $('#student_form');
					const csrfToken = $('meta[name="csrf-token"]').attr('content');

					// Listen for the form submission event
					form.on('submit', function(event) {
						event.preventDefault(); // Prevent the default form submission

						// Create a new FormData object and append form data
						const formData = new FormData(this);

						// Append the CSRF token to the form data
						formData.append('_token', csrfToken);
						// Send an AJAX request to the Laravel controller
						$.ajax({
							url: '/student-form',
							method: 'POST',
							data: formData,
							processData: false,
							contentType: false,
							success: function(response) {
								// Handle the success response
								console.log(response);
								alert('Student Bio data submitted successfully!');
								window.location.reload();
							},
							error: function(error) {
								// Handle the error response
								console.error(error);
								alert('Error submitting bio data. Please try again.');
							}
						});
					});
				//end student	
 
				//begin teacher
					$('#teacher_id').on('click', function(){
						$('#create_teacher').modal('show');
					});

					$('.teacher_step_1_next').click(function() {						
						$('.teacher_step_1').addClass('d-none');
						$('.teacher_step_known').removeClass('d-none');
					});

					$('#teacher_step_known_next').click(function() {						
						$('.teacher_step_known').addClass('d-none');
						$('.teacher_step_2').removeClass('d-none');
					});

					$('#teacher_step_known_back').click(function() {						
						$('.teacher_step_known').addClass('d-none');
						$('.teacher_step_1').removeClass('d-none');
					});

					$('#teacher_step_two_Next').click(function() {
						$('.teacher_step_2').addClass('d-none');
						$('.teacher_step_3').removeClass('d-none');
					});

					$('#teacher_step_two_back').click(function() {
						$('.teacher_step_2').addClass('d-none');
						$('.teacher_step_known').removeClass('d-none');
					});
					
					$('#teacher_step_three_back').click(function() {
						$('.teacher_step_3').addClass('d-none');
						$('.teacher_step_2').removeClass('d-none');
					});


					// Create teacher button.
					const t_form = $('#teacher_form');
					// Listen for the form submission event
					t_form.on('submit', function(event) {
						event.preventDefault(); // Prevent the default form submission

						// Create a new FormData object and append form data
						const formData = new FormData(this);

						// Append the CSRF token to the form data
						formData.append('_token', csrfToken);
						// Send an AJAX request to the Laravel controller
						$.ajax({
							url: '/teacher-form',
							method: 'POST',
							data: formData,
							processData: false,
							contentType: false,
							success: function(response) {
								// Handle the success response
								console.log(response);
								alert('Teacher Bio data submitted successfully!');
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