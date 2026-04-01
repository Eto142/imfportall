<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
/* BASE */
html, body {
    height: 100%;
}
body {
    background: #f1f5f9;
    margin: 0;
    overflow-x: hidden;
    font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
}

/* LAYOUT */
.admin-layout {
    display: grid;
    grid-template-columns: 260px 1fr;
    min-height: 100vh;
}

/* SIDEBAR */
.sidebar {
    background: #020617;
    padding: 24px 18px;
    position: sticky;
    top: 0;
    height: 100vh;
}

.sidebar .brand {
    font-size: 20px;
    font-weight: 700;
    color: #ffffff;
}

.sidebar small {
    color: #94a3b8;
}

.sidebar .nav {
    margin-top: 32px;
}

.sidebar .nav-link {
    color: #cbd5f5;
    padding: 13px 16px;
    border-radius: 12px;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 15px;
}

.sidebar .nav-link i {
    font-size: 18px;
}

.sidebar .nav-link:hover,
.sidebar .nav-link.active {
    background: #1e293b;
    color: #ffffff;
}

/* CONTENT */
.main-content {
    padding: 32px 36px;
}

/* WIDE CONTENT CONTROL */
.content-wrapper {
    max-width: 1200px;
    margin: 0 auto;
}

/* CARD */
.card {
    border-radius: 20px;
}

/* MOBILE */
@media (max-width: 991.98px) {
    .admin-layout {
        grid-template-columns: 1fr;
    }

    .sidebar {
        position: fixed;
        left: -260px;
        width: 260px;
        height: 100%;
        z-index: 1050;
        transition: left 0.3s ease;
    }

    .sidebar.show {
        left: 0;
    }

    .overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.55);
        z-index: 1040;
    }

    .overlay.show {
        display: block;
    }

    .main-content {
        padding: 20px 16px;
    }
}
</style>
</head>
<body>

<!-- MOBILE TOPBAR -->
<nav class="navbar navbar-dark bg-dark d-lg-none sticky-top">
    <div class="container-fluid">
        <button class="btn btn-outline-light" id="toggleSidebar">
            <i class="bi bi-list"></i>
        </button>
        <span class="navbar-brand fw-semibold">Admin Panel</span>
    </div>
</nav>

<div class="overlay" id="overlay"></div>

<!-- LAYOUT -->
<div class="admin-layout">

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
        <div class="text-center mb-4">
            <div class="brand">Admin Panel</div>
            <small>Management</small>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('send-email') }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sent-emails') }}">
                    <i class="bi bi-envelope"></i> Sent Emails
                </a>
            </li>
        </ul>
    </aside>