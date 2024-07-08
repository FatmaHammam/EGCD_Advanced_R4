<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('allusers')}}">Users List</a></li>
                    <li><a href="{{route('adduser')}}">Add User</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Tags <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="addCategory.html">Add Tag</a></li>
                    <li><a href="categories.html">Tags List</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Photos <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="addPhoto.html">Add Photo</a></li>
                    <li><a href="photos.html">Photos List</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Posts <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="addPhoto.html">Add Post</a></li>
                    <li><a href="{{route('allposts')}}">Posts List</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
