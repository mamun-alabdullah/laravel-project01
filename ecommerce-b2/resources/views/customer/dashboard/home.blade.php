@extends('master.front.master')

@section('title')
    Customer Login
@endsection

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Customer Dashboard</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li>Customer Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item">My Dashboard</a>
                            <a href="" class="list-group-item">My Profile</a>
                            <a href="" class="list-group-item">My All Order</a>
                            <a href="" class="list-group-item">My Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Order ID</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>123</td>
                                <td>2560</td>
                                <td>12.12.25</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>123</td>
                                <td>2560</td>
                                <td>12.12.25</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>123</td>
                                <td>2560</td>
                                <td>12.12.25</td>
                                <td>Pending</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
