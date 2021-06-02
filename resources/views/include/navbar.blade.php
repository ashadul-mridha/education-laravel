@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        @if (Auth::user()->userType == 'admin')
            <li class="nav-item has-treeview {{ $prefix == '/user' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p style="color: #ffffff">
                        Manage User
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('user.view') }}"
                            class="nav-link {{ $route == 'user.view' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View User</p>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        <li class="nav-item has-treeview {{ $prefix == '/profile' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-medkit"></i>
                <p style="color: #ffffff">
                    Manage Profile
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('profile.view') }}"
                        class="nav-link {{ $route == 'profile.view' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Profile</p>
                    </a>
                </li>
            </ul>
        </li>

        

        <li class="nav-item has-treeview {{ $prefix == '/exam' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-medkit"></i>
                <p style="color: #ffffff">
                    Manage Exam
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('exam.list') }}"
                        class="nav-link {{ $route == 'exam.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Exam List</p>
                    </a>
                </li>
            </ul>
            {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('exam_questions.list') }}"
                        class="nav-link {{ $route == 'exam_questions.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Exam Questions List</p>
                    </a>
                </li>
            </ul> --}}
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('all_exam_result.list') }}"
                        class="nav-link {{ $route == 'all_exam_result.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Exam Result List</p>
                    </a>
                </li>
            </ul>
        </li>


        
        <li class="nav-item has-treeview {{ $prefix == '/profession' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-h-square"></i>
                <p style="color: #ffffff">
                    Profession
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('profession.create') }}"
                        class="nav-link {{ $route == 'profession.create' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profession List</p>
                    </a>
                </li>
            </ul>
        </li>

        {{-- subscription --}}
        
        <li class="nav-item has-treeview {{ $prefix == '/subscription' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-h-square"></i>
                <p style="color: #ffffff">
                    Subscription
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('subscription.list') }}"
                        class="nav-link {{ $route == 'subscription.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Subscription List</p>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Topices --}}
        
        <li class="nav-item has-treeview {{ $prefix == '/topices' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-h-square"></i>
                <p style="color: #ffffff">
                    Topices
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('topices_type.list') }}"
                        class="nav-link {{ $route == 'topices_type.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Topics Type</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('topices.create') }}"
                        class="nav-link {{ $route == 'topices.create' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Topics Title</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('top_de.create') }}"
                        class="nav-link {{ $route == 'top_de.create' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Topices Details List</p>
                    </a>
                </li>
            </ul>
        </li>

        

        <li class="nav-item has-treeview {{ $prefix == '/previous/question' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-medkit"></i>
                <p style="color: #ffffff">
                    Previous Questions
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('pre_ques.list') }}"
                        class="nav-link {{ $route == 'pre_ques.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Previous Question List</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('pre_ques_de.list') }}"
                        class="nav-link {{ $route == 'pre_ques_de.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Previous Question Details List</p>
                    </a>
                </li>
            </ul>
        </li>


        {{-- subscription --}}
        
        <li class="nav-item has-treeview {{ $prefix == '/about-us' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-h-square"></i>
                <p style="color: #ffffff">
                    About Us
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('about_us.list') }}"
                        class="nav-link {{ $route == 'about_us.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>About Us List</p>
                    </a>
                </li>
            </ul>
        </li>








        <li class="nav-item has-treeview {{ $prefix == '/setting' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-h-square"></i>
                <p style="color: #ffffff">
                    Manage Setting
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('setting.list') }}"
                        class="nav-link {{ $route == 'setting.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Setting</p>
                    </a>
                </li>
            </ul>
            {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('setting.create') }}"
                        class="nav-link {{ $route == 'setting.create' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Setting</p>
                    </a>
                </li>
            </ul> --}}
        </li>





    </ul>
    </li>
    </ul>
</nav>
