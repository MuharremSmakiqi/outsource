<?php

use Illuminate\Database\Seeder;

class Languages2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $languageseds = [
          ['name' => 'Afrikanns'],
          ['name' => 'Albanian'],
          ['name' => 'Arabic'],
          ['name' => 'Armenian'],
          ['name' => 'Basque'],
          ['name' => 'Bengali'],
          ['name' => 'Bulgarian'],
          ['name' => 'Catalan'],
          ['name' => 'Cambodian'],
          ['name' => 'Chinese'],
          ['name' => 'Croation'],
          ['name' => 'Czech'],
          ['name' => 'Danish'],
          ['name' => 'Dutch'],
          ['name' => 'English'],
          ['name' => 'Estonian'],
          ['name' => 'Fiji'],
          ['name' => 'Finnish'],
          ['name' => 'French'],
          ['name' => 'Georgian'],
          ['name' => 'German'],
          ['name' => 'Greek'],
          ['name' => 'Gujarati'],
          ['name' => 'Hebrew'],
          ['name' => 'Hindi'],
          ['name' => 'Hungarian'],
          ['name' => 'Icelandic'],
          ['name' => 'Indonesian'],
          ['name' => 'Irish'],
          ['name' => 'Italian'],
          ['name' => 'Japanese'],
          ['name' => 'Javanese'],
          ['name' => 'Korean'],
          ['name' => 'LLatinA'],
          ['name' => 'Latvian'],
          ['name' => 'Lithuanian'],
          ['name' => 'Macedonian'],
          ['name' => 'Malay'],
          ['name' => 'Malayalam'],
          ['name' => 'Maltese'],
          ['name' => 'Maori'],
          ['name' => 'Marathi'],
          ['name' => 'Mongolian'],
          ['name' => 'Nepali'],
          ['name' => 'Norwegian'],
          ['name' => 'Persian'],
          ['name' => 'Polish'],
          ['name' => 'Portuguese'],
          ['name' => 'Punjabi'],
          ['name' => 'Quechua'],
          ['name' => 'Romanian'],
          ['name' => 'Russian'],
          ['name' => 'Samoan'],
          ['name' => 'Serbian'],
          ['name' => 'Slovak'],
          ['name' => 'Slovenian'],
          ['name' => 'Spanish'],
          ['name' => 'Swahili'],
          ['name' => 'Swedish'],
          ['name' => 'Tamil'],
          ['name' => 'Tatar'],
          ['name' => 'TE'],
          ['name' => 'Telugu'],
          ['name' => 'Tibetan'],
          ['name' => 'Tonga'],
          ['name' => 'Turkish'],
          ['name' => 'Ukranian'],
          ['name' => 'Urdu'],
          ['name' => 'Uzbek'],
          ['name' => 'Vietnamese'],
          ['name' => 'Welsh'],
          ['name' => 'Xhosa']
    ];
    foreach ($languageseds as $language)
    DB::table('languages2')->insert($language); 
    } 
}
