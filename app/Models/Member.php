<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
        'pin_reference',
        'name',
        'zone',
        'branch',
        'age_group',
        'gender',
        'phone',
        'email',
        'tag_number',
        'group',
        'payment_mode',
        'accreditation_status',
    ];
}
