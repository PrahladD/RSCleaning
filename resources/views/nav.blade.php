
<header>
    <!-- STYLE -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Rajdhani&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Anton&display=swap');
        .navbar {
            margin-bottom: 0;
            background-color: #4ddbff;
            z-index: 9999;
            border: 0;
            font-size: 14px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: 'Anton Regular', Montserrat, sans-serif;
        }
        .navbar li a, .navbar {
            color: #fff !important;
            font-weight: bold !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #0066ff !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        .navbar-brand {
            font-family: 'Rajdhani', sans-serif;
            font-size: 1.8em;
        }

        .navbar-brand #RSCleaning {
            color: #0066ff;
        }

        .navbar-brand #Service {
            color: #fff;
        }

    </style>
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="/"><span id="RSCleaning">RSCLEANING</span><span id="Service">SERVICES</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('home') ? 'active' : '' }}" ><a href="/home">HOME</a></li>
            <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="/services">SERVICES</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="#contact">CONTACT</a></li>
        </ul>
        </div>
    </div>
    </nav>
</header>