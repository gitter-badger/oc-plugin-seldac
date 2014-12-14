<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Seldac\Components
 */

namespace AxC\Seldac\Components;

use AxC\Seldac\Models\Settings as SettingsModel;

/**
 * Seldac component class
 */
class Seldac extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.seldac::lang.component.name'),
			'description'	=> trans('axc.seldac::lang.component.description')
		];
	}

	/**
	 * Return the setting values.
	 * @return array
	 */
	public function settings()
	{
		return SettingsModel::instance();
	}
}