<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AnswerResult enum
 */
final class AnswerResult
{
    const enmAnswerResult_None = 0;
    const enmAnswerResult_Right = 1;
    const enmAnswerResult_Wrong = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAnswerResult_None' => self::enmAnswerResult_None,
            'enmAnswerResult_Right' => self::enmAnswerResult_Right,
            'enmAnswerResult_Wrong' => self::enmAnswerResult_Wrong,
        );
    }
}
}