<!-- $Id: templates_list.htm 16480 2009-07-21 13:33:40Z liubo $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<!-- start templates list -->
<div class="list-div temp-area">
  <table width="100%" cellpadding="3" cellspacing="1" class="temp-info">
  <tr><th><?php echo $this->_var['lang']['current_template']; ?></th></tr>
  <tr><td>
    <table>
      <tr>
        <td width="250" style="padding-left: 100px;padding-top:40px" valign="top"><strong class="cl-green"><span id="templateName"><?php echo $this->_var['curr_template']['name']; ?></span></strong> v<span id="templateVersion"><?php echo $this->_var['curr_template']['version']; ?></span><br />
          <span id="templateDesc" class="cl-light-green"><?php echo $this->_var['lang']['version_desc']; ?>：<?php echo $this->_var['curr_template']['desc']; ?></span><br />
          <span id="templateAuthor" class="cl-light-green"><?php echo $this->_var['lang']['developer']; ?>：<a href="<?php echo $this->_var['curr_template']['uri']; ?>" target="_blank"><?php echo $this->_var['curr_template']['author']; ?></a></span><br />
          <span><input class="btn-download button" onclick="backupTemplate('<?php echo $this->_var['curr_template']['code']; ?>')" value="<?php echo $this->_var['lang']['backup']; ?>" type="button" id="backup" /></span>
          <div id="CurrTplStyleList">
      <?php $_from = $this->_var['template_style'][$this->_var['curr_template']['code']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'curr_style');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['curr_style']):
        $this->_foreach['foo']['iteration']++;
?>
        <?php if ($this->_foreach['foo']['total'] > 1): ?>
          <span style="cursor:pointer;" onMouseOver="javascript:onSOver('screenshot', '<?php echo $this->_var['curr_style']; ?>', this);" onMouseOut="onSOut('screenshot', this, '<?php echo $this->_var['curr_template']['screenshot']; ?>');" onclick="javascript:setupTemplateFG('<?php echo $this->_var['curr_template']['code']; ?>', '<?php echo $this->_var['curr_style']; ?>', '');" id="templateType_<?php echo $this->_var['curr_style']; ?>"><img src="../themes/<?php echo $this->_var['curr_template']['code']; ?>/images/type<?php echo $this->_var['curr_style']; ?>_<?php if ($this->_var['curr_style'] == $this->_var['curr_tpl_style']): ?>1<?php else: ?>0<?php endif; ?>.gif" border="0"></span>
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
        </td>
        <td valign="top"  style="padding-top:40px"><img class="default-tmp-pic" id="screenshot" src="<?php echo $this->_var['curr_template']['screenshot']; ?>"/></td>
      </tr>
    </table>
  </td></tr>
  </table>
  <div class="temp-list">
    <div class="list-hd">
      <span class="tit"><?php echo $this->_var['lang']['available_templates']; ?></span>
      <a href="<?php echo $this->_var['theme_online_url']; ?>" target="_blank"><span class="btn-temp-online" ></span></a>
      <form action="" class="btn-upload" enctype="multipart/form-data" id="fileForm">
        <input type="file" value="<?php echo $this->_var['lang']['upload_template']; ?>" onchange="upLoad(this)" id="btnUpload"></input>
        <span><?php echo $this->_var['lang']['upload_template']; ?></span>
      </form>
    </div>
    <div class="list-bd">
  <?php $_from = $this->_var['available_templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'template');if (count($_from)):
    foreach ($_from AS $this->_var['template']):
?>
      <div class="items">
          <div class="temp-name" style="display:none">
            <strong><a href="<?php echo $this->_var['template']['uri']; ?>" target="_blank"><?php echo $this->_var['template']['name']; ?></a></strong>
          </div>
          <?php if ($this->_var['template']['screenshot']): ?>
          <div class="temp-img-contain">
            <img class="temp-img" src="<?php echo $this->_var['template']['screenshot']; ?>" border="0" style="cursor:pointer;" id="<?php echo $this->_var['template']['code']; ?>"/>
            <div valign="top" style="overflow: hidden;margin-top:10px">
        <?php $_from = $this->_var['template_style'][$this->_var['template']['code']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'style');$this->_foreach['foo1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo1']['total'] > 0):
    foreach ($_from AS $this->_var['style']):
        $this->_foreach['foo1']['iteration']++;
