<?php
// Doesn't work on Joomla 1.6.3
// defined('JPATH_PLATFORM') or die;
defined('JPATH_BASE') or die;

JFormHelper::loadFieldClass('list');

class JFormFieldFNewsletter extends JFormFieldList
{
	public $type = 'FNewsletter';

	protected function getOptions()
	{
		require_once JPATH_SITE . "/components/com_foxcontact/foxcontact.inc";

		// Initialize variables.
		$options = array();

		// Initialize all field attributes
		//foreach($this->element->attributes() as $attribute_name => $attribute_value)
		//{
		//	${$attribute_name} = (string)$attribute_value;
		//}

		// Get the database object.
		$db = JFactory::getDBO();

		// To avoid conflict with other extensions (like Yootheme Widgetkit) we must avoid raising SQL errors,
		// for that reason, avoid a select in the newsletter table if it doesn't exist
		$query = $db->getQuery(true);
		$query->select($db->quoteName("extension_id"));
		$query->from($db->quoteName("#__extensions"));
		$query->where($db->quoteName("name") . " = " . $db->quote((string)$this->element["extension"]));
		$db->setQuery($query);
		if (!$db->loadResult()) return "";

		// Recycle
		$query->clear();
		$query->select($db->quoteName((string)$this->element["key"]) . "," . $db->quoteName((string)$this->element["value"]));
		$query->from($db->quoteName((string)$this->element["table"]));
		$query->where($db->quoteName("published") . " = " . $db->quote("1"));
		$query->order($db->quoteName((string)$this->element["order"]) . " ASC");

		// Set the query and get the result list.
		$db->setQuery($query);
		$items = $db->loadObjectlist() or $items = new stdClass();

		foreach ($items as $item)
		{
			$options[] = JHtml::_('select.option', $item->{(string)$this->element["key"]}, $item->{(string)$this->element["value"]});
		}

		// Merge any additional options in the XML definition.
		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
