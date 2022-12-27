@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/admin/all-jobs')}}"><b>Job Circular</b></a></li>
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
            <h2><i class="halflings-icon user"></i><span class="break"></span><b>Job Circular</b></h2>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>Company Name</th>
                      <th>Job Title</th>
                      <th>Category</th>
                      <th>Apply Link</th>
                      <th>Circular PDF</th>
                      <th>Deadline</th>
                      <th>Action</th>
                  </tr>
              </thead>
            @foreach( $all_jobs as $data )
              <tbody>
                <tr>
                    {{--  <td class="center">{{ $data->id }}</td>  --}}
                    <td class="center">{{ $data->company_name }}</td>
                    <td class="center">{{ $data->job_title }}</td>
                    <td class="center">{{ $data->category }}</td>
                    <td class="center">{{ $data->apply_link }}</td>
                    <td class="center">{{ $data->pdf_link }}</td>
                    <td class="center">{{ $data->end_date }}</td>
                    <td class="center">
                            <a class="btn btn-info" href="{{URL::to('/admin/edit-jobs/'. $data->id)}}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{URL::to('/admin/delete-jobs/'. $data->id)}}" id="delete">
                                <i class="halflings-icon white trash"></i>
                            </a>
                    </td>

                </tr>
              </tbody>
            @endforeach
          </table>

        </div>
    </div><!--/span-->

</div><!--/row-->

<div class="pagination">
    {!! $all_jobs->links() !!}
</div>

@endsection
