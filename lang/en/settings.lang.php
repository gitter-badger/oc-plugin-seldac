<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN i18n.
 * @var array
 */
$settings_lang = [
	'description' => 'Configure Seldac settings',
	'label' => 'Seldac',
	'brand' => [
		'app_name' => ['commentAbove' => '(Readonly - You can modify this value in Seldac Settings / Info / Name)'],
		'app_tagline' => ['commentAbove' => '(Readonly - You can modify this value in Seldac Settings / Info / Full-Name)'],
	],
	'seo_extension' => [
		'title' => ['comment' => '(Readonly - You can modify this value in Seldac Settings / Info / Name)']
	],
	'fields' => [
		'tab' => [
			'address' => 'Address',
			'id' => 'IDs',
			'info' => 'Info',
			'mc' => [
				'address' => 'Mirco Ceseri Address',
				'id' => 'Mirco Ceseri IDs'
			],
			'rui' => 'RUI'
		],
		'name' => [
			'comment' => 'The company short-name is required and must be alphanumeric and with a length between 5 and 10 characters',
			'label' => 'Name',
			'placeholder' => 'Insert the company short name',
		],
		'full_name' => [
			'comment' => 'The company full-name is required and must have a length between 5 and 100 characters',
			'label' => 'Full-Name',
			'placeholder' => 'Insert the company full-name',
		],
		'slogan' => [
			'comment' => 'The company slogan is required and must have a length between 10 and 20 characters',
			'label' => 'Slogan',
		],
		'about' => [
			'comment' => 'The description of the company is required and must have a minimum length of 20 characters',
			'label' => 'About',
		],
		'address' => [
			'street' => [
				'name' => [
					'comment' => 'The company address street name is required and must have a minimum length of 5 characters',
					'label'=> 'Street name',
					'placeholder' => 'Insert the company address street name',
				],
				'number' => [
					'comment' => 'The company address street number is required and must be alphanumeric',
					'label'=> 'Number',
					'placeholder' => 'Insert the company address street number'
				],
				'int' => [
					'comment' => 'The company address street internal number is optional and must be alphanumeric',
					'label'=> 'Int.',
					'placeholder' => 'Insert the company address street int. number'
				]
			],
			'zip' => [
				'comment' => 'The company address ZIP is required and must be alphanumeric',
				'label'=> 'ZIP',
				'placeholder' => 'Insert the company address ZIP'
			],
			'city' => [
				'comment' => 'The company street city is required and must have a minimum length of 2 characters',
				'label'=> 'City',
				'placeholder' => 'Insert the company city'
			],
			'province' => [
				'comment' => 'Select the required company province',
				'label'=> 'Province'
			],
			'country' => [
				'comment' => 'Select the required company country',
				'label'=> 'Country'
			]
		],
		'vat' => [
			'comment' => 'The VAT company is required and must be alphanumeric',
			'label' => 'VAT',
			'placeholder' => 'Insert the VAT company'
		],
		'nin' => [
			'comment' => 'The NIN company is required and must be alphanumeric',
			'label' => 'NIN',
			'placeholder' => 'Insert the NIN company'
		],
		'rui' =>
		[
			'section' => [
				'comment' => 'The RUI section of the company is required and must be alphanumeric',
				'label' => 'Section',
				'placeholder' => 'Insert the company RUI section'
			],
			'number' => [
				'comment' => 'The RUI number of the company is required and must be alphanumeric',
				'label' => 'Number',
				'placeholder' => 'Insert the company RUI number'
			],
			'date' => [
				'comment' => 'Select the required RUI date of the company',
				'label' => 'Date'
			]
		]
	]
];