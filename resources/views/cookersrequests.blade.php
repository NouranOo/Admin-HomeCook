@extends('layouts.master')
@section('title')
طلبات الطباخين
@endsection

@section('modals')
    @foreach($cookers as $cooker)
        <div class="modal fade" id="delete_user{{$cooker->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Do you want delete Cooker ?</h5>
                        </div>
                        <div class="modal-footer text-center">
                            <a type="button" href="{{url('deletecooker/'.$cooker->id)}}" class="custom-btn red-bc modalactTBTN">Delete</a>
                            <button type="button" class="custom-btn green-bc" data-dismiss="modal">close</button>
                        </div>

                    </div>

            </div>
        </div>
        @endforeach
        @foreach($cookers as $cooker)
        <div class="modal fade" id="edit_user{{$cooker->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Do you want accept Cooker ?</h5>
                    </div>
                    <div class="modal-footer text-center">
                        <a type="button" href="{{url('acceptcooker/'.$cooker->id)}}" class="custom-btn red-bc modalactTBTN">Accept</a>
                        <button type="button" class="custom-btn green-bc" data-dismiss="modal">close</button>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
        <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="modal-content text-center" method="post"action="{{url('/addcooker')}}">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافه طباخ جديد</h5>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-6 form-group">
                            <label>اسم الطباخ</label>
                            <input class="form-control" placeholder="الاسم" name="Name" type="text" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label> اسم المطبخ</label>
                            <input class="form-control" placeholder="اسم المطبخ" name="Kitchen_Name" type="text" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>الجنسيه</label>
                            <input class="form-control" placeholder="الجنسيه" type="text"name="Nationality" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>الموبايل</label>
                            <input class="form-control" placeholder="الموبايل" type="number"name="Phone" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>كلمه السر</label>
                            <input class="form-control" placeholder="كلمه السر" type="password"name="Password" required>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="custom-btn green-bc">add</button>
                        <button type="button" class="custom-btn red-bc" data-dismiss="modal">close</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @section('content')

                    <div class="content">
                        <div class="col-sm-12 page-heading">
                            <div class="col-sm-6">
                                <h2>Cookers Requests</h2>
                            </div><!--End col-md-6-->
                            <div class="col-sm-6">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li class="active">Cookers</li>
                                </ul>
                            </div><!--End col-md-6-->
                        </div>
                        <div class="spacer-15"></div>
                        <div class="widget">
                            <div class="widget-content">
                                <div class="col-sm-12">
                                    <button  data-toggle="modal" data-target="#add_user" class="custom-btn green-bc">
                                        <i class="fa fa-plus"></i>
                                        إضافه طباخ
                                    </button>
                                </div>

                                <div class="spacer-15"></div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>الاسم</th>
                                                <th>اسم المطبخ</th>
                                                <th>الموبايل</th>
                                                <th>الجنسيه</th>
                                                <th>حساب البنك</th>
                                                <th>options</th>
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
                                                <td class="text-center">


                                                    <button  data-url="{{url('acceptcooker/'. $cooker->id)}}" data-toggle="modal" data-target="#edit_user{{$cooker->id}}" class="icon-btn green-bc"class="fa fa-pencil">
                                                      <i class=" fa fa-check"></i>
                                                        موافقه
                                                    </button>
                                                    <button data-url="{{url('deletecooker/'. $cooker->id)}}" data-toggle="modal" data-target="#delete_user{{$cooker->id}}" class="icon-btn red-bc">
                                                        <i class="fa fa-trash-o"></i>
                                                        مسح
                                                    </button>
                                                </td>
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
