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
    <div class="row">
      <div class="col-md-12" style="text-align: center;">
        <h1>HCL Grant 2017-18</h1>
      </div>
    </div>
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
                <td><?php print isset(field_get_items('node', $node, 'field_pr_prop_abstract')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_abstract')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="27%">Thematic area</td>
                <td>
                <?php
                if (isset(field_get_items('node', $node, 'field_pr_prop_thematic_area')[0]['value'])) {
                  $choosen_theme = field_get_items('node', $node, 'field_pr_prop_thematic_area')[0]['value'];
                  print $choosen_theme;
                }
                ?>
                </td>
              </tr>
              <tr>
                <td width="27%">Project location</td>
                <td width="73%"><?php print isset(field_get_items('node', $node, 'field_pr_prop_project_location')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_project_location')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Project duration (months)</td>
                <td><?php print isset(field_get_items('node', $node, 'field_pr_prop_project_duration')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_project_duration')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Amount requested from HCL (<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> crores)</td>
                <td><?php print isset(field_get_items('node', $node, 'field_pr_prop_amt_req_from_hcl')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_amt_req_from_hcl')[0]['value'] : '0'; ?></td>
              </tr>
              <tr>
                <td>Government inputs (<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> crores)</td>
                <td><?php print isset(field_get_items('node', $node, 'field_pr_prop_gov_inputs')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_gov_inputs')[0]['value'] : '0'; ?></td>
              </tr>
              <tr>
                <td>Other donor inputs (<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> crores)</td>
                <td><?php print isset(field_get_items('node', $node, 'field_pr_prop_other_donor_inputs')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_other_donor_inputs')[0]['value'] : '0'; ?></td>
              </tr>
              <tr>
                <td>Proposed Project Budget (<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> crores)</td>
                <td><?php print isset(field_get_items('node', $node, 'field_pr_prop_project_budget')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_project_budget')[0]['value'] : '0'; ?></td>
              </tr>
            </table>
            <br>
            <p>2. Project Status</p>
            <?php
              if (isset(field_get_items('node', $node, 'field_pr_prop_project_status')[0]['value'])) {
                $proj_status = field_get_items('node', $node, 'field_pr_prop_project_status')[0]['value'];
                print $proj_status;
              }
            ?>
            <br>
            <?php if ($proj_status == 'Others'): ?>
              <?php print isset(field_get_items('node', $node, 'field_pr_prop_project_st_oth')[0]['value']) ? 'Other: ' . field_get_items('node', $node, 'field_pr_prop_project_st_oth')[0]['value'] : ''; ?>
            <?php endif; ?>
            <br>
            <br>
            <p>3. Problem Statement</p>
            <p>This section should provide a brief description of the problem and its magnitude that the project aims to address? Why it is important to address the problem? Who is impacted the most? (It should identify the bottlenecks and the key areas of focus required. The claim should be substantiated with relevant data and references collected during need assessment.)</p>
            <p><?php print isset(field_get_items('node', $node, 'field_pr_prop_problem_statement')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_problem_statement')[0]['value'] : ''; ?></p>
            <br>
            <p>4. Proposed Strategy</p>
            <p>This section should provide the strategy or approach proposed to address the problem identified. It should identify how the proposed project is supplementing the efforts of the Government in the region. Duplication of efforts must be avoided and project must establish linkages with existing government schemes and leverage existing infrastructure.</p>
            <p><?php print isset(field_get_items('node', $node, 'field_pr_prop_proposed_strategy')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_proposed_strategy')[0]['value'] : ''; ?></p>
            <br>
            <p>5. Area Profile</p>
            <p>This section should provide a brief demographic profile of districts and villages where the proposed project will be implemented. The profile should directly relate to the problem stated and the relevant statistics.</p>
            <p><?php print isset(field_get_items('node', $node, 'field_pr_prop_area_profile')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_area_profile')[0]['value'] : ''; ?></p>
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
            The objectives of the project should be quantifiable and designed using the SMART (Specific, Measurable, Achievable, Result Oriented and Time Bound) parameters.</div>
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
                <th width="22%" valign="top">Assumptions (external factors and potential risks)</th>
              </tr>
              <tr>
                <td width="12%" valign="top">Overall objective / Goal</td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_0_0')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_0_0')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_0_1')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_0_1')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_0_2')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_0_2')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_0_3')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_0_3')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="12%" valign="top">Project purpose</td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_1_0')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_1_0')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_1_1')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_1_1')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_1_2')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_1_2')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_1_3')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_1_3')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="12%" valign="top">Results</td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_2_0')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_2_0')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_2_1')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_2_1')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_2_2')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_2_2')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_2_3')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_2_3')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="12%" valign="top">Activities</td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_3_0')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_3_0')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_3_1')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_3_1')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_3_2')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_3_2')[0]['value'] : ''; ?></td>
                <td width="22%" valign="top"><?php print isset(field_get_items('node', $node, 'field_pr_prop_lfa_3_3')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_lfa_3_3')[0]['value'] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>7. Result Framework</p>
            <p>This section should provide an overview of the <b>Impact, Output, and Outcomes</b> anticipated by the proposed activities. It should clearly identify how the aforementioned changes (Impact/Outcome/Output) would support the attainment of the project objectives and how the project will be evaluated at the end.</p>
            <p>The change indicators should be quantifiable and designed using the SMART (Specific, Measurable, Achievable, Result Oriented and Time Bound) parameters. It is advisable that the Result Framework be developed vis-à-vis the Theory of Change. Baseline data for each of the outcome indicators must be given in the proposal.</p>
            <p><?php print isset(field_get_items('node', $node, 'field_pr_prop_result_framework')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_result_framework')[0]['value'] : ''; ?></p>
            <br>
            <p>8. Stakeholder Management</p>
            <p>This section should provide the details on the stakeholders identified for the proposed project. The stakeholders might include the primary /indirect beneficiaries, government departments, PRI, government institutions (schools, hospitals, etc.), frontline workers (such as Anganwadi Workers), partner organization (such as SHGs, NGOs, corporate organizations, I-NGOs, etc.). It should further provide an overview of the approach identified to engage the stakeholders including whether the community intended beneficiaries / stakeholders were involved in the conceptualization and planning of the project through an inclusive approach. For direct beneficiaries, the nature of interaction (Group Counselling, Training, IPC, Face-to-face communication, etc) and the tools to be used for the same should be mentioned.</p>
            <br>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl" id="myTable5">
              <tr>
                <th width="46%">Stakeholder Category </th>
                <th width="47%">Engagement Strategy</th>
              </tr>
              <?php
                $stkhdr_fields = field_get_items('node', $node, 'field_pr_prop_sthld_mgmt');
                if (!empty($stkhdr_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($stkhdr_fields as $stkhdr_field) {
                    $ids[] = $stkhdr_field['value'];
                  }
                  $stkhdr_collections = field_collection_item_load_multiple($ids);
                  foreach ($stkhdr_collections as $key => $stkhdr_collection) {
                    $stkhdr[$key]['category'] = isset($stkhdr_collection->field_pr_prop_sthld_cat[$lang][0]['value']) ? $stkhdr_collection->field_pr_prop_sthld_cat[$lang][0]['value'] : '';
                    $stkhdr[$key]['strategy'] = isset($stkhdr_collection->field_pr_prop_engag_stra[$lang][0]['value']) ? $stkhdr_collection->field_pr_prop_engag_stra[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($stkhdr)): ?>
                <?php foreach ($stkhdr as $stkhdr_item): ?>
                  <tr>
                    <td><?php print isset($stkhdr_item['category']) ? $stkhdr_item['category'] : ''; ?></td>
                    <td><?php print isset($stkhdr_item['strategy']) ? $stkhdr_item['strategy'] : ''; ?></td>
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
                $benefi_fields = field_get_items('node', $node, 'field_pr_prop_num_of_dir_benef');
                if (!empty($benefi_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($benefi_fields as $benefi_field) {
                    $ids[] = $benefi_field['value'];
                  }
                  $benefi_collections = field_collection_item_load_multiple($ids);
                  foreach ($benefi_collections as $key => $benefi_collection) {
                    $benefi[$key]['drct_bene'] = isset($benefi_collection->field_pr_prop_dir_benef_grp[$lang][0]['value']) ? $benefi_collection->field_pr_prop_dir_benef_grp[$lang][0]['value'] : '';
                    $benefi[$key]['no_drct_bene'] = isset($benefi_collection->field_pr_prop_num_of_benefi[$lang][0]['value']) ? $benefi_collection->field_pr_prop_num_of_benefi[$lang][0]['value'] : '0';
                    $benefi[$key]['indrct_bene'] = isset($benefi_collection->field_pr_prop_indir_benef_grp[$lang][0]['value']) ? $benefi_collection->field_pr_prop_indir_benef_grp[$lang][0]['value'] : '';
                    $benefi[$key]['no_indrct_bene'] = isset($benefi_collection->field_pr_prop_num_indir_benef[$lang][0]['value']) ? $benefi_collection->field_pr_prop_num_indir_benef[$lang][0]['value'] : '0';
                  }
                }
              ?>
              <?php if (!empty($benefi)): ?>
                <?php foreach ($benefi as $benefi_item): ?>
                  <tr>
                    <td><?php print isset($benefi_item['drct_bene']) ? $benefi_item['drct_bene'] : ''; ?></td>
                    <td><?php print isset($benefi_item['no_drct_bene']) ? $benefi_item['no_drct_bene'] : ''; ?></td>
                    <td><?php print isset($benefi_item['indrct_bene']) ? $benefi_item['indrct_bene'] : ''; ?></td>
                    <td><?php print isset($benefi_item['no_indrct_bene']) ? $benefi_item['no_indrct_bene'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>9. Sustainability and Exit Strategy</p>
            <p>This section should provide a brief narration of the plan and approach that the NGO has identified for the self-sustainability of the project when the NGO support or HCL funding would be withdrawn.</p>
            <p><?php print isset(field_get_items('node', $node, 'field_pr_prop_sus_n_exit_strat')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_sus_n_exit_strat')[0]['value'] : ''; ?></p>
            <br>
            <br>
            <p>10. Financial Proposal</p>
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
                $proj_acti_fields = field_get_items('node', $node, 'field_pr_prop_project_activities');
                if (!empty($proj_acti_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($proj_acti_fields as $proj_acti_field) {
                    $ids[] = $proj_acti_field['value'];
                  }
                  $proj_acti_collections = field_collection_item_load_multiple($ids);
                  foreach ($proj_acti_collections as $key => $proj_acti_collection) {
                    $proj_acti[$key]['list'] = isset($proj_acti_collection->field_pr_prop_list_of_acti_inp[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_list_of_acti_inp[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_1'] = isset($proj_acti_collection->field_pr_prop_units_1[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_units_1[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_1'] = isset($proj_acti_collection->field_pr_prop_cost_per_unit_1[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_cost_per_unit_1[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_1'] = isset($proj_acti_collection->field_pr_prop_amount_1[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_amount_1[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_2'] = isset($proj_acti_collection->field_pr_prop_units_2[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_units_2[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_2'] = isset($proj_acti_collection->field_pr_prop_cost_per_unit_2[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_cost_per_unit_2[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_2'] = isset($proj_acti_collection->field_pr_prop_amount_2[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_amount_2[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_3'] = isset($proj_acti_collection->field_pr_prop_units_3[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_units_3[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_3'] = isset($proj_acti_collection->field_pr_prop_cost_per_unit_3[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_cost_per_unit_3[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_3'] = isset($proj_acti_collection->field_pr_prop_amount_3[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_amount_3[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_4'] = isset($proj_acti_collection->field_pr_prop_units_4[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_units_4[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_4'] = isset($proj_acti_collection->field_pr_prop_cost_per_unit_4[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_cost_per_unit_4[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_4'] = isset($proj_acti_collection->field_pr_prop_amount_4[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_amount_4[$lang][0]['value'] : '';

                    $proj_acti[$key]['unit_5'] = isset($proj_acti_collection->field_pr_prop_units_5[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_units_5[$lang][0]['value'] : '';
                    $proj_acti[$key]['cost_5'] = isset($proj_acti_collection->field_pr_prop_cost_per_unit_5[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_cost_per_unit_5[$lang][0]['value'] : '';
                    $proj_acti[$key]['amnt_5'] = isset($proj_acti_collection->field_pr_prop_amount_5[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_amount_5[$lang][0]['value'] : '';

                    $proj_acti[$key]['total'] = isset($proj_acti_collection->field_pr_prop_activity_total[$lang][0]['value']) ? $proj_acti_collection->field_pr_prop_activity_total[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($proj_acti)): ?>
                <?php foreach ($proj_acti as $proj_acti_item): ?>
                  <tr>
                    <td><?php print isset($proj_acti_item['list']) ? $proj_acti_item['list'] : ''; ?></td>

                    <td><?php print isset($proj_acti_item['unit_1']) ? $proj_acti_item['unit_1'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['cost_1']) ? $proj_acti_item['cost_1'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['amnt_1']) ? $proj_acti_item['amnt_1'] : ''; ?></td>


                    <td><?php print isset($proj_acti_item['unit_2']) ? $proj_acti_item['unit_2'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['cost_2']) ? $proj_acti_item['cost_2'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['amnt_2']) ? $proj_acti_item['amnt_2'] : ''; ?></td>

                    <td><?php print isset($proj_acti_item['unit_3']) ? $proj_acti_item['unit_3'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['cost_3']) ? $proj_acti_item['cost_3'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['amnt_3']) ? $proj_acti_item['amnt_3'] : ''; ?></td>

                    <td><?php print isset($proj_acti_item['unit_4']) ? $proj_acti_item['unit_4'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['cost_4']) ? $proj_acti_item['cost_4'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['amnt_4']) ? $proj_acti_item['amnt_4'] : ''; ?></td>

                    <td><?php print isset($proj_acti_item['unit_5']) ? $proj_acti_item['unit_5'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['cost_5']) ? $proj_acti_item['cost_5'] : ''; ?></td>
                    <td><?php print isset($proj_acti_item['amnt_5']) ? $proj_acti_item['amnt_5'] : ''; ?></td>

                    <td><?php print isset($proj_acti_item['total']) ? $proj_acti_item['total'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
              <tr>
                <td width="14%" valign="top">Grand Total (X)</td>
                <td colspan="15" valign="top">&nbsp;</td>
                <td width="9%" valign="top"><span style="font-family: DejaVu Sans; sans-serif;">&#8377; </span><?php print isset(field_get_items('node', $node, 'field_pr_prop_act_grand_total')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_act_grand_total')[0]['value'] : ''; ?><sub class="in-lakhs-sub">in Lakhs</sub></td>
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
                $salary_fields = field_get_items('node', $node, 'field_pr_prop_salary_costs');
                if (!empty($salary_fields)) {
                  // Extract the field collection item ids
                  $ids = array();
                  foreach ($salary_fields as $salary_field) {
                    $ids[] = $salary_field['value'];
                  }
                  $salary_collections = field_collection_item_load_multiple($ids);
                  foreach ($salary_collections as $key => $salary_collection) {
                    $salary[$key]['designation'] = isset($salary_collection->field_pr_prop_sc_designation[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_designation[$lang][0]['value'] : '';

                    $salary[$key]['sal_1'] = isset($salary_collection->field_pr_prop_sc_no_1[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_no_1[$lang][0]['value'] : '';
                    $salary[$key]['amnt_1'] = isset($salary_collection->field_pr_prop_sc_amt_per_year_1[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_amt_per_year_1[$lang][0]['value'] : '';
                    $salary[$key]['sal_2'] = isset($salary_collection->field_pr_prop_sc_no_2[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_no_2[$lang][0]['value'] : '';
                    $salary[$key]['amnt_2'] = isset($salary_collection->field_pr_prop_sc_amt_per_year_2[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_amt_per_year_2[$lang][0]['value'] : '';
                    $salary[$key]['sal_3'] = isset($salary_collection->field_pr_prop_sc_no_3[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_no_3[$lang][0]['value'] : '';
                    $salary[$key]['amnt_3'] = isset($salary_collection->field_pr_prop_sc_amt_per_year_3[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_amt_per_year_3[$lang][0]['value'] : '';
                    $salary[$key]['sal_4'] = isset($salary_collection->field_pr_prop_sc_no_4[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_no_4[$lang][0]['value'] : '';
                    $salary[$key]['amnt_4'] = isset($salary_collection->field_pr_prop_sc_amt_per_year_4[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_amt_per_year_4[$lang][0]['value'] : '';
                    $salary[$key]['sal_5'] = isset($salary_collection->field_pr_prop_sc_no_5[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_no_5[$lang][0]['value'] : '';
                    $salary[$key]['amnt_5'] = isset($salary_collection->field_pr_prop_sc_amt_per_year_5[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_amt_per_year_5[$lang][0]['value'] : '';

                    $salary[$key]['total'] = isset($salary_collection->field_pr_prop_sc_total[$lang][0]['value']) ? $salary_collection->field_pr_prop_sc_total[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($salary)): ?>
                <?php foreach ($salary as $salary_item): ?>
                  <tr>
                    <td><?php print isset($salary_item['designation']) ? $salary_item['designation'] : ''; ?></td>

                    <td><?php print isset($salary_item['sal_1']) ? $salary_item['sal_1'] : ''; ?></td>
                    <td><?php print isset($salary_item['amnt_1']) ? $salary_item['amnt_1'] : ''; ?></td>

                    <td><?php print isset($salary_item['sal_2']) ? $salary_item['sal_2'] : ''; ?></td>
                    <td><?php print isset($salary_item['amnt_2']) ? $salary_item['amnt_2'] : ''; ?></td>

                    <td><?php print isset($salary_item['sal_3']) ? $salary_item['sal_3'] : ''; ?></td>
                    <td><?php print isset($salary_item['amnt_3']) ? $salary_item['amnt_3'] : ''; ?></td>

                    <td><?php print isset($salary_item['sal_4']) ? $salary_item['sal_4'] : ''; ?></td>
                    <td><?php print isset($salary_item['amnt_4']) ? $salary_item['amnt_4'] : ''; ?></td>

                    <td><?php print isset($salary_item['sal_5']) ? $salary_item['sal_5'] : ''; ?></td>
                    <td><?php print isset($salary_item['amnt_5']) ? $salary_item['amnt_5'] : ''; ?></td>

                    <td><?php print isset($salary_item['total']) ? $salary_item['total'] : ''; ?></td>

                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
              <tr>
                <td width="17%" valign="top">Grand Total (Y)</td>
                <td width="73%" colspan="10" valign="top">&nbsp;</td>
                <td width="9%" valign="top"><span style="font-family: DejaVu Sans; sans-serif;">&#8377; </span><?php print isset(field_get_items('node', $node, 'field_pr_prop_salary_costs_total')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_salary_costs_total')[0]['value'] : '0'; ?></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Administration costs</h2>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl">
            <?php $admin_costs = field_get_items('node', $node, 'field_pr_prop_admin_costs'); ?>
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
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][1]) ? $admin_costs[0]['tabledata'][2][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][2]) ? $admin_costs[0]['tabledata'][2][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][3]) ? $admin_costs[0]['tabledata'][2][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][4]) ? $admin_costs[0]['tabledata'][2][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][5]) ? $admin_costs[0]['tabledata'][2][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][6]) ? $admin_costs[0]['tabledata'][2][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][7]) ? $admin_costs[0]['tabledata'][2][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][8]) ? $admin_costs[0]['tabledata'][2][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][9]) ? $admin_costs[0]['tabledata'][2][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][10]) ? $admin_costs[0]['tabledata'][2][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][11]) ? $admin_costs[0]['tabledata'][2][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][12]) ? $admin_costs[0]['tabledata'][2][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][13]) ? $admin_costs[0]['tabledata'][2][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][14]) ? $admin_costs[0]['tabledata'][2][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][15]) ? $admin_costs[0]['tabledata'][2][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][2][16]) ? $admin_costs[0]['tabledata'][2][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Repair &amp; Maintenance</td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][1]) ? $admin_costs[0]['tabledata'][3][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][2]) ? $admin_costs[0]['tabledata'][3][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][3]) ? $admin_costs[0]['tabledata'][3][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][4]) ? $admin_costs[0]['tabledata'][3][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][5]) ? $admin_costs[0]['tabledata'][3][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][6]) ? $admin_costs[0]['tabledata'][3][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][7]) ? $admin_costs[0]['tabledata'][3][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][8]) ? $admin_costs[0]['tabledata'][3][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][9]) ? $admin_costs[0]['tabledata'][3][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][10]) ? $admin_costs[0]['tabledata'][3][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][11]) ? $admin_costs[0]['tabledata'][3][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][12]) ? $admin_costs[0]['tabledata'][3][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][13]) ? $admin_costs[0]['tabledata'][3][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][14]) ? $admin_costs[0]['tabledata'][3][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][15]) ? $admin_costs[0]['tabledata'][3][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][3][16]) ? $admin_costs[0]['tabledata'][3][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Insurance Charges</td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][1]) ? $admin_costs[0]['tabledata'][4][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][2]) ? $admin_costs[0]['tabledata'][4][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][3]) ? $admin_costs[0]['tabledata'][4][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][4]) ? $admin_costs[0]['tabledata'][4][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][5]) ? $admin_costs[0]['tabledata'][4][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][6]) ? $admin_costs[0]['tabledata'][4][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][7]) ? $admin_costs[0]['tabledata'][4][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][8]) ? $admin_costs[0]['tabledata'][4][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][9]) ? $admin_costs[0]['tabledata'][4][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][10]) ? $admin_costs[0]['tabledata'][4][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][11]) ? $admin_costs[0]['tabledata'][4][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][12]) ? $admin_costs[0]['tabledata'][4][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][13]) ? $admin_costs[0]['tabledata'][4][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][14]) ? $admin_costs[0]['tabledata'][4][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][15]) ? $admin_costs[0]['tabledata'][4][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][4][16]) ? $admin_costs[0]['tabledata'][4][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Electricity, Power &amp; Water</td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][1]) ? $admin_costs[0]['tabledata'][5][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][2]) ? $admin_costs[0]['tabledata'][5][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][3]) ? $admin_costs[0]['tabledata'][5][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][4]) ? $admin_costs[0]['tabledata'][5][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][5]) ? $admin_costs[0]['tabledata'][5][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][6]) ? $admin_costs[0]['tabledata'][5][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][7]) ? $admin_costs[0]['tabledata'][5][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][8]) ? $admin_costs[0]['tabledata'][5][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][9]) ? $admin_costs[0]['tabledata'][5][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][10]) ? $admin_costs[0]['tabledata'][5][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][11]) ? $admin_costs[0]['tabledata'][5][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][12]) ? $admin_costs[0]['tabledata'][5][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][13]) ? $admin_costs[0]['tabledata'][5][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][14]) ? $admin_costs[0]['tabledata'][5][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][15]) ? $admin_costs[0]['tabledata'][5][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][5][16]) ? $admin_costs[0]['tabledata'][5][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Hospitality Charges</td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][1]) ? $admin_costs[0]['tabledata'][6][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][2]) ? $admin_costs[0]['tabledata'][6][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][3]) ? $admin_costs[0]['tabledata'][6][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][4]) ? $admin_costs[0]['tabledata'][6][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][5]) ? $admin_costs[0]['tabledata'][6][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][6]) ? $admin_costs[0]['tabledata'][6][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][7]) ? $admin_costs[0]['tabledata'][6][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][8]) ? $admin_costs[0]['tabledata'][6][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][9]) ? $admin_costs[0]['tabledata'][6][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][10]) ? $admin_costs[0]['tabledata'][6][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][11]) ? $admin_costs[0]['tabledata'][6][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][12]) ? $admin_costs[0]['tabledata'][6][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][13]) ? $admin_costs[0]['tabledata'][6][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][14]) ? $admin_costs[0]['tabledata'][6][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][15]) ? $admin_costs[0]['tabledata'][6][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][6][16]) ? $admin_costs[0]['tabledata'][6][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Office Maintenance</td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][1]) ? $admin_costs[0]['tabledata'][7][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][2]) ? $admin_costs[0]['tabledata'][7][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][3]) ? $admin_costs[0]['tabledata'][7][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][4]) ? $admin_costs[0]['tabledata'][7][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][5]) ? $admin_costs[0]['tabledata'][7][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][6]) ? $admin_costs[0]['tabledata'][7][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][7]) ? $admin_costs[0]['tabledata'][7][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][8]) ? $admin_costs[0]['tabledata'][7][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][9]) ? $admin_costs[0]['tabledata'][7][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][10]) ? $admin_costs[0]['tabledata'][7][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][11]) ? $admin_costs[0]['tabledata'][7][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][12]) ? $admin_costs[0]['tabledata'][7][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][13]) ? $admin_costs[0]['tabledata'][7][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][14]) ? $admin_costs[0]['tabledata'][7][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][15]) ? $admin_costs[0]['tabledata'][7][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][7][16]) ? $admin_costs[0]['tabledata'][7][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Audit Fee</td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][1]) ? $admin_costs[0]['tabledata'][8][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][2]) ? $admin_costs[0]['tabledata'][8][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][3]) ? $admin_costs[0]['tabledata'][8][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][4]) ? $admin_costs[0]['tabledata'][8][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][5]) ? $admin_costs[0]['tabledata'][8][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][6]) ? $admin_costs[0]['tabledata'][8][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][7]) ? $admin_costs[0]['tabledata'][8][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][8]) ? $admin_costs[0]['tabledata'][8][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][9]) ? $admin_costs[0]['tabledata'][8][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][10]) ? $admin_costs[0]['tabledata'][8][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][11]) ? $admin_costs[0]['tabledata'][8][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][12]) ? $admin_costs[0]['tabledata'][8][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][13]) ? $admin_costs[0]['tabledata'][8][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][14]) ? $admin_costs[0]['tabledata'][8][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][15]) ? $admin_costs[0]['tabledata'][8][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][8][16]) ? $admin_costs[0]['tabledata'][8][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Travel costs</td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][1]) ? $admin_costs[0]['tabledata'][9][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][2]) ? $admin_costs[0]['tabledata'][9][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][3]) ? $admin_costs[0]['tabledata'][9][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][4]) ? $admin_costs[0]['tabledata'][9][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][5]) ? $admin_costs[0]['tabledata'][9][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][6]) ? $admin_costs[0]['tabledata'][9][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][7]) ? $admin_costs[0]['tabledata'][9][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][8]) ? $admin_costs[0]['tabledata'][9][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][9]) ? $admin_costs[0]['tabledata'][9][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][10]) ? $admin_costs[0]['tabledata'][9][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][11]) ? $admin_costs[0]['tabledata'][9][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][12]) ? $admin_costs[0]['tabledata'][9][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][13]) ? $admin_costs[0]['tabledata'][9][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][14]) ? $admin_costs[0]['tabledata'][9][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][15]) ? $admin_costs[0]['tabledata'][9][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][9][16]) ? $admin_costs[0]['tabledata'][9][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Boarding &amp; Lodging</td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][1]) ? $admin_costs[0]['tabledata'][10][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][2]) ? $admin_costs[0]['tabledata'][10][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][3]) ? $admin_costs[0]['tabledata'][10][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][4]) ? $admin_costs[0]['tabledata'][10][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][5]) ? $admin_costs[0]['tabledata'][10][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][6]) ? $admin_costs[0]['tabledata'][10][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][7]) ? $admin_costs[0]['tabledata'][10][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][8]) ? $admin_costs[0]['tabledata'][10][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][9]) ? $admin_costs[0]['tabledata'][10][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][10]) ? $admin_costs[0]['tabledata'][10][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][11]) ? $admin_costs[0]['tabledata'][10][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][12]) ? $admin_costs[0]['tabledata'][10][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][13]) ? $admin_costs[0]['tabledata'][10][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][14]) ? $admin_costs[0]['tabledata'][10][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][15]) ? $admin_costs[0]['tabledata'][10][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][10][16]) ? $admin_costs[0]['tabledata'][10][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Others (Specify)</td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][1]) ? $admin_costs[0]['tabledata'][11][1] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][2]) ? $admin_costs[0]['tabledata'][11][2] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][3]) ? $admin_costs[0]['tabledata'][11][3] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][4]) ? $admin_costs[0]['tabledata'][11][4] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][5]) ? $admin_costs[0]['tabledata'][11][5] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][6]) ? $admin_costs[0]['tabledata'][11][6] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][7]) ? $admin_costs[0]['tabledata'][11][7] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][8]) ? $admin_costs[0]['tabledata'][11][8] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][9]) ? $admin_costs[0]['tabledata'][11][9] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][10]) ? $admin_costs[0]['tabledata'][11][10] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][11]) ? $admin_costs[0]['tabledata'][11][11] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][12]) ? $admin_costs[0]['tabledata'][11][12] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][13]) ? $admin_costs[0]['tabledata'][11][13] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][14]) ? $admin_costs[0]['tabledata'][11][14] : ''; ?></td>
                <td width="4%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][15]) ? $admin_costs[0]['tabledata'][11][15] : ''; ?></td>
                <td width="6%" valign="top"><?php print isset($admin_costs[0]['tabledata'][11][16]) ? $admin_costs[0]['tabledata'][11][16] : ''; ?></td>
              </tr>
              <tr>
                <td width="13%" valign="top">Grand Total (Z)</td>
                <td width="79%" colspan="15" valign="top">&nbsp;</td>
                <td width="6%" valign="top"><span style="font-family: DejaVu Sans; sans-serif;">&#8377; </span><?php print isset(field_get_items('node', $node, 'field_pr_prop_admin_costs_total')[0]['value']) ? field_get_items('node', $node, 'field_pr_prop_admin_costs_total')[0]['value'] : ''; ?><sub class="in-lakhs-sub">in Lakhs</sub></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Total budget</h2>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tbl">
            <?php $total_budget = field_get_items('node', $node, 'field_pr_prop_total_budget'); ?>
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
                  <td><?php print isset($total_budget[0]['tabledata'][1][1]) ? $total_budget[0]['tabledata'][1][1] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][1][2]) ? $total_budget[0]['tabledata'][1][2] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][1][3]) ? $total_budget[0]['tabledata'][1][3] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][1][4]) ? $total_budget[0]['tabledata'][1][4] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][1][5]) ? $total_budget[0]['tabledata'][1][5] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][1][6]) ? $total_budget[0]['tabledata'][1][6] : ''; ?></td>
                </tr>
                <tr>
                  <td>Salary Cost (Y) (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</td>
                  <td><?php print isset($total_budget[0]['tabledata'][2][1]) ? $total_budget[0]['tabledata'][2][1] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][2][2]) ? $total_budget[0]['tabledata'][2][2] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][2][3]) ? $total_budget[0]['tabledata'][2][3] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][2][4]) ? $total_budget[0]['tabledata'][2][4] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][2][5]) ? $total_budget[0]['tabledata'][2][5] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][2][6]) ? $total_budget[0]['tabledata'][2][6] : ''; ?></td>
                </tr>
                <tr>
                  <td>Administration Cost (Z) (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</td>
                  <td><?php print isset($total_budget[0]['tabledata'][3][1]) ? $total_budget[0]['tabledata'][3][1] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][3][2]) ? $total_budget[0]['tabledata'][3][2] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][3][3]) ? $total_budget[0]['tabledata'][3][3] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][3][4]) ? $total_budget[0]['tabledata'][3][4] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][3][5]) ? $total_budget[0]['tabledata'][3][5] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][3][6]) ? $total_budget[0]['tabledata'][3][6] : ''; ?></td>
                </tr>
                <tr>
                  <td>Grand Total (in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</td>
                  <td><?php print isset($total_budget[0]['tabledata'][4][1]) ? $total_budget[0]['tabledata'][4][1] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][4][2]) ? $total_budget[0]['tabledata'][4][2] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][4][3]) ? $total_budget[0]['tabledata'][4][3] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][4][4]) ? $total_budget[0]['tabledata'][4][4] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][4][5]) ? $total_budget[0]['tabledata'][4][5] : ''; ?></td>
                  <td><?php print isset($total_budget[0]['tabledata'][4][6]) ? $total_budget[0]['tabledata'][4][6] : ''; ?></td>
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
        <p>Copyright © 2017 HCL Limited</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>
