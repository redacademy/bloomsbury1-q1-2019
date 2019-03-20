<?php
/*
Plugin Name: WooCommerce Custom Account Fields
Plugin URI: https://www.hewy.dev
Description: Add custom WooCommerce user account fields
Author: Oliver Heward
Version: 1.0.0
Author URI: https://www.hewy.dev
*/

/**
 * Get Additional account fields.
 */
function bloomsbury_get_account_fields() {
	return apply_filters( 'bloomsbury_account_fields', array(
		'first_name'			=> array(
			'type'                 		=> 'text',
			'label'                		=> __( 'First Name', 'bloomsbury' ),
			'placeholder'		   		=> __( 'First Name' ),
			'hide_in_account'      		=> true,
			'hide_in_admin'        		=> true,
			'hide_in_checkout'     		=> true,
			'hide_in_registration' 		=> false,
			'required'             		=> true,
		),

		'last_name'				=> array(
			'type'                 		=> 'text',
			'label'                		=> __( 'Last Name', 'bloomsbury' ),
			'placeholder'				=> __( 'Last Name', 'bloomsbury' ),
			'hide_in_account'      		=> true,
			'hide_in_admin'        		=> true,
			'hide_in_checkout'     		=> true,
			'hide_in_registration' 		=> false,
			'required'             		=> true,
		),

		'display_name'			=> array(
			'type'						=> 'text',
			'label'						=> __( 'User Name', 'bloomsbury' ),
			'placeholder'				=> __( 'First & Last Name' ),
			'hide_in_account'      		=> true,
			'hide_in_admin'        		=> true,
			'hide_in_checkout'     		=> true,
			'hide_in_registration' 		=> false,
			'required'					=> false,
		),

		'email'			=> array(
			'type'						=> 'email',
			'label'						=> __( 'Email', 'bloomsbury'),
			'placeholder'				=> __( 'Email Address' ),
			'hide_in_account'      		=> true,
			'hide_in_admin'        		=> true,
			'hide_in_checkout'     		=> true,
			'hide_in_registration' 		=> false,
			'required'             		=> true,
		),

		'user_pass'				=> array(
			'type'						=> 'password',
			'label'						=> __( 'Password', 'bloomsbury' ),
			'placeholder'				=> __( 'Enter a Password', 'bloomsbury' ),
			'required'					=> true,
		),

		'user_url' 				=> array(
			'type'					=> 'text',
			'label'					=> __( 'Website', 'bloomsbury'),
			'placeholder' 			=> __( 'Example https://bloomsburybeginnings.com', 'bloomsbury'),
			'required' 				=> false,
			'hide_in_account'		=> false,
			'hide_in_admin'			=> true,
			'hide_in_checkout'		=> true,
			'hide_in_registration' 	=> false,
		),

        'user_company'          => array(
            'type'                  => 'text',
            'label'                 => __( 'Company', 'bloomsbury'),
            'placeholder'           => __( 'Example - Bloomsbury', 'bloomsbury'),
            'required'              => false,
            'hide_in_account'       => false,
            'hide_in_admin'         => true,
            'hide_in_checkout'      => true,
            'hide_in_registration'  => false,
        ),
        'description'          => array(
            'type'                  => 'text',
            'label'                 => __( 'Description', 'bloomsbury'),
            'placeholder'           => __( 'Example - Bloomsbury', 'bloomsbury'),
            'required'              => false,
            'hide_in_account'       => false,
            'hide_in_admin'         => true,
            'hide_in_checkout'      => true,
            'hide_in_registration'  => false,
        ),
	) );
}

/*
 * Add post values to account fields if set.
 * 
 * @see https://iconicwp.com/blog/the-ultimate-guide-to-adding-custom-woocommerce-user-account-fields/
 *
 * @param array $fields
 *
 * @return array
 */

