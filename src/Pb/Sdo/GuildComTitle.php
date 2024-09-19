<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildComTitle enum
 */
final class GuildComTitle
{
    const enmGuildComTitle_UnCom = 0;
    const enmGuildComTitle_Chairman = 1;
    const enmGuildComTitle_Staff = 50;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildComTitle_UnCom' => self::enmGuildComTitle_UnCom,
            'enmGuildComTitle_Chairman' => self::enmGuildComTitle_Chairman,
            'enmGuildComTitle_Staff' => self::enmGuildComTitle_Staff,
        );
    }
}
}