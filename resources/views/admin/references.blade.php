@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/admin/projects')}}"><b>References</b></a></li>
</ul>

<form action="{{URL::to('/admin/search')}}" method="GET">
    <input type="text" name="reference" required/>
    <button type="submit" class="btn btn-info">Search</button>
</form>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span><b>References</b></h2>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>User ID</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Organization</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Create</th>
                      <th>Update</th>
                  </tr>
              </thead>
            @foreach( $references as $data )
              <tbody>
                <tr>
                    <td class="center">{{ $data->user_id }}</td>
                    <td class="center">{{ $data->name }}</td>
                    <td class="center">{{ $data->designation }}</td>
                    <td class="center">{{ $data->organization }}</td>
                    <td class="center">{{ $data->mobile }}</td>
                    <td class="center">{{ $data->email }}</td>
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
    {!! $references->links() !!}
</div>

@endsection
