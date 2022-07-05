<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [   'name' => 'name',
                'type'=>'string',
                'description'=>'Website name',
                'value'=>'Red Chili',
                'setting_group_id'=>'1'
            ],
            [   'name' => 'logo',
                'type'=>'file',
                'description'=>'Logo',
                'value'=>'/uploads/settings/logo.png',
                'setting_group_id'=>'1'
            ],
            [   'name' => 'url',
                'type'=>'string',
                'description'=>'Website Address',
                'value'=>'http://localhost:8000',
                'setting_group_id'=>'1'
            ],

            [   'name' => 'terms',
                'type'=>'textarea',
                'description'=>'Term Of Use',
                'value'=>'<p>Some rules...</p>',
                'setting_group_id'=>'2'
            ],
            [   'name' => 'about_us',
                'type'=>'textarea',
                'description'=>'About us',
                'value'=>'<p>
We aim to home-produce as much as possiblefor the best quality, and to reduce food mcious cakes, traditional Devon soups, sauces and accompanimentsion.We aim to home-produce as much as possiblefor the best quality, and to reduce food mcious cakes.
</p>',
                'setting_group_id'=>'2'
            ],
            [   'name' => 'contact_us',
                'type'=>'textarea',
                'description'=>'Contact us',
                'value'=>'<p>Contact US</p>',
                'setting_group_id'=>'3'
            ],
            [   'name' => 'email',
                'type'=>'string',
                'description'=>'E-mail',
                'value'=>'info@redchili.com',
                'setting_group_id'=>'3'
            ],
            [   'name' => 'phone',
                'type'=>'string',
                'description'=>'Phone',
                'value'=>'812324567',
                'setting_group_id'=>'3'
            ],
            [   'name' => 'address',
                'type'=>'string',
                'description'=>'Address',
                'value'=>'102, Broad Street, Melbourne, Australia',
                'setting_group_id'=>'3'
            ],
        ];
        foreach ($settings as $setting)
        {
            Setting::create($setting);
        }
        //
    }
}
