<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AnswerResultType enum
 */
final class AnswerResultType
{
    const enmAnswerResultType_None = 0;
    const enmAnswerResultType_Accept = 1;
    const enmAnswerResultType_Refuse = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAnswerResultType_None' => self::enmAnswerResultType_None,
            'enmAnswerResultType_Accept' => self::enmAnswerResultType_Accept,
            'enmAnswerResultType_Refuse' => self::enmAnswerResultType_Refuse,
        );
    }
}
}