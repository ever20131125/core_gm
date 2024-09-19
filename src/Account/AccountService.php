<?php

namespace Xnhd\Core\Account;

class AccountService {
    public function getAccount($publisher, $pfId, $openid, $uid = 0) {
        // get from db
        if (in_array($publisher, ['xnhd', 'mhlw'])) {
            // unique accountId in all xnhd games
            $account = Account::where('publisher', $publisher)->where('openId', $openid)->first();
        } elseif ($publisher == 'heitao' && !empty($uid)) {
            $account = Account::where('publisher', $publisher)->where('uid', $uid)->orderby('created_at')->first();
        } else {
            $account = Account::where('publisher', $publisher)->where('pfId', $pfId)->where('openId', $openid)->first();
        }

        // create new one if not exists
        if (empty($account->id)) {
            $account = new Account();
            $account->publisher = $publisher;
            $account->pfId = $pfId;
            $account->openId = $openid;
            $account->uid = $uid;
            $i = 0;
            do {
                $res = $account->save();
            } while (!$res && $i++ < 5);
        }

        // return account if exists
        if (empty($account->id)) {
            $account = null;
        }
        return $account;
    }

    public function getAccountByUID($uid) {
        if (env('PROJECT') == 'sdo') { // use heitao uid
            $account = Account::where('publisher', 'heitao')->where('uid', $uid)->orderby('created_at')->first();
        } else { // use default openId
            $account = Account::where('publisher', 'xnhd')->where('openId', $uid)->first();
        }
        return !empty($account->id) ? $account->id : false;
    }

    public function getOpenId($accountId) {
        $account = Account::where('id', $accountId)->first();
        return !empty($account->id) ? $account->openId : false;
    }

    public function getUid($accountId) {
        $account = Account::where('id', $accountId)->first();
        return !empty($account->uid) ? $account->uid : false;
    }
}
