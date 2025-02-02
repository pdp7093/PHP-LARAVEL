@extends('admin.layout.struct')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Services</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Add Service Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <h1 class="section-title position-relative text-center mb-5">Add Services</h1>

            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="contact-form bg-light rounded p-4">
                    <a href="Manage_Services"
                        class=" float-right btn btn-info btn-lg rounded-pill rounded-3 mb-5  mx-5 mt-4 style-btn">Manage
                        Services</a>
                    <div id="success"></div>

                    <form name="sentMessage" novalidate="novalidate" method="get" action="Manage_Services" class="p-3 ">
                        <div class="form-group">
                            <label for="service_title" class="ms-3">Service Title</label>
                            <input type="text" class="form-control p-4" id="service_title"
                                placeholder="Enter Service Name" required="required"
                                data-validation-required-message="Please Enter a Service Name" name="service_title" />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <label for="service_descp" class="ms-3">Service Description</label>
                            <textarea class="form-control p-4" rows="3" id="service_descp"
                                placeholder="Enter Service Description" required="required"
                                data-validation-required-message="Please Enter Service Description"
                                name="product_weight"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <label for="service_image" class="ms-3">Service Image</label>
                            <input type="file" class="form-control p-4" id="service_image"
                                placeholder="Enter Service Name" required="required"
                                data-validation-required-message="Upload a Service Image" name="service_image" />
                            <p class="help-block text-info">Upload Clear Image of Service</p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-primary btn-block py-3 px-5 mt-5 add_this" type="submit"
                                id="add_this">Add Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Service End -->
@endsection