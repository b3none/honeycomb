<?php
namespace Kaweb\Honeycomb\Categories;


class UsersEndpoints extends BaseEndpoints
{
    public function __construct($connection)
    {
		parent::__construct($connection);

    	$this->object = 'users';
    }
}
