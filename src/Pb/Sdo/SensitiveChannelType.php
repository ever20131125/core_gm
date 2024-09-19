<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SensitiveChannelType enum
 */
final class SensitiveChannelType
{
    const enmSensitiveChannelInvalid = 0;
    const enmSensitiveChannelPrivateChat = 1;
    const enmSensitiveChannelPublicChat = 2;
    const enmSensitiveChannelSpeakerChat = 4;
    const enmSensitiveChannelRoleName = 8;
    const enmSensitiveChannelSignature = 16;
    const enmSensitiveChannelRoomName = 32;
    const enmSensitiveChannelGuildName = 64;
    const enmSensitiveChannelNickGroupName = 512;
    const enmSensitiveChannelEmail = 1024;
    const enmSensitiveChannelLeaveMessage = 2048;
    const enmSensitiveChannelTitle = 4096;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSensitiveChannelInvalid' => self::enmSensitiveChannelInvalid,
            'enmSensitiveChannelPrivateChat' => self::enmSensitiveChannelPrivateChat,
            'enmSensitiveChannelPublicChat' => self::enmSensitiveChannelPublicChat,
            'enmSensitiveChannelSpeakerChat' => self::enmSensitiveChannelSpeakerChat,
            'enmSensitiveChannelRoleName' => self::enmSensitiveChannelRoleName,
            'enmSensitiveChannelSignature' => self::enmSensitiveChannelSignature,
            'enmSensitiveChannelRoomName' => self::enmSensitiveChannelRoomName,
            'enmSensitiveChannelGuildName' => self::enmSensitiveChannelGuildName,
            'enmSensitiveChannelNickGroupName' => self::enmSensitiveChannelNickGroupName,
            'enmSensitiveChannelEmail' => self::enmSensitiveChannelEmail,
            'enmSensitiveChannelLeaveMessage' => self::enmSensitiveChannelLeaveMessage,
            'enmSensitiveChannelTitle' => self::enmSensitiveChannelTitle,
        );
    }
}
}