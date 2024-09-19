<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * EntityType enum
 */
final class EntityType
{
    const enmEntityType_None = 255;
    const enmEntityType_Reserve = 0;
    const enmEntityType_Account = 1;
    const enmEntityType_State = 2;
    const enmEntityType_Pay = 3;
    const enmEntityType_GM = 4;
    const enmEntityType_Mate = 5;
    const enmEntityType_Tunnel = 6;
    const enmEntityType_Router = 7;
    const enmEntityType_Control = 8;
    const enmEntityType_Game = 9;
    const enmEntityType_PlayerDB = 10;
    const enmEntityType_CenterChat = 11;
    const enmEntityType_RoleDB = 12;
    const enmEntityType_Task = 13;
    const enmEntityType_ItemDB = 14;
    const enmEntityType_Rank = 15;
    const enmEntityType_Security = 16;
    const enmEntityType_Relation = 17;
    const enmEntityType_Guild = 18;
    const enmEntityType_RankCenter = 19;
    const enmEntityType_SmallGame = 20;
    const enmEntityType_CenterData = 21;
    const enmEntityType_Chat = 22;
    const enmEntityType_Search = 23;
    const enmEntityType_Pet = 24;
    const enmEntityType_Act = 25;
    const enmEntityType_Robot = 26;
    const enmEntityType_Mail = 27;
    const enmEntityType_Record = 28;
    const enmEntityType_Match = 29;
    const enmEntityType_Sort = 30;
    const enmEntityType_DB = 31;
    const enmEntityType_Event = 32;
    const enmEntityType_Data = 33;
    const enmEntityType_Statistic = 34;
    const enmEntityType_Max = 48;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmEntityType_None' => self::enmEntityType_None,
            'enmEntityType_Reserve' => self::enmEntityType_Reserve,
            'enmEntityType_Account' => self::enmEntityType_Account,
            'enmEntityType_State' => self::enmEntityType_State,
            'enmEntityType_Pay' => self::enmEntityType_Pay,
            'enmEntityType_GM' => self::enmEntityType_GM,
            'enmEntityType_Mate' => self::enmEntityType_Mate,
            'enmEntityType_Tunnel' => self::enmEntityType_Tunnel,
            'enmEntityType_Router' => self::enmEntityType_Router,
            'enmEntityType_Control' => self::enmEntityType_Control,
            'enmEntityType_Game' => self::enmEntityType_Game,
            'enmEntityType_PlayerDB' => self::enmEntityType_PlayerDB,
            'enmEntityType_CenterChat' => self::enmEntityType_CenterChat,
            'enmEntityType_RoleDB' => self::enmEntityType_RoleDB,
            'enmEntityType_Task' => self::enmEntityType_Task,
            'enmEntityType_ItemDB' => self::enmEntityType_ItemDB,
            'enmEntityType_Rank' => self::enmEntityType_Rank,
            'enmEntityType_Security' => self::enmEntityType_Security,
            'enmEntityType_Relation' => self::enmEntityType_Relation,
            'enmEntityType_Guild' => self::enmEntityType_Guild,
            'enmEntityType_RankCenter' => self::enmEntityType_RankCenter,
            'enmEntityType_SmallGame' => self::enmEntityType_SmallGame,
            'enmEntityType_CenterData' => self::enmEntityType_CenterData,
            'enmEntityType_Chat' => self::enmEntityType_Chat,
            'enmEntityType_Search' => self::enmEntityType_Search,
            'enmEntityType_Pet' => self::enmEntityType_Pet,
            'enmEntityType_Act' => self::enmEntityType_Act,
            'enmEntityType_Robot' => self::enmEntityType_Robot,
            'enmEntityType_Mail' => self::enmEntityType_Mail,
            'enmEntityType_Record' => self::enmEntityType_Record,
            'enmEntityType_Match' => self::enmEntityType_Match,
            'enmEntityType_Sort' => self::enmEntityType_Sort,
            'enmEntityType_DB' => self::enmEntityType_DB,
            'enmEntityType_Event' => self::enmEntityType_Event,
            'enmEntityType_Data' => self::enmEntityType_Data,
            'enmEntityType_Statistic' => self::enmEntityType_Statistic,
            'enmEntityType_Max' => self::enmEntityType_Max,
        );
    }
}
}