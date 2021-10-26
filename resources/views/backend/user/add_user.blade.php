@extends('admin.admin_master')

@section('admin')



<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add User</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('user.store')}}">
@csrf
					<div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>User Role <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="usertype" id="usertype" required="" class="form-control">
                                    <option value="" selected='' disabled="">Select User Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                            </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>User Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"></div>
                        </div>
                      </div>

					</div>

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>User Emaill <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>User Password <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required"> </div>
                            <div class="form-control-feedback"></div>
                        </div>
                      </div>

					</div>
						
						
					
                            
                            
                            
						<div class="text-xs-right">
							<input type="submit" value="Submit" class="btn btn-rounded btn-success mb-5">
						</div>

					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>




@endsection