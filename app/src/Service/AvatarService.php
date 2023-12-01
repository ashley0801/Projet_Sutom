<?php
namespace App\Service;

class AvatarService
{
    public function getAvailableAvatars()
    {
        return [
            'avatar1.png' => '/images/avatars/avatar1.png',
            'avatar2.png' => '/images/avatars/avatar2.png',
        ];
    }
}
