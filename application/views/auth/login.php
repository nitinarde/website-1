<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | PrimaVerse</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-brand: #7C3446;
            --color-brand-alt: #E25F80;
            --color-bg: #0A0A0C;
            --color-bg-card: rgba(24, 24, 27, 0.5);
            --color-bg-input: #262626;
            --color-text-primary: #fff;
            --color-text-muted: #a3a3a3;
            --color-border: rgba(255,255,255,0.2);
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--color-bg);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-text-primary);
        }
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: radial-gradient(ellipse 60% 50% at 50% 0%, rgba(124,52,70,0.25), transparent);
            pointer-events: none;
        }
        .login-card {
            position: relative;
            width: 100%;
            max-width: 420px;
            margin: 1rem;
            padding: 2.5rem;
            background: var(--color-bg-card);
            border: 1px solid var(--color-border);
            border-radius: 20px;
            backdrop-filter: blur(12px);
        }
        .login-card h1 { font-size: 1.5rem; margin-bottom: 0.35rem; }
        .login-card > p { color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 1.75rem; }
        label { display: block; font-size: 0.85rem; margin-bottom: 0.4rem; color: #d4d4d8; }
        input {
            width: 100%;
            padding: 0.75rem 1rem;
            margin-bottom: 1.1rem;
            background: var(--color-bg-input);
            border: 1px solid rgba(82,82,82,0.5);
            border-radius: 10px;
            color: #fff;
            font-family: inherit;
            font-size: 0.95rem;
        }
        input:focus { outline: none; border-color: var(--color-brand-alt); }
        .btn {
            width: 100%;
            padding: 0.85rem;
            background: linear-gradient(135deg, var(--color-brand), #9a3d55);
            border: none;
            border-radius: 10px;
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            font-family: inherit;
        }
        .btn:hover { opacity: 0.95; }
        .error {
            background: rgba(226, 95, 128, 0.15);
            border: 1px solid var(--color-brand-alt);
            color: #fca5a5;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-size: 0.875rem;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 1.25rem;
            color: var(--color-text-muted);
            font-size: 0.85rem;
            text-decoration: none;
        }
        .back-link:hover { color: var(--color-brand-alt); }
    </style>
</head>
<body>
    <div class="login-card">
        <h1>Admin Login</h1>
        <p>View submitted website requirements</p>

        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <form method="post" action="<?= site_url('login') ?>">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required autocomplete="username" autofocus>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required autocomplete="current-password">

            <button type="submit" class="btn">Sign In</button>
        </form>

        <a class="back-link" href="<?= site_url() ?>">← Back to public form</a>
    </div>
</body>
</html>
