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
@endsection


@section('content')

    <div class="row col-md-12">
        <div class="col-md-8">
            <div class="col-md-12 mb-3">

                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Form controls</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area" style="height: 571px">
                        <form>
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Apartment, studio, or floor" />
                            </div>
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check pl-0">
                                    <div class="custom-control custom-checkbox checkbox-info">
                                        <input type="checkbox" class="custom-control-input" id="gridCheck" />
                                        <label class="custom-control-label" for="gridCheck">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">
                                Sign in
                            </button>
                        </form>
                    </div>
                </div>


            </div>
            <div class="col-md-12 mb-3">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4> Basic </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div id="editor-container">
                            <h1>This is a heading text...</h1>
                            <br />
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id
                                mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium
                                auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare.
                                Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus
                                vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum
                                vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur
                                ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor
                                dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero
                                fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat.
                                Praesent fringilla dolor sit amet leo pulvinar semper. </p>
                            <br />
                            <p> Curabitur vel tincidunt dui. Duis vestibulum eget velit sit amet aliquet. Curabitur vitae
                                cursus ex. Aliquam pulvinar vulputate ullamcorper. Maecenas luctus in eros et aliquet. Cras
                                auctor luctus nisl a consectetur. Morbi hendrerit nisi nunc, quis egestas nibh consectetur
                                nec. Aliquam vel lorem enim. Vestibulum ante ipsum primis in faucibus orci luctus et
                                ultrices posuere cubilia Curae; Nunc placerat, enim quis varius luctus, enim arcu tincidunt
                                purus, in vulputate tortor mi a tortor. Praesent porta ornare fermentum. Praesent sed ligula
                                at ante tempor posuere a at lorem. </p>
                            <br />
                            <p> Aliquam diam felis, vehicula ut ipsum eu, consectetur tincidunt ipsum. Vestibulum sed metus
                                ac nisi tincidunt mollis sed non urna. Vivamus lacinia ullamcorper interdum. Sed sed erat
                                vel leo venenatis pretium. Sed aliquet sem nunc, ut iaculis dolor consectetur et. Vivamus
                                ligula sapien, maximus nec pellentesque ut, imperdiet at libero. Vivamus semper nulla
                                lectus, id dapibus nulla convallis id. Quisque elementum lectus ac dui gravida, ut molestie
                                nunc convallis. Pellentesque et odio non dolor convallis commodo sit amet a ante. </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 mb-3">
                <div class="statbox widget box box-shadow">
                    <div id="accordionBasic" class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Basic</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div id="toggleAccordion">
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
                                        <p class="">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>

                                        <p class="">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo1">
                                    <section class="mb-0 mt-0">
                                        <div role="menu" class="" data-toggle="collapse" data-target="#defaultAccordionTwo"
                                            aria-expanded="false" aria-controls="defaultAccordionTwo">
                                            Collapsible Group Item #2 <div class="icons"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg></div>
                                        </div>
                                    </section>
                                </div>
                                <div id="defaultAccordionTwo" class="collapse show" aria-labelledby="headingTwo1"
                                    data-parent="#toggleAccordion">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li><a href="javascript:void(0);" class="">Apple</a></li>
                                            <li><a href="javascript:void(0);" class="">Orange</a></li>
                                            <li><a href="javascript:void(0);" class="">Banana</a></li>
                                            <li><a href="javascript:void(0);" class="">list</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree1">
                                    <section class="mb-0 mt-0">
                                        <div role="menu" class="collapsed" data-toggle="collapse"
                                            data-target="#defaultAccordionThree" aria-expanded="false"
                                            aria-controls="defaultAccordionThree">
                                            Collapsible Group Item #3 <div class="icons"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg></div>
                                        </div>
                                    </section>
                                </div>
                                <div id="defaultAccordionThree" class="collapse" aria-labelledby="headingThree1"
                                    data-parent="#toggleAccordion">
                                    <div class="card-body">
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <button class="btn btn-primary mt-4">Accept</button>
                                    </div>
                                </div>
                            </div>
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
                                <h4>Single File Upload</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <label>Upload (Single File) <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                    accept="image/*">
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
                                <h4>Form controls</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area" style="height: 571px">
                        <form>
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Apartment, studio, or floor" />
                            </div>
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check pl-0">
                                    <div class="custom-control custom-checkbox checkbox-info">
                                        <input type="checkbox" class="custom-control-input" id="gridCheck" />
                                        <label class="custom-control-label" for="gridCheck">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">
                                Sign in
                            </button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header"> 
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4> Block Buttons </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area text-center">
                        <button class="btn btn-primary btn-block mb-4 mr-2">Button</button>
                        <input type="submit" class="btn btn-info btn-block mb-4 mr-2" value="Input">
                        <a href="javascript:void(0);" class="btn btn-success btn-block mb-4 mr-2">Link</a>

                        <div class="code-section-container">
                                    
                            <button class="btn toggle-code-snippet"><span>Code</span></button>
                            <div class="code-section text-left">
                                <pre>
                                &lt;button class="btn btn-primary btn-block mb-4 mr-2"&gt;Button&lt;/button&gt;

                                &lt;input type="submit" class="btn btn-info btn-block mb-4 mr-2" value="Input"&gt;

                                &lt;a href="javascript:void(0);" class="btn btn-success btn-block mb-4 mr-2"&gt;Link&lt;/a&gt;
                                </pre>
                            </div>
                        </div>

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

@endsection
