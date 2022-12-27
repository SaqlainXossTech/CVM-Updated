@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="{{URL::to('/admin/payments')}}"><b>Payments</b></a></li>
</ul>

<form action="{{URL::to('/admin/search')}}" method="GET">
    <input type="text" name="payment" required/>
    <button type="submit" class="btn btn-info">Search</button>
</form>

<form action="{{URL::to('/admin/payment-excel-report')}}" method="GET">
    <p align="right">
        <button type="submit" class="btn btn-success">Export Excel</button>
    </p>
</form>
<form action="{{URL::to('/admin/payment-pdf-report')}}" method="GET">
    <p align="right">
        <button type="submit" class="btn btn-success">Export PDF</button>
    </p>
</form>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span><b>Total Payment : {{ $total_payment }}</b></h2>
        </div>
        <div class="box-content">
            <table class="table table-hover">
              <thead>
                  <tr>
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

@endsection
