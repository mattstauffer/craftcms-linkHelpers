<?php 
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class LinkHelpersTwigExtension extends \Twig_Extension
{
	/**
	 * @var array
	 */
	protected $input = array();

	/**
	 * @var array
	 */
	protected $fields = array();

	/**
	 * Get name of the Twig extension
	 *
	 * @return string
	 */
	public function getName()
    {
        return 'LinkHelpers';
    }

	/**
	 * Get a list of the Twig filters this extension is providing
	 *
	 * @return array
	 */
	public function getFilters()
    {
        return array(
			'auto_link_urls' => new Twig_Filter_Method($this, 'justUrls'),
			'auto_link_emails' => new Twig_Filter_Method($this, 'justEmails'),
			'auto_link' => new Twig_Filter_Method($this, 'urlsAndEmails'),
        );
    }

	/**
	 * Auto-link the Urls in a string
	 *
	 * @param string $str
	 * @return string
	 */
	public function justUrls($str)
	{
		$charset = craft()->templates->getTwig()->getCharset();

		$str = 'LINKED DUDE ' . $str;

		return new \Twig_Markup($str, $charset);
	}

	/**
	 * Auto-link the email addresses in a string
	 *
	 * @param string $input
	 * @return string
	 */
	public function justEmails($input)
	{
		$charset = craft()->templates->getTwig()->getCharset();

		$str = 'LINKED DUDE ' . $str;

		return new \Twig_Markup($str, $charset);
	}

	/**
	 * Auto-link all Urls and Email addresses in a string 
	 *
	 * @param string $input
	 * @return string
	 */
	public function urlsAndEmails($input)
	{
		$charset = craft()->templates->getTwig()->getCharset();

		$str = 'LINKED DUDE ' . $str;

		return new \Twig_Markup($str, $charset);
	}

}
