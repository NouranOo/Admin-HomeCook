@extends('layouts.master')
@section('title')
الطلبات
@endsection
@section('content')
                    <div class="content">
                        <div class="col-sm-12 page-heading">
                            <div class="col-sm-6">

                            </div><!--End col-md-6-->
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li class="active">الطلبات</li>
                                </ul>
                            </div><!--End col-md-6-->
                        </div>
                        <div class="spacer-15"></div>
                        <div class="widget">
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table id="datatable"  class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>المستخدم</th>
                                                <th>الطباخ</th>
                                                <th>السعر</th>
                                                <th>الوقت</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $index => $order)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$order->User->UserName}}</td>
                                                <td>{{$order->Cooker->Kitchen_Name}}</td>
                                                <td>{{$order->Total_price}}</td>
                                                <td>{{$order->Created_at}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Page-Content-->
@endsection
