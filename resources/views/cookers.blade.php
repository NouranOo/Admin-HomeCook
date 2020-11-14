@extends('layouts.master')
@section('title')
الطباخين
@endsection

@section('content')
<div class="content">
                        <div class="col-sm-12 page-heading">
                            <div class="col-sm-6">

                            </div><!--End col-md-6-->
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li class="active">الطباخين</li>
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
                                                <th>الاسم</th>
                                                <th>اسم المطبخ</th>
                                                <th>الموبايل</th>
                                                <th>الجنسيه</th>
                                                <th>حساب البنك</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($cookers as $index => $cooker)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$cooker->Name}}</td>
                                                <td>{{$cooker->Kitchen_Name}}</td>
                                                <td>{{$cooker->Phone}}</td>
                                                <td>{{$cooker->Nationality}}</td>
                                                <td>{{$cooker->Bank_Account}}</td>


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
