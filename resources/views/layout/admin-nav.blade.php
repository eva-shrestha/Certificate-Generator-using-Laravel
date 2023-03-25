<nav class="navscroll navbar transparent fixed-top navbar-expand-lg navbar-light bg-white">
    
    <div class="container">

        <!-- logo -->
        <!-- <a class="navbar-brand text-dark font-weight-bold" href="/" ><img src="logo-certi-01.png" class="img-fluid logo" alt="logo"></a> -->
        <a class="navbar-brand font-weight-bold" href="{{route('admindashboard')}}"  style="color: rgb(12, 79, 110);">
            CertiGen
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- ---navbar links-------- -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link " href="{{route('templates.index')}}">Templates</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('templates.create')}}">Add Template</a>
                </li> 

            

                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"  class ="admin-logout">Log out</button>
                                </form>
                            </div>
                    </div> 
                </li>
                

                
                
                
            </ul>
        </div>
        <!-- --end of navbar links----------- -->


    </div>

</nav>