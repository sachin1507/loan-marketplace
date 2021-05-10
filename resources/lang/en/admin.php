<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Admin Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in admin portal. You are free to modify
    | these language lines according to your application's requirements.
    |
    */ 


    'tools' => [
        'title' => 'Tools',
        'created_at' => 'Time',
        'countries' => 'Countries',
        'currencies' => 'Currencies',
        'banks' => 'Banks',
        'exchange_rate' => 'Exchange Rate',
        'product' => 'Product',
        'card_load_csv_format' => 'Card Load CSV Format',
        'merchant' => 'Merchant',
    ],    

    'products' => [
        'title' => 'Products',
        'created_at' => 'Time',
        'add_new_product' => 'Add new Product',
        'edit_product' => 'Edit Product',
        'fields' => [            
            'name' => 'Name',
            'sub_title' => 'Sub Title',            
            'title' => 'Title',            
            'button_text' => 'Button Text',            
            'button_link' => 'Button Link',
            'description' => 'Description',            
            'image' => 'Image', 
            'slug' => 'Slug',          
            'active' => 'Active'
        ],
    ],  

    'users' => [
        'title' => 'Users',
        'created_at' => 'Time',
        'add_new_user' => 'Add new user',
        'edit_user' => 'Edit user',
        'fields' => [
            'token' => 'Token',
            'name' => 'Name',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'roles' => 'Roles',
            'remember-token' => 'Remember token',
            'pci-compliant' => 'PCI-Compliant',
        ],
    ],

    'countries' => [
        'title' => 'Countries',
        'created_at' => 'Time',
        'add_new_country' => 'Add new country',
        'edit_country' => 'Edit country',
        'fields' => [
            'code' => 'Country Code',
            'name' => 'Country Name',
            'active' => 'Active'
        ],
    ],

    'categories' => [
        'title' => 'Categories',
        'created_at' => 'Time',
        'add_new_category' => 'Add new category',
        'edit_category' => 'Edit category',
        'fields' => [            
            'name' => 'Category Name',
            'image' => 'Image',            
            'active' => 'Active'
        ],
    ],

    'subcategories' => [
        'title' => 'Sub Categories',
        'created_at' => 'Time',
        'add_new_subcategory' => 'Add new sub category',
        'edit_subcategory' => 'Edit sub category',
        'fields' => [            
            'title' => 'Sub Category Name',
            'name' => 'Category Name',
            'image' => 'Image',            
            'active' => 'Active'
        ],
    ],

    'banners' => [
        'title' => 'Banners',
        'created_at' => 'Time',
        'add_new_banner' => 'Add new banner',
        'edit_banner' => 'Edit banner',
        'fields' => [            
            'name' => 'Name',
            'sub_title' => 'Sub Title',            
            'title' => 'Title',            
            'button_text' => 'Button Text',            
            'button_link' => 'Button Link',
            'description' => 'Description',            
            'image' => 'Image', 
            'slug' => 'Slug',          
            'active' => 'Active'
        ],
    ],

    'articles' => [
        'title' => 'Articles',
        'created_at' => 'Time',
        'add_new_article' => 'Add new article',
        'edit_article' => 'Edit article',
        'fields' => [            
            'name' => 'Name',
            'sub_title' => 'Sub Title',            
            'title' => 'Title',            
            'button_text' => 'Button Text',            
            'button_link' => 'Button Link',
            'description' => 'Description',            
            'image' => 'Image', 
            'slug' => 'Slug',          
            'active' => 'Active'
        ],
    ],

    'permissions' => [
        'title' => 'Permissions',
        'created_at' => 'Time',
        'add_new_permission' => 'Add new permission',
        'edit_permission' => 'Edit permission',
        'fields' => [
            'name' => 'Permission Name'
        ],
    ],

    'roles' => [
        'title' => 'Roles',
        'created_at' => 'Time',
        'add_new_role' => 'Add new role',
        'edit_role' => 'Edit role',

        'fields' => [
            'name' => 'Role Name',
            'permission' => 'Permissions',
        ],
    ],

    'user-management' => [
        'title' => 'User Management',
        'created_at' => 'Time',
        'fields' => [
        ],
    ],
    
    'balance-management' => [
        'title' => 'Balance Management',
        'created_at' => 'Time',
        'fields' => [
        ],
    ],

    'balance' => [
        'title' => 'Balance',
        'alloted' => 'Alloted',
        'amount_request' => 'Amount Request',
        'allot_amount' => 'Allot Amount',
        'balance_history' => 'Balance History',
        'generate_request' => 'Generate Request',
        'created_at' => 'Time',
        'fields' => [
        ],
    ],

    'currencies' => [
        'title' => 'Currencies',
        'created_at' => 'Time',
        'add_new_currency' => 'Add new currency',
        'edit_currency' => 'Edit currency',
        'fields' => [
            'code' => 'Currency Code',
            'name' => 'Currency Name',
            'bip_code' => 'ISO Code',
            'octo_code' => 'ISO 4217',
            'active' => 'Active'
        ],
    ],

    'banks' => [
        'title' => 'Banks',
        'created_at' => 'Time',
        'add_new_bank' => 'Add new bank',
        'edit_bank' => 'Edit bank',
        'fields' => [
            'country' => 'Country',
            'name' => 'Bank Name',
            'short_name' => 'Bank Short Name',
            'swift' => 'Swift Code',
            'active' => 'Active'
        ],
    ],

    

    'user-management' => [
        'title' => 'User Management',
        'created_at' => 'Time',
        'fields' => [
        ],
    ],
    
    'balance-management' => [
        'title' => 'Balance Management',
        'created_at' => 'Time',
        'fields' => [
        ],
    ],

    'balance' => [
        'title' => 'Balance',
        'alloted' => 'Alloted',
        'amount_request' => 'Amount Request',
        'allot_amount' => 'Allot Amount',
        'balance_history' => 'Balance History',
        'generate_request' => 'Generate Request',
        'created_at' => 'Time',
        'fields' => [
        ],
    ],

    'merchant' => [
        // 'title' => 'Merchant',
        'title' => 'Broker',
        'created_at' => 'Time',
        'add_new_merchant' => 'Add new Merchant',
        'edit_merchant' => 'Edit Merchant',
        'fields' => [
            'merchant_name' => 'PTY Sub-ClientID',
            'code' => 'Code',
            'url' => 'URL',
            'email' => 'Email',
            'status' => 'Status',
        ],
    ],

    'landingPage' => [
        'title' => 'Landing Page',
        'transaction' => ' Transaction',
    ],
    'reports' => [
        'title' => 'Report',
    ],

    'gateway' => [
        'title' => 'Gateway',
        'created_at' => 'Time',
        'add_new_gateway' => 'Add new Gateway',
        'edit_gateway' => 'Edit Gateway',
        'fields' => [
            'name' => 'Name',
            'url' => 'URL',
            'contactInformation' => 'Contact Information'
        ],
    ],

    'client' => [
        'title' => 'Merchant',
        'configuration' => 'Gateway Configuration',
        'created_at' => 'Time',
        'add_new_client' => 'Add new Merchant',
        'add_new_currency' => 'Add new Currency',
        'edit_client' => 'Edit Merchant',
        'fields' => [
            'code' => 'Merchant Code',
            'name' => 'Merchant Name',
            'business_type' => 'Industry',
            'IsActive' => 'Active',
            'channel_id' => 'Channel ID',
            'username' => 'Username',
            'password' => 'Password',
            'url' => 'URL',
            'currency' => 'Currency',
            'mid' => 'MID',
            'term_id' => 'Term ID',
            'access_id' => 'Access ID',
            'pay_type' => 'Pay Type',
            'visa' => 'Visa',
            'mastercard' => 'Mastercard',
            'octo3' => 'Octo3',
            'active' => 'Active',
            'inactive' => 'Inactive',
            'bip' => 'BIP',
            'octo' => 'OCTO',
            'currency' => 'Currency',
            'na' => 'NA',
            'paymentBrand' => 'Payment Brands',
            'attach' => 'Attach MID',
            'add' => 'Add Currency',
            'remove' => 'Remove MID',
            'email_enduser' => 'Send to End-User',
        ],
    ],


    'entity' => [
        'title' => 'Channel',
        'created_at' => 'Time',
        'add_new_merchant' => 'Add new Channel',
        'edit_merchant' => 'Edit Channel',
        'configure_entity' => 'Configure',
        'fields' => [
            'code' => 'Merchant Code',
            'name' => 'Merchant Name',
            'channel' => 'Channel Name',
            'website' => 'Website',
            'active' => 'Active',
            'inactive' => 'Inactive',
            'IsActive' => 'Active',
            'contact_information' => 'Email',
        ],
    ],
    'mid_bip' => [
        'title' => 'MID BIP',
        'created_at' => 'Time',
        'add_new_mid_bip' => 'Add new MID BIP',
        'edit_mid_bip' => 'Edit MID BIP',
        'fields' => [
            'name' => 'Merchant Name',
            'description' => 'Description',
            'channel_id' => 'Channel ID',
            'user_id' => 'User ID',
            'password' => 'Password',
            'url' => 'URL',
            'select' => 'Select',
            'descriptor' => 'Descriptor',
        ],
    ],
    'mid_octo' => [
        'title' => 'MID OCTO',
        'created_at' => 'Time',
        'add_new_mid_octo' => 'Add new MID OCTO',
        'edit_mid_octo' => 'Edit MID OCTO',
        'fields' => [
            'name' => 'Name',
            'description' => 'Description',
            'mid' => 'MID',
            'term_id' => 'Term ID',
            'access_id' => 'Access ID',
            'password' => 'Secure Hash',
            'url' => 'URL',
            'descriptor' => 'Descriptor',
        ],
    ],

    'merchantAccess' => [
        // 'title' => 'User Access',
        'title' => 'Merchant Access',
        'created_at' => 'Time',
        'add_new_merchantAccess' => 'Add new Access',
        'edit_merchantAccess' => 'Edit Access',
        'fields' => [
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'email' => 'Email',
            'merchant_code' => 'Merchant Code',
            'reset' => 'Reset Password',
        ],
    ],

    'productAccess' => [
        'title' => 'Product Access',
        'created_at' => 'Time',
        'add_new_productAccess' => 'Add new Product',
        'edit_merchantAccess' => 'Edit Product',
        'fields' => [
            'name' => 'Product Name',
            'crd_prd_id' => 'crd_prd_id',
            'type' => 'Type',
        ],
    ],

    'whitelabelAccess' => [
        'title' => 'Whitelabel Access',
        'created_at' => 'Time',
        'fields' => [
            'color' => 'Color',
            'image' => 'Image',
        ],
    ],

    'audit' => [
        'title' => 'Audit Log',
        'created_at' => 'Time',
        'fields' => [
            'email' => 'Email',
            'action' => 'Action',
            'location' => 'Location',
            'description' => 'Description',
            'created' => 'Created',
            'dateFrom' => 'Date From',
            'dateTo' => 'Date To',
        ],
    ],

    'card_create_history' => [
        'title' => 'Cards Created',
        'created_at' => 'Time',
        'fields' => [
            'order_ref' => 'History Reference #',
            'merch_code' => 'Merchant Code',
            'created_history' => 'Creation',
            'sftp' => 'SFTP',
        ],
    ],

    'card_create_admin_history' => [
        'title' => 'User List',
        'created_at' => 'Time',
        'fields' => [
            'email' => 'Email',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'merchantcode' => 'Merchant Code',
        ],
    ],

    'card_create' => [
        'title' => 'Card Create',
        'created_at' => 'Time',
        'fields' => [
            'order_ref' => 'History Reference #',
            'created_history' => 'Creation',
        ],
    ],

    'card_load_history' => [
        'title' => 'Card Load History',
        'created_at' => 'Time',
        'fields' => [
            'order_ref' => 'History Reference #',
            'merch_code' => 'Merchant Code',
            'created_history' => 'Creation',
        ],
    ],

    'card_load' => [
        'title' => 'Card Load',
        'created_at' => 'Time',
        'fields' => [
            'order_ref' => 'History Reference #',
            'created_history' => 'Creation',
        ],
    ],


    'list' => 'List',
    'no_record_found' => 'No record found',
    'custom_controller_index' => 'Custom controller index.',
    'back_to_list' => 'Back to list',

    'card_load_csv_setting' => [
        'title' => 'Card Load CSV Setting',
    ],
    'master-client-carrier' => [
        'title' => 'Carrier Ref',
        'created_at' => 'Time',
        'add' => 'Add New Carrier Ref',
        'edit' => 'Edit Carrier Ref',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'active' => 'Active',
            'action' => 'Action',          
        ],
    ],
    'master-client-envelope' => [
        'title' => 'Envelope Ref',
        'created_at' => 'Time',
        'add' => 'Add New Envelope Ref',
        'edit' => 'Edit Envelope Ref',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'active' => 'Active',
            'action' => 'Action',          
        ],
    ],
    'master-client-bulk-delivery-code' => [
        'title' => 'Bulk Delivery Code',
        'created_at' => 'Time',
        'add' => 'Add New Bulk Delivery Code',
        'edit' => 'Edit Bulk Delivery Code',
        'fields' => [
            'id' => 'ID',
            'name' => 'Name',
            'active' => 'Active',
            'action' => 'Action',          
        ],
    ],
];
