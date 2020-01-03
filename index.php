<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Error 400</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#000000" text="#FFFFFF" link="#99CC33" vlink="#99CCCC" alink="#CCCCCC" style="margin: 0px 0px;">
<div align="center">
  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#000"><table width="640" border="0" align="center" cellpadding="10">
        <tbody>
          <tr>
            <td width="155"><img src="/d3_logo.png" width="84" height="75" alt=""/></td>
            <td width="439"><strong><font color="#999999" size="4" face="Verdana">ERROR CODE - 400 <br>
              (Bad Request)</font></strong></td>
          </tr>
          <tr>
            <td colspan="2" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td><font color="#797979" size="2" face="Verdana"><strong>Your IP:</strong></font></td>
            <td><font face="Verdana" size="2" color="BFBFBF">
              <?php echo $_SERVER['REMOTE_ADDR']; ?>
            </font></td>
          </tr>
          <tr>
            <td><font color="#797979" size="2" face="Verdana"><strong>Your Requested URL:</strong></font></td>
            <td><font face="Verdana" size="2" color="BFBFBF">
              <?php echo $_SERVER['REQUEST_URI']; ?>
            </font></td>
          </tr>
          <tr>
            <td><font color="#797979" size="2" face="Verdana"><strong>Your Referrer:</strong></font></td>
            <td><font face="Verdana" size="2" color="BFBFBF">
              <?php echo $_SERVER['HTTP_REFERER']; ?>
            </font></td>
          </tr>
          <tr>
            <td><font color="#797979" size="2" face="Verdana"><strong>Redirect Status:</strong> </font></font></td>
            <td><font face="Verdana" size="2" color="BFBFBF">
              <?php echo $_SERVER['REDIRECT_STATUS']; ?>
            </font></td>
          </tr>
          <tr>
            <td colspan="2" align="right"><font color="#474747" size="1" face="Verdana">Powered by st4zz</font></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
