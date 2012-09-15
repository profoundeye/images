<?php
return array(
    'debug' => false,
    //'error_redirect' => 'http://avnpc.com/pages/evacloudimage',
    'libPath' => __DIR__ . '/lib',  //PHPthumb library path
    'sourceRootPath' => __DIR__ . '/../attachs',  //original image save path, require path read permission
    'thumbFileRootPath' => __DIR__ , //resized thumbnails save path, require read and write permission
    'thumbUrlRootPath' => __DIR__ . '/..' , //thumbnails url root path, require read and write permission
    'saveImage' => true,  //if true, thumbnails will be created and auto save as same directory structure as original images
	'dir'=>'images/',//���ǰ�ļ������ڸ�Ŀ¼����Ŀ¼��
);
