<?php
namespace content_a\khatm\usage;


class model
{
	public static function post()
	{
		if(\dash\request::post('type') === 'start')
		{
			\lib\app\khatmusage::start(\dash\url::subchild());

			if(\dash\engine\process::status())
			{
				\dash\redirect::to(\dash\url::this() .'/usage/'. \dash\url::subchild());
			}
		}
	}
}
?>