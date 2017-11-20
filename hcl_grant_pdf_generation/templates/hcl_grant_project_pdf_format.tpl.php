<?php
/**
 * @file
 * Template for project pdf.
 */

$lang = $node->language;
?>
<!DOCTYPE html>
<html>
<head>
<title>HCL Citizen's Grant</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- CSS
        ================================================== -->
<!-- Bootstrap 3-->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
<!-- Template Styles -->
<!-- <link href="sites/all/themes/sub/hcl_grant/hcl_made_css_js/css/pdf.css" rel="stylesheet" media="screen"> -->
<!-- <link href="sites/all/themes/sub/hcl_grant/css/registration_form_ngo.css" rel="stylesheet" media="screen"> -->
</head>
<body>
<!-- Header
        ================================================== -->
<div class="top-header">
  <div class="container">
    <div class="row" style="display: inline-block; width: 100%;">
      <div class="" style="display: inline-block; width: 49%;"><a href="index.html"><img src="<?php print DRUPAL_ROOT; ?>/sites/all/themes/sub/hcl_grant/images/img/logo.jpg"></a></div>
      <div class="" style="text-align: right; display: inline-block; width: 49%;"><img src="<?php print DRUPAL_ROOT; ?>/sites/all/themes/sub/hcl_grant/images/img/hcl-logo.jpg"></div>
    </div>
  </div>
</div>
<!-- About
        ================================================== -->
