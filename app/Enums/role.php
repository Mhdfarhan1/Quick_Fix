<?php

namespace App\Enums;

enum Role: string
{
    case Admin = 'admin';
    case Teknisi = 'teknisi';
    case Pelanggan = 'pelanggan';
}