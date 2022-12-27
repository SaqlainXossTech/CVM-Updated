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
					<a href="#"><b>Add Interview Tips</b></a>
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span><b>Add Interview Tips</b></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">
						<form class="form-horizontal" action="{{url('/admin/save-tips')}}" method="post">
                            @csrf
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Interview Tips</b></label>
							  <div class="controls">
								<input type="text" class="input-xxlarge" name="tips" value="-  " required="">
							  </div>
							</div>

							<div class="form-actions">
                              <button type="reset" class="btn">Cancel</button>
							  <button type="submit" class="btn btn-info">Add Tips</button>
							</div>

						  </fieldset>
						</form>

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection()
