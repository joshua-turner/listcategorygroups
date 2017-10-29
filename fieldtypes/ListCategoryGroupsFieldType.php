<?php
/**
 * List Category Groups plugin for Craft CMS
 *
 * ListCategoryGroups FieldType
 *
 *
 * @author    Joshua Turner
 * @copyright Copyright (c) 2017 Joshua Turner
 * @link      joshuaturner.co
 * @package   ListCategoryGroups
 * @since     1.0.0
 */

namespace Craft;

class ListCategoryGroupsFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('List Category Groups');
    }

    public function defineContentAttribute()
    {
        return AttributeType::Mixed;
    }

    public function getInputHtml($name, $value)
    {
        return craft()->templates->render('_includes/forms/select', array(
            'name' => $name,
            'value' => $value,
            'options' => $this->_getCategoryGroups($this->getCategoryGroups()->categoryGroups != '*')
        ));
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('listcategorygroups/settings.twig', array(
            'categoryGroups' => $this->_getCategoryGroups(),
            'settings' => $this->getSettings()
        ));
    }

    protected function defineSettings()
    {
        return array(
            'categoryGroups' => AttributeType::Mixed
        );
    }

    private function _getCategoryGroups($filtered = false)
    {
        $categoryGroups = craft()->db->createCommand()
                    ->select('handle as value, name as label')
                    ->from('categorygroups')
                    ->order('name');

        if($filtered)
        {
            $categoryGroups = $categoryGroups->where(array('in', 'handle', $this->getSettings()->categoryGroups));
        }

        return $categoryGroups->queryAll();
    }
}
