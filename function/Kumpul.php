<?php 

class kumpul{
    var $method;
    var $request;

    public function api($method, $request, $kirim_data){
        $key = '801698819:AAH1mHlfZkQviDrlGc6nhp23PMC1MKQfJDs';
        $link = 'https://api.telegram.org/';
        // $method = '/getMe';
        // $request = 'GET';
        $url       = $link.'bot'.$key.$method;
        $curl      = curl_init();
        $headers   = array();
        $headers[] = 'Content-Type: application/json';
        // $headers[] = 'Authorization: key=' . $serverKey;

        if($request == 'GET'){
            curl_setopt_array($curl, array(
                CURLOPT_URL            => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => "",
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 30,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => $request,
                CURLOPT_HTTPHEADER     => $headers,
                CURLOPT_SSL_VERIFYPEER => 0,
            ));
        }else if($request == 'POST'){
            $json      = json_encode($kirim_data);
            curl_setopt_array($curl, array(
                CURLOPT_URL            => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => "",
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 30,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => $request,
                CURLOPT_POSTFIELDS     => $json,
                CURLOPT_HTTPHEADER     => $headers,
                CURLOPT_SSL_VERIFYPEER => 0,
            ));
        }

        $response = curl_exec($curl);
        $err      = curl_error($curl);
        curl_close($curl);

        // if($response['ok'] == true){
            if(empty($err)){
            return $response;
            }else{
                return 'error '.$err;
            }
        // }else{

        // }
    }

    public function getSaya($method, $request){
        
        return $ambil->api($method, $request);

    }

    public function pesan($kirim_data){ // kirim pesan
        $method = '/sendMessage';
        $request = 'POST';

      $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
      );

      $pusher = new Pusher\Pusher(
        '421ce9b5265ffbfbde08',
        'f24a6a32687b3b379cdc',
        '828883',
        $options
      );

      $data['message'] = 'hello world';
      $pusher->trigger('my-channel', 'my-event', $data);

      return api($method, $request, $kirim_data);

    }

    function url(){ // untuk base url
      return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $_SERVER['REQUEST_URI']
      );
    }

}

$ambil = new kumpul();