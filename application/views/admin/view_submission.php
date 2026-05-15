<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?> | Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php $this->load->view('admin/_styles'); ?>
</head>
<body>
    <header class="admin-header">
        <h1><span class="brand">PrimaVerse</span> · Submission Details</h1>
        <nav class="admin-nav">
            <a href="<?= site_url('admin') ?>">All Submissions</a>
            <a href="<?= site_url('logout') ?>">Logout</a>
        </nav>
    </header>

    <main class="admin-main">
        <a class="btn-back" href="<?= site_url('admin') ?>">← Back to list</a>

        <div class="meta-bar">
            <span><strong>ID:</strong> #<?= (int) $submission->id ?></span>
            <span><strong>Submitted:</strong> <?= htmlspecialchars(date('d M Y, H:i', strtotime($submission->created_at)), ENT_QUOTES, 'UTF-8') ?></span>
        </div>

        <div class="actions-top">
            <a class="btn-primary" href="<?= site_url('admin/pdf/' . $submission->id) ?>?print=1" target="_blank">Download PDF</a>
            <a class="btn-outline" href="<?= site_url('admin/pdf/' . $submission->id) ?>" target="_blank">Preview PDF</a>
        </div>

        <div class="card" style="padding: 1.5rem 2rem;">
            <?php
            $requirements_model = $this->Requirements_model;
            $this->load->view('admin/_submission_content', array(
                'submission' => $submission,
                'requirements_model' => $requirements_model,
            ));
            ?>
        </div>
    </main>
</body>
</html>
