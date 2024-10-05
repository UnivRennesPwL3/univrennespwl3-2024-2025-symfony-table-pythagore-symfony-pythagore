<?php

namespace App\Utils;

class PythagoreUtility
{

    public function display():string {
        $length = 10;

        $html = "<table>";
        for ($i=0; $i <= $length; $i++) { 

          $html .=  "<tr>";


            for ($j=0; $j <= $length; $j++) { 
              if($i==0 && $j==0){
                $html .= "<td>0</td>";
              }
              elseif($i==$j){
                $html .= "<td>X</td>";
              }
              elseif($i==0 && $j!=0){
                $html .= "<td>$j</td>";
              }
              elseif($i!=0 && $j==0){
                $html .= "<td>$i</td>";
              }
              else {
                $html .= "<td>".$i*$j."</td>";
              }
            } 
              
            $html .= "</tr>";
            $html .= "</table>";

        
     }



        return $html;
 
    }
   


}

?>