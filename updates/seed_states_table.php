<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\Seldac\Updates
 */

namespace AxC\Seldac\Updates;

use Seeder;
use RainLab\User\Models\Country;
use RainLab\User\Models\State;

/**
 * Add data to Seldac Settings DB scheme.
 */
class SeedStatesTable extends Seeder
{
	private $__data = [
		'IT' => [
			'AG' => 'Agrigento',
			'AL' => 'Alessandria',
			'AN' => 'Ancona',
			'AO' => 'Aosta',
			'AR' => 'Arezzo',
			'AP' => 'Ascoli Piceno',
			'AT' => 'Asti',
			'AV' => 'Avellino',
			'BA' => 'Bari',
			'BT' => 'Barletta-Andria-Trani',
			'BL' => 'Belluno',
			'BN' => 'Benevento',
			'BG' => 'Bergamo',
			'BI' => 'Biella',
			'BO' => 'Bologna',
			'BZ' => 'Bolzano',
			'BS' => 'Brescia',
			'BR' => 'Brindisi',
			'CA' => 'Cagliari',
			'CL' => 'Caltanissetta',
			'CB' => 'Campobasso',
			'CI-Iglesias' => 'Carbonia-Iglesias',
			'CE' => 'Caserta',
			'CT' => 'Catania',
			'CZ' => 'Catanzaro',
			'CH' => 'Chieti',
			'CO' => 'Como',
			'CS' => 'Cosenza',
			'CR' => 'Cremona',
			'KR' => 'Crotone',
			'CN' => 'Cuneo',
			'EN' => 'Enna',
			'FM' => 'Fermo',
			'FE' => 'Ferrara',
			'FI' => 'Florence',
			'FG' => 'Foggia',
			'FC' => 'Forlì-Cesena',
			'FR' => 'Frosinone',
			'GE' => 'Genoa',
			'GO' => 'Gorizia',
			'GR' => 'Grosseto',
			'IM' => 'Imperia',
			'IS' => 'Isernia',
			'SP' => 'La Spezia',
			'AQ' => 'L\'Aquila',
			'LT' => 'Latina',
			'LE' => 'Lecce',
			'LC' => 'Lecco',
			'LI' => 'Livorno',
			'LO' => 'Lodi',
			'LU' => 'Lucca',
			'MC' => 'Macerata',
			'MN' => 'Mantova',
			'MS' => 'Massa-Carrara',
			'MT' => 'Matera',
			'VS' => 'Medio Campidano',
			'ME' => 'Messina',
			'MI' => 'Milan',
			'MO' => 'Modena',
			'MB' => 'Monza e Brianza',
			'NA' => 'Naples',
			'NO' => 'Novara',
			'NU' => 'Nuoro',
			'OG' => 'Ogliastra',
			'OT' => 'Olbia-Tempio',
			'OR' => 'Oristano',
			'PD' => 'Padova',
			'PA' => 'Palermo',
			'PR' => 'Parma',
			'PV' => 'Pavia',
			'PG' => 'Perugia',
			'PU' => 'Pesaro e Urbino',
			'PE' => 'Pescara',
			'PC' => 'Piacenza',
			'PI' => 'Pisa',
			'PT' => 'Pistoia',
			'PN' => 'Pordenone',
			'PZ' => 'Potenza',
			'PO' => 'Prato',
			'RG' => 'Ragusa',
			'RA' => 'Ravenna',
			'RC' => 'Reggio Calabria',
			'RE' => 'Reggio Emilia',
			'RI' => 'Rieti',
			'RN' => 'Rimini',
			'RM' => 'Rome',
			'RO' => 'Rovigo',
			'SA' => 'Salerno',
			'SS' => 'Sassari',
			'SV' => 'Savona',
			'SI' => 'Siena',
			'SR' => 'Siracusa',
			'SO' => 'Sondrio',
			'TA' => 'Taranto',
			'TE' => 'Teramo',
			'TR' => 'Terni',
			'TP' => 'Trapani',
			'TN' => 'Trento',
			'TV' => 'Treviso',
			'TS' => 'Trieste',
			'TO' => 'Turin',
			'UD' => 'Udine',
			'VA' => 'Varese',
			'VE' => 'Venice',
			'VB' => 'Verbano-Cusio-Ossola',
			'VC' => 'Vercelli',
			'VR' => 'Verona',
			'VV' => 'Vibo Valentia',
			'VI' => 'Vicenza',
			'VT' => 'Viterbo'
		]
	];

	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		foreach ($this->__data as $country_code => $states)
		{
			$country = Country::whereCode($country_code)->first();
				foreach ($states as $code => $state)
					State::create( ['code' => $code, 'name' => $state, 'country_id' => $country->id] );
		}
	}
}