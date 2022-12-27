<div class="row-fluid sortable" style="color:rgba(70, 4, 31, 0.959)">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <p align="right">Date: {{ $date }}</p>
            <h1 align="center" style="color:rgb(11, 60, 184)">CV Master User Report</h1>
            <h3 style="color:rgb(44, 138, 4)"><i class="halflings-icon user"></i><span class="break"></span><b>Total User : {{ $totalUsers }}</b></h3>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th style="font-weight: bold;">User ID</th>
                      <th style="font-weight: bold;">Name</th>
                      <th style="font-weight: bold;">Mobile</th>
                      <th style="font-weight: bold;">Remarks</th>
                  </tr>
              </thead>
            @foreach( $allUsers as $data )
              <tbody>
                <tr>
                    <td class="center">{{ $data->id }}</td>
                    <td class="center">{{ $data->name }}</td>
                    <td class="center">{{ $data->mobile }}</td>
                </tr>
              </tbody>
            @endforeach
          </table>

        </div>
    </div><!--/span-->

</div><!--/row-->

{{--  <div class="pagination">
    {!! $allUsers->links() !!}
</div>  --}}
