<?php

/**
 * Social Link plugin for Craft CMS 3.x
 *
 * Social Link
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */


namespace ds\socialurls\variables;
use ds\socialurls\Socialurls;
use Craft;


class socialurlsVariable

    // Public Methods
    // =========================================================================
     /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.socialurls.getSocialfollow() }}
     *  */
{
    public function getSocialfollow()
    {     
       return socialurls::getInstance()->SocialUrlService->socialshareurl();
    }

}
