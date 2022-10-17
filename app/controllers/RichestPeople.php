<?php
class RichestPeople extends Controller
{
    private $richestPeopleModel;
    public function __construct()
    {        
        $this->richestPeopleModel = $this->model('RichestPeople');
    }
    public function index()
    {
        $records = $this->richestPeopleModel->getRichestPeople();

        $rows = '';

        foreach($records as $value)
        {
            $rows .= "<tr>
                        <td>$value->Name</td>
                        <td>$value->Nettoworth</td>
                        <td>$value->Age</td>
                        <td>$value->Company</td>
                        <td><a href='" . URLROOT . "/richestpeople/delete/$value->Id'>Delete</a></td>
                      </tr>";
        }

        $data = [ 
            'title' => "De vijf mensen ter wereld",
            'rows' => $rows
        ];
        $this->view('richestpeople/read', $data);
    }
}