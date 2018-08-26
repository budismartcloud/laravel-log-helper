<?php

	function actionDebugLog($kind, $message)
	{
		if(strtolower($kind) == "emergency"){
			Log::emergency($message);
		}elseif(strtolower($kind) == "alert"){
			Log::alert($message);
		}elseif(strtolower($kind) == "critical"){
			Log::critical($message);
		}elseif(strtolower($kind) == "error"){
			Log::error($message);
		}elseif(strtolower($kind) == "warning"){
			Log::warning($message);
		}elseif(strtolower($kind) == "notice"){
			Log::notice($message);
		}elseif(strtolower($kind) == "info"){
			Log::info($message);
		}elseif(strtolower($kind) == "debug"){
			Log::debug($message);
		}
	}

?>