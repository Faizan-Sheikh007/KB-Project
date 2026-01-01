<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f5f5f5; margin:0; padding:0; }
        .container { max-width:600px; margin:50px auto; background:#fff; padding:20px; border-radius:6px; box-shadow:0 2px 6px rgba(0,0,0,0.1);}
        input, select { width:100%; padding:8px; margin:6px 0 12px 0; border:1px solid #ccc; border-radius:4px; }
        button { padding:10px 15px; background:#007BFF; color:#fff; border:none; border-radius:4px; cursor:pointer; }
        button:hover { background:#0056b3; }
        .success { color:green; margin-bottom:10px; }
        a { color:#007BFF; text-decoration:none; }
        a:hover { text-decoration:underline; }
        nav { margin-bottom:20px; }
        nav form { display:inline; }
    </style>
</head>
<body>
<div class="container">
    <nav>
        Hello, {{ auth()->user()->name }} |
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <h2>Dashboard</h2>
    <p>Current Role: <strong>{{ auth()->user()->current_role }}</strong></p>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('switch.role') }}">
        @csrf
        <label>Switch Role</label>
        <select name="role">
            @foreach(auth()->user()->roles as $role)
                <option value="{{ $role->name }}" {{ auth()->user()->current_role === $role->name ? 'selected' : '' }}>
                    {{ ucfirst($role->name) }}
                </option>
            @endforeach
        </select>
        <button type="submit">Switch Role</button>
    </form>

    <div style="margin-top:20px;">
        @if(auth()->user()->current_role === 'admin')
            <a href="{{ route('admin.dashboard') }}">Go to Admin Dashboard</a>
        @endif

        @if(auth()->user()->current_role === 'user')
            <a href="{{ route('user.dashboard') }}">Go to User Dashboard</a>
        @endif
    </div>
</div>
</body>
</html>
