<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Template{

    public static function CreatePage(){        
        
        $pageLayout = array();
        
        $pageRows = 8;
        $pageColumns = 12;
        
        for ($y = 0; $y < $pageRows; $y++){
            
            $pageLayout[$y] = "";;
            
            for ($x = 0; $x < $pageColumns; $x++){
                $pageLayout[$y][$x] = "";
            }
            
        }
                
        return $pageLayout;
    }
    
    public static function DrawPage($pageLayout){
        $page = '<table class="pageLayout">';
        
        foreach($pageLayout as $keyY => $row){
            
            $page .= "<tr>";
            
            foreach ($pageLayout[$keyY] as $keyX => $column){
                $page .= "<td>";
                
                if($column){
                    $page .= $column;
                }else{
                    $page .= "T E S T";
                }
                
                $page .= "</td>";
            }
            
            $page .= "</tr>";
        }
        
        $page .= "</table>";
        
        return $page;
    }

    public static function CreateObject($content, $page, $objX, $objY, $width = 0, $height = 0){
        
        $updatedPage = $page;
        $updatedPage[$objX][$objY] = $content;
        
        $unsetIndexX = $objX + $width;
        $unsetIndexY = $objY + $height;

        array_splice($updatedPage, 2);
        
        
      
        
        return $updatedPage;
    }
}