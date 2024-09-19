<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ArenaOpt enum
 */
final class ArenaOpt
{
    const enmArenaOpt_Null = 0;
    const enmArenaOpt_GetRankInfo = 1;
    const enmArenaOpt_GetMyInfo = 2;
    const enmArenaOpt_Challenge = 4;
    const enmArenaOpt_GetTodayVictoryPrize = 8;
    const enmArenaOpt_BuyChance = 16;
    const enmArenaOpt_AreanRecord = 32;
    const enmArenaOpt_ResetChallenageCD = 64;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmArenaOpt_Null' => self::enmArenaOpt_Null,
            'enmArenaOpt_GetRankInfo' => self::enmArenaOpt_GetRankInfo,
            'enmArenaOpt_GetMyInfo' => self::enmArenaOpt_GetMyInfo,
            'enmArenaOpt_Challenge' => self::enmArenaOpt_Challenge,
            'enmArenaOpt_GetTodayVictoryPrize' => self::enmArenaOpt_GetTodayVictoryPrize,
            'enmArenaOpt_BuyChance' => self::enmArenaOpt_BuyChance,
            'enmArenaOpt_AreanRecord' => self::enmArenaOpt_AreanRecord,
            'enmArenaOpt_ResetChallenageCD' => self::enmArenaOpt_ResetChallenageCD,
        );
    }
}
}