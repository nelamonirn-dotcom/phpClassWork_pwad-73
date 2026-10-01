<?php
// filepath: d:\XAMPP\htdocs\phpClassWork\01 Oct 2026\Auth\dashboard.php;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Overview</title>
    <style>
        :root {
            --navy: #17233b;
            --muted: #7b8496;
            --purple: #6658d3;
            --border: #e9ebf2;
            --background: #f6f7fb;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--background);
            color: #20283a;
            font-family: Inter, "Segoe UI", Arial, sans-serif;
        }

        .app { min-height: 100vh; }

        .sidebar {
            position: fixed;
            inset: 0 auto 0 0;
            width: 245px;
            padding: 28px 18px;
            background: var(--navy);
            color: #fff;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            margin: 0 10px 42px;
            font-size: 19px;
            font-weight: 700;
        }

        .brand-mark {
            display: grid;
            width: 34px;
            height: 34px;
            place-items: center;
            border-radius: 10px;
            background: var(--purple);
            font-size: 18px;
        }

        .nav-label {
            margin: 0 12px 12px;
            color: #8f9ab0;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .nav { display: grid; gap: 6px; }

        .nav a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 12px;
            border-radius: 9px;
            color: #b8c0d0;
            font-size: 14px;
            text-decoration: none;
        }

        .nav a.active, .nav a:hover {
            background: #2a3650;
            color: #fff;
        }

        .nav-icon {
            width: 20px;
            text-align: center;
            font-size: 16px;
        }

        .sidebar-bottom {
            position: absolute;
            right: 18px;
            bottom: 22px;
            left: 18px;
            padding: 15px;
            border: 1px solid #34405a;
            border-radius: 12px;
            color: #c5ccda;
            font-size: 12px;
            line-height: 1.5;
        }

        .main {
            min-height: 100vh;
            margin-left: 245px;
            padding: 28px 36px 40px;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 34px;
        }

        .search {
            width: min(360px, 45vw);
            padding: 12px 15px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: #fff;
            color: #4a5262;
            font-size: 13px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 11px;
            font-size: 13px;
            font-weight: 600;
        }

        .avatar {
            display: grid;
            width: 38px;
            height: 38px;
            place-items: center;
            border-radius: 50%;
            background: #e7e5fb;
            color: #5548bf;
            font-weight: 700;
        }

        .welcome {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 25px;
        }

        h1 { margin: 0 0 7px; font-size: 27px; }
        .subtitle { margin: 0; color: var(--muted); font-size: 14px; }

        .date {
            padding: 10px 13px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: #fff;
            color: #596174;
            font-size: 12px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 22px;
        }

        .card {
            border: 1px solid var(--border);
            border-radius: 13px;
            background: #fff;
            box-shadow: 0 3px 12px rgba(28, 39, 60, .025);
        }

        .stat-card { padding: 20px; }

        .stat-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            color: var(--muted);
            font-size: 13px;
        }

        .stat-icon {
            display: grid;
            width: 36px;
            height: 36px;
            place-items: center;
            border-radius: 10px;
            background: #f0efff;
            color: var(--purple);
            font-size: 17px;
        }

        .stat-value { margin-bottom: 8px; font-size: 25px; font-weight: 700; }
        .change { color: #23966b; font-size: 12px; }
        .change span { color: var(--muted); }

        .content-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.7fr) minmax(260px, 1fr);
            gap: 18px;
            margin-bottom: 22px;
        }

        .panel { padding: 21px; }
        .panel-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 20px;
        }

        h2 { margin: 0; font-size: 16px; }
        .panel-link { color: var(--purple); font-size: 12px; text-decoration: none; }

        .chart-summary { margin: 4px 0 16px; font-size: 26px; font-weight: 700; }
        .chart-summary small { margin-left: 8px; color: #23966b; font-size: 12px; font-weight: 500; }

        .chart {
            position: relative;
            height: 185px;
            padding: 8px 5px 25px 32px;
            background: repeating-linear-gradient(to bottom, transparent 0 44px, #eff0f5 45px 46px);
        }

        .chart svg { width: 100%; height: 100%; overflow: visible; }
        .chart-labels {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 32px;
            display: flex;
            justify-content: space-between;
            color: #9299a8;
            font-size: 10px;
        }

        .chart-y-labels {
            position: absolute;
            top: 0;
            bottom: 25px;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #9299a8;
            font-size: 10px;
        }

        .activity-list { display: grid; gap: 18px; }

        .activity {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .activity-icon {
            display: grid;
            width: 37px;
            height: 37px;
            flex: 0 0 37px;
            place-items: center;
            border-radius: 10px;
            background: #f2f1ff;
            color: var(--purple);
        }

        .activity-text { flex: 1; }
        .activity-text strong { display: block; margin-bottom: 4px; font-size: 12px; }
        .activity-text span, .activity time { color: var(--muted); font-size: 11px; }
        .activity time { white-space: nowrap; }

        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        th {
            padding: 0 12px 13px;
            color: #9299a8;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        td { padding: 14px 12px; border-top: 1px solid #f0f1f5; font-size: 12px; }
        .customer { display: flex; align-items: center; gap: 10px; font-weight: 600; }
        .mini-avatar {
            display: grid;
            width: 30px;
            height: 30px;
            place-items: center;
            border-radius: 50%;
            background: #eef0f7;
            color: #596174;
            font-size: 10px;
        }

        .status {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            background: #e8f7f0;
            color: #21845e;
            font-size: 10px;
            font-weight: 600;
        }

        @media (max-width: 1050px) {
            .stats { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .content-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 700px) {
            .sidebar { position: static; width: auto; padding: 18px; }
            .brand { margin: 0 5px 18px; }
            .nav { grid-template-columns: repeat(2, 1fr); }
            .sidebar-bottom { display: none; }
            .main { margin-left: 0; padding: 22px 16px; }
            .topbar { margin-bottom: 25px; }
            .search { width: 55%; }
            .welcome { align-items: flex-start; flex-direction: column; }
        }

        @media (max-width: 460px) {
            .stats { grid-template-columns: 1fr; }
            .profile-name { display: none; }
            h1 { font-size: 23px; }
            .panel { padding: 16px; }
        }
    </style>
</head>
<body>
<div class="app">
    <aside class="sidebar">
        <div class="brand"><span class="brand-mark">N</span> Northstar</div>
        <p class="nav-label">Workspace</p>
        <nav class="nav" aria-label="Main navigation">
            <a class="active" href="#"><span class="nav-icon">▦</span> Overview</a>
            <a href="#"><span class="nav-icon">▤</span> Analytics</a>
            <a href="#"><span class="nav-icon">♧</span> Customers</a>
            <a href="#"><span class="nav-icon">▣</span> Orders</a>
            <a href="#"><span class="nav-icon">⚙</span> Settings</a>
        </nav>
        <div class="sidebar-bottom">
            <strong>Need a hand?</strong><br>
            Visit the help center for tips and support.
        </div>
    </aside>

    <main class="main">
        <header class="topbar">
            <input class="search" type="search" placeholder="Search anything..." aria-label="Search">
            <div class="profile">
                <div class="avatar">JD</div>
                <span class="profile-name">Jordan Davis</span>
            </div>
        </header>

        <section class="welcome">
            <div>
                <h1>Good morning, Jordan 👋</h1>
                <p class="subtitle">Here’s what’s happening with your business today.</p>
            </div>
            <div class="date">October 1, 2026</div>
        </section>

        <section class="stats" aria-label="Key metrics">
            <article class="card stat-card">
                <div class="stat-top"><span>Total revenue</span><span class="stat-icon">$</span></div>
                <div class="stat-value">$48,294</div>
                <div class="change">↑ 12.8% <span>vs. last month</span></div>
            </article>
            <article class="card stat-card">
                <div class="stat-top"><span>Orders</span><span class="stat-icon">▣</span></div>
                <div class="stat-value">1,284</div>
                <div class="change">↑ 8.2% <span>vs. last month</span></div>
            </article>
            <article class="card stat-card">
                <div class="stat-top"><span>Customers</span><span class="stat-icon">♧</span></div>
                <div class="stat-value">8,549</div>
                <div class="change">↑ 5.4% <span>vs. last month</span></div>
            </article>
            <article class="card stat-card">
                <div class="stat-top"><span>Conversion rate</span><span class="stat-icon">↗</span></div>
                <div class="stat-value">3.64%</div>
                <div class="change">↑ 1.2% <span>vs. last month</span></div>
            </article>
        </section>

        <section class="content-grid">
            <article class="card panel">
                <div class="panel-heading">
                    <h2>Revenue overview</h2>
                    <a class="panel-link" href="#">Last 7 months ▾</a>
                </div>
                <div class="chart-summary">$48,294 <small>↑ 12.8%</small></div>
                <div class="chart">
                    <div class="chart-y-labels"><span>$10k</span><span>$7.5k</span><span>$5k</span><span>$2.5k</span></div>
                    <svg viewBox="0 0 600 145" preserveAspectRatio="none" role="img" aria-label="Revenue trending upward">
                        <defs>
                            <linearGradient id="fill" x1="0" x2="0" y1="0" y2="1">
                                <stop offset="0%" stop-color="#7568df" stop-opacity=".2"/>
                                <stop offset="100%" stop-color="#7568df" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                        <path d="M0,118 C40,105 48,110 82,91 S135,100 170,76 S220,85 255,61 S300,72 340,54 S390,69 425,39 S480,51 515,27 S565,36 600,10 L600,145 L0,145 Z" fill="url(#fill)"/>
                        <path d="M0,118 C40,105 48,110 82,91 S135,100 170,76 S220,85 255,61 S300,72 340,54 S390,69 425,39 S480,51 515,27 S565,36 600,10" fill="none" stroke="#6658d3" stroke-width="3" vector-effect="non-scaling-stroke"/>
                    </svg>
                    <div class="chart-labels"><span>Apr</span><span>May</span><span>Jun</span><span>Jul</span><span>Aug</span><span>Sep</span><span>Oct</span></div>
                </div>
            </article>

            <article class="card panel">
                <div class="panel-heading">
                    <h2>Recent activity</h2>
                    <a class="panel-link" href="#">View all</a>
                </div>
                <div class="activity-list">
                    <div class="activity">
                        <div class="activity-icon">✓</div>
                        <div class="activity-text"><strong>New order received</strong><span>Order #NS-2048 · $248.00</span></div>
                        <time>2m ago</time>
                    </div>
                    <div class="activity">
                        <div class="activity-icon">♧</div>
                        <div class="activity-text"><strong>New customer joined</strong><span>Welcome, Taylor Morgan</span></div>
                        <time>18m ago</time>
                    </div>
                    <div class="activity">
                        <div class="activity-icon">$</div>
                        <div class="activity-text"><strong>Payment confirmed</strong><span>Invoice #INV-0932 paid</span></div>
                        <time>1h ago</time>
                    </div>
                    <div class="activity">
                        <div class="activity-icon">★</div>
                        <div class="activity-text"><strong>New review received</strong><span>“Great service!” · 5 stars</span></div>
                        <time>3h ago</time>
                    </div>
                </div>
            </article>
        </section>

        <section class="card panel">
            <div class="panel-heading">
                <h2>Recent orders</h2>
                <a class="panel-link" href="#">View all orders →</a>
            </div>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr><th>Customer</th><th>Order</th><th>Date</th><th>Amount</th><th>Status</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="customer"><span class="mini-avatar">AM</span> Alex Morgan</div></td>
                            <td>#NS-2048</td><td>Oct 1, 2026</td><td>$248.00</td><td><span class="status">Completed</span></td>
                        </tr>
                        <tr>
                            <td><div class="customer"><span class="mini-avatar">JT</span> Jamie Taylor</div></td>
                            <td>#NS-2047</td><td>Sep 30, 2026</td><td>$126.50</td><td><span class="status">Completed</span></td>
                        </tr>
                        <tr>
                            <td><div class="customer"><span class="mini-avatar">RK</span> Riley Kim</div></td>
                            <td>#NS-2046</td><td>Sep 30, 2026</td><td>$389.00</td><td><span class="status">Completed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>
</body>
</html>