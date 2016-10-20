<?php
// no direct access
defined ('_JEXEC') or die;
class plgContentAddfield extends JPlugin
{
	/**
	 * Load the language file on instantiation.
	 */
	protected $autoloadLanguage = true;
 
	/**
	 * Prepare form and add my field.
	 */
	function onContentPrepareForm($form, $data)
	{
		$app    = JFactory::getApplication();
		$option = $app->input->get('option');
 
		switch($option)
		{
			case 'com_content' :
				if ($app->isAdmin())
				{
					JForm::addFormPath(__DIR__ . '/forms');
					$form->loadFile('content', false);
				}
 
				return true;
		}
 
		return true;
	}
}
?>