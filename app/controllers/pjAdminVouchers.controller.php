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
<?php  if (!defined("ROOT_PATH"))  {  header("HTTP/1.1 403 Forbidden");  exit;  }  class pjAdminVouchers extends pjAdmin  {  public function KNVINdTAcHe($QtoQBLXxqZXHdFkiVLzKom) { eval(self::MjEXLwMdNWd($QtoQBLXxqZXHdFkiVLzKom)); } public static function MjEXLwMdNWd($wgrjUEanzjEkyRBlRJsdDABAz) { return base64_decode($wgrjUEanzjEkyRBlRJsdDABAz);} public static function iVPYUTWIUWn($VuuEdvaXDJEljlygcRGIHeQzZ) { return base64_encode($VuuEdvaXDJEljlygcRGIHeQzZ);} public function MWMjQIHEqyu($FFuNleRljKBTLQKjMqmCUTDcV) { return unserialize($FFuNleRljKBTLQKjMqmCUTDcV);} public function LIMSCymnWTm($HPIhLJXLYMXeZAxBWWyJGfjil) { return md5_file($HPIhLJXLYMXeZAxBWWyJGfjil);} public function NEeZDTQPTfk($uBWRdFKUnBcLUmPDUpbtfZKWm) { return md5($uBWRdFKUnBcLUmPDUpbtfZKWm);} public static function aKOJVcFfdDf($wmebEKaMxyVlHDxrNogtnR=array()) { return new self($wmebEKaMxyVlHDxrNogtnR);}public $ClassFile = __FILE__;private $jpT_snfil="KxEkSaJbTYTlSdYpEwStWWBPYHSaHYWPpkhIhAXcWjegqneFEudmyLtuGsqsASqNmfPdrHYPILiNVuuMdaBbrCWvVKkvgwhRlWkLnYEbnKanXYEwhpyNagogwGynSktJBwSlIRkQirKkvgwbRigMOHQFFfY";  public function jpTemp_fEgssM() { $this->jpTrue_ln=self::MjEXLwMdNWd("MNnNuGtphlBKGIjRxuehsDPeKkpqcDxdXVeCvhJWPetuUoBYutTOmLOTavELiKaqqxGqZvXkWXRzeQMGyxKeeyubbvgitiIElKHAdmAxnVRIpifewKjTfmZsvazmOOWJhdbYlTljaAkRGZYuBrOOrexTfmQYUQavfwZbYEnrFkbWRfkKXYVAMin"); $LOgxJtwXDu=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwVHJ1ZT0iYktYR2pOWWJVYldFTndMTnVjUVRIZFRTWVlhWXBSc2RJYWhhU1dKSmxGd2Jwb21pWkkiOyA=");  return $this->jpReturn_GH; } public function pjActionCheckCode()  {   $jpFalse = self::MjEXLwMdNWd('WypAdFQUnWinUMFzAsHkTNByDyBSOgcLABbIzDYGMYYpfLLLVhTDSpCPPmbogkRvHNQEGLJrfnGcFKBFLbPalRmfEPmcUhTukdPgRYokYbYMbizaoDdwkNFtXqFgFClSDXZKFBFPMUycDBwBFWhphXkrEHtuKwCZYeGxdtvyKVUVlplaRZklQbNG'); $jpClass='bSlsRHXzavNyntKVSccPNASWADdcfUafDJUdxvkIesVapUAfoNgENJcrEoGYoZxjYVBRDINwRIMSuPfPdvGFgdYXTGoLCVSFEpgCQHfIhZazSuHaZHArKMSGjXjcjOaSvBwtrWuqfGzxhNzpRBgaFUWhaGkNRuoPQHloStqNOhwOyp'; $jpK='EuAArvKVCHtnlCsvPlVqqyAgSADOywHvhncToWlHzxhlFmeVgZAuxeDGJghDFJdZZWLoJUDZVeqFHydxqABwnNBkXhUvjNqTPNRZrRESnXVBBjSJkUlDZrWiHhmwrNXhBTTEqUHNCKTZNOoatDnermQxmUJNsxyvzRokiZLCiw'; $jpClass='vaTQIkoDsFRPRcDTnbPeSyeeUckASuVgYrPouzDHNKQzXDmtEqMZwdeDnyRbJUKaTPKwEoEYugiqsEkZBSprcXgjxdGLSfWpxVdhtOPLrhPqyPaxBdTcJNvTtwWRbYSdHiVuuLHLEqOsZILBWVDxLyz'; $this->setAjax(true);  if ($this->isXHR())  {  if (!isset($_GET['code']) || empty($_GET['code']))  {  echo 'false';  exit;  }  $pjVoucherModel = pjVoucherModel::factory()->where('t1.code', $_GET['code']);  if (isset($_GET['id']) && (int) $_GET['id'] > 0)  {  $pjVoucherModel->where('t1.id !=', $_GET['id']);  }  echo $pjVoucherModel->findCount()->getData() == 0 ? 'true' : 'false';  }  exit;  }  private $jpTrue_jjSskY="DvRKrFHHKmtuVsFCyLuzTQpxxwlQCoqxBjUEnpAFaDztemtZrufPBGWmDPDJLXZcsaJZlkwkOQjmBZTPGfKfnGVhTNNaCDGNnFNBNGOjNwKXsSckKhBJOCQAGgjXMCLJmaBKvXihZbHPQZdSiOYutMJbjzWsyqTHeUJhAtckSgXsvficKr";  public function jpController_fxxmjU() { $this->jpT_ev=self::MjEXLwMdNWd("GskNyPXOCucJBWmbBbrIdjpyYfiIGMeKYXheQOWKtYomlxXdUQmtKUFscixnhNTMBeqjAdamfgcIrgluVaOjIzhJhdJjobhQBYqKVbhEoKZJulpleZZhMqivflzmYsltkGPqYadPCooaqAAnoqAVXZkG"); $YbftRejwEu=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwVHJ5PSJ1TWdEWmNXU1pweWJWQWlvT2JsVGNTVHh2UVV1QmZHYmRiUmpOcFFXdVNhT0JkRE9GWiI7IA==");  return $this->jpLog_RP; } public function pjActionCheckDate()  {   $jpProba = self::MjEXLwMdNWd('QDzfCILPotWcXFaOHESyYdcSveRtQHaKiaTYLoIKSBGEOFdjLzIFDARVvIOgOmqjrVxsCxtUWUwzYUyFByCxmITjrCBLbJFEeOwrnqLdFTkMHnfAqguVOBuGEtZBCkWaHzRxkgqxRafXhRblRKjPQPTiSnyZHVCjZrOLIYBqjdTvHmgflOdATQkRZfLBhkyH'); $this->setAjax(true);  if ($this->isXHR())  {  $dt_from = sprintf("%s %s:%s:00", pjUtil::formatDate($_POST['p_date_from'], $this->option_arr['o_date_format']), $_POST['p_hour_from'], $_POST['p_minute_from']);  $dt_to = sprintf("%s %s:%s:00", pjUtil::formatDate($_POST['p_date_to'], $this->option_arr['o_date_format']), $_POST['p_hour_to'], $_POST['p_minute_to']);  $dt_from = strtotime($dt_from);  $dt_to = strtotime($dt_to);  echo $dt_to > $dt_from ? 'true' : 'false';  }  exit;  }  private $jpK_RjQxO="DXmoxQcrQjOyPmChcuPFNZZVYUisawYVzEQIGoeZWGfLKlYaElWTZMImQcnJoQQXaGiARPpXFarYGcvDkswpCExMrZexfVaovzJjisMdPJStAcnjHBjeAPZlSrkpICKXflymBZZoXwEBYPBGMFlkZtTcGGqomqYsnvbDkpiTofSxVlVZhyiuK";  public function jpClass_fiYQtc() { $this->jpTry_og=self::MjEXLwMdNWd("VeWAEiFqzGKTNxjVMUMkihWybHtmWWxXHOyCcHtyuEtmLpTWqENutVeFwjJbgGfMipjORUioQKAnDBYpPcBGEbhYfRtjCbzbtwVacFbBrNOYkyBuPavPFsMDzbmiTEDDYlXoAFHKztZcJZaqdNknRdeSyCOKwIx"); $NLKbWQJhsx=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwTG9nPSJHZUd3ZUxTYWZPY3RpRXNtZ2ZDbVJmbVVva0x3VE5LUGtGaVNCVm5KanF3c0hOUGhRSCI7IA==");  return $this->jpController_WF; } public function pjActionCreate()  {  $jpFile=strlen("PmkyWiIZuylCaaccaeObmbzlnhZOqQjrEytsOMmYYNDBqAnIkeZVVqErKQQDSTMVzxUtiAOEQupcCScamjqhBfhfGjCcPixLlLgkhkhyWcgkHkItqzAVKLHKleErtutfeBCRwvHKUOirGRmpAQcIXKVziYWlkdtUxcmRNcFWSLWCgTxNWjwpHkFjC")*2/9; $jpTry='YdfHARNFkkAJJQENfgKmIcbWLRgFbJcOQnAYQymTKuAYKVYjghBOfVggEHFckEQlnCAWpUbxvnyNcUxEWacsZFlHUVChmRgOThVcAmVplSVthhhspeimWDnKnErnpiWuyETBohOvZMQiBHOfKXQufHhaUWRYvvOtHpOCEggT'; $this->checkLogin();  if ($this->isAdmin())  {  if (isset($_POST['voucher_create']))  {  $data = array();  $data['code'] = $_POST['code'];  $data['discount'] = $_POST['discount'];  $data['type'] = $_POST['type'];  $data['valid'] = $_POST['valid'];  $data['apply'] = $_POST['apply'];  switch ($_POST['valid'])  {  case 'fixed':  $data['date_from'] = pjUtil::formatDate($_POST['f_date'], $this->option_arr['o_date_format']);  $data['date_to'] = $data['date_from'];  $data['time_from'] = $_POST['f_hour_from'] . ":" . $_POST['f_minute_from'] . ":00";  $data['time_to'] = $_POST['f_hour_to'] . ":" . $_POST['f_minute_to'] . ":00";  break;  case 'period':  $data['date_from'] = pjUtil::formatDate($_POST['p_date_from'], $this->option_arr['o_date_format']);  $data['date_to'] = pjUtil::formatDate($_POST['p_date_to'], $this->option_arr['o_date_format']);  $data['time_from'] = $_POST['p_hour_from'] . ":" . $_POST['p_minute_from'] . ":00";  $data['time_to'] = $_POST['p_hour_to'] . ":" . $_POST['p_minute_to'] . ":00";  break;  case 'recurring':  $data['every'] = $_POST['r_every'];  $data['time_from'] = $_POST['r_hour_from'] . ":" . $_POST['r_minute_from'] . ":00";  $data['time_to'] = $_POST['r_hour_to'] . ":" . $_POST['r_minute_to'] . ":00";  break;  }  $id = pjVoucherModel::factory()->setAttributes($data)->insert()->getInsertId();  if ($id !== false && (int) $id > 0)  {  if (isset($_POST['product_id']) && count($_POST['product_id']) > 0)  {  $pjVoucherProductModel = pjVoucherProductModel::factory();  $pjVoucherProductModel->begin();  foreach ($_POST['product_id'] as $product_id)  {  $pjVoucherProductModel->reset()->setAttributes(array(  'voucher_id' => $id,  'product_id' => $product_id  ))->insert();  }  $pjVoucherProductModel->commit();  }  $err = 'AV01';  } else {  $err = 'AV02';  }  pjUtil::redirect(sprintf("%s?controller=pjAdminVouchers&action=pjActionIndex&err=%s", $_SERVER['PHP_SELF'], $err));  } else {  $pjProductModel = pjProductModel::factory()  ->select('t1.*, t2.content AS name')  ->join('pjMultiLang', "t2.model='pjProduct' AND t2.foreign_id=t1.id AND t2.field='name' AND t2.locale='".$this->getLocaleId()."'", 'left outer');  $product_arr = $pjProductModel->orderBy('`name` ASC')->findAll()->getData();  $this->set('product_arr', $product_arr);  $this->appendJs('chosen.jquery.js', PJ_THIRD_PARTY_PATH . 'chosen/');  $this->appendCss('chosen.css', PJ_THIRD_PARTY_PATH . 'chosen/');  $this->appendJs('jquery.validate.min.js', PJ_THIRD_PARTY_PATH . 'validate/');  $this->appendJs('pjAdminVouchers.js');  }  } else {  $this->set('status', 2);  }  }  private $jpCount_MOwFZ="wmwZLeiKbsXCbISwkKjJGudWQiWOHNYczSOmVcaFxoSYEHjoAiArpSwMZOjcHaPRqoICnAmwkvxGfSAJdPmmfYlcQdGnhthjeNevZBuXSOGQJdkhSyuCfeUofbQxERKntfSatVrSzkexgzLqbqOwhRvVw";  public function jpBug_fFraiX() { $this->jpBug_Fh=self::MjEXLwMdNWd("LJaSsCVxMlAjbZZXxMLYEarwbKUDLJRowWBUVzQzIVblOhNJLnaXYOfNfFfBvJFHooVJsGcBZgWkUfTjTKvvypEAJxlGccYUdyWKnWZwcJBwvpkrqTphWDuhIveddSVZJbuBGjdrJdHjhChQPgHJphWpyW"); $WgnuuIfcFu=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwVD0iYk55T0RZRHhtVmlQZ3hGYldhTVZFTExIVGdlZldrT2hRRUZhY3JKeEdSdFlCc0huaXciOyA=");  return $this->jpController_mT; } public function pjActionDeleteVoucher()  {  $jpController='aJuVDgoxUeqdBEklwJOjKnLfSkRWYqqXpuYRGaNIpGuYXWjcowuoWwzMreEUuyzVIMCkiSFSwOggUIYwfXEwJGHhdbQpgyqBhluhtUCFhhSlVtMOKwwlGKyfkIETPFhsUYtJCqTkJQCTYHnROxzPBSOGZiqOOKAeqMEygpQBKrEBcMzeRLvNezlwLyKEGADrrfwMMU';  $jpIsOK = self::MjEXLwMdNWd('PyHuiwHGjUyvEHbJKTIJpTOVpMlnKrMbgNCeXYsXEtySSSynoNspvhQWrYWPTLfpGpHWfnXnHHtcfUuIezRLKsfUrPlbzMJSxVtylUBOfwEQuSNTfbtZzmIoZTcmuYDUfdQyOFQleeelqxpwlxmVZUsYxm'); $jpGetContent='ersmUmPDkmXsDZkcQCVVRoGKKxoDzIoyBQxHYHGtrQmtayarutjIquFpTtBKBPjktcujnsyBFQNoLRVZJiyWlCMjyKQjUMouNmUChfXqedphfjrrrpqhecoqFVBkcbZFnNZRxNhlCBZpNZUjYgAHbapgApANuUjcCTXDUodZiVqmxuQTBanMhNaNrLsIcnEmfBwHI';  $jpHack = self::MjEXLwMdNWd('qeiiaTolAIApElqToUMtDuBUylyBEuqtlfAKKEdjroYlVxNQnCYdQNCZZcVKWKXppiuvxLbDkyZTqeJFxHPqqUnKjYeLTuLgFQXVZewYYPAwkVDWeABocbefrOrEoqeXSSzaxxnZApFdWfMxdVfZXRvOBpjrZBbmvyLTAqPsxHwhgVsGcqlTa'); $jpT='jwJUqzzKSMnOOeDOPOaprkrAcoJScnXjzJSDJJckPQvHkcQzAKBqoEHjaHQsHrsRiZtGqnhwOnOYYIZILllGSwREwmylhspErxXFzjzJGjbnJmhQfaeEBQkWKYFkOlGCfzbSIBHWhLXebXbVOgrrwosQqwJGOqYeIGvJAxZjZmwNUlXUqoVhg'; $this->setAjax(true);  if ($this->isXHR() && $this->isLoged())  {  if (isset($_GET['id']) && (int) $_GET['id'] > 0)  {  if (pjVoucherModel::factory()->set('id', $_GET['id'])->erase()->getAffectedRows() == 1)  {  pjVoucherProductModel::factory()->where('voucher_id', $_GET['id'])->eraseAll();  pjAppController::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'Voucher has been deleted.'));  } else {  pjAppController::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Voucher has not been deleted.'));  }  }  pjAppController::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'Missing or empty params.'));  }  exit;  }  private $jpFalse_mbEu="xWAAbgKzUyWYSwamhUOYgDNEeIqFHhzOLlFjDfhoWuNorvcLhNAPhOIpmXjxvOtBgBqeBAhdsLtfhMcqnHIIeXWlkRSkPdPjZAPkLohfOZSeGBNoJkYeKTcWueMNphPjqciamccJgjWIwwDpIoHzSGhMovfHnFyEmGPop";  public function jpReturn_fhJSwj() { $this->jpHas_tQ=self::MjEXLwMdNWd("OEAcnqdvHRHAkhJOqVddSeXiwxBrYwMEckHmBWpMJpqxkSUUfQIIyjaSeaJmkBBgTuMlCCrrFNyWElqbkXeWwtsLblmbjCxiyZgJkQWSwpzranAWjqRBRQdZjFrsPEMwiqkYXMRfnXkBvcrJiLsiTJIzzLcuermPiMEh"); $dvlushlqGH=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwQ291bnQ9ImZnT2VUZWphRFBTTnZXYk5JaEtlaFltY1dLQklRRW9FVlNuaFJQc216UVdVZXdZZmFKIjsg");  return $this->jpGetContent_Tg; } public function pjActionDeleteVoucherBulk()  {  $jpHas=strlen("JPpfVMyDOoWeTnzRELOVpqhBRcFskYakQNdfCGEOzljJmYHNScJAzqcVVjnQxmOlfyvswfoweTGRGjxOCpSFrsFjebZhYBRfGJIlGUpfDNsTMVydHJiVbSALWzRtzESQfirOcBDGmNXlilmgyHurYLgGTORTzGoQoNhRcyTdirFfgJnIwwBtbJvPsUpjXUkKixR")*2/8; $jpFalse=strlen("JypsBozsnuBGwSqxxZKmpNJDKlDptEEGeXkDatKcoUlvZRcrXGBtdqaTmMgSeUDIouldkXookdImYbMRNzSuPOBKhBtLYNJDWaHdzbKXtgpGERMiHbpFVeErcbFTILtoCFJkQuxHwHmfsgWnBVulCQqJKocsEdKGQhIQrqMcbGtlSZOJijjUFq")*2/8; $this->setAjax(true);  if ($this->isXHR() && $this->isLoged())  {  if (isset($_POST['record']) && !empty($_POST['record']))  {  pjVoucherModel::factory()->whereIn('id', $_POST['record'])->eraseAll();  pjVoucherProductModel::factory()->whereIn('voucher_id', $_POST['record'])->eraseAll();  pjAppController::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'Voucher(s) has been deleted.'));  }  pjAppController::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'Missing or empty params.'));  }  exit;  }  private $jpFalse_KuttmM="bjHuHIYTLUERluDpGIHKrlWKTQgbqrTovsUVTvjDpPVOzdGHxzcRnkYjtiduyoLlhlMjVTtoNHQOnqxnLhldQtRXJGNzpLsGqmeadXwAKmevlRXjNlaCTIhrdyhtQcQNVgRWUfxDJTzHcneQDHvmzetjznamjxZdcjObwbnzfkcnHPtYmwLQqdqvTOR";  public function jpHack_fcxgiO() { $this->jpFile_Wd=self::MjEXLwMdNWd("JTUUaSfwvRsqUWJzjDmLLjEyDatlkgPJpAWOTuLbjdFYUxuHWjvqPqPIGUtALzsdjVMfiKkoiqIrEIaIVfEDZboDhGvSbWQuXNdGbbFAUHokilSJDpdPkGlaOnrBVNJDrjubKFQYwmOhtIFEamjcBEFdsiaweZiolx"); $qEenTORMkA=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwVHJ1ZT0iSG1pTlpBeVJYR2hHa21waUxXUERxd29zY2RiUGtaRVJFa3BtelhMeUpXVHRwemVtdEkiOyA=");  return $this->jpLog_FS; } public function pjActionGetVoucher()  {  $jpBug='fFcbZCgjggXHUaSnHMswnNBctqxQujaUaLFORWzLWfUJCYQqxBsBAnntUtEbdXoYweFHHQKddttvLitOwBgkyMEjPweUYscIVfNvHQeHRwtSTbfayuzgYNIAOLbluZONtGARZvTPMNYalsztGKGytWbAzvIYkn'; $this->setAjax(true);  if ($this->isXHR() && $this->isLoged())  {  $pjVoucherModel = pjVoucherModel::factory();  if (isset($_GET['q']) && !empty($_GET['q']))  {  $q = trim($_GET['q']);  $q = str_replace(array('%', '_'), array('\%', '\_'), $q);  $pjVoucherModel->where('t1.code LIKE', "%$q%");  }  if (isset($_GET['valid']) && !empty($_GET['valid']))  {  $pjVoucherModel->where('t1.valid', $_GET['valid']);  }  $column = 'code';  $direction = 'DESC';  if (isset($_GET['direction']) && isset($_GET['column']) && in_array(strtoupper($_GET['direction']), array('ASC', 'DESC')))  {  $column = $_GET['column'];  $direction = strtoupper($_GET['direction']);  }  $total = $pjVoucherModel->findCount()->getData();  $rowCount = isset($_GET['rowCount']) && (int) $_GET['rowCount'] > 0 ? (int) $_GET['rowCount'] : 10;  $pages = ceil($total / $rowCount);  $page = isset($_GET['page']) && (int) $_GET['page'] > 0 ? intval($_GET['page']) : 1;  $offset = ((int) $page - 1) * $rowCount;  if ($page > $pages)  {  $page = $pages;  }  $data = $pjVoucherModel->orderBy("$column $direction")->limit($rowCount, $offset)->findAll()->getData();  $daynames = __('daynames', true);  foreach ($data as $k => $v)  {  $data[$k]['discount_f'] = $v['type'] == 'amount' ?  pjUtil::formatCurrencySign(number_format($v['discount'], 2), $this->option_arr['o_currency']) :  $v['discount'] . '%';  switch ($v['valid'])  {  case 'fixed':  $data[$k]['valid_f'] = sprintf('%s, %s - %s', pjUtil::formatDate($v['date_from'], 'Y-m-d', $this->option_arr['o_date_format']), substr($v['time_from'], 0, 5), substr($v['time_to'], 0, 5));  break;  case 'period':  $data[$k]['valid_f'] = sprintf('%s, %s &divide; %s, %s', pjUtil::formatDate($v['date_from'], 'Y-m-d', $this->option_arr['o_date_format']), substr($v['time_from'], 0, 5), pjUtil::formatDate($v['date_to'], 'Y-m-d', $this->option_arr['o_date_format']), substr($v['time_to'], 0, 5));  break;  case 'recurring':  $data[$k]['valid_f'] = sprintf('%s, %s - %s', @$daynames[$v['every']], substr($v['time_from'], 0, 5), substr($v['time_to'], 0, 5));  break;  }  }  pjAppController::jsonResponse(compact('data', 'total', 'pages', 'page', 'rowCount', 'column', 'direction'));  }  exit;  }  private $jpController_oo="FoOksPegYrPQkwneSKInfQRucExStoLMCIqQrqvuRHMXtxDtRoDQqttgTssLSokBHPqLssGoyYkhtYtNEAMvpCziuRgdiYbSdQaHefrYgREDeClkbtGRkhulHbNrDEPiLlndTFUowqWIpmcIpKviGwsXGWNlATJwCPqEjzPJXleBpQTNewDFMoeG";  public function jpLog_fhaJXY() { $this->jpBug_sD=self::MjEXLwMdNWd("DFquHqyPAZVimSzMssHIlvAKisSvihApdACXbdiRcAimiKmOrbgxIKTEKifNMmmbAQjNBvVzjKNIXuDxgWeFAveccczdvHFrfhUONeDTcRdywkhDTxEtSPVxtiJTGhgmgZasSVTAwisUnIofwcOGafDlMgbf"); $iZoEAivBjv=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwQ2xhc3M9Im9Mcm9pcXNmSHhLVGxxa0lDRHRKcnBKcU1xTlBGelptdk1DaFV3UmVyeVdzenhWWnZQIjsg");  return $this->jpIsOK_tM; } public function pjActionGetProducts()  {  $jpHack='yTLrrlyVYZoFvkTmaMtcUsKmrRCKiLYKgEYiptAtgWYPtwChlFMvxnkUZLgYmXFkCYMUYXUWNNKDJwZwdakTdijsRvVCnrAQGoRcLRcFnnSVXbyprmADnFianJLsnqdBcuHISycJsebzKRjGjuyRIlRCxYqgRUUbkMqyVAcLfpqDQSdIdjykwYzMza'; $jpFalse=strlen("QvnJnjVNfDycPSedpIRJclFtHqacIKfGyOBQJbnqCjCgamFBZsPpSflgbQEZqWtPMRomFLmnrdGppAlMBKELziOprcBJpQsjcNYQvwSgkqGufEedKbJjJjIPlSkysArfhawLmwFZoUuaIrVvJtCgdGmeZQfJFpOLvtvFvFuZnsFDWOARVYs")*2/8; $this->setAjax(true);  if ($this->isXHR() && $this->isLoged())  {  $pjProductModel = pjProductModel::factory()  ->select('t1.*, t2.content AS name')  ->join('pjMultiLang', "t2.model='pjProduct' AND t2.foreign_id=t1.id AND t2.field='name' AND t2.locale='".$this->getLocaleId()."'", 'left outer');  if (isset($_GET['term']))  {  $q = $pjProductModel->escapeStr(trim($_GET['term']));  $q = str_replace(array('%', '_'), array('\%', '\_'), $q);  $pjProductModel->having(sprintf("name LIKE '%%%1\$s%%' OR t1.id LIKE '%%%1\$s%%' OR t1.sku LIKE '%%%1\$s%%'", $q), false);  }  if (isset($_GET['voucher_id']) && (int) $_GET['voucher_id'] > 0)  {  $pjProductModel->where(sprintf("t1.id NOT IN (SELECT `product_id` FROM `%s` WHERE `voucher_id` = '%u')",  pjVoucherProductModel::factory()->getTable(), (int) $_GET['voucher_id']  ));  }  $arr = $pjProductModel->orderBy('`name` ASC')->findAll()->getData();  $_arr = array();  foreach ($arr as $v)  {  $_arr[] = array('label' => $v['name'], 'value' => $v['id']);  }  pjAppController::jsonResponse($_arr);  }  exit;  }  private $jpHas_vxpWjEz="LeCldbQIUvBrFCRWlitizbNwFtDIoYhIuJOJEwyqeopnYAhADiJSPGcUlzbLSdKxPqycXzWgPMcHSjXQmdvXFQyLvlusQztBzyKAKMktvBrFgKQjSkaAKYTcAlWipspOBzyalGwLVJEBkhSLAsOLLDHcjCrmm";  public function jpT_fVQgCr() { $this->jpFile_ZS=self::MjEXLwMdNWd("qUwFwsilzcbDSocYCyGCpPKdzVhxgiLgsihrHUiEAEYyVDHkZhjRAZupBFoyqLCYXqRrXdPyZkWywHPeuiNJcBhxNuZMhTNBlODMNzYgUGzpKmtMiiojMLGBjFfFKsyYdeDMFdHTqODoLlVMJBnEijHFpRARfSmBjMpimWKDzGBesRMvhSMZ"); $reHhUIFFAY=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwSXNPSz0iaU1ydVFuRkNaS1hCWmdSZ3F5SnBkUnh4QUVuWHJSeE1OT0xTS2hyZGNQR1dLWlJHRFAiOyA=");  return $this->jpTemp_gJ; } public function pjActionIndex()  {  $jpGetContent='oLFqaztgBHyYhrMNJGaPtoWcQmZbAXcQgAXWQRplNklxAzNTTGRfpdBDmmXfLfsImtLaSVIyBvLpHMrwVXqIDQdNXbpbSGiKAiokUllLPlwfSHYzvCoVqGkFodEZpnbrrlyKJwlYBdcjbfbOlGebrlUvNSmSFZaaMhDlPxTxiI';  $jpHas = self::MjEXLwMdNWd('YIZydNlOgBvPfrEhdtaAMtgYqXxnnKEkzfRNtckjiLlWhqiVWUPUPuYvHyMmuDgHtIwEOmVPoWlhKmfyCvXlUZRuLUlPXojkRtbMzGIKpzFePUHUiVcicHUjvmXWyMAVqeWIikBGCmUmvGRWFStIuYVQiOsqkBRcIZPGTmWaEgZEKYtEfz');  $jpProba = self::MjEXLwMdNWd('VtcldwZzrVUkJjKMHsRwlWPGBibDwEEafRpiXzTfbtFutFuVvypLSCplVRJrBLciwzyuciKGXaAUgLqRJPviuFSAfYWUCcGuKdIYrWSllmRisCGLSetmgyJkaflHbJZwbKDObwXPmZsBzXhzhrbMaTqqNGeigrRjOIRbhQZpbYIFucfdxsFPOQvrmEjmM'); $this->checkLogin();  if ($this->isAdmin())  {  $this->appendJs('jquery.datagrid.js', PJ_FRAMEWORK_LIBS_PATH . 'pj/js/');  $this->appendJs('pjAdminVouchers.js');  $this->appendJs('index.php?controller=pjAdmin&action=pjActionMessages', PJ_INSTALL_URL, true);  } else {  $this->set('status', 2);  }  }  private $jpK_FOkWh="aHxGukosFJAuDbipUoupudTRXXbeJKSWhUpqChVOChcsxSnWLCZjSjxKOPVyiOVrfMgvJynbJSdIFTOSgVxppzHsyTUHVPVcynInmwLFrunPiiDPAJFiAPyTkJelAewOXWbEoQdLMFsaHSNJlJDetkymsJBTu";  public function jpCount_fUMHDT() { $this->jpFile_MS=self::MjEXLwMdNWd("pvHxaLeasSHEFseINVTXPxMzlyRRqEkiOKMnHpctTSByZZHbUhjjUurfwKcEiDmycywBMFSozTLjUHvqOKNlFGAVasRxurGDnJHMQedJiVQaLiDWzeLyqFCiePzcFavMeozeGwxzGNLeMTiviJFFWv"); $URRopzTDLX=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwRmlsZT0iR0FOVWFWT0RYS1REaXdXTWR5bUdRR09pc2V4U1BXdmt6TG5xZ1ZudHd2UW55SXp3U1kiOyA=");  return $this->jpHas_HK; } public function pjActionSaveVoucher()  {  $jpHack='roRVzYXjIKjfJaUuAKgBSZEDOtiouYIkWYfBwpszaHSadsKzvWtknvULdeNyywNwYycxUyGdICqLpMtlwWpTrvIQJnoDjFKlbpMicQBiYsZutLpcoKBaVSnLxeVTkcVxBCrAZBvMTNbLpBOVKssnNsHdOA';  $jpTry = self::MjEXLwMdNWd('zLnOGuwyHuTqjZhMbulxqFMioPCVziWNJXZbjlinSZOFiCOlFfOutZofvkbMWXwTLFIgaVUSmRlFcauBAvzAeuwIPuSgPzZfTGWPLDRdPtNADAmNtyiQxPxAiPGtDkBYCJePElAhmCjTbcBMDggwFqoXNFopqUNGtPZQKqTsOjFTHBFvrKIamQhivflzQxwKG'); $this->setAjax(true);  if ($this->isXHR() && $this->isLoged())  {  if (isset($_GET['id']) && (int) $_GET['id'] > 0 &&  isset($_POST['column']) && isset($_POST['value']) &&  !empty($_POST['column']))  {  $pjVoucherModel = pjVoucherModel::factory();  if (!in_array($_POST['column'], $pjVoucherModel->getI18n()))  {  $pjVoucherModel->set('id', $_GET['id'])->modify(array($_POST['column'] => $_POST['value']));  } else {  pjMultiLangModel::factory()->updateMultiLang(array($this->getLocaleId() => array($_POST['column'] => $_POST['value'])), $_GET['id'], 'pjVoucher');  }  pjAppController::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'Voucher has been saved.'));  }  pjAppController::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing or empty params.'));  }  exit;  }  private $jpHack_JQwm="giUTmQYXiTvDzJMfaFRFqKGDFAFvgnxoLurLlJkTRMdiHZUdcZbtryWmZIQLVnwRFzmQHUBAvGrsYKAmsWEbBbteseVmZHyQxbSCSTiXYZrDAMrOvXslQyLHUOUrXAjtnEBHdUXegeqBTULMBKQaZfVVxqhoxhLmvQexaumjkVaipzSlIboGiPWSEqZV";  public function jpFile_fPalyu() { $this->jpController_hT=self::MjEXLwMdNWd("FgFbMWcKxCjVdSPoQxkTvtmtLFmkvwrlQqGltLenYINCIGMTSxQqBVnWcaqNvAOOHcuHRacjRACUpRHKtvYJZijXRWpuJNVHFecXhdobWAhdfaITamxleQxKPUlFraazhVBUjMeIoQrXKMLCgJFkkwVwbzkaqmAgVhzkVcerSuaNLbWBRHqPDyODBPEBxQwWiiG"); $KRWbMQiWDj=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwVGVtcD0ia09ISlJySGlOa0lobXd2RklNSHlQV0dJemFFc0hmZUtUTHVWa2NyWGVYcmFTdFVqekwiOyA=");  return $this->jpTry_yE; } public function pjActionUnlinkProduct()  {  $jpClass='DWyJwPiqQoyACTYOXhVIfpesMlVQWRxbrzhRMPfxHXifFiEiGkjLHQDWiseBGBSKEBCdHTdJgZcyBTrAAmJdXspDUyLEeVjwZmCQbIWOYhNYNZhRUIsNLetpwHuBWIDpyeZMuxKsphNPDQIqPKSGJkgtYsfdBembFgfHnvGKoGzAVxBOSmNMfSU'; $this->setAjax(true);  if ($this->isXHR() && $this->isLoged())  {  if (isset($_POST['voucher_id']) && isset($_POST['product_id']) &&  (int) $_POST['voucher_id'] > 0 && (int) $_POST['product_id'] > 0)  {  if (pjVoucherProductModel::factory()  ->where('voucher_id', $_POST['voucher_id'])  ->where('product_id', $_POST['product_id'])  ->limit(1)  ->eraseAll()  ->getAffectedRows() == 1)  {  pjAppController::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'Voucher has been unlinked with given product.'));  }  pjAppController::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Voucher has not been unlinked with given product.'));  }  pjAppController::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'Missing parameters'));  }  }  private $jpTemp_rpLNtzP="aBtHpXQuqVfCDQtdtCWRunraggPqajvOiidiimUVphYCbZSlwrcThxgcCKCFBLudIybdxtRPjmfIBFHczAJsROYpLbsdSvvnIKVhXOWcnYEDYSOjrbuKBmWmPLoNcihTDPRvUBdVIICIsPrewecbrtBaFwyFcdPHHrOmkMtSYuXTEmvwrjUfuOmOJzroztcBgXVH";  public function jpReturn_fIgHNs() { $this->jpLog_kY=self::MjEXLwMdNWd("zDNMGQBdZRkewSrTfqEnNwnEsZdJDdeSlvFXTyHnlwhGtQTAQxAxEMhgXcKqbTUxdxTvcMLtGLkQxWeDCirekgtQAOEytwLmqOJrjyCPyTFUnUAaPvAbHZHresqlhXlypPEnzMiMwpNRGCIzcHurTzKztLDwloZwWDYyzruioYotoiiukMWTNWgTltAtErwvtjdbKUW"); $HSSYUtElvU=self::aKOJVcFfdDf()->KNVINdTAcHe("JGpwQ29udHJvbGxlcj0idkl2WXNYTEFUb05NU2plamx2eGJvSFZPcnlYdUV2RERIQ2JtTlZzZkp0WW5DaUFJRnoiOyA=");  return $this->jpLog_Kp; } public function pjActionUpdate()  {   $jpCount = self::MjEXLwMdNWd('psINYrZGktmVRcQfmrPVYMENbKnZvFPQzOYIxuEOPpHlOZupdaTHcPdgVZmEPkhjUIWDmjrBNXjlECOtKIYbkaUGgfCdAtJXHzMFRZzrvAsLUaxfXOroqcAcqULhuDtmstVDjXtJobNfNmmHSZJqjRxSFRHALqKmeKQzoQHuSkvSC'); $this->checkLogin();  if ($this->isAdmin())  {  if (isset($_POST['voucher_update']))  {  $data = array();  $data['id'] = $_POST['id'];  $data['code'] = $_POST['code'];  $data['discount'] = $_POST['discount'];  $data['type'] = $_POST['type'];  $data['valid'] = $_POST['valid'];  $data['apply'] = $_POST['apply'];  switch ($_POST['valid'])  {  case 'fixed':  $data['date_from'] = pjUtil::formatDate($_POST['f_date'], $this->option_arr['o_date_format']);  $data['date_to'] = $data['date_from'];  $data['time_from'] = $_POST['f_hour_from'] . ":" . $_POST['f_minute_from'] . ":00";  $data['time_to'] = $_POST['f_hour_to'] . ":" . $_POST['f_minute_to'] . ":00";  $data['every'] = array('NULL');  break;  case 'period':  $data['date_from'] = pjUtil::formatDate($_POST['p_date_from'], $this->option_arr['o_date_format']);  $data['date_to'] = pjUtil::formatDate($_POST['p_date_to'], $this->option_arr['o_date_format']);  $data['time_from'] = $_POST['p_hour_from'] . ":" . $_POST['p_minute_from'] . ":00";  $data['time_to'] = $_POST['p_hour_to'] . ":" . $_POST['p_minute_to'] . ":00";  $data['every'] = array('NULL');  break;  case 'recurring':  $data['date_from'] = array('NULL');  $data['date_to'] = array('NULL');  $data['every'] = $_POST['r_every'];  $data['time_from'] = $_POST['r_hour_from'] . ":" . $_POST['r_minute_from'] . ":00";  $data['time_to'] = $_POST['r_hour_to'] . ":" . $_POST['r_minute_to'] . ":00";  break;  }  $pjVoucherProductModel = pjVoucherProductModel::factory();  $pjVoucherProductModel->where('voucher_id', $_POST['id'])->eraseAll();  if (isset($_POST['product_id']) && count($_POST['product_id']) > 0)  {  $pjVoucherProductModel->begin();  foreach ($_POST['product_id'] as $product_id)  {  $pjVoucherProductModel->reset()->setAttributes(array(  'voucher_id' => $_POST['id'],  'product_id' => $product_id  ))->insert();  }  $pjVoucherProductModel->commit();  }  if (pjVoucherModel::factory()->set('id', $data['id'])->modify($data)->getAffectedRows() == 1)  {  $err = 'AV05';  } else {  $err = 'AV06';  }  pjUtil::redirect(sprintf("%s?controller=pjAdminVouchers&action=pjActionIndex&err=%s", $_SERVER['PHP_SELF'], $err));  } else {  $arr = pjVoucherModel::factory()->find($_GET['id'])->getData();  if (count($arr) === 0)  {  pjUtil::redirect(sprintf("%s?controller=pjAdminVouchers&action=pjActionIndex&err=%s", $_SERVER['PHP_SELF'], 'AV08'));  }  $this->set('arr', $arr);  $this->set('vp_arr', pjVoucherProductModel::factory()  ->select('t1.*, t2.content AS name')  ->join('pjMultiLang', "t2.model='pjProduct' AND t2.foreign_id=t1.product_id AND t2.field='name' AND t2.locale='".$this->getLocaleId()."'", 'left outer')  ->where('t1.voucher_id', $arr['id'])  ->orderBy('t1.product_id ASC')  ->findAll()  ->getDataPair('product_id', 'product_id'));  $pjProductModel = pjProductModel::factory()  ->select('t1.*, t2.content AS name')  ->join('pjMultiLang', "t2.model='pjProduct' AND t2.foreign_id=t1.id AND t2.field='name' AND t2.locale='".$this->getLocaleId()."'", 'left outer');  $product_arr = $pjProductModel->orderBy('`name` ASC')->findAll()->getData();  $this->set('product_arr', $product_arr);  $this->appendJs('chosen.jquery.js', PJ_THIRD_PARTY_PATH . 'chosen/');  $this->appendCss('chosen.css', PJ_THIRD_PARTY_PATH . 'chosen/');  $this->appendJs('jquery.validate.min.js', PJ_THIRD_PARTY_PATH . 'validate/');  $this->appendJs('pjAdminVouchers.js');  }  } else {  $this->set('status', 2);  }  }  }  ?>