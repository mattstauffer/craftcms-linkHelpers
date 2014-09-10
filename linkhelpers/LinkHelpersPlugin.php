<?php
namespace Craft;

class LinkHelpersPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('LinkHelpers');
    }

    public function getVersion()
    {
        return '0.1.0';
    }

    public function getDeveloper()
    {
        return 'Matt Stauffer';
    }

    public function getDeveloperUrl()
    {
        return 'http://mattstauffer.co/';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.linkhelpers.twigextensions.LinkHelpersTwigExtension');

        return new LinkHelpersTwigExtension();
    }
}
