@if (Route::has('login'))
    <div class="welcome-section">
        <h1>Welcome to Our Platform!</h1>
        <p class="intro-text">Please select your role to get started.</p>
    </div>

    <nav class="navigation-bar">
        {{-- Web Auth --}}
        @auth('web')
            <div class="btn-section">
                <h2>Web User</h2>
                <a href="{{ url('/dashboard') }}" class="btn primary-btn">Dashboard</a>
            </div>
        @else
            <div class="btn-section">
                <h2>User</h2>
                <a href="{{ route('login') }}" class="btn secondary-btn">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn secondary-btn">Register</a>
                @endif
            </div>
        @endauth

        {{-- Admin Auth --}}
        @auth('admin')
            <div class="btn-section">
                <h2>Admin</h2>
                <a href="{{ url('/admin/dashboard') }}" class="btn primary-btn">Admin Dashboard</a>
            </div>
        @else
            <div class="btn-section">
                <h2>Admin</h2>
                <a href="{{ route('admin.login') }}" class="btn secondary-btn">Admin Log in</a>
                @if (Route::has('admin.register'))
                    <a href="{{ route('admin.register') }}" class="btn secondary-btn">Admin Register</a>
                @endif
            </div>
        @endauth

        {{-- Teacher Auth --}}
        @auth('teacher')
            <div class="btn-section">
                <h2>Teacher</h2>
                <a href="{{ url('/teacher/dashboard') }}" class="btn primary-btn">Teacher Dashboard</a>
            </div>
        @else
            <div class="btn-section">
                <h2>Teacher</h2>
                <a href="{{ route('teacher.login') }}" class="btn secondary-btn">Teacher Log in</a>
                @if (Route::has('teacher.register'))
                    <a href="{{ route('teacher.register') }}" class="btn secondary-btn">Teacher Register</a>
                @endif
            </div>
        @endauth
    </nav>
@endif


<footer class="py-16 text-center text-sm text-black dark:text-white/70" style="text-align:center; margin:40px;">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</footer>

<style>
    /* Global Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body Styling */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f4f4f4;
        color: #333;
        padding: 0 15px;
    }

    /* Welcome Section */
    .welcome-section {
        text-align: center;
        margin-top: 50px;
    }

    .welcome-section h1 {
        font-size: 3rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
    }

    .intro-text {
        font-size: 1.3rem;
        margin-top: 10px;
        color: #555;
    }

    /* Navigation Layout */
    nav {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 40px;
        flex-wrap: wrap;
        margin-top: 50px;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* Button Section Layout */
    .btn-section {
        text-align: center;
        padding: 30px;
        background-color: #fafafa;
        border-radius: 10px;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
        width: 280px;
        transition: transform 0.3s ease;
    }

    .btn-section:hover {
        transform: scale(1.05);
    }

    .btn-section h2 {
        font-size: 1.7rem;
        margin-bottom: 20px;
        color: #333;
    }

    /* Button Base Styles */
    .btn {
        display: inline-block;
        padding: 15px 30px;
        border-radius: 50px;
        font-size: 1.1rem;
        font-weight: 600;
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
        margin-bottom: 15px;
        width: 100%;
        max-width: 350px;
    }

    /* Primary Button Styles */
    .primary-btn {
        background-color: #FF2D20;
        color: #fff;
        border: 2px solid #FF2D20;
    }

    .primary-btn:hover,
    .primary-btn:focus {
        background-color: transparent;
        color: #FF2D20;
        border-color: #FF2D20;
        box-shadow: 0 0 18px rgba(255, 45, 32, 0.6);
        transform: translateY(-6px);
    }

    /* Secondary Button Styles */
    .secondary-btn {
        background-color: #1A202C;
        color: #fff;
        border: 2px solid transparent;
        background-image: linear-gradient(45deg, #FF2D20, #FF6347);
        background-origin: border-box;
    }

    .secondary-btn:hover,
    .secondary-btn:focus {
        background-color: transparent;
        color: #ffffff;
        border-color: #FF2D20;
        box-shadow: 0 0 18px rgba(255, 45, 32, 0.6);
        transform: translateY(-6px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        nav {
            flex-direction: column;
            gap: 20px;
        }

        .btn {
            width: 90%;
            max-width: 350px;
        }
    }

    /* Dark Mode Styling */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #18181b;
            color: #f1f1f1;
        }

        .welcome-section h1 {
            color: #f1f1f1;
        }

        .intro-text {
            color: #bbb;
        }

        nav {
            background-color: #2d2d33;
        }

        .primary-btn {
            background-color: #FF2D20;
            color: #fff;
        }

        .primary-btn:hover,
        .primary-btn:focus {
            background-color: transparent;
            color: #FF2D20;
            border-color: #FF2D20;
            box-shadow: 0 0 18px rgba(255, 45, 32, 0.7);
        }

        .secondary-btn {
            background-color: #1A202C;
            color: #fff;
            border: 2px solid transparent;
            background-image: linear-gradient(45deg, #FF2D20, #FF6347);
        }

        .secondary-btn:hover,
        .secondary-btn:focus {
            background-color: transparent;
            color: #FF2D20;
            border-color: #FF2D20;
            box-shadow: 0 0 18px rgba(255, 45, 32, 0.7);
        }
    }
</style>
