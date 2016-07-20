<li class="dropdown current-user" data-toggle="dropdown">
    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
        <img src="{{ $auth->avatar }}" class="circle-img" alt="{{ $auth->name }}-user-image">
        <span class="username">{{ $auth->name }}</span>
        <i class="clip-chevron-down"></i>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="pages_user_profile.html">
                <i class="clip-user-2"></i>
                &nbsp;My Profile
            </a>
        </li>
        <li>
            <a href="pages_calendar.html">
                <i class="clip-calendar"></i>
                &nbsp;My Calendar
            </a>
        <li>
            <a href="pages_messages.html">
                <i class="clip-bubble-4"></i>
                &nbsp;My Messages (3)
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="utility_lock_screen.html"><i class="clip-locked"></i>
                &nbsp;Lock Screen </a>
        </li>
        <li>
            <a href="login_example1.html">
                <i class="clip-exit"></i>
                &nbsp;Log Out
            </a>
        </li>
         <li class="user-header">
            <img src="{{ $auth->avatar }}" class="circle-img" alt="User Image" />
            <p>
                
                <small>{{ trans('messages.member_from') }} <span class="capitalize">{{ $auth->from }}</span></small>
            </p>
        </li>
         <li class="user-header">
              <img src="{{ $auth->avatar }}" class="img-circle" alt="User Image">
              <p>
                {{ $auth->name }} <br>
                {{ trans('messages.member_from') }} <small>{{ $auth->from }}</small>
              </p>
            </li>
    </ul>
</li>
 