<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HuntTreasureOpt enum
 */
final class HuntTreasureOpt
{
    const enmHuntTreasureOpt_Null = 0;
    const enmHuntTreasureOpt_GetInfo = 1;
    const enmHuntTreasureOpt_Light = 2;
    const enmHuntTreasureOpt_Exchange = 3;
    const enmHuntTreasureOpt_SendChip = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmHuntTreasureOpt_Null' => self::enmHuntTreasureOpt_Null,
            'enmHuntTreasureOpt_GetInfo' => self::enmHuntTreasureOpt_GetInfo,
            'enmHuntTreasureOpt_Light' => self::enmHuntTreasureOpt_Light,
            'enmHuntTreasureOpt_Exchange' => self::enmHuntTreasureOpt_Exchange,
            'enmHuntTreasureOpt_SendChip' => self::enmHuntTreasureOpt_SendChip,
        );
    }
}
}