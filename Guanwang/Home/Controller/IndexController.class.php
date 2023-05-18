<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\IndexModel;

class IndexController extends Controller {
   
    protected $p_ac;
	public function _initialize(){
		
		header("Content-Type:text/html; charset=utf-8");
        $this->p_ac = A('Public');
		$this->p_ac->head();
		$this->p_ac->foot();
	}

    public function index(){
        
		$result=new IndexModel();
        $fanhui=$result->indexjson();
		
        
		$this->assign('shouye',$fanhui['canshu']);
		$this->display();
        	   
	}
	
	
	public function StatementofOriginality(){
		
		$title="Statement of Originality";
		$content="This assignment is submitted as part requirement for the degree of ... at the University of Sussex. It is the product of my own labour except where indicated in the accompanying codebase. This assignment may be freely copied and distributed provided the source is acknowledged. I hereby give / withhold permission for a copy of this assignment to be loaned out to students in future years (delete/update as necessary).";
		
		$this->assign('title',$title);
		$this->assign('content',$content);
		$this->display();
		
	}
	
	public function models(){
		
		$title="3d app models list";
		$result=new IndexModel();
        $fanhui=$result->modelist();
		
		$this->assign('modelist',$fanhui['canshu']);
		$this->assign('title',$title);
		$this->display();
		
	}
	
	
	public function showdetail(){
		
		$id=$_GET['id'];
		$result=new IndexModel();
        $fanhui=$result->modelshow();
		
		if($id==1){
			
			$modelone=$fanhui['canshu'][0];
			
		}elseif($id==2){
			
			$modelone=$fanhui['canshu'][1];
		
		}elseif($id==3){
			
			$modelone=$fanhui['canshu'][2];
		}
		
		$this->assign('modelone',$modelone);
		$this->display();
	}
	
}