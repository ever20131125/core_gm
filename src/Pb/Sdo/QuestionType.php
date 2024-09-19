<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QuestionType enum
 */
final class QuestionType
{
    const enmQuestionType_None = 0;
    const enmQuestionType_Common = 1;
    const enmQuestionType_Cloth = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmQuestionType_None' => self::enmQuestionType_None,
            'enmQuestionType_Common' => self::enmQuestionType_Common,
            'enmQuestionType_Cloth' => self::enmQuestionType_Cloth,
        );
    }
}
}