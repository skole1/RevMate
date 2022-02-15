<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span>Manage Account </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('register')}}"> New User </a></li>
                        <li><a href="{{ route('listofUsers') }}"> Registered User </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-rooms.html">All Rooms </a></li>
                        <li><a href="edit-room.html"> Edit Rooms </a></li>
                        <li><a href="add-room.html"> Add Rooms </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-share-alt"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="">Level 1 </a></li>
                        <li><a href="">Level 2 </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
