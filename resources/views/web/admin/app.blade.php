@include('web.admin.layout.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 

  
@include('web.admin.layout.header')
   
<div class="content-wrapper">
 

@yield('content')

 
  </div>
   
 
   
@include('web.admin.layout.footer')

</div>
 

@include('web.admin.layout.script')

