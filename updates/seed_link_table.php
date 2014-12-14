<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\Seldac\Updates
 */

namespace AxC\Seldac\Updates;

use AxC\DataManagement\Models\Link;

/**
 * Add data to Link DB scheme.
 */
class SeedLinkTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Link::truncate();

		$pos = 1;

		Link::create( [
			'title' => 'Agenzia delle Entrate',
			'description' => "Operativa dal 1° gennaio 2001, nasce dalla riorganizzazione dell'Amministrazione finanziaria a seguito del Decreto legislativo n° 300 del 1999.\nHa un proprio statuto e appositi regolamenti che regolano l'amministrazione e la contabilità.\nGli organi dell'Agenzia sono costituiti dal Direttore, dal Comitato di gestione, dal Collegio dei Revisori dei conti.\nDal 1° dicembre 2012, ha incorporato l'<em class=\"text-success\">Agenzia del Territorio</em> (articolo 23-quater del Dl 95/2012).",
			'position' => $pos++, 'published' => true, 'url' => 'http://www.agenziaentrate.it'
		] );

		Link::create( [
			'title' => 'INPS - Istituto Nazionale della Previdenza Sociale',
			'description' => "Tra i più grandi e complessi enti previdenziali d'Europa, gestisce la quasi totalità della previdenza italiana ed ha un bilancio che per entità è il secondo dopo quello dello Stato.\nSono assicurati all'INPS la maggior parte dei lavoratori dipendenti del settore pubblico e privato e dei lavoratori autonomi. L'attività principale consiste nella liquidazione e nel pagamento delle pensioni e indennità di natura previdenziale e di natura assistenziale.",
			'position' => $pos++, 'published' => true, 'url' => 'http://www.inps.it'
		] );

		Link::create( [
			'title' => "Istituto Nazionale per l'Assicurazione contro gli Infortuni sul Lavoro",
			'description' => "Istituto Nazionale Assicurazione contro gli Infortuni sul Lavoro, è un Ente pubblico non economico che gestisce l'assicurazione obbligatoria contro gli infortuni sul lavoro e le malattie professionali.\nGli obiettivi sono: <em>1</em> - ridurre il fenomeno infortunistico, <em>2</em> - assicurare i lavoratori che svolgono attività a rischio e <em>3</em> - garantire il reinserimento nella vita lavorativa degli infortunati sul lavoro.",
			'position' => $pos++, 'published' => true, 'url' => 'http://www.inail.it'
		] );
	}
}