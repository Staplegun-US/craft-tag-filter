<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class TagFilterTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'TagFilter';
    }

    public function getFilters()
    {
        return array(
            'getTag' => new Twig_Filter_Method($this, 'getTag'),
        );
    }

    public function getTag($body, $tag)
    {
      $dom = new \DOMDocument;
      $dom->loadHTML($body);
      foreach ($dom->getElementsByTagName($tag) as $node) {
        $matches[] = $node->nodeValue;
      }
      return $matches;
    }
}
