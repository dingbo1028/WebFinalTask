<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php if(is_array($aaa)): $i = 0; $__LIST__ = $aaa;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bbb): $mod = ($i % 2 );++$i; echo ($key); ?>:
        <br/>
        <?php if(is_array($bbb)): $i = 0; $__LIST__ = $bbb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ccc): $mod = ($i % 2 );++$i;?><br/>
            <?php echo ($key); ?>:
            <?php if(is_array($ccc)): $i = 0; $__LIST__ = $ccc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ddd): $mod = ($i % 2 );++$i; echo ($key); ?>:
                <?php echo ($ddd); ?>
                <br/><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
        <br/><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>