function bloomsbury_add_post_data_to_account_fields( $fields ) {
    if ( empty( $_POST ) ) {
        return $fields;
    }
 
    foreach ( $fields as $key => $field_args ) {
        if ( empty( $_POST[ $key ] ) ) {
            $fields[ $key ]['value'] = '';
            continue;
        }
 
        $fields[ $key ]['value'] = $_POST[ $key ];
    }
 
    return $fields;
}
 
add_filter( 'bloomsbury_account_fields', 'bloomsbury_add_post_data_to_account_fields', 10, 1 );


/**
 * Add fields to registration form and account area.
 *
 */

function bloomsbury_print_user_frontend_fields() {
	$fields            = bloomsbury_get_account_fields();
	$is_user_logged_in = is_user_logged_in();

	foreach ( $fields as $key => $field_args ) {
		$value = null;

        if ( $is_user_logged_in && ! empty( $field_args['hide_in_account'] ) ) {
            continue;
        }
 
        if ( ! $is_user_logged_in && ! empty( $field_args['hide_in_registration'] ) ) {
            continue;
        }

		if ( $is_user_logged_in ) {
			$user_id = bloomsbury_get_edit_user_id();
			$value   = bloomsbury_get_userdata( $user_id, $key );
		}

		$value = isset( $field_args['value'] ) ? $field_args['value'] : $value;

		woocommerce_form_field( $key, $field_args, $value );
	}
}
 
add_action( 'woocommerce_register_form', 'bloomsbury_print_user_frontend_fields', 10 ); // register form
add_action( 'woocommerce_edit_account_form', 'bloomsbury_print_user_frontend_fields', 10 ); // my account

/**
 * Get user data.
 *
 * @param $user_id
 * @param $key
 *
 * @return mixed|string
 */
function bloomsbury_get_userdata( $user_id, $key ) {
    if ( ! bloomsbury_is_userdata( $key ) ) {
        return get_user_meta( $user_id, $key, true );
    }
 
    $userdata = get_userdata( $user_id );
 
    if ( ! $userdata || ! isset( $userdata->{$key} ) ) {
        return '';
    }
 
    return $userdata->{$key};
}

/**
 * Get currently editing user ID (frontend account/edit profile/edit other user).
 *
 * @return int
 */
function bloomsbury_get_edit_user_id() {
    return isset( $_GET['user_id'] ) ? (int) $_GET['user_id'] : get_current_user_id();
}


/**
 * Save registration fields.
 *
 * @param int $customer_id
 *
 * @see https://iconicwp.com/blog/the-ultimate-guide-to-adding-custom-woocommerce-user-account-fields/
 */
function bloomsbury_save_account_fields( $customer_id ) {
    $fields = bloomsbury_get_account_fields();
    $sanitized_data = array();
 
    foreach ( $fields as $key => $field_args ) {
        if ( ! bloomsbury_is_field_visible( $field_args ) ) {
            continue;
        }
 
        $sanitize = isset( $field_args['sanitize'] ) ? $field_args['sanitize'] : 'wc_clean';
        $value    = isset( $_POST[ $key ] ) ? call_user_func( $sanitize, $_POST[ $key ] ) : '';
 
        if ( bloomsbury_is_userdata( $key ) ) {
            $sanitized_data[ $key ] = $value;
            continue;
        }        
 
        update_user_meta( $customer_id, $key, $value );
    }
 
    if ( ! empty( $sanitized_data ) ) {
        $sanitized_data['ID'] = $customer_id;
        wp_update_user( $sanitized_data );
    }
}
 
add_action( 'woocommerce_created_customer', 'bloomsbury_save_account_fields' ); // register/checkout
add_action( 'personal_options_update', 'bloomsbury_save_account_fields' ); // edit own account admin
add_action( 'edit_user_profile_update', 'bloomsbury_save_account_fields' ); // edit other account admin
add_action( 'woocommerce_save_account_details', 'bloomsbury_save_account_fields' ); // edit WC account

