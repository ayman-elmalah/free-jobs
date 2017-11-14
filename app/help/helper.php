<?php

function job_category() {
  //Show job categories for show page
  return [
    '' => ' قسم الوظيفه ',
    '11' => ' مبرمجين ',
    '12' => ' مصممين جرافيك ',
    '13' => ' شبكات ',
    '14' => ' مراقبين عمال ',
    '15' => ' الدعم الفنى ',
    '16' => ' جيولوجيين ',
    '17' => ' كيميائيين ',
    '18' => ' مدربين ',
    '19' => ' اطباء ',
    '20' => ' مدرسين ',
    '21' => ' مهندسين ديكور ',
    '22' => ' مصورين ',
    '23' => ' صحفيين ',
    '24' => ' مهندسين ',
    '25' => ' محاسبين ',
    '26' => ' محاميين ',
    '27' => ' فنيين ',
    '99' => ' وظائف اخرى ',
  ];
}

function job_experience() {
  //Show experiences for show page
  return [
    '' => ' الخبره المطلوبه ',
    '1' => ' مبتدأ ',
    '2' => ' متوسط ',
    '3' => ' خبير ',
  ];
}

function job_location() {
  //Show loactions for show page
  return [
    "" => " المنطقه ",
    "11" => "القاهره",
    "12" => "الجيزة",
    "13" => "الاسكندريه",
    "14" => "الإسماعيلية",
    "15" => "المنصوره",
    "16" => "أسيوط",
    "17" => "البحيرة",
    "18" => "بني سويف",
    "19" => "بورسعيد",
    "20" => "أسوان",
    "21" => "الدقهلية",
    "22" => "دمياط",
    "23" => "سوهاج",
    "24" => "السويس",
    "25" => "الشرقية",
    "26" => "شمال سيناء",
    "27" => "الغربية",
    "28" => "الفيوم",
    "29" => "القليوبية",
    "30" => "قنا",
    "31" => "كفر الشيخ",
    "32" => "الاقصر",
    "33" => "مطروح",
    "34" => "المنوفية",
    "35" => "المنيا",
    "36" => "الوادي الجديد",
    "37" => "البحر الأحمر",
  ];
}

function job_category_action() {
  //Show job categories for action page, like add
  return [
    '11' => ' مبرمجين ',
    '12' => ' مصممين جرافيك ',
    '13' => ' شبكات ',
    '14' => ' مراقبين عمال ',
    '15' => ' الدعم الفنى ',
    '16' => ' جيولوجيين ',
    '17' => ' كيميائيين ',
    '18' => ' مدربين ',
    '19' => ' اطباء ',
    '20' => ' مدرسين ',
    '21' => ' مهندسين ديكور ',
    '22' => ' مصورين ',
    '23' => ' صحفيين ',
    '24' => ' مهندسين ',
    '25' => ' محاسبين ',
    '26' => ' محاميين ',
    '27' => ' فنيين ',
    '99' => ' وظائف اخرى ',
  ];
}

function job_experience_action() {
  //Show experiences for action page, like add
  return [
    '1' => ' مبتدأ ',
    '2' => ' متوسط ',
    '3' => ' خبير ',
  ];
}

function job_location_action() {
  //Show locations for action page, like add
  return [
    "11" => "القاهره",
    "12" => "الجيزة",
    "13" => "الاسكندريه",
    "14" => "الإسماعيلية",
    "15" => "المنصوره",
    "16" => "أسيوط",
    "17" => "البحيرة",
    "18" => "بني سويف",
    "19" => "بورسعيد",
    "20" => "أسوان",
    "21" => "الدقهلية",
    "22" => "دمياط",
    "23" => "سوهاج",
    "24" => "السويس",
    "25" => "الشرقية",
    "26" => "شمال سيناء",
    "27" => "الغربية",
    "28" => "الفيوم",
    "29" => "القليوبية",
    "30" => "قنا",
    "31" => "كفر الشيخ",
    "32" => "الاقصر",
    "33" => "مطروح",
    "34" => "المنوفية",
    "35" => "المنيا",
    "36" => "الوادي الجديد",
    "37" => "البحر الأحمر",
  ];
}

function messages_view() {
  //Show messages view type for show page
  return [
    '' => ' كل الرسائل ',
    '0' => ' رسائل غير مقروءه ',
    '1' => ' رسائل مقروءه ',
  ];
}

function countAllUnreadMessage() {
  //Count number of unread messages
  $count = \App\Message::where('view', 0)->count();
  return $count == 0 ? 0 : $count;
}

function getLatestUnreadMessage($count = 10) {
  //Get all unread messages
  return \App\Message::where('view', 0)->take($count)->orderBy('id', 'desc')->get();
}

function reports_view() {
  //Show reports view type for show page
  return [
    '' => ' كل الابلاغات ',
    '0' => ' ابلاغ غير مقروء ',
    '1' => ' ابلاغ مقروء ',
  ];
}

function countAllUnreadReports() {
  //Count number of unread reports
  $count = \App\Report::where('view', 0)->count();
  return $count == 0 ? 0 : $count;
}

function getLatestUnreadReports($count = 10) {
  //Get all unread reports
  return \App\Report::where('view', 0)->take($count)->orderBy('id', 'desc')->join('jobs', 'jobs.id', '=', 'reports.job_id')->select('reports.*', 'jobs.title')->get();
}

function showSinceTime($time) {
  //Show since time of publish like since 1 minute, 2 hours, ,,
  if ((time() - strtotime($time)) < 3600) {
    return ' منذ ' . ceil((time() - strtotime($time)) / 60) . ' دقيقه';
  } else if (((time() - strtotime($time)) >= 3600) && ((time() - strtotime($time)) < 86400)) {
    return 'منذ ' . ceil((time() - strtotime($time)) / 3600) . ' ساعه';
  } else {
    return $time;
  }
}
