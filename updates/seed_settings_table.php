<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\Seldac\Updates
 */

namespace AxC\Seldac\Updates;

use AxC\Seldac\Models\Settings;
use AxC\AddThis\Models\Settings as AddThisSettings;
use AxC\Segment\Models\Settings as SegmentSettings;
use AxC\reCAPTCHA\Models\Settings as reCAPTCHASettings;
use RainLab\GoogleAnalytics\Models\Settings as GoogleAnalyticsSettings;
use System\Models\MailSettings;
use AnandPatel\SeoExtension\models\Settings as SeoExtensionSettings;
use Backend\Models\BrandSettings;

/**
 * Add data to Seldac Settings DB scheme.
 */
class SeedSettingsTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Settings::set('name', 'Seldac');
		Settings::set('full_name', 'Seldac Servizi S.r.L.');
		Settings::set('slogan',
			'The answer to the administrative needs of all companies, small and medium-sized businesses, professionals and associations.');
		Settings::set('about', implode("\n", [
			'provides high-level advice to companies, accompanying step by step their customers in the intricate field of taxation.',
			'The service of electronic data processing accounting allows to fulfill all the formalities required by law.',
			'Our customer can resolve the related tasks because the service is managed by experienced staff',
			'through the use of one of the most advanced management software as ZUCCHETTI.'
		] ) );

		Settings::set('address_street_name', 'via Felice Cavallotti');
		Settings::set('address_street_number', '128');
		Settings::set('address_street_int', '3');
		Settings::set('address_zip', '15067');
		Settings::set('address_city', 'Novi Ligure');
		Settings::set('address_province', 'AL');
		Settings::set('address_country', 'IT');

		Settings::set('vat', '02254830066');
		Settings::set('rui_section', 'E');
		Settings::set('rui_number', 'E000147232');
		Settings::set('rui_date', '10/04/2007');

		Settings::set('mc_address_street_name', 'via Felice Cavallotti');
		Settings::set('mc_address_street_number', '128');
		Settings::set('mc_address_street_int', '5');
		Settings::set('mc_address_zip', '15067');
		Settings::set('mc_address_city', 'Novi Ligure');
		Settings::set('mc_address_province', 'AL');
		Settings::set('mc_address_country', 'IT');

		Settings::set('mc_nin', 'CSRMRC64P02D612A');
		Settings::set('mc_vat', '05110830485');

		AddThisSettings::set('pubid', 'ra-5481b79425aef103');

		SegmentSettings::set('write_key', 'qufrprcjgq');

		$ga_settings = GoogleAnalyticsSettings::instance();
		$ga_settings->project_name = 'seldac';
		$ga_settings->client_id = '284098878834-asjihnigkqg3ikl5kiqsgked7f2j3nf4.apps.googleusercontent.com';
		$ga_settings->app_email =  '284098878834-asjihnigkqg3ikl5kiqsgked7f2j3nf4@developer.gserviceaccount.com';
		$ga_settings->profile_id = '63908586';
		$ga_settings->tracking_id = 'UA-34732651-1';
		$ga_settings->domain_name = 'seldac';
		$ga_settings->save();

		$mail_settings = MailSettings::instance();
		$mail_settings->send_mode = 'smtp';
		$mail_settings->sender_name = 'Seldac Servizi S.r.L.';
		$mail_settings->sender_email = 'info@seldacservizi.it';
		$mail_settings->smtp_address ='smtp.aruba.it';
		$mail_settings->smtp_port = '465';
		$mail_settings->smtp_user = 'nadia.allara@seldacservizi.it';
		$mail_settings->smtp_password = 'zanzibar';
		$mail_settings->smtp_authorization = '1';
		$mail_settings->smtp_ssl = '1';
		$mail_settings->save();

		$seo_extension_settings = SeoExtensionSettings::instance();
		$seo_extension_settings->enable_title = '1';
		$seo_extension_settings->enable_canonical_url = '1';
		$seo_extension_settings->title = '| Seldac';
		$seo_extension_settings->title_position = 'suffix';
		$seo_extension_settings->other_tags = "<meta name=\"author\" content=\"Alex Carrega (AxC - http:\/\/www.alexcarrega.com)\">\r\n<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" \/>\r\n<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" \/>\r\n<meta name=\"description\" content=\"Contact page\" \/>\r\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
		$seo_extension_settings->save();

		$brand_settings = BrandSettings::instance();
		$brand_settings->app_name = 'Seldac';
		$brand_settings->app_tagline = 'Seldac Servizi S.r.L.';
		$brand_settings->primary_color_light = '#de6b10';
		$brand_settings->primary_color_dark = '#DAA520';
		$brand_settings->secondary_color_light = '#F0E68C';
		$brand_settings->secondary_color_dark = '#B22222';
		$brand_settings->save();

		$recaptcha_settings = reCAPTCHASettings::instance();
		$recaptcha_settings->public_key = '6LfF0uwSAAAAAL4L5_sQ9aDiCn8PzMd0rStSSH5N';
		$recaptcha_settings->private_key = '6LfF0uwSAAAAAOdiygwACNXT34u5NpD0ndHXn9Jn';
		$recaptcha_settings->save();

		// @p-color: #58585a;
		// @s-color: #de6b10;
		// @bg-color: #e6e7e8;
		// @i-color: #DAA520;
		// @w-color: #F0E68C;
		// @d-color: #B22222;
	}
}