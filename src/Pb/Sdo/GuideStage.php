<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuideStage enum
 */
final class GuideStage
{
    const enmGuideStage_None = 0;
    const enmGuideStage_NewOld = 1;
    const enmGuideStage_Dialog_1_1 = 2;
    const enmGuideStage_Dialog_1_2 = 3;
    const enmGuideStage_Teach_1 = 11;
    const enmGuideStage_Teach_2 = 12;
    const enmGuideStage_Teach_3 = 13;
    const enmGuideStage_Teach_4 = 14;
    const enmGuideStage_Teach_5 = 15;
    const enmGuideStage_Teach_6 = 16;
    const enmGuideStage_Teach_7 = 17;
    const enmGuideStage_Dialog_2_1 = 101;
    const enmGuideStage_EndTeach = 110;
    const enmGuideStage_Dialog_3_1 = 120;
    const enmGuideStage_Tour_1_2_Start = 130;
    const enmGuideStage_Tour_1_2_End = 131;
    const enmGuideStage_Tour_1_2_Dialog = 132;
    const enmGuideStage_Main_Return = 133;
    const enmGuideStage_FreshPrize_Open = 140;
    const enmGuideStage_FreshPrize_Receive = 141;
    const enmGuideStage_NewPlayer_Open = 142;
    const enmGuideStage_NewPlayer_Main = 143;
    const enmGuideStage_Match_Start = 144;
    const enmGuideStage_Match_Wait = 145;
    const enmGuideStage_Match_Music = 146;
    const enmGuideStage_Game_Loading = 147;
    const enmGuideStage_Game_LoadEnd = 148;
    const enmGuideStage_Game_Balance = 149;
    const enmGuideStage_Game_Return = 150;
    const enmGuideStage_NewPlayer_Task = 151;
    const enmGuideStage_NewPlayer_Prize = 152;
    const enmGuideStage_Task_3_2_Prize = 255;
    const enmGuideStage_DailyTask = 256;
    const enmGuideStage_DailyTask_Dialog = 257;
    const enmGuideStage_Dialog_6_1 = 181;
    const enmGuideStage_Dialog_6_2 = 182;
    const enmGuideStage_Dialog_7_1 = 200;
    const enmGuideStage_Click_Stage = 221;
    const enmGuideStage_Max = 9999;
    const enmGuideStage_game_sdk_launch = 10001;
    const enmGuideStage_game_game_start = 10002;
    const enmGuideStage_game_privacy_agree = 10003;
    const enmGuideStage_game_sdk_login = 10004;
    const enmGuideStage_game_sdk_login_success = 10005;
    const enmGuideStage_game_sdk_login_fail = 10006;
    const enmGuideStage_game_serverlist_start = 10007;
    const enmGuideStage_game_serverlist_succss = 10008;
    const enmGuideStage_game_serverlist_fail = 10009;
    const enmGuideStage_game_notice_start = 10010;
    const enmGuideStage_game_notice_success = 10011;
    const enmGuideStage_game_notice_fail = 10012;
    const enmGuideStage_game_serverlist_choose = 10013;
    const enmGuideStage_game_server_confirm = 10014;
    const enmGuideStage_game_enter_game = 10015;
    const enmGuideStage_game_checkversion_start = 10016;
    const enmGuideStage_game_checkversion_success = 10017;
    const enmGuideStage_game_checkversion_fail = 10018;
    const enmGuideStage_game_update_space = 10019;
    const enmGuideStage_game_update_show = 10020;
    const enmGuideStage_game_update_confirm = 10021;
    const enmGuideStage_game_update_start = 10022;
    const enmGuideStage_game_update_httptimeout = 10023;
    const enmGuideStage_game_update_loadtimeout = 10024;
    const enmGuideStage_game_update_md5error = 10025;
    const enmGuideStage_game_update_missing = 10026;
    const enmGuideStage_game_update_download_fail = 10027;
    const enmGuideStage_game_update_progress_10 = 10028;
    const enmGuideStage_game_update_progress_30 = 10029;
    const enmGuideStage_game_update_progress_50 = 10030;
    const enmGuideStage_game_update_progress_70 = 10031;
    const enmGuideStage_game_update_download_success = 10032;
    const enmGuideStage_game_update_unzip_start = 10033;
    const enmGuideStage_game_update_unzip_success = 10034;
    const enmGuideStage_game_update_unzip_fail = 10035;
    const enmGuideStage_game_update_success = 10036;
    const enmGuideStage_game_server_login = 10037;
    const enmGuideStage_game_server_login_fail = 10038;
    const enmGuideStage_game_cdkey_show = 10039;
    const enmGuideStage_game_cdkey_successl = 10040;
    const enmGuideStage_game_cdkey_fail = 10041;
    const enmGuideStage_game_server_queue_start = 10042;
    const enmGuideStage_game_server_queue_success = 10043;
    const enmGuideStage_game_server_queue_cancel = 10044;
    const enmGuideStage_game_server_roledata_noti = 10045;
    const enmGuideStage_game_createrole = 10046;
    const enmGuideStage_game_popup_question = 10047;
    const enmGuideStage_game_popup_question_success = 10048;
    const enmGuideStage_game_createrole_success = 10049;
    const enmGuideStage_game_createrole_fail = 10050;
    const enmGuideStage_game_server_enter = 10051;
    const enmGuideStage_game_activity_open = 10052;
    const enmGuideStage_game_popup = 10053;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuideStage_None' => self::enmGuideStage_None,
            'enmGuideStage_NewOld' => self::enmGuideStage_NewOld,
            'enmGuideStage_Dialog_1_1' => self::enmGuideStage_Dialog_1_1,
            'enmGuideStage_Dialog_1_2' => self::enmGuideStage_Dialog_1_2,
            'enmGuideStage_Teach_1' => self::enmGuideStage_Teach_1,
            'enmGuideStage_Teach_2' => self::enmGuideStage_Teach_2,
            'enmGuideStage_Teach_3' => self::enmGuideStage_Teach_3,
            'enmGuideStage_Teach_4' => self::enmGuideStage_Teach_4,
            'enmGuideStage_Teach_5' => self::enmGuideStage_Teach_5,
            'enmGuideStage_Teach_6' => self::enmGuideStage_Teach_6,
            'enmGuideStage_Teach_7' => self::enmGuideStage_Teach_7,
            'enmGuideStage_Dialog_2_1' => self::enmGuideStage_Dialog_2_1,
            'enmGuideStage_EndTeach' => self::enmGuideStage_EndTeach,
            'enmGuideStage_Dialog_3_1' => self::enmGuideStage_Dialog_3_1,
            'enmGuideStage_Tour_1_2_Start' => self::enmGuideStage_Tour_1_2_Start,
            'enmGuideStage_Tour_1_2_End' => self::enmGuideStage_Tour_1_2_End,
            'enmGuideStage_Tour_1_2_Dialog' => self::enmGuideStage_Tour_1_2_Dialog,
            'enmGuideStage_Main_Return' => self::enmGuideStage_Main_Return,
            'enmGuideStage_FreshPrize_Open' => self::enmGuideStage_FreshPrize_Open,
            'enmGuideStage_FreshPrize_Receive' => self::enmGuideStage_FreshPrize_Receive,
            'enmGuideStage_NewPlayer_Open' => self::enmGuideStage_NewPlayer_Open,
            'enmGuideStage_NewPlayer_Main' => self::enmGuideStage_NewPlayer_Main,
            'enmGuideStage_Match_Start' => self::enmGuideStage_Match_Start,
            'enmGuideStage_Match_Wait' => self::enmGuideStage_Match_Wait,
            'enmGuideStage_Match_Music' => self::enmGuideStage_Match_Music,
            'enmGuideStage_Game_Loading' => self::enmGuideStage_Game_Loading,
            'enmGuideStage_Game_LoadEnd' => self::enmGuideStage_Game_LoadEnd,
            'enmGuideStage_Game_Balance' => self::enmGuideStage_Game_Balance,
            'enmGuideStage_Game_Return' => self::enmGuideStage_Game_Return,
            'enmGuideStage_NewPlayer_Task' => self::enmGuideStage_NewPlayer_Task,
            'enmGuideStage_NewPlayer_Prize' => self::enmGuideStage_NewPlayer_Prize,
            'enmGuideStage_Task_3_2_Prize' => self::enmGuideStage_Task_3_2_Prize,
            'enmGuideStage_DailyTask' => self::enmGuideStage_DailyTask,
            'enmGuideStage_DailyTask_Dialog' => self::enmGuideStage_DailyTask_Dialog,
            'enmGuideStage_Dialog_6_1' => self::enmGuideStage_Dialog_6_1,
            'enmGuideStage_Dialog_6_2' => self::enmGuideStage_Dialog_6_2,
            'enmGuideStage_Dialog_7_1' => self::enmGuideStage_Dialog_7_1,
            'enmGuideStage_Click_Stage' => self::enmGuideStage_Click_Stage,
            'enmGuideStage_Max' => self::enmGuideStage_Max,
            'enmGuideStage_game_sdk_launch' => self::enmGuideStage_game_sdk_launch,
            'enmGuideStage_game_game_start' => self::enmGuideStage_game_game_start,
            'enmGuideStage_game_privacy_agree' => self::enmGuideStage_game_privacy_agree,
            'enmGuideStage_game_sdk_login' => self::enmGuideStage_game_sdk_login,
            'enmGuideStage_game_sdk_login_success' => self::enmGuideStage_game_sdk_login_success,
            'enmGuideStage_game_sdk_login_fail' => self::enmGuideStage_game_sdk_login_fail,
            'enmGuideStage_game_serverlist_start' => self::enmGuideStage_game_serverlist_start,
            'enmGuideStage_game_serverlist_succss' => self::enmGuideStage_game_serverlist_succss,
            'enmGuideStage_game_serverlist_fail' => self::enmGuideStage_game_serverlist_fail,
            'enmGuideStage_game_notice_start' => self::enmGuideStage_game_notice_start,
            'enmGuideStage_game_notice_success' => self::enmGuideStage_game_notice_success,
            'enmGuideStage_game_notice_fail' => self::enmGuideStage_game_notice_fail,
            'enmGuideStage_game_serverlist_choose' => self::enmGuideStage_game_serverlist_choose,
            'enmGuideStage_game_server_confirm' => self::enmGuideStage_game_server_confirm,
            'enmGuideStage_game_enter_game' => self::enmGuideStage_game_enter_game,
            'enmGuideStage_game_checkversion_start' => self::enmGuideStage_game_checkversion_start,
            'enmGuideStage_game_checkversion_success' => self::enmGuideStage_game_checkversion_success,
            'enmGuideStage_game_checkversion_fail' => self::enmGuideStage_game_checkversion_fail,
            'enmGuideStage_game_update_space' => self::enmGuideStage_game_update_space,
            'enmGuideStage_game_update_show' => self::enmGuideStage_game_update_show,
            'enmGuideStage_game_update_confirm' => self::enmGuideStage_game_update_confirm,
            'enmGuideStage_game_update_start' => self::enmGuideStage_game_update_start,
            'enmGuideStage_game_update_httptimeout' => self::enmGuideStage_game_update_httptimeout,
            'enmGuideStage_game_update_loadtimeout' => self::enmGuideStage_game_update_loadtimeout,
            'enmGuideStage_game_update_md5error' => self::enmGuideStage_game_update_md5error,
            'enmGuideStage_game_update_missing' => self::enmGuideStage_game_update_missing,
            'enmGuideStage_game_update_download_fail' => self::enmGuideStage_game_update_download_fail,
            'enmGuideStage_game_update_progress_10' => self::enmGuideStage_game_update_progress_10,
            'enmGuideStage_game_update_progress_30' => self::enmGuideStage_game_update_progress_30,
            'enmGuideStage_game_update_progress_50' => self::enmGuideStage_game_update_progress_50,
            'enmGuideStage_game_update_progress_70' => self::enmGuideStage_game_update_progress_70,
            'enmGuideStage_game_update_download_success' => self::enmGuideStage_game_update_download_success,
            'enmGuideStage_game_update_unzip_start' => self::enmGuideStage_game_update_unzip_start,
            'enmGuideStage_game_update_unzip_success' => self::enmGuideStage_game_update_unzip_success,
            'enmGuideStage_game_update_unzip_fail' => self::enmGuideStage_game_update_unzip_fail,
            'enmGuideStage_game_update_success' => self::enmGuideStage_game_update_success,
            'enmGuideStage_game_server_login' => self::enmGuideStage_game_server_login,
            'enmGuideStage_game_server_login_fail' => self::enmGuideStage_game_server_login_fail,
            'enmGuideStage_game_cdkey_show' => self::enmGuideStage_game_cdkey_show,
            'enmGuideStage_game_cdkey_successl' => self::enmGuideStage_game_cdkey_successl,
            'enmGuideStage_game_cdkey_fail' => self::enmGuideStage_game_cdkey_fail,
            'enmGuideStage_game_server_queue_start' => self::enmGuideStage_game_server_queue_start,
            'enmGuideStage_game_server_queue_success' => self::enmGuideStage_game_server_queue_success,
            'enmGuideStage_game_server_queue_cancel' => self::enmGuideStage_game_server_queue_cancel,
            'enmGuideStage_game_server_roledata_noti' => self::enmGuideStage_game_server_roledata_noti,
            'enmGuideStage_game_createrole' => self::enmGuideStage_game_createrole,
            'enmGuideStage_game_popup_question' => self::enmGuideStage_game_popup_question,
            'enmGuideStage_game_popup_question_success' => self::enmGuideStage_game_popup_question_success,
            'enmGuideStage_game_createrole_success' => self::enmGuideStage_game_createrole_success,
            'enmGuideStage_game_createrole_fail' => self::enmGuideStage_game_createrole_fail,
            'enmGuideStage_game_server_enter' => self::enmGuideStage_game_server_enter,
            'enmGuideStage_game_activity_open' => self::enmGuideStage_game_activity_open,
            'enmGuideStage_game_popup' => self::enmGuideStage_game_popup,
        );
    }
}
}