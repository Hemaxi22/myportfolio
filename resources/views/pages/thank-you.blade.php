<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Hemaxi Rathod</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="premium-bg flex min-h-screen items-center justify-center px-6 text-white">
    <div class="glass-card max-w-xl p-8 text-center">
        <h1 class="text-3xl font-bold text-violet-300">Thank You!</h1>
        <p class="mt-4 text-slate-300">Your message has been received successfully. I will connect with you soon.</p>
        <a href="{{ route('portfolio.home') }}" class="glow-btn mt-6 inline-block">Back to Portfolio</a>
    </div>
</body>
</html>
