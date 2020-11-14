@extends('layouts.master')
@section('title')
    Home Cook
@endsection
@section('content')
    <div class="content">
                        <div class="col-sm-12">
                            <div class="widget">
                                <div class="widget-content">
                                    <div class="col-sm-12">
                                        <img src="assets/images/logo.png" class="intro-logo">
                                    </div>
                                    <div class="funfact-lists">
                                        <div class="col-sm-4">
                                            <div class="counter">
                                                <h3 class="timer" data-to="{{$users}}" data-speed="2000">0</h3>
                                                <div class="count-name">المستخدمين</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="counter">
                                                <h3 class="timer" data-to="{{$cookers}}" data-speed="2000">0</h3>
                                                <div class="count-name">الطباخين</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="counter">
                                                <h3 class="timer" data-to="{{$meals}}" data-speed="2000">0</h3>
                                                <div class="count-name">الوجبات</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="counter">
                                                <h3 class="timer" data-to="{{$kitchenTypes}}" data-speed="2000">0</h3>
                                                <div class="count-name">أنواع المطابخ</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="counter">
                                                <h3 class="timer" data-to="{{$orders}}" data-speed="2000">0</h3>
                                                <div class="count-name">الطلبات</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="counter">
                                                <h3 class="timer" data-to="{{$cobons}}" data-speed="2000">0</h3>
                                                <div class="count-name">الكوبونات</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End Page-Content-->
@endsection
