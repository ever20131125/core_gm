<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BidResult enum
 */
final class BidResult
{
    const enmBidRet_None = 0;
    const enmBidRet_Success = 1;
    const enmBidRet_Failed_Cancel = 2;
    const enmBidRet_Failed_Time = 3;
    const enmBidRet_Failed_LowPrice = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBidRet_None' => self::enmBidRet_None,
            'enmBidRet_Success' => self::enmBidRet_Success,
            'enmBidRet_Failed_Cancel' => self::enmBidRet_Failed_Cancel,
            'enmBidRet_Failed_Time' => self::enmBidRet_Failed_Time,
            'enmBidRet_Failed_LowPrice' => self::enmBidRet_Failed_LowPrice,
        );
    }
}
}