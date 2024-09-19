<?php

namespace Xnhd\Core\Http;

use Jenssegers\Agent\Agent;

class HttpUtil {

    // ---------------- public methods -----------------

    use IpTrait; // ip utils

    public static function get($url, $params, $headers = array(), $https = false) {
        return self::makeRequest($url, $params, array(), $headers, 'get', $https);
    }

    public static function post($url, $params, $headers = array(), $https = false) {
        return self::makeRequest($url, $params, array(), $headers, 'post', $https);
    }

    public static function visitDesktop() {
        $agent = new Agent();

        // detect by agent
        // if ($agent->isDesktop()) {
        // } else {
        // }

        return empty($_SERVER['USER_FROM']);
    }

    public static function visitMobile() {
        return !empty($_SERVER['USER_FROM']) && $_SERVER['USER_FROM'] == 'mobile';
    }

    // ---------------- protected methods -----------------

	protected static function makeCookieString($params) {
		if (is_string($params)) return $params;

		$cookie_string = array();
	    foreach ($params as $key => $value) {
	        array_push($cookie_string, "{$key}={$value}");
	    }
	    return join('; ', $cookie_string);
	}

	protected static function makeQueryString($params) {
        if (is_string($params)) return $params;

        return http_build_query($params);
	}

    protected static function makeRequest($url, $params, $cookie = array(), $headers = array(), $method = 'get', $https = false) {

	    $cookie_string = self::makeCookieString($cookie);

	    $ch = curl_init();

	    if ('get' == $method) {
            $query_string = self::makeQueryString($params);
		    curl_setopt($ch, CURLOPT_URL, "$url?$query_string");
	    } else {
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	    }

	    curl_setopt($ch, CURLOPT_HEADER, false);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	    if (!empty($cookie_string)) {
	    	curl_setopt($ch, CURLOPT_COOKIE, $cookie_string);
	    }

	    if ($https) {
	    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	    }

	    $ret = curl_exec($ch);
	    $err = curl_error($ch);

	    if (false === $ret || !empty($err)) {
		    $errno = curl_errno($ch);
		    $info = curl_getinfo($ch);
		    curl_close($ch);

	        return array(
	        	'success' => false,
	        	'errno' => $errno,
	            'msg' => $err,
	        	'info' => $info,
	        );
	    }

	    $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
       	curl_close($ch);

        return array(
        	'success' => true,
            'msg' => $ret,
            'httpCode' => $httpCode,
        );
    }

}

