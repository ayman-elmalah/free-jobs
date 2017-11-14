<header class="main-header">
  <!-- Logo -->
  <a href="{{ url('/adminpanel/dashboard') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">f<b>Jops</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">Free<b>Jops</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            @if (countAllUnreadMessage() > 0)
            <span class="label label-info">{{ countAllUnreadMessage() }}</span>
            @endif
          </a>
          <ul class="dropdown-menu">
            @if (countAllUnreadMessage() > 0)
              <li class="header"> لديك {{ countAllUnreadMessage() }} رسائل لم يتم الرد عليهم </li>
            @else
              <li class="header"> لا يوجد رسائل لم يتم الرد عليها </li>
            @endif
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                @foreach(getLatestUnreadMessage() as $message)
                <li><!-- start message -->
                  <a href="{{ url('adminpanel/messages/' . $message->id . '/show') }}">
                    <div class="pull-right">
                      <img src="{{ url('/admin/images/user.png') }}" class="img-circle" alt="{{ $message->name }}" title="{{ $message->name }}">
                    </div>
                    <h4>
                      {{ $message->subject }}

                        <small><i class="fa fa-clock-o"></i> {{ showSinceTime($message->created_at) }} </small>
                    </h4>
                    <p>{{ str_limit($message->message, 30) }}</p>
                  </a>
                </li><!-- end message -->
                @endforeach
              </ul>
            </li>
            <li class="footer"><a href="{{ url('adminpanel/messages') }}"> مشاهدة كل الرسائل </a></li>
          </ul>
        </li>
        <!-- Reports: style can be found in dropdown.less -->
        <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            @if (countAllUnreadReports() > 0)
            <span class="label label-danger">{{ countAllUnreadReports() }}</span>
            @endif
          </a>
          <ul class="dropdown-menu">
            @if (countAllUnreadReports() > 0)
              <li class="header"> لديك {{ countAllUnreadReports() }} ابلاغات لم تتم قرائتهم </li>
            @else
              <li class="header"> لا يوجد ابلاغات لم تتم قرائتها </li>
            @endif
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                @foreach(getLatestUnreadReports() as $report)
                <li>
                  <a href="{{ url('adminpanel/reports/' . $report->id . '/show') }}">
                    <h4 class="report-header">
                      {{ $report->title }}
                        <small><i class="fa fa-clock-o"></i> {{ showSinceTime($report->created_at) }} </small>
                    </h4>
                    <div class="report">
                         {{ str_limit($report->report, 30) }}
                    </div>
                  </a>
                </li>
                @endforeach
              </ul>
            </li>
            <li class="footer"><a href="{{ url('adminpanel/reports') }}"> عرض كل الابلاغات </a></li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ url('/admin/images/user.png') }}" class="user-image" alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}">
            <span class="hidden-xs"> {{ Auth::user()->name }} </span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ url('/admin/images/user.png') }}" class="img-circle" alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}">
              <p>
                مسئول عن الموقع
                <small> عضو منذ {{ Auth::user()->created_at }} </small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="{{ url('/adminpanel/editprofile') }}" class="btn btn-default btn-flat profile-options"> تحديث المعلومات الشخصيه </a>
              </div>
              <div class="pull-left">
                <a href="{{ url('/adminpanel/logout') }}" class="btn btn-default btn-flat profile-options"> تسجيل الخروج </a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
