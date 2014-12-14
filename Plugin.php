<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Seldac
 */

namespace AxC\Seldac;

/**
 * Seldac Plugin Information File
 */
class Plugin extends \System\Classes\PluginBase
{
	/**
	 * Plugin dependencies.
	 * @var array
	 */
	public $require = [
		'AnandPatel\SeoExtension',
		'AxC.AddThis',
		'AxC.DataManagement',
		'AxC.Segment',
		'RainLab.GoogleAnalytics',
		'RainLab.User'
	];

	/**
	 * Returns information about this plugin.
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name'				=> 'Seldac',
			'description'	=> trans('axc.seldac::lang.plugin.description'),
			'author'			=> 'Alex Carrega',
			'icon'				=> 'icon-fire'
		];
	}

	/**
	 * Register the components.
	 * @return array
	 */
	public function registerComponents()
	{
		return ['AxC\Seldac\Components\Seldac' => 'seldac'];
	}

/**
 * Register the information about the plugin settings.
 * @return array.
 */
	public function registerSettings()
	{
		return [
			'settings' => [
				'label'				=> trans('axc.seldac::lang.settings.label'),
				'icon'				=> 'icon-fire',
				'description'	=> trans('axc.seldac::lang.settings.description'),
				'class'				=> 'AxC\Seldac\Models\Settings',
				'category'		=> \AxC\Framework\Models\Settings::CATEGORY_AXC,
				'order'				=> 1
			]
		];
	}
}