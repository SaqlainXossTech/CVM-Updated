@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/admin/users')}}"><b>Users</b></a></li>
</ul>

<form action="{{URL::to('/admin/search')}}" method="GET">
    <input type="text" name="user" required/>
    <button type="submit" class="btn btn-info">Search</button>
</form>

<form action="{{URL::to('/admin/user-excel-report')}}" method="GET">
    <p align="right">
        <button type="submit" class="btn btn-success">Export Excel</button>
    </p>
</form>
<form action="{{URL::to('/admin/user-pdf-report')}}" method="GET">
    <p align="right">
        <button type="submit" class="btn btn-success">Export PDF</button>
    </p>
</form>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span><b>Total User : {{ $totalUsers }}</b></h2>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>User ID</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Create</th>
                      <th>Update</th>
                  </tr>
              </thead>
            @foreach( $allUsers as $data )
              <tbody>
                <tr>
                    <td class="center">{{ $data->id }}</td>
                    <td class="center">{{ $data->name }}</td>
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

<div class="pagination">
    {!! $allUsers->links() !!}
</div>

@endsection
