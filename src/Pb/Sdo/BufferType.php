<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BufferType enum
 */
final class BufferType
{
    const enmBufType_None = 0;
    const enmBufType_Field_Mask = 251658240;
    const enmBufType_Field_Role = 16777216;
    const enmBufType_Field_Team = 33554432;
    const enmBufType_Field_Boss = 50331648;
    const enmBufType_Field_Pet = 67108864;
    const enmBufType_Eff_Mask = 15728640;
    const enmBufType_Eff_Positive = 1048576;
    const enmBufType_Eff_Negative = 2097152;
    const enmBufType_Tri_Mask = 983040;
    const enmBufType_Tri_Item = 65536;
    const enmBufType_Tri_Skill = 131072;
    const enmBufType_Tri_Newplayer = 196608;
    const enmBufType_Item_OnlineBonus = 1118209;
    const enmBufType_Item_MulExp = 1118210;
    const enmBufType_Item_MulGCoin = 1118211;
    const enmBufType_Item_MulTask = 1118212;
    const enmBufType_Item_MulHeart = 1118213;
    const enmBufType_Item_Prac = 1118214;
    const enmBufType_Item_Traf = 1118215;
    const enmBufType_Item_AntiTraf = 1118216;
    const enmBufType_Item_Bubble = 1118217;
    const enmBufType_Item_Silk = 1118218;
    const enmBufType_Item_Doll = 1118219;
    const enmBufType_PlayerManMul = 17825793;
    const enmBufType_PlayerManSub = 18874369;
    const enmBufType_PlayerIntInc = 17825794;
    const enmBufType_PlayerIntDec = 18874370;
    const enmBufType_PlayerDexInc = 17825795;
    const enmBufType_PlayerDexDec = 18874371;
    const enmBufType_PlayerPerInc = 17825796;
    const enmBufType_PlayerPerDec = 18874372;
    const enmBufType_PlayerChaInc = 17825797;
    const enmBufType_PlayerChaDec = 18874373;
    const enmBufType_PlayerFeeInc = 17825798;
    const enmBufType_PlayerFeeDec = 18874374;
    const enmBufType_PlayerRebound = 17825799;
    const enmBufType_PlayerTopDefense = 17825800;
    const enmBufType_PlayerChaToDex = 17825801;
    const enmBufType_PlayerCopy = 17825802;
    const enmBufType_PlayerShowTimeSP = 17825803;
    const enmBufType_New_Exper = 18022401;
    const enmBufType_New_DiamondShoes = 18022402;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBufType_None' => self::enmBufType_None,
            'enmBufType_Field_Mask' => self::enmBufType_Field_Mask,
            'enmBufType_Field_Role' => self::enmBufType_Field_Role,
            'enmBufType_Field_Team' => self::enmBufType_Field_Team,
            'enmBufType_Field_Boss' => self::enmBufType_Field_Boss,
            'enmBufType_Field_Pet' => self::enmBufType_Field_Pet,
            'enmBufType_Eff_Mask' => self::enmBufType_Eff_Mask,
            'enmBufType_Eff_Positive' => self::enmBufType_Eff_Positive,
            'enmBufType_Eff_Negative' => self::enmBufType_Eff_Negative,
            'enmBufType_Tri_Mask' => self::enmBufType_Tri_Mask,
            'enmBufType_Tri_Item' => self::enmBufType_Tri_Item,
            'enmBufType_Tri_Skill' => self::enmBufType_Tri_Skill,
            'enmBufType_Tri_Newplayer' => self::enmBufType_Tri_Newplayer,
            'enmBufType_Item_OnlineBonus' => self::enmBufType_Item_OnlineBonus,
            'enmBufType_Item_MulExp' => self::enmBufType_Item_MulExp,
            'enmBufType_Item_MulGCoin' => self::enmBufType_Item_MulGCoin,
            'enmBufType_Item_MulTask' => self::enmBufType_Item_MulTask,
            'enmBufType_Item_MulHeart' => self::enmBufType_Item_MulHeart,
            'enmBufType_Item_Prac' => self::enmBufType_Item_Prac,
            'enmBufType_Item_Traf' => self::enmBufType_Item_Traf,
            'enmBufType_Item_AntiTraf' => self::enmBufType_Item_AntiTraf,
            'enmBufType_Item_Bubble' => self::enmBufType_Item_Bubble,
            'enmBufType_Item_Silk' => self::enmBufType_Item_Silk,
            'enmBufType_Item_Doll' => self::enmBufType_Item_Doll,
            'enmBufType_PlayerManMul' => self::enmBufType_PlayerManMul,
            'enmBufType_PlayerManSub' => self::enmBufType_PlayerManSub,
            'enmBufType_PlayerIntInc' => self::enmBufType_PlayerIntInc,
            'enmBufType_PlayerIntDec' => self::enmBufType_PlayerIntDec,
            'enmBufType_PlayerDexInc' => self::enmBufType_PlayerDexInc,
            'enmBufType_PlayerDexDec' => self::enmBufType_PlayerDexDec,
            'enmBufType_PlayerPerInc' => self::enmBufType_PlayerPerInc,
            'enmBufType_PlayerPerDec' => self::enmBufType_PlayerPerDec,
            'enmBufType_PlayerChaInc' => self::enmBufType_PlayerChaInc,
            'enmBufType_PlayerChaDec' => self::enmBufType_PlayerChaDec,
            'enmBufType_PlayerFeeInc' => self::enmBufType_PlayerFeeInc,
            'enmBufType_PlayerFeeDec' => self::enmBufType_PlayerFeeDec,
            'enmBufType_PlayerRebound' => self::enmBufType_PlayerRebound,
            'enmBufType_PlayerTopDefense' => self::enmBufType_PlayerTopDefense,
            'enmBufType_PlayerChaToDex' => self::enmBufType_PlayerChaToDex,
            'enmBufType_PlayerCopy' => self::enmBufType_PlayerCopy,
            'enmBufType_PlayerShowTimeSP' => self::enmBufType_PlayerShowTimeSP,
            'enmBufType_New_Exper' => self::enmBufType_New_Exper,
            'enmBufType_New_DiamondShoes' => self::enmBufType_New_DiamondShoes,
        );
    }
}
}