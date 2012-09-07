<?php
/**
 * 此文件为默认配置文件，请勿修改
 */

return array(
    // 网站名称
    'sitename' => '贝塔资讯',
    // 网站短描述
    'shortdesc' => '我们不是一个人在战斗',
    // 网站语言
    'language' => 'zh_cn',
    // 使用的时区
    'timezone' => 'Asia/Shanghai',
    // 记住用户登录状态的cookie时间
    'autoLoginDuration' => 3600 * 24 * 7,
    // 当前theme，不要在此修改，这是默认值，请在后台中修改
    'theme' => null,
    // URL 格式，get|path，如果设置为path，需要在web服务端设置rewrite重定向
    'urlFormat' => 'path',

    // 每页显示的文章数量
    'postCountOfPage' => 12,
    // 标题显示列表每页显示的文章数量
    'postCountOfTitleListPage' => 25,
    // 每页显示的评论数量
    'commentCountOfPage' => 20,
    // 每页显示的热门评论数量
    'hotCommentCountOfPage' => 15,
    // 支持数达到多少才认为是热门评论
    'upNumsOfCommentIsHot' => 10,
    // 评论内容最短长度
    'commentMinLength' => 5,
    // 编辑推荐文章显示数量
    'recommendPostsCount' => 10,
    // 编辑推荐评论显示数量
    'recommendCommentsCount' => 15,

    // 缓存数据目录
    'dataPath' => BETA_CONFIG_ROOT . DS . '..' . DS . 'data' . DS,
    // 上传文件保存目录及基本url地址，url后面要带/
    'uploadBasePath' => BETA_WEBROOT . DS . '..' . DS . 'uploads' . DS,
    'uploadBaseUrl' => 'http://f.24beta.cn/',
    // 静态资源文件保存目录及基本url地址，url后面要带/
    'resourceBasePath' => BETA_WEBROOT . DS . '..' . DS . 'resources' . DS,
    'resourceBaseUrl' => 'http://s.24beta.cn/',
    // theme静态资源文件保存目录及基本url地址，url后面要带/
    'themeResourceBasePath' => BETA_WEBROOT . DS . '..' . DS . 'resources' . DS . 'themes' . DS,
    'themeResourceBaseUrl' => 'http://s.24beta.cn/themes/',

    /*
     * datetime format
    */
    'formatDateTime' => 'Y-m-d H:i:s',
    'formatShortDateTime' => 'm-d H:i',
    'formatDate' => 'Y-m-d',
    'formatShortDate' => 'm-d',
    'formatTime' => 'H:i:s',
    'formatShortTime' => 'H:i',
    
    /*
     * 前台相关参数
     */
    // 默认评论是否需要审核, 1直接显示，0需要审核
    'defaultNewCommentState' => 1,
    // 默认发布的文章是否直接显示在首页
    'defaultPostShowHomePage' => 1,
    // 概述列表方式下概述内容最大长度
    'subSummaryLen' => 300,
    
    // 简述中可以使用的html标签
    'summaryHtmlTags' => '<b><strong><img><p>',
    
    // default param and value
    'post_list_type' => 0,
    'beian_code' => '',
    'tongji_code' => '',
    'header_html' => '',
    'footer_after_html' => '',
    'footer_before_html' => '',
    'site_keywords' => '',
    'site_description' => '',
    'filterKeywordReplacement' => '文明用语',
    'enable_lazyload_img' => 1,
    'post_list_show_topic_icon' => 1,
    'visit_nums_init_min' => 1,
    'visit_nums_init_max' => 1,
    'user_required_email_verfiy' => 0,
    'user_required_admin_verfiy' => 0,
);

