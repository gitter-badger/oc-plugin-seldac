<?php

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/*
 * Set setting fields of other components in readonly mode.
 * @param Illuminate\Http\Request $request
 * @return null
 */
App::before(function($request)
{
	\Event::listen('backend.form.extendFieldsBefore', function ($form)
	{
		if ($form->model instanceof \Backend\Models\BrandSettings)
		{
			$form->config->tabs['fields']['app_name']['commentAbove'] =
				trans( $form->config->tabs['fields']['app_name']['commentAbove'] ) .' '. trans('axc.seldac::lang.settings.brand.app_name.commentAbove');
			$form->config->tabs['fields']['app_name']['attributes']['readonly'] = 'readonly';

			$form->config->tabs['fields']['app_tagline']['commentAbove'] =
				trans( $form->config->tabs['fields']['app_tagline']['commentAbove'] ) .' '. trans('axc.seldac::lang.settings.brand.app_tagline.commentAbove');
			$form->config->tabs['fields']['app_tagline']['attributes']['readonly'] = 'readonly';
		}
		elseif ( class_exists('\AnandPatel\SeoExtension\models\Settings') and $form->model instanceof \AnandPatel\SeoExtension\models\Settings)
		{
			$form->config->tabs['fields']['title']['comment'] =
				trans( $form->config->tabs['fields']['title']['comment'] ) .' '. trans('axc.seldac::lang.settings.seo_extension.title.comment');
			$form->config->tabs['fields']['title']['attributes']['readonly'] = 'readonly';
		}
	});
});