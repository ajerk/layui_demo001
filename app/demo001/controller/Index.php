<?php
namespace app\demo001\controller;

use think\Controller;
class Index extends Controller
{	
	//demo说明
	public function index()
	{
		echo "这是第一个demo，关于layui还有tp5数据库操作的学习";
	} 
	//录入、查询、删除测试
	public function demo001_homepage()
	{
		//echo '1';
		return $this->fetch('test');

	}
}