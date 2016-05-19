<?php
// no direct access
defined( '_JEXEC' ) or die;
 
$doc = JFactory::getDocument();
JHtml::_('jquery.framework');
$doc->addScript(JURI::base()."modules/mod_changevision/vision/js/js.cookie.js");
$doc->addScript(JURI::base()."modules/mod_changevision/vision/js/js.settings.js");
$doc->addStyleSheet(JURI::base()."modules/mod_changevision/vision/css/style.css");
echo '
<div id="changevision-clear"><a href="#" id="changevision-ver">Версия для слабовидящих</a></div>
<div id="changevision-on">
<div id="changevision-style">
<span class="ch_remove"><a href="#" class="ch_close" title="Обычная версия">Обычная версия</a></span>
<span class="ch_images">Изображения: <a href="#" class="ch_imagesOff" title="Выключить">Выкл.</a><a href="#" class="ch_imagesOn" title="Включить">Вкл.</a></span>
<span class="ch_font">Шрифт: <a href="#" class="ch_a-14" title="14px">A</a><a href="#" class="ch_a-16" title="16px">A</a><a href="#" class="ch_a-18" title="18px">A</a><a href="#" class="ch_a-24" title="24px">A</a></span>
<span class="ch_line_height">Интервал межсимвольный: <a href="#" class="ch_letter_spacingOn" title="Межсимвольный интервал включить">Вкл.</a><a href="#" class="ch_letter_spacingOff" title="Межсимвольный интервал выключть"> Выкл.</a> Межстрочный: <a href="#" class="ch_line_heightOn" title="Межстрочный интервал включть"> Вкл.</a><a href="#" class="ch_line_heightOff" title="Межстрочный интервал выключть"> Выкл.</a></span>
<span class="ch_color_scheme">Цветовая схема:<a href="#" class="ch_white" title="Черным по белому">A</a><a href="#" class="ch_black"title="Белым по черному">A</a><a href="#" class="ch_blue" title="Темно-синим по голубому">A</a><a href="#" class="ch_green" title="Зеленым по темно-коричневому">A</a></span>
</div>
</div>
';

?>