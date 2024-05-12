<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* CSS Styling */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .navbar-brand {
            font-size: 24px;
        }
        
        .navbar-nav {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        .navbar-nav .nav-item {
            display: inline;
            margin-left: 20px;
        }
        
        .nav-link {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        
        .welcome h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        
        .welcome p {
            font-size: 18px;
            color: #666;
        }
        
        .features {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        
        .feature {
            text-align: center;
            flex-basis: 30%;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .feature i {
            font-size: 48px;
            margin-bottom: 20px;
            color: #333;
        }
        
        .feature h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .feature p {
            font-size: 16px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar-brand">Dashboard</div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content">
            <div class="welcome">
                <h1>Welcome to Your Dashboard</h1>
                <p>You're logged in</p>
            </div>
            <div class="features">
                <div class="feature">
                    <i class="fas fa-chart-bar"></i>
                    <h2>Analytics</h2>
                    <p>View detailed analytics of your activities.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-envelope"></i>
                    <h2>Messages</h2>
                    <p>Check and reply to your messages.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-cog"></i>
                    <h2>Settings</h2>
                    <p>Customize your dashboard settings.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
