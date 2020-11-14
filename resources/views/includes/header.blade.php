<div class="side-menu">
                    <div class="logo">
                        <img src="assets/images/logo.png">
                    </div><!--End Logo-->
                    <aside class="sidebar">
                        <ul class="side-menu-links">
                            <li class="active"><a href="{{url('/index')}}">الصفحه الرئيسية</a></li>
                            <li><a href="{{url('/getcookerrequest')}}">طلبات الطباخين</a></li>
                            <li><a href="{{url('/getcookers')}}"> الطباخين</a></li>
                            <li><a href="{{url('/getorders')}}">الطلبات</a></li>
                            <li><a href="{{url('/getusers')}}">المستخدمين</a></li>
                            <li><a href="{{url('/getkitchentypes')}}">أنواع المطابخ</a></li>
{{--                            <li><a href="requests.html">التقارير</a></li>--}}
{{--                            <li><a href="payments.html">الحسابات</a></li>--}}
{{--                            <li><a href="admins.html">الرسايل التسويقيه</a></li>--}}
                        </ul>
                    </aside>
                </div>
                <div class="page-content">
                    <div class="top-header">
                        <div class="toggle-icon"  data-toggle="tooltip" data-placement="right" title="Toggle Menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <ul class="top-header-links">
                            <li class="profile">
                                <a class="custom-btn">
                                    <img src="assets/images/user.jpg">
                                    {{Auth::user()->UserName}}
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/logout')}}"><i class="fa fa-power-off"></i></a>
                            </li>
                        </ul>
                    </div>
