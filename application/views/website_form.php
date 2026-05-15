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

        html { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background: var(--color-bg);
            color: var(--color-text-primary);
            line-height: 1.6;
            min-height: 100vh;
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1.25rem 4rem;
        }

        /* Header */
        .hero {
            text-align: center;
            padding: 2.5rem 1rem 3rem;
            margin-bottom: 2rem;
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

        /* Layout */
        .form-layout {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 2rem;
            align-items: start;
        }

        @media (max-width: 900px) {
            .form-layout { grid-template-columns: 1fr; }
            .form-nav { display: none; }
        }

        /* Sidebar nav */
        .form-nav {
            position: sticky;
            top: 1.5rem;
            background: var(--color-bg-card);
            backdrop-filter: blur(12px);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            padding: 1.25rem;
        }

        .form-nav h3 {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--color-text-muted);
            margin-bottom: 1rem;
        }

        .form-nav a {
            display: block;
            padding: 0.45rem 0.75rem;
            font-size: 0.8rem;
            color: var(--color-text-secondary);
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.2s, color 0.2s;
            border-left: 2px solid transparent;
            margin-bottom: 2px;
        }

        .form-nav a:hover,
        .form-nav a.active {
            background: var(--color-surface-glass);
            color: var(--color-text-primary);
            border-left-color: var(--color-brand-alt);
        }

        /* Sections */
        .form-main { display: flex; flex-direction: column; gap: 1.75rem; }

        .section-card {
            background: var(--color-bg-card);
            backdrop-filter: blur(12px);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            padding: 2rem;
            scroll-margin-top: 1.5rem;
        }

        .section-header {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.75rem;
            padding-bottom: 1.25rem;
            border-bottom: 1px solid var(--color-border-neutral);
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

        .field { margin-bottom: 1.25rem; }
        .field:last-child { margin-bottom: 0; }
        .field.full { grid-column: 1 / -1; }

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

        /* Submit */
        .submit-bar {
            position: sticky;
            bottom: 0;
            margin-top: 0.5rem;
            padding: 1.25rem 2rem;
            background: rgba(10, 10, 12, 0.92);
            backdrop-filter: blur(16px);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .submit-bar p {
            font-size: 0.85rem;
            color: var(--color-text-muted);
        }

        .btn-submit {
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
        <div class="hero-badge">PrimaVerse · Website Discovery · v1.0</div>
        <h1>Website Discovery &amp; Requirements</h1>
        <p>Help us understand your business, goals, and vision so we can design a website tailored to your needs.</p>
        <p class="hero-meta">Estimated time: 10–15 minutes · All fields optional unless marked *</p>
    </header>

    <div class="form-layout">
        <nav class="form-nav" aria-label="Form sections">
            <h3>Sections</h3>
            <a href="#section-0">Overview</a>
            <a href="#section-1">Audience</a>
            <a href="#section-2">Goals</a>
            <a href="#section-3">Structure</a>
            <a href="#section-4">Content</a>
            <a href="#section-5">Design</a>
            <a href="#section-6">SEO &amp; Marketing</a>
            <a href="#section-7">Technical</a>
            <a href="#section-8">Timeline</a>
            <a href="#section-9">Launch</a>
            <a href="#section-10">Notes</a>
        </nav>

        <form id="websiteForm" class="form-main" novalidate>

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
                    <div class="field full">
                        <label class="field-label" for="company_name">Company Name *</label>
                        <input type="text" id="company_name" name="company_name" required placeholder="Your company name">
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
                    <div class="field">
                        <label class="field-label" for="customer_segment">Primary Customer Segment</label>
                        <input type="text" id="customer_segment" name="customer_segment" placeholder="e.g. B2B SMEs, retail consumers">
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

                <div class="field">
                    <label class="field-label">Primary Goals <span class="hint">Select all that apply</span></label>
                    <div class="check-group">
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Generate Leads"><span>Generate Leads</span></label>
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Increase Brand Awareness"><span>Increase Brand Awareness</span></label>
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Showcase Services / Portfolio"><span>Showcase Services / Portfolio</span></label>
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Sell Products Online (E-commerce)"><span>Sell Products Online (E-commerce)</span></label>
                        <label class="check-item"><input type="checkbox" name="primary_goals[]" value="Build Trust & Credibility"><span>Build Trust &amp; Credibility</span></label>
                    </div>
                    <div class="inline-other">
                        <input type="text" name="primary_goals_other" placeholder="Other goal (please specify)">
                    </div>
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

            <div class="submit-bar">
                <div>
                    <p>Your information is saved securely to our requirements database.</p>
                    <p class="error-toast" id="formError"></p>
                </div>
                <button type="submit" class="btn-submit" id="submitBtn">Submit Requirements</button>
            </div>
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

    var navLinks = document.querySelectorAll('.form-nav a');
    var sections = document.querySelectorAll('.section-card');
    window.addEventListener('scroll', function () {
        var current = '';
        sections.forEach(function (section) {
            if (window.scrollY >= section.offsetTop - 120) {
                current = section.getAttribute('id');
            }
        });
        navLinks.forEach(function (link) {
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    });

    document.getElementById('modalClose').addEventListener('click', function () {
        modal.classList.remove('show');
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        formError.classList.remove('show');

        if (!form.company_name.value.trim()) {
            formError.textContent = 'Please enter your company name.';
            formError.classList.add('show');
            document.getElementById('section-0').scrollIntoView({ behavior: 'smooth' });
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
