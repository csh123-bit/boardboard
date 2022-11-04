<?php

namespace App\Models;

class BoardModel extends BaseModel
{
    protected $table          = '';
    protected $prefix         = 'bod';
    protected $allowedFields  = [
        'bod_idx','bod_username','bod_title','bod_content',
        'bod_password','bod_depth','bod_group',
        'bod_created_id','bod_created_ip','bod_created_at',
        'bod_updated_id','bod_updated_ip','bod_updated_at',
        'bod_deleted_id','bod_deleted_ip','bod_deleted_at'
    ];

    public function __construct($table_name)
    {
        $this->table = 'board_boards_'.$table_name;
        
    }
}
