<?php
/**
 * @file
 * Template for org_pr pdf.
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
          <h1>Organization background</h1>
          <div class="inner-section">
            <h2>General information</h2>
            <table border="0" cellspacing="0" width="100%" class="tbl">
              <tr>
                <td width="25%">Organization name
                  <p class="smaller-than-lable">(as per registration certificate)</p>
                </td>
                <td width="75%" colspan="3"><?php print $node->title; ?></td>
              </tr>
              <tr>
                <td width="25%">Registered address
                  <p class="smaller-than-lable">(as per registration certificate)</p>
                </td>
                <td width="75%" colspan="3"><?php print isset(field_get_items('node', $node, 'field_org_pr_registered_address')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_registered_address')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="25%">State</td>
                <td width="25%">
                <?php
                  $tid = field_get_items('node', $node, 'field_org_pr_reg_add_states') ? field_get_items('node', $node, 'field_org_pr_reg_add_states')[0]['tid'] : '';
                  $parents = taxonomy_get_parents($tid);
                  foreach($parents as $parent) {
                    $state_name = $parent->name;
                  }
                  print $state_name;
                ?>
                </td>
                <td width="25%">City</td>
                <td width="25%">
                <?php
                  $tid = isset(field_get_items('node', $node, 'field_org_pr_reg_add_states')[0]['tid']) ? field_get_items('node', $node, 'field_org_pr_reg_add_states')[0]['tid'] : '';
                  $city_term = taxonomy_term_load($tid);
                  $city_name = $city_term->name;
                  print $city_name;
                ?>
                </td>
              </tr>
              <tr>
                <td width="25%">Correspondence Address</td>
                <td width="75%" colspan="3"><?php print isset(field_get_items('node', $node, 'field_org_pr_corr_address')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_corr_address')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="25%">State</td>
                <td width="25%">
                <?php
                  $tid = field_get_items('node', $node, 'field_org_pr_corr_add_states') ? field_get_items('node', $node, 'field_org_pr_corr_add_states')[0]['tid'] : '';
                  $parents = taxonomy_get_parents($tid);
                  foreach($parents as $parent) {
                    $state_name = $parent->name;
                  }
                  print $state_name;
                ?>
                </td>
                <td width="25%">City</td>
                <td width="25%">
                <?php
                  $tid = isset(field_get_items('node', $node, 'field_org_pr_corr_add_states')[0]['tid']) ? field_get_items('node', $node, 'field_org_pr_corr_add_states')[0]['tid'] : '';
                  $city_term = taxonomy_term_load($tid);
                  $city_name = $city_term->name;
                  print $city_name;
                ?>
                </td>
              </tr>
              <tr>
                <td width="25%">Website</td>
                <td width="75%" colspan="3"><?php print isset(field_get_items('node', $node, 'field_org_pr_website')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_website')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="25%">Contact person</td>
                <td width="25%"><?php print isset(field_get_items('node', $node, 'field_org_pr_contact_person')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_contact_person')[0]['value'] : ''; ?></td>
                <td width="25%">Designation</td>
                <td width="25%"><?php print isset(field_get_items('node', $node, 'field_org_pr_designation')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_designation')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="25%">Mobile Number</td>
                <td width="25%"><?php print isset(field_get_items('node', $node, 'field_org_pr_mobile_number')[0]['value']) ? '+91 ' . field_get_items('node', $node, 'field_org_pr_mobile_number')[0]['value'] : ''; ?></td>
                <td width="25%">Email address</td>
                <td width="25%"><?php print isset(field_get_items('node', $node, 'field_org_pr_email_address')[0]['email']) ? field_get_items('node', $node, 'field_org_pr_email_address')[0]['email'] : ''; ?></td>
              </tr>
              <tr>
                <td width="25%">Alternate Mobile Number</td>
                <td width="25%"><?php print isset(field_get_items('node', $node, 'field_org_pr_alt_mobile_number')[0]['value']) ? '+91 ' . field_get_items('node', $node, 'field_org_pr_alt_mobile_number')[0]['value'] : ''; ?></td>
                <td width="25%">Alternate Email address</td>
                <td width="25%"><?php print isset(field_get_items('node', $node, 'field_org_pr_alt_email_address')[0]['email']) ? field_get_items('node', $node, 'field_org_pr_alt_email_address')[0]['email'] : ''; ?></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Legal status and registrations</h2>
            <table border="0" cellspacing="0" width="100%" class="tbl">
              <tr>
                <td width="15%" valign="top">Date of Registration</td>
                <td colspan="2" valign="top"><?php print isset(field_get_items('node', $node, 'field_org_pr_registration_date')[0]['value']) ? date('d/m/Y', field_get_items('node', $node, 'field_org_pr_registration_date')[0]['value']) : ''; ?></td>
              </tr>
              <tr>
                <td width="15%" valign="top">Registration Type</td>
                <td valign="top">
                <?php
                  if (isset(field_get_items('node', $node, 'field_org_pr_registration_type')[0]['value'])) {
                    $type_of_reg = field_get_items('node', $node, 'field_org_pr_registration_type')[0]['value'];
                    print $type_of_reg;
                  }
                ?>
                </td>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="15%" valign="top">PAN</td>
                <td width="35%" valign="top"><?php print isset(field_get_items('node', $node, 'field_org_pr_pan')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_pan')[0]['value'] : ''; ?></td>
                <td width="50%" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="15%" valign="top">Tick all that apply</td>
                <td colspan="2" valign="top">
                <?php
                if (!empty(field_get_items('node', $node, 'field_org_pr_tick_that_apply'))) {
                  $values = array();
                  $items = field_get_items('node', $node, 'field_org_pr_tick_that_apply');
                  foreach ($items as $key => $item) {
                    $values[] = $item['value'];
                  }
                  print(implode(', ', $values));
                }
                ?></td>
                <!-- <td valign="top">&nbsp;</td> -->
              </tr>
              <tr>
                <td width="15%" rowspan="3" valign="top">Registration under FCRA 2010 (applicable to organizations receiving contribution from sources outside India)</td>
                <td width="85%" colspan="2"><?php print isset(field_get_items('node', $node, 'field_org_pr_fcra_appli_or_not')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_fcra_appli_or_not')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="35%" valign="top">Date of registration</td>
                <td width="50%" valign="top"><?php print isset(field_get_items('node', $node, 'field_org_pr_date_of_fcra_reg')[0]['value']) ? date('d/m/Y', field_get_items('node', $node, 'field_org_pr_date_of_fcra_reg')[0]['value']) : ''; ?></td>
              </tr>
              <tr>
                <td width="35%" valign="top">Registration number</td>
                <td width="50%" valign="top"><?php print isset(field_get_items('node', $node, 'field_org_pr_fcra_reg_number')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_fcra_reg_number')[0]['value'] : ''; ?></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Organization profile</h2>
            <p>
              <label>1. Please provide information about Organization Background</label>
              <p>Brief narration on organization profile, its history, objectives and strategy to achieve objectives. It shall also cover organization’s growth trajectory, work profile and impact generated in the past.</p>
            </p>
            <p>
              <?php print isset(field_get_items('node', $node, 'field_org_pr_brief_narrative_org')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_brief_narrative_org')[0]['value'] : ''; ?>
            </p>
            <p>
              <label>2. Please provide information about Vision and Mission of the organization</label>
            </p>
            <p>
              <?php print isset(field_get_items('node', $node, 'field_org_pr_vision_and_mission')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_vision_and_mission')[0]['value'] : ''; ?>
            </p>
            <p>
              <label>3. Please provide information about geographic reach of the organization</label>
            </p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="myTable" class="tbl">
              <tr>
                <th width="93%">Offices (including State, Field, Project, etc.)</th>
              </tr>
              <?php
                $locations = array();
                $geo_locations = field_get_items('node', $node, 'field_org_pr_offices');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($geo_locations)) {
                  foreach ($geo_locations as $geo_location) {
                    $ids[] = $geo_location['value'];
                  }
                  $locations_collection = field_collection_item_load_multiple($ids);
                  foreach ($locations_collection as $key => $location_item) {
                    $locations_tid = $location_item->field_org_pr_offices_states[$lang][0]['target_id'];
                    $locations_term = taxonomy_term_load($locations_tid);
                    $locations[] = $locations_term->name;
                  }
                }
              ?>
              <?php if (!empty($locations)): ?>
                <?php foreach ($locations as $location): ?>
                  <tr>
                    <td><?php print !empty($location) ? $location : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="myTable1" class="tbl">
              <tr>
                <th colspan="2" >Project / Program Coverage</th>
              </tr>
              <tr>
                <th width="46%" class="sub-hed">Name of state</th>
                <th width="47%" class="sub-hed">Number of villages covered in the state</th>
              </tr>
              <?php
                $coverage_fields = field_get_items('node', $node, 'field_org_pr_project_prog_cov');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($coverage_fields)) {
                  foreach ($coverage_fields as $coverage_field) {
                    $ids[] = $coverage_field['value'];
                  }
                  $coverage_collections = field_collection_item_load_multiple($ids);
                  foreach ($coverage_collections as $key => $coverage_collection) {
                    $coverage_tids = isset($coverage_collection->field_org_pr_name_of_state[$lang][0]['target_id']) ? $coverage_collection->field_org_pr_name_of_state[$lang][0]['target_id'] : '';
                    $coverage_term = taxonomy_term_load($coverage_tids);
                    $coverage[$key]['states_covered'] = $coverage_term->name;
                    $coverage[$key]['no_of_villages'] = isset($coverage_collection->field_org_pr_no_of_villages_cov[$lang][0]['value']) ? $coverage_collection->field_org_pr_no_of_villages_cov[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($coverage)): ?>
                <?php foreach ($coverage as $coverage_item): ?>
                  <tr>
                    <td><?php print isset($coverage_item['states_covered']) ? $coverage_item['states_covered'] : ''; ?></td>
                    <td><?php print isset($coverage_item['no_of_villages']) ? $coverage_item['no_of_villages'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>4. Provide details about any major awards received by the organization in the last FIVE years</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="myTable1" class="tbl">
              <tr>
                <th width="20%" class="sub-hed">Name of the award</th>
                <th width="20%" class="sub-hed">Name of the organization awarding / facilitating</th>
                <th width="20%" class="sub-hed">Award brief</th>
                <th width="20%" class="sub-hed">Year of Award</th>
              </tr>
              <?php
                $awards_fields = field_get_items('node', $node, 'field_org_pr_major_award');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($awards_fields)) {
                  foreach ($awards_fields as $awards_field) {
                    $ids[] = $awards_field['value'];
                  }
                  $awards_collections = field_collection_item_load_multiple($ids);
                  foreach ($awards_collections as $key => $awards_collection) {
                    $awards[$key]['awrd_name'] = isset($awards_collection->field_org_pr_name_of_award[$lang][0]['value']) ? $awards_collection->field_org_pr_name_of_award[$lang][0]['value'] : '';
                    $awards[$key]['name_org'] = isset($awards_collection->field_org_pr_name_org_awarding[$lang][0]['value']) ? $awards_collection->field_org_pr_name_org_awarding[$lang][0]['value'] : '';
                    $awards[$key]['awrd_brief'] = isset($awards_collection->field_org_pr_award_brief[$lang][0]['value']) ? $awards_collection->field_org_pr_award_brief[$lang][0]['value'] : '';
                    $awards[$key]['yr_awrd'] = isset($awards_collection->field_org_pr_year_of_award[$lang][0]['value']) ? $awards_collection->field_org_pr_year_of_award[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($awards)): ?>
                <?php foreach ($awards as $awards_item): ?>
                  <tr>
                    <td><?php print isset($awards_item['awrd_name']) ? $awards_item['awrd_name'] : ''; ?></td>
                    <td><?php print isset($awards_item['name_org']) ? $awards_item['name_org'] : ''; ?></td>
                    <td><?php print isset($awards_item['awrd_brief']) ? $awards_item['awrd_brief'] : ''; ?></td>
                    <td><?php print isset($awards_item['yr_awrd']) ? $awards_item['yr_awrd'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Organization structure</h2>
            <p>1. Provide details about the members of the Governing Body / Board</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="myTable3" class="tbl">
              <tr>
                <th width="15%">Name </th>
                <th width="15%">Age</th>
                <th width="15%">Designation</th>
                <th width="15%">Years with organization</th>
                <th width="15%">Highest educational qualification</th>
                <th width="15%">No. of years with the organization</th>
              </tr>
              <?php
                $org_str_fields = field_get_items('node', $node, 'field_org_pr_mem_of_gov_board');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($org_str_fields)) {
                  foreach ($org_str_fields as $org_str_field) {
                    $ids[] = $org_str_field['value'];
                  }
                  $org_str_collections = field_collection_item_load_multiple($ids);
                  foreach ($org_str_collections as $key => $org_str_collection) {
                    $org_str[$key]['name'] = isset($org_str_collection->field_org_pr_mem_name[$lang][0]['value']) ? $org_str_collection->field_org_pr_mem_name[$lang][0]['value'] : '';
                    $org_str[$key]['age'] = isset($org_str_collection->field_org_pr_mem_age[$lang][0]['value']) ? $org_str_collection->field_org_pr_mem_age[$lang][0]['value'] : '';
                    $org_str[$key]['designation'] = isset($org_str_collection->field_org_pr_mem_designation[$lang][0]['value']) ? $org_str_collection->field_org_pr_mem_designation[$lang][0]['value'] : '';
                    $org_str[$key]['yrs_with_org'] = isset($org_str_collection->field_org_pr_mem_years_with_org[$lang][0]['value']) ? $org_str_collection->field_org_pr_mem_years_with_org[$lang][0]['value'] : '';
                    $org_str[$key]['edu'] = isset($org_str_collection->field_org_pr_mem_edu_quali[$lang][0]['value']) ? $org_str_collection->field_org_pr_mem_edu_quali[$lang][0]['value'] : '';
                    $org_str[$key]['yr_in_curr_pos'] = isset($org_str_collection->field_org_pr_mem_yr_in_curr_pos[$lang][0]['value']) ? $org_str_collection->field_org_pr_mem_yr_in_curr_pos[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($org_str)): ?>
                <?php foreach ($org_str as $org_str_item): ?>
                  <tr>
                    <td><?php print isset($org_str_item['name']) ? $org_str_item['name'] : ''; ?></td>
                    <td><?php print isset($org_str_item['age']) ? $org_str_item['age'] : ''; ?></td>
                    <td><?php print isset($org_str_item['designation']) ? $org_str_item['designation'] : ''; ?></td>
                    <td><?php print isset($org_str_item['yrs_with_org']) ? $org_str_item['yrs_with_org'] : ''; ?></td>
                    <td><?php print isset($org_str_item['edu']) ? $org_str_item['edu'] : ''; ?></td>
                    <td><?php print isset($org_str_item['yr_in_curr_pos']) ? $org_str_item['yr_in_curr_pos'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>2. Please provide information about number of employees in the organization</p>
            <?php $no_of_emp_in_org = field_get_items('node', $node, 'field_org_pr_emp_in_org'); ?>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
              <tr>
                <th width="25%">Number of employee</th>
                <th width="25%">Permanent staff</th>
                <th width="25%">Contractual Staff</th>
                <th width="25%">Other staff members on non-payment basis (Advisors, Mentors, Volunteers, etc)</th>
              </tr>
              <tr>
                <td>Management Staff</td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][1][1]) ? $no_of_emp_in_org[0]['tabledata'][1][1] : ''; ?></td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][1][2]) ? $no_of_emp_in_org[0]['tabledata'][1][2] : ''; ?></td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][1][3]) ? $no_of_emp_in_org[0]['tabledata'][1][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Program / Technical / Field Staff</td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][2][1]) ? $no_of_emp_in_org[0]['tabledata'][2][1] : ''; ?></td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][2][2]) ? $no_of_emp_in_org[0]['tabledata'][2][2] : ''; ?></td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][2][3]) ? $no_of_emp_in_org[0]['tabledata'][2][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Administrative Staff</td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][3][1]) ? $no_of_emp_in_org[0]['tabledata'][3][1] : ''; ?></td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][3][2]) ? $no_of_emp_in_org[0]['tabledata'][3][2] : ''; ?></td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][3][3]) ? $no_of_emp_in_org[0]['tabledata'][3][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Total</td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][4][1]) ? $no_of_emp_in_org[0]['tabledata'][4][1] : ''; ?></td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][4][2]) ? $no_of_emp_in_org[0]['tabledata'][4][2] : ''; ?></td>
                <td><?php print isset($no_of_emp_in_org[0]['tabledata'][4][3]) ? $no_of_emp_in_org[0]['tabledata'][4][3] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>3. Provide details about the key employees of the organization</p>
            <p>Chief functionaries and functional specialists (may include Strategy, Programs, Thematic experts, Research, Monitoring, Evaluation, Documentation, Finance, Resource Mobilisation, Resource development, among others)</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="myTable4" class="tbl">
              <tr>
                <th width="15%">Name</th>
                <th width="15%">Field of specialization</th>
                <th width="15%">Permanent or Contractual</th>
                <th width="15%">Years of exp.</th>
                <th width="15%">Highest education qualification</th>
                <th width="15%">No. of years with the organization</th>
              </tr>
              <?php
                $key_emp_fields = field_get_items('node', $node, 'field_details_abt_key_emp');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($key_emp_fields)) {
                  foreach ($key_emp_fields as $key_emp_field) {
                    $ids[] = $key_emp_field['value'];
                  }
                  $key_emp_collections = field_collection_item_load_multiple($ids);
                  foreach ($key_emp_collections as $key => $key_emp_collection) {
                    $key_emp[$key]['name'] = isset($key_emp_collection->field_org_pr_key_emp_name[$lang][0]['value']) ? $key_emp_collection->field_org_pr_key_emp_name[$lang][0]['value'] : '';
                    $key_emp[$key]['spec'] = isset($key_emp_collection->field_org_pr_key_emp_specialztn[$lang][0]['value']) ? $key_emp_collection->field_org_pr_key_emp_specialztn[$lang][0]['value'] : '';
                    $key_emp[$key]['prm_or_contrct'] = isset($key_emp_collection->field_org_pr_key_emp_per_or_cont[$lang][0]['value']) ? $key_emp_collection->field_org_pr_key_emp_per_or_cont[$lang][0]['value'] : '';
                    $key_emp[$key]['yrs_exp'] = isset($key_emp_collection->field_org_pr_key_emp_yr_of_exp[$lang][0]['value']) ? $key_emp_collection->field_org_pr_key_emp_yr_of_exp[$lang][0]['value'] : '';
                    $key_emp[$key]['edu'] = isset($key_emp_collection->field_org_pr_key_emp_edu_qual[$lang][0]['value']) ? $key_emp_collection->field_org_pr_key_emp_edu_qual[$lang][0]['value'] : '';
                    $key_emp[$key]['key_emp_yr_with_org'] = isset($key_emp_collection->field_org_pr_key_emp_yr_with_org[$lang][0]['value']) ? $key_emp_collection->field_org_pr_key_emp_yr_with_org[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($key_emp)): ?>
                <?php foreach ($key_emp as $key_emp_item): ?>
                  <tr>
                    <td><?php print isset($key_emp_item['name']) ? $key_emp_item['name'] : ''; ?></td>
                    <td><?php print isset($key_emp_item['spec']) ? $key_emp_item['spec'] : ''; ?></td>
                    <td><?php print isset($key_emp_item['prm_or_contrct']) ? $key_emp_item['prm_or_contrct'] : ''; ?></td>
                    <td><?php print isset($key_emp_item['yrs_exp']) ? $key_emp_item['yrs_exp'] : ''; ?></td>
                    <td><?php print isset($key_emp_item['edu']) ? $key_emp_item['edu'] : ''; ?></td>
                    <td><?php print isset($key_emp_item['key_emp_yr_with_org']) ? $key_emp_item['key_emp_yr_with_org'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Financial information</h2>
            <p>Expenditure</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $expenditure = field_get_items('node', $node, 'field_org_pr_expenditure'); ?>
              <tr>
                <th width="25%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="25%">FY2015-16</th>
                <th width="25%">FY2014-15</th>
                <th width="25%">FY2013-14</th>
              </tr>
              <tr>
                <td>Project (covers cost incurred on projects directly implemented by the organization)</td>
                <td><?php print isset($expenditure[0]['tabledata'][1][1]) ? $expenditure[0]['tabledata'][1][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][1][2]) ? $expenditure[0]['tabledata'][1][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][1][3]) ? $expenditure[0]['tabledata'][1][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Sub Grants (covers cost incurred on projects implemented through sub partners)</td>
                <td><?php print isset($expenditure[0]['tabledata'][2][1]) ? $expenditure[0]['tabledata'][2][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][2][2]) ? $expenditure[0]['tabledata'][2][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][2][3]) ? $expenditure[0]['tabledata'][2][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Administration (covers cost other than project/sub grant like office rent, communication, support function salary, etc.)</td>
                <td><?php print isset($expenditure[0]['tabledata'][3][1]) ? $expenditure[0]['tabledata'][3][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][3][2]) ? $expenditure[0]['tabledata'][3][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][3][3]) ? $expenditure[0]['tabledata'][3][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Others</td>
                <td><?php print isset($expenditure[0]['tabledata'][4][1]) ? $expenditure[0]['tabledata'][4][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][4][2]) ? $expenditure[0]['tabledata'][4][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][4][3]) ? $expenditure[0]['tabledata'][4][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Total Expenditure</td>
                <td><?php print isset($expenditure[0]['tabledata'][5][1]) ? $expenditure[0]['tabledata'][5][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][5][2]) ? $expenditure[0]['tabledata'][5][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][5][3]) ? $expenditure[0]['tabledata'][5][3] . ' Lakhs' : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>Expenditure (Rural areas)</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $expenditure = field_get_items('node', $node, 'field_org_pr_expenditure_rural'); ?>
              <tr>
                <th width="25%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="25%">FY2015-16</th>
                <th width="25%">FY2014-15</th>
                <th width="25%">FY2013-14</th>
              </tr>
              <tr>
                <td>Project</td>
                <td><?php print isset($expenditure[0]['tabledata'][1][1]) ? $expenditure[0]['tabledata'][1][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][1][2]) ? $expenditure[0]['tabledata'][1][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][1][3]) ? $expenditure[0]['tabledata'][1][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Sub Grants</td>
                <td><?php print isset($expenditure[0]['tabledata'][2][1]) ? $expenditure[0]['tabledata'][2][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][2][2]) ? $expenditure[0]['tabledata'][2][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][2][3]) ? $expenditure[0]['tabledata'][2][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Administration</td>
                <td><?php print isset($expenditure[0]['tabledata'][3][1]) ? $expenditure[0]['tabledata'][3][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][3][2]) ? $expenditure[0]['tabledata'][3][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][3][3]) ? $expenditure[0]['tabledata'][3][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Others</td>
                <td><?php print isset($expenditure[0]['tabledata'][4][1]) ? $expenditure[0]['tabledata'][4][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][4][2]) ? $expenditure[0]['tabledata'][4][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][4][3]) ? $expenditure[0]['tabledata'][4][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Total Expenditure</td>
                <td><?php print isset($expenditure[0]['tabledata'][5][1]) ? $expenditure[0]['tabledata'][5][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][5][2]) ? $expenditure[0]['tabledata'][5][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($expenditure[0]['tabledata'][5][3]) ? $expenditure[0]['tabledata'][5][3] . ' Lakhs' : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>Income / Receipts (Domestic)</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $inc_receipt = field_get_items('node', $node, 'field_org_pr_income_domestic'); ?>
              <tr>
                <th width="25%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="25%">FY2015-16</th>
                <th width="25%">FY2014-15</th>
                <th width="25%">FY2013-14</th>
              </tr>
              <tr>
                <td>Grants and Donations</td>
                <td><?php print isset($inc_receipt[0]['tabledata'][1][1]) ? $inc_receipt[0]['tabledata'][1][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt[0]['tabledata'][1][2]) ? $inc_receipt[0]['tabledata'][1][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt[0]['tabledata'][1][3]) ? $inc_receipt[0]['tabledata'][1][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Direct Income</td>
                <td><?php print isset($inc_receipt[0]['tabledata'][2][1]) ? $inc_receipt[0]['tabledata'][2][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt[0]['tabledata'][2][2]) ? $inc_receipt[0]['tabledata'][2][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt[0]['tabledata'][2][3]) ? $inc_receipt[0]['tabledata'][2][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Interest earned and income from other sources</td>
                <td><?php print isset($inc_receipt[0]['tabledata'][3][1]) ? $inc_receipt[0]['tabledata'][3][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt[0]['tabledata'][3][2]) ? $inc_receipt[0]['tabledata'][3][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt[0]['tabledata'][3][3]) ? $inc_receipt[0]['tabledata'][3][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Total Domestic</td>
                <td><?php print isset($inc_receipt[0]['tabledata'][4][1]) ? $inc_receipt[0]['tabledata'][4][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt[0]['tabledata'][4][2]) ? $inc_receipt[0]['tabledata'][4][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt[0]['tabledata'][4][3]) ? $inc_receipt[0]['tabledata'][4][3] . ' Lakhs' : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>Income / Receipts (Foreign)</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $inc_receipt_foreign = field_get_items('node', $node, 'field_org_pr_income_foreign'); ?>
              <tr>
                <th width="25%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="25%">FY2015-16</th>
                <th width="25%">FY2014-15</th>
                <th width="25%">FY2013-14</th>
              </tr>
              <tr>
                <td>Grants and Donations</td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][1][1]) ? $inc_receipt_foreign[0]['tabledata'][1][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][1][2]) ? $inc_receipt_foreign[0]['tabledata'][1][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][1][3]) ? $inc_receipt_foreign[0]['tabledata'][1][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Direct Income</td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][2][1]) ? $inc_receipt_foreign[0]['tabledata'][2][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][2][2]) ? $inc_receipt_foreign[0]['tabledata'][2][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][2][3]) ? $inc_receipt_foreign[0]['tabledata'][2][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Interest earned and income from other sources</td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][3][1]) ? $inc_receipt_foreign[0]['tabledata'][3][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][3][2]) ? $inc_receipt_foreign[0]['tabledata'][3][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][3][3]) ? $inc_receipt_foreign[0]['tabledata'][3][3] . ' Lakhs' : ''; ?></td>
              </tr>
              <tr>
                <td>Total Foreign</td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][4][1]) ? $inc_receipt_foreign[0]['tabledata'][4][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][4][2]) ? $inc_receipt_foreign[0]['tabledata'][4][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($inc_receipt_foreign[0]['tabledata'][4][3]) ? $inc_receipt_foreign[0]['tabledata'][4][3] . ' Lakhs' : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>Receipts from all major sources of funding</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $receipts_mjr_src = field_get_items('node', $node, 'field_org_pr_receipts_mjr_src'); ?>
              <tr>
                <th width="20%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="20%">FY2015-16</th>
                <th width="20%">FY2014-15</th>
                <th width="20%">FY2013-14</th>
                <th width="20%">Key Donors (upto 5)</th>
              </tr>
              <tr>
                <td>Corporate</td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][1][1]) ? $receipts_mjr_src[0]['tabledata'][1][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][1][2]) ? $receipts_mjr_src[0]['tabledata'][1][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][1][3]) ? $receipts_mjr_src[0]['tabledata'][1][3] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][1][4]) ? $receipts_mjr_src[0]['tabledata'][1][4] : ''; ?></td>
              </tr>
              <tr>
                <td>Individual</td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][2][1]) ? $receipts_mjr_src[0]['tabledata'][2][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][2][2]) ? $receipts_mjr_src[0]['tabledata'][2][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][2][3]) ? $receipts_mjr_src[0]['tabledata'][2][3] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][2][4]) ? $receipts_mjr_src[0]['tabledata'][2][4] : ''; ?></td>
              </tr>
              <tr>
                <td>Institution</td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][3][1]) ? $receipts_mjr_src[0]['tabledata'][3][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][3][2]) ? $receipts_mjr_src[0]['tabledata'][3][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][3][3]) ? $receipts_mjr_src[0]['tabledata'][3][3] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][3][4]) ? $receipts_mjr_src[0]['tabledata'][3][4] : ''; ?></td>
              </tr>
              <tr>
                <td>Government</td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][4][1]) ? $receipts_mjr_src[0]['tabledata'][4][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][4][2]) ? $receipts_mjr_src[0]['tabledata'][4][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][4][3]) ? $receipts_mjr_src[0]['tabledata'][4][3] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][4][4]) ? $receipts_mjr_src[0]['tabledata'][4][4] : ''; ?></td>
              </tr>
              <tr>
                <td>Others</td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][5][1]) ? $receipts_mjr_src[0]['tabledata'][5][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][5][2]) ? $receipts_mjr_src[0]['tabledata'][5][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][5][3]) ? $receipts_mjr_src[0]['tabledata'][5][3] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][5][4]) ? $receipts_mjr_src[0]['tabledata'][5][4] : ''; ?></td>
              </tr>
              <tr>
                <td>Total Receipts</td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][6][1]) ? $receipts_mjr_src[0]['tabledata'][6][1] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][6][2]) ? $receipts_mjr_src[0]['tabledata'][6][2] . ' Lakhs' : ''; ?></td>
                <td><?php print isset($receipts_mjr_src[0]['tabledata'][6][3]) ? $receipts_mjr_src[0]['tabledata'][6][3] . ' Lakhs' : ''; ?></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <br>
          </div>
          <br>
          <div class="inner-section">
            <h2>Governance</h2>
            <p>1. Please indicate if any policy or manual has been developed and maintained by the organization for the following:</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
              <tr>
                <th>Process</th>
                <th>Yes / No / NA</th>
                <th>Remarks, if any</th>
              </tr>
              <tr>
                <td width="28%">Code of conduct</td>
                <td width="13%"><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_code_of_conduct')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_code_of_conduct')[0]['value'] : ''; ?></td>
                <td width="59%"><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_r_coc')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_r_coc')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Conflict of Interest</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_prog_gov_conf_of_int')[0]['value']) ? field_get_items('node', $node, 'field_org_prog_gov_conf_of_int')[0]['value'] : ''; ?></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_prog_gov_r_conf_of_int')[0]['value']) ? field_get_items('node', $node, 'field_org_prog_gov_r_conf_of_int')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Sexual Harassment</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_sexual_harass')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_sexual_harass')[0]['value'] : ''; ?></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_r_sexual_harass')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_r_sexual_harass')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Whistle Blower</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_whistle_blower')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_whistle_blower')[0]['value'] : ''; ?></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_r_whistle_blow')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_r_whistle_blow')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Corruption and Anti-Bribery</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_c_n_ab')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_c_n_ab')[0]['value'] : ''; ?></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_r_c_n_ab')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_r_c_n_ab')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Procurement</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_procurement')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_procurement')[0]['value'] : ''; ?></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_r_procurement')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_r_procurement')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Human Resource and Payroll</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_hr_n_payroll')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_hr_n_payroll')[0]['value'] : ''; ?></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_r_hr_n_payroll')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_r_hr_n_payroll')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Board Manual</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_board_manual')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_board_manual')[0]['value'] : ''; ?></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_r_board_manual')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_r_board_manual')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Finance and Accounts</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_fin_n_acc')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_fin_n_acc')[0]['value'] : ''; ?></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_r_fin_n_acc')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_r_fin_n_acc')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Child Protection<br>
                  <span style="font-size:11px;">(if working with children)</span></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_child_protect')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_child_protect')[0]['value'] : ''; ?></td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_gov_r_child_protect')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_gov_r_child_protect')[0]['value'] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>2. Please indicate the status of the followings in Yes or No</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
              <tr>
                <td width="52%">Have the profiles of Board Members been disclosed on the organization’s website?</td>
                <td width="48%"><?php print isset(field_get_items('node', $node, 'field_org_pr_of_mem_disclosed')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_of_mem_disclosed')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Does the board comprise of at least 1/3rd independent members?</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_brd_has_indi_mem')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_brd_has_indi_mem')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Does the board meet regularly (as per the provisions)?</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_board_meet')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_board_meet')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Are the minutes of board meetings documented, signed and circulated?</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_mom_documented')[0]['value']) ? field_get_items('node', $node, 'field_org_mom_documented')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Do the board members rotate after every 3-5 years?</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_brd_mem_rot_five_yr')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_brd_mem_rot_five_yr')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Does the Chairman of the Board rotate after every 3-5 years?</td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_chman_brd_rot')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_chman_brd_rot')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Is there any governing body / committee besides Board of Directors/Trustees?
                <p>If yes, please specify.</p>
                </td>
                <td><?php print isset(field_get_items('node', $node, 'field_org_pr_has_gov_body')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_has_gov_body')[0]['value'] : ''; ?>
                <p><?php print isset(field_get_items('node', $node, 'field_org_pr_specify_if_has_gov')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_specify_if_has_gov')[0]['value'] : ''; ?></p>
                </td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Program</h2>
            <p>1. Please provide details of the best 5 projects implemented in last Five years.
              <p>Brief narration on best projects either ongoing or completed in last 5 years. Organizations are recommended to give preference to projects implemented in the category they are applying for (Health/Education/Environment)</p>
            </p>
            <p>
            <p><?php print isset(field_get_items('node', $node, 'field_org_pr_detail_five_proj')[0]['value']) ? field_get_items('node', $node, 'field_org_pr_detail_five_proj')[0]['value'] : ''; ?></p>
            <p><?php print isset(field_get_items('node', $node, 'field_org_pr_detail_five_proj')[1]['value']) ? field_get_items('node', $node, 'field_org_pr_detail_five_proj')[1]['value'] : ''; ?></p>
            <p><?php print isset(field_get_items('node', $node, 'field_org_pr_detail_five_proj')[2]['value']) ? field_get_items('node', $node, 'field_org_pr_detail_five_proj')[2]['value'] : ''; ?></p>
            <p><?php print isset(field_get_items('node', $node, 'field_org_pr_detail_five_proj')[3]['value']) ? field_get_items('node', $node, 'field_org_pr_detail_five_proj')[3]['value'] : ''; ?></p>
            <p><?php print isset(field_get_items('node', $node, 'field_org_pr_detail_five_proj')[4]['value']) ? field_get_items('node', $node, 'field_org_pr_detail_five_proj')[4]['value'] : ''; ?></p>
            </p>
            <br>
            <p>2. Please tick the relevant themes on which organization is working</p>
            <p>
            <?php
              if (!empty(field_get_items('node', $node, 'field_org_pr_themes'))) {
                $org_working_themes_val = array();
                $org_working_themes = field_get_items('node', $node, 'field_org_pr_themes');
                foreach ($org_working_themes as $key => $org_working_theme) {
                  $org_working_themes_val[] = $org_working_theme['value'];
                }
              }
              if (!empty($org_working_themes_val)) {
                print implode(', ', $org_working_themes_val);
              }
            ?>
            </p>
            <p><?php print isset(field_get_items('node', $node, 'field_org_pr_other_theme')[0]['value']) ? 'Other: ' . field_get_items('node', $node, 'field_org_pr_other_theme')[0]['value'] : ''; ?></p>
          </div>
        <br>
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
