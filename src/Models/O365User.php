<?php

namespace GoodSystem\Models;

class O365User extends User
{
    // Wrapper of GoodSystem\Models\User -- use this so that user creation events can be logged properly after a successful Office 365 login.
    protected $table = 'users';
}
