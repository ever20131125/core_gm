<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PartnerType enum
 */
final class PartnerType
{
    const enmPartner_None = 0;
    const enmPartner_Match = 1;
    const enmPartner_Invite = 2;
    const enmPartner_NPC = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPartner_None' => self::enmPartner_None,
            'enmPartner_Match' => self::enmPartner_Match,
            'enmPartner_Invite' => self::enmPartner_Invite,
            'enmPartner_NPC' => self::enmPartner_NPC,
        );
    }
}
}