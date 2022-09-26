<?php


function frontend_data(){
$curl = curl_init();
      $url = "https://oihana.simplon-wp-lab.com//wp-json/wp/v2/posts";

      curl_setopt_array($curl, array(
      	CURLOPT_URL => $url,
      	CURLOPT_RETURNTRANSFER => true,
      	CURLOPT_FOLLOWLOCATION => true,
      	CURLOPT_ENCODING => "",
      	CURLOPT_MAXREDIRS => 10,
      	CURLOPT_TIMEOUT => 30,
      	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      	CURLOPT_CUSTOMREQUEST => "GET",
      	CURLOPT_HTTPHEADER => array(),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);
        $data = json_decode( $response, true );


foreach ($data as $item) {
     $title = $item['title']['rendered'];
     $content = $item['content']['rendered'];
     
     
   
     echo'$title' .'content';
    }
}


