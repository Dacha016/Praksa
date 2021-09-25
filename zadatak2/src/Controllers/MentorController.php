<?php
namespace App\Controllers;
require realpath("../../vendor/autoload.php");
use App\Config\Connection;
use App\Models\Mentor;
class MentorController{
    protected $db;
    protected $requireMrthod;
    protected $internId;
    public function __construct( $db, $requestMethod, $internId){
        $this->requestMethod = $requestMethod;
        $this->mentorId = $mentorId;
        $this->mentor = new Mentor($db);
    }
    public function processRequest(){
        switch ($this->requestMethod){
            case 'GET':
                if ($this->mentorId) {
                    $response = $this->read($this->mentorId);
                } else {
                    $response = $this->readAll();
                };
                break;
            case 'POST':
                $response = $this->create();
                break;
            case 'PUT':
                $response = $this->update($this->mentorId);
                break;
            case 'DELETE':
                $response = $this->delete($this->mentorId);
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }

    private function readAll()
    {
        $result = $this->mentor->readAll();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    private function read($id)
    {
        $result = $this->mentor->read($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    private function create()
    {
        $input = (array) json_decode(file_get_contents('php://input'), TRUE);
        if (! $this->validate($input)) {
            return $this->unprocessableEntityResponse();
        }
        $this->mentor->insert($input);
        $response['status_code_header'] = 'HTTP/1.1 201 Created';
        $response['body'] = null;
        return $response;
    }

    private function update($id)
    {
        $result = $this->mentor->read($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $input = (array) json_decode(file_get_contents('php://input'), TRUE);
        if (! $this->validate($input)) {
            return $this->unprocessableEntityResponse();
        }
        $this->mentor->update($id, $input);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = null;
        return $response;
    }

    private function delete($id)
    {
        $result = $this->mentor->read($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $this->mentor->delete($id);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = null;
        return $response;
    }

    private function validate($input)
    {
        if (! isset($input['Name'])) {
            return false;
        }
        if (! isset($input['Surname'])) {
            return false;
        }
        return true;
    }

    private function unprocessableEntityResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 422 Unprocessable Entity';
        $response['body'] = json_encode([
            'error' => 'Invalid input'
        ]);
        return $response;
    }

    private function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = null;
        return $response;
    }
}