?>
        <?php if ($this->_foreach['foo1']['total'] > 1): ?>
         <img src="../themes/<?php echo $this->_var['template']['code']; ?>/images/type<?php echo $this->_var['style']; ?>_0.gif" border="0" style="cursor:pointer; float:left; margin:0 2px;" onMouseOver="javascript:onSOver('<?php echo $this->_var['template']['code']; ?>', '<?php echo $this->_var['style']; ?>', this);" onMouseOut="onSOut('<?php echo $this->_var['template']['code']; ?>', this, '');" onclick="javascript:setupTemplateFG('<?php echo $this->_var['template']['code']; ?>', '<?php echo $this->_var['style']; ?>', this);">
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
            <div style="display:none"><?php echo $this->_var['template']['desc']; ?></div>
            <div class="temp-btns">
              <span class="btn-use" onclick="javascript:setupTemplate('<?php echo $this->_var['template']['code']; ?>')"></span>
              <?php if ($this->_var['template']['code'] != $this->_var['curr_template']['code']): ?>
              <span class="btn-delete" onclick="javascript:deleteTemplate(this,'<?php echo $this->_var['template']['code']; ?>')"></span>
              <?php endif; ?>
            </div>
          </div>
          <?php endif; ?>
    </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
  </div>
</div>
<!-- end templates list -->
<div class="panel-hint panel-upload-temp" style="display:none">
  <div class="panel-hd">
    <span class="hd-icon"></span>
    <span class="hd-title"><?php echo $this->_var['lang']['upload_template']; ?></span>
    <span class="hd-cross"></span>
  </div>
  <div class="panel-bd">
    <div class="bd-up">
      <h5><?php echo $this->_var['lang']['batch_upload_template']; ?></h5>
      <button class="btn-review"><?php echo $this->_var['lang']['browse_local_template']; ?></button><span><?php echo $this->_var['lang']['cannot_open_template_select']; ?> <?php echo $this->_var['lang']['click']; ?> <i class="cl-link"><?php echo $this->_var['lang']['upload_template']; ?></i></span>
    </div>
    <div class="bd-down">
      <p class="step-hint"><?php echo $this->_var['lang']['the_upload_template']; ?> <span class="cl-red">1/5</span> 个</p>
      <span class="step-bar"></span>
    </div>
  </div>
  <div class="panel-ft">
    <button class="btn-confirm"><?php echo $this->_var['lang']['sure']; ?></button>
  </div>
</div>
<div class="panel-hint panel-process" id="panelProcess">
  <span class="panel-word"><?php echo $this->_var['lang']['auto_decomp_install']; ?></span>
  <div class="panel-underline">
    <div id="loadBar" class="loadBar">
      <div>
      <span class="percent">
         <i></i>
      </span>
      </div>
      <span class="percentNum">0%</span>
    </div>
    <span class="icon-cross" id="btnClose"></span>
  </div>
</div>

<script language="JavaScript">
<!--


/**
 * 模板风格 全局变量
 */
var T = 0;
var StyleSelected = '<?php echo $this->_var['curr_tpl_style']; ?>';
var StyleCode = '';
var StyleTem = '';
/**
 * 载入页面 初始化
 */
onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

/**
 * 安装模版
 */
function setupTemplate(tpl)
{
  if (tpl != StyleTem)
  {
    StyleCode = '';
  }
  if (confirm(setupConfirm))
  {
    Ajax.call('template.php?is_ajax=1&act=install', 'tpl_name=' + tpl + '&tpl_fg='+ StyleCode, setupTemplateResponse, 'GET', 'JSON');
  }
}

/**
 * 处理安装模版的反馈信息
 */
function setupTemplateResponse(result)
{
    StyleCode = '';
  if (result.message.length > 0)
  {
    alert(result.message);
  }
  if (result.error == 0)
  {
    showTemplateInfo(result.content);
  }
}

/**
 * 备份当前模板
 */
function backupTemplate(tpl)
{
  Ajax.call('template.php?is_ajax=1&act=backup', 'tpl_name=' + tpl, backupTemplateResponse, "GET", "JSON");
}

function backupTemplateResponse(result)
{
  if (result.message.length>0)
  {
    alert(result.message);
  }

  if (result.error == 0)
  {
    location.href = result.content;
  }
}

/**
 * 显示模板信息
 */
function showTemplateInfo(res)
{
  document.getElementById("CurrTplStyleList").innerHTML = res.tpl_style;

  StyleSelected = res.stylename;

  document.getElementById("screenshot").src = res.screenshot;
  document.getElementById("templateName").innerHTML    = res.name;
  document.getElementById("templateDesc").innerHTML    = res.desc;
  document.getElementById("templateVersion").innerHTML = res.version;
  document.getElementById("templateAuthor").innerHTML  = '<a href="' + res.uri + '" target="_blank">' + res.author + '</a>';
  document.getElementById("backup").onclick = function () {backupTemplate(res.code);};
}

