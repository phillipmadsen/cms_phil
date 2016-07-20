<div class="navbar-custom-menu">
<ul class="nav navbar-nav">

               <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">{{ $formPost->count() }}</span> </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have {{ $formPost->count() }} notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    @foreach($formPost as $item)
                                        <li>
                                            <a href="#">
                                                <p>{{ $item->subject }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="footer"><a href="{{ url(getLang() . '/admin/form-post') }}">See All Messages</a></li>
                        </ul>
                    </li>


                    
<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img alt="" src="img/flags/us.png">
        <span class="username">{{ LaravelLocalization::getCurrentLocaleName() }}</span>
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}"><img alt="" src="img/flags/es.png">{{{ $properties['native'] }}}</a>

            </li>
        @endforeach
    </ul>
</li>
                </ul>
            </div>

<ul class="nav navbar-right">
    <!-- start: USER DROPDOWN -->
    <li class="dropdown current-user">
        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
@if (Sentinel::check())
<img src="" class="circle-img" alt="{{ Sentinel::check()->first_name . ' ' . Sentinel::check()->last_name }} avatar">
@else
<img src="{!! asset('/backend/assets/images/avatar-1-small.jpg') !!}" class="circle-img" alt="dummy avatar">
@endif

            <span class="username">{{ Sentinel::check()->first_name . ' ' . Sentinel::check()->last_name }}  {!! @$user->Profile->skypeid !!}</span>
            <i class="clip-chevron-down"></i>
        </a>

        <ul class="dropdown-menu">
            <li> <a href=""> <i class="clip-user-2"></i> &nbsp;My Profile </a> </li>
            <li> <a href=""> <i class="clip-calendar"></i> &nbsp;My Calendar </a>
            <li> <a href=""> <i class="clip-bubble-4"></i> &nbsp;My Messages (3) </a> </li>
            <li class="divider"></li>
            <li><a href=""><span class="mif-user icon" ></span> Profile</a></li>
            <li><a href="" class="metro-confirm" data-confirm="are you sure want to log out?" ><span class="mif-exit icon" ></span> Logout</a></li>
            <li> <a href=""><i class="clip-locked"></i> &nbsp;Lock Screen </a> </li>
            <li> <a href=""> <i class="clip-exit"></i> &nbsp;Log Out </a> </li>
        </ul>
    </li>
    <!-- end: USER DROPDOWN -->




</ul>
