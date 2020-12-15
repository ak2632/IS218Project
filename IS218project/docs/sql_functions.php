<?php
class connect_database{
    private $hostname = "sql1.njit.edu";
    private $username = "das96";
    private $password = "";
    private $dbname = "das96";
    private $conn = NULL;

    public function connectDb(){
        try
        {
            $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
            //echo "sucessfully connected";
        }
        catch(PDOException $e)
        {
            $error_out->http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
        }
        return $this->conn;
    }

    private function httpError($message)
    {
        header("Content-type: text/plain");
        die($message);
    }

}
class process_output{
    public function runQuery($conn, $query) {
        try {
            $q = $conn->prepare($query);
            $q->execute();
            $results = $q->fetchAll();
            $q->closeCursor();
            return $results;
        } catch (PDOException $e) {
            http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
        }
    }
    /*Function will print table from array*/
    public function printTable($array){
        print("<table>");
        foreach ($array as $line_num=>$line){
            if ($line_num == 0){
                print("<tr>");
                $count_col = 0;
                foreach ($line as $col_name => $columns){
                    if ($count_col%2 ==0){
                        print("<th>$col_name</th>");
                    }
                    $count_col++;
                }
                print("</tr>");
            }
            print("<tr>");
            $count_col = 0;
            foreach ($line as $col_name => $columns){
                if ($count_col%2 ==0) {
                    print("<td>$columns</td>");
                }
                $count_col++;
            }
            print("</tr>");
        }
        print("</table>");
    }
}
class projectAccounts{
    public $personid;
    public $email;
    public $fname;
    public $lname;
    public $college;
    public $major;
    private $password;

    /*Sign up*/
    public function insert_record(){
        $query = "Insert Into projectAccounts (`personid`, `email`, `fname`, `lname`, `college`, `major`, `password`) Values (`$this->personid`,`$this->email`,`$this->fname`,`$this->lname`,`$this->college`,`$this->major`,`$this->password`)";
        $conn_process = new connect_database();
        $conn = $conn_process->connectDb();
        $run_process = new process_output();
        $results = $run_process->runQuery($conn, $query);
    }

    /*Gets persons id*/
    public function get_personid($email){
        $query="Select personid From projectAccounts Where email=$email";
        $conn_process = new connect_database();
        $conn = $conn_process->connectDb();
        $run_process = new process_output();
        $results = $run_process->runQuery($conn, $query);
        return $results;
    }

    /*Returns person's full name as string*/
    public function get_name($email){
        $query="Select fname, lname From projectAccounts Where email=$email";
        $conn_process = new connect_database();
        $conn = $conn_process->connectDb();
        $run_process = new process_output();
        $results = $run_process->runQuery($conn, $query);
        $fullName = join(" ", $results);
        return $fullName;
    }
}
class tasks{
    public $taskid;
    public $personid;
    public $duedate;
    public $title;
    public $description;
    public $isdone;

    public function display_done_tasks($personid){
        $isdone=0;
        $query="Select * From tasks where personid=$personid and isdone=$isdone";
        $conn_process = new connect_database();
        $conn = $conn_process->connectDb();
        $run_process = new process_output();
        $results = $run_process->runQuery($conn, $query);
        $run_process->printTable($results);
    }

    public function display_notdone_tasks($personid){
        $isdone=1;
        $query="Select * From tasks where personid=$personid and isdone=$isdone";
        $conn_process = new connect_database();
        $conn = $conn_process->connectDb();
        $run_process = new process_output();
        $results = $run_process->runQuery($conn, $query);
        $run_process->printTable($results);
    }

    public function insert_task(){
        $query="Insert Into tasks (`taskid`, `personid`, `duedate`, `title`, `description`, `isdone`,) Values (`$this->taskid`,`$this->personid`,`$this->duedate`,`$this->title`, `$this->description`, `$this->isdone`)";
        $conn_process = new connect_database();
        $conn = $conn_process->connectDb();
        $run_process = new process_output();
        $results = $run_process->runQuery($conn, $query);
    }

    public function delete_task(){
        $query="Delete From tasks Where taskid=$this->taskid";
        $conn_process = new connect_database();
        $conn = $conn_process->connectDb();
        $run_process = new process_output();
        $results = $run_process->runQuery($conn, $query);
    }

    public function update_task(){
        $query="Update tasks Set duedate='$this->duedate', title='$this->title', description='$this->description', isdone='$this->isdone'  Where taskid=$this->taskid";
        $conn_process = new connect_database();
        $conn = $conn_process->connectDb();
        $run_process = new process_output();
        $results = $run_process->runQuery($conn, $query);
    }
}
?>