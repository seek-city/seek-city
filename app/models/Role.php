<?php

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public function getFormatedPermissionsAttribute()
    {
        return implode(",",$this->getAttribute('permissions'));

    }

    public function setFormatedPermissionsAttribute($p)
    {
        $this->setPermissionsAttribute(explode(",",$p));
    }
}