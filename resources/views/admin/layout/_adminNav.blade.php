<div id="sidebar">
    <ul>
        <li class="{{ Request::is('dashboard/home')  ? 'active' : '' }}">
            <a href="{{ route('admin') }}">
            <i class="fa fa-home"></i> <span>Dashboard</span></a>
        </li>
        <li class="{{ Request::is('dashboard/training')  ? 'active' : '' }}">
            <a href="{{ url('dashboard/training#/home')  }}">
                <i class="fa fa-medkit"></i>
                <span>Trainings</span>
            </a>
        </li>
        <li class="{{ Request::is('dashboard/store')  ? 'active' : '' }}">
            <a href="{{ url('dashboard/store#/store')  }}">
                <i class="fa fa-shopping-cart"></i>
                <span>Store</span>
            </a>
        </li>
        <li>
            <a href="{{ url('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i title="Logout" class="fa fa-caret-left"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>