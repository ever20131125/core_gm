<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SocialRecordType enum
 */
final class SocialRecordType
{
    const SocialRecordType_None = 0;
    const SocialRecordType_Today = 1;
    const SocialRecordType_Major = 2;
    const SocialRecordType_Mutual = 3;
    const SocialRecordType_Event = 4;
    const SocialRecordType_Lover_Event = 16;
    const SocialRecordType_Lover_Trifles = 17;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SocialRecordType_None' => self::SocialRecordType_None,
            'SocialRecordType_Today' => self::SocialRecordType_Today,
            'SocialRecordType_Major' => self::SocialRecordType_Major,
            'SocialRecordType_Mutual' => self::SocialRecordType_Mutual,
            'SocialRecordType_Event' => self::SocialRecordType_Event,
            'SocialRecordType_Lover_Event' => self::SocialRecordType_Lover_Event,
            'SocialRecordType_Lover_Trifles' => self::SocialRecordType_Lover_Trifles,
        );
    }
}
}