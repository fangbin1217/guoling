<?php
/**
 * Created by PhpStorm.
 * User: binfang
 * Date: 17/12/8
 * Time: 下午1:59
 */

$localConfig = [
    'title' => '花好月圆的个人经验 - 草根站长学习、交流、分享！', //首页相关配置
    'keywords' => '分享,个人分享,我的分享,share,经验,个人经验,旅行,旅游,站长',
    'description' => '文武创始人花好月圆的个人经验，主要以旅行分享、佳文分享、个人兴趣爱好内容为主的个人经验总结！',
];

if (ENVIRONMENT == 'development') {
    $localConfig['website'] = 'http://www.myshared.fb';

} else {
    $localConfig['website'] = 'http://www.myshared.top';
}
 return $localConfig;