$array = array ( 0 => array ( 0 => 'month_year ', 1 => 'brand ', 2 => 'top_of_mind ', 3 => 'expansive ', 4 => 'ever_used ', 5 => 'purchased ', 6 => 'intention ', 7 => 'brand_index ', ), 1 => array ( 0 => 'Jan, 2014 ', 1 => 'Fiesta ', 2 => '34.8', 3 => '43.8', 4 => '43.8', 5 => '43.8', 6 => '47.8', 7 => '48', ), 2 => array ( 0 => 'Jan, 2014 ', 1 => 'So Good ', 2 => '21.7', 3 => '30.3', 4 => '24.5', 5 => '24.5', 6 => '23.8', 7 => '24.7', ), 3 => array ( 0 => 'Jan, 2014 ', 1 => 'So Nice ', 2 => '7.3', 3 => '13.4', 4 => '11.4', 5 => '11.4', 6 => '10.5', 7 => '10.3', ), 4 => array ( 0 => 'Jan, 2014 ', 1 => 'Champ ', 2 => '9.1', 3 => '10.4', 4 => '13.6', 5 => '13.6', 6 => '7.7', 7 => '10.1', ), 5 => array ( 0 => 'Jan, 2014 ', 1 => 'Belfoods ', 2 => '3.1', 3 => '1.5', 4 => '4', 5 => '4', 6 => '6.8', 7 => '3.9', ), )
unset($array[0]);
foreach ($array as $key => $row) {
   $distance[$key] = $row[7];
}
array_multisort($distance, SORT_DESC, $array);