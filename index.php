<?php
include "vk_api.php";
include "conf.php";
$vk = new vk_api(VK_KEY, VERSION);
$data = json_decode(file_get_contents('php://input')); 
if ($data->type == 'confirmation') {
    exit(ACCESS_KEY);
$vk = new vk_api(VK_KEY, VERSION); // создание экземпляра класса работы с api, принимает ключ и версию api
$data = json_decode(file_get_contents('php://input')); //Получает и декодирует JSON пришедший из ВК
//print_r($data);
if ($data->type == 'confirmation') { //Если vk запрашивает ключ
    exit(ACCESS_KEY); //Завершаем скрипт отправкой ключа
}
$vk->sendOK(); //Говорим vk, что мы приняли callback
// Создаем необходимые переменные
$peer_id = $data->object->peer_id; // Узнаем ИД беседы 2000000.....
$id = $data->object->from_id; // Узнаем ид пользователя который отправляет команду
$message = $data->object->text; // Текст самого сообщения
$is_admin = [87444494, 183657]; // создаем массив с ID's наших будущих админов через запятую
$chat_id = $peer_id - 2000000000;

if ($data->type == 'message_new') { // Если это новое сообщение то выполняем код указанный в условии


    if (mb_substr($message,0,5) == '/kick'){ // Обрезаем сообщение и сравниваем что получилось

            if (in_array($id, $is_admin)) { // С помощью in_array проверяем схожесть переменной $id с массивом с ID's

        $kick_id = mb_substr($message ,6); // еще раз обрезаем и получаем все что написано после /kick_
        $kick_id = explode("|", mb_substr($kick_id, 3))[0];

        if($kick_id == ""){
            $vk->sendMessage($peer_id, "Вы забыли указать аргумент");

        } else {

        $vk->request('messages.removeChatUser', ['chat_id' => $chat_id, 'member_id' => $kick_id]);
        $vk->sendMessage($peer_id, "id - {$kick_id} был исключен :-)");

    }
    } else {
            $vk->sendMessage($peer_id, "У Вас нет доступа к этой команде!");

        }
    }
}
	{ 
	switch ($message) {
        default:
            $vk->sendButton($peer_id, "Я готов к работе",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case 'Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case 'Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case 'Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
	case 'Жесткий спам':
            for ($i = 1; $i <= 100; $i++) {
                $vk->sendButton($peer_id, "Жесткий спам");
                sleep(0);
            }
            $vk->sendButton($peer_id, "Жесткий спам",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
			
/////////////////////////////////////////////////////////////////
			
	case '[club188091187|@swagspambot] Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case '[club188091187|@swagspambot] Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case '[club188091187|@swagspambot] Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
	case '[club188091187|@swagspambot] Жесткий спам':
            for ($i = 1; $i <= 100; $i++) {
                $vk->sendButton($peer_id, "Жесткий спам");
                sleep(0);
            }
            $vk->sendButton($peer_id, "Жесткий спам",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
			
/////////////////////////////////////////////////////////////////
						
	case '[club188091187|свег спам бот] Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case '[club188091187|свег спам бот] Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case '[club188091187|свег спам бот] Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
	case '[club188091187|@swagspambot] Жесткий спам':
            for ($i = 1; $i <= 100; $i++) {
                $vk->sendButton($peer_id, "Жесткий спам");
                sleep(0);
            }
            $vk->sendButton($peer_id, "Жесткий спам",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
			
/////////////////////////////////////////////////////////////////
			
	case '[club188091187|свег спам бот], Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case '[club188091187|свег спам бот], Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case '[club188091187|свег спам бот], Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
     	case '[club188091187|@swagspambot] Жесткий спам':
            for ($i = 1; $i <= 100; $i++) {
                $vk->sendButton($peer_id, "Жесткий спам");
		sleep(0);
            }
            $vk->sendButton($peer_id, "Жесткий спам",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
			
/////////////////////////////////////////////////////////////////
			
	case '[club188091187|@swagspambot], Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case '[club188091187|@swagspambot], Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
        case '[club188091187|@swagspambot], Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
     	case '[club188091187|@swagspambot] Жесткий спам':
            for ($i = 1; $i <= 100; $i++) {
                $vk->sendButton($peer_id, "Жесткий спам");
		sleep(0);
            }
            $vk->sendButton($peer_id, "Жесткий спам",[[BTN_1, BTN_2, BTN_3, BTN_4]]);
            break;
    }
} 

