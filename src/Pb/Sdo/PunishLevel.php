<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PunishLevel enum
 */
final class PunishLevel
{
    const enmPunishLevel_None = 0;
    const enmPunishLevel_Close = 1;
    const enmPunishLevel_Forbidden_Hall = 2;
    const enmPunishLevel_Forbidden_Room = 4;
    const enmPunishLevel_Forbidden_Private = 8;
    const enmPunishLevel_Forbidden_Mai = 16;
    const enmPunishLevel_Forbidden_SSpeaker = 32;
    const enmPunishLevel_Forbidden_BSpeaker = 64;
    const enmPunishLevel_Forbidden_USpeaker = 128;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPunishLevel_None' => self::enmPunishLevel_None,
            'enmPunishLevel_Close' => self::enmPunishLevel_Close,
            'enmPunishLevel_Forbidden_Hall' => self::enmPunishLevel_Forbidden_Hall,
            'enmPunishLevel_Forbidden_Room' => self::enmPunishLevel_Forbidden_Room,
            'enmPunishLevel_Forbidden_Private' => self::enmPunishLevel_Forbidden_Private,
            'enmPunishLevel_Forbidden_Mai' => self::enmPunishLevel_Forbidden_Mai,
            'enmPunishLevel_Forbidden_SSpeaker' => self::enmPunishLevel_Forbidden_SSpeaker,
            'enmPunishLevel_Forbidden_BSpeaker' => self::enmPunishLevel_Forbidden_BSpeaker,
            'enmPunishLevel_Forbidden_USpeaker' => self::enmPunishLevel_Forbidden_USpeaker,
        );
    }
}
}