<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Quiz<span>Panel</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Components</li>
            <li class="nav-item">
                <a href="{{ route('question.list') }}" class="nav-link">
                    <i class="link-icon" data-feather="edit"></i>
                    <span class="link-title">Kelola Kuis</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('account.list') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Kelola User</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('score.list') }}" class="nav-link">
                    <i class="link-icon" data-feather="target"></i>
                    <span class="link-title">Kelola Skor</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
