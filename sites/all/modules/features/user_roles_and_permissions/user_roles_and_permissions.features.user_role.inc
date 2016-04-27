<?php
/**
 * @file
 * user_roles_and_permissions.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function user_roles_and_permissions_user_default_roles() {
  $roles = array();

  // Exported role: Galderma Admin.
  $roles['Galderma Admin'] = array(
    'name' => 'Galderma Admin',
    'weight' => 4,
  );

  // Exported role: Galderma Sales Rep.
  $roles['Galderma Sales Rep'] = array(
    'name' => 'Galderma Sales Rep',
    'weight' => 5,
  );

  // Exported role: HCP A - Key Account.
  $roles['HCP A - Key Account'] = array(
    'name' => 'HCP A - Key Account',
    'weight' => 6,
  );

  // Exported role: HCP B - Normal Customer.
  $roles['HCP B - Normal Customer'] = array(
    'name' => 'HCP B - Normal Customer',
    'weight' => 7,
  );

  // Exported role: HCP C - New Customer.
  $roles['HCP C - New Customer'] = array(
    'name' => 'HCP C - New Customer',
    'weight' => 8,
  );

  // Exported role: Non-Medical A | - Key Account.
  $roles['Non-Medical A | - Key Account'] = array(
    'name' => 'Non-Medical A | - Key Account',
    'weight' => 9,
  );

  // Exported role: Non-Medical Agency.
  $roles['Non-Medical Agency'] = array(
    'name' => 'Non-Medical Agency',
    'weight' => 12,
  );

  // Exported role: Non-Medical B | - Normal Customer.
  $roles['Non-Medical B | - Normal Customer'] = array(
    'name' => 'Non-Medical B | - Normal Customer',
    'weight' => 10,
  );

  // Exported role: Non-Medical C | - New Customer.
  $roles['Non-Medical C | - New Customer'] = array(
    'name' => 'Non-Medical C | - New Customer',
    'weight' => 11,
  );

  // Exported role: Wholesaler.
  $roles['Wholesaler'] = array(
    'name' => 'Wholesaler',
    'weight' => 13,
  );

  return $roles;
}
