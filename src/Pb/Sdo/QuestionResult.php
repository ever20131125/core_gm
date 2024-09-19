<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QuestionResult enum
 */
final class QuestionResult
{
    const enmQuestionResult_None = 0;
    const enmQuestionResult_Right = 1;
    const enmQuestionResult_Wrong = 2;
    const enmQuestionResult_RightButLate = 3;
    const enmQuestionResult_Expired = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmQuestionResult_None' => self::enmQuestionResult_None,
            'enmQuestionResult_Right' => self::enmQuestionResult_Right,
            'enmQuestionResult_Wrong' => self::enmQuestionResult_Wrong,
            'enmQuestionResult_RightButLate' => self::enmQuestionResult_RightButLate,
            'enmQuestionResult_Expired' => self::enmQuestionResult_Expired,
        );
    }
}
}