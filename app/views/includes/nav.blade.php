<!-- #NAVIGATION -->
<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 

            <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                <img src="{{ URL::to('/')}}/img/avatars/sunny.png" alt="me" class="online" /> 
                <span>
                    Ime I prezime
                </span>
                <i class="fa fa-angle-down"></i>
            </a> 

        </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <ul>
            <li>
                <a href="/dashboard" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li>
                <a href="#" title="Polaznici"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Polaznici</span></a>
                <ul>
                    <li>
                        <a href="/unos/1" title="Polaznici"><i class="fa fa-lg fa-fw fa-user-plus"></i> <span class="menu-item-parent">Unos polaznika</span></a>
                    </li>
                </ul>
            </li>





        </ul>
    </nav>
    <span class="minifyme" data-action="minifyMenu"> 
        <i class="fa fa-arrow-circle-left hit"></i> 
    </span>

</aside>
<!-- END NAVIGATION -->