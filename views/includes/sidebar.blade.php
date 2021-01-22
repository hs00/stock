<div class="sidebar" data-color="orange" data-background-color="white" data-image="">
  <div class="logo">
    <div style="width: 70%; height: auto; margin: auto">
      <a href="{{ URLS['dashboard']['list'] }}" class="simple-text logo-normal">
        <img src="../../img/logo.png" alt="" width="100%" height="auto">
      </a>
    </div>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      {{--<form class="navbar-form">--}}
      {{--  <div class="input-group no-border">--}}
      {{--    <input type="text" value="" class="form-control" placeholder="Search...">--}}
      {{--    <button type="submit" class="btn btn-white btn-round btn-just-icon">--}}
      {{--      <i class="material-icons">search</i>--}}
      {{--      <div class="ripple-container"></div>--}}
      {{--    </button>--}}
      {{--  </div>--}}
      {{--</form>--}}
      <li class="nav-item">
        <a class="nav-link" href="{{ URLS['dashboard']['list'] }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URLS['products']['list'] }}">
          <i class="material-icons">all_inbox</i>
          <p>제품목록</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#0">
          <i class="material-icons">trending_up</i>
          <p>입고</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#0">
          <i class="material-icons">trending_down</i>
          <p>출고</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#0">
          <i class="material-icons">sync_alt</i>
          <p>조정</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#0">
          <i class="material-icons">history</i>
          <p>History</p>
        </a>
      </li>
    </ul>
  </div>
</div>

@push('script')
  <script>
    $(function () {
      const changeActiveClass = () => {
        const sidebarNavItem = $('.sidebar-wrapper .nav .nav-item');
        const sidebarNavLink = sidebarNavItem.children();
        
        _.forEach(sidebarNavLink, (val, key) => {
          if (!!location.href.match(val['href'])) {
            sidebarNavItem[key].classList.add('active');
          } else {
            sidebarNavItem[key].classList.remove('active');
          }
        })
      }
      
      changeActiveClass();
    })
  </script>
@endpush
