<?php

return array(
    'title' => trans('administrator.role._admin.title'), 
    'model' => 'Role', 
    'single' => trans('administrator.role._admin.single'), 
    'form_width' => 500, 
    'sort' => '', 
    'columns' => array( 
    'id' => array( 
        'title' => trans('administrator.role.id') , 
    ), 
    'name' => array( 
        'title' => trans('administrator._global.name') , 
    ), 
    'formated_permissions' => array( 
        'title' => trans('administrator._global.permissions') , 
    ), 
    'created_at' => array( 
        'title' => trans('administrator._global.created_at') , 
        'editable' => 0, 
    ), 
), 
'filters' => array( 
    'id' => array( 
        'title' => trans('administrator.role.id') , 
        'type' => 'key', 
    ), 
    'name' => array( 
        'title' => trans('administrator._global.name') , 
        'type' => 'text', 
        'limit' => '128', 
    ), 
    'permissions' => array( 
        'title' => trans('administrator._global.permissions') , 
        'type' => 'text', 
        'limit' => '128', 
    ), 
    'created_at' => array( 
        'title' => trans('administrator._global.created_at') , 
        'type' => 'date', 
        'editable' => 0, 
    ), 
), 
'edit_fields' => array( 
    'id' => array( 
        'title' => trans('administrator.role.id') , 
        'type' => 'key', 
    ), 
    'name' => array( 
        'title' => trans('administrator._global.name') , 
        'type' => 'text', 
        'limit' => '128', 
    ), 
    'permissions' => array( 
        'title' => trans('administrator._global.permissions') , 
        'type' => 'text', 
        'limit' => '512', 
    ), 
), 
); 