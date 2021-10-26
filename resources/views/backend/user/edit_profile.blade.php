@extends('admin.admin_master')

@section('admin')


<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Profile</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('profile.store', $editData->id)}}" enctype="multipart/form-data">
@csrf
					<div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>Your Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name" class="form-control" value="{{ $editData->name}}" required=""> </div>
                            <div class="form-control-feedback"></div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>Your Emaill <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="email" name="email" class="form-control" value="{{ $editData->email}}" required="" > <div class="help-block"></div></div>
                        </div>
                      </div>

					</div>

						<div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>Your Mobile <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="mobile" class="form-control" value="{{ $editData->mobile}}" required=""> </div>
                            <div class="form-control-feedback"></div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>Your Address <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="address" class="form-control" value="{{ $editData->address}}" required="" > <div class="help-block"></div></div>
                        </div>
                      </div>

					</div>

                    <div class="row">
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>Your Gender <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="gender" id="gender" required="" class="form-control">
                                    <option value="" selected='' disabled="">Select Gender</option>
                                    <option value="Male" {{ $editData->gender == "Male" ? "selected" : ""}}>Male</option>
                                    <option value="Female" {{ $editData->gender == "Female" ? "selected" : ""}}>Female</option>
                                </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <h5>Your Profile Image<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" id="image" class="form-control" required="" > <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="controls">
                                <img id="showImage" src="{{ (!empty($editData->image)) ? url('upload/user_images/'.$editData->image) : url('upload/no_image.jpg')}}" style="width: 100px; height: 100px; border: 1px solid #ddd;">
                            </div>
                        </div>

                      </div>

					</div>
                            
                            
						<div class="text-xs-right">
							<input type="submit" value="Update" class="btn btn-rounded btn-success mb-5">
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

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>


@endsection