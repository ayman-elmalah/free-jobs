<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-right image">
        <img src="{{ url('/admin/images/user.png') }}" class="img-circle" alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name }}">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> متوفر الان </a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header"> القائمه الرئيسيه </li>
      <li class="active"><a href="{{ url('/adminpanel/dashboard') }}"><i class="fa fa-dashboard"></i> <span> الصفحه الرئيسيه </span> </a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i>
          <span> المسئولين </span>
          <i class="fa fa-angle-left pull-left"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/adminpanel/users/create') }}"><i class="fa fa-circle-o"></i>  اضافة مسئول </a></li>
          <li><a href="{{ url('/adminpanel/users') }}"><i class="fa fa-circle-o"></i>  كل المسئولين </a></li>
        </ul>
      </li>
      <li><a href="{{ url('/adminpanel/jobs') }}"><i class="fa fa-suitcase"></i> <span> كل الوظائف </span> </a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
