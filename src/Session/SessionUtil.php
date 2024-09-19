<?php

namespace Xnhd\Core\Session;

use Session;
use App;

class SessionUtil {

    public static function check($param = 'user', $redirect = '/login') {
        if (App::runningInConsole()) {
            return true;
        }
        if (empty(Session::get($param))) {
            if (!empty($redirect)) {
                header('Location: '.$redirect); exit;
            }
            return false;
        }
        return true;
    }

}


