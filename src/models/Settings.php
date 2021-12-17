<?php


namespace ds\socialurls\models;
use ds\socialurls\Socialurls;
use Craft;
use craft\base\Model;



class Settings extends Model
{
   
   public $Facebookshare;
   public $Instagramshare;
   public $Whatsappshare;
   public $Linkedinshare;
   public $Twittershare;  
   public $Youtubeshare;
   public $Telegramshare;



   public function getFacebookshare()
   {
       return Craft::parseEnv(trim(Socialurls::getInstance()->getSettings()->Facebookshare));
   }
    
   public function getInstagramshare()
   {
       return Craft::parseEnv(trim(Socialurls::getInstance()->getSettings()->Instagramshare));
   }
   public function getWhatsappshare()
   {
       return Craft::parseEnv(trim(Socialurls::getInstance()->getSettings()->Whatsappshare));
   }
   public function getLinkedinshare()
   {
       return Craft::parseEnv(trim(Socialurls::getInstance()->getSettings()->Linkedinshare));
   }
   public function getTwittershare()
   {
       return Craft::parseEnv(trim(Socialurls::getInstance()->getSettings()->Twittershare));
   }
   public function getYoutubeshare()
   {
       return Craft::parseEnv(trim(Socialurls::getInstance()->getSettings()->Youtubeshare));
   }

   public function getTelegramshare()
   {
       return Craft::parseEnv(trim(Socialurls::getInstance()->getSettings()->Telegramshare));
   }
}