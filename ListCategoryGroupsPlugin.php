<?php
/**
 * List Category Groups plugin for Craft CMS
 *
 * FieldType for dropdown of all Category Groups, rather than the individual Categories contained therein
 *
 *
 * @author    Joshua Turner
 * @copyright Copyright (c) 2017 Joshua Turner
 * @link      joshuaturner.co
 * @package   ListCategoryGroups
 * @since     1.0.0
 */

namespace Craft;

class ListCategoryGroupsPlugin extends BasePlugin
{
    public function init()
    {
        parent::init();
    }

    public function getName()
    {
         return Craft::t('List Category Groups');
    }

    public function getDescription()
    {
        return Craft::t('FieldType for dropdown of all Category Groups, rather than the individual Categories contained therein');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/joshua-turner/listcategorygroups/blob/master/README.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/joshua-turner/listcategorygroups/master/releases.json';
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Joshua Turner';
    }

    public function getDeveloperUrl()
    {
        return 'joshuaturner.co';
    }

    public function hasCpSection()
    {
        return true;
    }
}