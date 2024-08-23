@extends('layout.demo1.master')
@section('title')
My People
@endsection
@section('content')
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
				<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
					<!--begin::Toolbar container-->
					<div class="toolbar" id="kt_toolbar" style="height:100px" >
						<div id="kt_toolbar_container" class="{{ theme()->printHtmlClasses('toolbar-container', false) }} d-flex flex-stack"style="height:0%;width:98.5%">
							<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3" style="margin:1px">
								<!--begin::Title-->
								<div class="d-flex">
									<div class="d-flex me-5 flex-column">
									<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-top my-0">{{$permission_person->count()}} People</h1>
									<div class="mt-2">
									<span class="text-gray-400 text-hover-primary">My People</span>
									</div>
									</div>
									<div class="d-flex justify-content-start flex-column d-none">
										<span class="text-gray-400 text-hover-primary">Oshabe hilary</span></a>
										<span class="text-gray-400 text-hover-primary">number</span></a>
										<span class="text-gray-400 text-hover-primary">Kitintale Zone 12</span></a>					
									</div>
								</div>						
							</div>
							<div class="d-flex align-items-center py-1">
								<a href="#" class="btn btn-sm d-none fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
								<!--end::Secondary button-->
								<span class="me-2">
									<a  class="btn btn-sm btn-icon btn-light btn-active-light-primary" id="create_organisation" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" title="New Organisation">
										<svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
											<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
											<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
										</svg>
									</a>
								</span>
								<span class="me-2">
									<a  class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" title="Actions">
                                        {{--  <span class="svg-icon svg-icon-2 m-0">  --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                    </g>
                                            </svg>
                                        {{--  </span>  --}}
									</a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
                                            <a class="menu-link px-3 pb-4"  href="/Communications/Chat/{Target}"><span class="svg-icon svg-icon-muted svg-icon-1hx me-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                                                    <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
                                                </svg>
                                            </span><span class=" me-2">Meet</span></a>
                                            <a class="menu-link px-3 pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_tab"><span class="svg-icon svg-icon-muted svg-icon-1hx me-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                                                    <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
                                                </svg>
                                            </span><span class=" me-2">Print</span></a>
											</a> <a class="menu-link px-3 pb-4"><span class="svg-icon svg-icon-muted svg-icon-1hx me-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
												</svg>
											</span><span class=" me-2">share</span></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 d-none">
											<a href="#" id="org_create" class="menu-link px-3" data-kt-inbox-listing-filter="filter_oldest">Strategic Priorities</a>
										</div>
									</div>
									<!--end::Menu-->
								</span>
								<span>
									<a class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" title="Setting">
										{{--  <span class="svg-icon svg-icon-2 m-0">  --}}
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
												<path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
												<path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
										</svg>
										{{--  </span>  --}}
									</a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded  menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="/Organisations/Settings/Registrations" class="menu-link px-3" data-kt-inbox-listing-filter="filter_newest">Registrations
											</a>
											<a href="/Setting/Activity_Group" class="menu-link px-3 pb-4" data-kt-inbox-listing-filter="filter_newest"><span class="svg-icon svg-icon-muted svg-icon-1hx me-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
												</svg>
											</span><span class=" me-2">Activity Groups</span></a>
											<a href="/Settings/Registrar/Mandates" class="menu-link px-3 pb-4" data-kt-inbox-listing-filter="filter_newest"><span class="svg-icon svg-icon-muted svg-icon-1hx me-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
												</svg>
											</span><span class=" me-2">Mandates</span></a>

											<a href=" " class="menu-link px-3 pb-4" data-kt-inbox-listing-filter="filter_newest"><span class="svg-icon svg-icon-muted svg-icon-1hx me-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
												</svg>
											</span><span class=" me-2">Product or Service Groups</span></a>

											<a href="/Settings/Registrars" class="menu-link px-3 pb-4" data-kt-inbox-listing-filter="filter_newest"><span class="svg-icon svg-icon-muted svg-icon-1hx me-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
												</svg>
											</span><span class=" me-2">Registrars</span></a>

											<a href="/Settings/Role_Groups" class="menu-link px-3 pb-4" data-kt-inbox-listing-filter="filter_newest"><span class="svg-icon svg-icon-muted svg-icon-1hx me-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
												</svg>
											</span><span class=" me-2">Role Groups</span></a>

										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</span>
								<!--end::Primary button-->
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
                    <div id="kt_app_content_container" class="container-fluid" style="height:0%;width:98.5%">
                        <!--begin::Navbar-->
						@foreach ($permission_person as $new_organisation)
						<div class="card mb-6">
							<div class="card-body pt-9 pb-0">
								<!--begin::Details-->
								<div class="d-flex flex-wrap flex-sm-nowrap">
									<!--begin: Pic-->
									<div class="me-7 mb-4">
										<div class="symbol symbol-fixed position-relative">
										<!--begin::Image input-->
										<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
											<!--begin::Preview existing avatar-->
											<div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
											<!--end::Preview existing avatar-->
											<form method="POST" action="">
												<!--begin::Label-->
												<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Add Photo">
													<i class="bi bi-pencil-fill fs-7"></i>
													<!--begin::Inputs-->
													<input type="file" name="organisation_image" id="organisation_image" accept=".png, .jpg, .jpeg" />
													<input type="hidden" name="avatar_remove" />
													<input type="hidden" name="Objekt_uuid" id="Objekt_uuid" value="{{$new_organisation->uuid}}" />
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
											</form>
											<!--end::Label-->                                             
										</div>
										<!--end::Image input-->
										<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
										</div>
									</div>
									<!--end::Pic-->
									<!--begin::Info-->
									<div class="flex-grow-1">
										<!--begin::Title-->
										<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
											<!--begin::User-->
											<div class="d-flex flex-column">
												<!--begin::Name-->
												<div class="d-flex align-items-center mb-2">
													<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$new_organisation->name}}</a>
													<a href="#">
														<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
																<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</a>
												</div>
												<!--end::Name-->
												<!--begin::Info-->
												<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
													<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<span class="svg-icon svg-icon-4 me-1"><i class="las la-clipboard-list"></i></span>
														<span class="me-3">Chief Executive</span>
														<span class="badge badge-light-primary">Status</span>
													</a>
													<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<span class="svg-icon svg-icon-4 me-1"><i class="las la-map-marker"></i></span>
														<span class="me-2">A45 Akamwesi</span>
													</a>
													<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
														<span class="svg-icon svg-icon-4 me-1"><i class="las la-tty"></i></span>
														<span>Contacts</span> 
													</a>
												</div>
												<!--end::Info-->
											</div>
											<!--end::User-->
											<!--begin::Actions-->
											<div class="d-flex my-4">
												<a href="#" class="btn btn-sm btn-light me-2">
													<span class="indicator-label">Registrations</span>
												</a>
												<a href="#" class="btn btn-sm btn-light me-2">
													<span class="indicator-label">Relationships</span>
												</a>
												<a href="#" class="btn btn-sm btn-light me-2">
													<span class="indicator-label">Purposes</span>
												</a>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Title-->
										<!--begin::Stats-->
										<div class="d-flex flex-wrap flex-stack">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column flex-grow-1 pe-8">
												<!--begin::Stats-->
												<div class="d-flex flex-wrap">
													<!--begin::Stat-->
													<a href="#" class="border border-gray-300 text-gray-400 text-hover-primary border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<div class="fs-2 fw-bold">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-semibold fs-6">Resources</div>
														<!--end::Label-->
													</a>
													<!--end::Stat-->
													<!--begin::Stat-->
													<a href="#" class="border border-gray-300 text-gray-400 text-hover-primary border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<div class="fs-2 fw-bold">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-semibold fs-6">Suppliers</div>
														<!--end::Label-->
													</a>
													<!--end::Stat-->
													<!--begin::Stat-->
													<a href="#" class="border border-gray-300 text-gray-400 text-hover-primary border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<div class="fs-2 fw-bold">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-semibold fs-6">Products</div>
														<!--end::Label-->
													</a>
													<!--end::Stat-->
													<!--begin::Stat-->
													<a href="#" class="border border-gray-300 text-gray-400 text-hover-primary border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<div class="fs-2 fw-bold">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-semibold fs-6">Market</div>
														<!--end::Label-->
													</a>
													<!--end::Stat-->
													<!--begin::Stat-->
													<a href="#" class="border border-gray-300 text-gray-400 text-hover-primary border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<div class="fs-2 fw-bold">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-semibold fs-6">Finances</div>
														<!--end::Label-->
													</a>
													<!--end::Stat-->
													<!--begin::Stat-->
													<a href="#" class="border border-gray-300 text-gray-400 text-hover-primary border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<div class="fs-2 fw-bold">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-semibold fs-6">Risks</div>
														<!--end::Label-->
													</a>
													<!--end::Stat-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Progress-->
											<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
												<div class="rating">
													<div class="rating-label me-2 checked">
														<i class="bi bi-star-fill fs-5"></i>
													</div>
													<div class="rating-label me-2 checked">
														<i class="bi bi-star-fill fs-5"></i>
													</div>
													<div class="rating-label me-2 checked">
														<i class="bi bi-star-fill fs-5"></i>
													</div>
													<div class="rating-label me-2 checked">
														<i class="bi bi-star-fill fs-5"></i>
													</div>
													<div class="rating-label me-2 checked">
														<i class="bi bi-star-fill fs-5"></i>
													</div>
												</div>
											</div>
											<!--end::Progress-->
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Details-->
							</div>
						</div>
						@endforeach
						<!--end::Navbar-->


                        <div class="row g-6 g-xl-9">
                        <!--begin::Col-->
                        @foreach ($permission_person as $new_organisation)
                            <!--begin::Col-->
                            <div class="col-md-6 col-xl-6">
                                <!--begin::Chart widget 32-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5 mb-11">
                                        <!--begin::Title-->
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-55px me-5 flex-shrink-0">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-70px h-70px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <form method="POST" action="">
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Edit Logo">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="organisation_image" id="organisation_image" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <input type="hidden" name="Objekt_uuid" id="Objekt_uuid" value="{{$new_organisation->uuid}}" />
                                                            <!--end::Inputs-->
                                                        </label>                                                   
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-bo-input-action="remove" data-bs-toggle="tooltip" title="Remove Logo">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </form>
                                                    <!--end::Label-->                                             
                                                </div>
                                                <!--end::Image input-->
                                            </div>                                
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1 edit_org_id" data-record-name="{{ $new_organisation->name }}" data-record-id="{{ $new_organisation->uuid }}" data-bs-toggle="tooltip" title="Edit Name">{{$new_organisation->name}}
                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                                                            <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <!--begin::Info-->
                                                <a href="#" class="d-flex align-items-center fw-semibold text-gray-400 text-hover-primary mb-1 jobbs_id" data-bs-toggle="tooltip" title="0 Jobs">
                                                    <span class="svg-icon svg-icon-4 me-1"><i class="las la-clipboard-list"></i></span>
                                                    <span>Chief Executive &nbsp;</span>
                                                    <span class="badge badge-light-primary">Status</span>
                                                </a>
                                                <!--end::Info-->
                                                <span>
                                                    <a href="#" class="text-gray-400 text-hover-primary mb-1 me-2 address_id" data-record-id="{{ $new_organisation->uuid }}" data-bs-toggle="tooltip" title="0 Addresses">
                                                        <span class="svg-icon svg-icon-4 me-1 mb-2"> <i class="las la-map-marker"></i></span>
                                                        <span class="me-2">A45 Akamwesi</span>
                                                    </a>
                                                    <a href="#" class="text-gray-400 text-hover-primary mb-1 me-2 contact_id" data-record-id="{{ $new_organisation->uuid }}" data-bs-toggle="tooltip" title="0 Contacts">
                                                        <span class="svg-icon svg-icon-4 me-1 mb-2"><i class="las la-tty"></i></span>
                                                        <span>Contacts</span> 
                                                    </a>                                                                                            
                                                </span>                                       
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                                <!--begin::Menu-->
                                            <span class="me-2">
                                                <a  class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" title="Actions">
                                                <i class="bi bi-grid" style="font-size:16px"></i>
                                                <i class="bi bi-grid-fill d-none" style="font-size:16px"></i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-rounded menu-state-bg-light-primary py-0" style="width:435px;" data-kt-menu="true">
                                                    <div class="row mt-0 ml-0">
                                                        <!--begin::Col-->
                                                        <div class="col mt-4 ">
                                                            <!--begin::Tab link-->                                                              
                                                            <label class="btn d-flex text-hover-primary btn-outline-secondary border-0 text-gray mx-3 m-1" style="padding: 5px; border: 0px solid transparent; color: gray;" onmouseout="this.style.border='0px solid lightgray';" onmouseover="this.style.border='0px solid transparent';">
                                                                <!--end::Description-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Radio-->
                                                                    <span class="svg-icon svg-icon-muted svg-icon-4hx me-6">
                                                                        <a  class="btn btn-sm btn-icon btn-light btn-active-light-primary">
                                                                        <i class="las la-users" style="font-size:19px"></i>
                                                                        </a>
                                                                    </span>
                                                                    <!--end::Radio-->
                                                                    <!--begin::Info-->
                                                                    <div class="">
                                                                        <div class="d-flex align-items-center  fw-bold flex-wrap">0 Meetings</div>
                                                                        <div class="text-gray fs-7">whats a meeting</div>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Description-->
                                                            </label>
                                                            <!--end::Tab link--> 
                                                            <label class="btn d-flex text-hover-primary btn-outline-secondary border-0 text-gray mx-3 m-1" style="padding: 5px; border: 0px solid transparent; color: gray;" onmouseout="this.style.border='0px solid lightgray';" onmouseover="this.style.border='0px solid transparent';">
                                                                <!--end::Description-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Radio-->
                                                                    <span class="svg-icon svg-icon-muted svg-icon-4hx me-6">
                                                                        <a  class="btn btn-sm btn-icon btn-light btn-active-light-primary">
                                                                        <i class="las las la-share-alt-square" style="font-size:19px"></i>
                                                                        </a>
                                                                    </span>
                                                                    <!--end::Radio-->
                                                                    <!--begin::Info-->
                                                                    <div class="">
                                                                        <div class="d-flex align-items-center  fw-bold flex-wrap">0 Share</div>
                                                                        <div class="text-gray fs-7">whats share</div>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Description-->
                                                            </label>                                                
                                                            <!--begin::Tab link-->
                                                            <label class="btn d-flex text-hover-primary btn-outline-secondary border-0 text-gray mx-3 m-3" style="padding: 5px; border: 0px solid transparent; color: gray;" onmouseout="this.style.border='0px solid lightgray';" onmouseover="this.style.border='0px solid transparent';">
                                                                <!--end::Description-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Radio-->
                                                                    <span class="svg-icon svg-icon-muted svg-icon-2hx me-6">
                                                                        <a  class="btn btn-sm btn-icon btn-light btn-active-light-primary">
                                                                        <i class="las la-print" style="font-size:25px"></i>
                                                                        </a>
                                                                    </span>
                                                                    <!--end::Radio-->
                                                                    <!--begin::Info-->
                                                                    <div class="flex-grow-0">
                                                                        <div class="d-flex align-items-center fw-bold flex-wrap"> 0 Print</div>
                                                                        <div class="fw-semibold fs-7"> Whats  printing</div>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Description-->
                                                            </label>

                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Tab content-->
                                                            <div class="rounded h-100 w-100 bg-light p-10">                                                            
                                                                <!--begin::Heading-->
                                                                <div class="fw-bold fs-6"> Add</div>
                                                                <!--end::Heading-->
                                                                <!--begin::Body-->
                                                                <div class="pt-1">
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center text-hover-primary mb-2">
                                                                        <span class="fw-semibold fs-7  create_registration_person"data-record-name="{{ $new_organisation->name }}" data-record-id="{{ $new_organisation->uuid }}">Registration</span>
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                        <span class="svg-icon svg-icon-1 svg-icon-success d-none">0</span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center mb-2">
                                                                        <span class="fw-semibold fs-7 text-gray-700 flex-grow-1">Key Person</span>
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                        <span class="svg-icon svg-icon-1 svg-icon-success d-none">0</span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex align-items-center mb-2">
                                                                        <span class="fw-semibold fs-7 text-gray-700 flex-grow-1">Purpose</span>
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                        <span class="svg-icon svg-icon-1 svg-icon-success d-none">0</span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <div class="d-flex align-items-center mb-2">
                                                                        <span class="fw-semibold fs-7 text-gray-700 flex-grow-1">Review</span>
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                        <span class="svg-icon svg-icon-1 svg-icon-success d-none">0</span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Body-->                                                              
                                                            </div>
                                                            <!--end::Tab content-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                                <!--end::Menu-->
                                            </span>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="d-flex flex-column justify-content-between pb-5 px-0">
                                        <!--begin::Nav-->                                
                                        <ul class="nav nav-pills nav-pills-custom item position-relative mx-9">
                                            <!--begin::Item-->
                                            <li class="nav-item flex-grow-0 flex-shrink-1">
                                                <!--begin::Link-->
                                                <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" id="kt_charts_widget_32_tab_1{{$new_organisation->uuid}}" data-bs-toggle="pill" href="#kt_charts_widget_32_tab_content_1{{$new_organisation->uuid}}">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-7 mb-3"><span class="badge badge-secondary me-3">0</span> Registrations</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item flex-grow-0 flex-shrink-1">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" id="kt_charts_widget_32_tab_2{{$new_organisation->uuid}}" href="#kt_charts_widget_32_tab_content_2{{$new_organisation->uuid}}">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-7 mb-3"><span class="badge badge-secondary me-3">0</span> Key People</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item flex-grow-0 flex-shrink-1">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" id="kt_charts_widget_32_tab_3{{$new_organisation->uuid}}" href="#kt_charts_widget_32_tab_content_3{{$new_organisation->uuid}}">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-7 mb-3"><span class="badge badge-secondary me-3">0</span> Purposes</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" id="kt_charts_widget_32_tab_4{{$new_organisation->uuid}}" href="#kt_charts_widget_32_tab_content_4{{$new_organisation->uuid}}">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-7 mb-3"><span class="badge badge-secondary me-3">0</span> Review 4.5 <i class="bi bi-star-fill fs-5" style="color:orange;"></i><i class="bi bi-star-fill fs-5" style="color:orange;"></i><i class="bi bi-star-fill fs-5" style="color:orange;"></i><i class="bi bi-star-fill fs-5" style="color:orange;"></i><i class="bi bi-star-fill fs-5" style="color:orange;"></i></span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Bullet-->
                                            <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                                            <!--end::Bullet-->
                                        </ul>
                                        <!--end::Nav-->
                                        <!--begin::Tab Content-->
                                        <div class="tab-content ps-8 pe-8">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade active show" id="kt_charts_widget_32_tab_content_1{{$new_organisation->uuid}}">
                                                <!--begin::Tables Widget 12-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fw-bold text-muted bg-light">
                                                                <th class="ps-4 min-w-300px rounded-start">Registration</th>
                                                                <th class="min-w-150px">Date</th>
                                                                <th class="min-w-150px">Registrar</th>
                                                                <th class="min-w-70px">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        @php       
                                                            $objekt_uuiood=DB::table('registrar_mandates')->join('g_z677_s','g_z677_s.registrar_mandate',"registrar_mandates.uuid")
                                                            ->join('objkt_reg_details',"objkt_reg_details.gz677",'g_z677_s.uuid')
                                                            ->join('registration_types','registration_types.uuid','g_z677_s.registration_type')
                                                            ->join('product_service_groups','product_service_groups.uuid','registration_types.p_s_class_uuid')
                                                            ->join('gw3rgs','gw3rgs.uuid','objkt_reg_details.Objekt')
                                                            ->join(DB::raw('(SELECT Table_record, 
                                                                            MAX(CASE WHEN Date_purpose = "Registration Start Date" THEN Date ELSE NULL END) as start_date,
                                                                            MAX(CASE WHEN Date_purpose = "Registration End Date" THEN Date ELSE NULL END) as end_date
                                                                            FROM objkt_date_info_purposes
                                                                            GROUP BY Table_record) objkt_date_info_purposes'), 
                                                                            'objkt_reg_details.uuid', '=', 'objkt_date_info_purposes.Table_record'
                                                            )
                                                            ->where('gw3rgs.uuid', $new_organisation->uuid)
                                                            ->select('gw3rgs.objekt_name as name','gw3rgs.uuid as uuid','objkt_date_info_purposes.start_date', 'objkt_date_info_purposes.end_date','objkt_reg_details.uuid as reg_details_uuid',
                                                            'objkt_reg_details.Registration_num as number','objkt_reg_details.status as status','product_service_groups.name as registration_type','objkt_reg_details.Registration_num as number')
                                                            ->get();
                                                            //->paginate(2);
                                                            //dd($objekt_uuiood);                                               
                                                        @endphp
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            @foreach($objekt_uuiood as $objekt_uuioods)
                                                            <tr Class="text-gray-400 text-hover-primary" data-bs-toggle="tooltip" title="View">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50px me-5">
                                                                        </div>
                                                                        <div class="d-flex justify-content-start flex-column">
                                                                            <span class="d-block fs-7">{{$objekt_uuioods->registration_type}}</span>
                                                                            <span class="d-block fs-7">Number : {{$objekt_uuioods->number}}</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="d-block fs-7">{{$objekt_uuioods->start_date}}</span>
                                                                    <span class="d-block fs-7">{{$objekt_uuioods->end_date}}</span>
                                                                </td>
                                                                    @php 
                                                                        $registruuu=DB::table('gw3rgs')->join('product_service_groups','product_service_groups.objekt_uuid','gw3rgs.uuid')
                                                                        ->where("product_service_groups.name",$objekt_uuioods->registration_type)
                                                                        ->select('gw3rgs.objekt_name as registrar_name')
                                                                        ->get();
                                                                        //dd($registruuu); 
                                                                    @endphp 
                                                                <td>
                                                                    <span class="d-block fs-7">@foreach ($registruuu as $registruuus){{$registruuus->registrar_name}} @endforeach</span>
                                                                </td>  
                                                                <td>
                                                                    <span class="badge badge-light-primary">{{$objekt_uuioods->status}}</span>
                                                                </td>                                                       
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_charts_widget_32_tab_content_2{{$new_organisation->uuid}}">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                                <th class="p-0 w-200px w-xxl-450px">Type</th>
                                                                <th class="p-0 min-w-150px">Registrar</th>
                                                                <th class="p-0 min-w-150px">Number</th>
                                                                <th class="p-0 min-w-190px">Validity</th>
                                                                <th class="p-0 w-50px"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-40px me-3">
                                                                            <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                                                        </div>
                                                                        <div class="d-flex justify-content-start flex-column">
                                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                                            <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                                                    <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                                                    <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                                </td>
                                                                <td>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                    </div>
                                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                                                                                <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                                                                            </svg>
                                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_charts_widget_32_tab_content_3{{$new_organisation->uuid}}">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                                <th class="p-0 w-200px w-xxl-450px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-190px"></th>
                                                                <th class="p-0 w-50px"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-40px me-3">
                                                                            <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                                                        </div>
                                                                        <div class="d-flex justify-content-start flex-column">
                                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">hilton</a>
                                                                            <span class="text-muted fw-semibold d-block fs-7">limoja</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">0</span>
                                                                    <span class="fw-semibold text-gray-400 d-block">0</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">0</a>
                                                                    <span class="text-muted fw-semibold d-block fs-7">01</span>
                                                                </td>
                                                                <td>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                    </div>
                                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                                                                                <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                                                                            </svg>
                                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_charts_widget_32_tab_content_4{{$new_organisation->uuid}}">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                                <th class="p-0 w-200px w-xxl-450px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-190px"></th>
                                                                <th class="p-0 w-50px"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-40px me-3">
                                                                            <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                                                        </div>
                                                                        <div class="d-flex justify-content-start flex-column">
                                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">hilton</a>
                                                                            <span class="text-muted fw-semibold d-block fs-7">limoja</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bold d-block mb-1 fs-6">0</span>
                                                                    <span class="fw-semibold text-gray-400 d-block">0</span>
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">0</a>
                                                                    <span class="text-muted fw-semibold d-block fs-7">01</span>
                                                                </td>
                                                                <td>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                        <div class="rating-label me-1 checked">
                                                                            <i class="bi bi-star-fill fs-6s"></i>
                                                                        </div>
                                                                    </div>
                                                                    <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                                                                                <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                                                                            </svg>
                                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                    <!--end: Card Body-->
                                </div>
                                <!--end::Chart widget 32-->
                            </div>
                            <!--end::Col-->
                        @endforeach
                    </div>


                    </div>
                </div>
            </div>
        </div>

        <!--begin::Modal - New Organisation -->
			<div class="modal fade" id="permssn_Orgn" tabindex="-1" role="dialog" aria-labelledby="exampl" aria-hidden="true">
				<div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body text-centered">
                            <form class="form mb-10" id="Org_perm_form" >
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
                                <!--end::Modal header-->
                                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-0 mb-10">
                                    <!--begin::Content-->
                                    <div class="text-center mb-15">
                                        <h1 class="mb-3">Create a Person</h1>
                                        <div class="text-muted fw-semibold fs-5 mb-7">...</div>
                                        <!--begin::Input group-->
                                    </div>
                                    <!--end::Content-->
                                    <!--end::Notice-->
                                    <div class="row mb-5">
                                        <div class="col-md-3 fv-row">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Registrar</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9 fv-row">
                                            <select  id="org_register" class="form-control" name="org_register">
                                                <option value=""> Select Registrar</option>
                                                @foreach ($registr as $data)
                                                <option value="{{$data->uuid}}">
                                                    {{$data->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--begin::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <div class="col-md-3 fv-row">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Registration Type</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9 fv-row">
                                        <select id="org_type" class="form-control" name="org_type">
                                        </select>
                                        </div>
                                    </div>
                                    <!--begin::Input group-->
									<!--begin::Input group-->
                                    <div class="row mb-7">
                                        <div class="col-md-3 fv-row">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Registration Number</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9 fv-row">
											<input class="form-control" placeholder="" name="org_num" id="org_num" />
											<span class="valid-feedback"></span>
											<span class="invalid-feedback">Oops! include the Registration Number!</span>
                                        </div>
                                    </div>
                                    <!--begin::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-5">
                                        <div class="col-md-3 fv-row">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Registered Names</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9 fv-row">
                                        <input type="text" class="form-control" name="org_name" id="org_name" />
                                        <span class="valid-feedback"></span>
                                        <span class="invalid-feedback">Oops! include the Registered Name!</span>
                                        </div>
                                    </div>
                                    <!--begin::Input group-->
									<!--begin::Input group-->
                                    <div class="row mb-7">
                                        <div class="col-md-3 fv-row">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Validity Period</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4 fv-row">
											<input type="text" placeholder="Start Date" class="form-control form-control-solid date" autocomplete="off" name="org_start" id="org_start" readonly />
                                            <span class="valid-feedback"></span>
                                            <span class="invalid-feedback">Oops! include the Start Date!</span>
                                            <!--end::Input-->
                                        </div>
										<div class="col-md-4 fv-row">
											<input placeholder="Expiry Date" class="form-control form-control-solid date" autocomplete="off" name="org_expire" id="org_expire" value="" readonly />
                                            <span class="valid-feedback"></span>
                                            <span class="invalid-feedback">Oops! include the Expiry date!</span>
                                        </div>
                                    </div>
                                    @csrf
                                    <!--begin::Input group-->
                                    <!--end::Modal body-->
                                </div>                          
                            </form>
								<div class="text-center">
                                    <button type="reset" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" value="Submit" id="org_submit" class="btn btn-light-primary">Create</button>
                                </div>
                        </div>
                    </div>
				</div>
			</div>
		<!--end::Modal - New Organisation-->

		<!--begin::Modal - Person Registration -->
        <div class="modal fade" id="person_registration_modal" tabindex="-1" role="dialog" aria-labelledby="exampl" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body text-centered">
                        <form class="form mb-10" id="registration_form">
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
                            <!--end::Modal header-->
                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-0 mb-10">
                                <!--begin::Content-->
                                <div class="text-center mb-15">
                                    <h1 class="mb-3">Add a Registration</h1>
                                    <div class="text-muted fw-semibold fs-5 mb-7">Add Registration Details to <span class="reg_details"></span></div>
                                    <!--begin::Input group-->
                                </div>
                                <!--end::Content-->
                                <!--end::Notice-->
                                <div class="row mb-5">
                                    <div class="col-md-3 fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required">Registrar</span>
                                        </label>
                                    </div>
                                    <div class="col-md-9 fv-row">
                                        <select id="registration_registrar" class="form-control" name="registration_registrar">
                                            <option value=""> Select Registrar</option>
                                            @foreach ($registr as $data)
                                            <option value="{{$data->uuid}}">
                                                {{$data->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--begin::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <div class="col-md-3 fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required">Registration Type</span>
                                        </label>
                                    </div>
                                    <div class="col-md-9 fv-row">
                                        <select id="registration_type" class="form-control" name="registration_type">
                                        </select>
                                    </div>
                                </div>
                                <!--begin::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <div class="col-md-3 fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required">Registration Number</span>
                                        </label>
                                    </div>
                                    <div class="col-md-9 fv-row">
                                        <input class="form-control" placeholder="" name="registration_number" id="registration_number" />
                                        <span class="valid-feedback"></span>
                                        <span class="invalid-feedback">Oops! include the Registration Number!</span>
                                    </div>
                                </div>
                                <!--begin::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <div class="col-md-3 fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Registered Names</span>
                                                </label>
                                    </div>
                                    <div class="col-md-9 fv-row">
                                        <input type="text" class="form-control" name="registration_name" id="registration_name" />
                                        <span class="valid-feedback"></span>
                                        <span class="invalid-feedback">Oops! include the Registration Name!</span>
                                    </div>
                                </div>
                                <!--begin::Input group-->
                                <input type="hidden" class="form-control" value=""  name="organisation_name" id="organisation_name" />
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <div class="col-md-3 fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required">Validity Period</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input type="text" placeholder="Start Date" class="form-control form-control-solid date" autocomplete="off" name="registration_start_date" id="registration_start_date" readonly />
                                        <span class="valid-feedback"></span>
                                        <span class="invalid-feedback">Oops! include the Start Date!</span>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-md-4 fv-row">
                                        <input placeholder="Expiry Date" class="form-control form-control-solid date" autocomplete="off" name="registration_end_date" id="registration_end_date" value="" readonly />
                                        <span class="valid-feedback"></span>
                                        <span class="invalid-feedback">Oops! include the Expiry date!</span>
                                    </div>
                                </div>
                                @csrf
                                <!--begin::Input group-->
                                <!--end::Modal body-->
                            </div>
                        </form>
                        <div class="text-center">
                            <button type="reset" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" value="Submit" id="registration_submit" class="btn btn-light-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	<!--end::Modal - Person Organisation-->

		<!--begin::Modal - Contacts-->
			<div class="modal fade" id="All_person_registration_modal" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-1000px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Form-->
						<form class="form" action="#" id="kt_modal_new_address_form">
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
							<div class="modal-body py-10 px-lg-17">
								<!--begin::Heading-->
								<div class="text-center mb-6">
									<!--begin::Title-->
									<h1 class="mb-3">Registrations</h1>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-5">..........</div>
									<!--end::Description-->
								</div>
								<!--end::Heading-->
								<!--begin::Google Contacts Invite-->
								<div class="btn btn-light-primary fw-bold w-100 mb-1 add_registration">Add a Registration</div>
								<!--end::Google Contacts Invite-->
								<!--begin::Users-->
								<div class="mb-10">
									<!--begin::Heading-->
									<div class="fs-6 fw-semibold mb-2"></div>
									<!--end::Heading-->
									<!--begin::Scroll-->
									<div class="mh-300px scroll-y me-n7 pe-7 the_body">
										<!--begin::User-->
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table align-middle gs-0 gy-4 my_table">
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted bg-light">
														<th class="ps-4 min-w-325px rounded-start">Registration</th>
														<th class="min-w-125px">Date</th>
														<th class="min-w-125px">Registrar</th>
														<th class="min-w-20x">Status</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--end::Scroll-->
								</div>
							</div>
							<!--end::Modal body-->
							<!--begin::Modal footer-->
							<div class="modal-footer flex-center">
								<!--begin::Button-->
								<button type="reset" class="btn btn-secondary me-3" data-bs-dismiss="modal">Close</button>
								<!--end::Button-->
							</div>
							<!--end::Modal footer-->
						</form>
						<!--end::Form-->
					</div>
				</div>
			</div>
		<!--End::Modal -Contacts -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
		<script type="text/javascript">  
			$('.date').datepicker({    
				dateFormat: "d-M-yy",
				changeMonth: true,
				changeYear: true,
				yearRange: "-40:+40",
				border:"solid"
			
			});    
		</script>

        <script>       
            $(document).ready(function(){

				$('.create_registration_person').on('click', function(){

					var recordName = $(this).data('record-name');
						$('.reg_details').text(recordName);

					var recordId = $(this).data('record-id');
						$('#organisation_name').val(recordId);

					$.ajax({
						type: 'GET',
						url: '/Show_registration',
						data: {
							show_details:recordId
						},
						success: function(data) {
							$('#All_person_registration_modal tbody').empty();
							$.each(data, function(index, item) {
							var row = $('<tr>').addClass('text-gray-400 text-hover-primary');
							row.append($('<td>').append($('<div>').text(item.registration_type)).append($('<div>').text(item.number)));
							row.append($('<td>').append($('<div>').text(item.start_date)).append($('<div>').text(item.end_date)));
							row.append($('<td>').text('Registrar'));
							var status = $('<span>').addClass('badge badge-light-primary').text(item.status);
							row.append($('<td>').append(status));
							$('.my_table tbody').append(row);
							});
							$('#All_person_registration_modal').modal('show');
						}
					});	

					$('.add_registration').on('click', function(){
						$('#All_person_registration_modal').modal('hide');
						$('#person_registration_modal').modal('show');

						$('#registration_submit').on('click', function() {
							var the_organisation = $('#organisation_name').val();
							//alert(the_organisation);
							$('#registration_submit').addClass('spinner spinner-white spinner-right').text('Creating ...');
							$.ajax({
								url: '/saving_registration',
								method: 'post',
								data: {
									registration_registrar: $("#registration_registrar").val(),
									registration_type: $("#registration_type").val(),
									registration_name: $("#registration_name").val(),
									registration_number: $("#registration_number").val(),
									registration_start_date: $("#registration_start_date").val(),
									registration_end_date: $("#registration_end_date").val(),
									the_organisation:the_organisation, 
									_token: "{{csrf_token()}}"
								},
								success: function(data) {
									setTimeout(function() {
										$('#registration_modal').modal('hide')
										$('#registration_submit').addClass('spinner spinner-white spinner-right').text('Create');
										document.getElementById("registration_form").reset();
										//$('#publisherr').removeClass("is-valid");                               
									}, 2000);
									window.location.href = window.location.href;
								},
								error: function(data) {
									console.log(data);
									$('#registration_submit').removeClass('spinner spinner-white spinner-right').text('Creating ...');
									alert('Something went wrong');
								}
							})
						});         
					});				                          
				});


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

				$("#registration_type").prop('disabled', true);
                $("#registration_name").prop('disabled', true);
                $("#registration_number").prop('disabled', true);
                $("#registration_start_date").prop('disabled', true);
                $("#registration_end_date").prop('disabled', true);
                $("#registration_submit").prop('disabled', true);

                $("#registration_registrar").focusout(function() {
                    if ($(this).val() != '') {
                        $("#registration_registrar").addClass("is-valid");
                        $("#registration_registrar").removeClass("is-invalid");
                        $("#registration_type").prop('disabled', false);
                    } else {
                        // 3N1X7
                        $("#registration_registrar").removeClass("is-valid");
                        $("#registration_registrar").addClass("is-invalid");
                        $("#registration_type").prop('disabled', true);
                        $("#registration_name").prop('disabled', true);
                        $("#registration_number").prop('disabled', true);
                        $("#registration_start_date").prop('disabled', true);
                        $("#registration_end_date").prop('disabled', true);
                        $("#registration_submit").prop('disabled', true);
                    }
                })

                
                $("#registration_type").focusout(function() {
                    if ($(this).val() != '') {
                        $("#registration_type").addClass("is-valid");
                        $("#registration_type").removeClass("is-invalid");
                        $("#registration_number").prop('disabled', false);
                    } else {
                        // 3N1X7
                        $("#registration_type").removeClass("is-valid");
                        $("#registration_type").addClass("is-invalid");
                        $("#registration_name").prop('disabled', true);
                        $("#registration_number").prop('disabled', true);
                        $("#registration_start_date").prop('disabled', true);
                        $("#registration_end_date").prop('disabled', true);
                        $("#registration_submit").prop('disabled', true);
                    }
                })

                $("#registration_number").focusout(function() {
                    if ($(this).val() != '') {
                        $("#registration_number").addClass("is-valid");
                        $("#registration_number").removeClass("is-invalid");
                        $("#registration_name").prop('disabled', false);
                    } else {
                        // 3N1X7
                        $("#registration_number").removeClass("is-valid");
                        $("#registration_number").addClass("is-invalid");
                        $("#registration_name").prop('disabled', true);
                        $("#registration_start_date").prop('disabled', true);
                        $("#registration_end_date").prop('disabled', true);
                        $("#registration_submit").prop('disabled', true);
                    }
                })

                $("#registration_name").focusout(function() {
                    if ($(this).val() != '') {
                        $("#registration_name").addClass("is-valid");
                        $("#registration_name").removeClass("is-invalid");
                        $("#registration_start_date").prop('disabled', false);
                        $("#registration_end_date").prop('disabled', false);
                        $("#registration_submit").prop('disabled', false);
                    } else {
                        // 3N1X7
                        $("#registration_name").removeClass("is-valid");
                        $("#registration_name").addClass("is-invalid");
                        $("#registration_start_date").prop('disabled', true);
                        $("#registration_end_date").prop('disabled', true);
                        $("#registration_submit").prop('disabled', true);
                    }
                })

                $('#create_organisation').on('click', function(){
					$('#permssn_Orgn').modal('show');
				});


				$('#org_submit').on('click',function(){
                    $('#org_submit').addClass('spinner spinner-white spinner-right').text('Creating ...');
                    $.ajax({
                        url:'/saving_orgaisation',
                        method:'post',
                        data:{
                            org_register:$("#org_register").val(),
							org_type:$("#org_type").val(),
							org_name:$("#org_name").val(),
							org_num:$("#org_num").val(),
							org_start:$("#org_start").val(),
							org_expire:$("#org_expire").val(),
                            _token:"{{csrf_token()}}"
                        },
                        success: function(data){
                            setTimeout(function(){
                                $('#permssn_Orgn').modal('hide')
                                $('#org_submit').addClass('spinner spinner-white spinner-right').text('Create');
                                document.getElementById("org_perm_form").reset();
                                //$('#publisherr').removeClass("is-valid");                               
                            }, 2000);
							window.location.href = window.location.href;

                        },

                        error: function(data){
                            console.log(data);
                            $('#org_submit').removeClass('spinner spinner-white spinner-right').text('Creating ...');
                            alert('Something went wrong');
                        }
                    })
                });

                $('#org_register').on('change', function () {
					var selected_registrar = this.value;
					$("#org_type").html('');
					$.ajax({
						url: "{{url('/registration/person/type')}}",
						type: "POST",
						data: {
							selected_registrar: selected_registrar,
							_token: '{{csrf_token()}}'
						},
						dataType: 'json',
						success: function (result) {
							$('#org_type').html('<option value="">Select Registration type</option>');
							$.each(result.registration_types, function (key, value) {
								$("#org_type").append('<option value="' + value.uuid + '">' + value.name + '</option>');
							});
						}						
					});
				});

				//$("#org_register").prop('disabled',true);
				$("#org_type").prop('disabled',true);
				$("#org_name").prop('disabled',true);
				$("#org_num").prop('disabled',true);
				$("#org_expire").prop('disabled',true);
				$("#org_start").prop('disabled',true);
				$("#org_submit").prop('disabled',true);

				$("#org_register").focusout(function(){
					if($(this).val() !=''){
						$("#org_register").addClass("is-valid");
						$("#org_register").removeClass("is-invalid");
						$("#org_type").prop('disabled',false);
					}else{
						// 3N1X7
						$("#org_register").removeClass("is-valid");
						$("#org_register").addClass("is-invalid");
						$("#org_type").prop('disabled',true);
						$("#org_name").prop('disabled',true);
						$("#org_num").prop('disabled',true);
						$("#org_expire").prop('disabled',true);
						$("#org_start").prop('disabled',true);
						$("#org_submit").prop('disabled',true);
					}
				})

				$("#org_type").focusout(function(){
					if($(this).val() !=''){
						$("#org_type").addClass("is-valid");
						$("#org_type").removeClass("is-invalid");
						$("#org_num").prop('disabled',false);
					}else{
						// 3N1X7
						$("#org_type").removeClass("is-valid");
						$("#org_type").addClass("is-invalid");
						$("#org_name").prop('disabled',true);
						$("#org_num").prop('disabled',true);
						$("#org_expire").prop('disabled',true);
						$("#org_start").prop('disabled',true);
						$("#org_submit").prop('disabled',true);
					}
				})

				$("#org_name").focusout(function(){
					if($(this).val() !=''){
						$("#org_name").addClass("is-valid");
						$("#org_name").removeClass("is-invalid");
						$("#org_expire").prop('disabled',false);
						$("#org_start").prop('disabled',false);
						$("#org_submit").prop('disabled',false);
					}else{
						// 3N1X7
						$("#org_name").removeClass("is-valid");
						$("#org_name").addClass("is-invalid");
						$("#org_expire").prop('disabled',true);
						$("#org_start").prop('disabled',true);
						$("#org_submit").prop('disabled',true);
					}
				})

				$("#org_num").focusout(function(){
					if($(this).val() !=''){
						$("#org_num").addClass("is-valid");
						$("#org_num").removeClass("is-invalid");
						$("#org_start").prop('disabled',true);
						$("#org_name").prop('disabled',false);
						$("#org_expire").prop('disabled',true);
						$("#org_submit").prop('disabled',true);
					}else{
						// 3N1X7
						$("#org_num").removeClass("is-valid");
						$("#org_num").addClass("is-invalid");
						$("#org_name").prop('disabled',true);
						$("#org_start").prop('disabled',true);
						$("#org_expire").prop('disabled',true);
						$("#org_submit").prop('disabled',true);
					}
				})


                $('#student_submit').on('click', function() {
						//alert(the_organisation);
                    $('#student_submit').addClass('spinner spinner-white spinner-right').text('Creating ...');
                    $.ajax({
                        url: '/student-form',
                        method: 'post',
                        data: {
                            s_f_name: $("#s_f_name").val(),
                            s_s_name: $("#s_s_name").val(),
                            _token: "{{csrf_token()}}"
                        },
                        success: function(data) {
                            setTimeout(function() {
                                $('#registration_modal').modal('hide')
                                $('#registration_submit').addClass('spinner spinner-white spinner-right').text('Create');
                                document.getElementById("registration_form").reset();
                                //$('#publisherr').removeClass("is-valid");                               
                            }, 2000);
                            window.location.href = window.location.href;
                        },
                        error: function(data) {
                            console.log(data);
                            $('#registration_submit').removeClass('spinner spinner-white spinner-right').text('Creating ...');
                            alert('Something went wrong');
                        }
                    })
                });  


            })
        </script>

	</body>
@endsection

