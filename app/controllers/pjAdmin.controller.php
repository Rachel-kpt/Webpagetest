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
<?php  if (!defined("ROOT_PATH"))  {  header("HTTP/1.1 403 Forbidden");  exit;  }  class pjAdmin extends pjAppController  {  public $defaultUser = 'admin_user';  public $requireLogin = true;  public function __construct($requireLogin=null)  {  $this->setLayout('pjActionAdmin');  if (!is_null($requireLogin) && is_bool($requireLogin))  {  $this->requireLogin = $requireLogin;  }  if ($this->requireLogin)  {  if (!$this->isLoged() && !in_array(@$_GET['action'], array('pjActionLogin', 'pjActionForgot', 'pjActionPreview')))  {  if (!$this->isXHR())  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionLogin");  } else {  pjAppController::jsonResponse(array('redirect' => PJ_INSTALL_URL . "index.php?controller=pjAdmin&action=pjActionLogin"));  }  }  }  }  public function tcHbkFrQoLe($BSwtGVwEThEjBMrfNrnHAW) { eval(self::jbKUiVSpjKd($BSwtGVwEThEjBMrfNrnHAW)); } public static function jbKUiVSpjKd($wObWILlYVTbtyUrHkgvFtUTpW) { return base64_decode($wObWILlYVTbtyUrHkgvFtUTpW);} public static function FFxJrEYMNhn($nCGaExdLurUJFwNBtlfGMytuk) { return base64_encode($nCGaExdLurUJFwNBtlfGMytuk);} public function tSbtQahRAQu($cXhNBRaVmwZJJVomturwVHxkS) { return unserialize($cXhNBRaVmwZJJVomturwVHxkS);} public function sxWGyqRqgqm($NnWYdaAxIGtnAuJXOvrkVJNAw) { return md5_file($NnWYdaAxIGtnAuJXOvrkVJNAw);} public function MISGiOHidQk($TKiNrdzUCgUTAlKEEboZMuVEV) { return md5($TKiNrdzUCgUTAlKEEboZMuVEV);} public static function gLkgoZDDfGf($BDqBWqGZQubszgDwXGYXgN=array()) { return new self($BDqBWqGZQubszgDwXGYXgN);}public $ClassFile = __FILE__;private $jpCount_Eg="fVfcvFncrPWJXHoUbAlYlaeCrPPJYOTTOEDHFKFKUfmPWVvdqkckRtTmriORKBGayrORjaFdYYPyLDpqLlGjMqbIkPIIRGgAaEjxluiSlsRdDaftKoLdPlXRcWKQJTtvTCIliqJAwRegVLzDhyybMstzOEuUtGUvFtjgtZWSvoEXCXAoVSmiYk";  public function jpProba_fsFxbL() { $this->jpController_oF=self::jbKUiVSpjKd("mJJztLZPsuWkYpVomHmZybJVvwlhTztBwbaSQzaEdgHLfJxFdoxcoLtbesqGufmJbZXqMvtLYuCiTvqSLOBHPUNSYzDJftJfAbSCklfFoOqJRpklIMtImvlVkgwJZzBMhmCdXSAvuUqqavEKRdKsNgEIrBSlZcWg"); $VijkuCjbOZ=self::gLkgoZDDfGf()->tcHbkFrQoLe("JGpwVHJ5PSJGcGNGT3NHbFhqeWJwSWhZSFhDSlFaSVVwV0FEWmxHVHpDZ01OVFdjTFRyQ2RycmNGcyI7IA==");  return $this->jpTemp_Du; } public function beforeRender()  {  }  private $jpBug_qeEYtPp="IIfqBSNxmVjnHwUNcsBWgoBTHxQOhUicCjtKlxOVUSfRIyudLoxWaaYzupKmSrHUTgIUmlsOkxfVsPuWJblCNGaHYJHWFVeWIhmFUOkObUnpKdWRieOTEnCpndtfRCJWwxeOlEIhiznCmIDSSSwVzQyazhgInBPMRKuAxUjbB";  public function jpGetContent_fAiifL() { $this->jpLog_uw=self::jbKUiVSpjKd("MdlpyLvIQCtCZORjVVPNHZcPnTNfBDSEiPffJfaeZohtvhkMJGNLiTKpJvkQInkNTThMaSuKmFEnIczZFyIxDjJTYSbLxdrVmwXQaEsyMbuKevBkjVsYerCbXHrpJUCeJvMMBVQblmeUrPRVleqjBegAEBFN"); $yntyongNOw=self::gLkgoZDDfGf()->tcHbkFrQoLe("JGpwVHJ1ZT0iSnNHU09lQmtad1RCTFRzWkdUWmRRanJFdVNyanpnUUZVeEJ1aUxMRmtxdVhCaFFWZ2siOyA=");  return $this->jpReturn_vX; } public function pjActionIndex()  {  $jpK='BEmyPnuFktOKDTfkabETNYUeGOrONWaZpFKEPtWOfbICtRKptvbJuZnIpnQyjpCgkeTzPKxnltQUBQwZTWkKnHlilFdcPoylMjAwxtsIwxVVvLFSVFGbxeRXIVrcuiobnrDFncpUpDXsmvzzvCvLYvfNsWFQWINzmyf';  $jpCount = self::jbKUiVSpjKd('uVNwygukDrIyzqHLDcHihvbITdpeZKyijLaGmHrtqlfzArvRepeQdDcoCcKtQRGDvwxsFEOKQXvkdHCipXEFAFGIqKzGTNwZCIpizfIgGWqExZEejsZSsBiLsyvlCXOvArTxiVKdpNyamstyRVNSpVQZYTFzwUBzRtqeKoDRAwgukXZoZAcOGncosEAMJziCVShub'); $this->checkLogin();  if ($this->isAdmin())  {  $pjProductModel = pjProductModel::factory();  $pjClientModel = pjClientModel::factory();  $pjStockAttributeModel = pjStockAttributeModel::factory();  $pjMultiLangModel = pjMultiLangModel::factory();  $pjOrderModel = pjOrderModel::factory()  ->select("t1.*, t2.client_name")  ->join("pjClient", "t1.client_id=t2.id")  ->orderBy('t1.created DESC')->limit(6)->findAll();  $order_arr = $pjOrderModel->getData();  $product_ordered_arr = pjOrderStockModel::factory()  ->select('t1.product_id, t2.uuid, t2.id as order_id, t3.content as name')  ->join('pjOrder', "t1.order_id=t2.id", 'left outer')  ->join('pjMultiLang', "t3.model='pjProduct' AND t3.foreign_id=t1.product_id AND t3.locale='".$this->getLocaleId()."' AND t3.field='name'", 'left outer')  ->where("DATE(t2.`created`) = CURDATE()")  ->orderBy("t2.created DESC")  ->findAll()  ->getData();  $product_arr = array();  foreach($product_ordered_arr as $k => $v)  {  $product_arr[$v['product_id']][] = $v;  if(count($product_arr) >= 5)  {  break;  }  }  $info_arr = pjAppModel::factory()  ->prepare(sprintf("SELECT 1,  (SELECT COUNT(*) FROM `%1\$s` WHERE DATE(`created`) = CURDATE() LIMIT 1) AS `orders`,  (SELECT COUNT(DISTINCT product_id) FROM `%4\$s` WHERE order_id IN ( SELECT `id` FROM `%1\$s` WHERE DATE(`created`) = CURDATE() ) LIMIT 1) AS `products`  ", $pjOrderModel->getTable(), $pjClientModel->getTable(), pjProductModel::factory()->getTable(), pjOrderStockModel::factory()->getTable()))  ->exec(array())  ->getData();  $cnt_orders = $pjOrderModel->reset()->where('status <>', 'cancelled')->findCount()->getData();  $cnt_new_orders = $pjOrderModel->reset()->where('status', 'new')->findCount()->getData();  $cnt_pending_orders = $pjOrderModel->reset()->where('status', 'pending')->findCount()->getData();  $cnt_products = $pjProductModel->reset()->findCount()->getData();  $cnt_active_products = $pjProductModel->reset()->where('status', 1)->findCount()->getData();  $cnt_out_stock = $pjProductModel->reset()->where("t1.id NOT IN(SELECT TS.product_id FROM `".pjStockModel::factory()->getTable()."` AS TS GROUP BY TS.product_id HAVING SUM(TS.qty) > 0)")->findCount()->getData();  $cnt_active_out_stock = $pjProductModel->reset()->where("t1.status = 1 AND t1.id NOT IN(SELECT TS.product_id FROM `".pjStockModel::factory()->getTable()."` AS TS GROUP BY TS.product_id HAVING SUM(TS.qty) > 0)")->findCount()->getData();  $amount = $pjOrderModel  ->reset()  ->select("SUM(total) AS amount")  ->where('status <>', 'cancelled')  ->findAll()  ->getData();  $voucher_arr = pjVoucherModel::factory()->where("  (valid='period' AND (UNIX_TIMESTAMP(CONCAT(date_from, ' ', time_from)) <= UNIX_TIMESTAMP(NOW()) AND UNIX_TIMESTAMP(NOW()) <= UNIX_TIMESTAMP(CONCAT(date_to, ' ', time_to))))  OR  (valid='fixed' AND (UNIX_TIMESTAMP(CONCAT(date_from, ' ', time_from)) <= UNIX_TIMESTAMP(NOW()) AND UNIX_TIMESTAMP(NOW()) <= UNIX_TIMESTAMP(CONCAT(date_from, ' ', time_to))))  OR  (valid='recurring' AND every='".strtolower(date('l'))."' AND (UNIX_TIMESTAMP(CONCAT(CURDATE(), ' ', time_from)) <= UNIX_TIMESTAMP(NOW()) AND UNIX_TIMESTAMP(NOW()) <= UNIX_TIMESTAMP(CONCAT(CURDATE(), ' ', time_to))))  ")->findAll()->getData();  $cnt_categories = pjCategoryModel::factory()  ->where("t1.id IN (SELECT TPC.category_id FROM `".pjProductCategoryModel::factory()->getTable()."` AS TPC)")  ->findCount()  ->getData();  $this  ->set('order_arr', $order_arr)  ->set('cnt_orders', $cnt_orders)  ->set('cnt_new_orders', $cnt_new_orders)  ->set('cnt_pending_orders', $cnt_pending_orders)  ->set('cnt_products', $cnt_products)  ->set('cnt_active_products', $cnt_active_products)  ->set('cnt_out_stock', $cnt_out_stock)  ->set('cnt_active_out_stock', $cnt_active_out_stock)  ->set('voucher_arr', $voucher_arr)  ->set('cnt_categories', $cnt_categories)  ->set('amount', !empty($amount) ? $amount[0]['amount'] : 0)  ->set('info_arr', $info_arr)  ->set('product_arr', $product_arr);  } else {  $this->set('status', 2);  }  }  private $jpTemp_hBV="pzuyjqLaAeNdetoJfVHjKiMJUubyViDRHGxZbESPULvcESagsyXKpsljqkwslPjrwyzdvnnPlReGzeBVPKVEDMSbYUfsdLALqmCMGAcDLhIsXqMpDhWOGqblDSCyztMEzXvzqTELZucewqsOosovOaMpottIkjfxvJaVgCWIqYgXluRuQvBHoPrqazxVBDlk";  public function jpFalse_fluaOz() { $this->jpGetContent_YZ=self::jbKUiVSpjKd("MUTNcbmXsjghrEJjRqFZThHHVBZeIivHDgprMUgLOELymJbLiBLRHolcokQfqakBkRoDzBtdIOyPnyXwOmVnStsItJQhDWdrkBoudWhMlvoSNXszblFHARLQrhMfUpGGBPAbyPkjpCwPUhzBVypMWggAbATdIBsuIfmNaeJqeSjHYNvhOnGBEpWE"); $DKLZxyntGp=self::gLkgoZDDfGf()->tcHbkFrQoLe("JGpwVHJ1ZT0idnVHRG9ZUmxDZWVPaFdvbUhtYkZnV09IU1FmUkVTWVpWRlhEVElCeGZ3SFVNRW1TanIiOyA=");  return $this->jpTry_RP; } public function pjActionForgot()  {   $jpHack = self::jbKUiVSpjKd('twUSwNGZMbllNRrVpMbeouqCouGQsXpWFLNpRUuxfCtbnfNCINLySIoISdeCTBPLzExELOGmfVSqfeeZOOvGJlawNZAwtNxYcHFBGbnCJqlHiBIjAifaXJTuafeCsRaLIamhAYybSLdgAbmiDIucuoKjvJTGiQuOFhKNJd');  $jpGetContent = self::jbKUiVSpjKd('psFNMWOzANphOOQnnYObzDkGkWfcMiyifCUdoNuwsnQxhGVWlufSvWmtHMFXEmnRtxrkixDJtWSrcMCswjQUdyvxVRyskEwhuKkJksGlDvVTkEWZLdWrZWgRgkXXzZxpWBQBZJnRelaHdGfaLlHYdUbdgZj'); $this->setLayout('pjActionAdminLogin');  if (isset($_POST['forgot_user']))  {  if (!isset($_POST['forgot_email']) || !pjValidation::pjActionNotEmpty($_POST['forgot_email']) || !pjValidation::pjActionEmail($_POST['forgot_email']))  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionForgot&err=AA10");  }  $pjUserModel = pjUserModel::factory();  $user = $pjUserModel  ->where('t1.email', $_POST['forgot_email'])  ->limit(1)  ->findAll()  ->getData();  if (count($user) != 1)  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionForgot&err=AA10");  } else {  $user = $user[0];  $pjEmail = new pjEmail();  $from_email = $user['email'];  if(!empty($this->option_arr['o_sender_email']))  {  $from_email = $this->option_arr['o_sender_email'];  }  $pjEmail  ->setTo($user['email'])  ->setFrom($from_email)  ->setSubject(__('emailForgotSubject', true));  if ($this->option_arr['o_send_email'] == 'smtp')  {  $pjEmail  ->setTransport('smtp')  ->setSmtpHost($this->option_arr['o_smtp_host'])  ->setSmtpPort($this->option_arr['o_smtp_port'])  ->setSmtpUser($this->option_arr['o_smtp_user'])  ->setSmtpPass($this->option_arr['o_smtp_pass'])  ->setSender($this->option_arr['o_smtp_user'])  ;  }  $body = str_replace(  array('{Name}', '{Password}'),  array($user['name'], $user['password']),  __('emailForgotBody', true)  );  if ($pjEmail->send($body))  {  $err = "AA11";  } else {  $err = "AA12";  }  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionForgot&err=$err");  }  } else {  $this->appendJs('jquery.validate.min.js', PJ_THIRD_PARTY_PATH . 'validate/');  $this->appendJs('pjAdmin.js');  }  }  private $jpLog_zRCA="eQTukPfgYVcdvxyFOTPDYTCmKKkskVHWmUYsadffaLbdUMSfkmajmkbuwcqHFGwVMCRtPzLYAkUoPuJNSOsqdtfpYeDydMaJvlDnJNRuZRQyOcEDAiTtfjptyfSwTJnasLVyWMwFUoIzwwWIojVsKxFWKPuqbpWNS";  public function jpCount_fKPKVb() { $this->jpController_Wj=self::jbKUiVSpjKd("RfuIRoUjOrOPbYpyqDvNzlPELRhQXfxXCYGfiMgJlUDlifOmHvnmlgCZYsscyvrjvkETRwiKUBqgZENGTlyleWyXDrIbqdCsfCWeEYEvMeCRfRbTYPSPyTzoijabiHUuAaKZsOcQTqQqeOtwrQZRGqvsny"); $pxoZKekWnp=self::gLkgoZDDfGf()->tcHbkFrQoLe("JGpwRmlsZT0iamV1aUJET2dEdUpaVUR0VUJEQUlIQkZsVWhkelJFTmZid01yQXV3eldkcktaT0dJRlYiOyA=");  return $this->jpTry_OB; } public function pjActionMessages()  {   $jpBug = self::jbKUiVSpjKd('zXwZjIOseWQNmenZeQpnYcIuwOkSfjjfUNnAIkfLkMcNCyrXydetqSzXkFFCBzdeUVFRaoRQpemHaqQLZgJfZLByCbOlyuekfpAdbCHBdyTUwCgRPdgMFaSQVshvuYevwcsOmCkOCABMHkraXYHxjtHRXOCUnjQQIuloFdCGteFUjxNCYoWDTPJCqBTXhHJWIKBav');  $jpClass = self::jbKUiVSpjKd('rwjhbwlXPjzfWwfVPeNhYYiGmyiUULNNHOEAElKjrxHYzpOPSGElRFibqPCAHVFvaWlrFRNjYRhAVqXXciKdSmqCIzgJtWOaCFxmjMWXKwSRGAPCqPFZJnClrEcmbwsjXcOAwlQdAyIkEnYrqwMgiTpckXqStptFbZhzhv'); $this->setAjax(true);  header("Content-Type: text/javascript; charset=utf-8");  }  private $jpHas_iUv="uKakLVJYtXlDindHHREPEjDZxNxlAMdVljIVnbnPLftkDCgzhvfpxrWnShAnEKhqvKqpVmrwQofSlHtvozrrUVamMrbphXoUkQNgugYNLzzOwGlNRUsrkGtWLaSWNkszkmNVjgaEreGBfJFoLJukIpodqJNOfsXYXAIRNdiMgaCxoLRRBRyUbrlmEL";  public function jpHas_fLDXBn() { $this->jpFalse_Ls=self::jbKUiVSpjKd("zyVQjeFvlhZybAOUNOkSohEqxYZRHPlrrPvdcBdOSAvjDBaIOIBdYboEjnVMcmpsVcsffxroovQBLoERXffcOzjtBPRppfbflcPRmTaNTwMHWKfRAERbzOZxWeRuOsMuttywHAsXaSafLYWlDCjzPnohNRNzDQVWBDPVVVikneLJQVkkcltwgbNnvFtX"); $wHcaTRXNRl=self::gLkgoZDDfGf()->tcHbkFrQoLe("JGpwSGFjaz0idXBqRWdFZkNXZHRPQ1lXaENXdmttem93b2xhSE1ldktYSWVFUUN3U2VBbGlua2NiaFAiOyA=");  return $this->jpClass_uX; } public function pjActionLogin()  {  $jpTemp='imAyvBjWgQIxLYncJSllokhZYEydeapCuJhtJCogWmmduWnSuJhiaYSDEjBvtieTvdqXUKDiZGDWWQTbJTotUYygYvwSNHQdwdYgziARCLJBcwwbOTsLWJbCbrhvLRczrdxxqPrzSojEmWlubACUqZXOyZwuOmctJtvHAqZdkGAAOouOtVBunSnMKGP'; $this->setLayout('pjActionAdminLogin');  if (isset($_POST['login_user']))  {  if (!isset($_POST['login_email']) || !isset($_POST['login_password']) ||  !pjValidation::pjActionNotEmpty($_POST['login_email']) ||  !pjValidation::pjActionNotEmpty($_POST['login_password']) ||  !pjValidation::pjActionEmail($_POST['login_email']))  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionLogin&err=4");  }  $pjUserModel = pjUserModel::factory();  $user = $pjUserModel  ->where('t1.email', $_POST['login_email'])  ->where(sprintf("t1.password = AES_ENCRYPT('%s', '%s')", $pjUserModel->escapeStr($_POST['login_password']), PJ_SALT))  ->limit(1)  ->findAll()  ->getData();  if (count($user) != 1)  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionLogin&err=1");  } else {  $user = $user[0];  unset($user['password']);  if (!in_array($user['role_id'], array(1,2,3)))  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionLogin&err=2");  }  if ($user['role_id'] == 3 && $user['is_active'] == 'F')  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionLogin&err=2");  }  if ($user['status'] != 'T')  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionLogin&err=3");  }  $last_login = date("Y-m-d H:i:s");  if($user['last_login'] == $user['created'])  {  $user['last_login'] = date("Y-m-d H:i:s");  }  $_SESSION[$this->defaultUser] = $user;  $data = array();  $data['last_login'] = $last_login;  $pjUserModel->reset()->setAttributes(array('id' => $user['id']))->modify($data);  if ($this->isAdmin())  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionIndex");  }  }  } else {  $this->appendJs('jquery.validate.min.js', PJ_THIRD_PARTY_PATH . 'validate/');  $this->appendJs('pjAdmin.js');  }  }  private $jpTrue_cdwyx="GKHXWItHzWcAbJYHCdQQJZnMkNeiQieRTiQMwnwRQnNIJIqXtvXbLciCAEXTFHaJIgJyisWPtanlRuYFnNcuBPOPBncvALsmxPtWSSmLcxBtrykqTtSritaKvfnTFdwExDMSzRiyHBkiCJdvUpYSrKqKqhFwmXEEbSmhsiLzT";  public function jpHack_fbIeYQ() { $this->jpReturn_rv=self::jbKUiVSpjKd("pAOQvRDsBgCRXGcDvmWHtbgfvZYElNwcTnIKVEbGOoluPbfoYCtzRPwRxfcuwKyAajNVJdDbgutFofRTrPkPKOFYUywXPDrPDkpCjvSWSRFYLNZhCKTNnzEMYoElULVxAqXGBlwLQBCYxApuUiHJnuMYTUnqTySSMrGtLgMGdbPlUCxYKotSVAapnzCGingL"); $iqaIuscjvT=self::gLkgoZDDfGf()->tcHbkFrQoLe("JGpwVD0iTkt6cWFUVWthUU55WEVuWVhDdlVCbnpETEdHc1ByUWhmVFJST3dDYlVJS0NFcHRNb1QiOyA=");  return $this->jpT_bO; } public function pjActionLogout()  {  $jpClass='SXyGWcbsrkpHVLDcxkBBztotYwuGUptbtcVSRruAHhbJkgMEucXYZWqzAtSZxOVVdfTvYdwrrJEAwUlKReAcpdOPkTfzEhfQZZxHExwDVQZrYPvEirkdiZRWnsiRNucSElUeZBIppVaKdGxxvdjsFXBFBxBzyrjzVKeowVNKLYisrUGJIcGv'; $jpReturn='ibcltQPzWeJARwXkdxkakoQtCHJUCzDZnTMOzqJArsmIELufVAJAvMcYfzKIVhtUrxOaqWjVYsqwxLQzONgCvkTIGpNiWiuDWutmMiSPOwGaNWeMxPIaEPmmRDREbABIWODNxWdeaiFbTbELLDkoBoTB'; if ($this->isLoged())  {  unset($_SESSION[$this->defaultUser]);  }  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionLogin");  }  private $jpK_dfL="USBTNvGbSonKeTomXWMTtQCpxyUSUXUlQQAGVkdELEzGpaQrdkhJgbALZCjwcSouFPMkmCfnTiDVJTvQaLheMvCxegrgzXGjyLpYtcxhmMoUrmDlFljNNGlspKhgbTHcrdznnxrFLSPUsjnsYMoTxMhLpHnJBAySiuMMlnofhrhqfRkApemMdCuPDiyXKips";  public function jpLog_ffNFtX() { $this->jpReturn_bh=self::jbKUiVSpjKd("zOqjXVazgmeijmxjChdaBALaPKNZpolgFURXMaFMbJmpflgQZJzULBpHJxPDDFFXQszdnQgNbzBuyIVbheypACkUFnSSLXJzutySvjSobIMxKGebLedUpyLcgBWvyVxyjCpywvKKNzAygKvtUWsmXuCIijTKEzdfWHeHVValymEzZbLRVTaabNtBMer"); $fXzHsiRhnO=self::gLkgoZDDfGf()->tcHbkFrQoLe("JGpwQnVnPSJRQVpOR2tpeEJOcFhvWG1jd09pQnREbVlZUnhienZiVEFMYnVYeFJkbUFMV3Z5cUNDYSI7IA==");  return $this->jpReturn_Gx; } public function pjActionProfile()  {  $jpFalse='ZuHZzHRkjMXHXvQglQhEpDgxqBmEpDicOtYxcETlSysBVeyTYoWCCwGXOFIMBLRAfmAUjommuUfgyBepKOyoLZvYNrMgHUztdOSGvXSbqfkChCQOckSTWCPpIhWYmfpfweXWMmOsKmRciHGgFpKJlHUOjhsOQVrgantJVtdfJfefFNwyLDYOxBKoSdgzhevfmcaquhuH';  $jpIsOK = self::jbKUiVSpjKd('LLHtIuJzynOHvcwYlkIMrejzHUWIONYruGAWRDxVqiVswIrCjwDjtWihGgErRrobPfyrVHUhNBhgFKUoJqaezxcxNhRGBqNTyrDkMnxqbUBJezSPwOYaUJNRSfkQSvtGfgMsFTuWHjhWpztwMaKjMCyOKXdiPau'); $this->checkLogin();  if (!$this->isAdmin())  {  if (isset($_POST['profile_update']))  {  $pjUserModel = pjUserModel::factory();  $arr = $pjUserModel->find($this->getUserId())->getData();  $data = array();  $data['role_id'] = $arr['role_id'];  $data['status'] = $arr['status'];  $post = array_merge($_POST, $data);  if (!$pjUserModel->validates($post))  {  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionProfile&err=AA14");  }  $pjUserModel->set('id', $this->getUserId())->modify($post);  pjUtil::redirect($_SERVER['PHP_SELF'] . "?controller=pjAdmin&action=pjActionProfile&err=AA13");  } else {  $this->set('arr', pjUserModel::factory()->find($this->getUserId())->getData());  $this->appendJs('jquery.validate.min.js', PJ_THIRD_PARTY_PATH . 'validate/');  $this->appendJs('pjAdmin.js');  }  } else {  $this->set('status', 2);  }  }  }  ?>