<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Admin Dashboard') — Hasnain Sakib Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
:root {
  --navy-950: #030712;
  --navy-900: #050c21;
  --navy-800: #0a173d;
  --navy-700: #102256;
  --cyan: #38edf8;
  --blue: #60a5fa;
  --green: #34d399;
  --ink-100: #ffffff;
  --ink-300: #e2e8f0;
  --ink-400: #94a3b8;
  --ink-600: #64748b;
  --line: rgba(244, 246, 252, 0.09);
  --line-strong: rgba(244, 246, 252, 0.16);
  --glass: rgba(10, 23, 61, 0.6);
}

* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
body {
  background: var(--navy-950);
  color: var(--ink-300);
  display: flex;
  min-height: 100vh;
}

/* Sidebar */
.sidebar {
  width: 260px;
  background: var(--navy-900);
  border-right: 1px solid var(--line);
  display: flex;
  flex-direction: column;
  padding: 24px 20px;
  flex-shrink: 0;
}
.sidebar-logo {
  font-size: 18px;
  font-weight: 800;
  color: var(--ink-100);
  letter-spacing: -0.01em;
  margin-bottom: 32px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.sidebar-logo span {
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  color: var(--cyan);
  background: rgba(56, 237, 248, 0.1);
  padding: 4px 8px;
  border-radius: 6px;
  border: 1px solid rgba(56, 237, 248, 0.2);
}
.nav-menu {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 6px;
}
.nav-item a {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px 16px;
  color: var(--ink-400);
  text-decoration: none;
  font-size: 14px;
  font-weight: 500;
  border-radius: 10px;
  transition: all 0.2s ease;
}
.nav-item a:hover, .nav-item.active a {
  color: var(--ink-100);
  background: var(--navy-800);
  border: 1px solid var(--line-strong);
}
.nav-item.active a {
  color: var(--cyan);
}

/* Main Content Area */
.main-wrapper {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  min-width: 0;
}
.topbar {
  height: 70px;
  background: var(--navy-900);
  border-bottom: 1px solid var(--line);
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 32px;
}
.topbar-title {
  font-size: 18px;
  font-weight: 700;
  color: var(--ink-100);
}
.topbar-actions {
  display: flex;
  align-items: center;
  gap: 16px;
}
.btn-site {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 8px 16px;
  border-radius: 8px;
  background: rgba(96, 165, 250, 0.1);
  border: 1px solid rgba(96, 165, 250, 0.2);
  color: var(--blue);
  text-decoration: none;
  font-size: 13px;
  font-weight: 500;
  transition: all 0.2s;
}
.btn-site:hover { background: rgba(96, 165, 250, 0.2); }
.btn-logout {
  padding: 8px 16px;
  border-radius: 8px;
  background: rgba(239, 68, 68, 0.1);
  border: 1px solid rgba(239, 68, 68, 0.2);
  color: #fca5a5;
  cursor: pointer;
  font-size: 13px;
  font-weight: 500;
}
.btn-logout:hover { background: rgba(239, 68, 68, 0.25); }

.content-body {
  padding: 32px;
  flex-grow: 1;
}

/* Alerts */
.alert {
  padding: 14px 18px;
  border-radius: 12px;
  font-size: 14px;
  margin-bottom: 24px;
}
.alert-success {
  background: rgba(56, 237, 248, 0.12);
  border: 1px solid rgba(56, 237, 248, 0.3);
  color: var(--cyan);
}

@media (max-width: 768px) {
  body { flex-direction: column; }
  .sidebar { width: 100%; border-right: none; border-bottom: 1px solid var(--line); }
  .topbar { padding: 0 16px; }
  .content-body { padding: 20px 16px; }
}
</style>
@yield('styles')
</head>
<body>

<aside class="sidebar">
  <div class="sidebar-logo">
    Hasnain Sakib <span>ADMIN</span>
  </div>
  <ul class="nav-menu">
    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
      <a href="{{ route('admin.dashboard') }}">📊 Dashboard Overview</a>
    </li>
    <li class="nav-item {{ request()->routeIs('admin.certifications.*') ? 'active' : '' }}">
      <a href="{{ route('admin.certifications.index') }}">📜 Certifications Manager</a>
    </li>
    <li class="nav-item {{ request()->routeIs('db.*') ? 'active' : '' }}">
      <a href="{{ route('db.index') }}">🗄️ Web Database Manager</a>
    </li>
  </ul>
</aside>

<div class="main-wrapper">
  <header class="topbar">
    <div class="topbar-title">@yield('title', 'Admin Panel')</div>
    <div class="topbar-actions">
      <a href="{{ route('db.index') }}" class="btn-site" style="color:var(--cyan); border-color:rgba(56,237,248,0.3);">🗄️ Open Database GUI</a>
      <a href="{{ url('/') }}" target="_blank" class="btn-site">🌐 View Live Portfolio ↗</a>
      <form method="POST" action="{{ route('admin.logout') }}" style="display:inline;">
        @csrf
        <button type="submit" class="btn-logout">Logout</button>
      </form>
    </div>
  </header>

  <main class="content-body">
    @if(session('success'))
      <div class="alert alert-success">
        ✓ {{ session('success') }}
      </div>
    @endif

    @yield('content')
  </main>
</div>

@yield('scripts')
</body>
</html>
