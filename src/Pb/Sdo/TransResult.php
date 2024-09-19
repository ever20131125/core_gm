<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TransResult enum
 */
final class TransResult
{
    const enmTransRet_Success = 0;
    const enmTransRet_Failed = 1;
    const enmTransRet_Cancel = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmTransRet_Success' => self::enmTransRet_Success,
            'enmTransRet_Failed' => self::enmTransRet_Failed,
            'enmTransRet_Cancel' => self::enmTransRet_Cancel,
        );
    }
}
}