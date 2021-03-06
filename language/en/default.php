<?php

return [
    '_text_title' => 'Cart',
    'text_tab_general' => 'General',
    'text_component_title' => 'Cart Component',
    'text_component_desc' => 'Displays cart for menu to be added',
    'text_checkout_component_title' => 'Checkout Component',
    'text_checkout_component_desc' => 'Displays checkout form and accept orders',
    'text_tab_totals' => 'Cart Totals',

    'text_heading' => 'My Order',
    'text_update_heading' => 'Updating menu choices',
    'text_add_heading' => 'Adding menu choices',
    'text_no_cart_items' => '<p class="text-center">There are no menus added in your cart.</p>',
    'text_delivery' => 'Delivery',
    'text_collection' => 'Pick-up',
    'text_apply_coupon' => 'Enter coupon code',
    'text_sub_total' => 'Sub Total',
    'text_coupon' => 'Coupon [%s]',
    'text_vat' => 'VAT [%s]',
    'text_min_total' => 'Min. Order Amount',
    'text_no_min_total' => 'No Min. Order Amount',
    'text_order_total' => 'Order Total',
    'text_menu_quantity' => 'Menu Quantity',
    'text_add_to_order' => 'Add to order',
    'text_update' => 'Update',
    'text_is_closed' => 'CLOSED',
    'text_is_unavailable' => 'UNAVAILABLE',
    'text_change_location' => 'Change Location',
    'text_times' => '&times;',
    'text_option_price' => '<span class="option-amount pull-right">%s</span>',
    'text_equals' => ' &equals; ',
    'text_starts' => ' starts %s',
    'text_in_minutes' => 'in %s min',
    'text_empty' => 'There are no cart totals available.',

    'button_add_to_order' => 'ADD TO ORDER',
    'button_update' => 'UPDATE',
    'button_order' => 'Checkout',
    'button_payment' => 'Payment',
    'button_confirm' => 'Confirm',
    'button_apply_coupon' => 'Apply Coupon',
    'button_view_cart' => 'Back to My Order',

    'column_condition_name' => 'Name',
    'column_condition_priority' => 'Priority',
    'column_condition_title' => 'Label',
    'column_condition_status' => 'Status',

    'label_menu_quantity' => 'Menu Quantity',
    'label_add_comment' => 'Add Comment',
    'label_abandoned_cart' => 'Abandoned checkouts',
    'label_destroy_on_logout' => 'Destroy cart session on user logout',
    'label_show_cart_images' => 'Display Cart Images',
    'label_fixed_cart' => 'Fixed Cart Box',
    'label_fixed_offset' => 'Fixed Top Offset',
    'label_fixed_top_offset' => 'Fixed Top Offset',
    'label_fixed_bottom_offset' => 'Fixed Bottom Offset',
    'label_cart_image_size' => 'Cart Image Size',
    'label_cart_images_h' => 'Image Height',
    'label_cart_images_w' => 'Image Width',
    'label_cart_conditions' => 'Cart Conditions',
    'label_stock_checkout' => 'Stock Checkout',
    'label_show_stock_warning' => 'Show Stock Warning',

    'alert_menu_added' => 'Menu has been added to your order.',
    'alert_menu_updated' => 'Menu has been updated successfully',
    'alert_out_of_stock' => '%s is currently out of stock.',
    'alert_low_on_stock' => '%s is currently low on stock, stock left is %s.',
    'alert_minimum_qty' => '%s minimum quantity is %s.',
    'alert_bad_request' => 'Error occurred, please check and try again.',
    'alert_unknown_error' => 'Error occurred, please check and try again.',
    'alert_menu_not_found' => '%s not found, please add from the local menus page.',
    'alert_no_menu_selected' => 'Please select a menu to add to your order.',
    'alert_option_required' => 'Please choose from the <b>%s</b> option.',
    'alert_qty_is_invalid' => 'Selected quantity is not divisive by the minimum quantity of %s.',
    'alert_qty_is_below_min_qty' => 'Selected quantity is below the menu\'s minimum quantity of %s.',
    'alert_no_search_query' => 'Please type in a postcode/address to check if we can deliver to you.',
    'alert_location_required' => 'No location found or selected',
    'alert_location_closed' => 'Sorry, you can\'t place an order now, we are currently closed,<br /> please come back later during our opening times.',
    'alert_order_unavailable' => 'This restaurant is unavailable to take orders at the moment.',
    'alert_delivery_unavailable' => 'This restaurant is unavailable to take delivery orders at the moment.',
    'alert_collection_unavailable' => 'This restaurant is unavailable to take pick-up orders at the moment.',
    'alert_delivery_coverage' => 'Sorry, but this restaurant does not deliver to your location',
    'alert_min_delivery_order_total' => 'Order total is below the minimum delivery order total. <br />You need to spend %s or more to order for delivery',
    'alert_invalid_search_query' => 'We couldn\'t locate the entered address/postcode, please enter a valid address/postcode.',
    'alert_coupon_removed' => 'Your coupon has been removed successfully.',
    'alert_coupon_applied' => 'Your coupon has been applied successfully.',
    'alert_coupon_invalid' => 'Please enter a valid coupon.',
    'alert_coupon_expired' => 'Your coupon is either invalid or expired.',
    'alert_coupon_not_applied' => 'Your coupon can not be applied to orders below %s.',
    'alert_coupon_maximum_reached' => 'Maximum number of redemption for the coupon has been reached.',
    'alert_coupon_order_restriction' => 'Your coupon can not be applied to <b>%s</b> orders',
    'alert_menu_not_within_mealtime' => '%s is available for %s ONLY between (%s - %s)',

    'help_show_cart_images' => 'Show or hide cart menu images',
    'help_cart_image_size' => '(Height x Width)',
    'help_fixed_offset' => 'Pixels to offset from top and bottom screen when calculating position of scroll.',
    'help_total_admin_title' => 'Enter the total title to be used internally by admin.',
    'help_total_title' => 'Enter the total title as it should be displayed in storefront.',
    'help_total_display' => 'Set whether to display the total.',
    'help_stock_checkout' => 'Set whether to check and display a warning message when a cart item is out of stock.',
    'help_show_stock_warning' => 'Display a out of stock warning message.',
    'help_cart_conditions' => 'Customise cart condition labels and the order in which they are displayed',
    'help_coupon_condition' => 'Applies coupon to cart.',
    'help_tax_condition' => 'Applies tax to cart',

    'checkout' => [
        'text_heading' => 'Checkout',
        'text_checkout' => 'Almost there, Please confirm your details and proceed to payment.',
        'text_payments' => 'Please choose your payment method.',
        'text_address' => 'Enter a new or an existing delivery address.',
        'text_step_one' => 'Step 1',
        'text_step_one_summary' => 'Your Details',
        'text_step_two' => 'Step 2',
        'text_step_two_summary' => 'Payment',
        'text_step_three' => 'Step 3',
        'text_step_three_summary' => 'Confirmation',
        'text_location_closed' => 'Sorry, but we\'re closed, come back during opening hours',
        'text_edit' => 'Edit',
        'text_close' => 'Close',
        'text_ip_warning' => '(Warning: Your IP Address has been logged for our fraud prevention measures.)',
        'text_date_format' => '%l %d',

        'text_greetings' => 'Hello %s,',
        'text_success_heading' => 'Order Confirmation',
        'text_order_details' => 'Order Details',
        'text_order_items' => 'What you\'ve ordered:',
        'text_delivery_address' => 'Your Delivery Address',
        'text_your_local' => 'Your local restaurant',
        'text_thank_you' => 'We hope to see you again soon',
        'text_success_message' => 'Your order  %s has been received and will be with you shortly. <br /><a href="%s">Click here</a> to view your order progress. <br />Thanks for shopping with us online!',
        'text_order_info' => 'This is a %s order. <br /><br /><b>Order Date:</b> %s <br /><b>%s Time:</b> %s <br /><b>Payment Method:</b> %s ',
        'text_order_total' => 'Order Total: <b>%s.</b>',
        'text_collection_order_type' => 'This is a pick-up order',
        'text_no_payment' => 'No payment method selected',

        'label_customer_name' => 'Customer Name',
        'label_first_name' => 'First Name',
        'label_last_name' => 'Last Name',
        'label_email' => 'Email',
        'label_telephone' => 'Telephone',
        'label_address' => 'Delivery Address',
        'label_address_id' => 'Address Id',
        'label_address_1' => 'Address 1',
        'label_address_2' => 'Address 2',
        'label_city' => 'City',
        'label_state' => 'State',
        'label_postcode' => 'Postcode',
        'label_country' => 'Country',
        'label_order_type' => 'Order Type',
        'label_delivery' => 'Delivery',
        'label_collection' => 'Pick-up',
        'label_payment_method' => 'Payment Method',
        'label_terms' => 'By clicking Register, you agree to the <a target="_blank" href="%s">Terms and Conditions</a> set out by this site, including our Cookie Use.',
        'label_comment' => 'Add Comments',
        'label_ip' => 'IP Address',
        'label_checkout_terms' => 'Checkout Terms',

        'help_checkout_terms' => 'Require customers to agree to terms before checkout',

        'button_agree_terms' => 'I Agree',

        'error_delivery_unavailable' => 'Delivery is unavailable at the selected restaurant!',
        'error_collection_unavailable' => 'Pick-up is unavailable at the selected restaurant!',
        'error_covered_area' => 'This restaurant currently does not deliver to your address',
        'error_delivery_less_current_time' => 'The %s Time can not be less than current time!',
        'error_invalid_payment' => 'The selected payment is invalid, please contact us',

        'alert_no_menu_to_order' => 'Please, add some menus before you checkout!',
        'alert_no_selected_local' => 'Please select your local restaurant<',
        'alert_location_closed' => 'Sorry, you can\'t place an order now, we are currently closed,<br /> please come back later during our opening times.',
        'alert_no_delivery_time' => 'The selected time is outside our opening hours',
        'alert_order_unavailable' => 'Neither delivery or pick-up is available at the selected restaurant.',
        'alert_customer_not_logged' => 'Almost there, Please login or register to complete checkout.',
        'alert_delivery_area_changed' => 'Your delivery area has changed, please confirm the delivery cost.',

        'activity_order_created' => ' <b>created</b> an order.'
    ],

    'orders' => [
        'component_title' => 'Account Orders Component',
        'component_desc' => 'Displays and manages account orders',
        'text_heading' => 'Recent Orders',
        'text_my_account' => 'My Account',
        'text_view_heading' => 'My Order View',
        'text_order_menus' => 'Order Menus',
        'text_empty' => 'There are no order(s).',
        'text_delivery' => 'Delivery',
        'text_collection' => 'Pick-up',
        'text_reorder' => 'Re-order',
        'text_leave_review' => 'Leave review',
        'text_no_payment' => 'No Payment',

        'column_id' => 'ID',
        'column_status' => 'Status',
        'column_delivery' => 'Delivery',
        'column_payment' => 'Payment',
        'column_location' => 'Location',
        'column_date' => 'Ready Time - Date',
        'column_date_added' => 'Date Added',
        'column_order' => 'Order Type',
        'column_items' => 'Total Items',
        'column_total' => 'Order Total',
        'column_menu_name' => 'Name/Options',
        'column_menu_price' => 'Price',
        'column_menu_subtotal' => 'Total',

        'button_order' => 'Place New Order',
        'button_reorder' => 'Re-Order',
        'button_back' => 'Back',

        'alert_reorder_success' => 'You have successfully added the menus from order ID %s to your order.',
    ],
];