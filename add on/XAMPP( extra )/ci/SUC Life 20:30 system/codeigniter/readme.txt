This is Codeigniter Framework which is provided for backend developer.

It also can define as MVC framework. 

What is MVC ?

Model–view–controller is a software design pattern commonly used for developing user interfaces 
which divides the related program logic into three elements such as model, view and controller.

Model - To do the sql statement
View - Design and also place that displaying data
Controller - Write the function method here

Note :
* To checking whether sql statement is running or not in model 
- print $this->db->last_query();

* Before we start, we need to change the application/config/config.php file for the path that save in your computer

Example :
$config['base_url'] = 'http://localhost/codeigniter/';

* Change for the database also, application/config/database.php/

The important things that you need to be know is the application/config/routes.php/

- what you need to do at <form action="<?php echo base_url() . "add_data" ?>" method="POST">, all you must write at here

Example : 

$route['add_data']['post'] = "Data/add";

- add_data is what you need to define at the action there
- Data/add is the controller method that you created

Data(Controller Name) / add(Method Name) * if no create method, all is do in index then disable it for this,
just put Data enough no need to put /add

===============================================================================

Normally we will using 4 model which is a:add, e:edit, v:view, d:delete,
but we will not do deletion in the database, this is to let the programmer
can check back the data when error occurs.

//Get the data

public function get_all_data()
{
    $this->db
        ->select()
        ->from('data')
        ->order_by("id", "asc")
        ->limit(1,0);
    $query = $this->db->get();
    return $query->result();
}

Original SQL Code be like this :
$sql = "SELECT * FROM data ORDER_BY id ASC LIMIT 1,0";

//Insert the data

public function insert_data($array_data)
{
    return $this->db->insert('data', $array_data);
}

Original SQL Code be like this :
$sql = "INSERT INTO data() VALUES ()";

//Update the data

public function update_data($product_id, $array_data)
{
    return $this->db
        ->where('product_id', $product_id)
        ->update('data', $array_data);
}

Original SQL Code be like this :
$sql = "UPDATE data SET username = '' WHERE product_id = '$product_id'";

//Delete the data

public function update_data($product_id, $array_data)
{
    return $this->db
        ->set('delmode', 0)
        ->where('product_id', $product_id)
        ->update('data');
}

Original SQL Code be like this :
$sql = "UPDATE data SET delmode = 0 WHERE product_id = '$product_id'";

==============================================================================

Let's me explain what I do, 
what I need to pass inside the ()

Example :

public function update_data($product_id, $array_data)

- $product_id is what the param that I need to pass for verify when updating the data (WHERE condition)
- $array_data is a list of field data that you wanna to be update (SET which data that you need to change)

==============================================================================

Controller :

How we are going to write the function ?

normally we will have the contruct method, index method.
- contruct method is define what we use include the model, helper, core that all things we need to use
at below.
- index is to define what the user view when going to this page.

Example : 

class Main extends CI_Controller {
	public function __construct()
	{
		//load database in autoload libraries
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();

        //load all the model that we used
		$this->load->model('Main_Model');
	}

    public function index()
	{
		$this->load->database();  --> code when we need to using the database
		$data = array();          --> code when we need to pass more data to the view
		$main = new Main_Model;   --> define the model that we want to be use
		$data['category'] = $main->get_all_category();  --> we will write like this to get the data from the model
		$data['slideshow_first'] = $main->get_slideshow_first();  --> we will write like this to get the data from the model
		
        //this all line code is to do what you need to display in the view, normally we will separated the header, footer
        $this->load->view('include/header'); 
		$this->load->view('main/index',$data);  --> this line of code is to call the variable that we define at the above into the view, means pass the data from controller to view
		$this->load->view('include/footer');
	}
}
