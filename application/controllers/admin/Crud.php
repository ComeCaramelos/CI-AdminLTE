<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Crud extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->lang->load('admin/crud');
		$this->load->library('grocery_CRUD');
	}

	public function _crud_render($crud = null)
	{
		if ($crud == null || gettype($crud) != 'object')
		{
			return null;
		}

		/* Avoid conflicts */
		$crud->unset_jquery();
		$crud->unset_bootstrap();

		$crud_output = $crud->render();
		$this->data['crud_output'] = (array)$crud_output;
	}

	public function _crud_multigrid_render($crud = null, $disabled_views = null)
	{
		if ($disabled_views == null || gettype($disabled_views) != 'array')
		{
			$disabled_views = array();
		}
		if ($crud == null || gettype($crud) != 'object')
		{
			return null;
		}

		/* Avoid conflicts */
		$crud->unset_jquery();
		$crud->unset_bootstrap();

		$crud_output = $crud->render();
		if (!in_array($crud->getState(), $disabled_views))
		{
			$this->data['crud_output'] = (array)$crud_output;
		}
		else
		{
			/* If disabled view, return data to multigrid view usage */
			return $crud_output;
		}
	}

	public function offices_management()
	{
		try{
			/* Title Page */
			$this->page_title->push(lang('menu_offices'));
			$this->data['pagetitle'] = $this->page_title->show();

			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();


			/* CRUD */
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$this->_crud_render($crud);

			/* Load Template */
			$this->template->admin_render('admin/crud/index', $this->data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function employees_management()
	{
		try{
			/* Title Page */
			$this->page_title->push(lang('menu_employees'));
			$this->data['pagetitle'] = $this->page_title->show();

			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* CRUD */
			$crud = new grocery_CRUD();
			$crud->set_table('employees');

			$this->_crud_render($crud);

			/* Load Template */
			$this->template->admin_render('admin/crud/index', $this->data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function customers_management()
	{
		try{
			/* Title Page */
			$this->page_title->push(lang('menu_employees'));
			$this->data['pagetitle'] = $this->page_title->show();

			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* CRUD */
			$crud = new grocery_CRUD();
			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

			$this->_crud_render($crud);

			/* Load Template */
			$this->template->admin_render('admin/crud/index', $this->data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function orders_management()
	{
		try{
			/* Title Page */
			$this->page_title->push(lang('menu_employees'));
			$this->data['pagetitle'] = $this->page_title->show();

			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* CRUD */
			$crud = new grocery_CRUD();
			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$this->_crud_render($crud);

			/* Load Template */
			$this->template->admin_render('admin/crud/index', $this->data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function products_management()
	{
		try{
			/* Title Page */
			$this->page_title->push(lang('menu_employees'));
			$this->data['pagetitle'] = $this->page_title->show();

			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* CRUD */
			$crud = new grocery_CRUD();
			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));

			$this->_crud_render($crud);

			/* Load Template */
			$this->template->admin_render('admin/crud/index', $this->data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	public function film_management()
	{
		try{
			/* Title Page */
			$this->page_title->push(lang('menu_employees'));
			$this->data['pagetitle'] = $this->page_title->show();

			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* CRUD */
			$crud = new grocery_CRUD();
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');
			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

			$this->_crud_render($crud);

			/* Load Template */
			$this->template->admin_render('admin/crud/index', $this->data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	/* Buy theme at https://www.grocerycrud.com/bootstrap-theme - NOT TESTED! */
	//public function film_management_twitter_bootstrap()
	//{
	//	try{
	//		/* Title Page */
	//		$this->page_title->push(lang('menu_employees'));
	//		$this->data['pagetitle'] = $this->page_title->show();
	//
	//		/* Breadcrumbs */
	//		$this->data['breadcrumb'] = $this->breadcrumbs->show();
	//
	//		/* CRUD */
	//		$crud = new grocery_CRUD();
	//		$crud->set_theme('twitter-bootstrap');
	//		$crud->set_table('film');
	//		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
	//		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
	//		$crud->unset_columns('special_features','description','actors');
	//		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');
	//
	//		$this->_crud_render($crud);
	//
	//		/* Load Template */
	//		$this->template->admin_render('admin/crud/index', $this->data);
	//
	//	}catch(Exception $e){
	//		show_error($e->getMessage().' --- '.$e->getTraceAsString());
	//	}
	//}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);


		$output1 = $this->offices_management2(true);
		$output2 = $this->employees_management2(true);
		$output3 = $this->customers_management2(true);


		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;


		/* Title Page */
		$this->page_title->clear();
		$this->page_title->push(lang('menu_multigrids'));
		$this->data['pagetitle'] = $this->page_title->show();

		/* Breadcrumbs */
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		$this->data['crud_output'] = array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		);

		/* Load Template */
		$this->template->admin_render('admin/crud/index', $this->data);
	}

	public function offices_management2($multigrid_view = false)
	{
		try{
			/* Title Page */
			$this->page_title->push(lang('menu_offices'));
			$this->data['pagetitle'] = $this->page_title->show();

			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* CRUD */
			$crud = new grocery_CRUD();
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->set_crud_url_path(site_url("admin/".strtolower(__CLASS__."/".__FUNCTION__)),site_url("admin/".strtolower(__CLASS__."/multigrids")));

			$disabled_views = array();
			if ($multigrid_view)
			{
				array_push($disabled_views, 'list');
			}

			$multigrid = $this->_crud_multigrid_render($crud, $disabled_views);
			if ($multigrid != null && $multigrid_view)
			{
				return $multigrid;
			}

			/* Load Template */
			$this->template->admin_render('admin/crud/index', $this->data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function employees_management2($multigrid_view = false)
	{
		try{
			/* Title Page */
			$this->page_title->push(lang('menu_employees'));
			$this->data['pagetitle'] = $this->page_title->show();

			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* CRUD */
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('employees');
			$crud->set_relation('officeCode','offices','city');
			$crud->display_as('officeCode','Office City');
			$crud->set_subject('Employee');
			$crud->required_fields('lastName');
			$crud->set_field_upload('file_url','assets/uploads/files');
			$crud->set_crud_url_path(site_url("admin/".strtolower(__CLASS__."/".__FUNCTION__)),site_url("admin/".strtolower(__CLASS__."/multigrids")));

			$multigrid = $this->_crud_multigrid_render($crud, array('list'));
			if ($multigrid != null)
			{
				return $multigrid;
			}

			/* Load Template */
			$this->template->admin_render('admin/crud/index', $this->data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function customers_management2($multigrid_view = false)
	{
		try{
			/* Title Page */
			$this->page_title->push(lang('menu_customers'));
			$this->data['pagetitle'] = $this->page_title->show();

			/* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* CRUD */
			$crud = new grocery_CRUD();

			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');
			$crud->set_crud_url_path(site_url("admin/".strtolower(__CLASS__."/".__FUNCTION__)),site_url("admin/".strtolower(__CLASS__."/multigrids")));


			$multigrid = $this->_crud_multigrid_render($crud, array('list'));
			if ($multigrid != null)
			{
				return $multigrid;
			}

			/* Load Template */
			$this->template->admin_render('admin/crud/index', $this->data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

}