<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RealmType enum
 */
final class RealmType
{
    const enmRealmType_Invalid = 0;
    const enmRealmType_Fresh = 1;
    const enmRealmType_Free = 2;
    const enmRealmType_Cross = 3;
    const enmRealmType_House = 4;
    const enmRealmType_Church = 5;
    const enmRealmType_SNS = 6;
    const enmRealmType_Max = 20;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRealmType_Invalid' => self::enmRealmType_Invalid,
            'enmRealmType_Fresh' => self::enmRealmType_Fresh,
            'enmRealmType_Free' => self::enmRealmType_Free,
            'enmRealmType_Cross' => self::enmRealmType_Cross,
            'enmRealmType_House' => self::enmRealmType_House,
            'enmRealmType_Church' => self::enmRealmType_Church,
            'enmRealmType_SNS' => self::enmRealmType_SNS,
            'enmRealmType_Max' => self::enmRealmType_Max,
        );
    }
}
}