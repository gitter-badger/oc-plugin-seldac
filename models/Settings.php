<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Seldac\Models
 */

namespace AxC\Seldac\Models;

/**
 * Seldac Settings model
 */
class Settings extends \AxC\Framework\Models\Settings
{
	/**
	 * A unique code.
	 * @param string
	 */
	public $settingsCode = 'axc_seldac_settings';

	/**
	 * Update the settings fields of other models if the settings of this one is updated.
	 * @return null 
	 */
	public function afterSave()
	{
		if (count( $this->getDirty() ) > 0)
		{
			\Backend\Models\BrandSettings::set( [ 'app_name' => $this->get('name'), 'app_tagline' => $this->get('full_name') ] );
			if ( class_exists('\AnandPatel\SeoExtension\models\Settings') )
			{
				$seo_settings = \AnandPatel\SeoExtension\models\Settings::instance();
				switch ($seo_settings->title_position)
				{
					case 'prefix': $seo_settings->title = $this->get('name') .' |';
					case 'suffix': $seo_settings->title = '| '. $this->get('name');
				}
				$seo_settings->save();
			}
		}
	}

	/**
	 * Return the possible values for the address country setting field.
	 * @param string $keyValue [ = null ]
	 * @return array
	 */
	public function getAddressCountryOptions($keyValue = null)
	{
		$output = [];
		foreach(\RainLab\User\Models\Country::whereIsEnabled(true)->get() as $country) $output[$country->code] = trans($country->name);
		return $output;
	}

	/**
	 * Return the possible values for the address province setting field.
	 * @param string $keyValue [ = null ]
	 * @return array
	 */
	public function getAddressProvinceOptions($keyValue = null)
	{
		return $this->__addressProvince($this->address_country);
	}

	/**
	 * Return the possible values for the *Mirco Ceseri* address province setting field.
	 * @param string $keyValue [ = null ]
	 * @return array
	 */
	public function getMcAddressCountryOptions($keyValue = null)
	{
		return $this->getAddressCountryOptions($keyValue);
	}

	/**
	 * Return the possible values for the *Mirco Ceseri* address country setting field.
	 * @param string $keyValue [ = null ]
	 * @return array
	 */
	public function getMcAddressProvinceOptions($keyValue = null)
	{
		return $this->__addressProvince($this->mc_address_country);
	}

	/**
	 * Returns the province based on the country value @var $address_country.
	 * @param string $address_country.
	 * @return array
	 */
	private function __addressProvince($address_country)
	{
		$output = [];
		$country = \RainLab\User\Models\Country::whereCode($address_country)->first();
		if ($country and $country->is_enabled)
			foreach ($country->states as $state) $output[$state->code] = trans($state->name);
		return $output;
	}
}