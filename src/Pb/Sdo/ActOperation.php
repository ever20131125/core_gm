<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActOperation enum
 */
final class ActOperation
{
    const enmActOperation_SendGiftByAct = 1;
    const enmActOperation_BuyItem = 2;
    const enmActOperation_SendItemBuffer = 8;
    const enmActOperation_SendMail = 16;
    const enmActOperation_SendBox = 128;
    const enmActOperation_SendMult = 256;
    const enmActOperation_Raffle = 1024;
    const enmActOperation_Show = 2048;
    const enmActOperation_SendRandomGiftByAct = 4096;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActOperation_SendGiftByAct' => self::enmActOperation_SendGiftByAct,
            'enmActOperation_BuyItem' => self::enmActOperation_BuyItem,
            'enmActOperation_SendItemBuffer' => self::enmActOperation_SendItemBuffer,
            'enmActOperation_SendMail' => self::enmActOperation_SendMail,
            'enmActOperation_SendBox' => self::enmActOperation_SendBox,
            'enmActOperation_SendMult' => self::enmActOperation_SendMult,
            'enmActOperation_Raffle' => self::enmActOperation_Raffle,
            'enmActOperation_Show' => self::enmActOperation_Show,
            'enmActOperation_SendRandomGiftByAct' => self::enmActOperation_SendRandomGiftByAct,
        );
    }
}
}