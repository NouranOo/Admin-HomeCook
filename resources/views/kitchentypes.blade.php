@extends('layouts.master')
@section('title')
أنواع المطابخ
@endsection

@section('content')
<div class="content">
                        <div class="col-sm-12 page-heading">
                            <div class="col-sm-6">

                            </div><!--End col-md-6-->
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li class="active">أنواع النطابخ</li>
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
                                                <th>Name </th>
                                                <th>الاسم بالعربى</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($kitchenTypes as $index => $kitchen)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$kitchen->Name_en}}</td>
                                                <td>{{$kitchen->Name_ar}}</td>

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
