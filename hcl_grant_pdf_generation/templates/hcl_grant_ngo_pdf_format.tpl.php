<?php
/**
 * @file
 * Template for ngo pdf.
 */

$lang = $node->language;

$states_india = array(
  'AP' => 'Andhra Pradesh',
  'AR' => 'Arunachal Pradesh',
  'AS' => 'Assam',
  'BR' => 'Bihar',
  'CT' => 'Chhattisgarh',
  'GA' => 'Goa',
  'GJ' => 'Gujarat',
  'HR' => 'Haryana',
  'HP' => 'Himachal Pradesh',
  'JK' => 'Jammu and Kashmir',
  'JH' => 'Jharkhand',
  'KA' => 'Karnataka',
  'KL' => 'Kerala',
  'MP' => 'Madhya Pradesh',
  'MH' => 'Maharashtra',
  'MN' => 'Manipur',
  'ML' => 'Meghalaya',
  'MZ' => 'Mizoram',
  'NL' => 'Nagaland',
  'OR' => 'Odisha',
  'PB' => 'Punjab',
  'RJ' => 'Rajasthan',
  'SK' => 'Sikkim',
  'TN' => 'Tamil Nadu',
  'TG' => 'Telangana',
  'TR' => 'Tripura',
  'UT' => 'Uttarakhand',
  'UP' => 'Uttar Pradesh',
  'WB' => 'West Bengal',
  'AN' => 'Andaman and Nicobar Islands',
  'CH' => 'Chandigarh',
  'DN' => 'Dadra and Nagar Haveli',
  'DD' => 'Daman and Diu',
  'DL' => 'Delhi',
  'LD' => 'Lakshadweep',
  'PY' => 'Puducherry',
);
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
                <td width="25%">Organization name</td>
                <td width="75%" colspan="3"><?php print $node->title; ?></td>
              </tr>
              <tr>
                <td width="25%">Registered address</td>
                <td width="75%" colspan="3"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gen_regi_add')) ? field_get_items('node', $node, 'field_ct_ngo_gen_regi_add')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="25%">City</td>
                <td width="25%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_reg_city')) ? field_get_items('node', $node, 'field_ct_ngo_reg_city')[0]['value'] : ''; ?></td>
                <td width="25%">State</td>
                <td width="25%">
                <?php
                  if (!empty(field_get_items('node', $node, 'field_ct_ngo_reg_state'))) {
                    $reg_state = field_get_items('node', $node, 'field_ct_ngo_reg_state')[0]['value'];
                    print $states_india[$reg_state];
                  }
                ?>
                </td>
              </tr>
              <tr>
                <td width="25%">Correspondence Address</td>
                <td width="75%" colspan="3"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gen_corr_add')) ? field_get_items('node', $node, 'field_ct_ngo_gen_corr_add')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="25%">City</td>
                <td width="25%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_city')) ? field_get_items('node', $node, 'field_ct_ngo_city')[0]['value'] : ''; ?></td>
                <td width="25%">State</td>
                <td width="25%">
                <?php
                  if (!empty(field_get_items('node', $node, 'field_ct_ngo_state'))) {
                    $corr_state = field_get_items('node', $node, 'field_ct_ngo_state')[0]['value'];
                    print $states_india[$corr_state];
                  }
                ?>
                </td>
              </tr>
              <tr>
                <td width="25%">Contact number</td>
                <td width="25%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_contact_number')) ? field_get_items('node', $node, 'field_ct_ngo_contact_number')[0]['value'] : ''; ?></td>
                <td width="25%">Website</td>
                <td width="25%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_website_exists')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td width="25%">Contact person</td>
                <td width="25%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_general_name')) ? field_get_items('node', $node, 'field_ct_ngo_general_name')[0]['value'] : ''; ?></td>
                <td width="25%">Mobile number</td>
                <td width="25%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gen_mobile_number')) ? field_get_items('node', $node, 'field_ct_ngo_gen_mobile_number')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="25%">Designation</td>
                <td width="25%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_desig_of_contact')) ? field_get_items('node', $node, 'field_ct_ngo_desig_of_contact')[0]['value'] : ''; ?></td>
                <td width="25%">Email address</td>
                <td width="25%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_email_of_contact')) ? field_get_items('node', $node, 'field_ct_ngo_email_of_contact')[0]['email'] : ''; ?></td>
              </tr>
              <tr>
                <td width="25%">Website link</td>
                <td width="75%" colspan="3"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_email_of_contact')) ? field_get_items('node', $node, 'field_ct_ngo_website')[0]['value'] : ''; ?></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Legal status and registrations</h2>
            <table border="0" cellspacing="0" width="100%" class="tbl">
              <tr>
                <td width="15%" valign="top">Year of registration</td>
                <td colspan="2" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_year_of_reg')) ? field_get_items('node', $node, 'field_ct_ngo_year_of_reg')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="15%" valign="top">Type of registration (tick the   applicable option)</td>
                <td valign="top">
                <?php
                  if (!empty(field_get_items('node', $node, 'field_ct_ngo_type_of_reg'))) {
                    $type_of_reg = field_get_items('node', $node, 'field_ct_ngo_type_of_reg')[0]['value'];
                    $type_of_registrations = array(
                      'trust ' => 'Trust',
                      'society ' => 'Society',
                      'section_25_or_section_8_company ' => 'Section 25 or Section 8 company',
                    );
                    print $type_of_registrations[$type_of_reg];
                  }
                ?>
                </td>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="15%" valign="top">PAN</td>
                <td width="35%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_pan_reg_no')) ? field_get_items('node', $node, 'field_ct_ngo_pan_reg_no')[0]['value'] : ''; ?></td>
                <td width="50%" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="15%" valign="top">TAN</td>
                <td width="35%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_tan_reg_no')) ? field_get_items('node', $node, 'field_ct_ngo_tan_reg_no')[0]['value'] : ''; ?></td>
                <td width="50%" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="15%" rowspan="2" valign="top">Tick all that apply</td>
                <td valign="top">
                <?php
                if (!empty(field_get_items('node', $node, 'field_ct_ngo_tick_all_that_apply'))) {
                  $values = array();
                  $items = field_get_items('node', $node, 'field_ct_ngo_tick_all_that_apply');
                  foreach ($items as $key => $item) {
                    $tick_all_options = array(
                      '12aa ' => '12A (A)',
                      '80g ' => '80G',
                      '35A C ' => '35A C',
                    );
                    $values[] = $tick_all_options[$item['value']];
                  }
                  print(implode(', ', $values));
                }
                ?></td>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td valign="top">Any other please specify</td>
                <td valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_other_value')) ? field_get_items('node', $node, 'field_ct_ngo_other_value')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="15%" rowspan="3" valign="top">Registration under the   Employees Provident Funds and Miscellaneous Provisions Act, 1952</td>
                <td width="85%" colspan="2"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_emp_provi_funds_app')[0]['value']) ? 'Applicable' : 'Not Applicable'; ?></td>
              </tr>
              <tr>
                <td width="35%" valign="top">Date of registration</td>
                <td width="50%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_date_of_epf_reg')) ? field_get_items('node', $node, 'field_ct_ngo_date_of_epf_reg')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="35%" valign="top">Registration number</td>
                <td width="50%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_epf_reg_no')) ? field_get_items('node', $node, 'field_ct_ngo_epf_reg_no')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="15%" rowspan="3" valign="top">Registration under the   Professional Tax Act (if applicable)</td>
                <td width="85%" colspan="2"><?php print !empty(field_get_items('node', $node, 'field_c_ngo_pta_applicable')[0]['value']) ? 'Applicable' : 'Not Applicable'; ?></td>
              </tr>
              <tr>
                <td width="35%" valign="top">Date of registration</td>
                <td width="50%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_date_of_pta_reg')) ? field_get_items('node', $node, 'field_ct_ngo_date_of_pta_reg')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="35%" valign="top">Registration number</td>
                <td width="50%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_pta_reg_no')) ? field_get_items('node', $node, 'field_ct_ngo_pta_reg_no')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="15%" rowspan="3" valign="top">Registration under FCRA 2010   (applicable to organizations receiving contribution from sources outside   India)</td>
                <td width="85%" colspan="2"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_fcra_applicable')[0]['value']) ? 'Applicable' : 'Not Applicable'; ?></td>
              </tr>
              <tr>
                <td width="35%" valign="top">Date of registration</td>
                <td width="50%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_date_of_fcra_reg')) ? field_get_items('node', $node, 'field_ct_ngo_date_of_fcra_reg')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td width="35%" valign="top">Registration number</td>
                <td width="50%" valign="top"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_fcra_reg_no')) ? field_get_items('node', $node, 'field_ct_ngo_fcra_reg_no')[0]['value'] : ''; ?></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Organization profile</h2>
            <p>
              <label>1. Brief narrative about the organization</label>
            </p>
            <p>
              <?php print !empty(field_get_items('node', $node, 'field_ct_ngo_brief_about_org')) ? field_get_items('node', $node, 'field_ct_ngo_brief_about_org')[0]['value'] : ''; ?>
            </p>
            <p>
              <label>2. Vision and mission</label>
            </p>
            <p>
              <?php print !empty(field_get_items('node', $node, 'field_ct_ngo_vision_and_mission')) ? field_get_items('node', $node, 'field_ct_ngo_vision_and_mission')[0]['value'] : ''; ?>
            </p>
            <p>
              <label>3. Objectives of the organization</label>
            </p>
            <p>
              <?php print !empty(field_get_items('node', $node, 'field_ct_ngo_obj_of_the_org')) ? field_get_items('node', $node, 'field_ct_ngo_obj_of_the_org')[0]['value'] : ''; ?>
            </p>
            <p>
              <label>4. Organization strategy to achieve vision, mission and objective</label>
            </p>
            <p>
              <?php print !empty(field_get_items('node', $node, 'field_ct_ngo_org_str_v_m_obj')) ? field_get_items('node', $node, 'field_ct_ngo_org_str_v_m_obj')[0]['value'] : ''; ?>
            </p>
            <p>
              <label>5. Geographic reach of the organization</label>
            </p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="myTable" class="tbl">
              <tr>
                <th width="93%">Offices (including State, Field, Project, etc.)</th>
              </tr>
              <?php
                $locations = array();
                $geo_locations = field_get_items('node', $node, 'field_ct_ngo_offices');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($geo_locations)) {
                  foreach ($geo_locations as $geo_location) {
                    $ids[] = $geo_location['value'];
                  }
                  $locations_collection = field_collection_item_load_multiple($ids);
                  foreach ($locations_collection as $key => $location_item) {
                    $locations[] = $location_item->field_field_ct_ngo_geo_reach[$lang][0]['value'];
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
                $coverage_fields = field_get_items('node', $node, 'field_ct_ngo_proj_prog_cov');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($coverage_fields)) {
                  foreach ($coverage_fields as $coverage_field) {
                    $ids[] = $coverage_field['value'];
                  }
                  $coverage_collections = field_collection_item_load_multiple($ids);
                  foreach ($coverage_collections as $key => $coverage_collection) {
                    $coverage[$key]['states_covered'] = !empty($coverage_collection->field_ct_ngo_name_of_state) ? $coverage_collection->field_ct_ngo_name_of_state[$lang][0]['value'] : '';
                    $coverage[$key]['no_of_villages'] = !empty($coverage_collection->field_ct_ngo_no_of_villages_cov) ? $coverage_collection->field_ct_ngo_no_of_villages_cov[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($coverage)): ?>
                <?php foreach ($coverage as $coverage_item): ?>
                  <tr>
                    <td><?php print !empty($coverage_item['states_covered']) ? $coverage_item['states_covered'] : ''; ?></td>
                    <td><?php print !empty($coverage_item['no_of_villages']) ? $coverage_item['no_of_villages'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>6. Details about any major awards and recognitions received by the organization in the last FIVE years</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="myTable1" class="tbl">
              <tr>
                <th width="20%" class="sub-hed">Name of the award</th>
                <th width="20%" class="sub-hed">Name of the organization awarding / facilitating</th>
                <th width="20%" class="sub-hed">Award brief</th>
                <th width="20%" class="sub-hed">Year of Award</th>
              </tr>
              <?php
                $awards_fields = field_get_items('node', $node, 'field_ct_ngo_details_abt_awards');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($awards_fields)) {
                  foreach ($awards_fields as $awards_field) {
                    $ids[] = $awards_field['value'];
                  }
                  $awards_collections = field_collection_item_load_multiple($ids);
                  foreach ($awards_collections as $key => $awards_collection) {
                    $awards[$key]['awrd_name'] = !empty($awards_collection->field_ngo_name_of_the_award) ? $awards_collection->field_ngo_name_of_the_award[$lang][0]['value'] : '';
                    $awards[$key]['name_org'] = !empty($awards_collection->field_ngo_name_of_the_org) ? $awards_collection->field_ngo_name_of_the_org[$lang][0]['value'] : '';
                    $awards[$key]['awrd_brief'] = !empty($awards_collection->field_ngo_award_brief) ? $awards_collection->field_ngo_award_brief[$lang][0]['value'] : '';
                    $awards[$key]['yr_awrd'] = !empty($awards_collection->field_ngo_year_of_award) ? $awards_collection->field_ngo_year_of_award[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($awards)): ?>
                <?php foreach ($awards as $awards_item): ?>
                  <tr>
                    <td><?php print !empty($awards_item['awrd_name']) ? $awards_item['awrd_name'] : ''; ?></td>
                    <td><?php print !empty($awards_item['name_org']) ? $awards_item['name_org'] : ''; ?></td>
                    <td><?php print !empty($awards_item['awrd_brief']) ? $awards_item['awrd_brief'] : ''; ?></td>
                    <td><?php print !empty($awards_item['yr_awrd']) ? $awards_item['yr_awrd'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Organization structure</h2>
            <p>1.Provide details about the governing body / Board</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="myTable3" class="tbl">
              <tr>
                <th width="19%">Name </th>
                <th width="19%">Age</th>
                <th width="19%">Designation</th>
                <th width="19%">No. of years with the organization</th>
                <th width="19%">Highest educational qualification</th>
              </tr>
              <?php
                $org_str_fields = field_get_items('node', $node, 'field_ct_ngo_provide_det_board');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($org_str_fields)) {
                  foreach ($org_str_fields as $org_str_field) {
                    $ids[] = $org_str_field['value'];
                  }
                  $org_str_collections = field_collection_item_load_multiple($ids);
                  foreach ($org_str_collections as $key => $org_str_collection) {
                    $org_str[$key]['name'] = !empty($org_str_collection->field_ct_ngo_board_mem_name) ? $org_str_collection->field_ct_ngo_board_mem_name[$lang][0]['value'] : '';
                    $org_str[$key]['age'] = !empty($org_str_collection->field_ct_ngo_board_mem_age) ? $org_str_collection->field_ct_ngo_board_mem_age[$lang][0]['value'] : '';
                    $org_str[$key]['designation'] = !empty($org_str_collection->field_ct_ngo_brd_mem_designation) ? $org_str_collection->field_ct_ngo_brd_mem_designation[$lang][0]['value'] : '';
                    $org_str[$key]['yrs_with_org'] = !empty($org_str_collection->field_ct_ngo_brd_yr_with_org) ? $org_str_collection->field_ct_ngo_brd_yr_with_org[$lang][0]['value'] : '';
                    $org_str[$key]['edu'] = !empty($org_str_collection->field_ct_ngo_brd_high_edu_qua) ? $org_str_collection->field_ct_ngo_brd_high_edu_qua[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($org_str)): ?>
                <?php foreach ($org_str as $org_str_item): ?>
                  <tr>
                    <td><?php print !empty($org_str_item['name']) ? $org_str_item['name'] : ''; ?></td>
                    <td><?php print !empty($org_str_item['age']) ? $org_str_item['age'] : ''; ?></td>
                    <td><?php print !empty($org_str_item['designation']) ? $org_str_item['designation'] : ''; ?></td>
                    <td><?php print !empty($org_str_item['yrs_with_org']) ? $org_str_item['yrs_with_org'] : ''; ?></td>
                    <td><?php print !empty($org_str_item['edu']) ? $org_str_item['edu'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <br>
            <p>2. Number of employees in the organization</p>
            <?php $no_of_emp_in_org = field_get_items('node', $node, 'field_ct_ngo_no_emp_in_org'); ?>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
              <tr>
                <th width="25%">Number of employee</th>
                <th width="25%">Permanent staff</th>
                <th width="25%">Contractual Staff</th>
                <th width="25%">Other staff members on non-payment basis (Advisors, Mentors, Volunteers, etc)</th>
              </tr>
              <tr>
                <td>Management Staff</td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][1][1]) ? $no_of_emp_in_org[0]['tabledata'][1][1] : ''; ?></td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][1][2]) ? $no_of_emp_in_org[0]['tabledata'][1][2] : ''; ?></td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][1][3]) ? $no_of_emp_in_org[0]['tabledata'][1][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Program / Technical / Field Staff</td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][2][1]) ? $no_of_emp_in_org[0]['tabledata'][2][1] : ''; ?></td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][2][2]) ? $no_of_emp_in_org[0]['tabledata'][2][2] : ''; ?></td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][2][3]) ? $no_of_emp_in_org[0]['tabledata'][2][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Administrative Staff</td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][3][1]) ? $no_of_emp_in_org[0]['tabledata'][3][1] : ''; ?></td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][3][2]) ? $no_of_emp_in_org[0]['tabledata'][3][2] : ''; ?></td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][3][3]) ? $no_of_emp_in_org[0]['tabledata'][3][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Total</td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][4][1]) ? $no_of_emp_in_org[0]['tabledata'][4][1] : ''; ?></td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][4][2]) ? $no_of_emp_in_org[0]['tabledata'][4][2] : ''; ?></td>
                <td><?php print !empty($no_of_emp_in_org[0]['tabledata'][4][3]) ? $no_of_emp_in_org[0]['tabledata'][4][3] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>3. Provide details about the key employees of the organization</p>
            <p>Chief functionaries and functional specialists (may include Strategy, Programs, Thematic experts, Research, Monitoring, Evaluation, Documentation, Finance, Resource Mobilisation, Resource development, among others)</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" id="myTable4" class="tbl">
              <tr>
                <th width="19%">Name</th>
                <th width="19%">Field of specialization</th>
                <th width="19%">Permanent or Contractual</th>
                <th width="19%">Years of exp.</th>
                <th width="19%">Highest education qualification</th>
              </tr>
              <?php
                $key_emp_fields = field_get_items('node', $node, 'field_ct_ngo_det_abt_emp_org');
                // Extract the field collection item ids
                $ids = array();
                if (!empty($key_emp_fields)) {
                  foreach ($key_emp_fields as $key_emp_field) {
                    $ids[] = $key_emp_field['value'];
                  }
                  $key_emp_collections = field_collection_item_load_multiple($ids);
                  foreach ($key_emp_collections as $key => $key_emp_collection) {
                    $key_emp[$key]['name'] = !empty($key_emp_collection->field_ct_ngo_det_emp_org_name) ? $key_emp_collection->field_ct_ngo_det_emp_org_name[$lang][0]['value'] : '';
                    $key_emp[$key]['spec'] = !empty($key_emp_collection->field_ct_ngo_det_org_field_spec) ? $key_emp_collection->field_ct_ngo_det_org_field_spec[$lang][0]['value'] : '';
                    $key_emp[$key]['prm_or_contrct'] = !empty($key_emp_collection->field_ct_ngo_det_org_prm_contrct) ? $key_emp_collection->field_ct_ngo_det_org_prm_contrct[$lang][0]['value'] : '';
                    $key_emp[$key]['yrs_exp'] = !empty($key_emp_collection->field_ct_ngo_det_org_yr_exp) ? $key_emp_collection->field_ct_ngo_det_org_yr_exp[$lang][0]['value'] : '';
                    $key_emp[$key]['edu'] = !empty($key_emp_collection->field_ct_ngo_det_org_high_edu) ? $key_emp_collection->field_ct_ngo_det_org_high_edu[$lang][0]['value'] : '';
                  }
                }
              ?>
              <?php if (!empty($key_emp)): ?>
                <?php foreach ($key_emp as $key_emp_item): ?>
                  <tr>
                    <td><?php print !empty($key_emp_item['name']) ? $key_emp_item['name'] : ''; ?></td>
                    <td><?php print !empty($key_emp_item['spec']) ? $key_emp_item['spec'] : ''; ?></td>
                    <td><?php print !empty($key_emp_item['prm_or_contrct']) ? $key_emp_item['prm_or_contrct'] : ''; ?></td>
                    <td><?php print !empty($key_emp_item['yrs_exp']) ? $key_emp_item['yrs_exp'] : ''; ?></td>
                    <td><?php print !empty($key_emp_item['edu']) ? $key_emp_item['edu'] : ''; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Financial information</h2>
            <p>1. Key financial figures (please use the format below to provide the relevant details)</p>
            <p>Expenditure</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $expenditure = field_get_items('node', $node, 'field_ct_ngo_expenditure'); ?>
              <tr>
                <th width="25%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="25%">FY2015-16</th>
                <th width="25%">FY2014-15</th>
                <th width="25%">FY2013-14</th>
              </tr>
              <tr>
                <td>Project</td>
                <td><?php print !empty($expenditure[0]['tabledata'][1][1]) ? $expenditure[0]['tabledata'][1][1] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][1][2]) ? $expenditure[0]['tabledata'][1][2] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][1][3]) ? $expenditure[0]['tabledata'][1][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Sub Grants</td>
                <td><?php print !empty($expenditure[0]['tabledata'][2][1]) ? $expenditure[0]['tabledata'][2][1] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][2][2]) ? $expenditure[0]['tabledata'][2][2] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][2][3]) ? $expenditure[0]['tabledata'][2][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Administration</td>
                <td><?php print !empty($expenditure[0]['tabledata'][3][1]) ? $expenditure[0]['tabledata'][3][1] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][3][2]) ? $expenditure[0]['tabledata'][3][2] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][3][3]) ? $expenditure[0]['tabledata'][3][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Others</td>
                <td><?php print !empty($expenditure[0]['tabledata'][4][1]) ? $expenditure[0]['tabledata'][4][1] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][4][2]) ? $expenditure[0]['tabledata'][4][2] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][4][3]) ? $expenditure[0]['tabledata'][4][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Total Expenditure</td>
                <td><?php print !empty($expenditure[0]['tabledata'][5][1]) ? $expenditure[0]['tabledata'][5][1] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][5][2]) ? $expenditure[0]['tabledata'][5][2] : ''; ?></td>
                <td><?php print !empty($expenditure[0]['tabledata'][5][3]) ? $expenditure[0]['tabledata'][5][3] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>Income / Receipts (Domestic)</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $inc_receipt = field_get_items('node', $node, 'field_ct_ngo_income_domestic'); ?>
              <tr>
                <th width="25%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="25%">FY2015-16</th>
                <th width="25%">FY2014-15</th>
                <th width="25%">FY2013-14</th>
              </tr>
              <tr>
                <td>Grants and Donations</td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][1][1]) ? $inc_receipt[0]['tabledata'][1][1] : ''; ?></td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][1][2]) ? $inc_receipt[0]['tabledata'][1][2] : ''; ?></td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][1][3]) ? $inc_receipt[0]['tabledata'][1][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Direct Income</td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][2][1]) ? $inc_receipt[0]['tabledata'][2][1] : ''; ?></td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][2][2]) ? $inc_receipt[0]['tabledata'][2][2] : ''; ?></td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][2][3]) ? $inc_receipt[0]['tabledata'][2][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Interest earned and income from other sources</td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][3][1]) ? $inc_receipt[0]['tabledata'][3][1] : ''; ?></td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][3][2]) ? $inc_receipt[0]['tabledata'][3][2] : ''; ?></td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][3][3]) ? $inc_receipt[0]['tabledata'][3][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Total Domestic</td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][4][1]) ? $inc_receipt[0]['tabledata'][4][1] : ''; ?></td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][4][2]) ? $inc_receipt[0]['tabledata'][4][2] : ''; ?></td>
                <td><?php print !empty($inc_receipt[0]['tabledata'][4][3]) ? $inc_receipt[0]['tabledata'][4][3] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>Income / Receipts (Foreign)</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $inc_receipt_foreign = field_get_items('node', $node, 'field_ct_ngo_income_foreign'); ?>
              <tr>
                <th width="25%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="25%">FY2015-16</th>
                <th width="25%">FY2014-15</th>
                <th width="25%">FY2013-14</th>
              </tr>
              <tr>
                <td>Grants and Donations</td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][1][1]) ? $inc_receipt_foreign[0]['tabledata'][1][1] : ''; ?></td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][1][2]) ? $inc_receipt_foreign[0]['tabledata'][1][2] : ''; ?></td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][1][3]) ? $inc_receipt_foreign[0]['tabledata'][1][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Direct Income</td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][2][1]) ? $inc_receipt_foreign[0]['tabledata'][2][1] : ''; ?></td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][2][2]) ? $inc_receipt_foreign[0]['tabledata'][2][2] : ''; ?></td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][2][3]) ? $inc_receipt_foreign[0]['tabledata'][2][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Interest earned and income from other sources</td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][3][1]) ? $inc_receipt_foreign[0]['tabledata'][3][1] : ''; ?></td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][3][2]) ? $inc_receipt_foreign[0]['tabledata'][3][2] : ''; ?></td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][3][3]) ? $inc_receipt_foreign[0]['tabledata'][3][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Total Foreign</td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][4][1]) ? $inc_receipt_foreign[0]['tabledata'][4][1] : ''; ?></td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][4][2]) ? $inc_receipt_foreign[0]['tabledata'][4][2] : ''; ?></td>
                <td><?php print !empty($inc_receipt_foreign[0]['tabledata'][4][3]) ? $inc_receipt_foreign[0]['tabledata'][4][3] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>2. Total expenditure spent on projects in rural areas (last three financial years)</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $tot_exp_rural = field_get_items('node', $node, 'field_ct_ngo_exp_spent_on_rural'); ?>
              <tr>
                <th width="25%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="25%">FY2015-16</th>
                <th width="25%">FY2014-15</th>
                <th width="25%">FY2013-14</th>
              </tr>
              <tr>
                <td>Project</td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][1][1]) ? $tot_exp_rural[0]['tabledata'][1][1] : ''; ?></td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][1][2]) ? $tot_exp_rural[0]['tabledata'][1][2] : ''; ?></td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][1][3]) ? $tot_exp_rural[0]['tabledata'][1][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Administration</td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][2][1]) ? $tot_exp_rural[0]['tabledata'][2][1] : ''; ?></td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][2][2]) ? $tot_exp_rural[0]['tabledata'][2][2] : ''; ?></td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][2][3]) ? $tot_exp_rural[0]['tabledata'][2][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Others</td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][3][1]) ? $tot_exp_rural[0]['tabledata'][3][1] : ''; ?></td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][3][2]) ? $tot_exp_rural[0]['tabledata'][3][2] : ''; ?></td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][3][3]) ? $tot_exp_rural[0]['tabledata'][3][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Total</td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][4][1]) ? $tot_exp_rural[0]['tabledata'][4][1] : ''; ?></td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][4][2]) ? $tot_exp_rural[0]['tabledata'][4][2] : ''; ?></td>
                <td><?php print !empty($tot_exp_rural[0]['tabledata'][4][3]) ? $tot_exp_rural[0]['tabledata'][4][3] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>3. Receipts from all major sources of funding </p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
            <?php $receipts_mjr_src = field_get_items('node', $node, 'field_ct_ngo_receipts_major_src'); ?>
              <tr>
                <th width="25%">(all figures in <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> Lakhs)</th>
                <th width="25%">FY2015-16</th>
                <th width="25%">FY2014-15</th>
                <th width="25%">FY2013-14</th>
              </tr>
              <tr>
                <td>Corporate</td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][1][1]) ? $receipts_mjr_src[0]['tabledata'][1][1] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][1][2]) ? $receipts_mjr_src[0]['tabledata'][1][2] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][1][3]) ? $receipts_mjr_src[0]['tabledata'][1][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Individual</td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][2][1]) ? $receipts_mjr_src[0]['tabledata'][2][1] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][2][2]) ? $receipts_mjr_src[0]['tabledata'][2][2] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][2][3]) ? $receipts_mjr_src[0]['tabledata'][2][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Institution</td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][3][1]) ? $receipts_mjr_src[0]['tabledata'][3][1] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][3][2]) ? $receipts_mjr_src[0]['tabledata'][3][2] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][3][3]) ? $receipts_mjr_src[0]['tabledata'][3][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Government</td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][4][1]) ? $receipts_mjr_src[0]['tabledata'][4][1] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][4][2]) ? $receipts_mjr_src[0]['tabledata'][4][2] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][4][3]) ? $receipts_mjr_src[0]['tabledata'][4][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Others</td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][5][1]) ? $receipts_mjr_src[0]['tabledata'][5][1] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][5][2]) ? $receipts_mjr_src[0]['tabledata'][5][2] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][5][3]) ? $receipts_mjr_src[0]['tabledata'][5][3] : ''; ?></td>
              </tr>
              <tr>
                <td>Total Receipts</td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][6][1]) ? $receipts_mjr_src[0]['tabledata'][6][1] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][6][2]) ? $receipts_mjr_src[0]['tabledata'][6][2] : ''; ?></td>
                <td><?php print !empty($receipts_mjr_src[0]['tabledata'][6][3]) ? $receipts_mjr_src[0]['tabledata'][6][3] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>4. List FIVE major donors of last Five Years (mention names of the donors only)</p>
            <p>
              <?php print !empty(field_get_items('node', $node, 'field_ct_ngo_five_major_donors')) ? field_get_items('node', $node, 'field_ct_ngo_five_major_donors')[0]['value'] : ''; ?>
            </p>
            <br>
            <p>5. Key financial management controls</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
              <tr>
                <td width="15%">Approval matrix</td>
                <td width="85%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_approval_matrix')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Segregation of duties</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_segregation_duties')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Reporting mechanism</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_reporting_mechanism')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Key policies</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_key_policies')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Process narratives</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_process_narratives')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Formats and templates</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_formats_and_tpl')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td class="blue-strip" colspan="2">Do the controls cover the following areas</td>
              </tr>
              <tr>
                <td>Budget</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_controls_budget')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Account receivables</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_ctrl_acc_receivable')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Account payables</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_ctrl_acc_payables')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Bank</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_controls_bank')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td width="15%">Cash</td>
                <td width="85%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_controls_cash')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Investments</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_ctrl_investments')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Common cost</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_ctrl_common_cost')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Audit</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_controls_audit')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Statutory and other compliances</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_sttry_othr_comp')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Loans and advances</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_loans_and_advances')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Record keeping</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_record_keeping')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Fixed assets and depreciation</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_fixed_assets_deprec')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Sub granting</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_sub_granting')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Reporting</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_reporting')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Governance</h2>
            <p>1. Please indicate if any policy or manual has been developed and maintained by the organization for the following:</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
              <tr>
                <th>Process</th>
                <th>Yes / No </th>
                <th>Remarks, if any</th>
              </tr>
              <tr>
                <td width="28%">Code of conduct</td>
                <td width="13%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_code_of_conduct')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td width="59%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_code_cond_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_gov_code_cond_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Conflict of Interest</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_conflict_of_int')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_conf_int_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_gov_conf_int_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Sexual Harassment</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_sexual_hrsmnt')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_sex_hrsmnt_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_gov_sex_hrsmnt_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Whistle Blower</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_whistle_blower')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_whistle_bl_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_gov_whistle_bl_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Corruption and Anti-Bribery</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_corr_anti_brbry')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_corr_brbry_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_gov_corr_brbry_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Procurement</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_procurement')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_prcrmnt_remark')) ? field_get_items('node', $node, 'field_ct_ngo_gov_prcrmnt_remark')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Human Resource and Payroll</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_hr_and_payroll')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_hr_payroll_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_gov_hr_payroll_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Board Manual</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_board_manual')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_brd_manual_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_gov_brd_manual_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Child Protection<br>
                  <span style="font-size:11px;">(if working with children)</span></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_child_protect')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_gov_child_prct_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_gov_child_prct_rmrk')[0]['value'] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>2. Please indicate the status of the followings in Yes or No</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
              <tr>
                <td width="52%">Have the profiles of Board Members been disclosed on the organization’s website?</td>
                <td width="48%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_profile_bm_on_web')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Does the board comprise of at least 2/3rd independent members?</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_board_com_inde_mem')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Does the board meet regularly (as per the provisions)?</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_board_meet_regulaly')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Are the minutes of board meetings documented, signed and circulated?</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_min_of_brd_mtng_sig')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Do the board members rotate after every 3 years?</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_brd_mem_rotate')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Does the Chairman of the Board rotate after every 3 years?</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_chrm_of_the_brd_rot')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
              <tr>
                <td>Is there any governing body / committee besides Board of Directors/Trustees?</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_any_othr_gov_beside_bd')[0]['value']) ? 'Yes' : 'No'; ?></td>
              </tr>
            </table>
          </div>
          <br>
          <br>
          <div class="inner-section">
            <h2>Program</h2>
            <p>1. Please provide details of the best projects implemented in last Five years. (maximum 5 projects)</p>
            <p>
            <?php print !empty(field_get_items('node', $node, 'field_ct_ngo_5_best_proj')) ? field_get_items('node', $node, 'field_ct_ngo_5_best_proj')[0]['value'] : ''; ?>
            </p>
            <p>2. Please provide details of the best projects implemented in last Five years on the theme applied for? (maximum 5 projects)</p>
            <p>
            <?php print !empty(field_get_items('node', $node, 'field_ct_ngo_5_best_proj_theme')) ? field_get_items('node', $node, 'field_ct_ngo_5_best_proj_theme')[0]['value'] : ''; ?>
            </p>
            <p>3. Please indicate if any policy or manual has been developed and maintained by the organization for the followings:</p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl">
              <tr>
                <th>Process</th>
                <th>Yes / No </th>
                <th>Remarks, if any</th>
              </tr>
              <tr>
                <td width="28%">Need assessment</td>
                <td width="13%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_proog_need_assmnt')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td width="59%"><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_prog_assmnt_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_prog_assmnt_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Monitoring and Evaluation</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_monitoring_and_eval')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_moni_and_eval_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_moni_and_eval_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Impact assessment</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_impact_assessment')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_impact_assmnt_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_impact_assmnt_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Quality assurance</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_quality_ass')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_quality_ass_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_quality_ass_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Grant utilization</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_grant_utilization')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_grant_utili_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_grant_utili_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Donor reporting</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_donor_reporting')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_donor_report_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_donor_report_rmrk')[0]['value'] : ''; ?></td>
              </tr>
              <tr>
                <td>Sub-Partner due diligence and audits</td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_sub_prtr_due_dlgnc')[0]['value']) ? 'Yes' : 'No'; ?></td>
                <td><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_sub_prtr_dlgnc_rmrk')) ? field_get_items('node', $node, 'field_ct_ngo_sub_prtr_dlgnc_rmrk')[0]['value'] : ''; ?></td>
              </tr>
            </table>
            <br>
            <p>4. Please tick the relevant themes on which organization is working</p>
            <p>
            <?php
              if (!empty(field_get_items('node', $node, 'field_ct_ngo_tick_relevant_theme'))) {
                $org_working_themes_val = array();
                $org_working_themes = field_get_items('node', $node, 'field_ct_ngo_tick_relevant_theme');
                foreach ($org_working_themes as $key => $org_working_theme) {
                $relevant_themes = array(
                  'education ' => 'Education',
                  'healthcare ' => 'Healthcare',
                  'environment ' => 'Environment',
                  'livelihood ' => 'Livelihood',
                  'disaster_relief ' => 'Disaster relief',
                  'animal_welfare ' => 'Animal welfare',
                  'rural_development ' => 'Rural development',
                  'technology_incubation ' => 'Technology incubation',
                  'gender_equality ' => 'Gender equality',
                  'art_and_culture ' => 'Art and culture',
                  'sports ' => 'Sports',
                  'poverty_and_hunger ' => 'Poverty and Hunger',
                  'others ' => 'Others',
                  );
                  $org_working_themes_val[] = $relevant_themes[$org_working_theme['value']];
                }
              }
              if (!empty($org_working_themes_val)) {
                print implode(', ', $org_working_themes_val);
              }
            ?>
            </p>
            <p><?php print !empty(field_get_items('node', $node, 'field_ct_ngo_other_theme')) ? field_get_items('node', $node, 'field_ct_ngo_other_theme')[0]['value'] : ''; ?></p>
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
        <p>Copyright © 2016 HCL Limited</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>