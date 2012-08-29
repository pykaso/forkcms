<?php

/**
 *  StripDiacritics class
 *  
 *  Simple class to replace "bad" non-asci characters from URLs and file names
 *  usage: StripDiacritics::safeString(string)
 *  
 * @author			Lukas Gergel <admin@pykaso.net>
 * @version			1.0
 *
 * @copyright		Copyright (c) Lukas Gergel All rights reserved.
 * @license			BSD License
 *
 **/  
class StripDiacritics{

   private static function cooler($s){
      $chars = array(
         "á" => "a", 
         "č" => "c", 
         "ď" => "d", 
         "é" => "e", 
         "ě" => "e", 
         "í" => "i", 
         "ĺ" => "l", 
         "ľ" => "l", 
         "ň" => "n", 
         "ó" => "o", 
         "ř" => "r", 
         "š" => "s", 
         "ť" => "t", 
         "ú" => "u", 
         "ů" => "u", 
         "ý" => "y", 
         "ž" => "z", 
         "ä" => "a", 
         "ë" => "e", 
         "ö" => "o", 
         "ü" => "u", 
         "Á" => "a", 
         "Č" => "c", 
         "Ď" => "d", 
         "É" => "e", 
         "Ě" => "e", 
         "Í" => "i", 
         "Ĺ" => "l", 
         "Ľ" => "l", 
         "Ň" => "n", 
         "Ó" => "o", 
         "Ř" => "r", 
         "Š" => "s", 
         "Ť" => "t", 
         "Ú" => "u", 
         "Ů" => "u", 
         "Ý" => "y", 
         "Ž" => "z", 
         "Ä" => "a", 
         "Ë" => "e", 
         "Ö" => "o", 
         "Ü" => "u");
      
      return strtr($s, $chars);
   }

   static function safeString($name, $tbl = "", $upd = ""){
      $name = strtolower(StripDiacritics::cooler(strip_tags(trim($name))));
      preg_match_all('/[a-zA-Z0-9]+/', $name, $nt);
      return  iconv("utf-8", "us-ascii//TRANSLIT", strtolower(implode('-', $nt[0])));
   }
}