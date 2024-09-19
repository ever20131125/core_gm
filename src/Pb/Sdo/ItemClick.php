<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemClick enum
 */
final class ItemClick
{
    const enmItemClick_Confirm = 0;
    const enmItemClick_Use = 1;
    const enmItemClick_Open = 2;
    const enmItemClick_Sale = 4;
    const enmItemClick_Send = 8;
    const enmItemClick_GainWay = 16;
    const enmItemClick_Refine = 32;
    const enmItemClick_Syn = 64;
    const enmItemClick_Express = 128;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmItemClick_Confirm' => self::enmItemClick_Confirm,
            'enmItemClick_Use' => self::enmItemClick_Use,
            'enmItemClick_Open' => self::enmItemClick_Open,
            'enmItemClick_Sale' => self::enmItemClick_Sale,
            'enmItemClick_Send' => self::enmItemClick_Send,
            'enmItemClick_GainWay' => self::enmItemClick_GainWay,
            'enmItemClick_Refine' => self::enmItemClick_Refine,
            'enmItemClick_Syn' => self::enmItemClick_Syn,
            'enmItemClick_Express' => self::enmItemClick_Express,
        );
    }
}
}