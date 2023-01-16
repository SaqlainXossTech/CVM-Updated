@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/admin/personal-info')}}"><b>Personal Info</b></a></li>
</ul>

<form action="{{URL::to('/admin/search')}}" method="GET">
    <input type="text" name="personal_info" required/>
    <button type="submit" class="btn btn-info">Search</button>
</form>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span><b>Personal Info</b></h2>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>User ID</th>
                      <th>Name</th>
                      {{--  <th>Image</th>  --}}
                      {{--  <th>Father Name</th>  --}}
                      {{--  <th>Mother Name</th>  --}}
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Present Address</th>
                      <th>Permanent Address</th>
                      <th>Job Title</th>
                      {{--  <th>Marital Status</th>  --}}
                      {{--  <th>Religion</th>  --}}
                      {{--  <th>Nationality</th>  --}}
                      {{--  <th>Gender</th>  --}}
                      <th>Date Of Birth</th>
                      {{--  <th>Profile Summary</th>
                      <th>Create</th>
                      <th>Update</th>  --}}
                  </tr>
              </thead>
            @foreach( $personalInfos as $data )
              <tbody>
                <tr>
                    <td class="center">{{ $data->user_id }}</td>
                    <td class="center">{{ $data->name }}</td>
                    {{--  <td> <img src="{{URL::to($data->image)}}" style="height: 80px; width: 80px"></td>  --}}
                    {{--  <td class="center">{{ $data->father_name }}</td>  --}}
                    {{--  <td class="center">{{ $data->mother_name }}</td>  --}}
                    <td class="center">{{ $data->mobile }}</td>
                    <td class="center">{{ $data->email }}</td>
                    <td class="center">{{ $data->present_address }}</td>
                    <td class="center">{{ $data->permanent_address }}</td>
                    <td class="center">{{ $data->job_title }}</td>
                    {{--  <td class="center">{{ $data->marital_status }}</td>  --}}
                    {{--  <td class="center">{{ $data->religion }}</td>  --}}
                    {{--  <td class="center">{{ $data->nationality }}</td>  --}}
                    {{--  <td class="center">{{ $data->gender }}</td>  --}}
                    <td class="center">{{ $data->dob }}</td>
                    {{--  <td class="center">{{ $data->profile_summary }}</td>
                    <td class="center">{{ $data->created_at }}</td>
                    <td class="center">{{ $data->updated_at }}</td>  --}}
                </tr>
              </tbody>
            @endforeach
          </table>

        </div>
    </div><!--/span-->

</div><!--/row-->

<div class="pagination">
    {!! $personalInfos->links() !!}
</div>

@endsection
