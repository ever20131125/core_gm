<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * Answer enum
 */
final class Answer
{
    const enmAnswer_Agree = 0;
    const enmAnswer_Refuse = 1;
    const enmAnswer_Unknow = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAnswer_Agree' => self::enmAnswer_Agree,
            'enmAnswer_Refuse' => self::enmAnswer_Refuse,
            'enmAnswer_Unknow' => self::enmAnswer_Unknow,
        );
    }
}
}