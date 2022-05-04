<?php 

function base64ErlEncode($data){
    return str_replace(['+','/','='], ['-', '_', ''], base64_decode($data));
}

$header = base64ErlEncode('{"alg": "HS256", "typ": "JWT"}');
$payload = base64ErlEncode('{"sub": "'.md5(time()).'", "name": "thiago caetano", "iat": '.time().'}');
$signature = base64ErlEncode(
    hash_hmac('sha256', $header. '.'. $payload. 'secret', true)
);

$jwt = $header . '.' . $payload. '.'. $signature;

echo $jwt;