<?php
require_once("alipay_config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML XMLNS:CC><HEAD><TITLE>支付宝 - 网上支付 安全快速！</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META content=网上购物/网上支付/安全支付/安全购物/购物，安全/支付,安全/支付宝/安全,支付/安全，购物/支付, 
name=description 在线 付款,收款 网上,贸易 网上贸易.>
<META content=网上购物/网上支付/安全支付/安全购物/购物，安全/支付,安全/支付宝/安全,支付/安全，购物/支付, name=keywords 
在线 付款,收款 网上,贸易 网上贸易.><LINK href="images/layout.css" 
type=text/css rel=stylesheet>
<SCRIPT language=JavaScript>
function CheckForm()
{
	if (document.alipayment.aliorder.value.length == 0) {
		alert("请输入商品名称.");
		document.alipayment.aliorder.focus();
		return false;
	}
		if (document.alipayment.alimoney.value.length == 0) {
		alert("请输入付款金额.");
		document.alipayment.alimoney.focus();
		return false;
	}
	
	if (document.alipayment.aliname.value.charAt(0)=="." ||        
         document.alipayment.aliname.value.charAt(0)=="@"||       
         document.alipayment.aliname.value.indexOf('@', 0) == -1 || 
         document.alipayment.aliname.value.indexOf('.', 0) == -1 || 
         document.alipayment.aliname.value.lastIndexOf("@")==document.alipayment.aliname.value.length-1 || 
         document.alipayment.aliname.value.lastIndexOf(".")==document.alipayment.aliname.value.length-1)
     {
      alert("Email的格式不正确！");
      document.alipayment.aliname.focus();
      return false;
      }

	if (document.alipayment.aliname1.value.charAt(0)=="." ||        
         document.alipayment.aliname1.value.charAt(0)=="@"||       
         document.alipayment.aliname1.value.indexOf('@', 0) == -1 || 
         document.alipayment.aliname1.value.indexOf('.', 0) == -1 || 
         document.alipayment.aliname1.value.lastIndexOf("@")==document.alipayment.aliname1.value.length-1 || 
         document.alipayment.aliname1.value.lastIndexOf(".")==document.alipayment.aliname1.value.length-1)
     {
      alert("二次Email的格式不正确！");
      document.alipayment.aliname1.focus();
      return false;
      }
	}
}

</SCRIPT>

<META content="MSHTML 6.00.2900.3132" name=GENERATOR>
<STYLE type=text/css>
.STYLE1 {
	FONT-SIZE: 12px; FONT-FAMILY: "宋体"
}
.style2 {font-size: 12px}
</STYLE>
</HEAD>
<BODY text=#000000 bgColor=#ffffff leftMargin=0 topMargin=4>
<CENTER><BR>
<CENTER>
<FORM name=alipayment onSubmit="return CheckForm();" action=alipayto.php 
method=post>
<TABLE cellSpacing=0 cellPadding=0 width=760 border=0>
  <TBODY>
  <TR>
    <TD class=title>支付宝付款快速通道</TD></TR></TBODY></TABLE><BR>
<TABLE cellSpacing=0 cellPadding=0 width=740 border=0>
  <TBODY>
  <TR>
    <TD vAlign=top width=524>
      <TABLE cellSpacing=0 cellPadding=0 width="98%" border=0>
        <TBODY>
        <TR>
          <TD class=h2-bottom colSpan=3>填写订单信息</TD></TR>
        <TR>
          <TD class=form-left>收款方： </TD>
          <TD class=form-star>* </TD>
          <TD class=form-right><?php echo $mainname  ?>(<?php echo $show_url ?>)&nbsp;</TD></TR>
        <TR>
          <TD class=form-left>商品名称： </TD>
          <TD class=form-star>* </TD>
          <TD class=form-right><INPUT size=30 name=aliorder  value="<?=$_POST[ordercode]?>" readonly></TD></TR>
        <TR>
          <TD class=form-left>付款金额： </TD>
          <TD class=form-star>*</TD>
          <TD class=form-right><INPUT 
            onkeypress="return regInput(this,/^\d*\.?\d{0,2}$/,String.fromCharCode(event.keyCode))" 
            onpaste="return regInput(this,/^\d*\.?\d{0,2}$/,window.clipboardData.getData('Text'))" 
            ondrop="return regInput(this,/^\d*\.?\d{0,2}$/,&#9;event.dataTransfer.getData('Text'))" 
            maxLength=10 size=30 name=alimoney  value="<?=$_POST[totalpaymoney]?>"  readonly> 元（格式：1212.21）</TD></TR>
        <TR>
          <TD class=form-left>发货方式：</TD>
          <TD class=form-star>*</TD>
          <TD class=form-right><SELECT name=alimailtype> <OPTION value=3 
              selected>其他快递</OPTION></SELECT><INPUT type=hidden value=x 
        name=x></TD></TR>
        <TR>
          <TD class=form-left>付款说明：</TD>
          <TD class=form-star></TD>
          <TD class=form-right><TEXTAREA name=alibody rows=4 cols=40 readonly><?=$_POST[pdtname]?></TEXTAREA><BR>（如联系方法，商品要求、数量等。50汉字内）</TD></TR>
        <TR>
          <TD class=form-left></TD>
          <TD class=form-star></TD>
          <TD class=form-right><INPUT type=image 
            src="images/button_sure.gif" value=确认订单 
            name=nextstep></TD></TR></TBODY></TABLE>
      <SCRIPT>
	function regInput(obj, reg, inputStr)
	{
		var docSel	= document.selection.createRange()
		if (docSel.parentElement().tagName != "INPUT")	return false
		oSel = docSel.duplicate()
		oSel.text = ""
		var srcRange	= obj.createTextRange()
		oSel.setEndPoint("StartToStart", srcRange)
		var str = oSel.text + inputStr + srcRange.text.substr(oSel.text.length)
		return reg.test(str)
	}
