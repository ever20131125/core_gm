<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * OperationResult enum
 */
final class OperationResult
{
    const enmOperationResult_Miss = 0;
    const enmOperationResult_Good = 1;
    const enmOperationResult_Great = 2;
    const enmOperationResult_Perfect = 3;
    const enmOperationResult_SPerfect = 4;
    const enmOperationResult_Nokey = 5;
    const enmOperationResult_Freedom = 6;
    const enmOperationResult_Lost = 7;
    const enmOperationResult_Timeout = 255;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmOperationResult_Miss' => self::enmOperationResult_Miss,
            'enmOperationResult_Good' => self::enmOperationResult_Good,
            'enmOperationResult_Great' => self::enmOperationResult_Great,
            'enmOperationResult_Perfect' => self::enmOperationResult_Perfect,
            'enmOperationResult_SPerfect' => self::enmOperationResult_SPerfect,
            'enmOperationResult_Nokey' => self::enmOperationResult_Nokey,
            'enmOperationResult_Freedom' => self::enmOperationResult_Freedom,
            'enmOperationResult_Lost' => self::enmOperationResult_Lost,
            'enmOperationResult_Timeout' => self::enmOperationResult_Timeout,
        );
    }
}
}