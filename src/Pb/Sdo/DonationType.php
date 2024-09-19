<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * DonationType enum
 */
final class DonationType
{
    const enmDonationType_Invalid = 0;
    const enmDonationType_Small = 1;
    const enmDonationType_Large = 2;
    const enmDonationType_Full = 3;
    const enmDonationType_Count = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmDonationType_Invalid' => self::enmDonationType_Invalid,
            'enmDonationType_Small' => self::enmDonationType_Small,
            'enmDonationType_Large' => self::enmDonationType_Large,
            'enmDonationType_Full' => self::enmDonationType_Full,
            'enmDonationType_Count' => self::enmDonationType_Count,
        );
    }
}
}