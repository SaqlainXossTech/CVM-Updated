@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/admin/additional-info')}}"><b>Additional Info</b></a></li>
</ul>

<form action="{{URL::to('/admin/search')}}" method="GET">
    <input type="text" name="additional_info" required/>
    <button type="submit" class="btn btn-info">Search</button>
</form>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span><b>Additional Info</b></h2>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>User ID</th>
                      <th>Skills</th>
                      <th>Hobby</th>
                      <th>Language</th>
                      <th>Linkedin</th>
                      <th>Github</th>
                      <th>Twitter</th>
                      <th>Behance</th>
                      <th>Create</th>
                      <th>Update</th>
                  </tr>
              </thead>
            @foreach( $infos as $data )
              <tbody>
                <tr>
                    <td class="center">{{ $data->user_id }}</td>
                    <td class="center">{{ $data->skills }}</td>
                    <td class="center">{{ $data->hobby }}</td>
                    <td class="center">{{ $data->language }}</td>
                    <td class="center">{{ $data->linkedin }}</td>
                    <td class="center">{{ $data->github }}</td>
                    <td class="center">{{ $data->twitter }}</td>
                    <td class="center">{{ $data->behance }}</td>
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
    {!! $infos->links() !!}
</div>

@endsection
