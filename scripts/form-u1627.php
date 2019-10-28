<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Заключить договор | Ваш курьер',
	'heading' => 'Отправка новой формы',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => '',
		'to' => ''
	),
	'fields' => array(
		'custom_U1656' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'ФИО*',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'ФИО*\' не может быть пустым.'
			)
		),
		'custom_U1638' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Название компании*',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Название компании*\' не может быть пустым.'
			)
		),
		'custom_U1634' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Сфера деятельности',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U1664' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Ваш город*',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Ваш город*\' не может быть пустым.'
			)
		),
		'custom_U1660' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Ваш фактический адрес*',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Ваш фактический адрес*\' не может быть пустым.'
			)
		),
		'custom_U1647' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Контактный телефон*',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Контактный телефон*\' не может быть пустым.'
			)
		),
		'custom_U1642' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'E-mail*',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'E-mail*\' не может быть пустым.'
			)
		),
		'custom_U1668' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Ваш сайт',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U1806' => array(
			'order' => 12,
			'type' => 'string',
			'label' => 'ОЖИДАЕМЫЙ ОБЪЕМ ОТПРАВЛЕНИЙ',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U1816' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Должность*',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Должность*\' не может быть пустым.'
			)
		),
		'custom_U1715' => array(
			'order' => 10,
			'type' => 'checkboxgroup',
			'label' => 'ХАРАКТЕР ОТПРАВЛЕНИЙ',
			'required' => true,
			'optionItems' => array(
				'документы',
				'грузы'
			),
			'errors' => array(
				'required' => 'Поле \'ХАРАКТЕР ОТПРАВЛЕНИЙ\' не может быть пустым.',
				'format' => 'Недопустимое значение поля \"ХАРАКТЕР ОТПРАВЛЕНИЙ\".'
			)
		),
		'custom_U1757' => array(
			'order' => 11,
			'type' => 'checkboxgroup',
			'label' => 'ГЕОГРАФИЯ ОТПРАВОК',
			'required' => true,
			'optionItems' => array(
				'по Москве и МО',
				'по России',
				'СНГ и дальнее зарубежье'
			),
			'errors' => array(
				'required' => 'Поле \'ГЕОГРАФИЯ ОТПРАВОК\' не может быть пустым.',
				'format' => 'Недопустимое значение поля \"ГЕОГРАФИЯ ОТПРАВОК\".'
			)
		)
	)
);

process_form($form);
?>
