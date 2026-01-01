<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <!-- =========================
         GLOBAL STYLES
    ========================== -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            min-height: 100vh;
            color: #333;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        /* =========================
           LAYOUT WRAPPER
        ========================== */
        .dashboard-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* =========================
           SIDEBAR
        ========================== */
        .sidebar {
            width: 260px;
            background: #0b1320;
            color: #fff;
            padding: 30px 20px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            overflow-y: auto;
        }

        .sidebar .logo {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            color: #00e0ff;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            display: block;
            padding: 12px 15px;
            border-radius: 8px;
            transition: 0.3s ease;
            background: rgba(255,255,255,0.05);
        }

        .sidebar ul li a:hover {
            background: #00e0ff;
            color: #000;
            transform: translateX(5px);
        }

        /* =========================
           MAIN CONTENT
        ========================== */
        .main-content {
            margin-left: 260px;
            padding: 30px;
            width: calc(100% - 260px);
        }

        /* =========================
           HEADER
        ========================== */
        .header {
            background: #ffffff;
            border-radius: 12px;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 24px;
            color: #203a43;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(45deg, #00e0ff, #007bff);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
        }

        /* =========================
           WELCOME CARD
        ========================== */
        .welcome-card {
            background: linear-gradient(135deg, #00e0ff, #007bff);
            color: #fff;
            padding: 30px;
            border-radius: 16px;
            margin-bottom: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            animation: fadeIn 1s ease;
        }

        .welcome-card h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .welcome-card p {
            opacity: 0.9;
        }

        /* =========================
           STATS GRID
        ========================== */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: #fff;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card h3 {
            font-size: 16px;
            color: #777;
            margin-bottom: 10px;
        }

        .stat-card span {
            font-size: 28px;
            font-weight: bold;
            color: #203a43;
        }

        /* =========================
           ACTIVITY & NOTIFICATIONS
        ========================== */
        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
        }

        .card {
            background: #fff;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .card h3 {
            margin-bottom: 20px;
            color: #203a43;
        }

        /* =========================
           ACTIVITY LIST
        ========================== */
        .activity-item {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-item strong {
            color: #007bff;
        }

        /* =========================
           NOTIFICATIONS
        ========================== */
        .notification {
            background: #f1f9ff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        /* =========================
           FOOTER
        ========================== */
        .footer {
            margin-top: 40px;
            text-align: center;
            color: #fff;
            opacity: 0.7;
        }

        /* =========================
           ANIMATIONS
        ========================== */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
           RESPONSIVE
        ========================== */
        @media (max-width: 900px) {
            .sidebar {
                display: none;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="dashboard-wrapper">

    <!-- =========================
         SIDEBAR
    ========================== -->
    <aside class="sidebar">
        <div class="logo">User Panel</div>
        <ul>
            <li><a href="{{ route('dashboard') }}">🏠 Dashboard</a></li>
            <li><a href="#">👤 Profile</a></li>
            <li><a href="#">📊 Activity</a></li>
            <li><a href="#">🔔 Notifications</a></li>
            <li><a href="#">⚙️ Settings</a></li>
            <li><a href="{{ route('logout') }}">🚪 Logout</a></li>
        </ul>
    </aside>

    <!-- =========================
         MAIN CONTENT
    ========================== -->
    <main class="main-content">

        <!-- HEADER -->
        <div class="header">
            <h1>User Dashboard</h1>
            <div class="user-info">
                <div class="user-avatar">
                    {{ strtoupper(substr(auth()->user()->name,0,1)) }}
                </div>
                <span>{{ auth()->user()->name }}</span>
            </div>
        </div>

        <!-- WELCOME -->
        <div class="welcome-card">
            <h2>Welcome back, {{ auth()->user()->name }} 👋</h2>
            <p>You have successfully logged in with user-level access.</p>
        </div>

        <!-- STATS -->
        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Logins</h3>
                <span>128</span>
            </div>
            <div class="stat-card">
                <h3>Active Sessions</h3>
                <span>3</span>
            </div>
            <div class="stat-card">
                <h3>Notifications</h3>
                <span>12</span>
            </div>
            <div class="stat-card">
                <h3>Account Status</h3>
                <span>Active</span>
            </div>
        </div>

        <!-- CONTENT GRID -->
        <div class="content-grid">

            <!-- ACTIVITY -->
            <div class="card">
                <h3>Recent Activity</h3>
                <div class="activity-item">
                    Logged in from <strong>Chrome Browser</strong>
                </div>
                <div class="activity-item">
                    Updated profile information
                </div>
                <div class="activity-item">
                    Viewed dashboard analytics
                </div>
                <div class="activity-item">
                    Logged out securely
                </div>
            </div>

            <!-- NOTIFICATIONS -->
            <div class="card">
                <h3>Notifications</h3>
                <div class="notification">✅ Account verified successfully</div>
                <div class="notification">🔐 New login detected</div>
                <div class="notification">📢 New feature released</div>
            </div>

        </div>

        <!-- FOOTER -->
        <div class="footer">
            © {{ date('Y') }} Your Application. All rights reserved.
        </div>

    </main>
</div>

</body>
</html>
