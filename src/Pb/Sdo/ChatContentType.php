<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChatContentType enum
 */
final class ChatContentType
{
    const enmChatContentType_Voice = 1;
    const enmChatContentType_Text = 2;
    const enmChatContentType_Pic = 4;
    const enmChatContentType_Expre = 8;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmChatContentType_Voice' => self::enmChatContentType_Voice,
            'enmChatContentType_Text' => self::enmChatContentType_Text,
            'enmChatContentType_Pic' => self::enmChatContentType_Pic,
            'enmChatContentType_Expre' => self::enmChatContentType_Expre,
        );
    }
}
}