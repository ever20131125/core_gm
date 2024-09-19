<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RaffleOperate enum
 */
final class RaffleOperate
{
    const enmRaffleOperate_Null = 0;
    const enmRaffleOperate_GoRaffle = 1;
    const enmRaffleOperate_RefreshPrize = 2;
    const enmRaffleOperate_Ban = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRaffleOperate_Null' => self::enmRaffleOperate_Null,
            'enmRaffleOperate_GoRaffle' => self::enmRaffleOperate_GoRaffle,
            'enmRaffleOperate_RefreshPrize' => self::enmRaffleOperate_RefreshPrize,
            'enmRaffleOperate_Ban' => self::enmRaffleOperate_Ban,
        );
    }
}
}