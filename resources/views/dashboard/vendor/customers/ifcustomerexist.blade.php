@extends('layouts/dashboard/header')


@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                    	<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Add Customer</h4>
                                <p class="text-muted page-title-alt">You can add your new customers here</p>
                            </div>
                        </div>

                        <div class="row">
                            <!-- col -->

                        	<div class="col-lg-12">
                        		<div class="card-box">
                                   
                        			
                        			<div class="table-responsive">
                     
                                        <form method="POST" action="{{ url('vendor/customer/store') }}">
					                    {{ csrf_field() }}
					                    

                                            <input value="{{ $doesCustomerExistInUsersTable->id }}" required name="customer_id"  type="hidden" class="form-control" id="customer_name">

					                        <div class="col-lg-4">
                                                <div class="form-group">
                                                <label for="customer_name">Full Name</label>
                                                <input value="{{ $doesCustomerExistInUsersTable->name }}" required name="customer_name"  type="name" class="form-control" id="customer_name"  placeholder="Enter Name">
                                                </div>
                                            </div>
					                        
                                            <input value="{{ $doesCustomerExistInUsersTable->email }}" required name="customer_email"  type="hidden" class="form-control" placeholder="Enter Email">

                                            <div class="col-lg-4">
    					                         <div class="form-group">
    					                            <label>Email</label>
    					                            <input value="{{ $doesCustomerExistInUsersTable->email }}" required disabled type="email" class="form-control" placeholder="Enter Email">
    					                        </div>
                                            </div>

                                            <div class="col-lg-4">
    					                        <div class="form-group">
    					                            <label for="customer_phone">Phone</label>
    					                            <input value="{{ $doesCustomerExistInUsersTable->mobile }}" required name="customer_phone"  type="number" class="form-control" placeholder="Enter Phone">
    					                        </div>
                                            </div>

                                            <div class="col-lg-12">
    					                        <div class="form-group">
    					                            <label for="customer_address">Address</label>
    					                            <textarea required name="customer_address" class="form-control" placeholder="Enter Address">{{ $doesCustomerExistInUsersTable->address }}</textarea>
    					                        </div>
                                            </div>

					                        <button type="submit" class="btn btn-block btn-primary">Add Customer</button>
					                    </form>
                                        

                                    </div>

                        		</div>
                        	</div>
                        	<!-- end col -->



                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2018. All rights reserved.
                </footer>

            </div>

        </div>
        <!-- END wrapper -->


@endsection