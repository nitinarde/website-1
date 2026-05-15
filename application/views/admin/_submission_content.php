<?php defined('BASEPATH') OR exit('No direct script access allowed');
$model = isset($requirements_model) ? $requirements_model : null;
$decode = function ($val) use ($model) {
    if ($model) {
        return $model->decode_json_field($val);
    }
    $d = json_decode($val, true);
    return is_array($d) ? $d : (empty($val) ? array() : array($val));
};
$fmt = function ($val) {
    return $val !== null && $val !== '' ? nl2br(htmlspecialchars($val, ENT_QUOTES, 'UTF-8')) : '<em class="muted">—</em>';
};
$list = function ($items) {
    if (empty($items)) {
        return '<em class="muted">—</em>';
    }
  $out = '<ul class="pdf-list">';
    foreach ($items as $item) {
        $out .= '<li>' . htmlspecialchars($item, ENT_QUOTES, 'UTF-8') . '</li>';
    }
    return $out . '</ul>';
};
?>
<div class="report-section">
    <h3>0. Quick Overview</h3>
    <table class="report-table">
        <tr><th>Company Name</th><td><?= $fmt($submission->company_name) ?></td></tr>
        <tr><th>Business Description</th><td><?= $fmt($submission->business_description) ?></td></tr>
        <tr><th>Existing Website</th><td><?= $fmt($submission->existing_website) ?></td></tr>
        <tr><th>USP</th><td><?= $fmt($submission->usp) ?></td></tr>
        <tr><th>Services / Products</th><td><?= $fmt($submission->services) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>1. Business &amp; Target Audience</h3>
    <table class="report-table">
        <tr><th>Customer Segment</th><td><?= $fmt($submission->customer_segment) ?></td></tr>
        <tr><th>Geographic Targeting</th><td><?= $fmt($submission->geographic_targeting) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>2. Website Goals &amp; Objectives</h3>
    <table class="report-table">
        <tr><th>Primary Goals</th><td><?= $list($decode($submission->primary_goals)) ?></td></tr>
        <tr><th>Desired User Actions</th><td><?= $list($decode($submission->desired_actions)) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>3. Website Structure</h3>
    <table class="report-table">
        <tr><th>Pages Required</th><td><?= $list($decode($submission->pages_required)) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>4. Content &amp; Blog Strategy</h3>
    <table class="report-table">
        <tr><th>Blog Requirement</th><td><?= $fmt($submission->blog_requirement) ?></td></tr>
        <tr><th>Publishing Frequency</th><td><?= $fmt($submission->publishing_frequency) ?></td></tr>
        <tr><th>Content Responsibility</th><td><?= $fmt($submission->content_responsibility) ?></td></tr>
        <tr><th>Content Topics</th><td><?= $fmt($submission->content_topics) ?></td></tr>
        <tr><th>Case Studies</th><td><?= $fmt($submission->case_studies) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>5. Branding &amp; Design</h3>
    <table class="report-table">
        <tr><th>Design Style</th><td><?= $fmt($submission->design_style) ?></td></tr>
        <tr><th>Design References</th><td><?= $fmt($submission->design_references) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>6. SEO &amp; Marketing</h3>
    <table class="report-table">
        <tr><th>SEO Requirement</th><td><?= $fmt($submission->seo_requirement) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>7. Technical Preferences</h3>
    <table class="report-table">
        <tr><th>CMS Requirement</th><td><?= $fmt($submission->cms_requirement) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>8. Timeline</h3>
    <table class="report-table">
        <tr><th>Target Launch Date</th><td><?= $fmt($submission->launch_date) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>9. Launch &amp; Deployment</h3>
    <table class="report-table">
        <tr><th>Domain Available</th><td><?= $fmt($submission->domain_available) ?></td></tr>
        <tr><th>Hosting Preference</th><td><?= $fmt($submission->hosting_preference) ?></td></tr>
    </table>
</div>

<div class="report-section">
    <h3>10. Additional Notes</h3>
    <table class="report-table">
        <tr><th>Additional Requirements</th><td><?= $fmt($submission->additional_notes) ?></td></tr>
    </table>
</div>
