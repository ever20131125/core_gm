<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SoulAnswerType enum
 */
final class SoulAnswerType
{
    const enmSoulAnswerType_None = 0;
    const enmSoulAnswerType_Agree = 1;
    const enmSoulAnswerType_Refuse = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSoulAnswerType_None' => self::enmSoulAnswerType_None,
            'enmSoulAnswerType_Agree' => self::enmSoulAnswerType_Agree,
            'enmSoulAnswerType_Refuse' => self::enmSoulAnswerType_Refuse,
        );
    }
}
}