@extends('web.backend.admin.layouts.master')

@section('css_after')

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('backend/admin/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/admin/plugins/editors/quill/quill.snow.css') }}">
    <!--  END CUSTOM STYLE FILE  -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('backend/admin/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END PAGE LEVEL STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('backend/admin/css/components/tabs-accordian/custom-accordions.css') }}" rel="stylesheet"
        type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/admin/plugins/bootstrap-select/bootstrap-select.min.css') }}">
    <!--  END CUSTOM STYLE FILE  -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('backend/admin/plugins/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/admin/plugins/noUiSlider/custom-nouiSlider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/admin/plugins/bootstrap-range-Slider/bootstrap-slider.css') }}" rel="stylesheet"
        type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('backend/admin/plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/admin/plugins/noUiSlider/nouislider.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
@endsection


@section('content')

    <div class="row col-md-12">
        <div class="col-md-8">
            <div class="col-md-12 mb-3">

                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4> Basic Information </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area" style="height: auto">

                        <div class="form-group mb-4">
                            <label> <i> Courese Name: </i></label>
                            <input type="text" class="form-control" placeholder="Enter Course Name" name="name" />
                        </div>






                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> <i> Admission Start </i> </label>
                                <input id="basicFlatpickr1" value="" class="form-control flatpickr flatpickr-input active"
                                    type="text" placeholder="Select Date.." name="admission_start" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4"> <i> Admission Deadline </i> </label>
                                <input id="basicFlatpickr2" value="" class="form-control flatpickr flatpickr-input active"
                                    type="text" placeholder="Select Date.." name="admission_close" />
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label> <i> Admission Status </i></label> <br>
                            <select class="selectpicker form-control" multiple data-selected-text-format="count > 3">
                                <option> Admission Going </option>
                                <option> Admission Closed </option>

                            </select>
                        </div>


                    </div>
                </div>


            </div>
            <div class="col-md-12 mb-3">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4> Course Description </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div id="editor-container">
                            <textarea name="description" id="" cols="30" rows="10">

                                            </textarea>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 mb-3">
                <div class="statbox widget box box-shadow">
                    <div id="accordionBasic" class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Course Content Sections </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div id="toggleAccordion">


                            {{-- <div class="card">
                                <div class="card-header" id="headingOne1">
                                    <section class="mb-0 mt-0">
                                        <div role="menu" class="collapsed" data-toggle="collapse"
                                            data-target="#defaultAccordionOne" aria-expanded="true"
                                            aria-controls="defaultAccordionOne">
                                            Collapsible Group Item #1 <div class="icons"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg></div>
                                        </div>
                                    </section>
                                </div>

                                <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1"
                                    data-parent="#toggleAccordion">
                                    <div class="card-body">

                                        <div class="form-group mb-4">
                                            <label> <i> Section Name: </i></label>
                                            <input type="text" class="form-control" placeholder="Enter Course Name"
                                                name="" />
                                        </div>
                                        <div class="form-group mb-4">
                                            <label> <i> Section Description: </i></label>
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label> <i> Section Name: </i></label>
                                            <input type="file" class="form-control" placeholder="Enter Course Name"
                                                name="" />
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <form class="form-main">
                                <div class="form-block">
                                    {{-- <div class="form-group">
                                        Name
                                        <input type="text" name="name[]" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Email
                                        <input type="text" name="email[]" class="form-control">
                                    </div>
                                    <hr> --}}

                                    <div class="card">
                                        <div class="card-header" id="headingOne1">
                                            <section class="mb-0 mt-0">
                                                <div role="menu" class="collapsed" data-toggle="collapse"
                                                    data-target="#defaultAccordionOne" aria-expanded="true"
                                                    aria-controls="defaultAccordionOne">
                                                    Collapsible Group Item #1 <div class="icons"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg></div>
                                                </div>
                                            </section>
                                        </div>
        
                                        <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1"
                                            data-parent="#toggleAccordion">
                                            <div class="card-body">
        
                                                <div class="form-group mb-4">
                                                    <label> <i> Section Name: </i></label>
                                                    <input type="text" class="form-control" placeholder="Enter Course Name"
                                                        name="" />
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label> <i> Section Description: </i></label>
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label> <i> Section Name: </i></label>
                                                    <input type="file" class="form-control" placeholder="Enter Course Name"
                                                        name="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </form>


                            <a class="btn btn-primary add-more-btn">Add</a>








                        </div>


                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="col-md-12 mb-3">
                {{-- <div id="fuSingleFile" class="col-lg-12 layout-spacing"> --}}
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Upload Cover Image</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <label>Upload (Single File) <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                    accept="image/*" name="image">
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}

            </div>

            <div class="col-md-12 mb-3">

                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4> Other Information</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">



                        <div class="form-group mb-4">
                            <label for="inputAddress2"> <i> Course Category </i> </label> <br>
                            <select class="selectpicker form-control">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                                <option>Mayonnaise</option>
                                <option>Barbecue Sauce</option>
                                <option>Salad Dressing</option>
                                <option>Tabasco</option>
                                <option>Salsa</option>
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                                <option data-divider="true">divider</option>
                                <option>Mayonnaise</option>
                                <option>Barbecue Sauce</option>
                                <option>Salad Dressing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputCity"> <i> Course Fee </i> </label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon5">TK</span>
                                </div>
                                <input name="fee" type="text" class="form-control" placeholder="Username"
                                    aria-label="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputCity"> <i> Course Duration </i></label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon5">Hour</span>
                                </div>
                                <input name="duration" type="text" class="form-control" placeholder="Username"
                                    aria-label="Username">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>  </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area text-center">
                        <button class="btn btn-primary btn-block mb-4 mr-2">Save and Continue</button>



                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">

    </div>


@endsection

@section('js_after')

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('backend/admin/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/editors/quill/quill.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/editors/quill/custom-quill.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script src="{{ asset('backend/admin/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')

    </script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('backend/admin/js/components/ui-accordions.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('backend/admin/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('backend/admin/plugins/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/noUiSlider/nouislider.min.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/flatpickr/custom-flatpickr.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/noUiSlider/custom-nouiSlider.js') }}"></script>
    <script src="{{ asset('backend/admin/plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        var f1 = flatpickr(document.getElementById('basicFlatpickr1'));
        var f2 = flatpickr(document.getElementById('basicFlatpickr2'));

    </script>

    <script>
        $('.add-more-btn').click(function() {
            var clone = $('.form-main').clone('.form-block');
            $('.form-main').append(clone);
        });

    </script>


@endsection
