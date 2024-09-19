<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CastType enum
 */
final class CastType
{
    const enmCastType_All = 0;
    const enmCastType_Random1 = 1;
    const enmCastType_Random2 = 2;
    const enmCastType_OtherRandom = 3;
    const enmCastType_OtherFirst = 4;
    const enmCastType_Self = 5;
    const enmCastType_CooperateReq = 0;
    const enmCastType_CooperateResp = 1;
    const enmCastType_CooperateSucc = 2;
    const enmCastType_PK_Key = 0;
    const enmCastType_PK_Round = 1;
    const enmCastType_PK_Att = 2;
    const enmCastType_Normal = 0;
    const enmCastType_SP_PK = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCastType_All' => self::enmCastType_All,
            'enmCastType_Random1' => self::enmCastType_Random1,
            'enmCastType_Random2' => self::enmCastType_Random2,
            'enmCastType_OtherRandom' => self::enmCastType_OtherRandom,
            'enmCastType_OtherFirst' => self::enmCastType_OtherFirst,
            'enmCastType_Self' => self::enmCastType_Self,
            'enmCastType_CooperateReq' => self::enmCastType_CooperateReq,
            'enmCastType_CooperateResp' => self::enmCastType_CooperateResp,
            'enmCastType_CooperateSucc' => self::enmCastType_CooperateSucc,
            'enmCastType_PK_Key' => self::enmCastType_PK_Key,
            'enmCastType_PK_Round' => self::enmCastType_PK_Round,
            'enmCastType_PK_Att' => self::enmCastType_PK_Att,
            'enmCastType_Normal' => self::enmCastType_Normal,
            'enmCastType_SP_PK' => self::enmCastType_SP_PK,
        );
    }
}
}