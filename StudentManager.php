<?PHP 
require 'Student.php';
class StudentManager{
    private $Student = [];

    public function add_student($name , $grade){
        $this->Student[$name]=new Student($name , $grade);
    }

    public function display_students(){
        if(empty($this->Student)){
            echo "no students found ";
        }
        else {
            foreach($this->Student as $students){
                echo "student :" . $students ->getname() . ":" . $students->getgrade() . "<br>";

        }

        }
    }
}
?>