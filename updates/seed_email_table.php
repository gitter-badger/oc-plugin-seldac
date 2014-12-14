<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\Seldac\Updates
 */

namespace AxC\Seldac\Updates;

use AxC\DataManagement\Models\Email;

/**
 * Add data to Email DB scheme.
 */
class SeedEmailTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Email::truncate();

		$pos = 1;

		Email::create( [
			'type' => 'work',
			'position' => $pos++, 'published' => true, 'address' => 'info@seldacservizi.it',
			'principal' => true
		] );

		Email::create( [
			'type' => 'pec',
			'position' => $pos++, 'published' => true, 'address' => 'seldacservizisrl@pec.it'
		] );

		Email::create( [
			'type' => 'mc-pec',
			'position' => $pos++, 'published' => true, 'address' => 'mircoceseri@pec.it'
		] );

		Email::create( [
			'type' => 'mc-tin',
			'position' => $pos++, 'published' => true, 'address' => 'mircoceseri@tin.it'
		] );

		Email::create( [
			'type' => 'mc-gmail',
			'position' => $pos++, 'published' => true, 'address' => 'mircoceseri@gmail.com'
		] );
	}
}