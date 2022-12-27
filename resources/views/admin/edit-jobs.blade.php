@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#"><b>Edit Jobs</b></a>
				</li>
			</ul>

            <p class="alert-success">
                <?php
                    $message=Session::get('message');
                    if($message)
                    {
                        echo $message;
                        Session::put('message', null);
                    }

                ?>
            </p>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span><b>Edit Jobs</b></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">
						<form class="form-horizontal" action="{{url('/admin/update-jobs', $edit_jobs->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Company Name</b></label>
							  <div class="controls">
								<input type="text" class="input-xxlarge" name="company_name" value="{{ $edit_jobs->company_name }}">
							  </div>
							</div>
                            <div class="control-group">
                                <label class="control-label" for="date01"><b>Job Title</b></label>
                                <div class="controls">
                                  <input type="text" class="input-xxlarge" name="job_title" value="{{ $edit_jobs->job_title }}">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="date01"><b>Apply Link</b></label>
                                <div class="controls">
                                  <input type="text" class="input-xxlarge" name="apply_link" value="{{ $edit_jobs->apply_link }}">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="date01"><b>Deadline</b></label>
                                <div class="controls">
                                  <input type="text" class="input-xxlarge" name="end_date" value="{{ $edit_jobs->end_date }}">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="date01"><b>Circular PDF</b></label>
                                <div class="controls">
                                  <input type="file" class="input-xxlarge" name="pdf" value="{{ $edit_jobs->end_date }}">
                                </div>
                            </div>

							<div class="form-actions">
                              <button type="reset" class="btn">Cancel</button>
							  <button type="submit" class="btn btn-info">Update</button>
							</div>

						  </fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()
