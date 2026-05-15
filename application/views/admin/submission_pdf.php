<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Requirements — <?= htmlspecialchars($submission->company_name ?: 'Submission #' . $submission->id, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 11pt;
            color: #1a1a1a;
            line-height: 1.45;
            padding: 24px 32px;
            max-width: 900px;
            margin: 0 auto;
        }
        .pdf-header {
            border-bottom: 3px solid #7C3446;
            padding-bottom: 16px;
            margin-bottom: 24px;
        }
        .pdf-header h1 { font-size: 20pt; color: #7C3446; margin-bottom: 4px; }
        .pdf-header .sub { font-size: 10pt; color: #666; }
        .pdf-meta { font-size: 9pt; color: #888; margin-bottom: 20px; }
        .report-section { margin-bottom: 18px; page-break-inside: avoid; }
        .report-section h3 {
            font-size: 11pt;
            color: #7C3446;
            border-bottom: 1px solid #ddd;
            padding-bottom: 4px;
            margin-bottom: 8px;
        }
        .report-table { width: 100%; border-collapse: collapse; }
        .report-table th {
            width: 32%;
            text-align: left;
            vertical-align: top;
            padding: 4px 12px 4px 0;
            font-weight: 600;
            color: #444;
            font-size: 9.5pt;
        }
        .report-table td { padding: 4px 0; font-size: 10pt; }
        .pdf-list { margin: 0; padding-left: 18px; }
        .pdf-list li { margin-bottom: 2px; }
        .muted { color: #999; font-style: italic; }
        .no-print {
            position: fixed;
            top: 12px;
            right: 12px;
            z-index: 100;
        }
        .no-print button {
            padding: 10px 20px;
            background: #7C3446;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            font-weight: 600;
        }
        .no-print button:hover { background: #9a3d55; }
        @media print {
            body { padding: 0; }
            .no-print { display: none !important; }
            .report-section { page-break-inside: avoid; }
        }
    </style>
</head>
<body>
    <div class="no-print">
        <button type="button" onclick="window.print()">Save as PDF / Print</button>
    </div>

    <header class="pdf-header">
        <h1>Website Discovery &amp; Requirements</h1>
        <p class="sub">PrimaVerse · Client Questionnaire Response</p>
    </header>

    <p class="pdf-meta">
        <strong>Submission #<?= (int) $submission->id ?></strong>
        · <?= htmlspecialchars($submission->company_name ?: 'Unnamed company', ENT_QUOTES, 'UTF-8') ?>
        · <?= htmlspecialchars(date('d F Y, H:i', strtotime($submission->created_at)), ENT_QUOTES, 'UTF-8') ?>
    </p>

    <?php
    $requirements_model = $this->Requirements_model;
    $this->load->view('admin/_submission_content', array(
        'submission' => $submission,
        'requirements_model' => $requirements_model,
    ));
    ?>

    <?php if (!empty($auto_print)): ?>
    <script>window.onload = function () { window.print(); };</script>
    <?php endif; ?>
</body>
</html>
