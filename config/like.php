<?php

return [
    'name' => 'Like',

    /*
     * The flag to determine if the likes table should use UUIDs.
     * If you want to use UUIDs instead of auto-incrementing integers for your likes table, set this to true.
     */
    'is_uuids' => false,

    /*
     * The table name for likes records.
     */
    'table_name' => 'likes',

    /*
     * User tables foreign key name.
     */
    'user_foreign_key' => 'user_id',
];
