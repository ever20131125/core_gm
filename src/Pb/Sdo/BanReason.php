<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BanReason enum
 */
final class BanReason
{
    const enmBanReason_Unknow = 0;
    const enmBanReason_1 = 1;
    const enmBanReason_2 = 2;
    const enmBanReason_TooFast = 4;
    const enmBanReason_WrongSpeech = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBanReason_Unknow' => self::enmBanReason_Unknow,
            'enmBanReason_1' => self::enmBanReason_1,
            'enmBanReason_2' => self::enmBanReason_2,
            'enmBanReason_TooFast' => self::enmBanReason_TooFast,
            'enmBanReason_WrongSpeech' => self::enmBanReason_WrongSpeech,
        );
    }
}
}