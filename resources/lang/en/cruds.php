<?php

return [
    'userManagement' => [
        'title' => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title' => 'Permissions',
        'title_singular' => 'Permission',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title' => 'Roles',
        'title_singular' => 'Role',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'permissions' => 'Permissions',
            'permissions_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'user' => [
        'title' => 'Users',
        'title_singular' => 'User',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'email' => 'Email',
            'email_helper' => ' ',
            'email_verified_at' => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password' => 'Password',
            'password_helper' => ' ',
            'roles' => 'Roles',
            'roles_helper' => ' ',
            'remember_token' => 'Remember Token',
            'remember_token_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
            'two_factor' => 'Two-Factor Auth',
            'two_factor_helper' => ' ',
            'two_factor_code' => 'Two-factor code',
            'two_factor_code_helper' => ' ',
            'two_factor_expires_at' => 'Two-factor expires at',
            'two_factor_expires_at_helper' => ' ',
            'verified' => 'Verified',
            'verified_helper' => ' ',
            'verified_at' => 'Verified at',
            'verified_at_helper' => ' ',
            'verification_token' => 'Verification token',
            'verification_token_helper' => ' ',
            'approved' => 'Approved',
            'approved_helper' => ' ',
            'jabatan' => 'Jabatan',
            'jabatan_helper' => ' ',
            'instansi' => 'Instansi',
            'instansi_helper' => ' ',
            'jenis_instansi' => 'Jenis Instansi',
            'jenis_instansi_helper' => ' ',
            'alamat_instansi' => 'Alamat Instansi',
            'alamat_instansi_helper' => ' ',
            'pendidikan_terakhir' => 'Pendidikan Terakhir',
            'pendidikan_terakhir_helper' => ' ',
        ],
    ],
    'userAlert' => [
        'title' => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'alert_text' => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link' => 'Alert Link',
            'alert_link_helper' => ' ',
            'user' => 'Users',
            'user_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'contentManagement' => [
        'title' => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory' => [
        'title' => 'Categories',
        'title_singular' => 'Category',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'slug' => 'Slug',
            'slug_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentTag' => [
        'title' => 'Tags',
        'title_singular' => 'Tag',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'slug' => 'Slug',
            'slug_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'sliders' => [
        'title'          => 'Sliders',
        'title_singular' => 'Slide',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'              => 'Title',
            'name_helper'       => ' ',
            'file_name'              => 'File Name',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentPage' => [
        'title' => 'Article',
        'title_singular' => 'Article',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'category' => 'Categories',
            'category_helper' => ' ',
            'tag' => 'Tags',
            'tag_helper' => ' ',
            'page_text' => 'Full Text',
            'page_text_helper' => ' ',
            'excerpt' => 'Excerpt',
            'excerpt_helper' => ' ',
            'featured_image' => 'Featured Image',
            'featured_image_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
            'created_by' => 'Created By',
            'created_by_helper' => ' ',
            'publish_status' => 'Publish Status',
            'publish_status_helper' => ' ',
        ],
    ],
    'faqManagement' => [
        'title' => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory' => [
        'title' => 'Categories',
        'title_singular' => 'Category',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'category' => 'Category',
            'category_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion' => [
        'title' => 'Questions',
        'title_singular' => 'Question',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'category' => 'Category',
            'category_helper' => ' ',
            'question' => 'Question',
            'question_helper' => ' ',
            'answer' => 'Answer',
            'answer_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'resourceLibrary' => [
        'title' => 'Resource Library',
        'title_singular' => 'Resource Library',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'nama' => 'Nama',
            'nama_helper' => ' ',
            'alamat' => 'Alamat',
            'alamat_helper' => ' ',
            'pic' => 'PIC',
            'pic_helper' => ' ',
            'long' => 'Longitude',
            'long_helper' => ' ',
            'lat' => 'Latitude',
            'lat_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'auditLog' => [
        'title' => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'description' => 'Description',
            'description_helper' => ' ',
            'subject_id' => 'Subject ID',
            'subject_id_helper' => ' ',
            'subject_type' => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id' => 'User ID',
            'user_id_helper' => ' ',
            'properties' => 'Properties',
            'properties_helper' => ' ',
            'host' => 'Host',
            'host_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'event' => [
        'title' => 'Event',
        'title_singular' => 'Event',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'title' => 'Title',
            'title_helper' => ' ',
            'featured_image' => 'Featured Image',
            'featured_image_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted At',
            'deleted_at_helper' => ' ',
            'created_by' => 'Created By',
            'created_by_helper' => ' ',
            'detail' => 'Detail',
            'detail_helper' => ' ',
            'location' => 'Location',
            'location_helper' => ' ',
            'date' => 'Date',
            'date_helper' => ' ',
            'publish_status' => 'Publish Status',
            'publish_status_helper' => ' ',
        ],
    ],
    'comment' => [
        'title' => 'Comment',
        'title_singular' => 'Comment',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'content_page' => 'Content Page',
            'content_page_helper' => ' ',
            'user' => 'User',
            'user_helper' => ' ',
            'comment' => 'Comment',
            'comment_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by' => 'Created By',
            'created_by_helper' => ' ',
            'parent' => 'Parent',
            'parent_helper' => ' ',
        ],
    ],
];
