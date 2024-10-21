@include("web.site.layout.head")

<body>
    <div class="page-wrapper">
        @include("web.site.layout.header")
        
            @yield('content')

      

    </div>


    @include("web.site.layout.footer")
