<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'Java', 'category' => 'General'],
            ['name' => 'C#', 'category' => 'General'],
            ['name' => 'C++', 'category' => 'General'],
            ['name' => 'C', 'category' => 'General'],
            ['name' => 'Golang', 'category' => 'General'],
            ['name' => 'Php', 'category' => 'General'],
            ['name' => 'Scala', 'category' => 'General'],
            ['name' => 'Dart', 'category' => 'General'],
            ['name' => 'Angular', 'category' => 'Web'],
            ['name' => 'CodeIgniter', 'category' => 'Web'],
            ['name' => 'Django', 'category' => 'Web'],
            ['name' => 'Javascript', 'category' => 'Web'],
            ['name' => 'Joomla', 'category' => 'Web'],
            ['name' => 'Jquery', 'category' => 'Web'],
            ['name' => 'Laravel', 'category' => 'Web'],
            ['name' => 'Magento', 'category' => 'Web'],
            ['name' => 'Node', 'category' => 'Web'],
            ['name' => '.Net', 'category' => 'Web'],
            ['name' => 'Python', 'category' => 'Web'],
            ['name' => 'React', 'category' => 'Web'],
            ['name' => 'Ruby Rails', 'category' => 'Web'],
            ['name' => 'Shopify', 'category' => 'Web'],
            ['name' => 'Spring', 'category' => 'Web'],
            ['name' => 'Symfony', 'category' => 'Web'],
            ['name' => 'Vue', 'category' => 'Web'],
            ['name' => 'Wix', 'category' => 'Web'],
            ['name' => 'Woo Commerce', 'category' => 'Web'],
            ['name' => 'WordPress', 'category' => 'Web'],
            ['name' => 'Android', 'category' => 'Mobile'],
            ['name' => 'Swift', 'category' => 'Mobile'],
            ['name' => 'React Native', 'category' => 'Mobile'],
            ['name' => 'Ionic', 'category' => 'Mobile'],
            ['name' => 'Flutter', 'category' => 'Mobile'],
            ['name' => 'Xamarin', 'category' => 'Mobile'],
            ['name' => 'Oracle RDBMS', 'category' => 'Database'],
            ['name' => 'Amazon RDS', 'category' => 'Database'],
            ['name' => 'IBM DB2', 'category' => 'Database'],
            ['name' => 'MongoDB', 'category' => 'Database'],
            ['name' => 'PostgresSQL', 'category' => 'Database'],
            ['name' => 'Microsoft SQL Server', 'category' => 'Database'],
            ['name' => 'MySQL', 'category' => 'Database'],
            ['name' => 'PhpMyAdmin', 'category' => 'Database'],
            ['name' => 'Microsoft Access', 'category' => 'Database'],
            ['name' => 'Google Firebase', 'category' => 'Database'],
            ['name' => 'Adobe Products', 'category' => 'Design'],
            ['name' => 'Corel Draw', 'category' => 'Design'],
            ['name' => 'ABrush', 'category' => 'Design'],
            ['name' => 'Autodesk 3DS Max', 'category' => 'Design'],
            ['name' => 'Maya', 'category' => 'Design'],
            ['name' => '3DS Max Design', 'category' => 'Design'],
            ['name' => 'Cinema 4D', 'category' => 'Design'],
            ['name' => 'Blender', 'category' => 'Design'],
            ['name' => '3D Slash', 'category' => 'Design'],
            ['name' => 'Unity', 'category' => 'Design'],
            ['name' => 'Database Administration', 'category' => 'IT'],
            ['name' => 'Information Security', 'category' => 'IT'],
            ['name' => 'ERP/CRM Software', 'category' => 'IT'],
            ['name' => 'System Administration', 'category' => 'IT'],
            ['name' => 'Adobe Acrobat', 'category' => 'Admin'],
            ['name' => 'Content writing', 'category' => 'Admin'],
            ['name' => 'Database entry', 'category' => 'Admin'],
            ['name' => 'Diary management', 'category' => 'Admin'],
            ['name' => 'Email management', 'category' => 'Admin'],
            ['name' => 'Excel', 'category' => 'Admin'],
            ['name' => 'MS Office', 'category' => 'Admin'],
            ['name' => 'Online research', 'category' => 'Admin'],
            ['name' => 'Outlook', 'category' => 'Admin'],
            ['name' => 'PowerPoint', 'category' => 'Admin'],
            ['name' => 'Project', 'category' => 'Admin'],
            ['name' => 'SharePoint', 'category' => 'Admin'],
            ['name' => 'Social media', 'category' => 'Admin'],
            ['name' => 'Telephone skills', 'category' => 'Admin'],
            ['name' => 'Visio', 'category' => 'Admin'],
            ['name' => 'Windows 10', 'category' => 'Admin'],
            ['name' => 'Windows 8 and below', 'category' => 'Admin'],
            ['name' => 'Word', 'category' => 'Admin'],

        ];
        foreach ($languages as $category) {
            DB::table('languages')->insert($category);
        }
    }
}
