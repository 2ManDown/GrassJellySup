<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


	public function product_list()
	{
		$data['page'] = "product/product_list";
		$this->load->view('theme',$data);
	}

	public function product_insert()
	{
		$data['page'] = "product/product_insert";
		$this->load->view('theme',$data);
	}

	public function product_warehouse()
	{
		$data['page'] = "product/product_warehouse";
		$this->load->view('theme',$data);
	}

	public function product_reportex()
	{
		$data['page'] = "product/product_reportex";
		$this->load->view('theme',$data);
	}

	public function product_exp()
	{
		$data['page'] = "product/product_exp";
		$this->load->view('theme',$data);
	}
	
	public function product_detail()
	{
		$data['page'] = "product/product_detail";
		$this->load->view('theme',$data);
	}

	public function product_exportbill()
	{
		$data['page'] = "product/product_exportbill";
		$this->load->view('theme',$data);
	}

	public function product_reportim()
	{
		$data['page'] = "product/product_reportim";
		$this->load->view('theme',$data);
	}

	public function product_import()
	{
		$data['page'] = "product/product_import";
		$this->load->view('theme',$data);
	}
	
}
