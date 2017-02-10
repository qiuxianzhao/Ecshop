
<?php if ($this->_var['user_info']): ?>

你好，<a href="user.php"><?php echo $this->_var['user_info']['username']; ?></a> |
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a> |
 
  <?php else: ?> 
  
欢迎光临本店，<a href="user.php">登录</a> | <a  href="user.php?act=register">注册</a> |
 
 
 <?php endif; ?>