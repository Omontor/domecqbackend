<?php

return [
    'userManagement' => [
        'title'          => 'Gestión de Usuarios',
        'title_singular' => 'Gestión de Usuarios',
    ],
    'permission' => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'segment' => [
        'title'          => 'Segmentos',
        'title_singular' => 'Segmento',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'clasification' => [
        'title'          => 'Clasificaciones',
        'title_singular' => 'Clasificacione',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'provider' => [
        'title'          => 'Mayoristas',
        'title_singular' => 'Mayorista',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'logo'              => 'Logo',
            'logo_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => 'Manejo de Productos',
        'title_singular' => 'Manejo de Producto',
    ],
    'group' => [
        'title'          => 'Grupos',
        'title_singular' => 'Grupo',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'status' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'productCategory' => [
        'title'          => 'Product Category',
        'title_singular' => 'Product Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nombre',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
        ],
    ],
    'witnessCategory' => [
        'title'          => 'Witness Category',
        'title_singular' => 'Witness Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'witness' => [
        'title'          => 'Witness',
        'title_singular' => 'Witness',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'witness_category'        => 'Categoría',
            'witness_category_helper' => ' ',
            'witness'                 => 'Testigo',
            'witness_helper'          => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'checkin' => [
        'title'          => 'Checkin',
        'title_singular' => 'Checkin',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'datetime'          => 'Fecha y Hora',
            'datetime_helper'   => ' ',
            'lat'               => 'Latitud',
            'lat_helper'        => ' ',
            'lng'               => 'Longitud',
            'lng_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'checkout' => [
        'title'          => 'Checkout',
        'title_singular' => 'Checkout',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'datetime'          => 'Fecha y Hora',
            'datetime_helper'   => ' ',
            'lat'               => 'Latitud',
            'lat_helper'        => ' ',
            'lng'               => 'Longitud',
            'lng_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'client' => [
        'title'          => 'Client',
        'title_singular' => 'Client',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'name'                    => 'Nombre',
            'name_helper'             => ' ',
            'logo'                    => 'Logotipo',
            'logo_helper'             => ' ',
            'contact_email'           => 'Email de Contacto',
            'contact_email_helper'    => ' ',
            'phone'                   => 'Teléfono',
            'phone_helper'            => ' ',
            'address'                 => 'Address',
            'address_helper'          => ' ',
            'lat'                     => 'Lat',
            'lat_helper'              => ' ',
            'lng'                     => 'Lng',
            'lng_helper'              => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'rfc'                     => 'Rfc',
            'rfc_helper'              => ' ',
            'razon_social'            => 'Razon Social',
            'razon_social_helper'     => ' ',
            'nombre_comercial'        => 'Nombre Comercial',
            'nombre_comercial_helper' => ' ',
            'grupo'                   => 'Grupo',
            'grupo_helper'            => ' ',
            'segmento'                => 'Segmento',
            'segmento_helper'         => ' ',
            'clasificacion'           => 'Clasificacion',
            'clasificacion_helper'    => ' ',
            'status'                  => 'Status',
            'status_helper'           => ' ',
            'kam'                     => 'Kam',
            'kam_helper'              => ' ',
            'ejecutivo'               => 'Ejecutivo',
            'ejecutivo_helper'        => ' ',
            'variantes'               => 'Variantes',
            'variantes_helper'        => ' ',
            'mayorista'               => 'Mayorista',
            'mayorista_helper'        => ' ',
        ],
    ],
    'clientManagement' => [
        'title'          => 'Client Management',
        'title_singular' => 'Client Management',
    ],
    'visitManagement' => [
        'title'          => 'Visit Management',
        'title_singular' => 'Visit Management',
    ],
    'systemManagement' => [
        'title'          => 'Manejo de Aplicación',
        'title_singular' => 'Manejo de Aplicación',
    ],
    'region' => [
        'title'          => 'Regions',
        'title_singular' => 'Region',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'region'            => 'Region',
            'region_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'place' => [
        'title'          => 'Place',
        'title_singular' => 'Place',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'place'             => 'Place',
            'place_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'region'            => 'Region',
            'region_helper'     => ' ',
        ],
    ],
    'zone' => [
        'title'          => 'Zone',
        'title_singular' => 'Zone',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'zone'              => 'Zone',
            'zone_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'place'             => 'Place',
            'place_helper'      => ' ',
        ],
    ],
    'brand' => [
        'title'          => 'Brand',
        'title_singular' => 'Brand',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'marca'             => 'Marca',
            'marca_helper'      => ' ',
            'categoria'         => 'Categoria',
            'categoria_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'variante' => [
        'title'          => 'Variante',
        'title_singular' => 'Variante',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'producto'          => 'Producto',
            'producto_helper'   => ' ',
            'marca'             => 'Marca',
            'marca_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'visitReport' => [
        'title'          => 'Visit Report',
        'title_singular' => 'Visit Report',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'client'            => 'Client',
            'client_helper'     => ' ',
            'checkin'           => 'Checkin',
            'checkin_helper'    => ' ',
            'checkout'          => 'Checkout',
            'checkout_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'productos'         => 'Productos',
            'productos_helper'  => ' ',
        ],
    ],
];
