@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/admin/projects')}}"><b>Projects</b></a></li>
</ul>

<form action="{{URL::to('/admin/search')}}" method="GET">
    <input type="text" name="project" required/>
    <button type="submit" class="btn btn-info">Search</button>
</form>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span><b>Projects</b></h2>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>User ID</th>
                      <th>Project Name</th>
                      <th>Project Summary</th>
                      <th>Project Start</th>
                      <th>Project End</th>
                      {{--  <th>Create</th>
                      <th>Update</th>  --}}
                  </tr>
              </thead>
            @foreach( $projects as $data )
              <tbody>
                <tr>
                    <td class="center">{{ $data->user_id }}</td>
                    <td class="center">{{ $data->project_name }}</td>
                    <td class="center">{{ $data->project_summary }}</td>
                    <td class="center">{{ $data->start }}</td>
                    <td class="center">{{ $data->end }}</td>
                    {{--  <td class="center">{{ $data->created_at }}</td>
                    <td class="center">{{ $data->updated_at }}</td>  --}}
                </tr>
              </tbody>
            @endforeach
          </table>

        </div>
    </div><!--/span-->

</div><!--/row-->

<div class="pagination">
    {!! $projects->links() !!}
</div>

@endsection
