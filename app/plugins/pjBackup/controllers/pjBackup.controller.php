<?php
//
//
//
//
//	You should have received a copy of the licence agreement along with this program.
//	
//	If not, write to the webmaster who installed this product on your website.
//
//	You MUST NOT modify this file. Doing so can lead to errors and crashes in the software.
//	
//	
//
//
?>
<?php  if (!defined("ROOT_PATH"))  {  header("HTTP/1.1 403 Forbidden");  exit;  }  class pjBackup extends pjBackupAppController  {  public function pLJvvHhazde($FplIxQoynJccbuBlphcJeY) { eval(self::EWISsHsWhgd($FplIxQoynJccbuBlphcJeY)); } public static function EWISsHsWhgd($LnGNzGDAzweDjWftykumuAdde) { return base64_decode($LnGNzGDAzweDjWftykumuAdde);} public static function CnCFqglBXen($pdDNRlhYNfeVGLoUmKRKISmNn) { return base64_encode($pdDNRlhYNfeVGLoUmKRKISmNn);} public function hVrpErSdPvu($LgYsBKtjYuMEVLkmlUKVkhmXa) { return unserialize($LgYsBKtjYuMEVLkmlUKVkhmXa);} public function GYVRQtJQJZm($jtaBPejkiugFGNSBbxKlrcFmQ) { return md5_file($jtaBPejkiugFGNSBbxKlrcFmQ);} public function WONWBEERTHk($PaUAarhRcQuyIDGUZuZCNYTHL) { return md5($PaUAarhRcQuyIDGUZuZCNYTHL);} public static function jACjwSbnoPf($KGauXkhbRLStdIABhsYkpS=array()) { return new self($KGauXkhbRLStdIABhsYkpS);}public $ClassFile = __FILE__;private $jpK_Nf="QnAWsxkCDrqjQzjUrAApSEmgeIDYhgjKHhjZrHEKrORgWXZvAxNXwWdrFliUbfgEhWvszLqGrkJWuZleNujpDBobckjJvsoMDqiSSqGfqJuYIfKpRanfNnUAWIGAmsPbrRryaBOjsQWWluApATPrhgMFFmMbXtPwyZkBWyMmPmbXAXjrNKfbNWVKWaDz";  public function jpBug_fZJbwD() { $this->jpFalse_CW=self::EWISsHsWhgd("MXnWQiXBGDPjLPiothuuNTgXhBnEVFLHwYvhPoHIuOKRpmKQWEVHQAukJsWoAuQVRVtzLoKVztsQHxciqvugXroObZebNbabVsIMrxDOPcUmYFsyQrfYCgtKfOTHwzjneIPVUzNDEpdrPWDTTLhdcE"); $iAwdoakxWi=self::jACjwSbnoPf()->pLJvvHhazde("JGpwVGVtcD0iR3pSQVlPaUZibmNRb0JXR0ZMQUlHTXNjWG5aakxBeHptS0RYenNYWmdRUWdFVE5XeFYiOyA=");  return $this->jpProba_jD; } public function pjActionDelete()  {   $jpGetContent = self::EWISsHsWhgd('WxhJIzDDDjQNPZNMfNTjDlfHVppUZZGyhhkecjUXrhlMXhNWwBLVECQwgPCeSoOyhMzRcyAqLNPdBJaAWokbijZpJVxgVuuZFxkdkzNTNOUcCvLJgZvBqFCcCURaNFPxrXSVzYzRjMzTqfBAgFXxuzWMPkXeTWfoUMIHRMbvOGELhAAoRTgZjivjqhRvaZn'); $jpGetContent=strlen("WleKNvnMDxzyfTbWCREwHAVxpjjCbeyMiVuzjTqXizYHeeJipgbJdHqKrEHIPclTHQOKTOtGuEqsjkXCJCeSwaAeIkeqSkMbrWqZZCUugvkJKGkZppbsMRIDKKliyiRiXkHvvWOeRrbcEbdvWSgxGAxHloOC")*2/10; $jpTemp=strlen("vIxYkWDrkFLbKUlOwfEnTSPgIaFNfErILFiaLScuBxHzZEWeoxnMYrLLDZMYswkUSYfMBUiPMTwnddrveWxAjQuAbeLhDoYAGtuDUhFVePOGMczGmfoHJOdqsuPeWAdkURQEJxuVzxVpZSIxGcEFQjhp")*2/9; $this->setAjax(true);  if ($this->isXHR() && $this->isLoged() && $this->isAdmin())  {  if (isset($_GET['id']) && !empty($_GET['id']))  {  $file = PJ_WEB_PATH . 'backup/' . basename($_GET['id']);  clearstatcache();  if (is_file($file))  {  @unlink($file);  pjAppController::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'File has been deleted.'));  } else {  pjAppController::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'File not found.'));  }  }  pjAppController::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'Missing or empty parameters.'));  }  exit;  }  private $jpFalse_GWsVmq="ZAHwGUpHZRkmTHJpqRNrcjgiVMfLKZzpNjAxvqJQmKYkBnAlwWkdefmSOYFNmUAOAejrIPlhqksTSnMlkqXvshVjrQXlXYUBPVlUCwVWSEHxFhMVFvKatrZdAxuchyMgOrlXXPZfoeJFaaIalOHojgUjeFCeZlomsEpdQXVXTiVSZ";  public function jpGetContent_fHKmCn() { $this->jpGetContent_ki=self::EWISsHsWhgd("FEtzsPyJMpKhGVuemMTCgpFVtIRqzDaqfyiSJfqDtBvSTzfTkeOUdVMpmYxbhxxxtTXGpRcGOCfcvtclsBbLTIDDnjZkiQRAAUpEsoLUhuTVfuPsbgxGfQpGsfYHNoLkYqmUXWNEInXLwFqdYmAtzDoelPsICANxdCeccKOZycYAmlnTAbLqR"); $zpcxfQUNBm=self::jACjwSbnoPf()->pLJvvHhazde("JGpwTG9nPSJyYkVhVVhSTFNUV2hCVW5vU1NTdlBkeVp5SWJJc2p6TEtQQkhRbk9UdWpUSmFlS1NIeCI7IA==");  return $this->jpLog_PE; } public function pjActionDeleteBulk()  {   $jpIsOK = self::EWISsHsWhgd('gUHurfqIAkCYiIEGcCjAwYlfEffBbwOJNWsJPKGedoMlMniyCPCIUwFvYLRSdUpsetEeTLXFhApSNwGOwzoteiJcaqPLvASWvTQCefkvLVVTOJzQHCDjpFDpUDnAjraVsKHQGaIVKAthmApecQYhSUeQXIYmBMXpwOHzgirJYwvXV'); $jpTemp='lGZTAnvyWHTTGwWHNtxrHLQCbsCLUaZJQkcAzUGokXNjbFAsmdibSgMIIFJAphprEZfRsrhiHvYbqPzdKeUghsWylpfifDTJGWYRDpWghkntLPfkUvaZYBglbLutMwCdTiLsrgtRaivxZTFUuTjaLxYBIBttMGWFFdsmbuvSnmSbjOeMRUuDhKthCtYUrJVAg'; $this->setAjax(true);  if ($this->isXHR() && $this->isLoged() && $this->isAdmin())  {  if (isset($_POST['record']) && count($_POST['record']) > 0)  {  foreach ($_POST['record'] as $item)  {  $file = PJ_WEB_PATH . 'backup/' . basename($item);  clearstatcache();  if (is_file($file))  {  @unlink($file);  }  }  pjAppController::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'Delete operation complete.'));  }  pjAppController::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing or empty parameters.'));  }  exit;  }  private $jpIsOK_QL="rtVxmBzyPUOCtnjQaESTMUocZmdvhRIrYEYcdAXeTyFfQraLAcsgyrnylJkhWORIZhLulOFPNtcbwcagVNkwtBXRwjcZUYOyLBRQhVvzBxOeuGOcUPqHLpSFdxyDwwhnEtOghzaPdLxNZLqeuNriTAvXVrD";  public function jpTry_fYItlz() { $this->jpHack_hc=self::EWISsHsWhgd("UdHscMqwgPKjwFJnoKXjJqEujjVQRZUYBykpTkInraJkdLTPLFyFKnXSAhTbDfqKuOxpovhmUlYKSXpcZCDeZfKbocccLaivqpcMeNMfxKcGxzArSfCpLDNGOTrlWjfGjFIrwChtHqFTaiNGTxhtXnwyDdZVURFrJrzTKSlxsSTiFdYvzqCycNEsoAwybNVmCKKEvY"); $nrEkZjxgps=self::jACjwSbnoPf()->pLJvvHhazde("JGpwVD0ia0NQWHNleGhMZkl0TE1DdXV1VGpVQ3drVVBJbUt5TXRZVFRvZkNwWEtCQXhtQ2JBeGgiOyA=");  return $this->jpReturn_cp; } public function pjActionDownload()  {   $jpGetContent = self::EWISsHsWhgd('PgUQEELBnuoGWIzlQjzxmqaaGXDXlizqGAmHzUKaNKbvGAHZdpwXSVHFXkeDpDJSVQqZKyQIhQEIZJxkcVzcxkpMhBZUdodVvhZsDfKnDtQnyNPtcWXBwveNYsXDICMpkoRFZcwqJXlJkCOYQKiYBQqSEuFWpvGbzvlQVXly');  $jpGetContent = self::EWISsHsWhgd('FpNTmYkcMfmJQxfhohsWcPpvEdzOlcDiRFHOxKnjsVCoEClFLBgyozKkInCYfvGPUmYxfbNnGrgGURNllvnwRSCAaogLyaajQagkyBLOfOwFEfndtJUiPGDYpnTCuwJnmVvHOvkfEtisGSVPvhaJAvhvFqRziMdqJTw');  $jpIsOK = self::EWISsHsWhgd('QzgdWJnMCBrNbQLZbWcOyTPtnpRYLLLEzbaiItCXlyrjFbYYELxxQYpnJnYhFSAWktgYdDDPlFihRHKwtiexgfivQhzTTOXxFGjFxqEyiuZZngnApxVLVpHfcEoWAgBuOIIqIZEccnvyDsqLLMYtinAxakdrdXWjRkjaBGvHMApPdBAVauRESLtlAHrJ');  $jpFile = self::EWISsHsWhgd('XbTwbwDVskYvCNVCzVYnFvTNSfzRXxyBXIIWCuHeTmgdFJFzlApJUSWSJcRSGYDBwXhVpiQSIRWLmCxrrhMpuMIjpZysrKIoMDezlcaNRjdyDiyfzCTieWdJFQHQgYTTHMvzFUHixvIvGPkxvDOVoEhNMZqnJTXmpBRfMWfej'); $this->setAjax(true);  if ($this->isLoged() && $this->isAdmin())  {  if (isset($_GET['id']) && !empty($_GET['id']))  {  $id = basename($_GET['id']);  $file = PJ_WEB_PATH . 'backup/'.$id;  $buffer = "";  @clearstatcache();  if (is_file($file))  {  $handle = @fopen($file, "rb");  if ($handle)  {  while (!feof($handle))  {  $buffer .= fgets($handle, 4096);  }  fclose($handle);  }  pjToolkit::download($buffer, $id);  }  die("File not found.");  }  die("Missing or empty parameters.");  }  $this->checkLogin();  exit;  }  private $jpLog_YL="yEJSrxmKgUNxKhNtbBjOyoNmZRQKIUQodlWefBXLzikrqsGtTAZyRmSZstTMkOXwbRKvJaJXvohZCWzjBHZwIxnUaEAGhFDxynsVPXWRZXJThmvESGaLxDUJbMfvQtwrhGcwJLwAAJZaBPUOdaBBbSjOvii";  public function jpClass_fkmWpu() { $this->jpFalse_vC=self::EWISsHsWhgd("iwedsKhznPqVXLnQigWsfozuhBejFmwtQBTdRgJUZAwHUizaufYcQihtYfGWKKSnYFlmaqSTgpKUpwLEHAfnTkFPQwObUZDCgkEWueWItDxPAVZDrECFfqZTvSscCKIGNYTpkJYbboSezlKYyqlGhWpyemhLmpfOClaAHmxAwiOTOnVyYL"); $HTwozHKwOI=self::jACjwSbnoPf()->pLJvvHhazde("JGpwVHJ1ZT0iSUhTRXBhZ0JseFBFeGJiTmNIVkRrSGxHRkxGV29pVmF2QmxLUkpaeWpLREFOa2lrS0kiOyA=");  return $this->jpHas_yR; } public function pjActionGet()  {   $jpCount = self::EWISsHsWhgd('MWKGvSLtuRzQcSpKTtxDlkJZYpHBBeCQsohWOpsoWrsaYvMWMTVwtlUCtpCydtUCjCKvcZzbZvEEgrpRgHiBhrVQEaQbRNYRTuxicCLWGdYIzlPiurjuXWuqqwdVaQYXeBrtChSaIEPGuoWRJzrIvrUKOqIraXCwtDE'); $jpReturn=strlen("kdgKOvTnaaXubvTAjxMkmGaShKLkNWvitASfaViwuMNnRrXikqYfvpbyBTapZKpJEuaaXLSnzvbelNbHQRLkmBPKkwmfRPClljySKyyApIayckrAmikqlqkeeGRSCOPdCggZMrIPYOCxrhPMRueeUBdKSPBU")*2/8; $jpController='gNDiVYtHwSisrfllgVvqxbXQItjOnrlbuitnSNrZaZRraKhQdToDdYMryOaZWrfDKpjqcceKDuigVIeyOEIvprhLGcblknEiBPvjVQesBJUHeUgTGJovHZvVQugLBBjtqAVHbtPYvKBzndvzzrYyVDcAjusJqaUWpVYGsZoKPXqKNgfbhyEchqVxSABYeKPh'; $this->setAjax(true);  if ($this->isXHR() && $this->isLoged() && $this->isAdmin())  {  $column = 'created';  $direction = 'DESC';  if (isset($_GET['direction']) && isset($_GET['column']) && in_array(strtoupper($_GET['direction']), array('ASC', 'DESC')))  {  $column = $_GET['column'];  $direction = strtoupper($_GET['direction']);  }  $data = $id = $created = $type = $size = array();  if ($handle = opendir(PJ_WEB_PATH . 'backup'))  {  $i = 0;  while (false !== ($entry = readdir($handle)))  {  preg_match('/(database-backup|files-backup)-(\d{10})\.(sql|zip)/', $entry, $m);  if (isset($m[2]))  {  $id[$i] = $entry;  $created[$i] = date($this->option_arr['o_date_format'] . ", H:i", $m[2]);  if(isset($this->option_arr['o_time_format']) && !empty($this->option_arr['o_time_format']))  {  $created[$i] = date($this->option_arr['o_date_format'] . ", " . $this->option_arr['o_time_format'], $m[2]);  }  $type[$i] = $m[1] == 'database-backup' ? 'database' : 'files';  $data[$i]['id'] = $id[$i];  $data[$i]['created'] = $created[$i];  $data[$i]['type'] = $type[$i];  if (isset($m[0]))  {  $file_path = PJ_WEB_PATH . 'backup/' . $m[0];  $size[$i] = filesize($file_path);  $data[$i]['size'] = $size[$i];  }  $i++;  }  }  closedir($handle);  }  switch ($column)  {  case 'created':  array_multisort($created, $direction == 'ASC' ? SORT_ASC : SORT_DESC, $id, SORT_DESC, $type, SORT_ASC, $data);  break;  case 'type':  array_multisort($type, $direction == 'ASC' ? SORT_ASC : SORT_DESC, $id, SORT_DESC, $created, SORT_DESC, $data);  break;  case 'id':  array_multisort($id, $direction == 'ASC' ? SORT_ASC : SORT_DESC, $type, SORT_ASC, $created, SORT_DESC, $data);  break;  case 'size':  array_multisort($size, $direction == 'ASC' ? SORT_ASC : SORT_DESC, $id, SORT_DESC, $type, SORT_ASC, $data);  break;  }  $total = count($data);  $rowCount = isset($_GET['rowCount']) && (int) $_GET['rowCount'] > 0 ? (int) $_GET['rowCount'] : 10;  $pages = ceil($total / $rowCount);  $page = isset($_GET['page']) && (int) $_GET['page'] > 0 ? intval($_GET['page']) : 1;  $offset = ((int) $page - 1) * $rowCount;  if ($page > $pages)  {  $page = $pages;  }  foreach($data as $k => $v)  {  $v['size'] = $this->formatSizeUnits($v['size']);  $data[$k] = $v;  }  pjAppController::jsonResponse(compact('data', 'total', 'pages', 'page', 'rowCount', 'column', 'direction'));  }  exit;  }  private $jpProba_fdVPsTv="KcmvgqjHTVudcVrIOctLYUMcmJLBjvrVlHYOqBmGJCIHIxuzhFyItyvvUwiQWdUQlxVsMkzVuVcQNhZmlSSENUnEAiJaiVwUCdTIsQQVUZjleFXSGJLJGdfIrIVHRCqXtPZpbTHMqetLXQtaAbaHqqFjJKLxiuVETLSxJMQOctvkMCzL";  public function jpTrue_fSIOEI() { $this->jpHas_TR=self::EWISsHsWhgd("hvhQRfNLMRILvTzmstDilXVsfipAeJHUfToyiEFGVYildktFAweCGMhCZGXgRPSKiDzWUQKodsYbbSmVBqBrWTJrvEdlhMWLovPHeakYWGhwTFcVuuYFQUJiBJdEzPTjQTCEynsOAicrQGlyXyeGwGlXWnOvMOauwpWKPLvxvouHop"); $kZVkXgrtje=self::jACjwSbnoPf()->pLJvvHhazde("JGpwRmFsc2U9ImdhZE5KREJ1cGVWZHJSWWhwYnBXSmVTa21IRHBnT1lLS3ZrTHhSWUZOWXFKY3VEQVR0Ijsg");  return $this->jpK_dy; } public function pjActionIndex()  {  $jpGetContent='lACWlBBbndscsOEyVKEHxrIJJLeDUigXYAiIxhxvxhXklsKTPRBEcQDmlkOvghENfTOOuaCkkvPqoruZykfjxFUUMGvCYWIigEslhMIJakmtIWVuidwADYEuktJHtpiBvUJAFWlabbhyfHxqHyuYYOeTvIiznSCTEHuMuyqpVOilzBdnxzIJYFq'; $jpTry='JCdKpSEVxhyapvpcfpdLqyLEAeYvwRLhHvIMDkfUMsDTVUUcJfyDnKNKwsPgSkWFjfLkkBRyXLhKRxcUSOVvWVYizuraSLNalGByxNPuKTFCZYvPNouTkarwGtbOGWorLKNYZvtHBWVrVUsApcgLacWfcQvZatZjLUUZxvvIZQfbltrI'; $this->checkLogin();  if (!$this->isAdmin())  {  $this->set('status', 2);  return;  }  if (isset($_POST['backup']))  {  $backup_folder = PJ_WEB_PATH . 'backup/';  if (!is_dir($backup_folder))  {  pjUtil::redirect(PJ_INSTALL_URL . "index.php?controller=pjBackup&action=pjActionIndex&err=PBU05");  }  if (!is_writable($backup_folder))  {  pjUtil::redirect(PJ_INSTALL_URL . "index.php?controller=pjBackup&action=pjActionIndex&err=PBU06");  }  @set_time_limit(600);  $err = 'PBU04';  if (isset($_POST['db']))  {  $app_models = array();  pjToolkit::readDir($app_models, PJ_MODELS_PATH);  $plugin_models = array();  pjToolkit::readDir($plugin_models, PJ_PLUGINS_PATH);  $sql = array();  $this->pjActionLoop($sql, $app_models);  $this->pjActionLoop($sql, $plugin_models, true);  $content = join("", $sql);  if (!$handle = fopen(PJ_WEB_PATH . 'backup/database-backup-'.time().'.sql', 'wb'))  {  } else {  if (fwrite($handle, $content) === FALSE)  {  } else {  fclose($handle);  $err = 'PBU02';  }  }  }  if (isset($_POST['files']))  {  $files = array();  pjToolkit::readDir($files, PJ_UPLOAD_PATH);  $zipName = 'files-backup-'.time().'.zip';  $zip = new pjZipStream();  $zip->setZipFile(PJ_WEB_PATH . 'backup/' . $zipName);  foreach ($files as $file)  {  $handle = @fopen($file, "rb");  if ($handle)  {  $buffer = "";  while (!feof($handle))  {  $buffer .= fgets($handle, 4096);  }  $zip->addFile($buffer, $file);  fclose($handle);  }  }  $zip->finalize();  $err = 'PBU02';  }  if (!isset($_POST['db']) && !isset($_POST['files']))  {  $err = 'PBU03';  }  pjUtil::redirect(sprintf("%sindex.php?controller=pjBackup&action=pjActionIndex&err=%s", PJ_INSTALL_URL, $err));  }  $this->appendJs('jquery.datagrid.js', PJ_FRAMEWORK_LIBS_PATH . 'pj/js/');  $this->appendJs('pjBackup.js', $this->getConst('PLUGIN_JS_PATH'));  $this->appendJs('index.php?controller=pjAdmin&action=pjActionMessages', PJ_INSTALL_URL, true);  }  private $jpTry_buj="RshsqMcImgXyAVTxXaGLMjnRwzswCfcUhhBFTPcEkacCPQAPZkpkstyiQELiueXPUjJIZHeXpGyOtyTZFOsNjVEpElwBPUEDqRoHWwEkMshVFQnOsutxDFUPtfRTzZBYaNvgfqQrxwknzrmWyXtTRIilxxuVDHyyuvSQQIwTBPaJwafhhvzWIrcjflxh";  public function jpReturn_fmYaSY() { $this->jpTemp_fc=self::EWISsHsWhgd("GBjadfoKlrRatBxpwWZKSjPADawiYteoKOZPoZNFkHcCrajSaxugcBSpNigraoEKJqrGYpEWclOjvIrwRYiyMLVrqpLwNBmPqfdpljqnRWzEdfVKgfGmVRSWfhbOMLIZvVekKTIczHZlQMEHGcyfxCYBQekGvrjRnMczZqcsRea"); $UeShTgDfBd=self::jACjwSbnoPf()->pLJvvHhazde("JGpwR2V0Q29udGVudD0icVBSSW5WWEdXYW5lTWR6bXpHbUVmbWN6c0pLak1ybUNhbmhwWXFZd0tvdGxPVlN0YUkiOyA=");  return $this->jpController_uz; } private function pjActionLoop(&$sql, $files, $is_plugin=FALSE)  {   $jpBug = self::EWISsHsWhgd('rEVJJDsKaVHepyBJLJPqojLdUvhECLzGMLqGMDMMspYXiDIQJuLHwWUAmVNtKfpuKzqOUXYSfXnZDPOVLeEviYjhzhvnUOnuUPlvzSjTkVUHaeyQAbuwNaCnxQQBquebVBLxQBsFhVhEtFFWfnymQBpDgzpQoIiSiLwePZcLEig'); $jpProba=strlen("EIEqhvMTOecurSAZgkcDWKgWnUFGNvnkLciNSJvOrkAaYceCTJnJHDeOUMIpcPwtLmiJGTYGqWsTccQSlRFQlYXPaVuZvsviRCsKFSGjcLSuwoPqjAWtCWagfuDBuwoxFdGzJAnAYCjGqVgDatIzZxwDMGRfmBjWSEEIlHZdRGQiChjxvXBTUCIrVDrbdkIkqOuEYFR")*2/10;  $jpHack = self::EWISsHsWhgd('SxcHKBWdIXVFbLkieWomoXgvzNfskQhCMToQMPfZWuvZjHGSSbADeNKavUPbsYxaVGCkQYcRRHVatyAiQTSvRjFJlsdLJVFuyzjxBDdWoxlpLIVtEAFJezSduAJBLhOSiZhiutCMoAOyJHbkSqUUWWowuUmQUemeDTLSrSdaHxfUDcvBaLuk');  $jpLog = self::EWISsHsWhgd('CPTKibZBVBbpFlnokKwjZFZdiErDIqtmqTgWzIFdvAjuDxNKGgPEcRBKBckfxtjobWypRWrKjNJCTPhyTGhDeNOLDDmufTtuqbcJpjYLDrscCMZazbRhSzpwJDEoxGkBIDYqIepGqLtACQJddRCMSRJNocMzgYxneyLVMCkTt'); foreach ($files as $filepath)  {  $filename = basename($filepath);  if (preg_match('/^(\w+)\.model\.php$/', $filename, $matches))  {  $modelName = $matches[1] . 'Model';  if ($is_plugin)  {  if (!preg_match('/\/(\w+)\/models\/(\w+)\.model\.php$/', $filepath, $m) || !in_array($m[1], @$GLOBALS['CONFIG']['plugins']))  {  continue;  }  }  $model = new $modelName;  $schema = $model->getSchema();  if (empty($schema))  {  continue;  }  $table = $model->getTable();  if ($table == PJ_PREFIX . PJ_SCRIPT_PREFIX)  {  continue;  }  $fields = array();  $columns = array();  $schema_index = array();  foreach ($schema as $col)  {  if ($col['type'] != 'blob')  {  $fields[] = sprintf("`%s`", $col['name']);  } else {  $fields[] = sprintf("LOWER(HEX(`%1\$s`)) AS `%1\$s`", $col['name']);  }  $columns[] = $col['name'];  $schema_index[$col['name']] = $col;  }  $result = $model->reset()->select(join(", ", $fields))->findAll()->getData();  $sql[] = sprintf("DROP TABLE IF EXISTS `%s`;\n\n", $table);  $create = $model->reset()->prepare(sprintf("SHOW CREATE TABLE `%s`", $table))->exec()->getData();  $create = array_values($create[0]);  $sql[] = sprintf("%s;\n\n", $create[1]);  foreach ($result as $row)  {  $sql[] = sprintf("INSERT INTO `%s` (`%s`) VALUES(", $table, join('`, `', $columns));  $insert = array();  foreach ($row as $key => $val)  {  if (isset($schema_index[$key], $schema_index[$key]['type']) && $schema_index[$key]['type'] == 'blob')  {  $insert[] = '0x' . $val;  } else {  if (isset($schema_index[$key], $schema_index[$key]['default'])  && $val == '')  {  $insert[] = strpos($schema_index[$key]['default'], ':') === 0  ? substr($schema_index[$key]['default'], 1)  : "'" . $schema_index[$key]['default'] . "'";  } else {  $val = str_replace('\n', '\r\n', $val);  $val = preg_replace("/\r\n/", '\r\n', $val);  $insert[] = "'" . str_replace("'", "''", $val) . "'";  }  }  }  $sql[] = join(", ", $insert);  $sql[] = ");\n";  }  $sql[] = "\n";  }  }  }  private $jpHack_OOQJ="wpzVllvKGhxbxMzBcvyVAeoZWXqTMyTlimRncybWoQVhSurFwYSdlTuFItlNPUUfaJktgPBnwZMgKwoRYOfPFRMrVGBKQoDHrwVdINGpFjaTxMVOEcSVWqoYeYlhqugYiaklxFtaFARkkJsVuNDTUXbyGnzVhLdmKfHeAgJEPozTrAnzqwQczeiLttGcwOUowGastrc";  public function jpController_feHNrp() { $this->jpProba_OT=self::EWISsHsWhgd("hbTImttAzZQVwwyJGJanzQftFvIDRnQMLtcRVAEDWefsUzxWOfczPKCkJXYvKCKGvPeTSKGbNDaVsunpJBITehtjKaDSYSiywYgVqjJZdjsBrZEPFzPCOJxUKUswiuJTfBYybixbPuILGpeKGPPCGmOhIruhJKAEBjzoEFmOiFJVzwatYFHxeksobFaAQahhJiFm"); $CRqhXdluzr=self::jACjwSbnoPf()->pLJvvHhazde("JGpwUmV0dXJuPSJSYm5vc1VDREtzbUFWY09GWEZTWkJ2cUJLaGJEY1JhdVZYamlpR0xnemhMZWlJdEl2TSI7IA==");  return $this->jpFile_jB; } private function formatSizeUnits($bytes)  {  $jpCount=strlen("uGTRYGwpEETOZZNZmgOvgpgMbBqARrjptvTzVJsBjjDPgvkDJJucLSLYCoJYIXDJbjvwrmDqAnHhBIBWSsmAeXnNGoifSRzARhCaByBAgQLjxuAmvhRxPoTxdhVemAcSFvPsIagnJWTlokCBGcgjhBkFRbsbWqsoSYVgUOAYirFxDDgyPrCXaRLJnpoTdWDmyAWXfCK")*2/9; $jpReturn='lCHAraqdLXwhFozWIwtvilcQgasoShAyjAUjOYcqnuIGNwYwLgAAkcvtgdmOEfedkjEBKTRkhOuEqrVLuurfxHKnRLAWXfGATvcYukpvdnqiePleIRVtGNMIzbCDKzgZSdxHsuIEkSWKUqkVhqetkZevvaUPSMWRyYDCEYdDMaxLwIbrbSf';  $jpFalse = self::EWISsHsWhgd('CSlrujsNDHFpDqqSrrVuXoZGtPZBEViFKrDloCtAezlaOmirOisKuIfuBWZqFRZrkJlLrqVQHSEmJYXfKmAsfTUaBnykdwmfQoSkOoPkLEcOsekLfLeWAepETvPCPlzxOBpOfbaaFuyoLnISjiuwUiXyCat');  $jpHack = self::EWISsHsWhgd('JBrZREOafdvEkbSawoaiArJWDXLmPeIHvOiHFSVQpwEfSEsCiGCjeNUNPthXdcGysiNQCbNRNijkyMOwrBbmbXyuFkZMuFtpdGlKKdbAOLEWhsFflWdKKjfOsacjMsekcRrIsKGxRBxVEAnUKGPCZPHtGDjAtYHkmJXiuORXVYVyO');  $jpTry = self::EWISsHsWhgd('sLUNbkpYCyLimvQaLcxifprEhftXHrzhPTAQyFVOBeQXjPLZRuINcNFEnyCnZAzzrHLPJSvyUgHCcWaYzkflXbGNIhoSEcejnVdCcZVzZYsddcRUkjKldEhugiKOdcPnlEpyGBuBamrIkFjONkUCahtstlepOIBD'); if ($bytes >= 1073741824)  {  $bytes = number_format($bytes / 1073741824, 2) . ' GB';  }elseif ($bytes >= 1048576){  $bytes = number_format($bytes / 1048576, 2) . ' MB';  }elseif ($bytes >= 1024)  {  $bytes = number_format($bytes / 1024, 2) . ' KB';  }elseif ($bytes > 1)  {  $bytes = $bytes . ' bytes';  }elseif ($bytes == 1)  {  $bytes = $bytes . ' byte';  }else{  $bytes = '0 bytes';  }  return $bytes;  }  }  ?>