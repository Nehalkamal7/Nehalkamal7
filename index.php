<?PHP
require 'StudentManager.php';
$student_manager = new StudentManager();

$student_manager->add_student("yehya",109);
$student_manager->add_student("nehal",199);
$student_manager->add_student("walaa",189);
$student_manager->add_student("ahmed",119);
$student_manager->add_student("aya",139);

$student_manager->display_students();

?>