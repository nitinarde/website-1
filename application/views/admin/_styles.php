<style>
    :root {
        --color-brand: #7C3446;
        --color-brand-alt: #E25F80;
        --color-bg: #0A0A0C;
        --color-bg-card: rgba(24, 24, 27, 0.45);
        --color-bg-elevated: #171717;
        --color-bg-input: #262626;
        --color-text-primary: #ffffff;
        --color-text-secondary: #d4d4d8;
        --color-text-muted: #a3a3a3;
        --color-border: rgba(255,255,255,0.15);
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
        font-family: 'DM Sans', system-ui, sans-serif;
        background: var(--color-bg);
        color: var(--color-text-primary);
        min-height: 100vh;
        line-height: 1.5;
    }
    .admin-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 2rem;
        border-bottom: 1px solid var(--color-border);
        background: rgba(10,10,12,0.9);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 0;
        z-index: 50;
    }
    .admin-header h1 { font-size: 1.15rem; font-weight: 600; }
    .admin-header .brand { color: var(--color-brand-alt); }
    .admin-nav { display: flex; gap: 0.75rem; align-items: center; }
    .admin-nav a, .admin-nav span {
        font-size: 0.85rem;
        color: var(--color-text-secondary);
        text-decoration: none;
        padding: 0.45rem 0.9rem;
        border-radius: 8px;
        border: 1px solid var(--color-border);
    }
    .admin-nav a:hover { background: rgba(255,255,255,0.05); color: #fff; }
    .admin-nav .user { border: none; color: var(--color-text-muted); }
    .admin-main { max-width: 1200px; margin: 0 auto; padding: 2rem; }
    .card {
        background: var(--color-bg-card);
        border: 1px solid var(--color-border);
        border-radius: 16px;
        overflow: hidden;
    }
    table.data-table { width: 100%; border-collapse: collapse; }
    table.data-table th, table.data-table td {
        padding: 0.85rem 1rem;
        text-align: left;
        border-bottom: 1px solid var(--color-border);
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
    table.data-table tr:hover td { background: rgba(255,255,255,0.02); }
    .btn-sm {
        display: inline-block;
        padding: 0.35rem 0.75rem;
        font-size: 0.8rem;
        border-radius: 6px;
        text-decoration: none;
        margin-right: 0.35rem;
        font-weight: 500;
    }
    .btn-view { background: rgba(124,52,70,0.4); color: #fff; border: 1px solid var(--color-brand-alt); }
    .btn-pdf { background: var(--color-brand); color: #fff; }
    .btn-back {
        display: inline-block;
        margin-bottom: 1.25rem;
        color: var(--color-text-muted);
        text-decoration: none;
        font-size: 0.9rem;
    }
    .btn-back:hover { color: var(--color-brand-alt); }
    .empty { padding: 3rem; text-align: center; color: var(--color-text-muted); }
    .report-section { margin-bottom: 1.5rem; }
    .report-section h3 {
        font-size: 0.95rem;
        color: var(--color-brand-alt);
        margin-bottom: 0.65rem;
        padding-bottom: 0.35rem;
        border-bottom: 1px solid var(--color-border);
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
    .btn-outline { border: 1px solid var(--color-border); color: var(--color-text-secondary); }
</style>
