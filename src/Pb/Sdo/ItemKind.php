<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemKind enum
 */
final class ItemKind
{
    const enmItemKind_None = 0;
    const enmItemKind_UsePropLimit_Mark = 255;
    const enmItemKind_UsePropLimit_UseForMyself = 1;
    const enmItemKind_UsePropLimit_UseForOther = 2;
    const enmItemKind_UsePropLimit_UseForMale = 4;
    const enmItemKind_UsePropLimit_UseForFemale = 8;
    const enmItemKind_UsePropLimit_WeddingUse = 32;
    const enmItemKind_UsePropLimit_NotUse = 64;
    const enmItemKind_Mark_Mask = 65280;
    const enmItemKind_Mark_Effect = 256;
    const enmItemKind_Mark_Discolor = 512;
    const enmItemKind_Mark_Wedding = 1024;
    const enmItemKind_Mark_Swim = 2048;
    const enmItemKind_Mark_Lover = 4096;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmItemKind_None' => self::enmItemKind_None,
            'enmItemKind_UsePropLimit_Mark' => self::enmItemKind_UsePropLimit_Mark,
            'enmItemKind_UsePropLimit_UseForMyself' => self::enmItemKind_UsePropLimit_UseForMyself,
            'enmItemKind_UsePropLimit_UseForOther' => self::enmItemKind_UsePropLimit_UseForOther,
            'enmItemKind_UsePropLimit_UseForMale' => self::enmItemKind_UsePropLimit_UseForMale,
            'enmItemKind_UsePropLimit_UseForFemale' => self::enmItemKind_UsePropLimit_UseForFemale,
            'enmItemKind_UsePropLimit_WeddingUse' => self::enmItemKind_UsePropLimit_WeddingUse,
            'enmItemKind_UsePropLimit_NotUse' => self::enmItemKind_UsePropLimit_NotUse,
            'enmItemKind_Mark_Mask' => self::enmItemKind_Mark_Mask,
            'enmItemKind_Mark_Effect' => self::enmItemKind_Mark_Effect,
            'enmItemKind_Mark_Discolor' => self::enmItemKind_Mark_Discolor,
            'enmItemKind_Mark_Wedding' => self::enmItemKind_Mark_Wedding,
            'enmItemKind_Mark_Swim' => self::enmItemKind_Mark_Swim,
            'enmItemKind_Mark_Lover' => self::enmItemKind_Mark_Lover,
        );
    }
}
}