</SCRIPT>

    <TD width=11>&nbsp;</TD>
    <TD vAlign=top width=205>
      <P class=STYLE1>小贴士：</P>
      <P class=STYLE1>本通道为<a href="<?php echo $show_url ?>" target="_blank"><strong><?php echo $mainname  ?></strong></a>客户专用，采用支付宝付款。请在支付前与本网站达成一致。</P>
      <P class="style2">请务必与<a href="<?php echo $show_url  ?>" target="_blank"><strong><?php echo $mainname  ?></strong></a>确认好订单和货款后，再付款。可以在快速付款通道里的“付款概要”和“订单金额”中填入相应的订单信息。</P>
      <P>&nbsp;</P></TD></TR></TBODY></TABLE><BR></FORM>
<TABLE cellSpacing=4 cellPadding=0 width=760 border=0>
  <TBODY>
  <TR>
    <TD class=box-note noWrap width=30 rowSpan=2><FONT 
      class=note-help>支持<BR><FONT class=note-help>银行 </FONT></FONT></TD>
    <TD width=5 rowSpan=2></TD>
    <TD><IMG height=20 alt=中国工商银行 
      src="images/icon_zggsyh_s.gif" width=107 border=1> </TD>
    <TD><IMG height=20 alt=中国建设银行 src="images/icon_ccb_s.gif" 
      width=107 border=0> </TD>
    <TD><IMG alt=上海浦东发展银行 src="images/icon_spdb_s.gif" 
      border=0> </TD>
    <TD><IMG alt=招商银行 src="images/icon_zsyh_s.gif" border=0> 
    </TD>
    <TD><IMG height=20 alt=中国民生银行 src="images/icon_cmbc_s.gif" 
      border=0></TD></TR>
  <TR>
    <TD>
      <DIV align=left><IMG height=20 alt=中国农业银行 
      src="images/icon_abc_s.gif" width=107 border=0> </DIV></TD>
    <TD><IMG height=20 alt=广东发展银行 src="images/icon_gdb_s.gif" 
      width=107 border=0> </TD>
    <TD><IMG height=20 alt=兴业银行 src="images/index_38.gif" 
      border=0> </TD>
    <TD>
      <DIV align=left><IMG height=20 alt=深圳发展银行 
      src="images/icon_sdb_s.gif" width=107 border=0> </DIV></TD>
    <TD><IMG height=20 alt=VISA src="images/icon_visa_s.gif" 
      width=31 border=0> </TD></TR></TBODY></TABLE>
<HR width=760 SIZE=1>

<TABLE cellSpacing=1 width=760 border=0>
  <TBODY>
  <TR>
    <TD><FONT class=note-help>如果您点击“购买”按钮，即表示您已经接受“支付宝服务协议”，同意向卖家购买 此物品。 
      <BR>您有责任查阅完整的物品登录资料，包括卖家的说明和接受的付款方式。卖家必须承担物品信息正确登录的 责任！ 
  </FONT></TD></TR></TBODY></TABLE></CENTER>
<TABLE cellSpacing=0 cellPadding=0 width=760 align=center border=0>
  <TBODY>
  <TR align=middle>
    <TD class="txt12 lh15"><A href="http://china.alibaba.com/" 
      target=_blank>阿里巴巴旗下公司</A> | 支付 宝版权所有 2004-2006 </TD></TR>
  <TR align=middle>
    <TD class="txt12 lh15"><IMG alt="支付宝通过“国际权威安全认证” " 
      src="images/logo_vbvv.gif" border=0><BR>支付宝通过“国际权威安全 
  认证”</TD></TR></TBODY></TABLE></CENTER></BODY></HTML>
