this.iframe_html = '<div id="lhc_container">' +
                              '<div id="lhc_header"><?php include(erLhcoreClassDesign::designtpl('lhchat/widget_brand/live_help.tpl.php')); ?><a href="#" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Close')?>" id="lhc_close"><img src="<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/cancel.png');?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Close')?>" alt="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Close')?>" /></a><?php if (erLhcoreClassModelChatConfig::fetch('disable_popup_restore')->current_value == 0) : ?>&nbsp;<a href="#" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Open in a new window')?>" id="lhc_remote_window"><img src="<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/application_double.png');?>" alt="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Open in a new window')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Open in a new window')?>" /></a><?php endif; ?><a href="#" id="lhc_min" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Minimize/Restore')?>"></a></div>' +
                              this.iframe_html + '</div>';
raw_css = ".lhc-no-transition{ -webkit-transition: none !important; -moz-transition: none !important;-o-transition: none !important;-ms-transition: none !important;transition: none !important;}\n.lhc-min{height:35px !important;transition: all 0.4s!important;}\n#lhc_container * {direction:<?php (erConfigClassLhConfig::getInstance()->getOverrideValue('site', 'dir_language') == 'ltr' || erConfigClassLhConfig::getInstance()->getOverrideValue('site', 'dir_language') == '') ? print 'ltr;text-align:left;' : print 'rtl;text-align:right;'; ?>;font-family:arial;font-size:12px;line-height:100%;box-sizing: content-box;-moz-box-sizing:content-box;padding:0;margin:0;}\n#lhc_container img {border:0;}\n#lhc_title{float:left;}\n#lhc_header{position:relative;z-index:9990;height:15px;overflow:hidden;text-align:right;clear:both;background-color:#<?php $theme !== false ? print $theme->header_background : print '525252' ?>;padding:5px;}\n#lhc_remote_window,#lhc_min,#lhc_close{padding:2px;float:right;}.lhc-min #lhc_min{background-image:url(<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/restore.png');?>)}#lhc_min{width:14px;height:14px;background:url(<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/min.png');?>) no-repeat center center;}\n#lhc_close:hover,#lhc_min:hover,#lhc_remote_window:hover{opacity:0.4;}\n#lhc_container {background-color:#FFF;-moz-user-select:none; -khtml-user-drag:element;cursor: move;cursor: -moz-grab;cursor: -webkit-grab;overflow:hidden;transition-property:height;transition-duration: 0.4s;-webkit-transition: height 0.4s ease-in-out;transition: height 0.4s;\nz-index:9990;\n position: fixed;<?php echo $currentPosition['position_body']?>;-webkit-box-shadow: <?php echo $currentPosition['shadow']?> rgba(50, 50, 50, 0.17);-moz-box-shadow: <?php echo $currentPosition['shadow']?> rgba(50, 50, 50, 0.17);box-shadow: <?php echo $currentPosition['shadow']?> rgba(50, 50, 50, 0.17);-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; }\n#lhc_container iframe{display:block;transition-property: height;transition-duration: 0.4s;-webkit-transition: height 0.4s ease-in-out;transition: height 0.4s;}\n#lhc_container #lhc_iframe_container{border: 1px solid #<?php $theme !== false ? print $theme->widget_border_color : print 'cccccc' ?>;border-top: 0;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;overflow: hidden;}\n#lhc_container iframe.lhc-loading{\nbackground: #FFF url(<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/general/loading.gif');?>) no-repeat center center; }\n@media only screen and (max-width : 640px) {#lhc_container{margin-bottom:5px;position:relative;right:0 !important;bottom:0 !important;top:0 !important}#lhc_container iframe{width:100% !important}}";