<?php
	if(ISSET($_POST['save_d'])){
		$tooth = $_POST['tooth'];
		$date = date("Y-m-d", strtotime("+8 HOURS"));
		$dentist = $_POST['dentist'];
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M", strtotime("+8 HOURS"));
		$year = date("Y", strtotime("+8 HOURS"));
		$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysql_error());
		$conn->query("INSERT INTO `dental` VALUES('', '$date', '$dentist', '$tooth', '$itr_no', '$user_id', '$month', '$year')") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[itr_no]' && `section` = 'Dental' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_dental_record.php");
		$conn->close();
	}
	if(ISSET($_POST['save_f'])){
		$q = $conn->query("SELECT * FROM `complaints` WHERE `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		$f = $q->fetch_array();
		$requested_by = $_POST['requested_by'];
		$date_of_request = date("Y-m-d", strtotime($f['date']));
		$color = $_POST['color'];
		$consistency = $_POST['consistency'];
		$occult_blood = $_POST['occult_blood'];
		$others_chem = $_POST['others_chem'];
		$pus_cells = $_POST['pus_cells'];
		$rbc = $_POST['rbc'];
		$fat_globules = $_POST['fat_globules'];
		$ova = $_POST['ova'];
		$larva = $_POST['larva'];
		$adult_forms = $_POST['adult_forms'];
		$cyst = $_POST['cyst'];
		$trophozoites = $_POST['trophozoites'];
		$others_pro = $_POST['others_pro'];
		$remarks = $_POST['remarks'];
		$date_reported = date("Y-m-d", strtotime("+8 HOURS"));
		$pathologist = $_POST['pathologist'];
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M", strtotime("+8 HOURS"));
		$year = date("Y", strtotime("+8 HOURS"));
		$medical_technologist = $_POST['medical_technologist'];
		$conn = new mysqli("localhost", 'root', '', 'hcpms') or die(mysqli_error());
		$conn->query("INSERT INTO `fecalisys` VALUES('', '$date_of_request', '$requested_by', '$color', '$consistency', '$pus_cells', '$rbc', '$fat_globules', '$occult_blood', '$others_chem', '$ova', '$larva', '$adult_forms', '$cyst', '$trophozoites', '$others_pro', '$remarks', '$date_reported', '$pathologist', '$medical_technologist', '$itr_no', '$user_id', '$month', '$year')") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[itr_no]' && `section` = 'Fecalysis' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_fecalysis_record.php");
		$conn->close();
	}
	if(ISSET($_POST['save_h'])){
		$date_requested = date("Y-m-d", strtotime($_POST['date_requested']));
		$requested_by = $_POST['requested_by'];
		$hemoglobin = $_POST['hemoglobin'];
		$hematocrit = $_POST['hematocrit'];
		$rbc_count = $_POST['rbc_count'];
		$wbc_count = $_POST['wbc_count'];
		$neutrophil = $_POST['neutrophil'];
		$segmenters = $_POST['segmenters'];
		$stabs = $_POST['stabs'];
		$lymphocytes = $_POST['lymphocytes'];
		$monocyte = $_POST['monocyte'];
		$eosinophil = $_POST['eosinophil'];
		$basophil = $_POST['basophil'];
		$total = $_POST['total'];
		$platelet = $_POST['platelet'];
		$bleeding_time = $_POST['bleeding_time'];
		$clotting_time = $_POST['clotting_time'];
		$abo_group = $_POST['abo_group'];
		$rh_group = $_POST['rh_group'];
		$remarks = $_POST['remarks'];
		$pathologist = $_POST['pathologist'];
		$medical_technologist = $_POST['medical_technologist'];
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M", strtotime("+8 HOURS"));
		$year = date("Y", strtotime("+8 HOURS"));
		$conn = new mysqli("localhost", 'root', '', 'hcpms') or die(mysqli_error());
		$conn->query("INSERT INTO `hematology` VALUES('', '$date_requested', '$requested_by', '$hemoglobin', '$hematocrit', '$rbc_count', '$wbc_count', '$platelet', '$bleeding_time', '$clotting_time', '$neutrophil', '$segmenters', '$stabs', '$lymphocytes', '$monocyte', '$eosinophil', '$basophil', '$total', '$abo_group', '$rh_group', '$remarks', '$pathologist', '$medical_technologist', '$itr_no', '$user_id', '$month', '$year')") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[itr_no]' && `section` = 'Hematology' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_hematology_record.php");
		$conn->close();
	}
	if(ISSET($_POST['save_u'])){
		$date_of_request = $_POST['date_of_request'];
		$color = $_POST['color'];
		$transparency = $_POST['transparency'];
		$specific_gravity = $_POST['specific_gravity'];
		$ph = $_POST['ph'];
		$sugar = $_POST['sugar'];
		$protein = $_POST['protein'];
		$pregnacy_test = $_POST['pregnancy_test'];
		$pus_cells = $_POST['pus_cells'];
		$rbc = $_POST['rbc'];
		$cast = $_POST['cast'];
		$urates = $_POST['urates'];
		$uric_acid = $_POST['uric_acid'];
		$cal_ox = $_POST['cal_ox'];
		$epith_cells = $_POST['epith_cells'];
		$mucus_threads = $_POST['mucus_threads'];
		$others = $_POST['others'];
		$pathologist = $_POST['pathologist'];
		$medical_technologist = $_POST['medical_technologist'];
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M", strtotime("+8 HOURS"));
		$year = date("Y", strtotime("+8 HOURS"));
		$conn = new mysqli("localhost", 'root', '', 'hcpms') or die(mysqli_error());
		$conn->query("INSERT INTO `urinalysis` VALUES('', '$date_of_request', '$color', '$transparency', '$specific_gravity', '$ph', '$sugar', '$protein', '$pregnacy_test', '$pus_cells', '$rbc', '$cast', '$urates', '$uric_acid', '$cal_ox', '$epith_cells', '$mucus_threads', '$others', '$pathologist', '$medical_technologist', '$itr_no', '$user_id', '$month', '$year')") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[itr_no]' && `section` = 'Urinalysis' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_urinalysis_record.php");
		$conn->close();
	}
	if(ISSET($_POST['save_r'])){
		$diagnosis = $_POST['diagnosis'];
		$type_of_disability = $_POST['type_of_disability'];
		$subjective = $_POST['subjective'];
		$objective = $_POST['objective'];
		$assessment = $_POST['assessment'];
		$plan = $_POST['plan'];
		$date = date('m/d/Y', strtotime('+8 HOURS'));
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M", strtotime("+8 HOURS"));
		$year = date("Y", strtotime("+8 HOURS"));
		$conn = new mysqli("localhost", 'root', '', 'hcpms') or die(mysqli_error());
		$conn->query("INSERT INTO `rehabilitation` VALUES('', '$diagnosis', '$type_of_disability', '$subjective', '$objective', '$assessment', '$plan', '$date', '$itr_no', '$user_id', '$month', '$year')") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[itr_no]' && `section` = 'Rehabilitation' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_rehabilitation_record.php");
		$conn->close();
	}
	if(ISSET($_POST['save_s'])){
		$name_of_collection_unit = $_POST['name_of_collection_unit'];
		$date_of_submission = date("Y-m-d", strtotime("+8 HOURS"));
		$disease_classification = $_POST['disease_classification'];
		$site = $_POST['site'];
		$reason_for_examination = $_POST['reason_for_examination'];
		$case_no = $_POST['case_no'];
		$specimen1 = $_POST['specimen1'];
		$specimen2 = $_POST['specimen2'];
		$specimen3 = $_POST['specimen3'];
		$date_of_collection1 = date("Y-m-d", strtotime($_POST['date_of_collection1']));
		$date_of_collection2 = date("Y-m-d", strtotime($_POST['date_of_collection2']));
		$date_of_collection3 = date("Y-m-d", strtotime($_POST['date_of_collection3']));
		$specimen_collector = $_POST['specimen_collector'];
		$remarks = $_POST['remarks'];
		$lab_serial_no1 = $_POST['lab_serial_no1'];
		$lab_serial_no2 = $_POST['lab_serial_no2'];
		$lab_serial_no3 = $_POST['lab_serial_no3'];
		$specimen_1 = $_POST['specimen_1'];
		$specimen_2 = $_POST['specimen_2'];
		$specimen_3 = $_POST['specimen_3'];
		$visual_appearance1 = $_POST['visual_appearance1'];
		$visual_appearance2 = $_POST['visual_appearance2'];
		$visual_appearance3 = $_POST['visual_appearance3'];
		$reading = $_POST['reading'];
		$date_of_examination = date("Y-m-d", strtotime($_POST['date_of_examination']));
		$examined_by = $_POST['examined_by'];
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M", strtotime("+8 HOURS"));
		$year = date("Y", strtotime("+8 HOURS"));
		$conn = new mysqli("localhost", 'root', '', 'hcpms') or die(mysqli_error());
		$conn->query("INSERT INTO `sputum` VALUES('', '$name_of_collection_unit', '$date_of_submission', '$disease_classification', '$site', '$reason_for_examination', '$case_no', '$specimen1', '$specimen2', '$specimen3', '$date_of_collection1', '$date_of_collection2', '$date_of_collection3', '$specimen_collector', '$remarks', '$lab_serial_no1', '$lab_serial_no2', '$lab_serial_no3', '$specimen_1', '$specimen_2', '$specimen_3', '$visual_appearance1', '$visual_appearance2', '$visual_appearance3', '$reading', '$date_of_examination', '$examined_by', '$itr_no', '$user_id', '$month', '$year')") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[itr_no]' && `section` = 'Sputum' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_sputum_record.php");
		$conn->close();
	}
	if(ISSET($_POST['save_x'])){
		$case_no = $_POST['case_no'];
		$referred_by = $_POST['referred_by'];
		$clinical_impression = $_POST['clinical_impression'];
		$room_bed_no = $_POST['room_bed_no'];
		$type_of_examination = $_POST['type_of_examination'];
		$date_taken = date('Y-m-d', strtotime('+8 HOURS'));
		$radiologist = $_POST['radiologist'];
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M", strtotime("+8 HOURS"));
		$year = date("Y", strtotime("+8 HOURS"));
		$conn = new mysqli("localhost", 'root', '', 'hcpms') or die(mysqli_error());
		$conn->query("INSERT INTO `radiological` VALUES('', '$case_no', '$referred_by', '$clinical_impression', '$room_bed_no', '$type_of_examination', '$date_taken', '$radiologist', '$itr_no', '$user_id', '$month', '$year')") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[itr_no]' && `section` = 'Xray' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_xray_record.php");
		$conn->close();
	}
	if(ISSET($_POST['save_p'])){
		$civil_status = $_POST['civil_status'];
		$date = date("Y-m-d", strtotime($_POST['date']));
		$chief_complain = $_POST['chief_complain'];
		$attending_physician = $_POST['attending_physician'];
		$lmp = $_POST['lmp'];
		$ga_by_lmp = $_POST['ga_by_lmp'];
		$edc_by_lmp = $_POST['edc_by_lmp'];
		$fhr = $_POST['fhr'];
		$ga_by_sonar = $_POST['ga_by_sonar'];
		$edc_by_utz = $_POST['edc_by_utz'];
		$pregnancy_age = $_POST['pregnancy_age'];
		$biparietal_diameter = $_POST['biparietal_diameter'];
		$biparietal_diameter_eq = $_POST['biparietal_diameter_eq'];
		$head_circumference = $_POST['head_circumference'];
		$head_circumference_eq = $_POST['head_circumference_eq'];
		$abdominal_circumference = $_POST['abdominal_circumference'];
		$abdominal_circumference_eq = $_POST['abdominal_circumference_eq'];
		$femoral_length =  $_POST['femoral_length'];
		$femoral_length_eq =  $_POST['femoral_length_eq'];
		$crown_rump_length = $_POST['crown_rump_length'];
		$crown_rump_length_eq = $_POST['crown_rump_length_eq'];
		$mean_gest_sac_diameter = $_POST['mean_gest_sac_diameter'];
		$mean_gest_sac_diameter_eq = $_POST['mean_gest_sac_diameter_eq'];
		$average_fetal_weight = $_POST['average_fetal_weight'];
		$gestation = $_POST['gestation'];
		$presentation_lie = $_POST['presentation_lie'];
		$amniotic_fluid = $_POST['amniotic_fluid'];
		$placenta_location = $_POST['placenta_location'];
		$previa = $_POST['previa'];
		$placenta_grade = $_POST['placenta_grade'];
		$fetal_activity = $_POST['fetal_activity'];
		$comments = $_POST['comments'];
		$radiologist = $_POST['radiologist'];
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M", strtotime("+8 HOURS"));
		$year = date("Y", strtotime("+8 HOURS"));
		$conn = new mysqli("localhost", 'root', '', 'hcpms') or die(mysqli_error());
		$conn->query("INSERT INTO `prenatal` VALUES('', '$date', '$chief_complain', '$attending_physician', '$lmp', '$ga_by_lmp', '$edc_by_lmp', '$fhr', '$ga_by_sonar', '$edc_by_utz', '$pregnancy_age', '$biparietal_diameter', '$biparietal_diameter_eq', '$head_circumference', '$head_circumference_eq', '$abdominal_circumference', '$abdominal_circumference_eq', '$femoral_length', '$femoral_length_eq', '$crown_rump_length', '$crown_rump_length_eq', '$mean_gest_sac_diameter', '$mean_gest_sac_diameter_eq', '$average_fetal_weight', '$gestation', '$presentation_lie', '$amniotic_fluid', '$placenta_location', '$previa', '$placenta_grade', '$fetal_activity', '$comments', '$radiologist', '$itr_no', '$user_id', '$month', '$year') ") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[itr_no]' && `section` = 'Prenatal' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_prenatal_record.php");
		$conn->close();
	}
	if(ISSET($_POST['save_patient'])){
		$case_no = $_POST['case_no'];
		$nhts = $_POST['nhts'];
		$contact = $_POST['contact'];
		$philhealth = $_POST['philhealth'];
		$pat_firstname = $_POST['pat_firstname'];
		$pat_middlename = $_POST['pat_middlename'];
		$pat_lastname = $_POST['pat_lastname'];
		$age = $_POST['age'];
		$religion = $_POST['religion'];
		$address = $_POST['address'];
		$occupation = $_POST['occupation'];
		$date_of_birth = $_POST['date_of_birth'];
		$date_of_admission = $_POST['admission_month']."/".$_POST['admission_day']."/".$_POST['admission_year'];
		$time_of_admission = $_POST['time_of_admission'];
		$spouse_firstname = $_POST['spouse_firstname'];
		$spouse_middlename = $_POST['spouse_middlename'];
		$spouse_lastname = $_POST['spouse_lastname'];
		$spouse_age = $_POST['spouse_age'];
		$spouse_religion = $_POST['spouse_religion'];
		$spouse_occupation = $_POST['spouse_occupation'];
		$G = $_POST['g'];
		$T = $_POST['t'];
		$A = $_POST['a'];
		$L = $_POST['l'];
		$lmp = $_POST['lmp'];
		$edc = $_POST['edc'];
		$aog = $_POST['aog'];
		$fetal_position = $_POST['fetal_position'];
		$fh = $_POST['fh'];
		$fhb = $_POST['fhb'];
		$loc = $_POST['loc'];
		$admitting_diagnosis = $_POST['admitting_diagnosis'];
		$midwife = $_POST['midwife'];
		$date_of_delivery = $_POST['delivery_month']."/".$_POST['delivery_day']."/".$_POST['delivery_year'];
		$time1 = $_POST['time1'];
		$sex = $_POST['sex'];
		$wt = $_POST['wt'];
		$baby_firstname = $_POST['baby_firstname'];
		$baby_middlename = $_POST['baby_middlename'];
		$baby_lastname = $_POST['baby_lastname'];
		$hepa = $_POST['hepa'];
		$bcg = $_POST['bcg'];
		$nbs = $_POST['nbs'];
		$date_of_discharge = $_POST['date_month']."/".$_POST['date_day']."/".$_POST['date_year'];
		$time_of_discharge = $_POST['time_of_discharge'];
		$final_diagnosis = $_POST['final_diagnosis'];
		$disposition_on_discharge = $_POST['disposition_on_discharge'];
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M");
		$year = date("Y");
		$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
		$conn->query("INSERT INTO `maternity_patient` VALUES('', '$case_no', '$nhts', '$contact', '$philhealth', '$pat_firstname', '$pat_middlename', '$pat_lastname', '$age', '$religion', '$address', '$occupation', '$date_of_birth', '$date_of_admission', '$time_of_admission', '$spouse_firstname', '$spouse_middlename', '$spouse_lastname', '$spouse_age', '$spouse_religion', '$spouse_occupation', '$G', '$T', '$A', '$L', '$lmp', '$edc', '$aog', '$fetal_position', '$fh', '$fhb', '$loc', '$admitting_diagnosis', '$midwife', '$date_of_delivery', '$time1', '$sex', '$wt', '$baby_firstname', '$baby_middlename', '$baby_lastname', '$hepa', '$bcg', '$nbs', '$date_of_discharge', '$time_of_discharge', '$final_diagnosis', '$disposition_on_discharge', '$itr_no', '$user_id', '$month', '$year')") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[id]' && `section` = 'Maternity' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_birth_record.php");
		$conn->close();
	}
	if(ISSET($_POST['save_birth'])){
		$date = $_POST['date'];
		$time = $_POST['time'];
		$chief_complaint = $_POST['chief_complaint'];
		$history = $_POST['history'];
		$lmp = $_POST['lmp'];
		$edc = $_POST['edc'];
		$aog = $_POST['aog'];
		$g = $_POST['g'];
		$p = $_POST['p'];
		$a = $_POST['1'];
		$b = $_POST['2'];
		$c = $_POST['3'];
		$d = $_POST['4'];
		$bp1 = $_POST['bp1'];
		$bp2 = $_POST['bp2'];
		$pr = $_POST['pr'];
		$rr = $_POST['rr'];
		$t = $_POST['t'];
		$head_neck = $_POST['head_neck'];
		$chest = $_POST['chest'];
		$heart = $_POST['heart'];
		$abdomen = $_POST['abdomen'];
		$fhb = $_POST['fhb'];
		$loc = $_POST['loc'];
		$extremities = $_POST['extremities'];
		$vulva = $_POST['vulva'];
		$vagina = $_POST['vagina'];
		$cervix = $_POST['cervix'];
		$uterus = $_POST['uterus'];
		$bow = $_POST['bow'];
		$presentation = $_POST['presentation'];
		$vaginal_discharge = $_POST['vaginal_discharge'];
		$staff = $_POST['staff'];
		$itr_no = $_POST['itr_no'];
		$user_id = $_POST['user_id'];
		$month = date("M", strtotime("+8 HOURS"));
		$year = date("Y", strtotime("+8 HOURS"));
		$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
		$conn->query("INSERT INTO `birthing` VALUES('', '$date', '$time', '$chief_complaint', '$history', '$lmp', '$edc', '$aog', '$g', '$p', '$a', '$b', '$c', '$d', '$bp1', '$bp2', '$pr', '$rr', '$t', '$head_neck', '$chest', '$heart', '$abdomen', '$fhb', '$loc', '$extremities', '$vulva', '$vagina', '$cervix', '$uterus', '$bow', '$presentation', '$vaginal_discharge', '$staff', '$itr_no', '$user_id', '$month', '$year')") or die(mysqli_error());
		$conn->query("UPDATE `complaints` SET `status` = 'Done' WHERE `itr_no` = '$_GET[itr_no]' && `section` = 'Maternity' && `com_id` = '$_GET[comp_id]'") or die(mysqli_error());
		header("location:view_birthing_record.php");
		$conn->close();
	}	