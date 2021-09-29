<?php
namespace App\Controllers;

use App\Models\Mentor;
class MentorController{
    public $db;
    protected $requestMethod;
    protected  $mentorId;
    protected $mentor;
    public function __construct( $db, $requestMethod,$mentorId){
        $this->db = $db;
        $this->requestMethod = $requestMethod;
        $this->mentorId = $mentorId;
        $this->mentor = new Mentor($db);
    }

    public function readAll(){
        $result = $this->mentor->readAll();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $n=$result->rowCount();
        if($n>0){
            $inArr=[];
            while($row= $result->fetch(\PDO::FETCH_ASSOC)){
                extract($row);
                $in=[
                    "id"=>$row["id"],
                    "Name"=>$row["Name"],
                    "Surname"=>$row["Surname"],
                    "idG"=>$row["idG"]
                ];
                array_push($inArr,$in);
            }
        echo json_encode($inArr);
        // $response['body'] = json_encode($in);
        // return $response;
        }
    }

    public function read($mentorId){
         $result = $this->mentor->read($mentorId);
         if (! $result) {
            return $this->notFoundResponse();
        }
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
         $row= $result->fetch(\PDO::FETCH_ASSOC);
         $in=[
            "id"=>$row["id"],
            "Name"=>$row["Name"],
            "Surname"=>$row["Surname"],
            "idG"=>$row["idG"]
        ];
        echo json_encode($in);
        // $response['body'] = json_encode($in);
        // return $response;
    }
    public function create(){
        $input = (array) json_decode(file_get_contents('php://input'), TRUE);
        if (! $this->validate($input)) {
            return $this->unprocessableEntityResponse();
        }
        $this->mentor->create($input);
        $response['status_code_header'] = 'HTTP/1.1 201 Created';
        $response['body'] = null;
    }
    public function update($mentorId){
        $result = $this->mentor->read($mentorId);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $input = (array) json_decode(file_get_contents('php://input'), TRUE);
        if (! $this->validate($input)) {
            return $this->unprocessableEntityResponse();
        }
        $this->mentor->update($mentorId, $input);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = null;
        return $response;
    }


    public function delete($mentorId){
        $result = $this->mentor->read($mentorId);
        $row= $result->fetch(\PDO::FETCH_ASSOC);
        if (! $row) {
            return $this->notFoundResponse();
            
        }else{
            $this->mentor->delete($mentorId);
            $response['status_code_header'] = 'HTTP/1.1 200 OK';
        }
        return $response;
    }

    private function validate($input){
        if (! isset($input['Name'])) {
            return false;
        }
        if (! isset($input['Surname'])) {
            return false;
        }
        if (! isset($input['idG'])) {
            return false;
        }

        return true;
    }

    private function unprocessableEntityResponse(){
        $response['status_code_header'] = 'HTTP/1.1 422 Unprocessable Entity';
        $response['body'] = json_encode([
            'error' => 'Invalid input'
        ]);
        return $response;
    }

    private function notFoundResponse(){
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = null;
        return $response;
    }
}


