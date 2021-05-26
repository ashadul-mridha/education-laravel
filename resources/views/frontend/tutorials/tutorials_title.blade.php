@extends('frontend.master')

@section('content')


<style>
  /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 20px;
    background: #FD5F00;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #CCCCCC;
    color: black;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #FD5F00;
}

.sidebar-header>h3{
    color: #fff;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #FD5F00;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #FD5F00;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}




/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
</style>
<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #282A35;">
            
            <button class="navbar-toggler btn-light btn-primary m-auto" style="background-color: #fff" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
              <ul class="nav navbar-nav  ">
                            
                {{-- <li class="nav-item">
                    <a class="nav-link text-white text-md icon-home" href="#">Home</a>
                </li> --}}
                @foreach ($all_topices as $data)
                        
                      <li class="nav-item ">
                          <a class="nav-link text-white text-md" href="{{route('tutorials_title',$data->topics_slug)}}">{{$data->topics_type}}</a>
                      </li>

                    @endforeach
              </ul>
            </div>
          </nav>

    </div>
</div>

<div class="wrapper" style="margin-top : -40px;">
  <!-- Sidebar  -->
  
  <nav id="sidebar">
    <div class="sidebar-header">
      
        <h3>Learn {{ strtoupper($topice_type->topics_type)}}</h3>
    </div>

    <ul class="list-unstyled components">

        @foreach ($all_title as $title)

          <li>
              <a href="{{ route('tutorials_details',$title->topices_title_slug )}}">{{ $title->topices_title}}</a>
          </li>
          
        @endforeach

    </ul>

</nav>

  <!-- Page Content  -->
  <div id="content">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

              <button type="button" id="sidebarCollapse" class="btn btn-primary">
                  <i class="icon-exchange""></i>
                  
                  <span>Show {{strtoupper($topice_type->topics_type)}}</span>
              </button>


              {{-- <button class="btn btn-light btn-primary d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="icon-align-justify"></i>
              </button>

              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                  <ul class="nav navbar-nav ml-auto bg-primary">

                      @foreach ($all_topices as $data)
                          
                        <li class="nav-item ">
                            <a class="nav-link text-white text-md" href="{{route('tutorials_title',$data->topics_slug)}}">{{$data->topics_type}}</a>
                        </li>

                      @endforeach


                  </ul>
              </div> --}}
          </div>
      </nav>



      @yield('topic_details')



  </div>
</div>

@endsection
    
        

