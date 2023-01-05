@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/admin/admins')}}"><b>Admin</b></a></li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span><b>Admin List</b></h2>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>Admin Username</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Create</th>
                      <th>Update</th>
                  </tr>
              </thead>
            @foreach( $allAdmins as $data )
              <tbody>
                <tr>
                    <td class="center">{{ $data->username }}</td>
                    <td class="center">{{ $data->email }}</td>
                    <td class="center">{{ $data->mobile }}</td>
                    <td class="center">{{ $data->created_at }}</td>
                    <td class="center">{{ $data->updated_at }}</td>
                </tr>
              </tbody>
            @endforeach
          </table>

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection
