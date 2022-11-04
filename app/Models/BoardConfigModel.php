<?php

namespace App\Models;

class BoardConfigModel extends BaseModel
{
    protected $table          = 'board_boards_config';
    protected $prefix         = 'bbc';
    protected $allowedFields  = [
        'bbc_idx','bbc_username','bbc_title','bbc_content',
        'bbc_password','bbc_depth','bbc_group',
        'bbc_created_id','bbc_created_ip','bbc_created_at',
        'bbc_updated_id','bbc_updated_ip','bbc_updated_at',
        'bbc_deleted_id','bbc_deleted_ip','bbc_deleted_at'
    ];

    public function __construct($table_name)
    {
        $this->table = 'board_boards_'.$table_name;
    }
}
