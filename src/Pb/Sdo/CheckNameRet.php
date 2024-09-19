<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CheckNameRet enum
 */
final class CheckNameRet
{
    const enmCheckNameRet_Succ = 0;
    const enmCheckNameRet_Dup = 1;
    const enmCheckNameRet_Illegal = 2;
    const enmCheckNameRet_Length = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCheckNameRet_Succ' => self::enmCheckNameRet_Succ,
            'enmCheckNameRet_Dup' => self::enmCheckNameRet_Dup,
            'enmCheckNameRet_Illegal' => self::enmCheckNameRet_Illegal,
            'enmCheckNameRet_Length' => self::enmCheckNameRet_Length,
        );
    }
}
}