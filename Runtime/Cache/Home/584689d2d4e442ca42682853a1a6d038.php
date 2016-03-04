<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>category tree</title>
</head>
<body>
<?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><li><span><a href="<?php echo U('/category='.$cate['name']);?>"><?php echo ($cate["title"]); ?></a>
        <img src="<?php echo (get_cover($cate["icon"],'path')); ?>" alt="<?php echo ($cate["title"]); ?>">
			<?php if($cate['child'] != false): ?><ul>
                    <?php if(is_array($cate['child'])): $i = 0; $__LIST__ = $cate['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_sub): $mod = ($i % 2 );++$i;?><li><span><a href="<?php echo U('/category='.$cate_sub['name']);?>"><?php echo ($cate_sub["title"]); ?></a>
					<?php if($cate_sub['child']): ?><ul>
                            <?php if(is_array($cate_sub['child'])): $i = 0; $__LIST__ = $cate_sub['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_sub_two): $mod = ($i % 2 );++$i;?><li><span><a
                                        href="<?php echo U('/category='.$cate_sub_two['name']);?>"><?php echo ($cate_sub_two["title"]); ?></a></span>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul><?php endif; ?>
				</span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul><?php endif; ?>
		</span></li><?php endforeach; endif; else: echo "" ;endif; ?>

</body>
</html>