<?php
   class Profile {
      private $language;
      public function setLanguage($language){
         $this->language = $language;
      }
      public function showLangauge()
      {
          echo implode(' ',$this->language);
        
      }
   }
   $profile = new Profile();
   $language = array('Hindi','English','French');
   $profile->setLanguage($language);
   $profile->showLangauge();
?>