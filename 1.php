<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Топ моих покупок");
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "tree1", Array(
	"COMPONENT_TEMPLATE" => "tree",
		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"IBLOCK_ID" => "2",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"VIEW_MODE" => "LINE",
		"SHOW_PARENT_NAME" => "Y"
	),
	false
);
		?>
