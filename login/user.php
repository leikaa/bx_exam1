<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пользователь");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"SET_TITLE" => "N",
		"USER_PROPERTY" => array(
		),
		"SEND_INFO" => "Y",
		"CHECK_RIGHTS" => "Y",
		"USER_PROPERTY_NAME" => ""
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>