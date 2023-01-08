@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/admin/all-suggetions')}}"><b>Suggetions</b></a></li>
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
            <h2><i class="halflings-icon user"></i><span class="break"></span><b>Suggetions</b></h2>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>Institution Name</th>
                      <th>Department</th>
                      <th>Skills</th>
                      <th>Present Address</th>
                      <th>Profile Summary</th>
                      <th>Action</th>
                  </tr>
              </thead>
            @foreach( $all_suggetions as $data )
              <tbody>
                <tr>
                    {{--  <td class="center">{{ $data->id }}</td>  --}}
                    <td class="center">{{ $data->inst_name }}</td>
                    <td class="center">{{ $data->dept }}</td>
                    <td class="center">{{ $data->skill }}</td>
                    <td class="center">{{ $data->present_address }}</td>
                    <td class="center">{{ $data->profile_summary }}</td>
                    <td class="center">
                            <a class="btn btn-info" href="{{URL::to('/admin/edit-suggetions/'. $data->id)}}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{URL::to('/admin/delete-suggetions/'. $data->id)}}" id="delete">
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
    {!! $all_suggetions->links() !!}
</div>

@endsection
