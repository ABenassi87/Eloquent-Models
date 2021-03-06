<?php

declare(strict_types=1);

/*
 * This file is part of Eloquent Models.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
    use Traits\ScopesTrait;

    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
