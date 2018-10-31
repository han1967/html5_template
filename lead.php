<?php
$aff_id = empty($_GET['aff_id']) ? '' : $_GET['aff_id'];    
$aff_key = empty($_GET['aff_key']) ? '' : $_GET['aff_key'];
$affTranID = empty($_GET['affTranID']) ? '' : $_GET['affTranID'];
$game = empty($_GET['game']) ? '' : $_GET['game'];
$coupon = empty($_GET['coupon']) ? '' : $_GET['coupon'];
$ref = empty($_GET['ref']) ? '' : $_GET['ref'];
$FT = empty($_GET['FT']) ? '' : $_GET['FT'];
$lang = empty($_GET['lang']) ? 'en' : $_GET['lang'];
$color = empty($_GET['color']) ? 'en' : $_GET['color'];
$mainimage = empty($_GET['i']) ? 'none' : $_GET['i'];
$t = empty($_GET['t']) ? '' : $_GET['t'];
$r = empty($_GET['r']) ? '' : $_GET['r'];
$a = empty($_GET['a']) ? '' : $_GET['a'];
$m = empty($_GET['m']) ? '' : $_GET['m'];

$paymentPage = 'payshortlpbp';
$country = isset($_SERVER['HTTP_CF_IPCOUNTRY']) ? $_SERVER['HTTP_CF_IPCOUNTRY']:'';
$countryLower = strtolower($country);
$m = empty($_GET['m']) ? '000' : $_GET['m'];
if($color == 2){
    $paymentPage = 'paymentShort2c';
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bcure Iframe</title>
    <link href="iframe.css" rel="stylesheet" type="text/css">
	<script type='text/javascript'>
  window._tfa = window._tfa || [];
  window._tfa.push({notify: 'event', name: 'page_view', id: 1150032});
  !function (t, f, a, x) {
         if (!document.getElementById(x)) {
            t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
         }
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  '//cdn.taboola.com/libtrc/unip/1150032/tfa.js',
  'tb_tfa_script');
</script>
<noscript>
  <img src='//trc.taboola.com/1150032/log/3/unip?en=page_view'
      width='0' height='0' style='display:none'/>
</noscript>
<script data-obct type="text/javascript">
  /** DO NOT MODIFY THIS CODE**/
  !function(_window, _document) {
    var OB_ADV_ID='009ba77e9147ff5ebef1e50937b61dd077';
    if (_window.obApi) {var toArray = function(object) {return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];};_window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));return;}
    var api = _window.obApi = function() {api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);};api.version = '1.1';api.loaded = true;api.marketerId = OB_ADV_ID;api.queue = [];var tag = _document.createElement('script');tag.async = true;tag.src = '//amplify.outbrain.com/cp/obtp.js';tag.type = 'text/javascript';var script = _document.getElementsByTagName('script')[0];script.parentNode.insertBefore(tag, script);}(window, document);
obApi('track', 'PAGE_VIEW');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120830425-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120830425-1');
</script>


</head>
<body>
<script>
					 alert('Shahar');

					 gtag('event', 'Lead', {
  'event_category': 'Registration',
  'event_label': '',
  'value': 1
});
					
               
</script>
</body>
</html>