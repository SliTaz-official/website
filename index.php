<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch ($lang) {
	case "bs":
		echo "<meta http-equiv='refresh' content='0; URL=bs/'>";
		break;
	case "cn":
		echo "<meta http-equiv='refresh' content='0; URL=cn/'>";
		break;
	case "da":
		echo "<meta http-equiv='refresh' content='0; URL=da/'>";
		break;
	case "de":
		echo "<meta http-equiv='refresh' content='0; URL=de/'>";
		break;
	case "en":
		echo "<meta http-equiv='refresh' content='0; URL=en/'>";
		break;
	case "es":
		echo "<meta http-equiv='refresh' content='0; URL=es/'>";
		break;
	case "fr":
		echo "<meta http-equiv='refresh' content='0; URL=fr/'>";
		break;
	case "id":
		echo "<meta http-equiv='refresh' content='0; URL=id/'>";
		break;
	case "it":
		echo "<meta http-equiv='refresh' content='0; URL=it/'>";
		break;
	case "ja":
		echo "<meta http-equiv='refresh' content='0; URL=ja/'>";
		break;
	case "pt":
		echo "<meta http-equiv='refresh' content='0; URL=pt/'>";
		break;
	case "ru":
		echo "<meta http-equiv='refresh' content='0; URL=ru/'>";
		break;
	default:
		echo "<meta http-equiv='refresh' content='0; URL=en/'>";
		break;
}
