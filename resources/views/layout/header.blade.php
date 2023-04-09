
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('assets/images/logo.png')}}" alt="" width="125px" />
                    </a>
                </div>
                <nav>
                    <ul id="MenuItems"><b>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/samples')}}">Sample Pack</a></li>
                            <li><a href="{{url('/plugin')}}">Plugin</a></li>
                            <li><a href="{{url('/song')}}">Song's</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                            <li><a href="{{url('/account')}}">Account</a></li>
                            <!-- Title Bar: 22:20 -->
                    </ul>
                    </B>
                </nav>
                <a href="{{url('/cart')}}"><img src="{{asset('assets/images/cart.png')}}" alt="" width="30px" height="30px" /></a>
                <img src="{{asset('assets/images/menu.png')}}" alt="" class="menu-icon" onclick="menutoggle()" />
            </div>
            
        </div>
    </div>