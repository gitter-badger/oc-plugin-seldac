<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\Seldac\Updates
 */

namespace AxC\Seldac\Updates;

use AxC\DataManagement\Models\InsuranceContent;
use AxC\DataManagement\Models\InsuranceContentItem;

/**
 * Add data to InsuranceContent DB scheme.
 */
class SeedInsuranceContentTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		InsuranceContent::truncate();
		InsuranceContentItem::truncate();

		$pos_cont = 1;
		$pos_cont_item = 1;

		$ins_cont = InsuranceContent::create( [
			'title' => 'Persone',
			'position' => $pos_cont++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Auto e Moto',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Globali Abitazione',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Capofamiglia',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Infortuni',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Salute',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Impianti fotovoltaici',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Piani di accumulo',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Polizze vita',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Fondi integrativi (F.I.P)',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Investimenti',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Credito al consumo',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		$pos_cont_item = 1;
		$ins_cont = InsuranceContent::create( [
			'title' => 'Aziende',
			'position' => $pos_cont++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Auto e flotte',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Globali aziende',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Globali agricoltori',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'C.A.R.',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'E.A.R.',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Postuma',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Grandine',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Terremoto',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Infortuni',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Salute',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Aziende',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Fideiussioni',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Fondi Integrativi (F.I.P.)',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'T.F.R.',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Previdenza',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Fringe benefit',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Impianti fotovoltaici',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Trasporti',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		$pos_cont_item = 1;
		$ins_cont = InsuranceContent::create( [
			'title' => 'Professionisti',
			'position' => $pos_cont++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Globali studio e ufficio',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Rischi elettronici',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Architetti',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Avvocati',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Ingegneri',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Medici',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Odontoiatri',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Geometri',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Commercialisti',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Notai',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'R.C. Consulenti del lavoro',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		$pos_cont_item = 1;
		$ins_cont = InsuranceContent::create( [
			'title' => 'Commercio',
			'position' => $pos_cont++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Globali negozio',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );

		InsuranceContentItem::create( [
			'value' => 'Globali albergo',
			'insurance_content_id' => $ins_cont->id, 'position' => $pos_cont_item++, 'published' => true
		] );
	}
}