<?php
include "vk_api.php";
include "conf.php";
$vk = new vk_api(VK_KEY, VERSION);
$data = json_decode(file_get_contents('php://input')); 
if ($data->type == 'confirmation') {
    exit(ACCESS_KEY);
}
$vk->sendOK();
$peer_id = $data->object->peer_id; 
$id = $data->object->from_id; 
$message = $data->object->text; 
if ($data->type == 'message_new') { 
	switch ($message) {
        default:
            $vk->sendButton($peer_id, "Я готов к работе",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case 'Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case 'Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(3);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case 'Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3]]);
            break;
	case 'бот жив?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег бот вернулся");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Свег бот вернулся",[[BTN_1, BTN_2, BTN_3]]);
            break;
			
/////////////////////////////////////////////////////////////////
			
	case '[club188091187|@swagspambot] Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case '[club188091187|@swagspambot] Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(3);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case '[club188091187|@swagspambot] Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3]]);
            break;
	case '[club188091187|@swagspambot] бот жив?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег бот вернулся");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Свег бот вернулся",[[BTN_1, BTN_2, BTN_3]]);
            break;
			
/////////////////////////////////////////////////////////////////
						
	case '[club188091187|свег спам бот] Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case '[club188091187|свег спам бот] Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(3);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case '[club188091187|свег спам бот] Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3]]);
            break;
	case '[club188091187|свег спам бот] бот жив?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег бот вернулся");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Свег бот вернулся",[[BTN_1, BTN_2, BTN_3]]);
            break;
			
/////////////////////////////////////////////////////////////////
			
	case '[club188091187|свег спам бот], Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case '[club188091187|свег спам бот], Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(3);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case '[club188091187|свег спам бот], Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3]]);
            break;
	case '[club188091187|свег спам бот], бот жив?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег бот вернулся");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Свег бот вернулся",[[BTN_1, BTN_2, BTN_3]]);
            break;
			
/////////////////////////////////////////////////////////////////
			
	case '[club188091187|@swagspambot], Свег есть?':
            $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!!",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case '[club188091187|@swagspambot], Спам!':
            for ($i = 1; $i <= 10; $i++) {
                $zz = 11-$i;
                $vk->sendButton($peer_id, "Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! Свег есть!! ($zz)");
                sleep(3);
            }
            $vk->sendButton($peer_id, "Всё!
	    Кста, можешь зайти в беседу:
	    vk.me/join/AJQ1d4yMcBYt9yahPowH3XIu",[[BTN_1, BTN_2, BTN_3]]);
            break;
        case '[club188091187|@swagspambot], Бот есть?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег спам бот есть!");
                sleep(1);
            }
            $vk->sendButton($peer_id, "Свег спам бот есть!",[[BTN_1, BTN_2, BTN_3]]);
            break;
	case '[club188091187|@swagspambot], бот жив?':
            for ($i = 1; $i <= 25; $i++) {
                $vk->sendButton($peer_id, "Свег бот вернулся");
                sleep(2);
            }
            $vk->sendButton($peer_id, "Свег бот вернулся",[[BTN_1, BTN_2, BTN_3]]);
            break;
    }
} 

