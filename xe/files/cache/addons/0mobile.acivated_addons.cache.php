<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'ilban' => 1,
'msuda' => 1,
'happy' => 1,
'freeboard' => 1,
'freeepilogue' => 1,
'specialboard' => 1,
'gevent' => 1,
'event' => 1,
'notice' => 1,
'winner' => 1,
'hotnews' => 1,
'epilogue' => 1,
);
$addon_file = './addons/aa_add_vote_list/aa_add_vote_list.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6ODp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjE1OiJvdXRwdXRfcG9zaXRpb24iO3M6MTM6IkFmdGVyRG9jdW1lbnQiO3M6MTU6InByb2ZpbGVfaW1nX3VzZSI7czoyOiJubyI7czoxMDoibGlzdF9jb3VudCI7czoyOiIxNSI7czoxMDoidXNlcl90ZXh0MSI7czoxMDoi7J20IOq4gOydhCI7czoxMDoidXNlcl90ZXh0MiI7czoyNjoi66qF7J20IOy2lOyynO2WiOyKteuLiOuLpC4iO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7czo4OiJtaWRfbGlzdCI7YToxMjp7aTowO3M6NToiaWxiYW4iO2k6MTtzOjU6Im1zdWRhIjtpOjI7czo1OiJoYXBweSI7aTozO3M6OToiZnJlZWJvYXJkIjtpOjQ7czoxMjoiZnJlZWVwaWxvZ3VlIjtpOjU7czoxMjoic3BlY2lhbGJvYXJkIjtpOjY7czo2OiJnZXZlbnQiO2k6NztzOjU6ImV2ZW50IjtpOjg7czo2OiJub3RpY2UiO2k6OTtzOjY6Indpbm5lciI7aToxMDtzOjc6ImhvdG5ld3MiO2k6MTE7czo4OiJlcGlsb2d1ZSI7fX0=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6ODp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjE1OiJvdXRwdXRfcG9zaXRpb24iO3M6MTM6IkFmdGVyRG9jdW1lbnQiO3M6MTU6InByb2ZpbGVfaW1nX3VzZSI7czoyOiJubyI7czoxMDoibGlzdF9jb3VudCI7czoyOiIxNSI7czoxMDoidXNlcl90ZXh0MSI7czoxMDoi7J20IOq4gOydhCI7czoxMDoidXNlcl90ZXh0MiI7czoyNjoi66qF7J20IOy2lOyynO2WiOyKteuLiOuLpC4iO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7czo4OiJtaWRfbGlzdCI7YToxMjp7aTowO3M6NToiaWxiYW4iO2k6MTtzOjU6Im1zdWRhIjtpOjI7czo1OiJoYXBweSI7aTozO3M6OToiZnJlZWJvYXJkIjtpOjQ7czoxMjoiZnJlZWVwaWxvZ3VlIjtpOjU7czoxMjoic3BlY2lhbGJvYXJkIjtpOjY7czo2OiJnZXZlbnQiO2k6NztzOjU6ImV2ZW50IjtpOjg7czo2OiJub3RpY2UiO2k6OTtzOjY6Indpbm5lciI7aToxMDtzOjc6ImhvdG5ld3MiO2k6MTE7czo4OiJlcGlsb2d1ZSI7fX0=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "aa_add_vote_list";
$addon_time_log->called_extension = "aa_add_vote_list";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'ilban' => 1,
'msuda' => 1,
'schedule1s' => 1,
'happy' => 1,
'freeboard' => 1,
'freeepilogue' => 1,
'specialboard' => 1,
'profile1ss' => 1,
'memo' => 1,
'gevent' => 1,
'event' => 1,
'notice' => 1,
'winner' => 1,
'hotnews' => 1,
'epilogue' => 1,
);
$addon_file = './addons/addon_insert_sticker/addon_insert_sticker.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NDp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjIxOiJpbnNlcnRfc3RpY2tlcl9lZGl0b3IiO3M6MzoiYWxsIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTU6e2k6MDtzOjU6ImlsYmFuIjtpOjE7czo1OiJtc3VkYSI7aToyO3M6MTA6InNjaGVkdWxlMXMiO2k6MztzOjU6ImhhcHB5IjtpOjQ7czo5OiJmcmVlYm9hcmQiO2k6NTtzOjEyOiJmcmVlZXBpbG9ndWUiO2k6NjtzOjEyOiJzcGVjaWFsYm9hcmQiO2k6NztzOjEwOiJwcm9maWxlMXNzIjtpOjg7czo0OiJtZW1vIjtpOjk7czo2OiJnZXZlbnQiO2k6MTA7czo1OiJldmVudCI7aToxMTtzOjY6Im5vdGljZSI7aToxMjtzOjY6Indpbm5lciI7aToxMztzOjc6ImhvdG5ld3MiO2k6MTQ7czo4OiJlcGlsb2d1ZSI7fX0=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NDp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjIxOiJpbnNlcnRfc3RpY2tlcl9lZGl0b3IiO3M6MzoiYWxsIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTU6e2k6MDtzOjU6ImlsYmFuIjtpOjE7czo1OiJtc3VkYSI7aToyO3M6MTA6InNjaGVkdWxlMXMiO2k6MztzOjU6ImhhcHB5IjtpOjQ7czo5OiJmcmVlYm9hcmQiO2k6NTtzOjEyOiJmcmVlZXBpbG9ndWUiO2k6NjtzOjEyOiJzcGVjaWFsYm9hcmQiO2k6NztzOjEwOiJwcm9maWxlMXNzIjtpOjg7czo0OiJtZW1vIjtpOjk7czo2OiJnZXZlbnQiO2k6MTA7czo1OiJldmVudCI7aToxMTtzOjY6Im5vdGljZSI7aToxMjtzOjY6Indpbm5lciI7aToxMztzOjc6ImhvdG5ld3MiO2k6MTQ7czo4OiJlcGlsb2d1ZSI7fX0=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "addon_insert_sticker";
$addon_time_log->called_extension = "addon_insert_sticker";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/autolink/autolink.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "autolink";
$addon_time_log->called_extension = "autolink";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/blogapi/blogapi.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "blogapi";
$addon_time_log->called_extension = "blogapi";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
);
$addon_file = './addons/change_nickname/change_nickname.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mjp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO30=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mjp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO30=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "change_nickname";
$addon_time_log->called_extension = "change_nickname";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
);
$addon_file = './addons/comment_new/comment_new.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEyOiJkdXJhdGlvbl9uZXciO3M6MjoiMjQiO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7fQ==')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEyOiJkdXJhdGlvbl9uZXciO3M6MjoiMjQiO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7fQ==')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "comment_new";
$addon_time_log->called_extension = "comment_new";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/counter/counter.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "counter";
$addon_time_log->called_extension = "counter";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/member_communication/member_communication.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6MTp7czo4OiJtaWRfbGlzdCI7czowOiIiO30=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6MTp7czo4OiJtaWRfbGlzdCI7czowOiIiO30=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_communication";
$addon_time_log->called_extension = "member_communication";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
);
$addon_file = './addons/member_pointsend/member_pointsend.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mjp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO30=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mjp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO30=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_pointsend";
$addon_time_log->called_extension = "member_pointsend";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'qna' => 1,
'ilban' => 1,
'msuda' => 1,
'schedule1s' => 1,
'mspecial' => 1,
'happy' => 1,
'freeepilogue' => 1,
'freeboard' => 1,
'specialboard' => 1,
'pointrush' => 1,
'profile1ss' => 1,
'memo' => 1,
'gevent' => 1,
'sosievent' => 1,
'event' => 1,
'eventoff' => 1,
'market' => 1,
'idup' => 1,
'notice' => 1,
'winner' => 1,
'hotnews' => 1,
'main' => 1,
'point_event' => 1,
'epilogue' => 1,
'rockgame' => 1,
'attendance' => 1,
'quizgame' => 1,
);
$addon_file = './addons/message_alarm/message_alarm.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Njp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjQ6Im1vZGUiO3M6Njoiamdyb3dsIjtzOjU6Im1vZGUyIjtzOjc6ImRlZmF1bHQiO3M6OToiamdyb3dsX2pzIjtzOjI6Im5vIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6Mjc6e2k6MDtzOjM6InFuYSI7aToxO3M6NToiaWxiYW4iO2k6MjtzOjU6Im1zdWRhIjtpOjM7czoxMDoic2NoZWR1bGUxcyI7aTo0O3M6ODoibXNwZWNpYWwiO2k6NTtzOjU6ImhhcHB5IjtpOjY7czoxMjoiZnJlZWVwaWxvZ3VlIjtpOjc7czo5OiJmcmVlYm9hcmQiO2k6ODtzOjEyOiJzcGVjaWFsYm9hcmQiO2k6OTtzOjk6InBvaW50cnVzaCI7aToxMDtzOjEwOiJwcm9maWxlMXNzIjtpOjExO3M6NDoibWVtbyI7aToxMjtzOjY6ImdldmVudCI7aToxMztzOjk6InNvc2lldmVudCI7aToxNDtzOjU6ImV2ZW50IjtpOjE1O3M6ODoiZXZlbnRvZmYiO2k6MTY7czo2OiJtYXJrZXQiO2k6MTc7czo0OiJpZHVwIjtpOjE4O3M6Njoibm90aWNlIjtpOjE5O3M6Njoid2lubmVyIjtpOjIwO3M6NzoiaG90bmV3cyI7aToyMTtzOjQ6Im1haW4iO2k6MjI7czoxMToicG9pbnRfZXZlbnQiO2k6MjM7czo4OiJlcGlsb2d1ZSI7aToyNDtzOjg6InJvY2tnYW1lIjtpOjI1O3M6MTA6ImF0dGVuZGFuY2UiO2k6MjY7czo4OiJxdWl6Z2FtZSI7fX0=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Njp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjQ6Im1vZGUiO3M6Njoiamdyb3dsIjtzOjU6Im1vZGUyIjtzOjc6ImRlZmF1bHQiO3M6OToiamdyb3dsX2pzIjtzOjI6Im5vIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6Mjc6e2k6MDtzOjM6InFuYSI7aToxO3M6NToiaWxiYW4iO2k6MjtzOjU6Im1zdWRhIjtpOjM7czoxMDoic2NoZWR1bGUxcyI7aTo0O3M6ODoibXNwZWNpYWwiO2k6NTtzOjU6ImhhcHB5IjtpOjY7czoxMjoiZnJlZWVwaWxvZ3VlIjtpOjc7czo5OiJmcmVlYm9hcmQiO2k6ODtzOjEyOiJzcGVjaWFsYm9hcmQiO2k6OTtzOjk6InBvaW50cnVzaCI7aToxMDtzOjEwOiJwcm9maWxlMXNzIjtpOjExO3M6NDoibWVtbyI7aToxMjtzOjY6ImdldmVudCI7aToxMztzOjk6InNvc2lldmVudCI7aToxNDtzOjU6ImV2ZW50IjtpOjE1O3M6ODoiZXZlbnRvZmYiO2k6MTY7czo2OiJtYXJrZXQiO2k6MTc7czo0OiJpZHVwIjtpOjE4O3M6Njoibm90aWNlIjtpOjE5O3M6Njoid2lubmVyIjtpOjIwO3M6NzoiaG90bmV3cyI7aToyMTtzOjQ6Im1haW4iO2k6MjI7czoxMToicG9pbnRfZXZlbnQiO2k6MjM7czo4OiJlcGlsb2d1ZSI7aToyNDtzOjg6InJvY2tnYW1lIjtpOjI1O3M6MTA6ImF0dGVuZGFuY2UiO2k6MjY7czo4OiJxdWl6Z2FtZSI7fX0=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "message_alarm";
$addon_time_log->called_extension = "message_alarm";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/mobile/mobile.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "mobile";
$addon_time_log->called_extension = "mobile";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
);
$addon_file = './addons/msg_point/msg_point.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjU6InBvaW50IjtzOjM6IjIwMCI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjt9')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjU6InBvaW50IjtzOjM6IjIwMCI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjt9')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "msg_point";
$addon_time_log->called_extension = "msg_point";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'qna' => 1,
'ilban' => 1,
'msuda' => 1,
'schedule1s' => 1,
'happy' => 1,
'freeepilogue' => 1,
'freeboard' => 1,
'specialboard' => 1,
'pointrush' => 1,
'profile1ss' => 1,
'memo' => 1,
'gevent' => 1,
'sosievent' => 1,
'event' => 1,
'eventoff' => 1,
'market' => 1,
'idup' => 1,
'notice' => 1,
'winner' => 1,
'hotnews' => 1,
'main' => 1,
'main3' => 1,
'point_event' => 1,
'epilogue' => 1,
'bulkmsg' => 1,
'rockgame' => 1,
'planet' => 1,
'attendance' => 1,
'quizgame' => 1,
);
$addon_file = './addons/point_level_icon/point_level_icon.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6Mjk6e2k6MDtzOjM6InFuYSI7aToxO3M6NToiaWxiYW4iO2k6MjtzOjU6Im1zdWRhIjtpOjM7czoxMDoic2NoZWR1bGUxcyI7aTo0O3M6NToiaGFwcHkiO2k6NTtzOjEyOiJmcmVlZXBpbG9ndWUiO2k6NjtzOjk6ImZyZWVib2FyZCI7aTo3O3M6MTI6InNwZWNpYWxib2FyZCI7aTo4O3M6OToicG9pbnRydXNoIjtpOjk7czoxMDoicHJvZmlsZTFzcyI7aToxMDtzOjQ6Im1lbW8iO2k6MTE7czo2OiJnZXZlbnQiO2k6MTI7czo5OiJzb3NpZXZlbnQiO2k6MTM7czo1OiJldmVudCI7aToxNDtzOjg6ImV2ZW50b2ZmIjtpOjE1O3M6NjoibWFya2V0IjtpOjE2O3M6NDoiaWR1cCI7aToxNztzOjY6Im5vdGljZSI7aToxODtzOjY6Indpbm5lciI7aToxOTtzOjc6ImhvdG5ld3MiO2k6MjA7czo0OiJtYWluIjtpOjIxO3M6NToibWFpbjMiO2k6MjI7czoxMToicG9pbnRfZXZlbnQiO2k6MjM7czo4OiJlcGlsb2d1ZSI7aToyNDtzOjc6ImJ1bGttc2ciO2k6MjU7czo4OiJyb2NrZ2FtZSI7aToyNjtzOjY6InBsYW5ldCI7aToyNztzOjEwOiJhdHRlbmRhbmNlIjtpOjI4O3M6ODoicXVpemdhbWUiO319')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6Mjk6e2k6MDtzOjM6InFuYSI7aToxO3M6NToiaWxiYW4iO2k6MjtzOjU6Im1zdWRhIjtpOjM7czoxMDoic2NoZWR1bGUxcyI7aTo0O3M6NToiaGFwcHkiO2k6NTtzOjEyOiJmcmVlZXBpbG9ndWUiO2k6NjtzOjk6ImZyZWVib2FyZCI7aTo3O3M6MTI6InNwZWNpYWxib2FyZCI7aTo4O3M6OToicG9pbnRydXNoIjtpOjk7czoxMDoicHJvZmlsZTFzcyI7aToxMDtzOjQ6Im1lbW8iO2k6MTE7czo2OiJnZXZlbnQiO2k6MTI7czo5OiJzb3NpZXZlbnQiO2k6MTM7czo1OiJldmVudCI7aToxNDtzOjg6ImV2ZW50b2ZmIjtpOjE1O3M6NjoibWFya2V0IjtpOjE2O3M6NDoiaWR1cCI7aToxNztzOjY6Im5vdGljZSI7aToxODtzOjY6Indpbm5lciI7aToxOTtzOjc6ImhvdG5ld3MiO2k6MjA7czo0OiJtYWluIjtpOjIxO3M6NToibWFpbjMiO2k6MjI7czoxMToicG9pbnRfZXZlbnQiO2k6MjM7czo4OiJlcGlsb2d1ZSI7aToyNDtzOjc6ImJ1bGttc2ciO2k6MjU7czo4OiJyb2NrZ2FtZSI7aToyNjtzOjY6InBsYW5ldCI7aToyNztzOjEwOiJhdHRlbmRhbmNlIjtpOjI4O3M6ODoicXVpemdhbWUiO319')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "point_level_icon";
$addon_time_log->called_extension = "point_level_icon";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'qna' => 1,
'ilban' => 1,
'msuda' => 1,
'schedule1s' => 1,
'happy' => 1,
'freeepilogue' => 1,
'freeboard' => 1,
'specialboard' => 1,
'profile1ss' => 1,
'memo' => 1,
'event' => 1,
'idup' => 1,
'notice' => 1,
'hotnews' => 1,
'point_event' => 1,
'epilogue' => 1,
'planet' => 1,
);
$addon_file = './addons/point_pangpang_plus/point_pangpang_plus.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MTU6InhlX3ZhbGlkYXRvcl9pZCI7czozMToibW9kdWxlcy9hZGRvbi90cGwvc2V0dXBfYWRkb24vMSI7czoxNDoicG9pbnRnaXJsX21lbnQiO3M6Njoi67m17JW8IjtzOjExOiJpc19kb2N1bWVudCI7czoxOiJZIjtzOjE4OiJzZXRfZG9jdW1lbnRfcG9pbnQiO3M6MzoiNTAwIjtzOjI0OiJzZXRfZG9jdW1lbnRfcHJvYmFiaWxpdHkiO3M6MjoiMTUiO3M6MTA6ImlzX2NvbW1lbnQiO3M6MToiWSI7czoxNzoic2V0X2NvbW1lbnRfcG9pbnQiO3M6MzoiMTU1IjtzOjIzOiJzZXRfY29tbWVudF9wcm9iYWJpbGl0eSI7czoyOiIyMCI7czo4OiJpc19hZG1pbiI7czoxOiJOIjtzOjEzOiJpc19rZWVwX3BvaW50IjtzOjE6Ik4iO3M6MTE6ImFsZXJ0X3JlcGx5IjtzOjE6IlkiO3M6MTI6ImNvbW1lbnRfbWVudCI7czoxMjM6IuKWtuKWtjxzdHJvbmc+PGZvbnQgY29sb3I9ImdyZWVuIj4lTkFNRSU8L2ZvbnQ+64uY7J2AIOuztOuEiOyKpCA8Zm9udCBjb2xvcj0icmVkIj4lUE9JTlQlPC9mb250Pu2PrOyduO2KuCDtmo3rk50hITwvc3Ryb25nPiI7czoxMjoic2VuZF9tZXNzYWdlIjtzOjE6Ik4iO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7czo4OiJtaWRfbGlzdCI7YToxNzp7aTowO3M6MzoicW5hIjtpOjE7czo1OiJpbGJhbiI7aToyO3M6NToibXN1ZGEiO2k6MztzOjEwOiJzY2hlZHVsZTFzIjtpOjQ7czo1OiJoYXBweSI7aTo1O3M6MTI6ImZyZWVlcGlsb2d1ZSI7aTo2O3M6OToiZnJlZWJvYXJkIjtpOjc7czoxMjoic3BlY2lhbGJvYXJkIjtpOjg7czoxMDoicHJvZmlsZTFzcyI7aTo5O3M6NDoibWVtbyI7aToxMDtzOjU6ImV2ZW50IjtpOjExO3M6NDoiaWR1cCI7aToxMjtzOjY6Im5vdGljZSI7aToxMztzOjc6ImhvdG5ld3MiO2k6MTQ7czoxMToicG9pbnRfZXZlbnQiO2k6MTU7czo4OiJlcGlsb2d1ZSI7aToxNjtzOjY6InBsYW5ldCI7fX0=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MTU6InhlX3ZhbGlkYXRvcl9pZCI7czozMToibW9kdWxlcy9hZGRvbi90cGwvc2V0dXBfYWRkb24vMSI7czoxNDoicG9pbnRnaXJsX21lbnQiO3M6Njoi67m17JW8IjtzOjExOiJpc19kb2N1bWVudCI7czoxOiJZIjtzOjE4OiJzZXRfZG9jdW1lbnRfcG9pbnQiO3M6MzoiNTAwIjtzOjI0OiJzZXRfZG9jdW1lbnRfcHJvYmFiaWxpdHkiO3M6MjoiMTUiO3M6MTA6ImlzX2NvbW1lbnQiO3M6MToiWSI7czoxNzoic2V0X2NvbW1lbnRfcG9pbnQiO3M6MzoiMTU1IjtzOjIzOiJzZXRfY29tbWVudF9wcm9iYWJpbGl0eSI7czoyOiIyMCI7czo4OiJpc19hZG1pbiI7czoxOiJOIjtzOjEzOiJpc19rZWVwX3BvaW50IjtzOjE6Ik4iO3M6MTE6ImFsZXJ0X3JlcGx5IjtzOjE6IlkiO3M6MTI6ImNvbW1lbnRfbWVudCI7czoxMjM6IuKWtuKWtjxzdHJvbmc+PGZvbnQgY29sb3I9ImdyZWVuIj4lTkFNRSU8L2ZvbnQ+64uY7J2AIOuztOuEiOyKpCA8Zm9udCBjb2xvcj0icmVkIj4lUE9JTlQlPC9mb250Pu2PrOyduO2KuCDtmo3rk50hITwvc3Ryb25nPiI7czoxMjoic2VuZF9tZXNzYWdlIjtzOjE6Ik4iO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7czo4OiJtaWRfbGlzdCI7YToxNzp7aTowO3M6MzoicW5hIjtpOjE7czo1OiJpbGJhbiI7aToyO3M6NToibXN1ZGEiO2k6MztzOjEwOiJzY2hlZHVsZTFzIjtpOjQ7czo1OiJoYXBweSI7aTo1O3M6MTI6ImZyZWVlcGlsb2d1ZSI7aTo2O3M6OToiZnJlZWJvYXJkIjtpOjc7czoxMjoic3BlY2lhbGJvYXJkIjtpOjg7czoxMDoicHJvZmlsZTFzcyI7aTo5O3M6NDoibWVtbyI7aToxMDtzOjU6ImV2ZW50IjtpOjExO3M6NDoiaWR1cCI7aToxMjtzOjY6Im5vdGljZSI7aToxMztzOjc6ImhvdG5ld3MiO2k6MTQ7czoxMToicG9pbnRfZXZlbnQiO2k6MTU7czo4OiJlcGlsb2d1ZSI7aToxNjtzOjY6InBsYW5ldCI7fX0=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "point_pangpang_plus";
$addon_time_log->called_extension = "point_pangpang_plus";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/referer/referer.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "referer";
$addon_time_log->called_extension = "referer";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'ilban' => 1,
'happy' => 1,
'idup' => 1,
);
$addon_file = './addons/regdate_edit/regdate_edit.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Nzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJkZW5pZWRfZGVsZXRlIjtzOjE6Ik4iO3M6MTE6ImRlbmllZF9lZGl0IjtzOjE6Ik4iO3M6MTQ6ImRlbmllZF9jb21tZW50IjtzOjE6IlkiO3M6MTY6InBlcm1pc3Npb25faG91cnMiO3M6MzoiMjQwIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6Mzp7aTowO3M6NToiaWxiYW4iO2k6MTtzOjU6ImhhcHB5IjtpOjI7czo0OiJpZHVwIjt9fQ==')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Nzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJkZW5pZWRfZGVsZXRlIjtzOjE6Ik4iO3M6MTE6ImRlbmllZF9lZGl0IjtzOjE6Ik4iO3M6MTQ6ImRlbmllZF9jb21tZW50IjtzOjE6IlkiO3M6MTY6InBlcm1pc3Npb25faG91cnMiO3M6MzoiMjQwIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6Mzp7aTowO3M6NToiaWxiYW4iO2k6MTtzOjU6ImhhcHB5IjtpOjI7czo0OiJpZHVwIjt9fQ==')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "regdate_edit";
$addon_time_log->called_extension = "regdate_edit";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/resize_image/resize_image.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "resize_image";
$addon_time_log->called_extension = "resize_image";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'qna' => 1,
'msuda' => 1,
'schedule1s' => 1,
'happy' => 1,
'freeepilogue' => 1,
'freeboard' => 1,
'specialboard' => 1,
'event' => 1,
'market' => 1,
'idup' => 1,
'notice' => 1,
'hotnews' => 1,
'main' => 1,
'intro' => 1,
'epilogue' => 1,
'planet' => 1,
);
$addon_file = './addons/sejin7940_all_notice/sejin7940_all_notice.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6MTA6e3M6MTU6InhlX3ZhbGlkYXRvcl9pZCI7czozMToibW9kdWxlcy9hZGRvbi90cGwvc2V0dXBfYWRkb24vMSI7czoxOToibm90aWNlX2RvY3VtZW50X3NybCI7czoyMzoiMjkzMDk0NCwyOTQ5MTkyLDI5MTgwMzIiO3M6MTc6Im5vdGljZV9tb2R1bGVfc3JsIjtzOjc6IjI5MTc4ODEiO3M6MTM6Im5vdGljZV90YXJnZXQiO3M6Njoibm90aWNlIjtzOjE0OiJub3RpY2VfZGlzcGxheSI7czo2OiJib3R0b20iO3M6MTc6Im5vdGljZV9saXN0X2NvdW50IjtzOjE6IjUiO3M6MTc6Im5vdGljZV9zb3J0X2luZGV4IjtzOjEwOiJsaXN0X29yZGVyIjtzOjE3OiJub3RpY2Vfb3JkZXJfdHlwZSI7czozOiJhc2MiO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7czo4OiJtaWRfbGlzdCI7YToxNjp7aTowO3M6MzoicW5hIjtpOjE7czo1OiJtc3VkYSI7aToyO3M6MTA6InNjaGVkdWxlMXMiO2k6MztzOjU6ImhhcHB5IjtpOjQ7czoxMjoiZnJlZWVwaWxvZ3VlIjtpOjU7czo5OiJmcmVlYm9hcmQiO2k6NjtzOjEyOiJzcGVjaWFsYm9hcmQiO2k6NztzOjU6ImV2ZW50IjtpOjg7czo2OiJtYXJrZXQiO2k6OTtzOjQ6ImlkdXAiO2k6MTA7czo2OiJub3RpY2UiO2k6MTE7czo3OiJob3RuZXdzIjtpOjEyO3M6NDoibWFpbiI7aToxMztzOjU6ImludHJvIjtpOjE0O3M6ODoiZXBpbG9ndWUiO2k6MTU7czo2OiJwbGFuZXQiO319')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6MTA6e3M6MTU6InhlX3ZhbGlkYXRvcl9pZCI7czozMToibW9kdWxlcy9hZGRvbi90cGwvc2V0dXBfYWRkb24vMSI7czoxOToibm90aWNlX2RvY3VtZW50X3NybCI7czoyMzoiMjkzMDk0NCwyOTQ5MTkyLDI5MTgwMzIiO3M6MTc6Im5vdGljZV9tb2R1bGVfc3JsIjtzOjc6IjI5MTc4ODEiO3M6MTM6Im5vdGljZV90YXJnZXQiO3M6Njoibm90aWNlIjtzOjE0OiJub3RpY2VfZGlzcGxheSI7czo2OiJib3R0b20iO3M6MTc6Im5vdGljZV9saXN0X2NvdW50IjtzOjE6IjUiO3M6MTc6Im5vdGljZV9zb3J0X2luZGV4IjtzOjEwOiJsaXN0X29yZGVyIjtzOjE3OiJub3RpY2Vfb3JkZXJfdHlwZSI7czozOiJhc2MiO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7czo4OiJtaWRfbGlzdCI7YToxNjp7aTowO3M6MzoicW5hIjtpOjE7czo1OiJtc3VkYSI7aToyO3M6MTA6InNjaGVkdWxlMXMiO2k6MztzOjU6ImhhcHB5IjtpOjQ7czoxMjoiZnJlZWVwaWxvZ3VlIjtpOjU7czo5OiJmcmVlYm9hcmQiO2k6NjtzOjEyOiJzcGVjaWFsYm9hcmQiO2k6NztzOjU6ImV2ZW50IjtpOjg7czo2OiJtYXJrZXQiO2k6OTtzOjQ6ImlkdXAiO2k6MTA7czo2OiJub3RpY2UiO2k6MTE7czo3OiJob3RuZXdzIjtpOjEyO3M6NDoibWFpbiI7aToxMztzOjU6ImludHJvIjtpOjE0O3M6ODoiZXBpbG9ndWUiO2k6MTU7czo2OiJwbGFuZXQiO319')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "sejin7940_all_notice";
$addon_time_log->called_extension = "sejin7940_all_notice";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'sepilogue' => 1,
'zzoin' => 1,
'qna' => 1,
'ombusman' => 1,
'hotnews' => 1,
'happy' => 1,
'freeboard' => 1,
'community' => 1,
'eventoff' => 1,
'freeboard1' => 1,
'eventon' => 1,
'kissqna' => 1,
'epilogue' => 1,
);
$addon_file = './addons/sejin7940_autotrash/sejin7940_autotrash.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Nzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjE0OiJ0cmFzaF9kb2N1bWVudCI7czoxOiJZIjtzOjEzOiJ0cmFzaF9jb21tZW50IjtzOjE6IlkiO3M6MTE6ImV4Y2VwdEFkbWluIjtzOjE6Ik4iO3M6MTM6ImV4Y2VwdE1hbmFnZXIiO3M6MToiTiI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjEzOntpOjA7czo5OiJzZXBpbG9ndWUiO2k6MTtzOjU6Inp6b2luIjtpOjI7czozOiJxbmEiO2k6MztzOjg6Im9tYnVzbWFuIjtpOjQ7czo3OiJob3RuZXdzIjtpOjU7czo1OiJoYXBweSI7aTo2O3M6OToiZnJlZWJvYXJkIjtpOjc7czo5OiJjb21tdW5pdHkiO2k6ODtzOjg6ImV2ZW50b2ZmIjtpOjk7czoxMDoiZnJlZWJvYXJkMSI7aToxMDtzOjc6ImV2ZW50b24iO2k6MTE7czo3OiJraXNzcW5hIjtpOjEyO3M6ODoiZXBpbG9ndWUiO319')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Nzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjE0OiJ0cmFzaF9kb2N1bWVudCI7czoxOiJZIjtzOjEzOiJ0cmFzaF9jb21tZW50IjtzOjE6IlkiO3M6MTE6ImV4Y2VwdEFkbWluIjtzOjE6Ik4iO3M6MTM6ImV4Y2VwdE1hbmFnZXIiO3M6MToiTiI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjEzOntpOjA7czo5OiJzZXBpbG9ndWUiO2k6MTtzOjU6Inp6b2luIjtpOjI7czozOiJxbmEiO2k6MztzOjg6Im9tYnVzbWFuIjtpOjQ7czo3OiJob3RuZXdzIjtpOjU7czo1OiJoYXBweSI7aTo2O3M6OToiZnJlZWJvYXJkIjtpOjc7czo5OiJjb21tdW5pdHkiO2k6ODtzOjg6ImV2ZW50b2ZmIjtpOjk7czoxMDoiZnJlZWJvYXJkMSI7aToxMDtzOjc6ImV2ZW50b24iO2k6MTE7czo3OiJraXNzcW5hIjtpOjEyO3M6ODoiZXBpbG9ndWUiO319')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "sejin7940_autotrash";
$addon_time_log->called_extension = "sejin7940_autotrash";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'qna' => 1,
'ilban' => 1,
'msuda' => 1,
'schedule1s' => 1,
'mspecial' => 1,
'happy' => 1,
'freeboard' => 1,
'freeepilogue' => 1,
'specialboard' => 1,
'profile1ss' => 1,
'memo' => 1,
'gevent' => 1,
'sosievent' => 1,
'event' => 1,
'eventoff' => 1,
'market' => 1,
'notice' => 1,
'winner' => 1,
'idup' => 1,
'hotnews' => 1,
'ttt' => 1,
'blueboard' => 1,
'main' => 1,
'intro' => 1,
'superlog' => 1,
'schedulemain' => 1,
'guide' => 1,
'hujitong' => 1,
'point_event' => 1,
'epilogue' => 1,
'bulkmsg' => 1,
'g4' => 1,
'rockgame' => 1,
'planet' => 1,
'g3' => 1,
'attendance' => 1,
'quizgame' => 1,
'test1' => 1,
);
$addon_file = './addons/sejin7940_readed_count/sejin7940_readed_count.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Njp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEwOiJyYW5kb21fdXNlIjtzOjE6Ik4iO3M6OToibXVsdGlfdXNlIjtzOjU6ImFkbWluIjtzOjExOiJtdWx0aV9saW1pdCI7czoyOiIzNCI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjM4OntpOjA7czozOiJxbmEiO2k6MTtzOjU6ImlsYmFuIjtpOjI7czo1OiJtc3VkYSI7aTozO3M6MTA6InNjaGVkdWxlMXMiO2k6NDtzOjg6Im1zcGVjaWFsIjtpOjU7czo1OiJoYXBweSI7aTo2O3M6OToiZnJlZWJvYXJkIjtpOjc7czoxMjoiZnJlZWVwaWxvZ3VlIjtpOjg7czoxMjoic3BlY2lhbGJvYXJkIjtpOjk7czoxMDoicHJvZmlsZTFzcyI7aToxMDtzOjQ6Im1lbW8iO2k6MTE7czo2OiJnZXZlbnQiO2k6MTI7czo5OiJzb3NpZXZlbnQiO2k6MTM7czo1OiJldmVudCI7aToxNDtzOjg6ImV2ZW50b2ZmIjtpOjE1O3M6NjoibWFya2V0IjtpOjE2O3M6Njoibm90aWNlIjtpOjE3O3M6Njoid2lubmVyIjtpOjE4O3M6NDoiaWR1cCI7aToxOTtzOjc6ImhvdG5ld3MiO2k6MjA7czozOiJ0dHQiO2k6MjE7czo5OiJibHVlYm9hcmQiO2k6MjI7czo0OiJtYWluIjtpOjIzO3M6NToiaW50cm8iO2k6MjQ7czo4OiJzdXBlcmxvZyI7aToyNTtzOjEyOiJzY2hlZHVsZW1haW4iO2k6MjY7czo1OiJndWlkZSI7aToyNztzOjg6Imh1aml0b25nIjtpOjI4O3M6MTE6InBvaW50X2V2ZW50IjtpOjI5O3M6ODoiZXBpbG9ndWUiO2k6MzA7czo3OiJidWxrbXNnIjtpOjMxO3M6MjoiZzQiO2k6MzI7czo4OiJyb2NrZ2FtZSI7aTozMztzOjY6InBsYW5ldCI7aTozNDtzOjI6ImczIjtpOjM1O3M6MTA6ImF0dGVuZGFuY2UiO2k6MzY7czo4OiJxdWl6Z2FtZSI7aTozNztzOjU6InRlc3QxIjt9fQ==')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Njp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEwOiJyYW5kb21fdXNlIjtzOjE6Ik4iO3M6OToibXVsdGlfdXNlIjtzOjU6ImFkbWluIjtzOjExOiJtdWx0aV9saW1pdCI7czoyOiIzNCI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjM4OntpOjA7czozOiJxbmEiO2k6MTtzOjU6ImlsYmFuIjtpOjI7czo1OiJtc3VkYSI7aTozO3M6MTA6InNjaGVkdWxlMXMiO2k6NDtzOjg6Im1zcGVjaWFsIjtpOjU7czo1OiJoYXBweSI7aTo2O3M6OToiZnJlZWJvYXJkIjtpOjc7czoxMjoiZnJlZWVwaWxvZ3VlIjtpOjg7czoxMjoic3BlY2lhbGJvYXJkIjtpOjk7czoxMDoicHJvZmlsZTFzcyI7aToxMDtzOjQ6Im1lbW8iO2k6MTE7czo2OiJnZXZlbnQiO2k6MTI7czo5OiJzb3NpZXZlbnQiO2k6MTM7czo1OiJldmVudCI7aToxNDtzOjg6ImV2ZW50b2ZmIjtpOjE1O3M6NjoibWFya2V0IjtpOjE2O3M6Njoibm90aWNlIjtpOjE3O3M6Njoid2lubmVyIjtpOjE4O3M6NDoiaWR1cCI7aToxOTtzOjc6ImhvdG5ld3MiO2k6MjA7czozOiJ0dHQiO2k6MjE7czo5OiJibHVlYm9hcmQiO2k6MjI7czo0OiJtYWluIjtpOjIzO3M6NToiaW50cm8iO2k6MjQ7czo4OiJzdXBlcmxvZyI7aToyNTtzOjEyOiJzY2hlZHVsZW1haW4iO2k6MjY7czo1OiJndWlkZSI7aToyNztzOjg6Imh1aml0b25nIjtpOjI4O3M6MTE6InBvaW50X2V2ZW50IjtpOjI5O3M6ODoiZXBpbG9ndWUiO2k6MzA7czo3OiJidWxrbXNnIjtpOjMxO3M6MjoiZzQiO2k6MzI7czo4OiJyb2NrZ2FtZSI7aTozMztzOjY6InBsYW5ldCI7aTozNDtzOjI6ImczIjtpOjM1O3M6MTA6ImF0dGVuZGFuY2UiO2k6MzY7czo4OiJxdWl6Z2FtZSI7aTozNztzOjU6InRlc3QxIjt9fQ==')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "sejin7940_readed_count";
$addon_time_log->called_extension = "sejin7940_readed_count";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'ilban' => 1,
'schedule1s' => 1,
'happy' => 1,
'freeboard' => 1,
'freeepilogue' => 1,
'notice' => 1,
'winner' => 1,
'hotnews' => 1,
);
$addon_file = './addons/sejin7940_write_limit/sejin7940_write_limit.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Nzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjQ6InRlcm0iO3M6MToiMSI7czoxNDoiZG9jdW1lbnRfbGltaXQiO3M6MToiNSI7czoxMzoiY29tbWVudF9saW1pdCI7czoyOiIyMCI7czoxMjoibWlkX3RvZ2V0aGVyIjtzOjE6Ik4iO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7czo4OiJtaWRfbGlzdCI7YTo4OntpOjA7czo1OiJpbGJhbiI7aToxO3M6MTA6InNjaGVkdWxlMXMiO2k6MjtzOjU6ImhhcHB5IjtpOjM7czo5OiJmcmVlYm9hcmQiO2k6NDtzOjEyOiJmcmVlZXBpbG9ndWUiO2k6NTtzOjY6Im5vdGljZSI7aTo2O3M6Njoid2lubmVyIjtpOjc7czo3OiJob3RuZXdzIjt9fQ==')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Nzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjQ6InRlcm0iO3M6MToiMSI7czoxNDoiZG9jdW1lbnRfbGltaXQiO3M6MToiNSI7czoxMzoiY29tbWVudF9saW1pdCI7czoyOiIyMCI7czoxMjoibWlkX3RvZ2V0aGVyIjtzOjE6Ik4iO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTI6InJ1bl9zZWxlY3RlZCI7czo4OiJtaWRfbGlzdCI7YTo4OntpOjA7czo1OiJpbGJhbiI7aToxO3M6MTA6InNjaGVkdWxlMXMiO2k6MjtzOjU6ImhhcHB5IjtpOjM7czo5OiJmcmVlYm9hcmQiO2k6NDtzOjEyOiJmcmVlZXBpbG9ndWUiO2k6NTtzOjY6Im5vdGljZSI7aTo2O3M6Njoid2lubmVyIjtpOjc7czo3OiJob3RuZXdzIjt9fQ==')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "sejin7940_write_limit";
$addon_time_log->called_extension = "sejin7940_write_limit";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'epilogue' => 1,
);
$addon_file = './addons/stats/stats.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTp7aTowO3M6ODoiZXBpbG9ndWUiO319')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTp7aTowO3M6ODoiZXBpbG9ndWUiO319')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "stats";
$addon_time_log->called_extension = "stats";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'qna' => 1,
'ilban' => 1,
'msuda' => 1,
'schedule1s' => 1,
'happy' => 1,
'freeboard' => 1,
'freeepilogue' => 1,
'specialboard' => 1,
'profile1ss' => 1,
'event' => 1,
'market' => 1,
'notice' => 1,
'idup' => 1,
'hotnews' => 1,
'blueboard' => 1,
'main' => 1,
'intro' => 1,
'superlog' => 1,
'guide' => 1,
'hujitong' => 1,
'point_event' => 1,
'epilogue' => 1,
'bulkmsg' => 1,
'rockgame' => 1,
'planet' => 1,
'attendance' => 1,
'quizgame' => 1,
);
$addon_file = './addons/twoc_memo_del/twoc_memo_del.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Njp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjk6Im1lbW9fZGF0ZSI7czoyOiI2MCI7czoxMToibWVtb19kZWxfUlMiO3M6MToiVCI7czoxNDoibWVtb19kZWxfYWRtaW4iO3M6MToiTiI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjI3OntpOjA7czozOiJxbmEiO2k6MTtzOjU6ImlsYmFuIjtpOjI7czo1OiJtc3VkYSI7aTozO3M6MTA6InNjaGVkdWxlMXMiO2k6NDtzOjU6ImhhcHB5IjtpOjU7czo5OiJmcmVlYm9hcmQiO2k6NjtzOjEyOiJmcmVlZXBpbG9ndWUiO2k6NztzOjEyOiJzcGVjaWFsYm9hcmQiO2k6ODtzOjEwOiJwcm9maWxlMXNzIjtpOjk7czo1OiJldmVudCI7aToxMDtzOjY6Im1hcmtldCI7aToxMTtzOjY6Im5vdGljZSI7aToxMjtzOjQ6ImlkdXAiO2k6MTM7czo3OiJob3RuZXdzIjtpOjE0O3M6OToiYmx1ZWJvYXJkIjtpOjE1O3M6NDoibWFpbiI7aToxNjtzOjU6ImludHJvIjtpOjE3O3M6ODoic3VwZXJsb2ciO2k6MTg7czo1OiJndWlkZSI7aToxOTtzOjg6Imh1aml0b25nIjtpOjIwO3M6MTE6InBvaW50X2V2ZW50IjtpOjIxO3M6ODoiZXBpbG9ndWUiO2k6MjI7czo3OiJidWxrbXNnIjtpOjIzO3M6ODoicm9ja2dhbWUiO2k6MjQ7czo2OiJwbGFuZXQiO2k6MjU7czoxMDoiYXR0ZW5kYW5jZSI7aToyNjtzOjg6InF1aXpnYW1lIjt9fQ==')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Njp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjk6Im1lbW9fZGF0ZSI7czoyOiI2MCI7czoxMToibWVtb19kZWxfUlMiO3M6MToiVCI7czoxNDoibWVtb19kZWxfYWRtaW4iO3M6MToiTiI7czoxMzoieGVfcnVuX21ldGhvZCI7czoxMjoicnVuX3NlbGVjdGVkIjtzOjg6Im1pZF9saXN0IjthOjI3OntpOjA7czozOiJxbmEiO2k6MTtzOjU6ImlsYmFuIjtpOjI7czo1OiJtc3VkYSI7aTozO3M6MTA6InNjaGVkdWxlMXMiO2k6NDtzOjU6ImhhcHB5IjtpOjU7czo5OiJmcmVlYm9hcmQiO2k6NjtzOjEyOiJmcmVlZXBpbG9ndWUiO2k6NztzOjEyOiJzcGVjaWFsYm9hcmQiO2k6ODtzOjEwOiJwcm9maWxlMXNzIjtpOjk7czo1OiJldmVudCI7aToxMDtzOjY6Im1hcmtldCI7aToxMTtzOjY6Im5vdGljZSI7aToxMjtzOjQ6ImlkdXAiO2k6MTM7czo3OiJob3RuZXdzIjtpOjE0O3M6OToiYmx1ZWJvYXJkIjtpOjE1O3M6NDoibWFpbiI7aToxNjtzOjU6ImludHJvIjtpOjE3O3M6ODoic3VwZXJsb2ciO2k6MTg7czo1OiJndWlkZSI7aToxOTtzOjg6Imh1aml0b25nIjtpOjIwO3M6MTE6InBvaW50X2V2ZW50IjtpOjIxO3M6ODoiZXBpbG9ndWUiO2k6MjI7czo3OiJidWxrbXNnIjtpOjIzO3M6ODoicm9ja2dhbWUiO2k6MjQ7czo2OiJwbGFuZXQiO2k6MjU7czoxMDoiYXR0ZW5kYW5jZSI7aToyNjtzOjg6InF1aXpnYW1lIjt9fQ==')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "twoc_memo_del";
$addon_time_log->called_extension = "twoc_memo_del";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);