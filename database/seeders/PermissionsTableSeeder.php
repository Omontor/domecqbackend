<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 18,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 21,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 22,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 23,
                'title' => 'segment_create',
            ],
            [
                'id'    => 24,
                'title' => 'segment_edit',
            ],
            [
                'id'    => 25,
                'title' => 'segment_show',
            ],
            [
                'id'    => 26,
                'title' => 'segment_delete',
            ],
            [
                'id'    => 27,
                'title' => 'segment_access',
            ],
            [
                'id'    => 28,
                'title' => 'clasification_create',
            ],
            [
                'id'    => 29,
                'title' => 'clasification_edit',
            ],
            [
                'id'    => 30,
                'title' => 'clasification_show',
            ],
            [
                'id'    => 31,
                'title' => 'clasification_delete',
            ],
            [
                'id'    => 32,
                'title' => 'clasification_access',
            ],
            [
                'id'    => 33,
                'title' => 'provider_create',
            ],
            [
                'id'    => 34,
                'title' => 'provider_edit',
            ],
            [
                'id'    => 35,
                'title' => 'provider_show',
            ],
            [
                'id'    => 36,
                'title' => 'provider_delete',
            ],
            [
                'id'    => 37,
                'title' => 'provider_access',
            ],
            [
                'id'    => 38,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'group_create',
            ],
            [
                'id'    => 40,
                'title' => 'group_edit',
            ],
            [
                'id'    => 41,
                'title' => 'group_show',
            ],
            [
                'id'    => 42,
                'title' => 'group_delete',
            ],
            [
                'id'    => 43,
                'title' => 'group_access',
            ],
            [
                'id'    => 44,
                'title' => 'status_create',
            ],
            [
                'id'    => 45,
                'title' => 'status_edit',
            ],
            [
                'id'    => 46,
                'title' => 'status_show',
            ],
            [
                'id'    => 47,
                'title' => 'status_delete',
            ],
            [
                'id'    => 48,
                'title' => 'status_access',
            ],
            [
                'id'    => 49,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 50,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 51,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 52,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 53,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 54,
                'title' => 'witness_category_create',
            ],
            [
                'id'    => 55,
                'title' => 'witness_category_edit',
            ],
            [
                'id'    => 56,
                'title' => 'witness_category_show',
            ],
            [
                'id'    => 57,
                'title' => 'witness_category_delete',
            ],
            [
                'id'    => 58,
                'title' => 'witness_category_access',
            ],
            [
                'id'    => 59,
                'title' => 'witness_create',
            ],
            [
                'id'    => 60,
                'title' => 'witness_edit',
            ],
            [
                'id'    => 61,
                'title' => 'witness_show',
            ],
            [
                'id'    => 62,
                'title' => 'witness_delete',
            ],
            [
                'id'    => 63,
                'title' => 'witness_access',
            ],
            [
                'id'    => 64,
                'title' => 'checkin_create',
            ],
            [
                'id'    => 65,
                'title' => 'checkin_edit',
            ],
            [
                'id'    => 66,
                'title' => 'checkin_show',
            ],
            [
                'id'    => 67,
                'title' => 'checkin_delete',
            ],
            [
                'id'    => 68,
                'title' => 'checkin_access',
            ],
            [
                'id'    => 69,
                'title' => 'checkout_create',
            ],
            [
                'id'    => 70,
                'title' => 'checkout_edit',
            ],
            [
                'id'    => 71,
                'title' => 'checkout_show',
            ],
            [
                'id'    => 72,
                'title' => 'checkout_delete',
            ],
            [
                'id'    => 73,
                'title' => 'checkout_access',
            ],
            [
                'id'    => 74,
                'title' => 'client_create',
            ],
            [
                'id'    => 75,
                'title' => 'client_edit',
            ],
            [
                'id'    => 76,
                'title' => 'client_show',
            ],
            [
                'id'    => 77,
                'title' => 'client_delete',
            ],
            [
                'id'    => 78,
                'title' => 'client_access',
            ],
            [
                'id'    => 79,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 80,
                'title' => 'visit_management_access',
            ],
            [
                'id'    => 81,
                'title' => 'system_management_access',
            ],
            [
                'id'    => 82,
                'title' => 'region_create',
            ],
            [
                'id'    => 83,
                'title' => 'region_edit',
            ],
            [
                'id'    => 84,
                'title' => 'region_show',
            ],
            [
                'id'    => 85,
                'title' => 'region_delete',
            ],
            [
                'id'    => 86,
                'title' => 'region_access',
            ],
            [
                'id'    => 87,
                'title' => 'place_create',
            ],
            [
                'id'    => 88,
                'title' => 'place_edit',
            ],
            [
                'id'    => 89,
                'title' => 'place_show',
            ],
            [
                'id'    => 90,
                'title' => 'place_delete',
            ],
            [
                'id'    => 91,
                'title' => 'place_access',
            ],
            [
                'id'    => 92,
                'title' => 'zone_create',
            ],
            [
                'id'    => 93,
                'title' => 'zone_edit',
            ],
            [
                'id'    => 94,
                'title' => 'zone_show',
            ],
            [
                'id'    => 95,
                'title' => 'zone_delete',
            ],
            [
                'id'    => 96,
                'title' => 'zone_access',
            ],
            [
                'id'    => 97,
                'title' => 'brand_create',
            ],
            [
                'id'    => 98,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 99,
                'title' => 'brand_show',
            ],
            [
                'id'    => 100,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 101,
                'title' => 'brand_access',
            ],
            [
                'id'    => 102,
                'title' => 'variante_create',
            ],
            [
                'id'    => 103,
                'title' => 'variante_edit',
            ],
            [
                'id'    => 104,
                'title' => 'variante_show',
            ],
            [
                'id'    => 105,
                'title' => 'variante_delete',
            ],
            [
                'id'    => 106,
                'title' => 'variante_access',
            ],
            [
                'id'    => 107,
                'title' => 'visit_report_create',
            ],
            [
                'id'    => 108,
                'title' => 'visit_report_edit',
            ],
            [
                'id'    => 109,
                'title' => 'visit_report_show',
            ],
            [
                'id'    => 110,
                'title' => 'visit_report_delete',
            ],
            [
                'id'    => 111,
                'title' => 'visit_report_access',
            ],
            [
                'id'    => 112,
                'title' => 'appointment_create',
            ],
            [
                'id'    => 113,
                'title' => 'appointment_edit',
            ],
            [
                'id'    => 114,
                'title' => 'appointment_show',
            ],
            [
                'id'    => 115,
                'title' => 'appointment_delete',
            ],
            [
                'id'    => 116,
                'title' => 'appointment_access',
            ],
            [
                'id'    => 117,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
