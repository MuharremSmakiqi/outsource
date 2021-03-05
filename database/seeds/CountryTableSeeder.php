<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $countries = [
            ['initials' => 'AFG', 'country' => 'Afganistan'],
            ['initials' => 'ALA', 'country' => 'Åland Islands'],
            ['initials' => 'ALB', 'country' => 'Albania'],
            ['initials' => 'DZA', 'country' => 'Algeria'],
            ['initials' => 'ASM', 'country' => 'American Samoa'],
            ['initials' => 'AND', 'country' => 'Andorra'],
            ['initials' => 'AGO', 'country' => 'Angola'],
            ['initials' => 'AIA', 'country' => 'Anguilla'],
            ['initials' => 'ATA', 'country' => 'Antarctica'],
            ['initials' => 'ATG', 'country' => 'Antigua and Barbuda'],
            ['initials' => 'ARG', 'country' => 'Argentina'],
            ['initials' => 'ARM', 'country' => 'Armenia'],
            ['initials' => 'ABW', 'country' => 'Aruba'],
            ['initials' => 'AUS', 'country' => 'Australia'],
            ['initials' => 'AUT', 'country' => 'Austria'],
            ['initials' => 'AZE', 'country' => 'Azerbaijan'],
            ['initials' => 'BHS', 'country' => 'Bahamas'],
            ['initials' => 'BHR', 'country' => 'Bahrain'],
            ['initials' => 'BGD', 'country' => 'Bangladesh'],
            ['initials' => 'BRB', 'country' => 'Barbados'],
            ['initials' => 'BLR', 'country' => 'Belarus'],
            ['initials' => 'BEL', 'country' => 'Belgium'],
            ['initials' => 'BLZ', 'country' => 'Belize'],
            ['initials' => 'BEN', 'country' => 'Benin'],
            ['initials' => 'BMU', 'country' => 'Bermuda'],
            ['initials' => 'BTN', 'country' => 'Bhutan'],
            ['initials' => 'BOL', 'country' => 'Bolivia, Plurinational State of'],
            ['initials' => 'BES', 'country' => 'Bonaire, Sint Eustatius and Saba'],
            ['initials' => 'BIH', 'country' => 'Bosnia and Herzegovina'],
            ['initials' => 'BWA', 'country' => 'Botswana'],
            ['initials' => 'BVT', 'country' => 'Bouvet Island'],
            ['initials' => 'BRA', 'country' => 'Brazil'],
            ['initials' => 'IOT', 'country' => 'British Indian Ocean Territory'],
            ['initials' => 'BRN', 'country' => 'Brunei Darussalam'],
            ['initials' => 'BGR', 'country' => 'Bulgaria'],
            ['initials' => 'BFA', 'country' => 'Burkina Faso'],
            ['initials' => 'BDI', 'country' => 'Burundi'],
            ['initials' => 'KHM', 'country' => 'Cambodia'],
            ['initials' => 'CMR', 'country' => 'Cameroon'],
            ['initials' => 'CAN', 'country' => 'Canada'],
            ['initials' => 'CPV', 'country' => 'Cape Verde'],
            ['initials' => 'CYM', 'country' => 'Cayman Islands'],
            ['initials' => 'CAF', 'country' => 'Central African Republic'],
            ['initials' => 'TCD', 'country' => 'Chad'],
            ['initials' => 'CHL', 'country' => 'Chile'],
            ['initials' => 'CHN', 'country' => 'China'],
            ['initials' => 'CXR', 'country' => 'Christmas Island'],
            ['initials' => 'CCK', 'country' => 'Cocos (Keeling) Islands'],
            ['initials' => 'COL', 'country' => 'Colombia'],
            ['initials' => 'COM', 'country' => 'Comoros'],
            ['initials' => 'COG', 'country' => 'Congo'],
            ['initials' => 'COD', 'country' => 'Congo, the Democratic Republic of the'],
            ['initials' => 'COK', 'country' => 'Cook Islands'],
            ['initials' => 'CRI', 'country' => 'Costa Rica'],
            ['initials' => 'CIV', 'country' => 'Côte dIvoire'],
            ['initials' => 'HRV', 'country' => 'Croatia'],
            ['initials' => 'CUB', 'country' => 'Cuba'],
            ['initials' => 'CUW', 'country' => 'Curaçao'],
            ['initials' => 'CYP', 'country' => 'Cyprus'],
            ['initials' => 'CZE', 'country' => 'Czech Republic'],
            ['initials' => 'DNK', 'country' => 'Denmark'],
            ['initials' => 'DJI', 'country' => 'Djibouti'],
            ['initials' => 'DMA', 'country' => 'Dominica'],
            ['initials' => 'DOM', 'country' => 'Dominican Republic'],
            ['initials' => 'ECU', 'country' => 'Ecuador'],
            ['initials' => 'EGY', 'country' => 'Egypt'],
            ['initials' => 'SLV', 'country' => 'El Salvador'],
            ['initials' => 'GNQ', 'country' => 'Equatorial Guinea'],
            ['initials' => 'ERI', 'country' => 'Eritrea'],
            ['initials' => 'EST', 'country' => 'Estonia'],
            ['initials' => 'ETH', 'country' => 'Ethiopia'],
            ['initials' => 'FLK', 'country' => 'Falkland Islands (Malvinas)'],
            ['initials' => 'FRO', 'country' => 'Faroe Islands'],
            ['initials' => 'FJI', 'country' => 'Fiji'],
            ['initials' => 'FIN', 'country' => 'Finland'],
            ['initials' => 'FRA', 'country' => 'France'],
            ['initials' => 'GUF', 'country' => 'French Guiana'],
            ['initials' => 'PYF', 'country' => 'French Polynesia'],
            ['initials' => 'ATF', 'country' => 'French Southern Territories'],
            ['initials' => 'GAB', 'country' => 'Gabon'],
            ['initials' => 'GMB', 'country' => 'Gambia'],
            ['initials' => 'GEO', 'country' => 'Georgia'],
            ['initials' => 'DEU', 'country' => 'Germany'],
            ['initials' => 'GHA', 'country' => 'Ghana'],
            ['initials' => 'GIB', 'country' => 'Gibraltar'],
            ['initials' => 'GRC', 'country' => 'Greece'],
            ['initials' => 'GRL', 'country' => 'Greenland'],
            ['initials' => 'GRD', 'country' => 'Grenada'],
            ['initials' => 'GLP', 'country' => 'Guadeloupe'],
            ['initials' => 'GUM', 'country' => 'Guam'],
            ['initials' => 'GTM', 'country' => 'Guatemala'],
            ['initials' => 'GGY', 'country' => 'Guernsey'],
            ['initials' => 'GIN', 'country' => 'Guinea'],
            ['initials' => 'GNB', 'country' => 'Guinea-Bissau'],
            ['initials' => 'GUY', 'country' => 'Guyana'],
            ['initials' => 'HTI', 'country' => 'Haiti'],
            ['initials' => 'HMD', 'country' => 'Heard Island and McDonald Islands'],
            ['initials' => 'VAT', 'country' => 'Holy See (Vatican City State)'],
            ['initials' => 'HND', 'country' => 'Honduras'],
            ['initials' => 'HKG', 'country' => 'Hong Kong'],
            ['initials' => 'HUN', 'country' => 'Hungary'],
            ['initials' => 'ISL', 'country' => 'Iceland'],
            ['initials' => 'IND', 'country' => 'India'],
            ['initials' => 'IDN', 'country' => 'Indonesia'],
            ['initials' => 'IRN', 'country' => 'Iran, Islamic Republic of'],
            ['initials' => 'IRQ', 'country' => 'Iraq'],
            ['initials' => 'IRL', 'country' => 'Ireland'],
            ['initials' => 'IMN', 'country' => 'Isle of Man'],
            ['initials' => 'ISR', 'country' => 'Israel'],
            ['initials' => 'ITA', 'country' => 'Italy'],
            ['initials' => 'JAM', 'country' => 'Jamaica'],
            ['initials' => 'JPN', 'country' => 'Japan'],
            ['initials' => 'JEY', 'country' => 'Jersey'],
            ['initials' => 'JOR', 'country' => 'Jordan'],
            ['initials' => 'KAZ', 'country' => 'Kazakhstan'],
            ['initials' => 'KEN', 'country' => 'Kenya'],
            ['initials' => 'KIR', 'country' => 'Kiribati'], 
            ['initials' => 'KOR', 'country' => 'Korea'],
            ['initials' => 'XK', 'country' => 'Kosovo'],
            ['initials' => 'KWT', 'country' => 'Kuwait'],
            ['initials' => 'KGZ', 'country' => 'Kyrgyzstan'],
            ['initials' => 'LAO', 'country' => 'Lao People`s Democratic Republic'],
            ['initials' => 'LVA', 'country' => 'Latvia'],
            ['initials' => 'LBN', 'country' => 'Lebanon'],
            ['initials' => 'LSO', 'country' => 'Lesotho'],
            ['initials' => 'LBR', 'country' => 'Liberia'],
            ['initials' => 'LBY', 'country' => 'Libya'],
            ['initials' => 'LIE', 'country' => 'Liechtenstein'],
            ['initials' => 'LTU', 'country' => 'Lithuania'],
            ['initials' => 'LUX', 'country' => 'Luxembourg'],
            ['initials' => 'MAC', 'country' => 'Macao'],
            ['initials' => 'MKD', 'country' => 'Macedonia, the former Yugoslav Republic of'],
            ['initials' => 'MDG', 'country' => 'Madagascar'],
            ['initials' => 'MWI', 'country' => 'Malawi'],
            ['initials' => 'MYS', 'country' => 'Malaysia'],
            ['initials' => 'MDV', 'country' => 'Maldives'],
            ['initials' => 'MLI', 'country' => 'Mali'],
            ['initials' => 'MLT', 'country' => 'Malta'],
            ['initials' => 'MHL', 'country' => 'Marshall Islands'],
            ['initials' => 'MTQ', 'country' => 'Martinique'],
            ['initials' => 'MRT', 'country' => 'Mauritania'],
            ['initials' => 'MUS', 'country' => 'Mauritius'],
            ['initials' => 'MYT', 'country' => 'Mayotte'],
            ['initials' => 'MEX', 'country' => 'Mexico'],
            ['initials' => 'FSM', 'country' => 'Micronesia, Federated States of'],
            ['initials' => 'MDA', 'country' => 'Moldova, Republic of'],
            ['initials' => 'MCO', 'country' => 'Monaco'],
            ['initials' => 'MNG', 'country' => 'Mongolia'],
            ['initials' => 'MNE', 'country' => 'Montenegro'],
            ['initials' => 'MSR', 'country' => 'Montserrat'],
            ['initials' => 'MAR', 'country' => 'Morocco'],
            ['initials' => 'MOZ', 'country' => 'Mozambique'],
            ['initials' => 'MMR', 'country' => 'Myanmar'],
            ['initials' => 'NAM', 'country' => 'Namibia'],
            ['initials' => 'NRU', 'country' => 'Nauru'],
            ['initials' => 'NPL', 'country' => 'Nepal'],
            ['initials' => 'NLD', 'country' => 'Netherlands'],
            ['initials' => 'NCL', 'country' => 'New Caledonia'],
            ['initials' => 'NZL', 'country' => 'New Zealand'],
            ['initials' => 'NIC', 'country' => 'Nicaragua'],
            ['initials' => 'NER', 'country' => 'Niger'],
            ['initials' => 'NGA', 'country' => 'Nigeria'],
            ['initials' => 'NIU', 'country' => 'Niue'],
            ['initials' => 'NFK', 'country' => 'Norfolk Island'],
            ['initials' => 'MNP', 'country' => 'Northern Mariana Islands'],
            ['initials' => 'NOR', 'country' => 'Norway'],
            ['initials' => 'OMN', 'country' => 'Oman'],
            ['initials' => 'PAK', 'country' => 'Pakistan'],
            ['initials' => 'PLW', 'country' => 'Palau'],
            ['initials' => 'PSE', 'country' => 'Palestinian Territory, Occupied'],
            ['initials' => 'PAN', 'country' => 'Panama'],
            ['initials' => 'PNG', 'country' => 'Papua New Guinea'],
            ['initials' => 'PRY', 'country' => 'Paraguay'],
            ['initials' => 'PER', 'country' => 'Peru'],
            ['initials' => 'PHL', 'country' => 'Philippines'],
            ['initials' => 'PCN', 'country' => 'Pitcairn'],
            ['initials' => 'POL', 'country' => 'Poland'],
            ['initials' => 'PRT', 'country' => 'Portugal'],
            ['initials' => 'PRI', 'country' => 'Puerto Rico'],
            ['initials' => 'QAT', 'country' => 'Qatar'],
            ['initials' => 'REU', 'country' => 'Réunion'],
            ['initials' => 'ROU', 'country' => 'Romania'],
            ['initials' => 'RUS', 'country' => 'Russian Federation'],
            ['initials' => 'RWA', 'country' => 'Rwanda'],
            ['initials' => 'BLM', 'country' => 'Saint Barthélemy'],
            ['initials' => 'SHN', 'country' => 'Saint Helena, Ascension and Tristan da Cunha'],
            ['initials' => 'KNA', 'country' => 'Saint Kitts and Nevis'],
            ['initials' => 'LCA', 'country' => 'Saint Lucia'],
            ['initials' => 'MAF', 'country' => 'Saint Martin (French part)'],
            ['initials' => 'SPM', 'country' => 'Saint Pierre and Miquelon'],
            ['initials' => 'VCT', 'country' => 'Saint Vincent and the Grenadines'],
            ['initials' => 'WSM', 'country' => 'Samoa'],
            ['initials' => 'SMR', 'country' => 'San Marino'],
            ['initials' => 'STP', 'country' => 'Sao Tome and Principe'],
            ['initials' => 'SAU', 'country' => 'Saudi Arabia'],
            ['initials' => 'SEN', 'country' => 'Senegal'],
            ['initials' => 'SRB', 'country' => 'Serbia'],
            ['initials' => 'SYC', 'country' => 'Seychelles'],
            ['initials' => 'SLE', 'country' => 'Sierra Leone'],
            ['initials' => 'SGP', 'country' => 'Singapore'],
            ['initials' => 'SXM', 'country' => 'Sint Maarten (Dutch part)'],
            ['initials' => 'SVK', 'country' => 'Slovakia'],
            ['initials' => 'SVN', 'country' => 'Slovenia'],
            ['initials' => 'SLB', 'country' => 'Solomon Islands'],
            ['initials' => 'SOM', 'country' => 'Somalia'],
            ['initials' => 'ZAF', 'country' => 'South Africa'],
            ['initials' => 'SGS', 'country' => 'South Georgia and the South Sandwich Islands'],
            ['initials' => 'SSD', 'country' => 'South Sudan'],
            ['initials' => 'ESP', 'country' => 'Spain'],
            ['initials' => 'LKA', 'country' => 'Sri Lanka'],
            ['initials' => 'SDN', 'country' => 'Sudan'],
            ['initials' => 'SUR', 'country' => 'Suriname'],
            ['initials' => 'SJM', 'country' => 'Svalbard and Jan Mayen'],
            ['initials' => 'SWZ', 'country' => 'Swaziland'],
            ['initials' => 'SWE', 'country' => 'Sweden'],
            ['initials' => 'CHE', 'country' => 'Switzerland'],
            ['initials' => 'SYR', 'country' => 'Syrian Arab Republic'],
            ['initials' => 'TWN', 'country' => 'Taiwan, Province of China'],
            ['initials' => 'TJK', 'country' => 'Tajikistan'],
            ['initials' => 'TZA', 'country' => 'Tanzania, United Republic of'],
            ['initials' => 'THA', 'country' => 'Thailand'],
            ['initials' => 'TLS', 'country' => 'Timor-Leste'],
            ['initials' => 'TGO', 'country' => 'Togo'],
            ['initials' => 'TKL', 'country' => 'Tokelau'],
            ['initials' => 'TON', 'country' => 'Tonga'],
            ['initials' => 'TTO', 'country' => 'Trinidad and Tobago'],
            ['initials' => 'TUN', 'country' => 'Tunisia'],
            ['initials' => 'TUR', 'country' => 'Turkey'],
            ['initials' => 'TKM', 'country' => 'Turkmenistan'],
            ['initials' => 'TCA', 'country' => 'Turks and Caicos Islands'],
            ['initials' => 'TUV', 'country' => 'Tuvalu'],
            ['initials' => 'UGA', 'country' => 'Uganda'],
            ['initials' => 'UKR', 'country' => 'Ukraine'],
            ['initials' => 'ARE', 'country' => 'United Arab Emirates'],
            ['initials' => 'GBR', 'country' => 'United Kingdom'],
            ['initials' => 'USA', 'country' => 'United States'],
            ['initials' => 'UMI', 'country' => 'United States Minor Outlying Islands'],
            ['initials' => 'URY', 'country' => 'Uruguay'],
            ['initials' => 'UZB', 'country' => 'Uzbekistan'],
            ['initials' => 'VUT', 'country' => 'Vanuatu'],
            ['initials' => 'VEN', 'country' => 'Venezuela, Bolivarian Republic of'],
            ['initials' => 'VNM', 'country' => 'Viet Nam'],
            ['initials' => 'VGB', 'country' => 'Virgin Islands, British'],
            ['initials' => 'VIR', 'country' => 'Virgin Islands, U.S.'],
            ['initials' => 'WLF', 'country' => 'Wallis and Futuna'],
            ['initials' => 'ESH', 'country' => 'Western Sahara'],
            ['initials' => 'YEM', 'country' => 'Yemen'],
            ['initials' => 'ZMB', 'country' => 'Zambia'],
            ['initials' => 'ZWE', 'country' => 'Zimbabwe'],
            ['initials' => 'OOO', 'country' => 'Other']
        ];
        foreach ($countries as $country)
        DB::table('countries')->insert($country);
    }
}
