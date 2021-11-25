<?php


/*
 * Complete the 'test' function below.
 *
 * The function accepts following parameters:
 *  1. STRING firstDate
 *  2. STRING secondDate
 *  3. STRING dayOfWeek
 */

function test($firstDate, $secondDate, $dayOfWeek) {
    //echo($firstDate);
    //echo($secondDate);
    //echo($dayOfWeek);
    
    file_get_contents('https://jsonmock.hackerrank.com/api/stocks');

    $theResponse = file_get_contents('https://jsonmock.hackerrank.com/api/stocks');
    $theResponse2 = file_get_contents('https://jsonmock.hackerrank.com/api/stocks/?page=2');
    $theResponse3 = file_get_contents('https://jsonmock.hackerrank.com/api/stocks/?page=3');
    $theResponse4 = file_get_contents('https://jsonmock.hackerrank.com/api/stocks/?page=4');
    $theResponse5 = file_get_contents('https://jsonmock.hackerrank.com/api/stocks/?page=5');
    
    if(!empty($firstDate) && !empty($secondDate) && !empty($dayOfWeek)){
        if(!empty($theResponse)){
            $jsonArray = json_decode( $theResponse, true );
            $datesArray = $jsonArray['data'];
            
            $startDate = strtotime($firstDate);
            $endDate = strtotime($secondDate);
            foreach($datesArray as $item) { //foreach element in $arr
                $dayOfWeekItem = date('l', strtotime($item['date']));
                $currentDate = strtotime($item['date']);
                
                if($currentDate >= $startDate && $currentDate <= $endDate){
                    if($dayOfWeekItem === $dayOfWeek){
                        print($item['date'] . " " . $item['open'] . " " . $item['close'] . "\n");   
                    }
                }            
            }
        } 
        
        if(!empty($theResponse2)){
            $jsonArray = json_decode( $theResponse2, true );
            $datesArray = $jsonArray['data'];
            
            $startDate = strtotime($firstDate);
            $endDate = strtotime($secondDate);
            foreach($datesArray as $item) { //foreach element in $arr
                $dayOfWeekItem = date('l', strtotime($item['date']));
                $currentDate = strtotime($item['date']);
                
                if($currentDate >= $startDate && $currentDate <= $endDate){
                    if($dayOfWeekItem === $dayOfWeek){
                        print($item['date'] . " " . $item['open'] . " " . $item['close'] . "\n");   
                    }
                }            
            }
        }
        
        if(!empty($theResponse3)){
            $jsonArray = json_decode( $theResponse3, true );
            $datesArray = $jsonArray['data'];
            
            $startDate = strtotime($firstDate);
            $endDate = strtotime($secondDate);
            foreach($datesArray as $item) { //foreach element in $arr
                $dayOfWeekItem = date('l', strtotime($item['date']));
                $currentDate = strtotime($item['date']);
                
                if($currentDate >= $startDate && $currentDate <= $endDate){
                    if($dayOfWeekItem === $dayOfWeek){
                        print($item['date'] . " " . $item['open'] . " " . $item['close'] . "\n");   
                    }
                }            
            }
        }
        
        if(!empty($theResponse4)){
            $jsonArray = json_decode( $theResponse4, true );
            $datesArray = $jsonArray['data'];
            
            $startDate = strtotime($firstDate);
            $endDate = strtotime($secondDate);
            foreach($datesArray as $item) { //foreach element in $arr
                $dayOfWeekItem = date('l', strtotime($item['date']));
                $currentDate = strtotime($item['date']);
                
                if($currentDate >= $startDate && $currentDate <= $endDate){
                    if($dayOfWeekItem === $dayOfWeek){
                        print($item['date'] . " " . $item['open'] . " " . $item['close'] . "\n");   
                    }
                }            
            }
        }
        
        
        if(!empty($theResponse5)){
            $jsonArray = json_decode( $theResponse5, true );
            $datesArray = $jsonArray['data'];
            
            $startDate = strtotime($firstDate);
            $endDate = strtotime($secondDate);
            foreach($datesArray as $item) { //foreach element in $arr
                $dayOfWeekItem = date('l', strtotime($item['date']));
                $currentDate = strtotime($item['date']);
                
                if($currentDate >= $startDate && $currentDate <= $endDate){
                    if($dayOfWeekItem === $dayOfWeek){
                        print($item['date'] . " " . $item['open'] . " " . $item['close'] . "\n");   
                    }
                }            
            }
        }
    }    

}
$firstDate = rtrim(fgets(STDIN), "\r\n");
