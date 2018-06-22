<?php

namespace App;

/******************************************************
 * IM - Vocabulary Builder
 * Version : 1.0.2
 * Copyright© 2016 Imprevo Ltd. All Rights Reversed.
 * This file may not be redistributed.
 * Author URL:http://imprevo.net
 ******************************************************/

use Illuminate\Database\Eloquent\Model;


class Redeem extends Model
{
	protected $fillable = ['title', 'description', 'redeem_code', 'redeem_date',  'target_address', 'private_key', 	'amount', 'status', 'created_by', 'received_by'];
}
