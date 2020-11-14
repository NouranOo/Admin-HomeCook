@extends('layouts.master')
@section('title')
المستخدمين
@endsection

@section('content')
<div class="content">
                        <div class="col-sm-12 page-heading">
                            <div class="col-sm-6">

                            </div><!--End col-md-6-->
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li class="active">المستخدمين</li>
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
                                                <th>الموبايل</th>
                                                <th>الجنسيه</th>


                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($users as $index => $user)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$user->UserName}}</td>
                                                <td>{{$user->Phone}}</td>
                                                <td>{{$user->Nationality}}</td>



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
