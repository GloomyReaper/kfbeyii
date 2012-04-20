<?php

/**
 * DeveloperTestForm class.
 * DeveloperTestForm is the data structure for keeping
 * admintest form data. It is used by the 'admintest' action of 'SiteController'.
 */
class DeveloperTestForm extends CFormModel
{
	/** значение поля ввода */
	public $testField01;
	/** поле типа textArea */
	public $textArea01="<code>0</code>";
	/** тип запроса */
	public $requestType;		
	/** тип тестового действия */
	public $actionType;
	/** текст flash-сообщения - не выводится в форме */
	// public $flashText = 'Class default flash message';	

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('testField01, textArea01, requestType, actionType', 'safe'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'testField01'=>'Тестовое поле 01',
			'textArea01'=>'textArea 01',
			'actionType'=>'Действие',
		);
	}
	
	// список тестовых действий
	public function getTestActionTypes() {
		return array(
			'showFlashMessage' => "Отобразить flash сообщение",
			/* 'authReset' => "Переициализировать систему прав",
			'checkAccess' => "Проверить наличие права доступа у пользователя",
			'viewHttpHeaders' => "Посмотреть http-заголовки",
			'emulateCashdeskRequests' => "Эмулировать запрос с кассы (работает только на localhost)",
			'makeTestLogRecord' => "Сделать тестовую запись в лог",
			'getAuthAssignments' => "Получить список назначенных ролей",
			'parseChibDictionary' => "Распарсить справочник ЧИБа",
			'importChibDictionary' => "Импортировать услуги ЧИБа",
			'convertTextFromAsXml' => "Корвертировать текст из asXML",
			'getSign' => "Получить ЭЦП",
			'testXmlFormatting' => "Протестировать функцию форматирования XML",
			'checkXmlString' => "Проверить валидность XML строки",
			'checkConfigsClass' => "Проверить класс Configs",
			'validatePrivateKey' => "Проверить Private Key",
			'checkConfigViaPgquery' => "Проверить создание объекта Configs через pg_query",
			'getStringHash' => "Получить hash строки",
			'compareStrings' => "Сравнить строки",
			'addIdToConfig' => "Добавить ID в конфиг",
			'checkDbConnection' => "Проверить параметры соединения с БД",
			'executeShellScript' => "Выполнить shell script",
			'decodeLic' => "Декодировать лицензию",
			'sendMail' => "Отправить тестовое письмо",
			'checkUserAgreementHtml' => "Проверить формат пользовательского соглашения (HTML)",		
			'checkUserAgreementGenerator' => "Проверить функцию генерации пользовательского соглашения",
			'getPaymentParams' => "Получить все параметры платежа",
			'checkGetTagContent' => "Проверить функцию получения содержимого тэга",
			'checkGetServicesFromConfig' => "Протестировать получение сервисов из конфига",
			'importSslCert' => "Импортировать ssl-сертификат", */  		             				
		);
	}

	// список тестовых запросов
	public function getRequestTypes() {
		return array(
			'getConfigHash' => "getConfigHash",
			'synConfig' => "synConfig",
			'testRequest' => "testRequest",      				
		);
	}	
}