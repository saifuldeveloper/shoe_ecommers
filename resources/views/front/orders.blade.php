@extends('front.custom_dashboard')

@section('user_content')
<div class="row">
    <!-- Profile Content -->
    <div class="col-sm-10 col-sm-offset-0 main_card">
        <div class="user_profile_card000">
            <div class="panel-heading">
                <h3 class="panel-title">  Order History</h3>
                <small>This section contains your order information</small>
            </div>
            <div class="panel-body">
                <div class="row">
                   <div class="container my-4">
                        <div class="table-responsive custom_table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center">OrderNo</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Subtotal</th>
                                    <th class="text-center">Tax</th>
                                    <th class="text-center">Total</th>
                                    
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Order Date</th>
                                    <th class="text-center">Items</th>
                                    <th class="text-center">Delivered On</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                        <td class="text-center">10001</td>  
                                        <td class="text-center">Sudhir Kumar</td>
                                        <td class="text-center">1234567891</td>
                                        <td class="text-center">$172.00</td>
                                        <td class="text-center">$36.12</td>
                                        <td class="text-center">$208.12</td>
                                        
                                        <td class="text-center">
                                        <span class="custom_badge bg-danger_custom">Canceled</span>
                                        </td>
                                        <td class="text-center">2024-07-11 00:54:14</td>
                                        <td class="text-center">2</td>
                                        <td>2024-07-07</td>
                                        <td class="text-center">
                                            <a href="{{ route('custom.order-details') }}">
                                            <div class="list-icon-function view-icon">
                                                <div class="item eye">
                                                    <i class="fa fa-eye"></i>
                                                </div>                                        
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10001</td>  
                                        <td class="text-center">Sudhir Kumar</td>
                                        <td class="text-center">1234567891</td>
                                        <td class="text-center">$172.00</td>
                                        <td class="text-center">$36.12</td>
                                        <td class="text-center">$208.12</td>
                                        
                                        <td class="text-center">
                                            <span class="custom_badge bg-warning_custom">Orders</span>
                                    </td>
                                        <td class="text-center">2024-07-11 00:54:14</td>
                                        <td class="text-center">2</td>
                                        <td>2024-07-07</td>
                                        <td class="text-center">
                                            <a href="#">
                                            <div class="list-icon-function view-icon">
                                                <div class="item eye">
                                                    <i class="fa fa-eye"></i>
                                                </div>                                        
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
