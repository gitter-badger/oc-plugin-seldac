<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\Seldac\Updates
 */

namespace AxC\Seldac\Updates;

use Seeder;
use AxC\Seldac\Models\Settings;

/**
 * Add data to Seldac Settings DB scheme.
 */
class SeedSettingsTable extends Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Settings::set('name', 'Seldac');
		Settings::set('full_name', 'Seldac Servizi S.r.L.');
		Settings::set('slogan',
			'The answer to the administrative needs of all companies, small and medium-sized businesses, professionals and associations.');
		Settings::set('about', implode("\n", [
			'provides high-level advice to companies, accompanying step by step their customers in the intricate field of taxation.',
			'The service of electronic data processing accounting allows to fulfill all the formalities required by law.',
			'Our customer can resolve the related tasks because the service is managed by experienced staff',
			'through the use of one of the most advanced management software as ZUCCHETTI.'
		] ) );

		Settings::set('address_street_name', 'via Felice Cavallotti');
		Settings::set('address_street_number', '128');
		Settings::set('address_street_int', '3');
		Settings::set('address_zip', '15067');
		Settings::set('address_city', 'Novi Ligure');
		Settings::set('address_province', 'AL');
		Settings::set('address_country', 'IT');

		Settings::set('vat', Settings::get('vat', '02254830066') );
		Settings::set('rui_section', Settings::get('rui_section', 'E') );
		Settings::set('rui_number', Settings::get('rui_number', 'E000147232') );
		Settings::set('rui_date', Settings::get('rui_date', '10/04/2007') );

		Settings::set('mc_address_street_name', 'via Felice Cavallotti');
		Settings::set('mc_address_street_number', '128');
		Settings::set('mc_address_street_int', '5');
		Settings::set('mc_address_zip', '15067');
		Settings::set('mc_address_city', 'Novi Ligure');
		Settings::set('mc_address_province', 'AL');
		Settings::set('mc_address_country', 'IT');

		Settings::set('mc_nin', 'CSRMRC64P02D612A');
		Settings::set('mc_vat', '05110830485');
	}
}