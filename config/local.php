<?php
/**
 * Created by PhpStorm.
 * User: binfang
 * Date: 17/12/8
 * Time: 下午1:59
 */

if (ENVIRONMENT == 'development') {
    return [
        'website' => 'http://www.myshared.fb'
    ];

} else {
    return ['website' => 'http://www.myshared.top'];
}