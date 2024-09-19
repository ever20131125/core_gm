<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AvatarType enum
 */
final class AvatarType
{
    const enmAvatarType_Invalid = 0;
    const enmAvatarType_Normal = 1;
    const enmAvatarType_Swim = 2;
    const enmAvatarType_Arena = 3;
    const enmAvatarType_Max = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAvatarType_Invalid' => self::enmAvatarType_Invalid,
            'enmAvatarType_Normal' => self::enmAvatarType_Normal,
            'enmAvatarType_Swim' => self::enmAvatarType_Swim,
            'enmAvatarType_Arena' => self::enmAvatarType_Arena,
            'enmAvatarType_Max' => self::enmAvatarType_Max,
        );
    }
}
}