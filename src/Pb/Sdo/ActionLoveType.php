<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActionLoveType enum
 */
final class ActionLoveType
{
    const enmActionLoveType_None = 0;
    const enmActionLoveType_AddAdmire = 1;
    const enmActionLoveType_DelAdmire = 2;
    const enmActionLoveType_SetLoveNote = 3;
    const enmActionLoveType_WriteLover = 10;
    const enmActionLoveType_Sing = 20;
    const enmActionLoveType_Make = 30;
    const enmActionLoveType_Give = 40;
    const enmActionLoveType_ComGive = 41;
    const enmActionLoveType_ShopGive = 42;
    const enmActionLoveType_Date = 50;
    const enmActionLoveType_DateWay = 51;
    const enmActionLoveType_DateCloth = 52;
    const enmActionLoveType_DateBack = 53;
    const enmActionLoveType_DateNext = 54;
    const enmActionLoveType_DateRedo = 55;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActionLoveType_None' => self::enmActionLoveType_None,
            'enmActionLoveType_AddAdmire' => self::enmActionLoveType_AddAdmire,
            'enmActionLoveType_DelAdmire' => self::enmActionLoveType_DelAdmire,
            'enmActionLoveType_SetLoveNote' => self::enmActionLoveType_SetLoveNote,
            'enmActionLoveType_WriteLover' => self::enmActionLoveType_WriteLover,
            'enmActionLoveType_Sing' => self::enmActionLoveType_Sing,
            'enmActionLoveType_Make' => self::enmActionLoveType_Make,
            'enmActionLoveType_Give' => self::enmActionLoveType_Give,
            'enmActionLoveType_ComGive' => self::enmActionLoveType_ComGive,
            'enmActionLoveType_ShopGive' => self::enmActionLoveType_ShopGive,
            'enmActionLoveType_Date' => self::enmActionLoveType_Date,
            'enmActionLoveType_DateWay' => self::enmActionLoveType_DateWay,
            'enmActionLoveType_DateCloth' => self::enmActionLoveType_DateCloth,
            'enmActionLoveType_DateBack' => self::enmActionLoveType_DateBack,
            'enmActionLoveType_DateNext' => self::enmActionLoveType_DateNext,
            'enmActionLoveType_DateRedo' => self::enmActionLoveType_DateRedo,
        );
    }
}
}