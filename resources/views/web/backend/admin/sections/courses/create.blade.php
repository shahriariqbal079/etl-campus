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

    <link rel="stylesheet" href="{{ asset('backend/admin/plugins/summernote-0.8.18/summernote-lite.min.css') }}">



@endsection
@section('content')
    <form action="{{ route('admin.course.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

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
                                    <input id="basicFlatpickr1" value=""
                                        class="form-control flatpickr flatpickr-input active" type="text"
                                        placeholder="Select Date.." name="admission_start" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4"> <i> Admission Deadline </i> </label>
                                    <input id="basicFlatpickr2" value=""
                                        class="form-control flatpickr flatpickr-input active" type="text"
                                        placeholder="Select Date.." name="admission_close" />
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label> <i> Admission Status </i></label> <br>
                                <select class="selectpicker form-control" multiple data-selected-text-format="count > 3"
                                    name="admission_status">
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
                            <textarea id="summernote" name="description">

                                                                </textarea>


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

                            <div class="mb-2 ml-5">
                                <a class="extra-fields-customer btn btn-primary" href="#">
                                    <i class="fa fa-plus"></i> Add More Section</a>
                            </div>

                            <div class="customer_records  ">

                                <div class="row  rounded p-4 mx-5 mb-1 mt-2 " style="border: 2px solid #f5f5f5;">

                                    <div class="form-group col-md-12 mb-1">
                                        <label> <i> Section Name: </i></label>
                                        <input type="text" class="form-control" placeholder="Enter Course Name"
                                            name="title[]" />
                                    </div>
                                    <div class="form-group col-md-12 mb-1">
                                        <label> <i> Section Description: </i></label>
                                        <textarea class="form-control" id="" cols="30" rows="2"
                                            name="content_description[]"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 mb-1">
                                        <label> <i> Section File: </i></label>
                                        <input type="file" class="form-control" placeholder="Enter Course Name"
                                            name="file[]" />
                                    </div>
                                </div>
                            </div>
                            <div style="" class="customer_records_dynamic "></div>
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
                                <select class="selectpicker form-control" name="category">
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
                                    <h4> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area text-center">
                            <button type="submit" class="btn btn-primary btn-block mb-4 mr-2">Save and Continue</button>



                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">

        </div>

    </form>

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
        $('.extra-fields-customer').click(function() {
            $('.customer_records').clone().appendTo('.customer_records_dynamic');
            $('.customer_records_dynamic .customer_records').addClass('single remove');
            $('.single .extra-fields-customer').remove();
            $('.single').append(
                '<a href="#" class="remove-field btn-remove-customer btn btn-sm btn-danger ml-5 mb-3"> Remove Fields</a>'
            );
            $('.customer_records_dynamic > .single').attr("class", "remove");

            $('.customer_records_dynamic input').each(function() {
                var count = 0;
                var fieldname = $(this).attr("name");
                $(this).attr('name', fieldname + count);
                count++;
            });

        });

        $(document).on('click', '.remove-field', function(e) {
            $(this).parent('.remove').remove();
            e.preventDefault();
        });

    </script>


    <script src="{{ asset('backend/admin/plugins/summernote-0.8.18/summernote-lite.min.js') }}"></script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

    </script>




@endsection
