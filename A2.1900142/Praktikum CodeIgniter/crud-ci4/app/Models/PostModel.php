<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    /**
     * table name
     */
    protected $table = "post";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'title',
        'content'
    ];
}
