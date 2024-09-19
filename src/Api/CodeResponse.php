<?php

namespace Xnhd\Core\Api;

class CodeResponse
{
    // 通用返回码
    const SUCCESS = [1, '成功'];

    // 快手返回码
    //200
    const PARAM_ILLEGAL = [100200100, '参数错误'];
    const PARAM_VALUE_ILLEGAL = [100200200, '参数值不对'];
    const UPDATED_FAIL = [100200400, '更新数据失败'];
    const UNKNOWN_ERROR = [100200500, '未知错误'];
    const SIGN_ILLEGAL = [100200600, '签名错误'];
    const TIME_ILLEGAL = [100200601, '时间戳错误'];

    //201
    const GAMEID_ILLEGAL = [100201108, 'gameId不存在'];

    //202
    const TOKEN_ILLEGAL = [100202001, '登录token过期'];

    //208


    // 自定义返回码
    const SERVER_ERROR = [200200100, '服务器未响应'];
    const AUTH_INVALID_ACCOUNT = [200200101, '账号不存在'];
    const NETWORK_MISTAKE = [2002001012, '网络异常'];
    const ACCESSTOKEN_ERROR = [2002001013, 'access_token 异常'];
    const SERVER_FAIL = [2002001014, '服务器返回失败'];
    const SAVE_FAIL = [2002001015, '保存数据失败'];
    const ERROR_PLATFORM = [2002001016, '平台参数异常'];
    const DUPLICATED_NICKNAME = [2002001017, '昵称重复'];
    const ZONE_ERROR = [2002001018, '大区信息错误'];
    const FACEID_ERROR = [2002001019, '捏脸信息错误'];
    const ES_INDEX_ERROR = [2002001020, 'ES的index异常，请检查时间区间'];

    const GROUP_CHAT_ERROR = [801, '群信息异常或已解散'];



    const AUTH_SERVER_FAIL = [701, '认证异常'];
    const AUTH_CAPTCHA_FREQUENCY = [702, '验证码未超时1分钟，不能发送'];
    const AUTH_CAPTCHA_UNMATCH = [703, '验证码错误'];
    const AUTH_NAME_REGISTERED = [704, '用户已注册'];
    const AUTH_MOBILE_REGISTERED = [705, '手机号已注册'];
    const AUTH_MOBILE_UNREGISTERED = [706, '手机号未注册'];
    const AUTH_INVALID_MOBILE = [707, '手机号格式不正确'];
    const AUTH_OPENID_UNACCESS = [708, ''];
    const AUTH_OPENID_BINDED = [709, ''];
}
