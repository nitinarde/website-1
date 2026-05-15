<style>
    :root {
        --color-brand: #7C3446;
        --color-brand-alt: #9a3d55;
        --color-bg: #f4f1ed;
        --color-bg-card: #ffffff;
        --color-bg-elevated: #faf8f6;
        --color-bg-input: #ffffff;
        --color-text-primary: #1a1516;
        --color-text-secondary: #3f3839;
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
        font-family: 'DM Sans', system-ui, sans-serif;
        background: var(--color-bg);
        color: var(--color-text-primary);
        min-height: 100vh;
        line-height: 1.5;
    }
    body::before {
        content: '';
        position: fixed;
        inset: 0;
        background:
            radial-gradient(ellipse 80% 50% at 20% -10%, rgba(124, 52, 70, 0.08), transparent),
            radial-gradient(ellipse 60% 40% at 90% 100%, rgba(154, 61, 85, 0.06), transparent);
        pointer-events: none;
        z-index: 0;
    }
    .admin-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 2rem;
        border-bottom: 1px solid var(--color-border-neutral);
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 0;
        z-index: 50;
    }
    .admin-header h1 { font-size: 1.15rem; font-weight: 600; }
    .admin-header .brand { color: var(--color-brand); }
    .admin-nav { display: flex; gap: 0.75rem; align-items: center; }
    .admin-nav a, .admin-nav span {
        font-size: 0.85rem;
        color: var(--color-text-secondary);
        text-decoration: none;
        padding: 0.45rem 0.9rem;
        border-radius: 8px;
        border: 1px solid var(--color-border-neutral);
        background: #fff;
    }
    .admin-nav a:hover { background: rgba(124, 52, 70, 0.06); color: var(--color-brand); border-color: var(--color-border); }
    .admin-nav .user { border: none; background: transparent; color: var(--color-text-muted); }
    .admin-main { max-width: 1200px; margin: 0 auto; padding: 2rem; position: relative; z-index: 1; }
    .card {
        background: var(--color-bg-card);
        border: 1px solid var(--color-border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: var(--shadow);
    }
    table.data-table { width: 100%; border-collapse: collapse; }
    table.data-table th, table.data-table td {
        padding: 0.85rem 1rem;
        text-align: left;
        border-bottom: 1px solid var(--color-border-neutral);
        font-size: 0.9rem;
    }
    table.data-table th {
        background: var(--color-bg-elevated);
        color: var(--color-text-muted);
        font-weight: 600;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    table.data-table tr:hover td { background: rgba(124, 52, 70, 0.04); }
    .btn-sm {
        display: inline-block;
        padding: 0.35rem 0.75rem;
        font-size: 0.8rem;
        border-radius: 6px;
        text-decoration: none;
        margin-right: 0.35rem;
        font-weight: 500;
    }
    .btn-view { background: rgba(124, 52, 70, 0.1); color: var(--color-brand); border: 1px solid var(--color-brand); }
    .btn-pdf { background: var(--color-brand); color: #fff; }
    .btn-back {
        display: inline-block;
        margin-bottom: 1.25rem;
        color: var(--color-text-muted);
        text-decoration: none;
        font-size: 0.9rem;
    }
    .btn-back:hover { color: var(--color-brand); }
    .empty { padding: 3rem; text-align: center; color: var(--color-text-muted); }
    .report-section { margin-bottom: 1.5rem; }
    .report-section h3 {
        font-size: 0.95rem;
        color: var(--color-brand);
        margin-bottom: 0.65rem;
        padding-bottom: 0.35rem;
        border-bottom: 1px solid var(--color-border-neutral);
    }
    .report-table { width: 100%; border-collapse: collapse; }
    .report-table th {
        width: 28%;
        padding: 0.5rem 0.75rem 0.5rem 0;
        vertical-align: top;
        color: var(--color-text-muted);
        font-weight: 500;
        font-size: 0.85rem;
    }
    .report-table td { padding: 0.5rem 0; font-size: 0.9rem; color: var(--color-text-secondary); }
    .pdf-list { margin: 0; padding-left: 1.25rem; }
    .pdf-list li { margin-bottom: 0.25rem; }
    .muted { color: var(--color-text-muted); font-style: italic; }
    .meta-bar {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: var(--color-bg-card);
        border: 1px solid var(--color-border);
        border-radius: 12px;
        font-size: 0.85rem;
        color: var(--color-text-muted);
        box-shadow: var(--shadow);
    }
    .actions-top { margin-bottom: 1.5rem; display: flex; gap: 0.75rem; flex-wrap: wrap; }
    .actions-top a {
        padding: 0.6rem 1.1rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.875rem;
    }
    .btn-primary { background: var(--color-brand); color: #fff; }
    .btn-outline { border: 1px solid var(--color-border-neutral); color: var(--color-text-secondary); background: #fff; }
</style>
