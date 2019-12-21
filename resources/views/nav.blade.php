
<header>
    <!-- STYLE -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Anton&display=swap');
        .navbar {
            margin-bottom: 0;
            background-color: #0597F2;
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
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
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
        <a class="navbar-brand" href="/">RSCLEANINGSERVICES</a>
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