<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MailType enum
 */
final class MailType
{
    const enmMailType_Syetem = 0;
    const enmMailType_Player = 1;
    const enmMailType_Guild = 2;
    const enmMailType_Add = 3;
    const enmMailType_Guild_DeposePresidentVote = 17;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMailType_Syetem' => self::enmMailType_Syetem,
            'enmMailType_Player' => self::enmMailType_Player,
            'enmMailType_Guild' => self::enmMailType_Guild,
            'enmMailType_Add' => self::enmMailType_Add,
            'enmMailType_Guild_DeposePresidentVote' => self::enmMailType_Guild_DeposePresidentVote,
        );
    }
}
}