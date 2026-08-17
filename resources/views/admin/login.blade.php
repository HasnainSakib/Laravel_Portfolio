<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login — Hasnain Sakib Portfolio</title>
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
  --ink-100: #ffffff;
  --ink-300: #e2e8f0;
  --ink-400: #94a3b8;
  --line: rgba(244, 246, 252, 0.09);
  --line-strong: rgba(244, 246, 252, 0.16);
  --glass: rgba(10, 23, 61, 0.75);
}
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
body {
  background: var(--navy-950);
  color: var(--ink-300);
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 20px;
  background-image: 
    radial-gradient(circle at 15% 20%, rgba(56, 237, 248, 0.08) 0%, transparent 40%),
    radial-gradient(circle at 85% 80%, rgba(96, 165, 250, 0.08) 0%, transparent 40%);
}
.login-card {
  width: 100%;
  max-width: 420px;
  background: var(--glass);
  backdrop-filter: blur(16px);
  border: 1px solid var(--line-strong);
  border-radius: 20px;
  padding: 40px 32px;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
}
.logo-title {
  text-align: center;
  margin-bottom: 28px;
}
.logo-title h1 {
  font-size: 24px;
  font-weight: 700;
  color: var(--ink-100);
  letter-spacing: -0.02em;
}
.logo-title p {
  font-size: 13.5px;
  color: var(--cyan);
  margin-top: 6px;
  font-family: 'JetBrains Mono', monospace;
}
.alert {
  padding: 12px 16px;
  border-radius: 10px;
  font-size: 13.5px;
  margin-bottom: 20px;
}
.alert-danger {
  background: rgba(239, 68, 68, 0.15);
  border: 1px solid rgba(239, 68, 68, 0.3);
  color: #fca5a5;
}
.alert-success {
  background: rgba(56, 237, 248, 0.15);
  border: 1px solid rgba(56, 237, 248, 0.3);
  color: var(--cyan);
}
.form-group {
  margin-bottom: 20px;
}
.form-group label {
  display: block;
  font-size: 12.5px;
  font-family: 'JetBrains Mono', monospace;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: var(--ink-400);
  margin-bottom: 8px;
}
.form-control {
  width: 100%;
  padding: 14px 16px;
  background: rgba(5, 12, 33, 0.8);
  border: 1px solid var(--line-strong);
  border-radius: 10px;
  color: var(--ink-100);
  font-size: 14.5px;
  outline: none;
  transition: border-color 0.25s;
}
.form-control:focus {
  border-color: var(--cyan);
  box-shadow: 0 0 12px rgba(56, 237, 248, 0.2);
}
.btn-submit {
  width: 100%;
  padding: 15px;
  background: var(--cyan);
  color: #03150d;
  font-weight: 700;
  font-size: 14.5px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: all 0.25s ease;
  margin-top: 10px;
}
.btn-submit:hover {
  background: #5cf0ac;
  transform: translateY(-2px);
  box-shadow: 0 10px 25px -5px rgba(56, 237, 248, 0.4);
}
.creds-hint {
  margin-top: 24px;
  padding-top: 20px;
  border-top: 1px solid var(--line);
  font-size: 12px;
  color: var(--ink-400);
  font-family: 'JetBrains Mono', monospace;
  text-align: center;
  line-height: 1.5;
}
.creds-hint b { color: var(--blue); }
</style>
</head>
<body>

<div class="login-card">
  <div class="logo-title">
    <h1>Hasnain Sakib</h1>
    <p>ADMIN PORTAL LOGIN</p>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
      {{ $errors->first() }}
    </div>
  @endif

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <form method="POST" action="{{ route('admin.login.submit') }}">
    @csrf
    <div class="form-group">
      <label for="email">Admin Email</label>
      <input type="email" name="email" id="email" class="form-control" value="{{ old('email', 'admin@hasnainsakib.com') }}" required autofocus>
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
    </div>

    <button type="submit" class="btn-submit">Login to Dashboard →</button>
  </form>

  <div class="creds-hint">
    <b>Default Credentials:</b><br>
    Email: <code>admin@hasnainsakib.com</code><br>
    Password: <code>adminpassword123</code>
  </div>
</div>

</body>
</html>
