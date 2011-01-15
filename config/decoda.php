<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['__markupResult'] = array(
        'code'      => array('__code'),
        'b'         => '<b>$1</b>',
        'i'         => '<i>$1</i>',
        'u'         => '<u>$1</u>',
        's'         => '<span style="text-decoration: line-through;">$1</span>',
        'align'     => '<div style="text-align: $1">$2</div>',
        'float'     => '<div class="decoda-float-$1">$2</div>',
        'color'     => '<span style="color: $1">$2</span>',
        'font'      => '<span style="font-family: \'$1\', sans-serif;">$2</span>',
        'h16'       => '<h$1>$2</h$3>',
        'size'      => '<span style="font-size: $1px">$2</span>',
        'sub'       => '<sub>$1</sub>',
        'sup'       => '<sup>$1</sup>',
        'var'       => '<var>$1</var>',
        'hide'      => '<span style="display: none">$1</span>',
        'note'		=> '<div class="decoda-note">$1</div>',
        'alert'     => '<div class="decoda-alert">$1</div>',
        'img'       => array('__img'),
        'div'       => array('__div'),
        'url'       => array('__url'),
        'email'     => array('__email'),
        'quote'     => array('__quote'),
        'olist'		=> array('__list'),
        'list'      => array('__list'),
        'li'		=> '<li>$1</li>',
        'spoiler'   => array('__spoiler'),
		'video'		=> array('__video'),
        'decode'    => array('__decode'),
        'callback'    => array('__callback')
    );

$config['__markupCode'] = array(
        'code'      => '/\[code(?:\slang=\"([-_\sa-zA-Z0-9]+)\")?(?:\shl=\"([0-9,]+)\")?\](.*?)\[\/code\]/is',
        'b'         => '/\[b\](.*?)\[\/b\]/is',
        'i'         => '/\[i\](.*?)\[\/i\]/is',
        'u'         => '/\[u\](.*?)\[\/u\]/is',
        's'         => '/\[s\](.*?)\[\/s\]/is',
        'align'     => '/\[align=(left|center|right|justify)\](.*?)\[\/align\]/is',
        'float'     => '/\[float=(left|right)\](.*?)\[\/float\]/is',
        'color'     => '/\[color=(#[0-9a-fA-F]{3,6}|[a-z]+)\](.*?)\[\/color\]/is',
        'font'      => '/\[font=\"(.*?)\"\](.*?)\[\/font\]/is',
        'h16'       => '/\[h([1-6]{1})\](.*?)\[\/h([1-6]{1})\]/is',
        'size'      => '/\[size=((?:[1-2]{1})?[0-9]{1})\](.*?)\[\/size\]/is',
        'sub'       => '/\[sub\](.*?)\[\/sub\]/is',
        'sup'       => '/\[sup\](.*?)\[\/sup\]/is',
        'var'       => '/\[var\](.*?)\[\/var\]/is',
        'hide'      => '/\[hide\](.*?)\[\/hide\]/is',
        'note'      => '/\[note\](.*?)\[\/note\]/is',
        'alert'		=> '/\[alert\](.*?)\[\/alert\]/is',
        'img'       => '/\[img(?:\swidth=([0-9%]{1,4}+))?(?:\sheight=([0-9%]{1,4}+))?\]((?:ftp|http)s?:\/\/.*?)\[\/img\]/is',
        'div'       => '/\[div(.*?)\](.*?)\[\/div\]/is',
        'url'       => array(
            '/\[url\]((?:http|ftp|irc|file|telnet)s?:\/\/.*?)\[\/url\]/is',
            '/\[url=((?:http|ftp|irc|file|telnet)s?:\/\/.*?)\](.*?)\[\/url\]/is'
        ),
        'email'     => array(
            '/\[e?mail\](.*?)\[\/e?mail\]/is',
            '/\[e?mail=(.*?)\](.*?)\[\/e?mail\]/is'
        ),
        'quote'     => '/\[quote(?:=\"(.*?)\")?(?:\sdate=\"(.*?)\")?\](.*?)\[\/quote\]/is',
        'olist'		=> '/\[olist\](.*?)\[\/olist\]/is',
        'list'      => '/\[list\](.*?)\[\/list\]/is',
		'li'		=> '/\[li\](.*?)\[\/li\]/is',
        'spoiler'   => '/\[spoiler\](.*?)\[\/spoiler\]/is',
        'video'     => '/\[video(?:=\"(.*?)\")?(?:\ssize=\"(.*?)\")?\](.*?)\[\/video\]/is',
        'decode'    => '/\[decode(?:\slang=\"([-_\sa-zA-Z0-9]+)\")?(?:\shl=\"([0-9,]+)\")?\](.*?)\[\/decode\]/is'
    );

$config['__messages'] = array(
		'spoiler'	=> 'Spoiler',
		'hide'		=> 'Hide',
		'show'		=> 'Show',
		'link'		=> 'link',
		'mail'		=> 'mail',
		'quoteBy'	=> 'Quote by {author}'
	);
$config['__videos'] = array(
		'youtube' => array(
			'small' => array(560, 340),
			'medium' => array(640, 385),
			'large' => array(853, 505),
			'player' => 'embed',
			'path' => 'http://youtube.com/v/{id}'
		),
		'vimeo' => array(
			'small' => array(400, 225),
			'medium' => array(550, 375),
			'large' => array(700, 525),
			'player' => 'iframe',
			'path' => 'http://player.vimeo.com/video/{id}'
		),
		'liveleak' => array(
			'small' => array(450, 370),
			'medium' => array(600, 520),
			'large' => array(750, 670),
			'player' => 'embed',
			'path' => 'http://liveleak.com/e/{id}'
		),
		'veoh' => array(
			'small' => array(410, 341),
			'medium' => array(610, 541),
			'large' => array(810, 741),
			'player' => 'embed',
			'path' => 'http://veoh.com//swf/webplayer/WebPlayer.swf?version=AFrontend.5.5.3.1004&permalinkId={id}&player=videodetailsembedded&videoAutoPlay=0&id=anonymous'
		),
		'dailymotion' => array(
			'small' => array(320, 256),
			'medium' => array(480, 384),
			'large' => array(560, 448),
			'player' => 'embed',
			'path' => 'http://dailymotion.com/swf/video/{id}&additionalInfos=0&autoPlay=0'
		),
		'myspace' => array(
			'small' => array(325, 260),
			'medium' => array(425, 360),
			'large' => array(525, 460),
			'player' => 'embed',
			'path' => 'http://mediaservices.myspace.com/services/media/embed.aspx/m={id},t=1,mt=video'
		)
	);