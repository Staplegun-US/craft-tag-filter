<?php
namespace Craft;

class TagFilterPlugin extends BasePlugin
{
  function getName()
  {
    return Craft::t('Tag Filter');
  }

  function getVersion()
  {
    return '1.0';
  }

  function getDeveloper()
  {
    return 'STAPLEGUN';
  }

  function getDeveloperUrl()
  {
    return 'http://staplegun.us';
  }

  public function addTwigExtension()
  {
      Craft::import('plugins.tagfilter.twigextensions.TagFilterTwigExtension');

      return new TagFilterTwigExtension();
  }
}
