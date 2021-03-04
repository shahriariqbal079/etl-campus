@extends('web.backend.admin.layouts.master')

@section('css_after')

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/apps/contacts.css') }} " rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->

@endsection


@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                <div class="col-lg-12">
                    <div class="widget-content searchable-container list">

                        <div class="row">
                            <div
                                class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                                <form class="form-inline my-2 my-lg-0">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                        <input type="text" class="form-control product-search" id="input-search"
                                            placeholder="Search Contacts...">
                                    </div>
                                </form>
                            </div>

                            <div
                                class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                                <div class="d-flex justify-content-sm-end justify-content-center">
                                    <svg id="btn-add-contact" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>

                                    <div class="switch align-self-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-list view-list active-view">
                                            <line x1="8" y1="6" x2="21" y2="6"></line>
                                            <line x1="8" y1="12" x2="21" y2="12"></line>
                                            <line x1="8" y1="18" x2="21" y2="18"></line>
                                            <line x1="3" y1="6" x2="3" y2="6"></line>
                                            <line x1="3" y1="12" x2="3" y2="12"></line>
                                            <line x1="3" y1="18" x2="3" y2="18"></line>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-grid view-grid">
                                            <rect x="3" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="14" width="7" height="7"></rect>
                                            <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addContactModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">

                                        <form action="{{route('admin.course.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="modal-body">
                                                <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                                <div class="add-contact-box">
                                                    <div class="add-contact-content">
                                                        {{-- <form id="addContactModalTitle"> --}}
                                                            <div class="row">

                                                                <div class="form-group col-md-6">
                                                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="" name="name"
                                                                        placeholder="Name">
                                                                    @error('title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                {{-- <div class="col-md-6">
                                                                    <div class="contact-name">
                                                                        <i class="flaticon-user-11"></i>
                                                                        <input type="text" id="c-name" class="form-control" name="name"
                                                                            placeholder="Course Name">
                                                                        <span class="validation-text"></span>
                                                                    </div>
                                                                </div> --}}
                                                                {{-- <div class="col-md-6">
                                                                    <div class="contact-email">
                                                                        <i class="flaticon-mail-26"></i>
                                                                        <input type="text" id="c-email" class="form-control" name="fee"
                                                                            placeholder="Fee">
                                                                        <span class="validation-text"></span>
                                                                    </div>
                                                                </div> --}}

                                                                <div class="form-group col-md-6">
                                                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="" name="fee"
                                                                        placeholder="Fee">
                                                                    @error('title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                {{-- <div class="col-md-6">
                                                                    <div class="contact-name">
                                                                        <i class="flaticon-user-11"></i>
                                                                        <input type="date" id="" class="form-control" name="admission_start"
                                                                            placeholder="Start Date">
                                                                        <span class="validation-text"></span>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="form-group col-md-6">
                                                                    <input type="date" class="form-control @error('title') is-invalid @enderror" id="" name="admission_start"
                                                                        placeholder="Fee">
                                                                    @error('title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <input type="date" class="form-control @error('title') is-invalid @enderror" id="" name="admission_close"
                                                                        placeholder="Close">
                                                                    @error('title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                {{-- <div class="col-md-6">
                                                                    <div class="contact-email">
                                                                        <i class="flaticon-mail-26"></i>
                                                                        <input type="date" id="" class="form-control" name="admission_close"
                                                                            placeholder="Close dat">
                                                                        <span class="validation-text"></span>
                                                                    </div>
                                                                </div> --}}

                                                            </div>



                                                            <div class="row">
                                                                {{-- <div class="col-md-6">
                                                                    <div class="contact-occupation">
                                                                        <i class="flaticon-fill-area"></i>
                                                                        <input type="text" id="c-occupation"
                                                                            class="form-control" placeholder="Duration" name="duration">
                                                                    </div>
                                                                </div> --}}
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="" name="duration"
                                                                        placeholder="Duration">
                                                                    @error('title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                                {{-- <div class="col-md-6">
                                                                    <div class="contact-phone">
                                                                        <i class="flaticon-telephone"></i>
                                                                        <input type="file" id="c-phone" class="form-control"
                                                                            placeholder="Image">
                                                                        <span class="validation-text"></span>
                                                                    </div>
                                                                </div> --}}

                                                                <div class="form-group col-md-6">
                                                                    <input type="file" class="form-control @error('title') is-invalid @enderror" id="" name="image"
                                                                        placeholder="Close">
                                                                    @error('title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="contact-location">
                                                                        <i class="flaticon-location-1"></i>
                                                                        <input type="text" id="c-location" name="description"
                                                                            class="form-control" placeholder="Description">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        {{-- </form> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btn-edit" class="float-left btn">Save</button>

                                                <button class="btn" data-dismiss="modal"> <i class="flaticon-delete-1"></i>
                                                    Discard</button>

                                                <button type="submit" id="btn-add" class="btn">Add</button>
                                            </div>

                                        </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="searchable-items list">
                            <div class="items items-header-section">
                                <div class="item-content">
                                    <div class="">
                                        <div class="n-chk align-self-center text-center">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" id="contact-check-all">
                                                <span class="new-control-indicator"></span>
                                            </label>
                                        </div>
                                        <h4>Course</h4>
                                    </div>
                                    <div class="user-email">
                                        <h4>Admission</h4>
                                    </div>
                                    <div class="user-location">
                                        <h4 style="margin-left: 0;">Fee</h4>
                                    </div>
                                    <div class="user-phone">
                                        <h4 style="margin-left: 3px;">Duration</h4>
                                    </div>
                                    <div class="action-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            @if ($courses)
                            @foreach ($courses as $course)
                            <div class="items">
                                <div class="item-content">
                                    <div class="user-profile">
                                        <div class="n-chk align-self-center text-center">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input contact-chkbox">
                                                <span class="new-control-indicator"></span>
                                            </label>
                                        </div>
                                        <img height="90" width="90" src="{{ $course->image ? asset("uploads/images/course/$course->image") : asset('backend/img/90x90.jpg') }}" alt="avatar">
                                        <div class="user-meta-info">
                                            <p class="user-name" data-name="Alan Green"> {{$course->name}} </p>
                                            <p class="user-work" data-occupation="Web Developer">Web Developing</p>
                                        </div>
                                    </div>
                                    <div class="user-email">
                                        <p class="info-title">Admission: </p>
                                        <p class="usr-email-addr" data-email="alan@mail.com">{{$course->admission_status == 1 ? "Going" : "Closed"}}</p>
                                    </div>
                                    <div class="user-location">
                                        <p class="info-title">Fee: </p>
                                        <p class="usr-location" data-location="Boston, USA"> {{$course->fee}} TK.</p>
                                    </div>
                                    <div class="user-phone">
                                        <p class="info-title">Duration: </p>
                                        <p class="usr-ph-no" data-phone="+1 (070) 123-4567">  {{  $course->duration}} Hours </p>
                                    </div>
                                    <div class="action-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-edit-2 edit">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-user-minus delete">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="23" y1="11" x2="17" y2="11"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                                
                            @endforeach
                                
                            @endif

                            

                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights
                    reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg></p>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

@endsection

@section('js_after')
    <script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }} "></script>
    <script src="{{ asset('backend/js/apps/contact.js') }} "></script>
@endsection
