<?php

class chatBannedCriteria4sChat_CriteriaUserEvent {
	public static function hasChatBan($rule, array $data, array $user, &$returnValue){
		if($rule != 'has_chat_ban')
			;
		else{
			$chatModel = XenForo_Model::create('Siropu_Chat_Model');
			$many = $chatModel->getUserBans($user['user_id']);
			if(count($many)>0){
				$returnValue = true;
			}
		}
		return;
	}
	public static function hasChatKick($rule, array $data, array $user, &$returnValue){
		if($rule != 'has_chat_kick')
			;
		else{
			$chatModel = XenForo_Model::create('Siropu_Chat_Model');
			$many = $chatModel->getUserKicks($user['user_id']);
			if(count($many)>0){
				$returnValue = true;
			}
		}
		return;
	}
	public static function hasChatMute($rule, array $data, array $user, &$returnValue){
		if($rule != 'has_chat_mute')
			;
		else{
			$chatModel = XenForo_Model::create('Siropu_Chat_Model');
			$many = $chatModel->getUserMutes($user['user_id']);
			if(count($many)>0){
				$returnValue = true;
			}
		}
		return;
	}
	public static function hasChatBanOrKick($rule, array $data, array $user, &$returnValue){
		if($rule != 'has_chat_ban_kick')
			;
		else{
			$chatModel = XenForo_Model::create('Siropu_Chat_Model');
			$many = $chatModel->getUserBansAndKicks($user['user_id']);
			if(count($many)>0){
				$returnValue = true;
			}
		}
		return;
	}
}
