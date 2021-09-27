<?php
namespace App\Controllers;

use App\Models\Intern;
class InternController{
    public $db;
    protected $requestMethod;
    
    protected $intern;
    public function __construct( $db, $requestMethod){
        $this->db = $db;
        $this->requestMethod = $requestMethod;
        $this->internId = $internId;
        $this->intern = new Intern($db);

    }
    public function processRequest(){
        switch ($this->requestMethod){
            case 'GET':
                if ($this->internId) {
                    $response = $this->read($this->internId);
                } else {
                    $response = $this->readAll();
                };
                break;
            case 'POST':
                $response = $this->create();
                break;
            case 'PUT':
                $response = $this->update($this->internId);
                break;
            case 'DELETE':
                $response = $this->delete($this->internId);
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

    public function readAll()
    {
        $result = $this->intern->readAll();
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    private function read($id)
    {
        $result = $this->intern->read($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    public function create()
    {
        $input = (array) json_decode(file_get_contents('php://input'), TRUE);
        if (! $this->validate($input)) {
            return $this->unprocessableEntityResponse();
        }
        $this->intern->create($input);
        $response['status_code_header'] = 'HTTP/1.1 201 Created';
        $response['body'] = null;
        return $response;
    }

    private function update($id)
    {
        $result = $this->intern->read($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $input = (array) json_decode(file_get_contents('php://input'), TRUE);
        if (! $this->validate($input)) {
            return $this->unprocessableEntityResponse();
        }
        $this->intern->update($id, $input);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = null;
        return $response;
    }

    private function delete($id)
    {
        $result = $this->intern->read($id);
        if (! $result) {
            return $this->notFoundResponse();
        }
        $this->intern->delete($id);
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




