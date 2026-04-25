<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Page Not Found</title>
    @vite(['resources/css/app.css'])
</head>
<body class="premium-bg flex min-h-screen items-center justify-center px-6 text-white">
    <div class="glass-card max-w-lg p-10 text-center">
        <p class="text-sm uppercase tracking-widest text-violet-300">Error 404</p>
        <h1 class="mt-3 text-4xl font-bold">Page Not Found</h1>
        <p class="mt-4 text-slate-300">The page you are looking for does not exist or has been moved.</p>
        <a href="{{ route('portfolio.home') }}" class="glow-btn mt-8 inline-block">Go Home</a>
    </div>
</body>
</html>
