<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\Seldac\Updates
 */

namespace AxC\Seldac\Updates;

use AxC\DataManagement\Models\Slideshow;

/**
 * Add data to Slide-Show DB scheme.
 */
class SeedSlideshowTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		SlideShow::truncate();

		$pos = 1;

		Slideshow::create( [
			'title' => 'is the answer',
			'description' => 'alle esigenze amministrative di tutte le Aziende, piccole e medie imprese, professionisti ed associazioni.',
			'position' => $pos++, 'published' => true
		] );

		Slideshow::create( [
			'title' => 'offers',
			'description' => "consulenze di alto livello alle imprese, accompagnando passo dopo passo i propri assistiti negli ormai complessi meandri fiscali. Il servizio di elaborazione elettronica dei dati contabili permette di soddisfare tutti gli adempimenti previsti dalle norme vigenti.",
			'position' => $pos++, 'published' => true
		] );

		Slideshow::create( [
			'title' => "svolge",
			'description' => "l'attività di elaborazione dati contabili e fiscali con particolare meticolosità e puntualità con i dati ed i documenti forniti dal Cliente.",
			'position' => $pos++, 'published' => true
		] );
	}
}