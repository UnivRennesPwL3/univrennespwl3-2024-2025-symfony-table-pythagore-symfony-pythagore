<?php

namespace App\Utility;

class PythagoreUtility
{
    public function display()
    {
        $nombre = range(1,10);
        echo '<div style="text-align: center;">';
        echo "<table border='1' cellpadding='10' cellspacing='3'>";
        echo "<tr><td>0</td>";
        foreach ($nombre as $x){
            echo "<td>".$x."</td>";
        }
        echo "</tr>";
        foreach ($nombre as $x){
            echo "<tr>";
            echo "<td>".$x."</td>";
            for ($i=1; $i <= 10; $i++) { 
                $resultat = $x * $i;
                if ($x == $i) {
                    $resultat = 'X';
                }
                echo "<td>".$resultat."</td>";
            }
            echo "</tr>";
        }
        echo "</table>"; 
        echo '</div>';
    }
}
