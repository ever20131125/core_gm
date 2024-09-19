<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BranchGuide enum
 */
final class BranchGuide
{
    const enmBranchGuide_None = 0;
    const enmBranchGuide_FreshTask = 1;
    const enmBranchGuide_LevelTask = 2;
    const enmBranchGuide_DailyTask = 4;
    const enmBranchGuide_SNS = 16;
    const enmBranchGuide_Qualify = 32;
    const enmBranchGuide_Guild = 64;
    const enmBranchGuide_House = 128;
    const enmBranchGuide_HouseDress = 256;
    const enmBranchGuide_HouseMerge = 512;
    const enmBranchGuide_BattlePass = 1024;
    const enmBranchGuide_Lover = 2048;
    const enmBranchGuide_Puzz = 4096;
    const enmBranchGuide_Party = 8192;
    const enmBranchGuide_SNS_Raffle = 65536;
    const enmBranchGuide_SNS_Swim = 131072;
    const enmBranchGuide_SNS_Boat = 262144;
    const enmBranchGuide_SNS_Wheal = 524288;
    const enmBranchGuide_DropBallTeach = 1048576;
    const enmBranchGuide_HeartStarTeach = 2097152;
    const enmBranchGuide_LMTeach = 4194304;
    const enmBranchGuide_LM2Teach = 8388608;
    const enmBranchGuide_RunBallTeach = 16777216;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBranchGuide_None' => self::enmBranchGuide_None,
            'enmBranchGuide_FreshTask' => self::enmBranchGuide_FreshTask,
            'enmBranchGuide_LevelTask' => self::enmBranchGuide_LevelTask,
            'enmBranchGuide_DailyTask' => self::enmBranchGuide_DailyTask,
            'enmBranchGuide_SNS' => self::enmBranchGuide_SNS,
            'enmBranchGuide_Qualify' => self::enmBranchGuide_Qualify,
            'enmBranchGuide_Guild' => self::enmBranchGuide_Guild,
            'enmBranchGuide_House' => self::enmBranchGuide_House,
            'enmBranchGuide_HouseDress' => self::enmBranchGuide_HouseDress,
            'enmBranchGuide_HouseMerge' => self::enmBranchGuide_HouseMerge,
            'enmBranchGuide_BattlePass' => self::enmBranchGuide_BattlePass,
            'enmBranchGuide_Lover' => self::enmBranchGuide_Lover,
            'enmBranchGuide_Puzz' => self::enmBranchGuide_Puzz,
            'enmBranchGuide_Party' => self::enmBranchGuide_Party,
            'enmBranchGuide_SNS_Raffle' => self::enmBranchGuide_SNS_Raffle,
            'enmBranchGuide_SNS_Swim' => self::enmBranchGuide_SNS_Swim,
            'enmBranchGuide_SNS_Boat' => self::enmBranchGuide_SNS_Boat,
            'enmBranchGuide_SNS_Wheal' => self::enmBranchGuide_SNS_Wheal,
            'enmBranchGuide_DropBallTeach' => self::enmBranchGuide_DropBallTeach,
            'enmBranchGuide_HeartStarTeach' => self::enmBranchGuide_HeartStarTeach,
            'enmBranchGuide_LMTeach' => self::enmBranchGuide_LMTeach,
            'enmBranchGuide_LM2Teach' => self::enmBranchGuide_LM2Teach,
            'enmBranchGuide_RunBallTeach' => self::enmBranchGuide_RunBallTeach,
        );
    }
}
}