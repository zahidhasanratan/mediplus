<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{ asset('admin/assets/img/find_user.png')}}" class="user-image img-responsive"/>
            </li>


            <li>
                <a class="{{ Request::is('admin/dashboard*') ? 'active-menu': '' }}"  href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>


            <li>
                <a class="{{ Request::is('admin/menu*') ? 'active-menu': '' }}" href="#"><i class="fa fa-bars fa-3x"></i> Menu <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('menu.create') }}">Add New Menu</a>
                    </li>
                    <li>
                        <a href="{{ route('menu.index') }}">All Menu</a>
                    </li>

                </ul>
            </li>
            <li>
                <a class="{{ Request::is('admin/page*') ? 'active-menu': '' }}" href="#"><i class="fa fa-newspaper-o fa-3x"></i> Page <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('page.create') }}">Add New Page</a>
                    </li>
                    <li>
                        <a href="{{ route('page.index') }}">All Page</a>
                    </li>

                </ul>
            </li>
            <li>
                <a class="{{ Request::is('admin/slider*') ? 'active-menu': '' }}" href="#"><i class="fa fa-desktop fa-3x"></i> Slider <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('slider.create') }}">Add New Slider</a>
                    </li>
                    <li>
                        <a href="{{ route('slider.index') }}">All Slider</a>
                    </li>

                </ul>
            </li>
            <li>
                <a class="{{ Request::is('admin/objetcs*') ? 'active-menu': '' }}" href="#"><i class="fa fa-desktop fa-3x"></i> Others <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ asset('admin/objects/1/edit') }}">WHAT WE ARE ABOUT</a>
                    </li>
                    <li>
                        <a href="{{ asset('admin/objects/2/edit') }}">Footer Short</a>
                    </li>
                    <li>
                        <a href="{{ asset('admin/others/2/edit') }}">Goal</a>
                    </li>
{{--                    <li>--}}
{{--                        <a href="{{ asset('admin/others/5/edit') }}">Contact</a>--}}
{{--                    </li>--}}
                </ul>
            </li>
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-sitemap fa-3x"></i> Photo<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="{{ route('photo.create') }}">Add Photo</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ route('photo.index') }}">All Photo</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="{{ route('admin.report') }}"><i class="fa fa-file fa-3x"></i> Report</a>--}}
            {{--</li>--}}

            <li>
                <a href="#"><i class="fa fa-video-camera fa-3x"></i> Gallery<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">


                    <li>
                        <a href="#">Photo Gallery<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">

                            {{--<li>--}}
                                {{--<a href="{{ route('item.create') }}">Add New Photo</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{ route('item.index') }}">All Photo</a>--}}
                            {{--</li>--}}
                            <li>
                                <a href="{{ route('category.index') }}">All Category</a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="#">Product <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            {{--<li>--}}
                                {{--<a href="{{ route('video.create') }}">Add Video</a>--}}
                            {{--</li>--}}
                            <li>
                             <a href="{{ route('item.create') }}">Add Product</a>
                            </li>
                            <li>
                                <a href="{{ route('item.index') }}">All Product</a>
                            </li>
                            <li>
                                <a href="{{ route('video.index') }}">Product Category</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li>
                <a class="{{ Request::is('admin/news*') ? 'active-menu': '' }}" href="#"><i class="fa fa-newspaper-o fa-3x"></i> News <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('news.create') }}">Add News</a>
                    </li>
                    <li>
                        <a href="{{ route('news.index') }}">All News</a>
                    </li>
                </ul>
            </li>

{{--            <li>--}}
{{--                <a class="{{ Request::is('admin/service*') ? 'active-menu': '' }}" href="#"><i class="fa fa-tasks fa-3x"></i> Feature <span class="fa arrow"></span></a>--}}
{{--                <ul class="nav nav-second-level">--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('service.create') }}">Add Feature</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('service.index') }}">All Feature</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </li>--}}

            {{--<li>--}}
                {{--<a class="{{ Request::is('admin/life*') ? 'active-menu': '' }}" href="#"><i class="fa fa-tasks fa-3x"></i> Life Member <span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="{{ route('life.create') }}">Add Member</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ route('life.index') }}">All Life Member</a>--}}
                    {{--</li>--}}

                {{--</ul>--}}
            {{--</li>--}}


{{--            <li>--}}
{{--            <a class="{{ Request::is('admin/activity*') ? 'active-menu': '' }}" href="#"><i class="fa fa-qrcode fa-3x"></i> Client Say <span class="fa arrow"></span></a>--}}
{{--            <ul class="nav nav-second-level">--}}
{{--            <li>--}}
{{--            <a href="{{ route('activity.create') }}">Add Client Say</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--            <a href="{{ route('activity.index') }}">All Client Say</a>--}}
{{--            </li>--}}

{{--            </ul>--}}
{{--            </li>--}}

            {{--<li>--}}
                {{--<a class="{{ Request::is('admin/others*') ? 'active-menu': '' }}" href="{{ route('others.index') }}"><i class="fa fa-tasks fa-3x"></i> Our Goal</a>--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-sitemap fa-3x"></i> Committee<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}


                    {{--<li>--}}
                        {{--<a href="{{ route('photo.create') }}">Add Committee</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ route('photo.index') }}">All Committee</a>--}}
                    {{--</li>--}}



                {{--</ul>--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-sitemap fa-3x"></i> Past Executive Committee<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}


                    {{--<li>--}}
                        {{--<a href="{{ route('company.create') }}">Add Past Committee</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ route('company.index') }}">All Past Committee</a>--}}
                    {{--</li>--}}
                    {{--<!--<li>-->--}}
                    {{--<!--    <a href="{{ route('previous.index') }}">Type</a>-->--}}
                    {{--<!--</li>-->--}}


                {{--</ul>--}}
            {{--</li>--}}





            <li>
                <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="fa fa-sign-out fa-3x"></i> Logout</a>
            </li>





        </ul>

    </div>

</nav>
