<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('website_form');
    }

    public function save_form()
    {
        $this->load->model('Home_model');

        $companyName = trim((string) $this->input->post('company_name'));
        $customerSegment = trim((string) $this->input->post('customer_segment'));
        $primaryGoals = $this->_collect_checkboxes('primary_goals');
        $primaryOther = trim((string) $this->input->post('primary_goals_other'));

        if ($companyName === '' || $customerSegment === '' || (empty($primaryGoals) && $primaryOther === '')) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(
                    'status'  => false,
                    'message' => 'Please fill in all required fields: Company Name, Primary Customer Segment, and Primary Goals.',
                )));
            return;
        }

        if ($primaryOther !== '') {
            $primaryGoals[] = 'Other: ' . $primaryOther;
        }

        $desiredActions = $this->_collect_checkboxes('desired_actions');
        $desiredOther = trim((string) $this->input->post('desired_actions_other'));
        if ($desiredOther !== '') {
            $desiredActions[] = 'Other: ' . $desiredOther;
        }

        $pagesRequired = $this->_collect_checkboxes('pages_required');
        $pagesOther = trim((string) $this->input->post('pages_required_other'));
        if ($pagesOther !== '') {
            $pagesRequired[] = 'Other: ' . $pagesOther;
        }

        $designStyle = $this->_collect_checkboxes('design_style');
        $designStyleText = trim((string) $this->input->post('design_style_text'));
        if ($designStyleText !== '') {
            $designStyle[] = $designStyleText;
        }

        $brandAssets = $this->_collect_checkboxes('brand_assets');
        $designReferences = trim((string) $this->input->post('design_references'));
        $designRefParts = array();
        if (!empty($brandAssets)) {
            $designRefParts[] = 'Available Assets: ' . implode(', ', $brandAssets);
        }
        if ($designReferences !== '') {
            $designRefParts[] = 'References: ' . $designReferences;
        }

        $domainAvailable = $this->input->post('domain_available');
        $domainName = trim((string) $this->input->post('domain_name'));
        if ($domainAvailable === 'Yes' && $domainName !== '') {
            $domainAvailable = 'Yes — ' . $domainName;
        }

        $hostingPreference = (string) $this->input->post('hosting_preference');
        $hostingProvider = $this->_collect_checkboxes('hosting_provider');
        $hostingOther = trim((string) $this->input->post('hosting_provider_other'));
        if (!empty($hostingProvider)) {
            $hostingPreference .= ($hostingPreference !== '' ? ' | ' : '') . 'Provider: ' . implode(', ', $hostingProvider);
        }
        if ($hostingOther !== '') {
            $hostingPreference .= ($hostingPreference !== '' ? ' | ' : '') . 'Other: ' . $hostingOther;
        }

        $seoRequirement = (string) $this->input->post('seo_requirement');
        $paidMarketing = $this->_collect_checkboxes('paid_marketing');
        if (!empty($paidMarketing)) {
            $seoRequirement .= ($seoRequirement !== '' ? ' | ' : '') . 'Paid Marketing: ' . implode(', ', $paidMarketing);
        }
        $keywordAvailability = $this->input->post('keyword_availability');
        if ($keywordAvailability) {
            $seoRequirement .= ($seoRequirement !== '' ? ' | ' : '') . 'Keywords: ' . $keywordAvailability;
        }

        $additionalNotes = array();
        $technicalReq = trim((string) $this->input->post('technical_requirements'));
        if ($technicalReq !== '') {
            $additionalNotes[] = 'Technical Requirements: ' . $technicalReq;
        }
        $extraNotes = trim((string) $this->input->post('additional_notes'));
        if ($extraNotes !== '') {
            $additionalNotes[] = $extraNotes;
        }

        $data = array(
            'company_name'           => $companyName,
            'business_description'   => $this->input->post('business_description'),
            'existing_website'       => $this->input->post('existing_website'),
            'usp'                    => $this->input->post('usp'),
            'services'               => $this->input->post('services'),
            'customer_segment'       => $customerSegment,
            'geographic_targeting'   => $this->input->post('geographic_targeting'),
            'primary_goals'          => !empty($primaryGoals) ? json_encode($primaryGoals) : null,
            'desired_actions'        => !empty($desiredActions) ? json_encode($desiredActions) : null,
            'pages_required'         => !empty($pagesRequired) ? json_encode($pagesRequired) : null,
            'blog_requirement'       => $this->input->post('blog_requirement'),
            'publishing_frequency'   => $this->input->post('publishing_frequency'),
            'content_responsibility' => $this->input->post('content_responsibility'),
            'content_topics'         => $this->input->post('content_topics'),
            'case_studies'           => $this->input->post('case_studies'),
            'design_style'           => !empty($designStyle) ? implode(', ', $designStyle) : null,
            'design_references'      => !empty($designRefParts) ? implode("\n", $designRefParts) : null,
            'seo_requirement'        => $seoRequirement,
            'cms_requirement'        => $this->input->post('cms_requirement'),
            'launch_date'            => $this->input->post('launch_date'),
            'domain_available'       => $domainAvailable,
            'hosting_preference'     => $hostingPreference,
            'additional_notes'       => !empty($additionalNotes) ? implode("\n\n", $additionalNotes) : null,
        );

        $saved = $this->Home_model->saveData($data);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($saved ? array(
                'status'  => true,
                'message' => 'Thank you! Your website requirements have been submitted successfully.',
            ) : array(
                'status'  => false,
                'message' => 'Unable to save your submission. Please try again.',
                'error'   => $this->db->error()['message'],
            )));
    }

    private function _collect_checkboxes($field)
    {
        $values = $this->input->post($field);
        if (!is_array($values)) {
            return array();
        }
        return array_values(array_filter(array_map('trim', $values)));
    }
}
