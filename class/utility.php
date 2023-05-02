<?php

/**
 * A static class with usefull static methods
 *
 * @author Matteo Santarcangelo
 */
class utility
{
    public static function generateUUID(): string {
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[6] = chr(ord($data[6]) & 0x3f | 0x80);
        $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        
        return $uuid;
    }
}
