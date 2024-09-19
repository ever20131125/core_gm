<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExchangeActOpt enum
 */
final class ExchangeActOpt
{
    const enmExchangeActOpt_Null = 0;
    const enmExchangeActOpt_GetInfo = 1;
    const enmExchangeActOpt_DoExchange = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmExchangeActOpt_Null' => self::enmExchangeActOpt_Null,
            'enmExchangeActOpt_GetInfo' => self::enmExchangeActOpt_GetInfo,
            'enmExchangeActOpt_DoExchange' => self::enmExchangeActOpt_DoExchange,
        );
    }
}
}