<?php
if (isset($update['update']['message']['out']) and $update['update']['message']['out'] == true) return 0;
if (!isset($msg)) return 0;
if ($msg == '/info') {
  sm($chatID, "<b>Info chat:</b>\nID: $chatID\nTitolo: $title\nUsername chat: @$chatusername\nTipo: $type\n\n<b>Informazioni utente:</b>\nID: $userID\nNome: $name\nUsername: @$username", 1);
}

aked
