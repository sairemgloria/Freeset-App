<?php

if (!function_exists('getStarIcons')) {
   function getStarIcons($rating)
   {
      $stars = '';
      for ($i = 1; $i <= 5; $i++) {
         if ($i <= $rating) {
            $stars .= '<i class="bx bxs-star text-warning"></i>'; // filled star icon
         } else {
            $stars .= '<i class="bx bx-star text-warning"></i>'; // empty star icon
         }
      }
      return $stars;
   }
}
