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
					<div class="toolbar" id="kt_toolbar" style="height:100px" >
						<div id="kt_toolbar_container" class="{{ theme()->printHtmlClasses('toolbar-container', false) }} d-flex flex-stack">
							<div class="page-title d-flex flex-column justify-content-center p2">
								<!--begin::Title-->
								<div class="d-flex">
									<div class="d-flexflex-column">
									    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-top my-0">Crane High School</h1>
                                        <div class="mt-2">
                                            <span class="text-gray-400 text-hover-primary">Kinyanga'ayiro cha maendeleo</span>
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
                        <!--begin::Layout-->
                        <div class="d-flex flex-column flex-lg-row">
                            <!--begin::Sidebar-->
                            <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                                <!--begin::Card-->
                                <div class="card mb-5 mb-xl-8">
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Summary-->
                                        <!--begin::User Info-->
                                        <div class="d-flex flex-center flex-column py-5">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-100px symbol-circle mb-7">
                                                <img src="{{ asset('storage/' . $student->image) }}" alt="image" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{$student->f_name}} {{$student->s_name}}</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="mb-9 d-none">
                                                <!--begin::Badge-->
                                                <div class="badge badge-lg badge-light-primary d-inline">Administrator</div>
                                                <!--begin::Badge-->
                                            </div>
                                            <!--end::Position-->
                                        </div>
                                        <!--end::User Info-->
                                        <!--begin::Details toggle-->
                                        <div class="d-flex flex-stack fs-4 py-3">
                                            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
                                            <span class="ms-2 rotate-180">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span></div>
                                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit student details">
                                                @if(auth()->check() && auth()->user()->status !== 'Student')
                                                    <a href="#" class="btn btn-sm btn-light-primary" id="student_id_edit">Edit</a>
                                                @endif
                                            </span>
                                        </div>
                                        <!--end::Details toggle-->
                                        <!--end::Students bio data toggle-->
                                        <div class="separator"></div>
                                        <!--begin::Students bio data content-->
                                        <div id="kt_user_view_Students bio data" class="collapse show">
                                            <div class="pb-5 fs-6">
                                                <!--begin::Students bio data item-->
                                                <div class=" d-flex justify-content-between mt-5 mb-2">
                                                    <div class="fw-bold">Email</div>
                                                    <div class="text-gray-600">{{$student->email}}</div>
                                                </div>
                                                <span class="separator separator-dashed"></span>
                                                <!--begin::Students bio data item-->
                                                <!--begin:Students bio datas item-->
                                                <div class=" d-flex justify-content-between mt-5 mb-2">
                                                    <div class="fw-bold">D.o.B</div>
                                                    <div class="text-gray-600">{{$student->dob}}</div>
                                                </div>
                                                <span class="separator separator-dashed"></span>
                                                <!--begin::Students bio data item-->
                                                <!--begin:Students bio datas item-->
                                                <div class=" d-flex justify-content-between mt-5 mb-2">
                                                    <div class="fw-bold">Address</div>
                                                    <div class="text-gray-600">{{$student->address}}</div>
                                                </div>
                                                <span class="separator separator-dashed"></span>
                                                <!--begin::Students bio data item-->
                                                <!--begin::Students bio data item-->
                                                <div class=" d-flex justify-content-between mt-5 mb-2">
                                                    <div class="fw-bold">Nationality</div>
                                                    <div class="text-gray-600">{{$student->nationality}}</div>
                                                </div>
                                                <span class="separator separator-dashed"></span>
                                                <!--begin::Students bio data item-->
                                                <!--begin::Students bio datas item-->
                                                <div class=" d-flex justify-content-between mt-5 mb-2">
                                                    <div class="fw-bold">Gender</div>
                                                    <div class="text-gray-600">{{$student->gender}}</div>
                                                </div>
                                                <span class="separator separator-dashed"></span>
                                                <!--begin::Students bio datas item-->
                                            </div>
                                        </div>
                                        <!--end::Students bio data content-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Sidebar-->
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid ms-lg-15">
                                <!--begin:::Tabs-->
                                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">First Term</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">Second Term</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Third Term</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item ms-auto">
                                        @if(auth()->check() && auth()->user()->status !== 'Student')
                                            <span class="btn btn-primary ps-7" style="cursor:pointer" id="Student_button">
                                                Add Results
                                            </span>
                                        @endif
                                    </li>
                                    <!--end:::Tab item-->
                                </ul>
                                <!--end:::Tabs-->
                                <!--begin:::Tab content-->
                                <div class="tab-content" id="myTabContent">
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                                        <!--begin::Card-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold fs-3 mb-1">Students Results</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    <div class="btn btn-sm btn-light-primary"  data-bs-toggle="modal" data-bs-target="#first_term_results" style="cursor:pointer">
                                                        <span class="">
                                                            <i class="fa fa-print fs-4"></i> 
                                                        </span>
                                                        Print First Term Results
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body py-3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fw-bold text-muted bg-light">
                                                                <th class="ps-4 min-w-120px rounded-start">Subjects</th>
                                                                <th class="min-w-100px">Coursework</th>
                                                                <th class="min-w-125px">(20%)</th>
                                                                <th class="min-w-125px">End of Term</th>
                                                                <th class="min-w-125px">(80%)</th>
                                                                <th class="min-w-125px">Total (100%)</th>
                                                                <th class="min-w-125px">Grade</th>
                                                                <th class="min-w-125px">Out of 3</th>
                                                                <th class="min-w-135px">Descriptors</th>
                                                                <th class="min-w-120px">Status</th>
                                                                <th class="min-w-100px text-end rounded-end"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            @foreach($firstResults as $result)
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">                                                                       
                                                                            <div class="d-flex justify-content-start flex-column p-2">
                                                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$result->subject}}</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks}}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks*0.2}}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                        @php
                                                                            $fendMarks = null;
                                                                        @endphp
                                                                            @foreach($fendTerm as $endTerms)
                                                                                @if($endTerms->sub_id == $result->subject)
                                                                                    @php
                                                                                        $fendMarks = $endTerms->end_marks;
                                                                                    @endphp
                                                                                    {{$fendMarks}}
                                                                                @endif
                                                                            @endforeach
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        @if($fendMarks)
                                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{$fendMarks * 0.8}}</span>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7"> {{ round($fendMarks * 0.8 + $result->marks * 0.2) }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                            @php
                                                                                $totalMarks = round($fendMarks * 0.8 + $result->marks * 0.2);
                                                                                $grade = '';
                                                                                
                                                                                if ($totalMarks >= 85 && $totalMarks <= 100) {
                                                                                    $grade = 'D1';
                                                                                } elseif ($totalMarks >= 80 && $totalMarks <= 84) {
                                                                                    $grade = 'D2';
                                                                                } elseif ($totalMarks >= 75 && $totalMarks <= 79) {
                                                                                    $grade = 'C3';
                                                                                } elseif ($totalMarks >= 70 && $totalMarks <= 74) {
                                                                                    $grade = 'C4';
                                                                                } elseif ($totalMarks >= 65 && $totalMarks <= 69) {
                                                                                    $grade = 'C5';
                                                                                } elseif ($totalMarks >= 60 && $totalMarks <= 64) {
                                                                                    $grade = 'C6';
                                                                                } elseif ($totalMarks >= 50 && $totalMarks <= 59) {
                                                                                    $grade = 'P7';
                                                                                } elseif ($totalMarks >= 40 && $totalMarks <= 49) {
                                                                                    $grade = 'P8';
                                                                                } elseif ($totalMarks >= 0 && $totalMarks <= 39) {
                                                                                    $grade = 'F9';
                                                                                } else {
                                                                                    $grade = 'N/A';
                                                                                }                    
                                                                                echo $grade;
                                                                            @endphp
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                            @php
                                                                                $firsttotalMarks = round($fendMarks * 0.8 + $result->marks * 0.2);
                                                                                $outOfThree = '';
                                                                                
                                                                                if ($firsttotalMarks >= 0 && $firsttotalMarks <= 9) {
                                                                                    $outOfThree = '0.0';
                                                                                } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 19) {
                                                                                    $outOfThree = '0.1';
                                                                                } elseif ($firsttotalMarks >= 20 && $firsttotalMarks <= 29) {
                                                                                    $outOfThree = '0.2';
                                                                                } elseif ($firsttotalMarks >= 30 && $firsttotalMarks <= 39) {
                                                                                    $outOfThree = '1.3';
                                                                                } elseif ($firsttotalMarks >= 40 && $firsttotalMarks <= 49) {
                                                                                    $outOfThree = '1.6';
                                                                                } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 59) {
                                                                                    $outOfThree = '1.5';
                                                                                } elseif ($firsttotalMarks >= 60 && $firsttotalMarks <= 64) {
                                                                                    $outOfThree = '1.6';
                                                                                } elseif ($firsttotalMarks >= 65 && $firsttotalMarks <= 69) {
                                                                                    $outOfThree = '1.8';
                                                                                } elseif ($firsttotalMarks >= 70 && $firsttotalMarks <= 79) {
                                                                                    $outOfThree = '2.2';
                                                                                } elseif ($firsttotalMarks >= 80 && $firsttotalMarks <= 85) {
                                                                                    $outOfThree = '2.4';
                                                                                } elseif ($firsttotalMarks >= 86 && $firsttotalMarks <= 90) {
                                                                                    $outOfThree = '2.6';
                                                                                } elseif ($firsttotalMarks >= 91 && $firsttotalMarks <= 95) {
                                                                                    $outOfThree = '2.8';
                                                                                } elseif ($firsttotalMarks >= 96 && $firsttotalMarks <= 100) {
                                                                                    $outOfThree = '3.0';
                                                                                } else {
                                                                                    $outOfThree = 'N/A';
                                                                                }
                                                                                
                                                                                echo $outOfThree;
                                                                            @endphp
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                            @php
                                                                                $descriptor = '';

                                                                                if ($firsttotalMarks >= 85 && $firsttotalMarks <= 100) {
                                                                                    $descriptor = 'Outstanding';
                                                                                } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 84) {
                                                                                    $descriptor = 'Moderate';
                                                                                } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 49) {
                                                                                    $descriptor = 'Basic';
                                                                                } else {
                                                                                    $descriptor = 'N/A';
                                                                                }
                                                                                
                                                                                echo $descriptor;
                                                                            @endphp
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge badge-light-primary fs-7 fw-bold">results</span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
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
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                                        <!--begin::Card-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold fs-3 mb-1">Students Results</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    <div class="btn btn-sm btn-light-primary"  data-bs-toggle="modal" data-bs-target="#second_term_results" style="cursor:pointer">
                                                        <span class="">
                                                            <i class="fa fa-print fs-4"></i> 
                                                        </span>
                                                        Print Second Term Results
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Header-->                                   
                                            <!--begin::Body-->
                                            <div class="card-body py-3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fw-bold text-muted bg-light">
                                                                <th class="ps-4 min-w-120px rounded-start">Subjects</th>
                                                                <th class="min-w-100px">Coursework</th>
                                                                <th class="min-w-125px">(20%)</th>
                                                                <th class="min-w-125px">End of Term</th>
                                                                <th class="min-w-125px">(80%)</th>
                                                                <th class="min-w-125px">Total (100%)</th>
                                                                <th class="min-w-125px">Grade</th>
                                                                <th class="min-w-125px">Out of 3</th>
                                                                <th class="min-w-135px">Descriptors</th>
                                                                <th class="min-w-120px">Status</th>
                                                                <th class="min-w-100px text-end rounded-end"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            @foreach($secondResults as $result)
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">                                                                       
                                                                            <div class="d-flex justify-content-start flex-column p-2">
                                                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$result->subject}}</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks}}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks*0.2}}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                        @php
                                                                            $sendMarks = null;
                                                                        @endphp
                                                                            @foreach($sendTerm as $endTerms)
                                                                                @if($endTerms->sub_id == $result->subject)
                                                                                    @php
                                                                                        $sendMarks = $endTerms->end_marks;
                                                                                    @endphp
                                                                                    {{$sendMarks}}
                                                                                @endif
                                                                            @endforeach
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        @if($sendMarks)
                                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{$sendMarks * 0.8}}</span>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7"> {{ round($sendMarks * 0.8 + $result->marks * 0.2) }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                            @php
                                                                                $totalMarks = round($sendMarks * 0.8 + $result->marks * 0.2);
                                                                                $grade = '';
                                                                                
                                                                                if ($totalMarks >= 85 && $totalMarks <= 100) {
                                                                                    $grade = 'D1';
                                                                                } elseif ($totalMarks >= 80 && $totalMarks <= 84) {
                                                                                    $grade = 'D2';
                                                                                } elseif ($totalMarks >= 75 && $totalMarks <= 79) {
                                                                                    $grade = 'C3';
                                                                                } elseif ($totalMarks >= 70 && $totalMarks <= 74) {
                                                                                    $grade = 'C4';
                                                                                } elseif ($totalMarks >= 65 && $totalMarks <= 69) {
                                                                                    $grade = 'C5';
                                                                                } elseif ($totalMarks >= 60 && $totalMarks <= 64) {
                                                                                    $grade = 'C6';
                                                                                } elseif ($totalMarks >= 50 && $totalMarks <= 59) {
                                                                                    $grade = 'P7';
                                                                                } elseif ($totalMarks >= 40 && $totalMarks <= 49) {
                                                                                    $grade = 'P8';
                                                                                } elseif ($totalMarks >= 0 && $totalMarks <= 39) {
                                                                                    $grade = 'F9';
                                                                                } else {
                                                                                    $grade = 'N/A';
                                                                                }                    
                                                                                echo $grade;
                                                                            @endphp
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                            @php
                                                                                $firsttotalMarks = round($sendMarks * 0.8 + $result->marks * 0.2);
                                                                                $outOfThree = '';
                                                                                
                                                                                if ($firsttotalMarks >= 0 && $firsttotalMarks <= 9) {
                                                                                    $outOfThree = '0.0';
                                                                                } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 19) {
                                                                                    $outOfThree = '0.1';
                                                                                } elseif ($firsttotalMarks >= 20 && $firsttotalMarks <= 29) {
                                                                                    $outOfThree = '0.2';
                                                                                } elseif ($firsttotalMarks >= 30 && $firsttotalMarks <= 39) {
                                                                                    $outOfThree = '1.3';
                                                                                } elseif ($firsttotalMarks >= 40 && $firsttotalMarks <= 49) {
                                                                                    $outOfThree = '1.6';
                                                                                } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 59) {
                                                                                    $outOfThree = '1.5';
                                                                                } elseif ($firsttotalMarks >= 60 && $firsttotalMarks <= 64) {
                                                                                    $outOfThree = '1.6';
                                                                                } elseif ($firsttotalMarks >= 65 && $firsttotalMarks <= 69) {
                                                                                    $outOfThree = '1.8';
                                                                                } elseif ($firsttotalMarks >= 70 && $firsttotalMarks <= 79) {
                                                                                    $outOfThree = '2.2';
                                                                                } elseif ($firsttotalMarks >= 80 && $firsttotalMarks <= 85) {
                                                                                    $outOfThree = '2.4';
                                                                                } elseif ($firsttotalMarks >= 86 && $firsttotalMarks <= 90) {
                                                                                    $outOfThree = '2.6';
                                                                                } elseif ($firsttotalMarks >= 91 && $firsttotalMarks <= 95) {
                                                                                    $outOfThree = '2.8';
                                                                                } elseif ($firsttotalMarks >= 96 && $firsttotalMarks <= 100) {
                                                                                    $outOfThree = '3.0';
                                                                                } else {
                                                                                    $outOfThree = 'N/A';
                                                                                }
                                                                                
                                                                                echo $outOfThree;
                                                                            @endphp
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                            @php
                                                                                $descriptor = '';

                                                                                if ($firsttotalMarks >= 85 && $firsttotalMarks <= 100) {
                                                                                    $descriptor = 'Outstanding';
                                                                                } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 84) {
                                                                                    $descriptor = 'Moderate';
                                                                                } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 49) {
                                                                                    $descriptor = 'Basic';
                                                                                } else {
                                                                                    $descriptor = 'N/A';
                                                                                }
                                                                                
                                                                                echo $descriptor;
                                                                            @endphp
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge badge-light-primary fs-7 fw-bold">results</span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
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
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                                        <!--begin::Card-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold fs-3 mb-1">Students Results</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    <div class="btn btn-sm btn-light-primary"  data-bs-toggle="modal" data-bs-target="#third_term_results" style="cursor:pointer">
                                                        <span class="">
                                                            <i class="fa fa-print fs-4"></i> 
                                                        </span>
                                                        Print Third Term Results
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Header--> 
                                            <!--begin::Body-->
                                            <div class="card-body py-3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fw-bold text-muted bg-light">
                                                                <th class="ps-4 min-w-120px rounded-start">Subjects</th>
                                                                <th class="min-w-100px">Coursework</th>
                                                                <th class="min-w-125px">(20%)</th>
                                                                <th class="min-w-125px">End of Term</th>
                                                                <th class="min-w-125px">(80%)</th>
                                                                <th class="min-w-125px">Total (100%)</th>
                                                                <th class="min-w-125px">Grade</th>
                                                                <th class="min-w-125px">Out of 3</th>
                                                                <th class="min-w-135px">Descriptors</th>
                                                                <th class="min-w-120px">Status</th>
                                                                <th class="min-w-100px text-end rounded-end"></th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            @foreach($thirdResults as $result)
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">                                                                       
                                                                            <div class="d-flex justify-content-start flex-column p-2">
                                                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$result->subject}}</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks}}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks*0.2}}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                        @php
                                                                            $tendMarks = null;
                                                                        @endphp
                                                                            @foreach($tendTerm as $endTerms)
                                                                                @if($endTerms->sub_id == $result->subject)
                                                                                    @php
                                                                                        $tendMarks = $endTerms->end_marks;
                                                                                    @endphp
                                                                                    {{$tendMarks}}
                                                                                @endif
                                                                            @endforeach
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        @if($tendMarks)
                                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{$tendMarks * 0.8}}</span>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7"> {{ round($tendMarks * 0.8 + $result->marks * 0.2) }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                            @php
                                                                                $totalMarks = round($tendMarks * 0.8 + $result->marks * 0.2);
                                                                                $grade = '';
                                                                                
                                                                                if ($totalMarks >= 85 && $totalMarks <= 100) {
                                                                                    $grade = 'D1';
                                                                                } elseif ($totalMarks >= 80 && $totalMarks <= 84) {
                                                                                    $grade = 'D2';
                                                                                } elseif ($totalMarks >= 75 && $totalMarks <= 79) {
                                                                                    $grade = 'C3';
                                                                                } elseif ($totalMarks >= 70 && $totalMarks <= 74) {
                                                                                    $grade = 'C4';
                                                                                } elseif ($totalMarks >= 65 && $totalMarks <= 69) {
                                                                                    $grade = 'C5';
                                                                                } elseif ($totalMarks >= 60 && $totalMarks <= 64) {
                                                                                    $grade = 'C6';
                                                                                } elseif ($totalMarks >= 50 && $totalMarks <= 59) {
                                                                                    $grade = 'P7';
                                                                                } elseif ($totalMarks >= 40 && $totalMarks <= 49) {
                                                                                    $grade = 'P8';
                                                                                } elseif ($totalMarks >= 0 && $totalMarks <= 39) {
                                                                                    $grade = 'F9';
                                                                                } else {
                                                                                    $grade = 'N/A';
                                                                                }                    
                                                                                echo $grade;
                                                                            @endphp
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                            @php
                                                                                $firsttotalMarks = round($tendMarks * 0.8 + $result->marks * 0.2);
                                                                                $outOfThree = '';
                                                                                
                                                                                if ($firsttotalMarks >= 0 && $firsttotalMarks <= 9) {
                                                                                    $outOfThree = '0.0';
                                                                                } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 19) {
                                                                                    $outOfThree = '0.1';
                                                                                } elseif ($firsttotalMarks >= 20 && $firsttotalMarks <= 29) {
                                                                                    $outOfThree = '0.2';
                                                                                } elseif ($firsttotalMarks >= 30 && $firsttotalMarks <= 39) {
                                                                                    $outOfThree = '1.3';
                                                                                } elseif ($firsttotalMarks >= 40 && $firsttotalMarks <= 49) {
                                                                                    $outOfThree = '1.6';
                                                                                } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 59) {
                                                                                    $outOfThree = '1.5';
                                                                                } elseif ($firsttotalMarks >= 60 && $firsttotalMarks <= 64) {
                                                                                    $outOfThree = '1.6';
                                                                                } elseif ($firsttotalMarks >= 65 && $firsttotalMarks <= 69) {
                                                                                    $outOfThree = '1.8';
                                                                                } elseif ($firsttotalMarks >= 70 && $firsttotalMarks <= 79) {
                                                                                    $outOfThree = '2.2';
                                                                                } elseif ($firsttotalMarks >= 80 && $firsttotalMarks <= 85) {
                                                                                    $outOfThree = '2.4';
                                                                                } elseif ($firsttotalMarks >= 86 && $firsttotalMarks <= 90) {
                                                                                    $outOfThree = '2.6';
                                                                                } elseif ($firsttotalMarks >= 91 && $firsttotalMarks <= 95) {
                                                                                    $outOfThree = '2.8';
                                                                                } elseif ($firsttotalMarks >= 96 && $firsttotalMarks <= 100) {
                                                                                    $outOfThree = '3.0';
                                                                                } else {
                                                                                    $outOfThree = 'N/A';
                                                                                }
                                                                                
                                                                                echo $outOfThree;
                                                                            @endphp
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                                            @php
                                                                                $descriptor = '';

                                                                                if ($firsttotalMarks >= 85 && $firsttotalMarks <= 100) {
                                                                                    $descriptor = 'Outstanding';
                                                                                } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 84) {
                                                                                    $descriptor = 'Moderate';
                                                                                } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 49) {
                                                                                    $descriptor = 'Basic';
                                                                                } else {
                                                                                    $descriptor = 'N/A';
                                                                                }
                                                                                
                                                                                echo $descriptor;
                                                                            @endphp
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge badge-light-primary fs-7 fw-bold">results</span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
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
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <input type="hidden" id="student_popup_id" value="{{$id}}">
                                </div>
                                <!--end:::Tab content-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Layout-->
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Modal - first_term_results_add_modal-->
            <div class="modal bg-white fade" tabindex="-1" id="first_term_results">
                <div class="modal-dialog modal-fullscreen">
                    <!--begin::Modal content-->
                    <div class="modal-contentrounded">
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
                            <form id="kt_modal_new_target_form" class="form" action="#">
                                <!--begin::Heading-->
                                <div class="mb-5 text-center">
                                    <!--begin::Title-->
                                    <div class="me-7 mb-4">
                                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <img src="assets/media/avatars/300-1.jpg" alt="image" />
                                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                            </div>
                                        </div>
                                    <h1 class="mb-3">CRANE HIGH SCHOOL - ENTEBBE</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5">P.O.Box 28090, Tel: 0772424159 Kampala - Uganda</div>
                                    <!--end::Description-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5">
                                        <span class="me-2">Email</span>
                                        <a href="#" class="fw-bold link-primary">cranehighschool@gmail.com</a>.
                                        <span class="me-2">Website</span>
                                        <a href="#" class="fw-bold link-primary">cranehighschoolentebbe</a>.
                                        </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <span class="separator mb-13"></span>
                                <!--begin::Details-->
                                <div class="bg-light-primary p-3">
                                    <div class="d-flex flex-wrap flex-sm-nowrap mb-5 p-2">
                                        <!--begin: Pic-->
                                        <div class="me-7 mb-4">
                                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <img src="assets/media/avatars/300-1.jpg" alt="image" />
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
                                                    <div class="d-flex align-items-center mb-2 p-3">
                                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$student->f_name}} {{$student->s_name}}</a>
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
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                                                                <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                                                                <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{$student->class}}</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->First Term</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Roll ID {{$student->roll}}</a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Details-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="ps-4 min-w-120px rounded-start">Subjects</th>
                                                <th class="min-w-100px">Coursework</th>
                                                <th class="min-w-125px">(20%)</th>
                                                <th class="min-w-125px">End of Term</th>
                                                <th class="min-w-125px">(80%)</th>
                                                <th class="min-w-125px">Total (100%)</th>
                                                <th class="min-w-125px">Grade</th>
                                                <th class="min-w-125px">Out of 3</th>
                                                <th class="min-w-135px">Descriptors</th>
                                                <th class="min-w-120px">Status</th>
                                                <th class="min-w-100px text-end rounded-end"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            @foreach($firstResults as $result)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">                                                                       
                                                            <div class="d-flex justify-content-start flex-column p-2">
                                                                <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$result->subject}}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks*0.2}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                        @php
                                                            $fendMarks = null;
                                                        @endphp
                                                            @foreach($fendTerm as $endTerms)
                                                                @if($endTerms->sub_id == $result->subject)
                                                                    @php
                                                                        $fendMarks = $endTerms->end_marks;
                                                                    @endphp
                                                                    {{$fendMarks}}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                    </td>
                                                    <td>
                                                        @if($fendMarks)
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{$fendMarks * 0.8}}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7"> {{ round($fendMarks * 0.8 + $result->marks * 0.2) }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                            @php
                                                                $totalMarks = round($fendMarks * 0.8 + $result->marks * 0.2);
                                                                $grade = '';
                                                                
                                                                if ($totalMarks >= 85 && $totalMarks <= 100) {
                                                                    $grade = 'D1';
                                                                } elseif ($totalMarks >= 80 && $totalMarks <= 84) {
                                                                    $grade = 'D2';
                                                                } elseif ($totalMarks >= 75 && $totalMarks <= 79) {
                                                                    $grade = 'C3';
                                                                } elseif ($totalMarks >= 70 && $totalMarks <= 74) {
                                                                    $grade = 'C4';
                                                                } elseif ($totalMarks >= 65 && $totalMarks <= 69) {
                                                                    $grade = 'C5';
                                                                } elseif ($totalMarks >= 60 && $totalMarks <= 64) {
                                                                    $grade = 'C6';
                                                                } elseif ($totalMarks >= 50 && $totalMarks <= 59) {
                                                                    $grade = 'P7';
                                                                } elseif ($totalMarks >= 40 && $totalMarks <= 49) {
                                                                    $grade = 'P8';
                                                                } elseif ($totalMarks >= 0 && $totalMarks <= 39) {
                                                                    $grade = 'F9';
                                                                } else {
                                                                    $grade = 'N/A';
                                                                }                    
                                                                echo $grade;
                                                            @endphp
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                            @php
                                                                $firsttotalMarks = round($fendMarks * 0.8 + $result->marks * 0.2);
                                                                $outOfThree = '';
                                                                
                                                                if ($firsttotalMarks >= 0 && $firsttotalMarks <= 9) {
                                                                    $outOfThree = '0.0';
                                                                } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 19) {
                                                                    $outOfThree = '0.1';
                                                                } elseif ($firsttotalMarks >= 20 && $firsttotalMarks <= 29) {
                                                                    $outOfThree = '0.2';
                                                                } elseif ($firsttotalMarks >= 30 && $firsttotalMarks <= 39) {
                                                                    $outOfThree = '1.3';
                                                                } elseif ($firsttotalMarks >= 40 && $firsttotalMarks <= 49) {
                                                                    $outOfThree = '1.6';
                                                                } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 59) {
                                                                    $outOfThree = '1.5';
                                                                } elseif ($firsttotalMarks >= 60 && $firsttotalMarks <= 64) {
                                                                    $outOfThree = '1.6';
                                                                } elseif ($firsttotalMarks >= 65 && $firsttotalMarks <= 69) {
                                                                    $outOfThree = '1.8';
                                                                } elseif ($firsttotalMarks >= 70 && $firsttotalMarks <= 79) {
                                                                    $outOfThree = '2.2';
                                                                } elseif ($firsttotalMarks >= 80 && $firsttotalMarks <= 85) {
                                                                    $outOfThree = '2.4';
                                                                } elseif ($firsttotalMarks >= 86 && $firsttotalMarks <= 90) {
                                                                    $outOfThree = '2.6';
                                                                } elseif ($firsttotalMarks >= 91 && $firsttotalMarks <= 95) {
                                                                    $outOfThree = '2.8';
                                                                } elseif ($firsttotalMarks >= 96 && $firsttotalMarks <= 100) {
                                                                    $outOfThree = '3.0';
                                                                } else {
                                                                    $outOfThree = 'N/A';
                                                                }
                                                                
                                                                echo $outOfThree;
                                                            @endphp
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                            @php
                                                                $descriptor = '';

                                                                if ($firsttotalMarks >= 85 && $firsttotalMarks <= 100) {
                                                                    $descriptor = 'Outstanding';
                                                                } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 84) {
                                                                    $descriptor = 'Moderate';
                                                                } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 49) {
                                                                    $descriptor = 'Basic';
                                                                } else {
                                                                    $descriptor = 'N/A';
                                                                }
                                                                
                                                                echo $descriptor;
                                                            @endphp
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-primary fs-7 fw-bold">results</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--begin::Input group-->
                                <div class="bg-light-primary p-3">
                                    <div class="d-flex flex-stack mb-8">
                                        <!--begin::Label-->
                                        <div class=" d-flex me-5">
                                            <label class="fs-6 fw-semibold">Class Teachers Comment : </label>
                                            <div class="fs-7 fw-semibold text-muted">Very good performance, do not relax</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack mb-8">
                                        <!--begin::Label-->
                                        <div class=" d-flex me-5">
                                            <label class="fs-6 fw-semibold">Head Teachers Comment : </label>
                                            <div class="fs-7 fw-semibold text-muted">Encouraging results</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-stack mb-8 bg-light-primary">
                                    <!--begin::Label-->
                                    <div class=" d-flex me-5">
                                        <label class="fs-6 fw-semibold me-10">Name .......................</label>
                                        <label class="fs-6 fw-semibold">Signature .......................</label>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-15 fv-row bg-light-primary p-2">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bold text-muted bg-light">
                                                        <th class="ps-4 min-w-325px rounded-start">Out of 3</th>
                                                        <th class="min-w-125px">Grading Marks</th>
                                                        <th class="min-w-125px">Score range</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">3</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">75+</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">2.5 - 3.0</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">50 - 74</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">1.5 - 2.45</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">1</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">10 - 49</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">0.9 - 1.49</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                        <!--end::Label-->
                                        <!--begin::Checkboxes-->
                                        <div class="align-items-center">
                                            <!--begin::Checkbox-->
                                            <div class=" d-flex flex-stack fw-bold fs-3 mb-5">
                                                <span>Descriptor</span>
                                            </div> 
                                            <div class=" d-flex flex-stack mb-6">
                                                <span class="me-2 fw-semibold fs-5">Outstanding</span>
                                                <span class="text-gray-400 fw-bold fs-7">You need to work hard</span>
                                            </div> 
                                            <div class=" d-flex mb-6">
                                                <span class="me-2 fw-semibold fs-5">Moderate</span>
                                                <span class="text-gray-400 fw-bold fs-7">You need to work hard</span>
                                            </div> 
                                            <div class=" d-flex">
                                                <span class="me-2 fw-semibold fs-5">Basic</span>
                                                <span class="text-gray-400 fw-bold fs-7">Cool Marks</span>
                                            </div>                                          
                                        </div>
                                        <!--end::Checkboxes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="modal-footer text-center">
                                    <span class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</span>
                                    <span class="btn btn-light-primary" id="print-button">Print Results</span>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end:Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
            </div>
        <!--end::Modal - first_term_results_add_modal-->
        <!--begin::Modal - second_term_results-->
            <div class="modal bg-white fade" tabindex="-1" id="second_term_results">
                <div class="modal-dialog modal-fullscreen">
                    <!--begin::Modal content-->
                    <div class="modal-contentrounded">
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
                            <form id="kt_modal_new_target_form" class="form" action="#">
                                <!--begin::Heading-->
                                <div class="mb-5 text-center">
                                    <!--begin::Title-->
                                    <div class="me-7 mb-4">
                                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <img src="assets/media/avatars/300-1.jpg" alt="image" />
                                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                            </div>
                                        </div>
                                    <h1 class="mb-3">CRANE HIGH SCHOOL - ENTEBBE</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5">P.O.Box 28090, Tel: 0772424159 Kampala - Uganda</div>
                                    <!--end::Description-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5">
                                        <span class="me-2">Email</span>
                                        <a href="#" class="fw-bold link-primary">cranehighschool@gmail.com</a>.
                                        <span class="me-2">Website</span>
                                        <a href="#" class="fw-bold link-primary">cranehighschoolentebbe</a>.
                                        </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <span class="separator mb-13"></span>
                                <!--begin::Details-->
                                <div class="bg-light-primary p-3">
                                    <div class="d-flex flex-wrap flex-sm-nowrap mb-5 p-2">
                                        <!--begin: Pic-->
                                        <div class="me-7 mb-4">
                                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <img src="assets/media/avatars/300-1.jpg" alt="image" />
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
                                                    <div class="d-flex align-items-center mb-2 p-3">
                                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$student->f_name}} {{$student->s_name}}</a>
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
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                                                                <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                                                                <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{$student->class}}</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Second Term</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Roll ID {{$student->roll}}</a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Details-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="ps-4 min-w-120px rounded-start">Subjects</th>
                                                <th class="min-w-100px">Coursework</th>
                                                <th class="min-w-125px">(20%)</th>
                                                <th class="min-w-125px">End of Term</th>
                                                <th class="min-w-125px">(80%)</th>
                                                <th class="min-w-125px">Total (100%)</th>
                                                <th class="min-w-125px">Grade</th>
                                                <th class="min-w-125px">Out of 3</th>
                                                <th class="min-w-135px">Descriptors</th>
                                                <th class="min-w-120px">Status</th>
                                                <th class="min-w-100px text-end rounded-end"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        @foreach($secondResults as $result)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">                                                                       
                                                        <div class="d-flex justify-content-start flex-column p-2">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$result->subject}}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks*0.2}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                    @php
                                                        $sendMarks = null;
                                                    @endphp
                                                        @foreach($sendTerm as $endTerms)
                                                            @if($endTerms->sub_id == $result->subject)
                                                                @php
                                                                    $sendMarks = $endTerms->end_marks;
                                                                @endphp
                                                                {{$sendMarks}}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                </td>
                                                <td>
                                                    @if($sendMarks)
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$sendMarks * 0.8}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7"> {{ round($sendMarks * 0.8 + $result->marks * 0.2) }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                        @php
                                                            $totalMarks = round($sendMarks * 0.8 + $result->marks * 0.2);
                                                            $grade = '';
                                                            
                                                            if ($totalMarks >= 85 && $totalMarks <= 100) {
                                                                $grade = 'D1';
                                                            } elseif ($totalMarks >= 80 && $totalMarks <= 84) {
                                                                $grade = 'D2';
                                                            } elseif ($totalMarks >= 75 && $totalMarks <= 79) {
                                                                $grade = 'C3';
                                                            } elseif ($totalMarks >= 70 && $totalMarks <= 74) {
                                                                $grade = 'C4';
                                                            } elseif ($totalMarks >= 65 && $totalMarks <= 69) {
                                                                $grade = 'C5';
                                                            } elseif ($totalMarks >= 60 && $totalMarks <= 64) {
                                                                $grade = 'C6';
                                                            } elseif ($totalMarks >= 50 && $totalMarks <= 59) {
                                                                $grade = 'P7';
                                                            } elseif ($totalMarks >= 40 && $totalMarks <= 49) {
                                                                $grade = 'P8';
                                                            } elseif ($totalMarks >= 0 && $totalMarks <= 39) {
                                                                $grade = 'F9';
                                                            } else {
                                                                $grade = 'N/A';
                                                            }                    
                                                            echo $grade;
                                                        @endphp
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                        @php
                                                            $firsttotalMarks = round($sendMarks * 0.8 + $result->marks * 0.2);
                                                            $outOfThree = '';
                                                            
                                                            if ($firsttotalMarks >= 0 && $firsttotalMarks <= 9) {
                                                                $outOfThree = '0.0';
                                                            } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 19) {
                                                                $outOfThree = '0.1';
                                                            } elseif ($firsttotalMarks >= 20 && $firsttotalMarks <= 29) {
                                                                $outOfThree = '0.2';
                                                            } elseif ($firsttotalMarks >= 30 && $firsttotalMarks <= 39) {
                                                                $outOfThree = '1.3';
                                                            } elseif ($firsttotalMarks >= 40 && $firsttotalMarks <= 49) {
                                                                $outOfThree = '1.6';
                                                            } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 59) {
                                                                $outOfThree = '1.5';
                                                            } elseif ($firsttotalMarks >= 60 && $firsttotalMarks <= 64) {
                                                                $outOfThree = '1.6';
                                                            } elseif ($firsttotalMarks >= 65 && $firsttotalMarks <= 69) {
                                                                $outOfThree = '1.8';
                                                            } elseif ($firsttotalMarks >= 70 && $firsttotalMarks <= 79) {
                                                                $outOfThree = '2.2';
                                                            } elseif ($firsttotalMarks >= 80 && $firsttotalMarks <= 85) {
                                                                $outOfThree = '2.4';
                                                            } elseif ($firsttotalMarks >= 86 && $firsttotalMarks <= 90) {
                                                                $outOfThree = '2.6';
                                                            } elseif ($firsttotalMarks >= 91 && $firsttotalMarks <= 95) {
                                                                $outOfThree = '2.8';
                                                            } elseif ($firsttotalMarks >= 96 && $firsttotalMarks <= 100) {
                                                                $outOfThree = '3.0';
                                                            } else {
                                                                $outOfThree = 'N/A';
                                                            }
                                                            
                                                            echo $outOfThree;
                                                        @endphp
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                        @php
                                                            $descriptor = '';

                                                            if ($firsttotalMarks >= 85 && $firsttotalMarks <= 100) {
                                                                $descriptor = 'Outstanding';
                                                            } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 84) {
                                                                $descriptor = 'Moderate';
                                                            } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 49) {
                                                                $descriptor = 'Basic';
                                                            } else {
                                                                $descriptor = 'N/A';
                                                            }
                                                            
                                                            echo $descriptor;
                                                        @endphp
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-light-primary fs-7 fw-bold">results</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--begin::Input group-->
                                <div class="bg-light-primary p-3">
                                    <div class="d-flex flex-stack mb-8">
                                        <!--begin::Label-->
                                        <div class=" d-flex me-5">
                                            <label class="fs-6 fw-semibold">Class Teachers Comment : </label>
                                            <div class="fs-7 fw-semibold text-muted">Very good performance, do not relax</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack mb-8">
                                        <!--begin::Label-->
                                        <div class=" d-flex me-5">
                                            <label class="fs-6 fw-semibold">Head Teachers Comment : </label>
                                            <div class="fs-7 fw-semibold text-muted">Encouraging results</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-stack mb-8 bg-light-primary">
                                    <!--begin::Label-->
                                    <div class=" d-flex me-5">
                                        <label class="fs-6 fw-semibold me-10">Name .......................</label>
                                        <label class="fs-6 fw-semibold">Signature .......................</label>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-15 fv-row bg-light-primary p-2">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bold text-muted bg-light">
                                                        <th class="ps-4 min-w-325px rounded-start">Out of 3</th>
                                                        <th class="min-w-125px">Grading Marks</th>
                                                        <th class="min-w-125px">Score range</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">3</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">75+</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">2.5 - 3.0</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">50 - 74</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">1.5 - 2.45</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">1</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">10 - 49</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">0.9 - 1.49</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                        <!--end::Label-->
                                        <!--begin::Checkboxes-->
                                        <div class="align-items-center">
                                            <!--begin::Checkbox-->
                                            <div class=" d-flex flex-stack fw-bold fs-3 mb-5">
                                                <span>Descriptor</span>
                                            </div> 
                                            <div class=" d-flex flex-stack mb-6">
                                                <span class="me-2 fw-semibold fs-5">Outstanding</span>
                                                <span class="text-gray-400 fw-bold fs-7">You need to work hard</span>
                                            </div> 
                                            <div class=" d-flex mb-6">
                                                <span class="me-2 fw-semibold fs-5">Moderate</span>
                                                <span class="text-gray-400 fw-bold fs-7">You need to work hard</span>
                                            </div> 
                                            <div class=" d-flex">
                                                <span class="me-2 fw-semibold fs-5">Basic</span>
                                                <span class="text-gray-400 fw-bold fs-7">Cool Marks</span>
                                            </div>                                          
                                        </div>
                                        <!--end::Checkboxes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="modal-footer text-center">
                                    <span class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</span>
                                    <span class="btn btn-light-primary" id="print-button">Print Results</span>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end:Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
            </div>
        <!--end::Modal - second_term_results-->
        <!--begin::Modal - third_term_results-->
            <div class="modal bg-white fade" tabindex="-1" id="third_term_results">
                <div class="modal-dialog modal-fullscreen">
                    <!--begin::Modal content-->
                    <div class="modal-contentrounded">
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
                            <form id="kt_modal_new_target_form" class="form" action="#">
                                <!--begin::Heading-->
                                <div class="mb-5 text-center">
                                    <!--begin::Title-->
                                    <div class="me-7 mb-4">
                                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <img src="assets/media/avatars/300-1.jpg" alt="image" />
                                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                            </div>
                                        </div>
                                    <h1 class="mb-3">CRANE HIGH SCHOOL - ENTEBBE</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5">P.O.Box 28090, Tel: 0772424159 Kampala - Uganda</div>
                                    <!--end::Description-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5">
                                        <span class="me-2">Email</span>
                                        <a href="#" class="fw-bold link-primary">cranehighschool@gmail.com</a>.
                                        <span class="me-2">Website</span>
                                        <a href="#" class="fw-bold link-primary">cranehighschoolentebbe</a>.
                                        </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <span class="separator mb-13"></span>
                                <!--begin::Details-->
                                <div class="bg-light-primary p-3">
                                    <div class="d-flex flex-wrap flex-sm-nowrap mb-5 p-2">
                                        <!--begin: Pic-->
                                        <div class="me-7 mb-4">
                                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <img src="assets/media/avatars/300-1.jpg" alt="image" />
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
                                                    <div class="d-flex align-items-center mb-2 p-3">
                                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$student->f_name}} {{$student->s_name}}</a>
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
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                                                                <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                                                                <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{$student->class}}</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Third Term</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Roll ID {{$student->roll}}</a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Details-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bold text-muted bg-light">
                                                <th class="ps-4 min-w-120px rounded-start">Subjects</th>
                                                <th class="min-w-100px">Coursework</th>
                                                <th class="min-w-125px">(20%)</th>
                                                <th class="min-w-125px">End of Term</th>
                                                <th class="min-w-125px">(80%)</th>
                                                <th class="min-w-125px">Total (100%)</th>
                                                <th class="min-w-125px">Grade</th>
                                                <th class="min-w-125px">Out of 3</th>
                                                <th class="min-w-135px">Descriptors</th>
                                                <th class="min-w-120px">Status</th>
                                                <th class="min-w-100px text-end rounded-end"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        @foreach($thirdResults as $result)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">                                                                       
                                                        <div class="d-flex justify-content-start flex-column p-2">
                                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$result->subject}}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">{{$result->marks*0.2}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                    @php
                                                        $tendMarks = null;
                                                    @endphp
                                                        @foreach($tendTerm as $endTerms)
                                                            @if($endTerms->sub_id == $result->subject)
                                                                @php
                                                                    $tendMarks = $endTerms->end_marks;
                                                                @endphp
                                                                {{$tendMarks}}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                </td>
                                                <td>
                                                    @if($tendMarks)
                                                        <span class="text-muted fw-semibold text-muted d-block fs-7">{{$tendMarks * 0.8}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7"> {{ round($tendMarks * 0.8 + $result->marks * 0.2) }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                        @php
                                                            $totalMarks = round($tendMarks * 0.8 + $result->marks * 0.2);
                                                            $grade = '';
                                                            
                                                            if ($totalMarks >= 85 && $totalMarks <= 100) {
                                                                $grade = 'D1';
                                                            } elseif ($totalMarks >= 80 && $totalMarks <= 84) {
                                                                $grade = 'D2';
                                                            } elseif ($totalMarks >= 75 && $totalMarks <= 79) {
                                                                $grade = 'C3';
                                                            } elseif ($totalMarks >= 70 && $totalMarks <= 74) {
                                                                $grade = 'C4';
                                                            } elseif ($totalMarks >= 65 && $totalMarks <= 69) {
                                                                $grade = 'C5';
                                                            } elseif ($totalMarks >= 60 && $totalMarks <= 64) {
                                                                $grade = 'C6';
                                                            } elseif ($totalMarks >= 50 && $totalMarks <= 59) {
                                                                $grade = 'P7';
                                                            } elseif ($totalMarks >= 40 && $totalMarks <= 49) {
                                                                $grade = 'P8';
                                                            } elseif ($totalMarks >= 0 && $totalMarks <= 39) {
                                                                $grade = 'F9';
                                                            } else {
                                                                $grade = 'N/A';
                                                            }                    
                                                            echo $grade;
                                                        @endphp
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                        @php
                                                            $firsttotalMarks = round($tendMarks * 0.8 + $result->marks * 0.2);
                                                            $outOfThree = '';
                                                            
                                                            if ($firsttotalMarks >= 0 && $firsttotalMarks <= 9) {
                                                                $outOfThree = '0.0';
                                                            } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 19) {
                                                                $outOfThree = '0.1';
                                                            } elseif ($firsttotalMarks >= 20 && $firsttotalMarks <= 29) {
                                                                $outOfThree = '0.2';
                                                            } elseif ($firsttotalMarks >= 30 && $firsttotalMarks <= 39) {
                                                                $outOfThree = '1.3';
                                                            } elseif ($firsttotalMarks >= 40 && $firsttotalMarks <= 49) {
                                                                $outOfThree = '1.6';
                                                            } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 59) {
                                                                $outOfThree = '1.5';
                                                            } elseif ($firsttotalMarks >= 60 && $firsttotalMarks <= 64) {
                                                                $outOfThree = '1.6';
                                                            } elseif ($firsttotalMarks >= 65 && $firsttotalMarks <= 69) {
                                                                $outOfThree = '1.8';
                                                            } elseif ($firsttotalMarks >= 70 && $firsttotalMarks <= 79) {
                                                                $outOfThree = '2.2';
                                                            } elseif ($firsttotalMarks >= 80 && $firsttotalMarks <= 85) {
                                                                $outOfThree = '2.4';
                                                            } elseif ($firsttotalMarks >= 86 && $firsttotalMarks <= 90) {
                                                                $outOfThree = '2.6';
                                                            } elseif ($firsttotalMarks >= 91 && $firsttotalMarks <= 95) {
                                                                $outOfThree = '2.8';
                                                            } elseif ($firsttotalMarks >= 96 && $firsttotalMarks <= 100) {
                                                                $outOfThree = '3.0';
                                                            } else {
                                                                $outOfThree = 'N/A';
                                                            }
                                                            
                                                            echo $outOfThree;
                                                        @endphp
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                        @php
                                                            $descriptor = '';

                                                            if ($firsttotalMarks >= 85 && $firsttotalMarks <= 100) {
                                                                $descriptor = 'Outstanding';
                                                            } elseif ($firsttotalMarks >= 50 && $firsttotalMarks <= 84) {
                                                                $descriptor = 'Moderate';
                                                            } elseif ($firsttotalMarks >= 10 && $firsttotalMarks <= 49) {
                                                                $descriptor = 'Basic';
                                                            } else {
                                                                $descriptor = 'N/A';
                                                            }
                                                            
                                                            echo $descriptor;
                                                        @endphp
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-light-primary fs-7 fw-bold">results</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--begin::Input group-->
                                <div class="bg-light-primary p-3">
                                    <div class="d-flex flex-stack mb-8">
                                        <!--begin::Label-->
                                        <div class=" d-flex me-5">
                                            <label class="fs-6 fw-semibold">Class Teachers Comment : </label>
                                            <div class="fs-7 fw-semibold text-muted">Very good performance, do not relax</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack mb-8">
                                        <!--begin::Label-->
                                        <div class=" d-flex me-5">
                                            <label class="fs-6 fw-semibold">Head Teachers Comment : </label>
                                            <div class="fs-7 fw-semibold text-muted">Encouraging results</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-stack mb-8 bg-light-primary">
                                    <!--begin::Label-->
                                    <div class=" d-flex me-5">
                                        <label class="fs-6 fw-semibold me-10">Name .......................</label>
                                        <label class="fs-6 fw-semibold">Signature .......................</label>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-15 fv-row bg-light-primary p-2">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bold text-muted bg-light">
                                                        <th class="ps-4 min-w-325px rounded-start">Out of 3</th>
                                                        <th class="min-w-125px">Grading Marks</th>
                                                        <th class="min-w-125px">Score range</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">3</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">75+</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">2.5 - 3.0</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">50 - 74</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">1.5 - 2.45</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-5">
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-muted fw-semibold text-muted d-block fs-7">1</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">10 - 49</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fw-semibold text-muted d-block fs-7">0.9 - 1.49</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                        <!--end::Label-->
                                        <!--begin::Checkboxes-->
                                        <div class="align-items-center">
                                            <!--begin::Checkbox-->
                                            <div class=" d-flex flex-stack fw-bold fs-3 mb-5">
                                                <span>Descriptor</span>
                                            </div> 
                                            <div class=" d-flex flex-stack mb-6">
                                                <span class="me-2 fw-semibold fs-5">Outstanding</span>
                                                <span class="text-gray-400 fw-bold fs-7">You need to work hard</span>
                                            </div> 
                                            <div class=" d-flex mb-6">
                                                <span class="me-2 fw-semibold fs-5">Moderate</span>
                                                <span class="text-gray-400 fw-bold fs-7">You need to work hard</span>
                                            </div> 
                                            <div class=" d-flex">
                                                <span class="me-2 fw-semibold fs-5">Basic</span>
                                                <span class="text-gray-400 fw-bold fs-7">Cool Marks</span>
                                            </div>                                          
                                        </div>
                                        <!--end::Checkboxes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="modal-footer text-center">
                                    <span class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</span>
                                    <span class="btn btn-light-primary" id="print-button">Print Results</span>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end:Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
            </div>
        <!--end::Modal - third_term_results-->

        <!--begin::Modal - results_add_modal-->
            <div class="modal fade" id="results_add_modal" tabindex="-1" aria-hidden="true">
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
                            <form  id="results_form" enctype="multipart/form-data">
                                @csrf
                                <!-- Your form fields -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <!-- Other form elements -->
                                <!--begin::Heading-->
                                <div class="mb-4 text-center">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">Add Student Results</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5 mb-9">Student Results means the outcome of assessments related to the performance or level of competence of students enrolled in a Program.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <div class="p-9">
                                    <div class="teacher_step_2 ">
                                        <!--begin::Input group-->
                                        <div class="row mb-5">
                                            <div class="col-md-3 fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Term</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8 fv-row">
                                                <select class="form-select form-select-solid" name="term" id="term" data-control="select2" data-placeholder="Select Term">
                                                    <option value="">Select Term</option>
                                                    <option value="First Term">First Term</option>
                                                    <option value="Second Term">Second Term</option>
                                                    <option value="Third Term">Third term</option>
                                                </select>
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! select Term!</span>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <input type="hidden" id="student_id" name="student_id" value="{{$id}}" />
                                        <input type="hidden" id="student_email" name="student_email" value="{{$student->email}}" />
                                        <!--begin::Input group-->
                                        <div class="row mb-5">
                                            <div class="col-md-3 fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">Exam Type</span>
                                                </label>
                                            </div>
                                            <div class="col-md-8 fv-row">
                                                <select class="form-select form-select-solid" name="exam_type" id="exam_type" data-control="select2" data-placeholder="Select Exam Type">
                                                    <option value="">Select Exam Type</option>
                                                    <option value="Course Work 1">Course Work</option>
                                                    <option value="End of Term">End of Term</option>
                                                </select>
                                                <span class="valid-feedback"></span>
                                                <span class="invalid-feedback">Oops! include the Exam Type!</span>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <span class="mb-4 separator mt-4"></span>
                                        <div class="row mb-5">
                                        @foreach($subject as $subjects)
                                        <div class="col-md-2 fv-row">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span>{{ $subjects->code }}</span>
                                            </label>
                                        </div>
                                        <div class="col-md-2 mb-4 fv-row">															
                                            <label class="">
                                                <input type="hidden" name="subjects[]" value="{{ $subjects->subject }}">
                                                <input type="number" id="{{ $subjects->subject }}" name="marks[]" placeholder="00" class="form-control">
                                            </label>
                                        </div>
                                        @endforeach													
                                        </div>
                                        <!--begin::Actions-->
                                        <div class="separator mb-6"></div>
                                        <div class="text-center">
                                            <button type="reset" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" value="Submit" id="org_submit" class="btn btn-light-primary">Add</button>
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
        <!--end::Modal - results_add_modal-->

        <div class="modal fade" id="communication-modal" tabindex="-1" aria-labelledby="communication-modal-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="communication-modal-label">Results are Out!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close_modal" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <!--begin::Modal - edit_student-->
            <div class="modal fade" id="edit_student" tabindex="-1" aria-hidden="true">
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
                                    <h1 class="mb-3">Edit <span> {{$student->f_name}} </span> Details</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5 mb-9">A person who is studying at a university or other place of higher education</div>
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
                                            <input type="text" class="form-control" value="{{$student->f_name}}" placeholder="First Name" name="s_f_name" id="s_f_name" />
                                            <span class="valid-feedback"></span>
                                            <span class="invalid-feedback">Oops! include the First Name!</span>
                                        </div>
                                        <div class="col-md-4 fv-row">
                                            <input type="text" class="form-control" value="{{$student->s_name}}" placeholder="Second Name" name="s_s_name" id="s_s_name" />
                                            <span class="valid-feedback"></span>
                                            <span class="invalid-feedback">Oops! include the Second Name!</span>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <input type="hidden" value="{{$student->email}}" class="form-control" name="s_email" id="s_email" />
                                    <input type="hidden" value="{{$student->password}}" class="form-control" name="s_password" id="s_password" />
                                    <input type="hidden" value="{{$student->class_id}}" class="form-control" name="s_class" id="s_class" />
                                    <input type="hidden" value="{{$student->id}}" class="form-control" name="s_id" id="s_id" />
                                    <!--begin::Input group-->
                                    <div class="row mb-5">
                                        <div class="col-md-3 fv-row">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Address</span>
                                            </label>
                                        </div>
                                        <div class="col-md-8 fv-row">
                                            <input type="text" value="{{$student->address}}" class="form-control" placeholder="Mutungo plot-123" name="s_address" id="s_address" />
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
                                            <select class="form-select form-select-solid" name="s_gender" id="s_gender" data-control="select2" data-hide-search="true" data-placeholder="Select gender">
                                                <option value="">Select gender</option>
                                                <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                            </select>
                                            <span class="valid-feedback"></span>
                                            <span class="invalid-feedback">Oops! include the student gender!</span>
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
                                            <select class="form-select form-select-solid" value="{{$student->f_name}}" name="s_nationality" id="s_nationality" data-control="select2" data-hide-search="true" data-placeholder="Select Nationality" name="target_assign">
                                                <option value="">Select Nationality</option>
                                                <option value="Ugandan" {{ $student->nationality == 'Ugandan' ? 'selected' : '' }}>Ugandan</option>
                                                <option value="Kenyan" {{ $student->nationality == 'Kenyan' ? 'selected' : '' }}>Kenyan</option>
                                                <option value="Tanzanian" {{ $student->nationality == 'Tanzanian' ? 'selected' : '' }}>Tanzanian</option>
                                                <option value="Rwandanese" {{ $student->nationality == 'Rwandanese' ? 'selected' : '' }}>Rwandanese</option>
                                                <option value="Sudanese" {{ $student->nationality == 'Sudanese' ? 'selected' : '' }}>Sudanese</option>
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
                                        <input type="date" class="form-control" value="{{ $student->dob ? date('Y-m-d', strtotime($student->dob)) : '' }}" name="s_dob" id="s_dob" />
                                            <span class="valid-feedback"></span>
                                            <span class="invalid-feedback">Oops! include the Date of Birth!</span>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="separator mb-4"></div>
                                    <div class="d-flex justify-content-between mb-9" style="margin-left:15px;margin-right:20px;">
                                        <span id="teacher_step_three_back" class="btn btn-light-primary me-3">Back</span>
                                        <button type="submit" id="student_edit_submit" class="btn btn-light-primary">Edit</button>
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
        <!--end::Modal - edit_student-->

        <script>
            var printButton = document.getElementById('print-button');
            printButton.addEventListener('click', function() {
                    // Add 'd-none' class to the modal footer
                    var modalFooter = document.querySelector('.modal-footer');
                    modalFooter.classList.add('d-none');
                    
                    // Print the page
                    window.print();
                    
                    // Remove 'd-none' class after printing is done
                    modalFooter.classList.remove('d-none');
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="{{asset('demo1/js/all_jquery.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            //create_organisation
            $(document).ready(function(){

                $('#student_edit_submit').click(function() {
                    $("#student_edit_submit").prop('disabled',true);
                    $('#student_edit_submit').addClass('spinner spinner-white spinner-right').text('Editing ...');
                    // Perform the deletion using AJAX or any other method
                    $.ajax({
                        url: '/student_edit_form',
                        type: 'post',
                        data: {
                            s_f_name:$("#s_f_name").val(),
                            s_s_name:$("#s_s_name").val(),
                            s_email:$("#s_email").val(),
                            s_password:$("#s_password").val(),
                            s_class:$("#s_class").val(),
                            s_id:$("#s_id").val(),
                            s_address:$("#s_address").val(),
                            s_gender:$("#s_gender").val(),
                            s_nationality:$("#s_nationality").val(),
                            s_dob:$("#s_dob").val(),
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

                $('#student_id_edit').on('click', function(){
                    $('#edit_student').modal('show');
                });

                function checkMarksStatus() {
                    setInterval(function() {
                        // Make an AJAX request to the server
                        var id = $('#student_popup_id').val();
                        $.ajax({
                        url: '/check-marks-status/'+ id,
                        method: 'GET',
                        success: function(response) {
                            // Check if the status is 'uploaded'
                            if (response.status === 'uploaded') {
                            // Retrieve the message and ID for the corresponding term
                            var termMessage = response.message;
                            var communicationId = response.id;

                            // Show the modal with the retrieved message and ID
                            $('#communication-modal .modal-body').text(termMessage);
                            $('#communication-modal').attr('data-communication-id', communicationId);
                            $('#communication-modal').modal('show');
                            } else {
                            // Hide the modal if the status is not 'uploaded'
                            $('#communication-modal').modal('hide');
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.error(error);
                        }
                        });
                    }, 30000); // Check every 2 seconds
                }

                // Call the function to start checking the marks status
                checkMarksStatus();

                $('#communication-modal .close_modal').click(function() {
                    // Get the communication ID from the modal data attribute
                    var communicationId = $('#communication-modal').attr('data-communication-id');
                    //alert(communicationId);

                    // Update the status in the communication table
                    $.ajax({
                        url: '/update-status/' + communicationId,
                        method: 'PUT',
                        data: {
                            _token: '{{ csrf_token() }}' // Include the CSRF token
                        },
                        success: function(response) {
                        console.log('Status updated successfully.');
                        },
                        error: function(xhr, status, error) {
                        console.error(error);
                        }
                    });
                });

                $("#last_name").prop('disabled',true);
                $("#email").prop('disabled',true);
                $("#roll_id").prop('disabled',true);
                $("#password").prop('disabled',true);
                $("#password_confirmation").prop('disabled',true);
                $("#submit_register").prop('disabled',true);

				//begin student_results 
					$('#Student_button').on('click', function(){
						$('#results_add_modal').modal('show');
					});

                    $('#results_form').on('submit', function(e) {
                        e.preventDefault(); // Prevent default form submission
                        
                        // Get form data
                        var formData = $(this).serialize();
                        
                        // Send form data via Ajax
                        $.ajax({
                            url: '/save-result', // Replace with your Laravel route URL
                            method: 'POST',
                            data: formData,
                            success: function(response) {
                                // Handle success response
                                console.log(response);
                                // Optionally, display a success message to the user
                                window.location.reload();
                            },
                            error: function(xhr) {
                                // Handle error response
                                console.log(xhr.responseText);
                                // Optionally, display an error message to the user
                            }
                        });
                    });
				//end student_results	

            })
        </script>

	</body>


</x-base-layout>