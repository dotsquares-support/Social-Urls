<?php
/**
 * Social Link plugin for Craft CMS 3.x
 *
 * Social Link
 * 
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */


namespace ds\socialurls\services;
use Craft;
use craft\base\Component;
use ds\socialurls\Socialurls;



/**
 * Social Link Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Dotsquares
 */


class SocialUrlService extends  Component

{
   
    // Public Methods
    // =========================================================================

    public function socialshareurl(){
       
      // get setting main file
      $settings = socialurls::getInstance()->getSettings();

      $facebook  = $settings->getFacebookshare();
      $instagram = $settings->getInstagramshare();
      $whatsapp  = $settings->getWhatsappshare();
      $linkedin  = $settings->getLinkedinshare();
      $twitter   = $settings->getTwittershare();
      $youtube   = $settings->getYoutubeshare();
      $telegram  = $settings->getTelegramshare();
      echo "<style> 
      .globalsocial_icons{float:left; width:100%;}
      .globalsocial_icons {
         margin-bottom: 30px;
     }
     .globalsocial_icons a {
      border: 1px solid #000;
      margin-right: 15px;
      display: inline-block;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      font-size: 18px;
  }
  .globalsocial_icons a:hover {
   background: black;
   color: #FFF;
   text-decoration: none;
}
@media (max-width: 767px){
   .globalsocial_icons a{
      width: 43px;
    height: 43px;
    margin-right: 5px;
   }
}
      
      </style>";
      echo "<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
        integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>";

       echo "<div class='globalsocial_icons'>";
        if($facebook){
        echo '<a class="facebook" href="'. $facebook .'" target="_blank"><i class="fab fa-facebook-f"></i></a>';
         }

        if($instagram){
            echo '<a class="instagram" href="'. $instagram .'" target="_blank"><i class="fab fa-instagram" ></i></a>';
            }
         if($whatsapp){
            echo '<a class="whatsapp" href="'. $whatsapp .'" target="_blank"><i class="fab fa-whatsapp"></i></a>';
        
         }
         if($linkedin){
            echo '<a class="linkedin" href="'. $linkedin .'" target="_blank"><i class="fab fa-linkedin"></i></a>';
        
         }

         if($twitter){
            echo '<a class="twitter" href="'. $twitter .'" target="_blank"><i class="fab fa-twitter"></i></a>';
        
         }

         if($youtube){
          echo '<a class="youtube" href="'. $youtube .'" target="_blank"><i class="fab fa-youtube"></i></a>';

       }

       if($telegram){
         echo '<a class="telegram" href="'. $telegram .'" target="_blank"><i class="fab fa-telegram"></i></a>';

      }

       echo"</div>" ;
      
}

}
     