/**
 * 模板风格 切换
 */
function onSOver(tplid, fgid, _self)
{
  var re = /(\/|\\)([^\/\\])+\.png$/;
  var img_url = document.getElementById(tplid).src;
  StyleCode = fgid;
  StyleTem = tplid;
    
  T = 0;

  // 模板切换
  if ( tplid != '' && fgid != '')
  {
    document.getElementById(tplid).src = img_url.replace(re, '/screenshot_' + fgid + '.png');
  }
  else 
  {
    document.getElementById(tplid).src = img_url.replace(re, '/screenshot.png');
  }

  return true;
}
//
function onSOut(tplid, _self, def)
{
  if (T == 1)
  {
    return true;
  }

  var re = /(\/|\\)([^\/\\])+\.png$/;
  var img_url = document.getElementById(tplid).src;

  // 模板切换为默认风格
  if ( def != '' )
 {
    document.getElementById(tplid).src = def; 
  }
  else
  {
 //  document.getElementById(tplid).src = img_url.replace(re, '/screenshot.png');
  }

  return true;
}
//
function onTempSelectClear(tplid, _self)
{
  var re = /(\/|\\)([^\/\\])+\.png$/;
  var img_url = document.getElementById(tplid).src;

  // 模板切换为默认风格
  document.getElementById(tplid).src = img_url.replace(re, '/screenshot.png');
    
  T = 0;

  return true;
}

/**
 * 模板风格 AJAX安装
 */
function setupTemplateFG(tplNO, TplFG, _self)
{
  T = 1;

  if ( confirm(setupConfirm) )
  {
    Ajax.call('template.php?is_ajax=1&act=install', 'tpl_name=' + tplNO + '&tpl_fg=' + TplFG, setupTemplateResponse, 'GET', 'JSON');
  }

  if (_self)
  {
    onTempSelectClear(tplNO, _self);
  }

  return true;
}
//-->

/**
 * loading js
 */
function LoadingBar(id) {
  this.loadbar = document.getElementById(id);
  this.percentEle = this.loadbar.children[0].firstElementChild;
  this.percentNumEle = this.loadbar.lastElementChild;
  this.max = 100;
  this.currentProgress = 0;
}
LoadingBar.prototype = {
  constructor: LoadingBar,
  setMax: function (maxVal) {
    this.max = maxVal;
  },
  setProgress: function (val) {
    if (val >= this.max)
    {
      val = this.max;
    }
    this.currentProgress = parseInt((val / this.max) * 100) + "%";
    this.percentEle.style.width = this.currentProgress;
    this.percentNumEle.innerText = this.currentProgress;
    this.percentNumEle.style.left = parseInt((val / this.max) * 100)- 5 + '%';
  }
};
function loadStart(){
  var loadbar = new LoadingBar("loadBar");
  var panel = document.getElementById('panelProcess');
  var max = 1000;
  loadbar.setMax(max);
  var i = 0;
  uploadFile();
  var time = setInterval(function () {
    loadbar.setProgress(i);
    if (i == max){
      clearInterval(time);
      alert('<?php echo $this->_var['lang']['upload_success']; ?>');
      panel.style.display = 'none';
      window.location.reload();
    }
    i += 10;
  }, 10);
}
/*panel btnClose fun*/
(function(){
  var close = document.getElementById('btnClose');
  close.onclick = function(e){
    var item = e.target;
    var par  = item.offsetParent;
    par.style.display = 'none';
  }
})();
/*file upload fun*/
function upLoad(item){
  var btn = document.getElementById('btnUpload');
  var panel = document.getElementById('panelProcess');
  var strs = new Array();
  var pic  = btn.value;
  strs = pic.split('.');
  var suffix = strs[strs.length-1];
  if(suffix !='tgz'){
    alert('<?php echo $this->_var['lang']['upload_format_error']; ?>');
    btn.outerHTML = btn.outerHTML;  //清空文件
  }else{
    panel.style.display = 'block';
    loadStart();
  }
}
</script>
<script type="text/javascript">
function uploadFile() {
    var fileObj = document.getElementById('btnUpload').files[0]; // 获取文件对象
    var FileController = "template.php?is_ajax=1&act=upload";    // 接收上传文件的后台地址
    // FormData 对象
    var form = new FormData();
    form.append("file", fileObj);
    // XMLHttpRequest 对象
    var xhr = new XMLHttpRequest();
    xhr.open("post", FileController, true);
    xhr.onload = function () {
        // alert("上传完成!");
    };
    xhr.send(form);
}
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>