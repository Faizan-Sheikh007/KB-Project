<!DOCTYPE html>
<html>
<head>
 <title>Verify Email</title>
</head>
<body>
 <h1>Verify Your Email</h1>
 @if (session('message'))
 <p style="color:green">{{ session('message') }}</p>
 @endif
 <p>A verification link has been sent to your email. Please check your inbox.</p>
 <form method="POST" action="{{ route('verification.send') }}">
 @csrf
 <button type="submit">Resend Verification Email</button>
 </form>
</body>
</html>
