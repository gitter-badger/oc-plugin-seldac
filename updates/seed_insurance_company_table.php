<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\Seldac\Updates
 */

namespace AxC\Seldac\Updates;

use AxC\DataManagement\Models\InsuranceCompany;

/**
 * Add data to InsuranceCompany DB scheme.
 */
class SeedInsuranceCompanyTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		InsuranceCompany::truncate();

		$pos = 1;

		InsuranceCompany::create( [
			'title' => 'SLP Assicurazioni S.p.A.',
			'url' => 'http://www.slpspa.com', 'position' => $pos++, 'published' => true
		] );

		InsuranceCompany::create( [
			'title' => 'Coface for safer trade',
			'url' => 'http://www.coface.it', 'position' => $pos++, 'published' => true
		] );

		InsuranceCompany::create( [
			'title' => 'Vereinigte Hagelversicherung VVaG (VH Italy)',
			'url' => 'http://www.vereinigte-hagel.net', 'position' => $pos++, 'published' => true
		] );

		InsuranceCompany::create( [
			'title' => 'MetLife',
			'url' => 'https://www.metlife.it', 'position' => $pos++, 'published' => true
		] );

		InsuranceCompany::create( [
			'title' => 'RSA (Royal & SunAlliance)',
			'url' => 'http://www.rsagroup.it', 'position' => $pos++, 'published' => true
		] );

		InsuranceCompany::create( [
			'title' => 'Sara Assicurazioni (Car, Motorcycle, Home, Life Retirement, and Investment)',
			'url' => 'http://www.sara.it', 'position' => $pos++, 'published' => true
		] );

		InsuranceCompany::create( [
			'title' => 'UNIQA (Group Austria)',
			'url' => 'http://www.uniqagroup.it', 'position' => $pos++, 'published' => true
		] );

		InsuranceCompany::create( [
				'title' => 'Gruppo ITAS Assicurazioni - Shareholders, not Customers',
				'url' => 'http://www.gruppoitas.it', 'position' => $pos++, 'published' => true
		] );

		InsuranceCompany::create( [
			'title' => 'Global Assistance (Outsource your unforeseen events)',
			'url' => 'http://www.globalassistance.it', 'position' => $pos++, 'published' => true
		] );

		InsuranceCompany::create( [
			'title' => 'ASSIMEDICI (Insurance Consulting Doctors)',
			'url' => 'http://www.assimedici.it', 'position' => $pos++, 'published' => true
		] );
	}
}