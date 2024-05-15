<!doctype html>
<html lang="en">
@include('master.head')
    <body>
       <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
          data-sidebar-position="fixed" data-header-position="fixed">
        @include('master.aside')
            <div class="body-wrapper">
            @include('master.header')
            <div class="container-fluid">
                
                @yield('content')



            @include('master.footer')
            </div>
            </div>
       </div>
       @include('sweetalert::alert')

       @include('master.script')
