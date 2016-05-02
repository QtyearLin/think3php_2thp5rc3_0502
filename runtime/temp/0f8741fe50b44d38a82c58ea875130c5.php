<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"E:\think323php_2thp5rc3_160501\thin3c_2th5rc3_0501/application/index\view\form\index.html";i:1462206881;}*/ ?>
<body>
<?php echo $result['id']; ?>--<?php echo $result['data']; ?>
<br />
hel222
<br />
    <?php if(is_array($resul2t)): $i = 0; $__LIST__ = $resul2t;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> 
    <?php echo $vo['id']; ?>--<?php echo $vo['data']; ?><br/>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    
</body>