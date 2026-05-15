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
            --color-brand-alt: #9a3d55;
            --color-bg: #f4f1ed;
            --color-bg-card: #ffffff;
            --color-bg-input: #ffffff;
            --color-text-primary: #1a1516;
            --color-text-muted: #6b6364;
            --color-border: rgba(124, 52, 70, 0.14);
            --color-border-neutral: #e0dbd6;
            --shadow: 0 8px 32px rgba(30, 20, 22, 0.08), 0 2px 8px rgba(30, 20, 22, 0.04);
            --scrollbar-size: 8px;
            --scrollbar-track: #ebe6e1;
            --scrollbar-thumb: #c9b8bc;
            --scrollbar-thumb-hover: #7C3446;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html {
            scrollbar-width: thin;
            scrollbar-color: var(--scrollbar-thumb) var(--scrollbar-track);
        }
        html::-webkit-scrollbar {
            width: var(--scrollbar-size);
            height: var(--scrollbar-size);
        }
        html::-webkit-scrollbar-track {
            background: var(--scrollbar-track);
            border-radius: 999px;
        }
        html::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #c9a8b0 0%, var(--scrollbar-thumb) 100%);
            border-radius: 999px;
            border: 2px solid var(--scrollbar-track);
        }
        html::-webkit-scrollbar-thumb:hover {
            background: var(--scrollbar-thumb-hover);
        }
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
            background:
                radial-gradient(ellipse 80% 50% at 20% -10%, rgba(124, 52, 70, 0.08), transparent),
                radial-gradient(ellipse 60% 40% at 90% 100%, rgba(154, 61, 85, 0.06), transparent);
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
            box-shadow: var(--shadow);
        }
        .login-card h1 { font-size: 1.5rem; margin-bottom: 0.35rem; color: var(--color-brand); }
        .login-card > p { color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 1.75rem; }
        label { display: block; font-size: 0.85rem; margin-bottom: 0.4rem; color: var(--color-text-primary); font-weight: 500; }
        input {
            width: 100%;
            padding: 0.75rem 1rem;
            margin-bottom: 1.1rem;
            background: var(--color-bg-input);
            border: 1px solid var(--color-border-neutral);
            border-radius: 10px;
            color: var(--color-text-primary);
            font-family: inherit;
            font-size: 0.95rem;
        }
        input:focus {
            outline: none;
            border-color: var(--color-brand-alt);
            box-shadow: 0 0 0 3px rgba(124, 52, 70, 0.12);
        }
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
            background: rgba(185, 28, 28, 0.08);
            border: 1px solid #fca5a5;
            color: #b91c1c;
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
