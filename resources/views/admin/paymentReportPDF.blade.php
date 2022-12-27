<div class="row-fluid sortable" style="color:rgba(70, 4, 31, 0.959)">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <p align="right">Date: {{ $date }}</p>
            <h1 align="center" style="color:rgb(11, 60, 184)">CV Master Payment Report</h1>
            <h3 style="color:rgb(44, 138, 4)"><i class="halflings-icon user"></i><span class="break"></span><b>Total Payment : {{ $total_payment }}</b></h3>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr style="color:rgb(14, 78, 118)">
                      <th>User ID</th>
                      <th>Payment Method</th>
                      <th>Order Id</th>
                      <th>Transaction Id</th>
                      <th>Number</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Time</th>
                  </tr>
              </thead>
            @foreach( $payments as $data )
              <tbody>
                <tr>
                    <td class="center">{{ $data->user_id }}</td>
                    <td class="center">{{ $data->type }}</td>
                    <td class="center">{{ $data->order_id }}</td>
                    <td class="center">{{ $data->txid }}</td>
                    <td class="center">{{ $data->number }}</td>
                    <td class="center">{{ $data->amount }}</td>
                    <td class="center">{{ $data->status }}</td>
                    <td class="center">{{ $data->time }}</td>
                </tr>
              </tbody>
            @endforeach
          </table>

        </div>
    </div><!--/span-->

</div><!--/row-->

<div class="pagination">
    {!! $payments->links() !!}
</div>
