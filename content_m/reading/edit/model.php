<?php
namespace content_m\reading\edit;


class model
{
	public static function post()
	{
		$post =
		[
			'title'           => \dash\request::post('title'),

		];

		$file = \dash\app\file::upload_quick('file1');

		if($file)
		{
			$post['file'] = $file;
		}

		\lib\app\lm_audio::edit($post, \dash\request::get('id'));

		if(\dash\engine\process::status())
		{
			\dash\redirect::to(\dash\url::this());

			// \dash\redirect::pwd();
		}

	}
}
?>