<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\Seldac\Updates
 */

namespace AxC\Seldac\Updates;

use AxC\DataManagement\Models\Phone;

/**
 * Add data to Phone DB scheme.
 */
class SeedPhoneTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Phone::truncate();

		$pos = 1;

		Phone::create( [
			'type' => 'work',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 0143-72.690',
			'principal' => true
		] );

		Phone::create( [
			'type' => 'work-secondary',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 0143-34.49.41'
		] );

		Phone::create( [
			'type' => 'mobile',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 338-67.84.642'
		] );

		Phone::create( [
			'type' => 'mobile-secondary',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 393-90.14.534'
		] );

		Phone::create( [
			'type' => 'mobile-alternative',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 327-04.33.885'
		] );

		Phone::create( [
			'type' => 'mc-mobile',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 338-53.10.398'
		] );

		Phone::create( [
			'type' => 'mc-mobile-secondary',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 327-04.33.884'
		] );
	}
}