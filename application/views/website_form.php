<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Discovery &amp; Requirements | PrimaVerse</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-brand: #7C3446;
            --color-brand-light: rgba(127, 29, 29, 0.20);
            --color-brand-mid: rgba(127, 29, 29, 0.40);
            --color-brand-subtle: rgba(127, 29, 29, 0.05);
            --color-bg: #0A0A0C;
            --color-bg-card: rgba(24, 24, 27, 0.30);
            --color-bg-elevated: #171717;
            --color-bg-input: #262626;
            --color-bg-tag: rgba(9, 9, 11, 1);
            --color-surface-glass: rgba(255, 255, 255, 0.05);
            --color-surface-white: rgba(255, 255, 255, 0.70);
            --color-text-primary: #ffffff;
            --color-text-secondary: #d4d4d8;
            --color-text-muted: #a3a3a3;
            --color-text-brand: #7C3446;
            --color-text-tertiary: #D9D9D9;
            --color-brand-alt: #E25F80;
            --color-bg-contact-input: #EDE9E4;
            --color-text-contact-input: #1E1415;
            --color-border: rgba(255, 255, 255, 0.20);
            --color-border-neutral: rgba(82, 82, 82, 0.50);
            --color-border-stone: #d6d3d1;
            --radius: 12px;
            --radius-lg: 20px;
            --shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background: var(--color-bg);
            color: var(--color-text-primary);
            line-height: 1.6;
            min-height: 100vh;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background:
                radial-gradient(ellipse 80% 50% at 20% -10%, var(--color-brand-light), transparent),
                radial-gradient(ellipse 60% 40% at 90% 100%, rgba(226, 95, 128, 0.08), transparent);
            pointer-events: none;
            z-index: 0;
        }

        .page-wrap {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            padding: 1rem 1rem 2.5rem;
        }

        /* Header */
        .hero {
            text-align: center;
            padding: 1rem 0.5rem 1.25rem;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.35rem 1rem;
            background: var(--color-brand-subtle);
            border: 1px solid var(--color-brand-mid);
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--color-brand-alt);
            margin-bottom: 1.25rem;
        }

        .hero h1 {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 0.75rem;
            background: linear-gradient(135deg, #fff 0%, var(--color-text-secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            color: var(--color-text-muted);
            font-size: 1rem;
            max-width: 560px;
            margin: 0 auto;
        }

        .hero-meta {
            margin-top: 1rem;
            font-size: 0.8rem;
            color: var(--color-text-muted);
        }

        /* Centered form card */
        .form-shell {
            width: 100%;
            max-width: 920px;
            margin: 0 auto;
            background: linear-gradient(180deg, rgba(30, 30, 35, 0.95) 0%, rgba(18, 18, 20, 0.98) 100%);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        #websiteForm {
            display: flex;
            flex-direction: column;
        }

        /* Progress header */
        .form-stepper-wrap {
            flex-shrink: 0;
            padding: 1rem 1rem 0.75rem;
            border-bottom: 1px solid var(--color-border);
            background: rgba(0, 0, 0, 0.25);
        }

        .step-progress-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.75rem;
            margin-bottom: 0.65rem;
        }

        .step-current-label {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--color-text-primary);
        }

        .step-current-label span {
            color: var(--color-brand-alt);
        }

        .step-counter {
            font-size: 0.75rem;
            color: var(--color-text-muted);
            white-space: nowrap;
        }

        .progress-bar {
            height: 4px;
            background: var(--color-bg-input);
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 0.75rem;
        }

        .progress-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--color-brand), var(--color-brand-alt));
            border-radius: 4px;
            transition: width 0.35s ease;
        }

        .form-stepper {
            display: flex;
            gap: 0.35rem;
            overflow-x: auto;
            padding-bottom: 0.25rem;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }

        .form-stepper::-webkit-scrollbar { display: none; }

        .step-btn {
            flex: 0 0 auto;
            min-width: 36px;
            min-height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.35rem;
            padding: 0.35rem 0.6rem;
            background: var(--color-surface-glass);
            border: 1px solid transparent;
            border-radius: 10px;
            color: var(--color-text-muted);
            font-family: inherit;
            font-size: 0.7rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }

        .step-btn .step-label-text { display: none; }

        .step-btn .step-num {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: var(--color-bg-input);
            font-size: 0.72rem;
            font-weight: 700;
        }

        .step-btn.active {
            border-color: var(--color-brand-alt);
            color: var(--color-text-primary);
            background: var(--color-brand-subtle);
        }

        .step-btn.active .step-num {
            background: linear-gradient(135deg, var(--color-brand), var(--color-brand-alt));
            color: #fff;
        }

        .step-btn.done .step-num {
            background: rgba(226, 95, 128, 0.4);
            color: #fff;
        }

        .scroll-hint {
            display: none;
        }

        /* Panels — one full section visible at a time */
        .form-horizontal-wrap {
            width: 100%;
            overflow: hidden;
        }

        .form-horizontal-track {
            display: flex;
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            overscroll-behavior-x: contain;
        }

        .form-horizontal-track::-webkit-scrollbar { display: none; }

        .section-card {
            flex: 0 0 100%;
            width: 100%;
            min-width: 100%;
            max-width: 100%;
            scroll-snap-align: start;
            scroll-snap-stop: always;
            padding: 1rem 1rem 1.25rem;
            overflow-y: auto;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
            box-sizing: border-box;
        }

        .section-card-inner {
            max-width: 100%;
        }

        /* Step navigation */
        .form-step-nav {
            display: flex;
            gap: 0.65rem;
            padding: 0.75rem 1rem;
            border-top: 1px solid var(--color-border-neutral);
            background: rgba(0, 0, 0, 0.2);
        }

        .btn-step-nav {
            flex: 1;
            min-height: 44px;
            padding: 0.65rem 1rem;
            border-radius: 10px;
            font-family: inherit;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            border: 1px solid var(--color-border-neutral);
            background: var(--color-bg-input);
            color: var(--color-text-secondary);
        }

        .btn-step-nav:hover:not(:disabled) {
            border-color: var(--color-border);
            color: var(--color-text-primary);
        }

        .btn-step-nav:disabled {
            opacity: 0.35;
            cursor: not-allowed;
        }

        .btn-step-nav.btn-next {
            background: linear-gradient(135deg, var(--color-brand), #9a3d55);
            border-color: transparent;
            color: #fff;
        }

        .btn-step-nav.btn-next:hover:not(:disabled) {
            box-shadow: 0 4px 16px rgba(124, 52, 70, 0.45);
        }

        /* Tablet+ */
        @media (min-width: 640px) {
            .form-stepper-wrap { padding: 1rem 1.25rem 0.85rem; }
            .step-btn .step-label-text { display: inline; }
            .step-btn { padding: 0.4rem 0.75rem; min-width: auto; }
            .section-card { padding: 1.25rem 1.5rem; }
            .scroll-hint {
                display: block;
                text-align: center;
                font-size: 0.72rem;
                color: var(--color-text-muted);
                padding-top: 0.25rem;
            }
        }

        /* Desktop — same single-panel view, taller area */
        @media (min-width: 900px) {
            .form-horizontal-wrap {
                height: 480px;
            }
            .form-horizontal-track {
                height: 100%;
            }
            .section-card {
                flex: 0 0 100%;
                min-width: 100%;
                width: 100%;
                max-width: 100%;
                height: 100%;
            }
            .scroll-hint::after { content: ' · or use Next / Previous'; }
        }

        /* Mobile */
        @media (max-width: 639px) {
            .page-wrap { padding: 0.75rem 0.75rem 1.5rem; }
            .hero { padding: 0.75rem 0.25rem 1rem; }
            .hero h1 { font-size: 1.45rem; }
            .hero p { font-size: 0.9rem; }
            .form-shell { border-radius: 16px; }
            .form-horizontal-wrap {
                min-height: min(58vh, 480px);
                max-height: min(62vh, 520px);
            }
            .form-horizontal-track { height: 100%; }
            .section-card { max-height: 100%; }
            .section-header h2 { font-size: 1.1rem; }
            .section-num { width: 36px; height: 36px; font-size: 0.85rem; }
            input[type="text"],
            input[type="url"],
            textarea,
            select {
                font-size: 16px;
                min-height: 44px;
            }
            textarea { min-height: 88px; max-height: none; }
            .check-item { min-height: 44px; padding: 0.65rem 0.85rem; }
        }

        .section-header {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
            padding-bottom: 0.85rem;
            border-bottom: 1px solid var(--color-border-neutral);
            flex-shrink: 0;
        }

        .section-num {
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--color-brand), var(--color-brand-alt));
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .section-header h2 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .section-header p {
            font-size: 0.875rem;
            color: var(--color-text-muted);
        }

        /* Fields */
        .field-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.25rem;
        }

        @media (max-width: 640px) {
            .field-grid { grid-template-columns: 1fr; }
        }

        .field { margin-bottom: 0.9rem; }
        .field:last-child { margin-bottom: 0; }
        .field.full { grid-column: 1 / -1; }

        .section-card .field-grid {
            gap: 0.85rem;
        }

        .section-card textarea {
            min-height: 80px;
        }

        .section-card .check-group {
            grid-template-columns: 1fr;
            gap: 0.5rem;
        }

        @media (min-width: 480px) {
            .section-card .check-group {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }

        .section-card .check-item {
            padding: 0.6rem 0.85rem;
        }

        label.field-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--color-text-secondary);
            margin-bottom: 0.5rem;
        }

        label.field-label .hint {
            display: block;
            font-weight: 400;
            font-size: 0.8rem;
            color: var(--color-text-muted);
            margin-top: 0.15rem;
        }

        label.field-label .req {
            color: var(--color-brand-alt);
        }

        /* Validation */
        .field.has-error label.field-label { color: #f87171; }
        .field.has-error input[type="text"],
        .field.has-error input[type="url"],
        .field.has-error textarea,
        .field.has-error select {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.2);
        }
        .field.has-error .check-group {
            outline: 2px solid #ef4444;
            outline-offset: 2px;
            border-radius: var(--radius);
        }
        .field-error {
            display: none;
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.4rem;
            font-weight: 500;
        }
        .field.has-error .field-error { display: block; }

        input[type="text"],
        input[type="url"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 0.75rem 1rem;
            background: var(--color-bg-input);
            border: 1px solid var(--color-border-neutral);
            border-radius: var(--radius);
            color: var(--color-text-primary);
            font-family: inherit;
            font-size: 0.9375rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: var(--color-brand-alt);
            box-shadow: 0 0 0 3px var(--color-brand-light);
        }

        textarea { min-height: 100px; resize: vertical; }
        select { cursor: pointer; }
        select option { background: var(--color-bg-elevated); }

        /* Checkbox / radio groups */
        .check-group {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 0.65rem;
        }

        .check-item {
            display: flex;
            align-items: flex-start;
            gap: 0.65rem;
            padding: 0.75rem 1rem;
            background: var(--color-surface-glass);
            border: 1px solid var(--color-border-neutral);
            border-radius: var(--radius);
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
        }

        .check-item:hover {
            border-color: var(--color-border);
            background: rgba(255, 255, 255, 0.08);
        }

        .check-item:has(input:checked) {
            border-color: var(--color-brand-alt);
            background: var(--color-brand-subtle);
        }

        .check-item input {
            margin-top: 0.2rem;
            accent-color: var(--color-brand-alt);
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            cursor: pointer;
        }

        .check-item span {
            font-size: 0.875rem;
            color: var(--color-text-secondary);
            line-height: 1.4;
        }

        .inline-other {
            margin-top: 0.75rem;
        }

        .conditional {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px dashed var(--color-border-neutral);
        }

        .conditional[hidden] { display: none; }

        /* Submit — directly below form */
        .form-footer {
            flex-shrink: 0;
            padding: 1rem 1.25rem 1.15rem;
            background: rgba(10, 10, 12, 0.5);
            border-top: 1px solid var(--color-border);
            display: flex;
            flex-direction: column;
            align-items: stretch;
            gap: 0.75rem;
        }

        @media (min-width: 640px) {
            .form-footer {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }
        }

        .form-footer-text p {
            font-size: 0.78rem;
            color: var(--color-text-muted);
        }

        .form-footer-actions {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            width: 100%;
        }

        @media (min-width: 640px) {
            .form-footer-actions {
                width: auto;
                flex-direction: row;
                align-items: center;
                gap: 1rem;
            }
        }

        .btn-submit {
            width: 100%;
            padding: 0.85rem 2rem;
            background: linear-gradient(135deg, var(--color-brand), #9a3d55);
            color: #fff;
            border: none;
            border-radius: var(--radius);
            font-family: inherit;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.15s, box-shadow 0.2s, opacity 0.2s;
            box-shadow: 0 4px 20px rgba(124, 52, 70, 0.4);
        }

        .btn-submit:hover:not(:disabled) {
            transform: translateY(-1px);
            box-shadow: 0 8px 28px rgba(226, 95, 128, 0.35);
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        @media (min-width: 640px) {
            .btn-submit { width: auto; min-width: 200px; }
        }

        /* Modal */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.75);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            padding: 1rem;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        .modal-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-box {
            background: var(--color-bg-elevated);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            max-width: 420px;
            text-align: center;
            box-shadow: var(--shadow);
            transform: scale(0.95);
            transition: transform 0.3s;
        }

        .modal-overlay.show .modal-box { transform: scale(1); }

        .modal-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 1.25rem;
            background: var(--color-brand-subtle);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        .modal-box h3 {
            font-size: 1.35rem;
            margin-bottom: 0.5rem;
        }

        .modal-box p {
            color: var(--color-text-muted);
            margin-bottom: 1.5rem;
        }

        .btn-modal {
            padding: 0.65rem 1.5rem;
            background: var(--color-brand-alt);
            color: #fff;
            border: none;
            border-radius: var(--radius);
            font-family: inherit;
            font-weight: 600;
            cursor: pointer;
        }

        .error-toast {
            color: #fca5a5;
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: none;
        }

        .error-toast.show { display: block; }
    </style>
</head>
<body>

<div class="page-wrap">
    <header class="hero">
        <div class="hero-badge">PrimaVerse · digital</div>
        <h1>Website Discovery &amp; Requirements</h1>
        <p>Help us understand your business, goals, and vision so we can design a website tailored to your needs.</p>
    </header>

    <div class="form-shell">
    <form id="websiteForm" novalidate>
        <div class="form-stepper-wrap">
            <div class="step-progress-top">
                <p class="step-current-label" id="stepCurrentLabel"><span>Overview</span></p>
                <span class="step-counter" id="stepCounter">1 / 11</span>
            </div>
            <div class="progress-bar" aria-hidden="true">
                <div class="progress-bar-fill" id="progressFill" style="width: 9.09%"></div>
            </div>
            <nav class="form-stepper" id="formStepper" aria-label="Form progress">
                <button type="button" class="step-btn active" data-step="0" data-title="Overview"><span class="step-num">0</span><span class="step-label-text">Overview</span></button>
                <button type="button" class="step-btn" data-step="1" data-title="Audience"><span class="step-num">1</span><span class="step-label-text">Audience</span></button>
                <button type="button" class="step-btn" data-step="2" data-title="Goals"><span class="step-num">2</span><span class="step-label-text">Goals</span></button>
                <button type="button" class="step-btn" data-step="3" data-title="Structure"><span class="step-num">3</span><span class="step-label-text">Structure</span></button>
                <button type="button" class="step-btn" data-step="4" data-title="Content"><span class="step-num">4</span><span class="step-label-text">Content</span></button>
                <button type="button" class="step-btn" data-step="5" data-title="Design"><span class="step-num">5</span><span class="step-label-text">Design</span></button>
                <button type="button" class="step-btn" data-step="6" data-title="SEO"><span class="step-num">6</span><span class="step-label-text">SEO</span></button>
                <button type="button" class="step-btn" data-step="7" data-title="Technical"><span class="step-num">7</span><span class="step-label-text">Technical</span></button>
                <button type="button" class="step-btn" data-step="8" data-title="Timeline"><span class="step-num">8</span><span class="step-label-text">Timeline</span></button>
                <button type="button" class="step-btn" data-step="9" data-title="Launch"><span class="step-num">9</span><span class="step-label-text">Launch</span></button>
                <button type="button" class="step-btn" data-step="10" data-title="Notes"><span class="step-num">10</span><span class="step-label-text">Notes</span></button>
            </nav>
            <p class="scroll-hint">Swipe left/right or use Next / Previous</p>
        </div>

        <div class="form-horizontal-wrap">
        <div class="form-horizontal-track" id="formTrack">

            <!-- 0. Quick Overview -->
            <section id="section-0" class="section-card">
                <div class="section-header">
                    <span class="section-num">0</span>
                    <div>
                        <h2>Quick Overview</h2>
                        <p>Tell us about your company and what you offer.</p>
                    </div>
                </div>

                <div class="field-grid">
                    <div class="field full" data-validate="company_name">
                        <label class="field-label" for="company_name">Company Name <span class="req">*</span></label>
                        <input type="text" id="company_name" name="company_name" placeholder="Your company name">
                        <span class="field-error">Company name is required.</span>
                    </div>
                    <div class="field full">
                        <label class="field-label" for="business_description">Business Description <span class="hint">In brief — what does your business do?</span></label>
                        <textarea id="business_description" name="business_description" placeholder="Describe your business in a few sentences"></textarea>
                    </div>
                    <div class="field">
                        <label class="field-label" for="existing_website">Do you already have a website?</label>
                        <input type="url" id="existing_website" name="existing_website" placeholder="https://your-current-site.com">
                    </div>
                    <div class="field full">
                        <label class="field-label" for="usp">Unique Selling Proposition (USP) <span class="hint">What makes your business different from competitors?</span></label>
                        <textarea id="usp" name="usp" placeholder="Your key differentiators"></textarea>
                    </div>
                    <div class="field full">
                        <label class="field-label" for="services">Key Services / Products</label>
                        <textarea id="services" name="services" placeholder="List your main services or products"></textarea>
                    </div>
                </div>
            </section>

            <!-- 1. Business & Target Audience -->
            <section id="section-1" class="section-card">
                <div class="section-header">
                    <span class="section-num">1</span>
                    <div>
                        <h2>Business &amp; Target Audience</h2>
                        <p>Who are you trying to reach?</p>
                    </div>
                </div>
                <div class="field-grid">
                    <div class="field" data-validate="customer_segment">
                        <label class="field-label" for="customer_segment">Primary Customer Segment <span class="req">*</span></label>
                        <input type="text" id="customer_segment" name="customer_segment" placeholder="e.g. B2B SMEs, retail consumers">
                        <span class="field-error">Primary customer segment is required.</span>
                    </div>
                    <div class="field">
                        <label class="field-label" for="geographic_targeting">Geographic Targeting</label>
                        <input type="text" id="geographic_targeting" name="geographic_targeting" placeholder="e.g. UK nationwide, London only">
                    </div>
                </div>
            </section>

            <!-- 2. Website Goals -->
            <section id="section-2" class="section-card">
                <div class="section-header">
                    <span class="section-num">2</span>
                    <div>
                        <h2>Website Goals &amp; Objectives</h2>
                        <p>What should your website achieve?</p>
                    </div>
                </div>

                <div class="field" data-validate="primary_goals">
                    <label class="field-label">Primary Goals <span class="req">*</span> <span class="hint">Select at least one</span></label>
                    <div class="check-group" id="primaryGoalsGroup">
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Generate Leads"><span>Generate Leads</span></label>
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Increase Brand Awareness"><span>Increase Brand Awareness</span></label>
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Showcase Services / Portfolio"><span>Showcase Services / Portfolio</span></label>
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Sell Products Online (E-commerce)"><span>Sell Products Online (E-commerce)</span></label>
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Build Trust & Credibility"><span>Build Trust &amp; Credibility</span></label>
                    </div>
                    <div class="inline-other">
                        <input type="text" name="primary_goals_other" id="primary_goals_other" placeholder="Other goal (please specify)">
                    </div>
                    <span class="field-error">Please select at least one primary goal.</span>
                </div>

                <div class="field" style="margin-top:1.5rem">
                    <label class="field-label">Desired User Actions (Conversions) <span class="hint">Select all that apply</span></label>
                    <div class="check-group">
                        <label class="check-item"><input type="checkbox" name="desired_actions[]" value="Contact Form Submission"><span>Contact Form Submission</span></label>
                        <label class="check-item"><input type="checkbox" name="desired_actions[]" value="Book a Call / Demo"><span>Book a Call / Demo</span></label>
                        <label class="check-item"><input type="checkbox" name="desired_actions[]" value="WhatsApp Inquiry"><span>WhatsApp Inquiry</span></label>
                        <label class="check-item"><input type="checkbox" name="desired_actions[]" value="Purchase a Product"><span>Purchase a Product</span></label>
                        <label class="check-item"><input type="checkbox" name="desired_actions[]" value="Download Resource (PDF, Brochure)"><span>Download Resource (PDF, Brochure)</span></label>
                        <label class="check-item"><input type="checkbox" name="desired_actions[]" value="Newsletter Signup"><span>Newsletter Signup</span></label>
                    </div>
                    <div class="inline-other">
                        <input type="text" name="desired_actions_other" placeholder="Other — e.g. interactive calculators, retirement tools">
                    </div>
                </div>
            </section>

            <!-- 3. Website Structure -->
            <section id="section-3" class="section-card">
                <div class="section-header">
                    <span class="section-num">3</span>
                    <div>
                        <h2>Website Structure</h2>
                        <p>Pages required for your site</p>
                    </div>
                </div>
                <div class="field">
                    <label class="field-label">Pages Required <span class="hint">Select all that apply</span></label>
                    <div class="check-group">
                        <label class="check-item"><input type="checkbox" name="pages_required[]" value="Home"><span>Home</span></label>
                        <label class="check-item"><input type="checkbox" name="pages_required[]" value="Services / Products"><span>Services / Products</span></label>
                        <label class="check-item"><input type="checkbox" name="pages_required[]" value="About Us"><span>About Us</span></label>
                        <label class="check-item"><input type="checkbox" name="pages_required[]" value="Case Studies / Portfolio"><span>Case Studies / Portfolio</span></label>
                        <label class="check-item"><input type="checkbox" name="pages_required[]" value="Blog"><span>Blog</span></label>
                        <label class="check-item"><input type="checkbox" name="pages_required[]" value="Resources / Downloads"><span>Resources / Downloads</span></label>
                        <label class="check-item"><input type="checkbox" name="pages_required[]" value="Contact Us"><span>Contact Us</span></label>
                        <label class="check-item"><input type="checkbox" name="pages_required[]" value="Landing Pages (Ads Campaigns)"><span>Landing Pages (Ads Campaigns)</span></label>
                        <label class="check-item"><input type="checkbox" name="pages_required[]" value="Careers"><span>Careers</span></label>
                    </div>
                    <div class="inline-other">
                        <input type="text" name="pages_required_other" placeholder="Other pages (please specify)">
                    </div>
                </div>
            </section>

            <!-- 4. Content & Blog -->
            <section id="section-4" class="section-card">
                <div class="section-header">
                    <span class="section-num">4</span>
                    <div>
                        <h2>Content &amp; Blog Strategy</h2>
                        <p>How you plan to create and publish content</p>
                    </div>
                </div>

                <div class="field-grid">
                    <div class="field">
                        <label class="field-label">Blog Requirement</label>
                        <div class="check-group" style="grid-template-columns:1fr">
                            <label class="check-item"><input type="radio" name="blog_requirement" value="Yes"><span>Yes — we need a blog</span></label>
                            <label class="check-item"><input type="radio" name="blog_requirement" value="No"><span>No blog needed</span></label>
                            <label class="check-item"><input type="radio" name="blog_requirement" value="Not Sure"><span>Not sure yet</span></label>
                        </div>
                    </div>
                    <div class="field">
                        <label class="field-label">Publishing Frequency</label>
                        <div class="check-group" style="grid-template-columns:1fr">
                            <label class="check-item"><input type="radio" name="publishing_frequency" value="Weekly"><span>Weekly</span></label>
                            <label class="check-item"><input type="radio" name="publishing_frequency" value="Bi-weekly"><span>Bi-weekly</span></label>
                            <label class="check-item"><input type="radio" name="publishing_frequency" value="Monthly"><span>Monthly</span></label>
                            <label class="check-item"><input type="radio" name="publishing_frequency" value="Occasionally"><span>Occasionally</span></label>
                        </div>
                    </div>
                </div>

                <div class="field" style="margin-top:1rem">
                    <label class="field-label">Content Responsibility</label>
                    <div class="check-group" style="grid-template-columns:1fr">
                        <label class="check-item"><input type="radio" name="content_responsibility" value="Client will provide content"><span>Client will provide content</span></label>
                        <label class="check-item"><input type="radio" name="content_responsibility" value="Agency will create content"><span>Agency will create content</span></label>
                        <label class="check-item"><input type="radio" name="content_responsibility" value="Combination of both"><span>Combination of both</span></label>
                    </div>
                </div>

                <div class="field-grid" style="margin-top:1.25rem">
                    <div class="field full">
                        <label class="field-label" for="content_topics">Key Content Topics</label>
                        <textarea id="content_topics" name="content_topics" placeholder="Topics you'd like to cover in your content"></textarea>
                    </div>
                    <div class="field full">
                        <label class="field-label" for="case_studies">Case Studies Available?</label>
                        <textarea id="case_studies" name="case_studies" placeholder="Describe any existing case studies or portfolio pieces"></textarea>
                    </div>
                </div>
            </section>

            <!-- 5. Branding & Design -->
            <section id="section-5" class="section-card">
                <div class="section-header">
                    <span class="section-num">5</span>
                    <div>
                        <h2>Branding &amp; Design</h2>
                        <p>Visual identity and design preferences</p>
                    </div>
                </div>

                <div class="field">
                    <label class="field-label">Available Assets <span class="hint">Select all that apply</span></label>
                    <div class="check-group">
                        <label class="check-item"><input type="checkbox" name="brand_assets[]" value="Brand Guidelines"><span>Brand Guidelines</span></label>
                        <label class="check-item"><input type="checkbox" name="brand_assets[]" value="Logo"><span>Logo</span></label>
                        <label class="check-item"><input type="checkbox" name="brand_assets[]" value="Brand Colors"><span>Brand Colors</span></label>
                        <label class="check-item"><input type="checkbox" name="brand_assets[]" value="Typography / Fonts"><span>Typography / Fonts</span></label>
                        <label class="check-item"><input type="checkbox" name="brand_assets[]" value="Images / Videos"><span>Images / Videos</span></label>
                        <label class="check-item"><input type="checkbox" name="brand_assets[]" value="None (Need complete branding support)"><span>None — need complete branding support</span></label>
                    </div>
                </div>

                <div class="field" style="margin-top:1.25rem">
                    <label class="field-label">Preferred Design Style <span class="hint">Select all that apply</span></label>
                    <div class="check-group">
                        <label class="check-item"><input type="checkbox" name="design_style[]" value="Minimal & Clean"><span>Minimal &amp; Clean</span></label>
                        <label class="check-item"><input type="checkbox" name="design_style[]" value="Corporate / Professional"><span>Corporate / Professional</span></label>
                        <label class="check-item"><input type="checkbox" name="design_style[]" value="Modern & Bold"><span>Modern &amp; Bold</span></label>
                        <label class="check-item"><input type="checkbox" name="design_style[]" value="Creative / Visual-heavy"><span>Creative / Visual-heavy</span></label>
                        <label class="check-item"><input type="checkbox" name="design_style[]" value="Similar to competitor/reference"><span>Similar to competitor/reference</span></label>
                        <label class="check-item"><input type="checkbox" name="design_style[]" value="Not sure (Need suggestions)"><span>Not sure — need suggestions</span></label>
                    </div>
                    <div class="inline-other">
                        <input type="text" name="design_style_text" placeholder="Preferred design style (additional notes)">
                    </div>
                </div>

                <div class="field" style="margin-top:1.25rem">
                    <label class="field-label" for="design_references">Design References <span class="hint">URLs or descriptions of sites you admire</span></label>
                    <textarea id="design_references" name="design_references" placeholder="Share links or describe designs you like"></textarea>
                </div>
            </section>

            <!-- 6. SEO & Marketing -->
            <section id="section-6" class="section-card">
                <div class="section-header">
                    <span class="section-num">6</span>
                    <div>
                        <h2>SEO &amp; Marketing Requirements</h2>
                        <p>Search visibility and future marketing plans</p>
                    </div>
                </div>

                <div class="field">
                    <label class="field-label">SEO Requirement</label>
                    <div class="check-group" style="grid-template-columns:repeat(auto-fill, minmax(200px, 1fr))">
                        <label class="check-item"><input type="radio" name="seo_requirement" value="Yes (Basic SEO)"><span>Yes — Basic SEO</span></label>
                        <label class="check-item"><input type="radio" name="seo_requirement" value="Yes (Advanced SEO Strategy)"><span>Yes — Advanced SEO Strategy</span></label>
                        <label class="check-item"><input type="radio" name="seo_requirement" value="No"><span>No</span></label>
                        <label class="check-item"><input type="radio" name="seo_requirement" value="Not Sure"><span>Not Sure</span></label>
                    </div>
                </div>

                <div class="field" style="margin-top:1.25rem">
                    <label class="field-label">Paid Marketing <span class="hint">At a later date — select planned channels</span></label>
                    <div class="check-group">
                        <label class="check-item"><input type="checkbox" name="paid_marketing[]" value="Google Ads"><span>Google Ads</span></label>
                        <label class="check-item"><input type="checkbox" name="paid_marketing[]" value="Meta Ads (Facebook/Instagram)"><span>Meta Ads (Facebook/Instagram)</span></label>
                        <label class="check-item"><input type="checkbox" name="paid_marketing[]" value="LinkedIn Ads"><span>LinkedIn Ads</span></label>
                        <label class="check-item"><input type="checkbox" name="paid_marketing[]" value="No Paid Ads Currently"><span>No Paid Ads Currently</span></label>
                    </div>
                </div>

                <div class="field" style="margin-top:1.25rem">
                    <label class="field-label">Keyword Availability</label>
                    <div class="check-group" style="grid-template-columns:1fr">
                        <label class="check-item"><input type="radio" name="keyword_availability" value="We have target keywords"><span>We have target keywords</span></label>
                        <label class="check-item"><input type="radio" name="keyword_availability" value="Need keyword research"><span>Need keyword research</span></label>
                    </div>
                </div>
            </section>

            <!-- 7. Technical -->
            <section id="section-7" class="section-card">
                <div class="section-header">
                    <span class="section-num">7</span>
                    <div>
                        <h2>Technical Preferences</h2>
                        <p>CMS and technical requirements</p>
                    </div>
                </div>

                <div class="field">
                    <label class="field-label">CMS Requirement</label>
                    <div class="check-group" style="grid-template-columns:1fr">
                        <label class="check-item"><input type="radio" name="cms_requirement" value="Yes (Need to update content internally)"><span>Yes — need to update content internally</span></label>
                        <label class="check-item"><input type="radio" name="cms_requirement" value="No"><span>No</span></label>
                        <label class="check-item"><input type="radio" name="cms_requirement" value="Not Sure"><span>Not Sure</span></label>
                    </div>
                </div>

                <div class="field" style="margin-top:1.25rem">
                    <label class="field-label" for="technical_requirements">Specific Technical Requirements</label>
                    <textarea id="technical_requirements" name="technical_requirements" placeholder="Integrations, languages, accessibility, etc."></textarea>
                </div>
            </section>

            <!-- 8. Timeline -->
            <section id="section-8" class="section-card">
                <div class="section-header">
                    <span class="section-num">8</span>
                    <div>
                        <h2>Timeline</h2>
                        <p>When do you need to go live?</p>
                    </div>
                </div>
                <div class="field">
                    <label class="field-label" for="launch_date">Target Launch Date</label>
                    <input type="text" id="launch_date" name="launch_date" placeholder="e.g. Q3 2026, 15 August 2026">
                </div>
            </section>

            <!-- 9. Launch & Deployment -->
            <section id="section-9" class="section-card">
                <div class="section-header">
                    <span class="section-num">9</span>
                    <div>
                        <h2>Website Launch &amp; Deployment</h2>
                        <p>Domain and hosting preferences</p>
                    </div>
                </div>

                <div class="field">
                    <label class="field-label">Do you already have a domain?</label>
                    <div class="check-group" style="grid-template-columns:1fr 1fr">
                        <label class="check-item"><input type="radio" name="domain_available" value="Yes" data-toggle-domain><span>Yes</span></label>
                        <label class="check-item"><input type="radio" name="domain_available" value="No"><span>No</span></label>
                    </div>
                    <div class="conditional" id="domainNameWrap" hidden>
                        <label class="field-label" for="domain_name">Your domain name</label>
                        <input type="text" id="domain_name" name="domain_name" placeholder="e.g. yourcompany.com">
                    </div>
                </div>

                <div class="field" style="margin-top:1.25rem">
                    <label class="field-label">Where would you like your website hosted?</label>
                    <div class="check-group" style="grid-template-columns:1fr">
                        <label class="check-item"><input type="radio" name="hosting_preference" value="I already have hosting" data-toggle-hosting><span>I already have hosting</span></label>
                        <label class="check-item"><input type="radio" name="hosting_preference" value="I want your team to recommend & set it up"><span>I want your team to recommend &amp; set it up</span></label>
                        <label class="check-item"><input type="radio" name="hosting_preference" value="Not sure"><span>Not sure</span></label>
                    </div>
                    <div class="conditional" id="hostingProviderWrap" hidden>
                        <label class="field-label" style="margin-top:1rem">Hosting provider (if known)</label>
                        <div class="check-group">
                            <label class="check-item"><input type="checkbox" name="hosting_provider[]" value="AWS"><span>AWS</span></label>
                            <label class="check-item"><input type="checkbox" name="hosting_provider[]" value="GoDaddy"><span>GoDaddy</span></label>
                            <label class="check-item"><input type="checkbox" name="hosting_provider[]" value="Hostinger"><span>Hostinger</span></label>
                            <label class="check-item"><input type="checkbox" name="hosting_provider[]" value="Not sure"><span>Not sure</span></label>
                        </div>
                        <div class="inline-other">
                            <input type="text" name="hosting_provider_other" placeholder="Other hosting provider">
                        </div>
                    </div>
                </div>
            </section>

            <!-- 10. Additional Notes -->
            <section id="section-10" class="section-card">
                <div class="section-header">
                    <span class="section-num">10</span>
                    <div>
                        <h2>Additional Notes</h2>
                        <p>Anything else we should know</p>
                    </div>
                </div>
                <div class="field">
                    <label class="field-label" for="additional_notes">Any Additional Requirements</label>
                    <textarea id="additional_notes" name="additional_notes" rows="5" placeholder="Share any other requirements, constraints, or ideas"></textarea>
                </div>
            </section>

        </div>
        </div>

        <div class="form-step-nav">
            <button type="button" class="btn-step-nav" id="btnPrev" disabled aria-label="Previous section">← Previous</button>
            <button type="button" class="btn-step-nav btn-next" id="btnNext" aria-label="Next section">Next →</button>
        </div>

        <footer class="form-footer">
            <div class="form-footer-text">
                <p>Your information is saved securely to our requirements database.</p>
                <p class="error-toast" id="formError"></p>
            </div>
            <div class="form-footer-actions">
                <button type="submit" class="btn-submit" id="submitBtn">Submit Requirements</button>
            </div>
        </footer>
    </form>
    </div>
</div>

<div class="modal-overlay" id="successModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal-box">
        <div class="modal-icon">✓</div>
        <h3 id="modalTitle">Submission Received</h3>
        <p id="modalMessage">Thank you! Your website requirements have been submitted successfully.</p>
        <button type="button" class="btn-modal" id="modalClose">Close</button>
    </div>
</div>

<script>
(function () {
    const form = document.getElementById('websiteForm');
    const submitBtn = document.getElementById('submitBtn');
    const modal = document.getElementById('successModal');
    const modalMessage = document.getElementById('modalMessage');
    const formError = document.getElementById('formError');
    const saveUrl = '<?= site_url('home/save_form') ?>';

    document.querySelectorAll('[data-toggle-domain]').forEach(function (el) {
        el.addEventListener('change', function () {
            document.getElementById('domainNameWrap').hidden = !this.checked;
        });
    });

    document.querySelectorAll('[name="domain_available"]').forEach(function (el) {
        el.addEventListener('change', function () {
            document.getElementById('domainNameWrap').hidden = this.value !== 'Yes';
        });
    });

    document.querySelectorAll('[name="hosting_preference"]').forEach(function (el) {
        el.addEventListener('change', function () {
            document.getElementById('hostingProviderWrap').hidden = this.value !== 'I already have hosting';
        });
    });

    var track = document.getElementById('formTrack');
    var stepBtns = document.querySelectorAll('.step-btn');
    var sections = document.querySelectorAll('.section-card');
    var btnPrev = document.getElementById('btnPrev');
    var btnNext = document.getElementById('btnNext');
    var stepCurrentLabel = document.getElementById('stepCurrentLabel');
    var stepCounter = document.getElementById('stepCounter');
    var progressFill = document.getElementById('progressFill');
    var totalSteps = sections.length;
    var currentStep = 0;

    var stepTitles = [];
    stepBtns.forEach(function (btn) {
        stepTitles.push(btn.getAttribute('data-title') || ('Step ' + btn.getAttribute('data-step')));
    });

    function getStepWidth() {
        return track ? track.clientWidth : 0;
    }

    function scrollToStep(index) {
        if (index < 0 || index >= totalSteps) return;
        currentStep = index;
        if (track) {
            var stepW = getStepWidth();
            track.scrollTo({ left: stepW * index, behavior: 'smooth' });
        }
        updateUI();
    }

    function updateUI() {
        stepBtns.forEach(function (btn, i) {
            btn.classList.toggle('active', i === currentStep);
            btn.classList.toggle('done', i < currentStep);
        });

        if (stepCurrentLabel) {
            stepCurrentLabel.innerHTML = '<span>' + (stepTitles[currentStep] || '') + '</span>';
        }
        if (stepCounter) {
            stepCounter.textContent = (currentStep + 1) + ' / ' + totalSteps;
        }
        if (progressFill) {
            progressFill.style.width = (((currentStep + 1) / totalSteps) * 100) + '%';
        }
        if (btnPrev) btnPrev.disabled = currentStep === 0;
        if (btnNext) {
            btnNext.textContent = currentStep === totalSteps - 1 ? 'Review ✓' : 'Next →';
        }

        var activeBtn = stepBtns[currentStep];
        if (activeBtn && activeBtn.scrollIntoView) {
            activeBtn.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        }
    }

    function syncStepFromScroll() {
        if (!track || !sections.length) return;
        var stepW = getStepWidth();
        if (stepW <= 0) return;
        var index = Math.round(track.scrollLeft / stepW);
        index = Math.max(0, Math.min(totalSteps - 1, index));
        if (index !== currentStep) {
            currentStep = index;
            updateUI();
        }
    }

    stepBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            scrollToStep(parseInt(btn.getAttribute('data-step'), 10));
        });
    });

    if (btnPrev) {
        btnPrev.addEventListener('click', function () {
            scrollToStep(currentStep - 1);
        });
    }

    if (btnNext) {
        btnNext.addEventListener('click', function () {
            if (currentStep < totalSteps - 1) {
                scrollToStep(currentStep + 1);
            } else {
                document.getElementById('submitBtn').focus();
                document.querySelector('.form-footer').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        });
    }

    if (track) {
        track.addEventListener('scroll', syncStepFromScroll, { passive: true });
        updateUI();
        requestAnimationFrame(function () {
            track.scrollLeft = 0;
            scrollToStep(0);
        });
    }

    window.addEventListener('resize', function () {
        if (track) {
            track.scrollLeft = getStepWidth() * currentStep;
        }
        updateUI();
    });

    function clearFieldError(field) {
        if (field) field.classList.remove('has-error');
    }

    function setFieldError(name) {
        var field = form.querySelector('[data-validate="' + name + '"]');
        if (field) field.classList.add('has-error');
        return field;
    }

    function validateForm() {
        var valid = true;
        var firstInvalid = null;

        form.querySelectorAll('[data-validate]').forEach(function (el) {
            el.classList.remove('has-error');
        });

        if (!form.company_name.value.trim()) {
            setFieldError('company_name');
            firstInvalid = firstInvalid || form.querySelector('[data-validate="company_name"]');
            valid = false;
        }

        if (!form.customer_segment.value.trim()) {
            setFieldError('customer_segment');
            firstInvalid = firstInvalid || form.querySelector('[data-validate="customer_segment"]');
            valid = false;
        }

        var goalsChecked = form.querySelectorAll('input[name="primary_goals[]"]:checked').length;
        var goalsOther = (document.getElementById('primary_goals_other') || {}).value || '';
        if (goalsChecked === 0 && !goalsOther.trim()) {
            setFieldError('primary_goals');
            firstInvalid = firstInvalid || form.querySelector('[data-validate="primary_goals"]');
            valid = false;
        }

        if (!valid && firstInvalid) {
            var section = firstInvalid.closest('.section-card');
            if (section && section.id) {
                var idx = parseInt(section.id.replace('section-', ''), 10);
                if (!isNaN(idx)) scrollToStep(idx);
            }
            formError.textContent = 'Please fill in all required fields marked in red.';
            formError.classList.add('show');
        } else {
            formError.classList.remove('show');
        }

        return valid;
    }

    form.querySelectorAll('#company_name, #customer_segment, #primary_goals_other').forEach(function (el) {
        el.addEventListener('input', function () {
            clearFieldError(el.closest('[data-validate]'));
        });
    });

    form.querySelectorAll('input[name="primary_goals[]"]').forEach(function (el) {
        el.addEventListener('change', function () {
            clearFieldError(form.querySelector('[data-validate="primary_goals"]'));
        });
    });

    document.getElementById('modalClose').addEventListener('click', function () {
        modal.classList.remove('show');
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        formError.classList.remove('show');

        if (!validateForm()) {
            return;
        }

        submitBtn.disabled = true;
        submitBtn.textContent = 'Submitting…';

        fetch(saveUrl, {
            method: 'POST',
            body: new FormData(form),
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
            .then(function (res) {
                if (!res.ok) {
                    throw new Error('Server returned ' + res.status);
                }
                return res.json();
            })
            .then(function (data) {
                if (data.status) {
                    modalMessage.textContent = data.message;
                    modal.classList.add('show');
                    form.reset();
                    document.getElementById('domainNameWrap').hidden = true;
                    document.getElementById('hostingProviderWrap').hidden = true;
                } else {
                    formError.textContent = data.message || data.error || 'Submission failed. Please try again.';
                    formError.classList.add('show');
                }
            })
            .catch(function (err) {
                formError.textContent = 'Could not submit the form. Please refresh the page and try again.';
                formError.classList.add('show');
                console.error('Form submit error:', err);
            })
            .finally(function () {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit Requirements';
            });
    });
})();
</script>

</body>
</html>
