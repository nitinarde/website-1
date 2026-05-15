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
        <h1><span class="brand">PrimaVerse</span> · Submissions</h1>
        <nav class="admin-nav">
            <span class="user"><?= htmlspecialchars($this->session->userdata('admin_username'), ENT_QUOTES, 'UTF-8') ?></span>
            <a href="<?= site_url('logout') ?>">Logout</a>
        </nav>
    </header>

    <main class="admin-main">
        <div class="card">
            <?php if (empty($submissions)): ?>
                <p class="empty">No form submissions yet.</p>
            <?php else: ?>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Company</th>
                            <th>Submitted</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($submissions as $row): ?>
                        <tr>
                            <td><?= (int) $row->id ?></td>
                            <td><?= htmlspecialchars($row->company_name ?: '—', ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars(date('d M Y, H:i', strtotime($row->created_at)), ENT_QUOTES, 'UTF-8') ?></td>
                            <td>
                                <a class="btn-sm btn-view" href="<?= site_url('admin/view/' . $row->id) ?>">View</a>
                                <a class="btn-sm btn-pdf" href="<?= site_url('admin/pdf/' . $row->id) ?>?print=1" target="_blank">PDF</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>
