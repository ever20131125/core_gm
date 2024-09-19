<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FixupResult enum
 */
final class FixupResult
{
    const enmFixupResult_Success = 0;
    const enmFixupResult_Failed_NotEnoughPlayer = 1;
    const enmFixupResult_Failed_NoGameServer = 2;
    const enmFixupResult_Failed_UnConfirm = 3;
    const enmFixupResult_Failed_Unknow = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFixupResult_Success' => self::enmFixupResult_Success,
            'enmFixupResult_Failed_NotEnoughPlayer' => self::enmFixupResult_Failed_NotEnoughPlayer,
            'enmFixupResult_Failed_NoGameServer' => self::enmFixupResult_Failed_NoGameServer,
            'enmFixupResult_Failed_UnConfirm' => self::enmFixupResult_Failed_UnConfirm,
            'enmFixupResult_Failed_Unknow' => self::enmFixupResult_Failed_Unknow,
        );
    }
}
}