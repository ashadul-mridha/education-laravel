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
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('exam_questions.list') }}"
                        class="nav-link {{ $route == 'exam_questions.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Exam Questions List</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('exam_ques_ans.list') }}"
                        class="nav-link {{ $route == 'exam_ques_ans.list' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Exam Questions Answare List</p>
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
                    <a href="{{ route('setting.create') }}"
                        class="nav-link {{ $route == 'setting.create' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Setting</p>
                    </a>
                </li>
            </ul>
        </li>





    </ul>
    </li>
    </ul>
</nav>