<section class="application_format"><!--about-us-->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="Organization_background">
          <h1>Project proposal</h1>
          <div class="inner-section">
            <p>1. Brief Summary</p>
            <p>This section should provide the following details:</p>
            <table border="0" cellspacing="0" width="100%" class="tbl">
              <tr>
                <td width="27%">Project title</td>
                <td><?php print $node->title; ?></td>
              </tr>
              <tr>
                <td width="27%">Project Abstract</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_project_proj_abstract')) ? field_get_items('node', $node, 'field_ct_project_proj_abstract')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="27%">Thematic area </td>
                <td>
                <?php
                if (!empty(field_get_items('node', $node, 'field_ct_project_thematic_area'))) {
                  $choosen_theme = field_get_items('node', $node, 'field_ct_project_thematic_area')[0]['value'];
                  $relevant_themes = array(
                    'Education' => 'Education',
                    'Health' => 'Health',
                    'Environment' => 'Environment',
                  );
                  print $relevant_themes[$choosen_theme];
                }
                ?>
                </td>
              </tr>
              <tr>
                <td width="27%">Project location and geographic coverage</td>
                <td width="73%"><?php print !empty(field_get_items('node', $node, 'field_ct_project_proj_loc_geo')) ? field_get_items('node', $node, 'field_ct_project_proj_loc_geo')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="27%">Impact (qualitative and quantitative) </td>
                <td width="73%"><?php print !empty(field_get_items('node', $node, 'field_ct_project_impact')) ? field_get_items('node', $node, 'field_ct_project_impact')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="27%">Proposed beneficiary outreach </td>
                <td width="73%"><?php print !empty(field_get_items('node', $node, 'field_ct_project_prop_benefi_out')) ? field_get_items('node', $node, 'field_ct_project_prop_benefi_out')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="27%">Proposed starting date</td>
                <td width="73%"><?php print !empty(field_get_items('node', $node, 'field_ct_project_prop_start_date')) ? field_get_items('node', $node, 'field_ct_project_prop_start_date')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Project duration</td>
                <td><span>Months: </span><?php print !empty(field_get_items('node', $node, 'field_ct_project_proj_duration')) ? field_get_items('node', $node, 'field_ct_project_proj_duration')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Proposed Budget (<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> crores)</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_project_proposed_budget')) ? field_get_items('node', $node, 'field_ct_project_proposed_budget')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Amount requested from HCL (<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> crores)</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_project_amt_req_hcl')) ? field_get_items('node', $node, 'field_ct_project_amt_req_hcl')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Government inputs (<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> crores)</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_project_gov_inputs')) ? field_get_items('node', $node, 'field_ct_project_gov_inputs')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Other donor inputs (<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> crores)</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_project_oth_donor_input')) ? field_get_items('node', $node, 'field_ct_project_oth_donor_input')[0]['value'] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>2. Project Status</p>
            <?php
              if (!empty(field_get_items('node', $node, 'field_ct_project_proj_st'))) {
                $proj_status = field_get_items('node', $node, 'field_ct_project_proj_st')[0]['value'];
                $project_st_arr = array(
                  'fresh_project ' => 'Fresh project',
                  'scaling_up_ongoing_project ' => 'Scaling up ongoing project',
                  'replicating_model_to_another_geography ' => 'Replicating model to another geography',
                  'others ' => 'Others:',
                );
                print $project_st_arr[$proj_status];
              }
            ?>
            <br>
            <?php if ($proj_status == 'others '): ?>
              <?php print !empty(field_get_items('node', $node, 'field_ct_project_others_st')) ? field_get_items('node', $node, 'field_ct_project_others_st')[0]['value'] : ''; ?>
            <?php endif; ?>
            <br>
            <br>
            <p>3. Problem Statement</p>
            <p>This section should provide a brief description of the problem and its magnitude that the project aims to address. Why it is important to address the problem? Who is impacted the most? It should identify the bottlenecks and the key areas of focus required. The claim should be substantiated with relevant data and references collected during need assessment.</p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_project_brief_prob_st')) ? field_get_items('node', $node, 'field_ct_project_brief_prob_st')[0]['value'] : ''; ?></p>
            <br>
            <p>4. Proposed Strategy</p>
            <p>This section should provide the strategy or approach proposed to address the problem identified. It should identify how the proposed project is supplementing the efforts of the Government in the region. Duplication of efforts must be avoided and project must establish linkages with existing government schemes and leverage existing infrastructure.</p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_project_details_problem')) ? field_get_items('node', $node, 'field_ct_project_details_problem')[0]['value'] : ''; ?></p>
            <br>
            <p>5. Area Profile</p>
            <p>This section should provide a brief demographic profile of districts and villages where the proposed project will be implemented. The profile should directly relate the problem stated and relevant statistics.</p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_project_dt_ar_pr_int_ar')) ? field_get_items('node', $node, 'field_ct_project_dt_ar_pr_int_ar')[0]['value'] : ''; ?></p>
            <br>
            <p>6.  Logical Framework Analysis</p>
            <p>This section should highlight the objectives of the project and the detailed implementation plan designed in a Logical Framework Analysis (LFA). The LFA should summarise the following details:</p>
            <ul>
              <li>What is the project going to achieve?</li>
              <li>What activities will be carried out to fulfill its purpose and achieve its output?</li>
              <li>What resources (inputs) are required?</li>
              <li>What are the potential problems that could affect the success of the project?</li>
              <li>How would the progress and ultimate success of the project be measured and verified?</li>
            </ul>
            The objectives of the project should be quantifiable and designed as per SMART (Specific, Measurable, Achievable, Result Oriented and Time Bound) parameters. </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Logical Framework Analysis (LFA):</h2>
            <table border="0" cellspacing="0" width="100%" class="tbl">
              <tr>
                <th width="12%" valign="top">&nbsp;</th>
                <th width="22%" valign="top">Project description (Objective hierarchy) </th>
                <th width="22%" valign="top">Performance indicators</th>
                <th width="22%" valign="top">Monitoring mechanisms / Means of verification</th>
                <th width="22%" valign="top">Assumptions (external factors)</th>
              </tr>
              <tr>
                <td width="12%" valign="top">Overall objective / Goal</td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_overall_obj')) ? field_get_items('node', $node, 'field_ct_proj_overall_obj')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_indi_linked_to_obj')) ? field_get_items('node', $node, 'field_ct_proj_indi_linked_to_obj')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_info_src_indi')) ? field_get_items('node', $node, 'field_ct_proj_info_src_indi')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_ext_fact_obj')) ? field_get_items('node', $node, 'field_ct_proj_ext_fact_obj')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="12%" valign="top">Project purpose</td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_imm_impact')) ? field_get_items('node', $node, 'field_ct_proj_imm_impact')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_indi_ext_achi')) ? field_get_items('node', $node, 'field_ct_proj_indi_ext_achi')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_info_src_purpose')) ? field_get_items('node', $node, 'field_ct_proj_info_src_purpose')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_fact_cond_not_cont')) ? field_get_items('node', $node, 'field_ct_proj_fact_cond_not_cont')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="12%" valign="top">Results</td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_conc_visible_res')) ? field_get_items('node', $node, 'field_ct_proj_conc_visible_res')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_indi_exp_res')) ? field_get_items('node', $node, 'field_ct_proj_indi_exp_res')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_info_src_res')) ? field_get_items('node', $node, 'field_ct_proj_info_src_res')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_fact_cond_cont_res')) ? field_get_items('node', $node, 'field_ct_proj_fact_cond_cont_res')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="12%" valign="top">Activities</td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_acti_req')) ? field_get_items('node', $node, 'field_ct_proj_acti_req')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_reso_inp_req')) ? field_get_items('node', $node, 'field_ct_proj_reso_inp_req')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_des_each_cost')) ? field_get_items('node', $node, 'field_ct_proj_des_each_cost')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_proj_fact_cond_cont_act')) ? field_get_items('node', $node, 'field_ct_proj_fact_cond_cont_act')[0]['value'] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>7.  Result Framework</p>
            <p>This section should provide an overview of the outputs and outcomes anticipated by the proposed activities. It should clearly identify how the aforementioned outputs and outcomes would support the attainment of the project objectives and how the project will be evaluated at the end.</p>
            <p>The outcome indicators should be quantifiable and designed using the SMART (Specific, Measurable, Achievable, Result Oriented and Time Bound) parameters. It is advisable that the Result Framework be developed vis-à-vis the Theory of Change. Baseline data for each of the outcome indicators must be given in the proposal.</p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_project_result_overview')) ? field_get_items('node', $node, 'field_ct_project_result_overview')[0]['value'] : ''; ?></p>
            <br>
            <p>8. Team Members</p>
            <p>This section should provide the details on staffing for the implementation of the project. Names, designation, roles and responsibilities, and the members’ key area of specialization should be clearly presented. It should be indicated whether the member is a permanent staff of the organization or an external consultant.</p>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl" id="myTable5">
              <tr>
                <th width="5%">S. no.</th>
                <th width="20%">Name</th>
                <th width="20%">Designation</th>
                <th width="20%">Roles and Responsibilities</th>
                <th width="20%">Specialization</th>
                <th width="15%">Status</th>
              </tr>
              <?php
                $team_fields = field_get_items('node', $node, 'field_ct_project_core_team');
                if (!empty($team_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($team_fields as $team_field) {
                    $ids[] = $team_field['value'];
                  }
                  $team_collections = field_collection_item_load_multiple($ids);
                  foreach ($team_collections as $key => $team_collection) {
                    $team[$key]['s_no'] = !empty($team_collection->field_ct_project_team_s_no) ? $team_collection->field_ct_project_team_s_no[$lang][0]['value'] : '';
                    $team[$key]['name'] = !empty($team_collection->field_ct_project_team_name) ? $team_collection->field_ct_project_team_name[$lang][0]['value'] : '';
                    $team[$key]['desig'] = !empty($team_collection->field_ct_project_team_desig) ? $team_collection->field_ct_project_team_desig[$lang][0]['value'] : '';
                    $team[$key]['roles'] = !empty($team_collection->field_ct_project_team_roles_resp) ? $team_collection->field_ct_project_team_roles_resp[$lang][0]['value'] : '';
                    $team[$key]['speci'] = !empty($team_collection->field_ct_project_team_speci) ? $team_collection->field_ct_project_team_speci[$lang][0]['value'] : '';
                    $team[$key]['status'] = !empty($team_collection->field_ct_project_team_status) ? $team_collection->field_ct_project_team_status[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($team)): ?>
                <?php foreach ($team as $team_item): ?>
                  <tr>
                    <td><?php print !empty($team_item['s_no']) ? $team_item['s_no'] : ''; ?></td>
                    <td><?php print !empty($team_item['name']) ? $team_item['name'] : ''; ?></td>
                    <td><?php print !empty($team_item['desig']) ? $team_item['desig'] : ''; ?></td>
                    <td><?php print !empty($team_item['roles']) ? $team_item['roles'] : ''; ?></td>
                    <td><?php print !empty($team_item['speci']) ? $team_item['speci'] : ''; ?></td>
                    <td><?php print !empty($team_item['status']) ? $team_item['status'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>9. Past Learnings</p>
            <p>This section should capture details of learning from similar projects or situation or geography related to the past, which could play key role in successful implementation of the project. It should also capture details of the impact generated from such project.</p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_project_details_lessons')) ? field_get_items('node', $node, 'field_ct_project_details_lessons')[0]['value'] : ''; ?></p>
            <br>
            <p>10. Stakeholder Management</p>
            <p>This section should provide the details on the stakeholders identified for the proposed project. The stakeholders might include the primary beneficiaries, indirect beneficiaries, government departments, PRI, government institutions (schools, hospitals, etc.), frontline workers (such as Anganwadi Workers), partner organization (such as SHGs, NGOs, corporate organizations, I-NGOs, etc.). It should further provide an overview of the approach identified to engage the stakeholders including whether the community intended beneficiaries / stakeholders were involved in the conceptualization and planning of the project through an inclusive approach. For direct beneficiaries, mention should be made on the nature of interaction (Group Counselling, Training, IPC, Face-to-face communication, etc) and the tools that would be used for the same.</p>
            <br>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl" id="myTable5">
              <tr>
                <th width="46%">Stakeholder Category </th>
                <th width="47%">Engagement Strategy</th>
              </tr>
              <?php
                $stkhdr_fields = field_get_items('node', $node, 'field_ct_project_det_stkhdr_mgt');
                if (!empty($stkhdr_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($stkhdr_fields as $stkhdr_field) {
                    $ids[] = $stkhdr_field['value'];
                  }
                  $stkhdr_collections = field_collection_item_load_multiple($ids);
                  foreach ($stkhdr_collections as $key => $stkhdr_collection) {
                    $stkhdr[$key]['category'] = !empty($stkhdr_collection->field_ct_proj_stkholdr_cat) ? $stkhdr_collection->field_ct_proj_stkholdr_cat[$lang][0]['value'] : '';
                    $stkhdr[$key]['strategy'] = !empty($stkhdr_collection->field_ct_proj_engagmnt_strategy) ? $stkhdr_collection->field_ct_proj_engagmnt_strategy[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($stkhdr)): ?>
                <?php foreach ($stkhdr as $stkhdr_item): ?>
                  <tr>
                    <td><?php print !empty($stkhdr_item['category']) ? $stkhdr_item['category'] : ''; ?></td>
                    <td><?php print !empty($stkhdr_item['strategy']) ? $stkhdr_item['strategy'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>Projected number of direct and indirect beneficiaries </p>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl" id="myTable2">
              <tr>
                <th width="23%">Direct beneficiary groups</th>
                <th width="23%">Projected number of beneficiaries </th>
                <th width="23%">Indirect beneficiary groups</th>
                <th width="23%">Projected number of indirect beneficiaries </th>
              </tr>
              <?php
                $benefi_fields = field_get_items('node', $node, 'field_ct_project_no_of_benefi');
                if (!empty($benefi_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($benefi_fields as $benefi_field) {
                    $ids[] = $benefi_field['value'];
                  }
                  $benefi_collections = field_collection_item_load_multiple($ids);
                  foreach ($benefi_collections as $key => $benefi_collection) {
                    $benefi[$key]['drct_bene'] = !empty($benefi_collection->field_ct_proj_direct_bene_grp) ? $benefi_collection->field_ct_proj_direct_bene_grp[$lang][0]['value'] : '';
                    $benefi[$key]['no_drct_bene'] = !empty($benefi_collection->field_ct_proj_no_bene) ? $benefi_collection->field_ct_proj_no_bene[$lang][0]['value'] : '';
                    $benefi[$key]['indrct_bene'] = !empty($benefi_collection->field_ct_proj_indirect_bene_grp) ? $benefi_collection->field_ct_proj_indirect_bene_grp[$lang][0]['value'] : '';
                    $benefi[$key]['no_indrct_bene'] = !empty($benefi_collection->field_ct_proj_no_indirect_bene) ? $benefi_collection->field_ct_proj_no_indirect_bene[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($benefi)): ?>
                <?php foreach ($benefi as $benefi_item): ?>
                  <tr>
                    <td><?php print !empty($benefi_item['drct_bene']) ? $benefi_item['drct_bene'] : ''; ?></td>
                    <td><?php print !empty($benefi_item['no_drct_bene']) ? $benefi_item['no_drct_bene'] : ''; ?></td>
                    <td><?php print !empty($benefi_item['indrct_bene']) ? $benefi_item['indrct_bene'] : ''; ?></td>
                    <td><?php print !empty($benefi_item['no_indrct_bene']) ? $benefi_item['no_indrct_bene'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>11. Monitoring and Evaluation Plan</p>
            <p>This section should clearly indicate the approach designed towards monitoring the progress of the proposed project and the tools and techniques that would be adopted for the same. Please mention if any approach or staffing has been positioned to evaluate the outputs achieved vis-à-vis the identified objectives.</p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_project_det_monit_eval')) ? field_get_items('node', $node, 'field_ct_project_det_monit_eval')[0]['value'] : ''; ?></p>
            <br>
            <p>12. Risk analysis</p>
            <p>This section should provide a detailed overview of the potential challenges and limitations identified during the project design and baseline survey. What are the potential risks that may impact the outcome of the project and what is the risk mitigation strategy? It should also provide the proposed approach and actions identified by the organization to overcome the limitations and address the challenges, if they were to arise.</p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_project_risk_analysis')) ? field_get_items('node', $node, 'field_ct_project_risk_analysis')[0]['value'] : ''; ?></p>
            <br>
            <p>13. Sustainability and Exit Strategy</p>
            <p>This section should provide a detailed plan and approach that the NGO has identified for the self-sustainability of the project when the NGO support or HCL funding would be withdrawn.</p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_project_det_app_exit_st')) ? field_get_items('node', $node, 'field_ct_project_det_app_exit_st')[0]['value'] : ''; ?></p>
            <br>
            <p>14. Reporting Framework</p>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl">
              <tr>
                <th width="30%">Type</th>
                <th width="30%">Person</th>
                <th width="40%">Framework</th>
              </tr>
              <?php
                $rep_frmwk_fields = field_get_items('node', $node, 'field_ct_project_report_frmwrk');
                if (!empty($rep_frmwk_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($rep_frmwk_fields as $rep_frmwk_field) {
                    $ids[] = $rep_frmwk_field['value'];
                  }
                  $rep_frmwk_collections = field_collection_item_load_multiple($ids);
                  foreach ($rep_frmwk_collections as $key => $rep_frmwk_collection) {
                    $rep_frmwk[$key]['type'] = !empty($rep_frmwk_collection->field_ct_proj_reportng_frmt_type) ? $rep_frmwk_collection->field_ct_proj_reportng_frmt_type[$lang][0]['value'] : '';
                    $rep_frmwk[$key]['person'] = !empty($rep_frmwk_collection->field_ct_proj_report_frmt_person) ? $rep_frmwk_collection->field_ct_proj_report_frmt_person[$lang][0]['value'] : '';
                    $rep_frmwk[$key]['framework'] = !empty($rep_frmwk_collection->field_ct_proj_report_framework) ? $rep_frmwk_collection->field_ct_proj_report_framework[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($rep_frmwk)): ?>
                <?php foreach ($rep_frmwk as $rep_frmwk_item): ?>
                  <tr>
                    <td><?php print !empty($rep_frmwk_item['type']) ? $rep_frmwk_item['type'] : ''; ?></td>
                    <td><?php print !empty($rep_frmwk_item['person']) ? $rep_frmwk_item['person'] : ''; ?></td>
                    <td><?php print !empty($rep_frmwk_item['framework']) ? $rep_frmwk_item['framework'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>15. Key Indicators</p>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl">
              <tr>
                <th width="25%">Intervention</th>
                <th width="25%">Activity</th>
                <th width="25%">Short term indicator</th>
                <th width="25%">Long term indicator</th>
              </tr>
              <?php
                $key_indi_fields = field_get_items('node', $node, 'field_ct_project_key_indicators');
                if (!empty($key_indi_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($key_indi_fields as $key_indi_field) {
                    $ids[] = $key_indi_field['value'];
                  }
                  $key_indi_collections = field_collection_item_load_multiple($ids);
                  foreach ($key_indi_collections as $key => $key_indi_collection) {
                    $key_indi[$key]['intervention'] = !empty($key_indi_collection->field_ct_proj_key_intervention) ? $key_indi_collection->field_ct_proj_key_intervention[$lang][0]['value'] : '';
                    $key_indi[$key]['activities'] = !empty($key_indi_collection->field_ct_proj_key_activity) ? $key_indi_collection->field_ct_proj_key_activity[$lang][0]['value'] : '';
                    $key_indi[$key]['shrt_term_indi'] = !empty($key_indi_collection->field_ct_proj_key_shrt_term_indi) ? $key_indi_collection->field_ct_proj_key_shrt_term_indi[$lang][0]['value'] : '';
                    $key_indi[$key]['long_term_indi'] = !empty($key_indi_collection->field_ct_proj_long_term_indi) ? $key_indi_collection->field_ct_proj_long_term_indi[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($key_indi)): ?>
                <?php foreach ($key_indi as $key_indi_item): ?>
                  <tr>
                    <td><?php print !empty($key_indi_item['intervention']) ? $key_indi_item['intervention'] : ''; ?></td>
                    <td><?php print !empty($key_indi_item['activities']) ? $key_indi_item['activities'] : ''; ?></td>
                    <td><?php print !empty($key_indi_item['shrt_term_indi']) ? $key_indi_item['shrt_term_indi'] : ''; ?></td>
                    <td><?php print !empty($key_indi_item['long_term_indi']) ? $key_indi_item['long_term_indi'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>16. Quality Assurance</p>
            <p>This section should provide a detailed description of the approach adopted to ensure quality of the project throughout its life cycle. The key staff members who would be responsible to oversee the same must be mentioned.</p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_project_det_on_quality')) ? field_get_items('node', $node, 'field_ct_project_det_on_quality')[0]['value'] : ''; ?></p>
            <br>
            <p>17. Financial Proposal</p>
            <p>This section should provide a detailed overview of the proposed budget for the project vis-à-vis a detailed breakdown of the activities to be undertaken. It should make a note of the inputs required and the budget allocation therein. (Please use the format below to provide the relevant details)</p>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Project Activities</h2>

            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl">
              <tr>
                <th width="14%" valign="top">Particulars</th>
                <th colspan="3" align="center" valign="top">Year 1</th>
                <th colspan="3" align="center" valign="top">Year 2</th>
                <th colspan="3" align="center" valign="top">Year 3</th>
                <th colspan="3" align="center" valign="top">Year 4</th>
                <th colspan="3" align="center" valign="top">Year 5</th>
                <th width="9%" rowspan="2" valign="top">Total (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
              </tr>
              <tr>
                <th width="14%" valign="top">(List of activities / inputs)</th>
                <th width="7%" valign="top">Units</th>
                <th width="9%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="7%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="7%" valign="top">Units</th>
                <th width="11%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="7%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="7%" valign="top">Units</th>
                <th width="11%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="11%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="7%" valign="top">Units</th>
                <th width="11%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="11%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="7%" valign="top">Units</th>
                <th width="11%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="11%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
              </tr>
              <?php
                $proj_acti_fields = field_get_items('node', $node, 'field_ct_project_activities');
                if (!empty($proj_acti_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($proj_acti_fields as $proj_acti_field) {
                    $ids[] = $proj_acti_field['value'];
                  }
                  $proj_acti_collections = field_collection_item_load_multiple($ids);
                  foreach ($proj_acti_collections as $key => $proj_acti_collection) {
                    $proj_acti[$key]['list'] = !empty($proj_acti_collection->field_ct_proj_list_of_acti_inp) ? $proj_acti_collection->field_ct_proj_list_of_acti_inp[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_1'] = !empty($proj_acti_collection->field_ct_proj_units_1) ? $proj_acti_collection->field_ct_proj_units_1[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_1'] = !empty($proj_acti_collection->field_ct_proj_cost_per_unit_1) ? $proj_acti_collection->field_ct_proj_cost_per_unit_1[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_1'] = !empty($proj_acti_collection->field_ct_proj_amount_1) ? $proj_acti_collection->field_ct_proj_amount_1[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_2'] = !empty($proj_acti_collection->field_ct_proj_units_2) ? $proj_acti_collection->field_ct_proj_units_2[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_2'] = !empty($proj_acti_collection->field_ct_proj_cost_per_unit_2) ? $proj_acti_collection->field_ct_proj_cost_per_unit_2[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_2'] = !empty($proj_acti_collection->field_ct_proj_amount_2) ? $proj_acti_collection->field_ct_proj_amount_2[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_3'] = !empty($proj_acti_collection->field_ct_proj_units_3) ? $proj_acti_collection->field_ct_proj_units_3[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_3'] = !empty($proj_acti_collection->field_ct_proj_cost_per_unit_3) ? $proj_acti_collection->field_ct_proj_cost_per_unit_3[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_3'] = !empty($proj_acti_collection->field_ct_proj_amount_3) ? $proj_acti_collection->field_ct_proj_amount_3[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_4'] = !empty($proj_acti_collection->field_ct_proj_units_4) ? $proj_acti_collection->field_ct_proj_units_4[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_4'] = !empty($proj_acti_collection->field_ct_proj_cost_per_unit_4) ? $proj_acti_collection->field_ct_proj_cost_per_unit_4[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_4'] = !empty($proj_acti_collection->field_ct_proj_amount_4) ? $proj_acti_collection->field_ct_proj_amount_4[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_5'] = !empty($proj_acti_collection->field_ct_proj_units_5) ? $proj_acti_collection->field_ct_proj_units_5[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_5'] = !empty($proj_acti_collection->field_ct_proj_cost_per_unit_5) ? $proj_acti_collection->field_ct_proj_cost_per_unit_5[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_5'] = !empty($proj_acti_collection->field_ct_proj_amount_5) ? $proj_acti_collection->field_ct_proj_amount_5[$lang][0]['value'] : '';

                    $proj_acti[$key]['total'] = !empty($proj_acti_collection->field_ct_proj_total) ? $proj_acti_collection->field_ct_proj_total[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($proj_acti)): ?>
                <?php foreach ($proj_acti as $proj_acti_item): ?>
                  <tr>
                    <td><?php print !empty($proj_acti_item['list']) ? $proj_acti_item['list'] : ''; ?></td>

                    <td><?php print !empty($proj_acti_item['unit_1']) ? $proj_acti_item['unit_1'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['cost_1']) ? $proj_acti_item['cost_1'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['amnt_1']) ? $proj_acti_item['amnt_1'] : ''; ?></td>


                    <td><?php print !empty($proj_acti_item['unit_2']) ? $proj_acti_item['unit_2'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['cost_2']) ? $proj_acti_item['cost_2'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['amnt_2']) ? $proj_acti_item['amnt_2'] : ''; ?></td>

                    <td><?php print !empty($proj_acti_item['unit_3']) ? $proj_acti_item['unit_3'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['cost_3']) ? $proj_acti_item['cost_3'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['amnt_3']) ? $proj_acti_item['amnt_3'] : ''; ?></td>

                    <td><?php print !empty($proj_acti_item['unit_4']) ? $proj_acti_item['unit_4'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['cost_4']) ? $proj_acti_item['cost_4'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['amnt_4']) ? $proj_acti_item['amnt_4'] : ''; ?></td>

                    <td><?php print !empty($proj_acti_item['unit_5']) ? $proj_acti_item['unit_5'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['cost_5']) ? $proj_acti_item['cost_5'] : ''; ?></td>
                    <td><?php print !empty($proj_acti_item['amnt_5']) ? $proj_acti_item['amnt_5'] : ''; ?></td>

                    <td><?php print !empty($proj_acti_item['total']) ? $proj_acti_item['total'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
              <tr>
                <td width="14%" valign="top">Grand Total (X)</td>
                <td colspan="15" valign="top">&nbsp;</td>
                <td width="9%" valign="top"><span style="font-family: DejaVu Sans; sans-serif;">&#8377; </span><?php print !empty(field_get_items('node', $node, 'field_ct_project_act_total')) ? field_get_items('node', $node, 'field_ct_project_act_total')[0]['value'] : ''; ?><sub class="in-lakhs-sub">in Lakhs</sub></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Salary costs</h2>

            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl">
              <tr>
                <th width="17%">Particulars</th>
                <th width="25%" colspan="2">Year 1</th>
                <th width="22%" colspan="2">Year 2</th>
                <th width="25%" colspan="2">Year 3</th>
                <th width="22%" colspan="2">Year 4</th>
                <th width="25%" colspan="2">Year 5</th>
                <th width="9%" rowspan="2">Total</th>
              </tr>
              <tr>
                <th width="17%">Designation</th>
                <th width="5%">No</th>
                <th width="19%">Amount (per year) <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="5%">No.</th>
                <th width="16%">Amount (per year) <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="5%">No.</th>
                <th width="19%">Amount (per year) <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="5%">No.</th>
                <th width="19%">Amount (per year) <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="5%">No.</th>
                <th width="19%">Amount (per year) <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
              </tr>
              <?php
                $salary_fields = field_get_items('node', $node, 'field_ct_project_salary_costs');
                if (!empty($salary_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($salary_fields as $salary_field) {
                    $ids[] = $salary_field['value'];
                  }
                  $salary_collections = field_collection_item_load_multiple($ids);
                  foreach ($salary_collections as $key => $salary_collection) {
                    $salary[$key]['designation'] = !empty($salary_collection->field_ct_proj_sal_designation) ? $salary_collection->field_ct_proj_sal_designation[$lang][0]['value'] : '';

                    $salary[$key]['sal_1'] = !empty($salary_collection->field_ct_proj_sal_no_1) ? $salary_collection->field_ct_proj_sal_no_1[$lang][0]['value'] : '';
                    $salary[$key]['amnt_1'] = !empty($salary_collection->field_ct_proj_sal_amnt_per_yr_1) ? $salary_collection->field_ct_proj_sal_amnt_per_yr_1[$lang][0]['value'] : '';
                    $salary[$key]['sal_2'] = !empty($salary_collection->field_ct_proj_sal_no_2) ? $salary_collection->field_ct_proj_sal_no_2[$lang][0]['value'] : '';
                    $salary[$key]['amnt_2'] = !empty($salary_collection->field_ct_proj_sal_amnt_per_yr_2) ? $salary_collection->field_ct_proj_sal_amnt_per_yr_2[$lang][0]['value'] : '';
                    $salary[$key]['sal_3'] = !empty($salary_collection->field_ct_proj_sal_no_3) ? $salary_collection->field_ct_proj_sal_no_3[$lang][0]['value'] : '';
                    $salary[$key]['amnt_3'] = !empty($salary_collection->field_ct_proj_sal_amnt_per_yr_3) ? $salary_collection->field_ct_proj_sal_amnt_per_yr_3[$lang][0]['value'] : '';
                    $salary[$key]['sal_4'] = !empty($salary_collection->field_ct_proj_sal_no_4) ? $salary_collection->field_ct_proj_sal_no_4[$lang][0]['value'] : '';
                    $salary[$key]['amnt_4'] = !empty($salary_collection->field_ct_proj_sal_amnt_per_yr_4) ? $salary_collection->field_ct_proj_sal_amnt_per_yr_4[$lang][0]['value'] : '';
                    $salary[$key]['sal_5'] = !empty($salary_collection->field_ct_proj_sal_no_5) ? $salary_collection->field_ct_proj_sal_no_5[$lang][0]['value'] : '';
                    $salary[$key]['amnt_5'] = !empty($salary_collection->field_ct_proj_sal_amnt_per_yr_5) ? $salary_collection->field_ct_proj_sal_amnt_per_yr_5[$lang][0]['value'] : '';

                    $salary[$key]['total'] = !empty($salary_collection->field_ct_proj_sal_total) ? $salary_collection->field_ct_proj_sal_total[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($salary)): ?>
                <?php foreach ($salary as $salary_item): ?>
                  <tr>
                    <td><?php print !empty($salary_item['designation']) ? $salary_item['designation'] : ''; ?></td>

                    <td><?php print !empty($salary_item['sal_1']) ? $salary_item['sal_1'] : ''; ?></td>
                    <td><?php print !empty($salary_item['amnt_1']) ? $salary_item['amnt_1'] : ''; ?></td>

                    <td><?php print !empty($salary_item['sal_2']) ? $salary_item['sal_2'] : ''; ?></td>
                    <td><?php print !empty($salary_item['amnt_2']) ? $salary_item['amnt_2'] : ''; ?></td>

                    <td><?php print !empty($salary_item['sal_3']) ? $salary_item['sal_3'] : ''; ?></td>
                    <td><?php print !empty($salary_item['amnt_3']) ? $salary_item['amnt_3'] : ''; ?></td>

                    <td><?php print !empty($salary_item['sal_4']) ? $salary_item['sal_4'] : ''; ?></td>
                    <td><?php print !empty($salary_item['amnt_4']) ? $salary_item['amnt_4'] : ''; ?></td>

                    <td><?php print !empty($salary_item['sal_5']) ? $salary_item['sal_5'] : ''; ?></td>
                    <td><?php print !empty($salary_item['amnt_5']) ? $salary_item['amnt_5'] : ''; ?></td>

                    <td><?php print !empty($salary_item['total']) ? $salary_item['total'] : ''; ?></td>

                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
              <tr>
                <td width="17%" valign="top">Grand Total (Y)</td>
                <td width="73%" colspan="10" valign="top">&nbsp;</td>
                <td width="9%" valign="top"><span style="font-family: DejaVu Sans; sans-serif;">&#8377; </span><?php print !empty(field_get_items('node', $node, 'field_ct_project_sal_costs_total')) ? field_get_items('node', $node, 'field_ct_project_sal_costs_total')[0]['value'] : ''; ?></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Administration costs</h2>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl">
            <?php $admin_costs = field_get_items('node', $node, 'field_ct_project_admin_costs'); ?>
              <tr>
                <th width="13%" valign="top">Particulars</th>
                <th width="16%" colspan="3" valign="top">Year 1</th>
                <th width="16%" colspan="3" valign="top">Year 2</th>
                <th width="16%" colspan="3" valign="top">Year 3</th>
                <th width="16%" colspan="3" valign="top">Year 4</th>
                <th width="16%" colspan="3" valign="top">Year 5</th>
                <th width="6%" rowspan="2" valign="top">Total</th>
              </tr>
              <tr>
                <th width="13%" valign="top">(List of Activities)</th>
                <th width="4%" valign="top">Units</th>
                <th width="4%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="4%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="4%" valign="top">Units</th>
                <th width="4%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="4%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="4%" valign="top">Units</th>
                <th width="4%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="4%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="4%" valign="top">Units</th>
                <th width="4%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="4%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="4%" valign="top">Units</th>
                <th width="4%" valign="top">Cost per unit <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span></th>
                <th width="4%" valign="top">Amount (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
              </tr>
              <tr>
                <td width="13%" valign="top">Rent</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][1]) ? $admin_costs[0]['tabledata'][2][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][2]) ? $admin_costs[0]['tabledata'][2][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][3]) ? $admin_costs[0]['tabledata'][2][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][4]) ? $admin_costs[0]['tabledata'][2][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][5]) ? $admin_costs[0]['tabledata'][2][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][6]) ? $admin_costs[0]['tabledata'][2][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][7]) ? $admin_costs[0]['tabledata'][2][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][8]) ? $admin_costs[0]['tabledata'][2][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][9]) ? $admin_costs[0]['tabledata'][2][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][10]) ? $admin_costs[0]['tabledata'][2][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][11]) ? $admin_costs[0]['tabledata'][2][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][12]) ? $admin_costs[0]['tabledata'][2][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][13]) ? $admin_costs[0]['tabledata'][2][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][14]) ? $admin_costs[0]['tabledata'][2][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][15]) ? $admin_costs[0]['tabledata'][2][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][2][16]) ? $admin_costs[0]['tabledata'][2][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Repair &amp; Maintenance</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][1]) ? $admin_costs[0]['tabledata'][3][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][2]) ? $admin_costs[0]['tabledata'][3][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][3]) ? $admin_costs[0]['tabledata'][3][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][4]) ? $admin_costs[0]['tabledata'][3][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][5]) ? $admin_costs[0]['tabledata'][3][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][6]) ? $admin_costs[0]['tabledata'][3][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][7]) ? $admin_costs[0]['tabledata'][3][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][8]) ? $admin_costs[0]['tabledata'][3][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][9]) ? $admin_costs[0]['tabledata'][3][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][10]) ? $admin_costs[0]['tabledata'][3][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][11]) ? $admin_costs[0]['tabledata'][3][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][12]) ? $admin_costs[0]['tabledata'][3][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][13]) ? $admin_costs[0]['tabledata'][3][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][14]) ? $admin_costs[0]['tabledata'][3][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][15]) ? $admin_costs[0]['tabledata'][3][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][3][16]) ? $admin_costs[0]['tabledata'][3][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Insurance Charges</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][1]) ? $admin_costs[0]['tabledata'][4][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][2]) ? $admin_costs[0]['tabledata'][4][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][3]) ? $admin_costs[0]['tabledata'][4][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][4]) ? $admin_costs[0]['tabledata'][4][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][5]) ? $admin_costs[0]['tabledata'][4][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][6]) ? $admin_costs[0]['tabledata'][4][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][7]) ? $admin_costs[0]['tabledata'][4][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][8]) ? $admin_costs[0]['tabledata'][4][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][9]) ? $admin_costs[0]['tabledata'][4][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][10]) ? $admin_costs[0]['tabledata'][4][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][11]) ? $admin_costs[0]['tabledata'][4][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][12]) ? $admin_costs[0]['tabledata'][4][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][13]) ? $admin_costs[0]['tabledata'][4][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][14]) ? $admin_costs[0]['tabledata'][4][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][15]) ? $admin_costs[0]['tabledata'][4][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][4][16]) ? $admin_costs[0]['tabledata'][4][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Electricity, Power &amp; Water</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][1]) ? $admin_costs[0]['tabledata'][5][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][2]) ? $admin_costs[0]['tabledata'][5][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][3]) ? $admin_costs[0]['tabledata'][5][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][4]) ? $admin_costs[0]['tabledata'][5][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][5]) ? $admin_costs[0]['tabledata'][5][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][6]) ? $admin_costs[0]['tabledata'][5][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][7]) ? $admin_costs[0]['tabledata'][5][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][8]) ? $admin_costs[0]['tabledata'][5][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][9]) ? $admin_costs[0]['tabledata'][5][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][10]) ? $admin_costs[0]['tabledata'][5][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][11]) ? $admin_costs[0]['tabledata'][5][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][12]) ? $admin_costs[0]['tabledata'][5][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][13]) ? $admin_costs[0]['tabledata'][5][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][14]) ? $admin_costs[0]['tabledata'][5][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][15]) ? $admin_costs[0]['tabledata'][5][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][5][16]) ? $admin_costs[0]['tabledata'][5][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Hospitality Charges</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][1]) ? $admin_costs[0]['tabledata'][6][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][2]) ? $admin_costs[0]['tabledata'][6][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][3]) ? $admin_costs[0]['tabledata'][6][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][4]) ? $admin_costs[0]['tabledata'][6][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][5]) ? $admin_costs[0]['tabledata'][6][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][6]) ? $admin_costs[0]['tabledata'][6][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][7]) ? $admin_costs[0]['tabledata'][6][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][8]) ? $admin_costs[0]['tabledata'][6][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][9]) ? $admin_costs[0]['tabledata'][6][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][10]) ? $admin_costs[0]['tabledata'][6][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][11]) ? $admin_costs[0]['tabledata'][6][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][12]) ? $admin_costs[0]['tabledata'][6][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][13]) ? $admin_costs[0]['tabledata'][6][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][14]) ? $admin_costs[0]['tabledata'][6][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][15]) ? $admin_costs[0]['tabledata'][6][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][6][16]) ? $admin_costs[0]['tabledata'][6][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Office Maintenance</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][1]) ? $admin_costs[0]['tabledata'][7][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][2]) ? $admin_costs[0]['tabledata'][7][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][3]) ? $admin_costs[0]['tabledata'][7][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][4]) ? $admin_costs[0]['tabledata'][7][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][5]) ? $admin_costs[0]['tabledata'][7][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][6]) ? $admin_costs[0]['tabledata'][7][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][7]) ? $admin_costs[0]['tabledata'][7][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][8]) ? $admin_costs[0]['tabledata'][7][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][9]) ? $admin_costs[0]['tabledata'][7][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][10]) ? $admin_costs[0]['tabledata'][7][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][11]) ? $admin_costs[0]['tabledata'][7][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][12]) ? $admin_costs[0]['tabledata'][7][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][13]) ? $admin_costs[0]['tabledata'][7][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][14]) ? $admin_costs[0]['tabledata'][7][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][15]) ? $admin_costs[0]['tabledata'][7][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][7][16]) ? $admin_costs[0]['tabledata'][7][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Audit Fee</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][1]) ? $admin_costs[0]['tabledata'][8][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][2]) ? $admin_costs[0]['tabledata'][8][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][3]) ? $admin_costs[0]['tabledata'][8][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][4]) ? $admin_costs[0]['tabledata'][8][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][5]) ? $admin_costs[0]['tabledata'][8][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][6]) ? $admin_costs[0]['tabledata'][8][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][7]) ? $admin_costs[0]['tabledata'][8][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][8]) ? $admin_costs[0]['tabledata'][8][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][9]) ? $admin_costs[0]['tabledata'][8][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][10]) ? $admin_costs[0]['tabledata'][8][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][11]) ? $admin_costs[0]['tabledata'][8][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][12]) ? $admin_costs[0]['tabledata'][8][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][13]) ? $admin_costs[0]['tabledata'][8][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][14]) ? $admin_costs[0]['tabledata'][8][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][15]) ? $admin_costs[0]['tabledata'][8][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][8][16]) ? $admin_costs[0]['tabledata'][8][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Travel costs</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][1]) ? $admin_costs[0]['tabledata'][9][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][2]) ? $admin_costs[0]['tabledata'][9][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][3]) ? $admin_costs[0]['tabledata'][9][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][4]) ? $admin_costs[0]['tabledata'][9][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][5]) ? $admin_costs[0]['tabledata'][9][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][6]) ? $admin_costs[0]['tabledata'][9][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][7]) ? $admin_costs[0]['tabledata'][9][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][8]) ? $admin_costs[0]['tabledata'][9][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][9]) ? $admin_costs[0]['tabledata'][9][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][10]) ? $admin_costs[0]['tabledata'][9][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][11]) ? $admin_costs[0]['tabledata'][9][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][12]) ? $admin_costs[0]['tabledata'][9][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][13]) ? $admin_costs[0]['tabledata'][9][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][14]) ? $admin_costs[0]['tabledata'][9][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][15]) ? $admin_costs[0]['tabledata'][9][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][9][16]) ? $admin_costs[0]['tabledata'][9][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Boarding &amp; Lodging</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][1]) ? $admin_costs[0]['tabledata'][10][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][2]) ? $admin_costs[0]['tabledata'][10][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][3]) ? $admin_costs[0]['tabledata'][10][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][4]) ? $admin_costs[0]['tabledata'][10][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][5]) ? $admin_costs[0]['tabledata'][10][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][6]) ? $admin_costs[0]['tabledata'][10][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][7]) ? $admin_costs[0]['tabledata'][10][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][8]) ? $admin_costs[0]['tabledata'][10][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][9]) ? $admin_costs[0]['tabledata'][10][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][10]) ? $admin_costs[0]['tabledata'][10][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][11]) ? $admin_costs[0]['tabledata'][10][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][12]) ? $admin_costs[0]['tabledata'][10][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][13]) ? $admin_costs[0]['tabledata'][10][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][14]) ? $admin_costs[0]['tabledata'][10][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][15]) ? $admin_costs[0]['tabledata'][10][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][10][16]) ? $admin_costs[0]['tabledata'][10][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Others (Specify)</td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][1]) ? $admin_costs[0]['tabledata'][11][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][2]) ? $admin_costs[0]['tabledata'][11][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][3]) ? $admin_costs[0]['tabledata'][11][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][4]) ? $admin_costs[0]['tabledata'][11][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][5]) ? $admin_costs[0]['tabledata'][11][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][6]) ? $admin_costs[0]['tabledata'][11][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][7]) ? $admin_costs[0]['tabledata'][11][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][8]) ? $admin_costs[0]['tabledata'][11][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][9]) ? $admin_costs[0]['tabledata'][11][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][10]) ? $admin_costs[0]['tabledata'][11][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][11]) ? $admin_costs[0]['tabledata'][11][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][12]) ? $admin_costs[0]['tabledata'][11][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][13]) ? $admin_costs[0]['tabledata'][11][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][14]) ? $admin_costs[0]['tabledata'][11][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][15]) ? $admin_costs[0]['tabledata'][11][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print !empty($admin_costs[0]['tabledata'][11][16]) ? $admin_costs[0]['tabledata'][11][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Grand Total (Z)</td>
                <td width="79%" colspan="15" valign="top">&nbsp;</td>
                <td width="6%" valign="top"><span style="font-family: DejaVu Sans; sans-serif;">&#8377; </span><?php print !empty(field_get_items('node', $node, 'field_ct_project_ad_costs_total')) ? field_get_items('node', $node, 'field_ct_project_ad_costs_total')[0]['value'] : ''; ?><sub class="in-lakhs-sub">in Lakhs</sub></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Total budget</h2>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl">
            <?php $total_budget = field_get_items('node', $node, 'field_ct_project_total_budget'); ?>
              <tbody>
                <tr>
                  <th width="20%">Particulars </th>
                  <th width="15%">Year 1</th>
                  <th width="15%">Year 2</th>
                  <th width="15%">Year 3</th>
                  <th width="15%">Year 4</th>
                  <th width="15%">Year 5</th>
                  <th width="5%">Total</th>
                </tr>
                <tr>
                  <td>Project Cost (X) (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</td>
                  <td><?php print !empty($total_budget[0]['tabledata'][1][1]) ? $total_budget[0]['tabledata'][1][1] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][1][2]) ? $total_budget[0]['tabledata'][1][2] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][1][3]) ? $total_budget[0]['tabledata'][1][3] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][1][4]) ? $total_budget[0]['tabledata'][1][4] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][1][5]) ? $total_budget[0]['tabledata'][1][5] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][1][6]) ? $total_budget[0]['tabledata'][1][6] : ''; ?></td>
                </tr>
                <tr>
                  <td>Salary Cost (Y) (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</td>
                  <td><?php print !empty($total_budget[0]['tabledata'][2][1]) ? $total_budget[0]['tabledata'][2][1] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][2][2]) ? $total_budget[0]['tabledata'][2][2] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][2][3]) ? $total_budget[0]['tabledata'][2][3] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][2][4]) ? $total_budget[0]['tabledata'][2][4] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][2][5]) ? $total_budget[0]['tabledata'][2][5] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][2][6]) ? $total_budget[0]['tabledata'][2][6] : ''; ?></td>
                </tr>
                <tr>
                  <td>Administration Cost (Z) (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</td>
                  <td><?php print !empty($total_budget[0]['tabledata'][3][1]) ? $total_budget[0]['tabledata'][3][1] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][3][2]) ? $total_budget[0]['tabledata'][3][2] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][3][3]) ? $total_budget[0]['tabledata'][3][3] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][3][4]) ? $total_budget[0]['tabledata'][3][4] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][3][5]) ? $total_budget[0]['tabledata'][3][5] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][3][6]) ? $total_budget[0]['tabledata'][3][6] : ''; ?></td>
                </tr>
                <tr>
                  <td>Grand Total (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</td>
                  <td><?php print !empty($total_budget[0]['tabledata'][4][1]) ? $total_budget[0]['tabledata'][4][1] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][4][2]) ? $total_budget[0]['tabledata'][4][2] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][4][3]) ? $total_budget[0]['tabledata'][4][3] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][4][4]) ? $total_budget[0]['tabledata'][4][4] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][4][5]) ? $total_budget[0]['tabledata'][4][5] : ''; ?></td>
                  <td><?php print !empty($total_budget[0]['tabledata'][4][6]) ? $total_budget[0]['tabledata'][4][6] : ''; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer
        ================================================== -->
<section class="footer"><!--our-differentiators-->
  <div class="container">
    <div class="row">
      <div class="col-md-6" style="text-align: center;">
        <p>Copyright © 2016 HCL Limited</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>