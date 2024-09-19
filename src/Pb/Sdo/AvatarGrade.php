<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AvatarGrade enum
 */
final class AvatarGrade
{
    const enmAvatarGrade_F = 0;
    const enmAvatarGrade_C = 1;
    const enmAvatarGrade_B = 2;
    const enmAvatarGrade_A = 3;
    const enmAvatarGrade_S = 4;
    const enmAvatarGrade_SS = 5;
    const enmAvatarGrade_Num = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAvatarGrade_F' => self::enmAvatarGrade_F,
            'enmAvatarGrade_C' => self::enmAvatarGrade_C,
            'enmAvatarGrade_B' => self::enmAvatarGrade_B,
            'enmAvatarGrade_A' => self::enmAvatarGrade_A,
            'enmAvatarGrade_S' => self::enmAvatarGrade_S,
            'enmAvatarGrade_SS' => self::enmAvatarGrade_SS,
            'enmAvatarGrade_Num' => self::enmAvatarGrade_Num,
        );
    }
}
}