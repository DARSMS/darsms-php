<?php
  $api_key = '27438700hsd874374';
  $secret_key = '363622C886---hfhfhfue';
  $contacts = '97656XXXXX,97612XXXXX,76012XXXXX,80012XXXXX,89456XXXXX,88010XXXXX,98442XXXXX';
  $from = 'DEMO';
  $sms_text = 'Hello People, have a great day';

  //Submit to server

  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, "https://darsms.co.tz/api");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=".$api_key."&"secret_key=".$secret_key."&campaign=1&routeid=14&type=text&phone=".$contacts."&senderid=".$from."&message=".$sms_text);
  $response = curl_exec($ch);
  curl_close($ch);
  echo $response;



// Use this function to pass paramenters
	public function sendSMS($url, $data_string){
	$url = '';
	$data_string = [];

        $fields_string = http_build_query($data_string);
        //open connection
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

        //execute post
        $result = curl_exec($ch);
		return $result;
	}

