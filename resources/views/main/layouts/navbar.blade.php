<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Free Jobs</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="mynav">
      <ul class="nav navbar-nav navbar-left">
          <li class="nav-list"><a class="link" href="{{ url('/home') }}"> الصفحه الرئيسيه </a></li>
          <li class="nav-list"><a class="link @if (Request::segment(1) == 'categories') {{'active'}} @endif" href="{{ url('/categories') }}"> كل الاقسام </a></li>
          <li class="nav-list"><a class="link @if (Request::segment(1) == 'contact') {{'active'}} @endif" href="{{ url('/contact') }}"> اتصل بنا </a></li>
          <li class="btn btn-success nav-custom-list"><a class="link" href="{{ url('/post') }}"> نشر وظيفه </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="clear-nav"></div>
