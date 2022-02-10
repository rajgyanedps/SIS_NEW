

<link href="css/msg.css" rel="stylesheet" type="text/css">
 <table  border="0" width="100%" cellpadding="0" cellspacing="0" style="background:url(images/topbg.jpg) left top repeat-x;">
    <tr>
      <td width="30%" align="center" ><div style="font-size:16px; color:#FFFFFF; line-height:20px; padding-top:6px; font-weight:bold">Welcome User</div>
      <div style="font-size:12px; color:#FFFFFF; line-height:5px; padding-top:6px; font-weight:bold"><?php echo date("l, F dS Y"); ?></div><br /><div style="font-size:12px; color:#FFFFFF; line-height:1px; padding-top:6px; font-weight:bold;"><span id="digitalclock" class="styling"></span></div>
  
 

<script>
<!--

//LCD Clock script- by javascriptkit.com
//Visit JavaScript Kit (http://javascriptkit.com) for script
//Credit must stay intact for use

var alternate=0
var standardbrowser=!document.all&&!document.getElementById

if (standardbrowser)
document.write('<form name="tick"><input type="text" name="tock" size="11"></form>')

function show(){
if (!standardbrowser)
var clockobj=document.getElementById? document.getElementById("digitalclock") : document.all.digitalclock
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="AM"

if (hours==12) dn="PM" 
if (hours>12){
dn="PM"
hours=hours-12
}
if (hours==0) hours=12
if (hours.toString().length==1)
hours="0"+hours
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds

if (standardbrowser){
if (alternate==0)
document.tick.tock.value=hours+":"+minutes+":"+seconds+" "+dn
else
document.tick.tock.value=hours+":"+minutes+":"+seconds+" "+dn
}
else{
clockobj.innerHTML=hours+":"+minutes+":"+seconds+" "+dn

}
alternate=(alternate==0)? 1 : 0
setTimeout("show()",1000)
}
window.onload=show

//-->
</script></td>
      
      <td width="70%" align="right" background="topbg.jpg" valign="top" style="padding-right:40px"><div style=" float:right"><img src="images/sahe-logo.jpg" alt=""  border="0" /></div>
      <div style="font-size:26px; color:#FFFFFF; line-height:28px; float:right; padding-top:6px; font-weight:bold; font-family:'Arial Black'">
        Customer Relationship<br />
      Management System<br />
      </div></td>
    </tr>
   
  </table>
 