/*
 * Is this field core user data.
 *
 * @param $key
 *
 * @return bool
 */
function bloomsbury_is_userdata( $key ) {
    $userdata = array(
        'user_pass',
        'user_login',
        'user_nicename',
        'user_url',
        'user_email',
        'display_name',
        'nickname',
        'first_name',
        'last_name',
        'description',
        'rich_editing',
        'user_registered',
        'role',
        'jabber',
        'aim',
        'yim',
        'show_admin_bar_front',
    );
 
    return in_array( $key, $userdata );
}

/*
 * Is field visible.
 *
 * @param $field_args
 *
 * @return bool
 */
function bloomsbury_is_field_visible( $field_args ) {
    $visible = true;
    $action = filter_input( INPUT_POST, 'action' );
 
    if ( is_admin() && ! empty( $field_args['hide_in_admin'] ) ) {
        $visible = false;
    } elseif ( ( is_account_page() || $action === 'save_account_details' ) && is_user_logged_in() && ! empty( $field_args['hide_in_account'] ) ) {
        $visible = false;
    } elseif ( ( is_account_page() || $action === 'save_account_details' ) && ! is_user_logged_in() && ! empty( $field_args['hide_in_registration'] ) ) {
        $visible = false;
    } elseif ( is_checkout() && ! empty( $field_args['hide_in_checkout'] ) ) {
        $visible = false;
    }
 
    return $visible;
}

/**
 * Add fields to admin area.
 */
function bloomsbury_print_user_admin_fields() {
	$fields = bloomsbury_get_account_fields();
	?>
	<h2><?php _e( 'Additional Information', 'bloomsbury' ); ?></h2>
	<table class="form-table" id="bloomsbury-additional-information">
		<tbody>
		<?php foreach ( $fields as $key => $field_args ) { ?>
			<?php
            if ( ! empty( $field_args['hide_in_admin'] ) ) {
                continue;
            }

			$user_id = bloomsbury_get_edit_user_id();
			$value   = bloomsbury_get_userdata( $user_id, $key );
			?>
			<tr>
				<th>
					<label for="<?php echo $key; ?>"><?php echo $field_args['label']; ?></label>
				</th>
				<td>
					<?php $field_args['label'] = false; ?>
					<?php woocommerce_form_field( $key, $field_args, $value ); ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<?php
}

add_action( 'show_user_profile', 'bloomsbury_print_user_admin_fields', 30 ); // admin: edit profile
add_action( 'edit_user_profile', 'bloomsbury_print_user_admin_fields', 30 ); // admin: edit other users

/**
 * Validate fields on frontend.
 *
 * @param WP_Error $errors
 *
 * @return WP_Error
 *
 * @see https://iconicwp.com/blog/the-ultimate-guide-to-adding-custom-woocommerce-user-account-fields/
 */
function bloomsbury_validate_user_frontend_fields( $errors ) {
    $fields = bloomsbury_get_account_fields();
 
    foreach ( $fields as $key => $field_args ) {
        if ( empty( $field_args['required'] ) ) {
            continue;
        }
 
        if ( ! isset( $_POST['register'] ) && ! empty( $field_args['hide_in_account'] ) ) {
            continue;
        }
 
        if ( isset( $_POST['register'] ) && ! empty( $field_args['hide_in_registration'] ) ) {
            continue;
        }
 
        if ( empty( $_POST[ $key ] ) ) {
            $message = sprintf( __( '%s is a required field.', 'bloomsbury' ), '<strong>' . $field_args['label'] . '</strong>' );
            $errors->add( $key, $message );
        }
    }
 
    return $errors;
}
 
add_filter( 'woocommerce_registration_errors', 'bloomsbury_validate_user_frontend_fields', 10 );
add_filter( 'woocommerce_save_account_details_errors', 'bloomsbury_validate_user_frontend_fields', 10 );

?>