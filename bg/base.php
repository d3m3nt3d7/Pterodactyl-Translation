<?php
/*
 * Pterodactyl Panel 0.7.19  Bulgarian translation
 * Author: Kaloian Penchev (admin@kaloianpenchev.eu)
 * License: Free to use
 * Donate:
 *      PayPal: https://paypal.me/kalchobratme
 */

return [
    'validation_error' => 'Възникна грешка с едно или повече полета в заявката.',
    'errors' => [
        'return' => 'Върнете се към предишната страница',
        'home' => 'Вкъщи',
        '403' => [
            'header' => 'Забранено',
            'desc' => 'Нямате разрешение за достъп до този ресурс на този сървър.',
        ],
        '404' => [
            'header' => 'Файла не беше намерен',
            'desc' => 'Не успяхме да намерим искания ресурс на сървъра.',
        ],
        'installing' => [
            'header' => 'Сървърът се инсталира',
            'desc' => 'Заявеният сървър все още завършва процеса на инсталиране. Моля, проверете отново след няколко минути, трябва да получите имейл веднага щом този процес приключи.',
        ],
        'suspended' => [
            'header' => 'Сървърът е преустановен',
            'desc' => 'Този сървър е преустановен и няма достъп до него.',
        ],
        'maintenance' => [
            'header' => 'Node-а е в режим на поддръжка',
            'title' => 'Временно недостъпен',
            'desc' => 'Node-а е в режим на поддръжка, следователно сървърът Ви временно не може да бъде достъпен.',
        ],
    ],
    'index' => [
        'header' => 'Вашите сървъри',
        'header_sub' => 'Сървъри, до които имате достъп.',
        'list' => 'Списък със сървъри',
    ],
    'api' => [
        'index' => [
            'list' => 'Вашите ключове',
            'header' => 'API ключове',
            'header_sub' => 'Управлявайте ключовете за достъп, които ви позволяват да извършвате действия срещу панела.',
            'create_new' => 'Създай нов API ключ',
            'keypair_created' => 'API ключът е генериран успешно и е посочен по-долу.',
        ],
        'new' => [
            'header' => 'Нов API ключ',
            'header_sub' => 'Създайте нов ключ за достъп до акаунт.',
            'form_title' => 'Подробности',
            'descriptive_memo' => [
                'title' => 'Описание',
                'description' => 'Въведете кратко описание на този ключ, което ще бъде полезно за справка.',
            ],
            'allowed_ips' => [
                'title' => 'Разрешени IP адреси',
                'description' => 'Въведете списък с IP адреси (всеки на нов ред), на които е разрешен достъп до API чрез този ключ. CIDR нотация е разрешена. Оставете празно, за да разрешите всеки IP.',
            ],
        ],
    ],
    'account' => [
        'details_updated' => 'Данните за вашия акаунт са актуализирани успешно.',
        'invalid_password' => 'Паролата, предоставена за Вашия акаунт е невалидна.',
        'header' => 'Вашият профил',
        'header_sub' => 'Управлявайте данните за вашия акаунт.',
        'update_pass' => 'Променете паролата',
        'update_email' => 'Променете имейл адреса',
        'current_password' => 'Настояща парола',
        'new_password' => 'Нова парола',
        'new_password_again' => 'Потвърдете новата парола',
        'new_email' => 'Нов имейл адрес',
        'first_name' => 'Първо име',
        'last_name' => 'Фамилия',
        'update_identity' => 'Запази',
        'username_help' => 'Вашето потребителско име трябва да е уникално за вашия акаунт и може да съдържа само следните знаци: :requirements.',
        'language' => 'Език',
    ],
    'security' => [
        'session_mgmt_disabled' => 'Вашият хост не е активирал възможността да управлява сесии на акаунти чрез този интерфейс.',
        'header' => 'Сигурност',
        'header_sub' => 'Контролирайте активни сесии и 2-Факторна верификация.',
        'sessions' => 'Активни сесии',
        '2fa_header' => '2-Факторна верификация',
        '2fa_token_help' => 'Напишете 2FA токена, генериран от Вашето приложение (Google Authenticator, Authy, и др.).',
        'disable_2fa' => 'Изключете 2-Факторната верификацията',
        '2fa_enabled' => '2-Факторната верификация е активирана в този акаунт и ще е необходима, за да влезете в панела. Ако искате да я изключите, просто въведете валиден токен по-долу и натиснете бутона.',
        '2fa_disabled' => '2-Факторната верификация е деактивирана във Вашия акаунт! Трябва да я активирате, за да добавите допълнително ниво на защита на Вашия акаунт.',
        'enable_2fa' => 'Активирайте 2-Факторната верификация',
        '2fa_qr' => 'Настройте 2FA на Вашето устройство',
        '2fa_checkpoint_help' => 'Използвайте 2FA приложението на телефона си, за да направите снимка на QR кода вляво, или въведете ръчно кода под него. След като го направите, генерирайте токен и го въведете по-долу.',
        '2fa_disable_error' => 'Предоставеният 2FA токен беше невалиден. Защитата не е деактивирана за този акаунт.',
    ],
];
