<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HouseInfoType enum
 */
final class HouseInfoType
{
    const enmHouseInfo_None = 0;
    const enmHouseInfo_Exp = 1;
    const enmHouseInfo_Level = 2;
    const enmHouseInfo_Visit = 4;
    const enmHouseInfo_Like = 8;
    const enmHouseInfo_Name = 16;
    const enmHouseInfo_Password = 32;
    const enmHouseInfo_VisitAuth = 64;
    const enmHouseInfo_Luxury = 128;
    const enmHouseInfo_Dress = 256;
    const enmHouseInfo_CoupleDress = 512;
    const enmHouseInfo_VisitCP = 1024;
    const enmHouseInfo_LikeCP = 2048;
    const enmHouseInfo_CPLuxury = 4096;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmHouseInfo_None' => self::enmHouseInfo_None,
            'enmHouseInfo_Exp' => self::enmHouseInfo_Exp,
            'enmHouseInfo_Level' => self::enmHouseInfo_Level,
            'enmHouseInfo_Visit' => self::enmHouseInfo_Visit,
            'enmHouseInfo_Like' => self::enmHouseInfo_Like,
            'enmHouseInfo_Name' => self::enmHouseInfo_Name,
            'enmHouseInfo_Password' => self::enmHouseInfo_Password,
            'enmHouseInfo_VisitAuth' => self::enmHouseInfo_VisitAuth,
            'enmHouseInfo_Luxury' => self::enmHouseInfo_Luxury,
            'enmHouseInfo_Dress' => self::enmHouseInfo_Dress,
            'enmHouseInfo_CoupleDress' => self::enmHouseInfo_CoupleDress,
            'enmHouseInfo_VisitCP' => self::enmHouseInfo_VisitCP,
            'enmHouseInfo_LikeCP' => self::enmHouseInfo_LikeCP,
            'enmHouseInfo_CPLuxury' => self::enmHouseInfo_CPLuxury,
        );
    }
}
}