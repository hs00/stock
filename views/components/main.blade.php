@include('includes.navBar', ['title' =>  $title ])

<div class="content">
  <div class="container-fluid">
    {{ $body }}
  </div>
</div>

@include('includes.footer')
