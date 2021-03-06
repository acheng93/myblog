<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 文章详情
*/
class Info extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_model','common');
        $this->load->model("User_model",'user');
        $this->load->model('Article_model','article');
        $this->load->model('Module_model','module');
        $this->load->model('Tags_model','tag');
	}
    
    /**
     * 文章详情
     * @param  [type] $articleid [description]
     * @return [type]            [description]
     */
	public function index($articleid)
	{
		$articleid = (int)$articleid;
        //获取文章详细信息
        $data['articlebasic'] = $this->article->getArticle($articleid);
        if(!$data['articlebasic']){
        	echo "<script>alert('暂无相关文章！');window.history.go(-1);</script>";
        	exit;
        }
        $data['articlecontent'] = $this->article->getArticleContent($articleid);
        //上下篇，获取文章id为当前id-1 和id+1
        $data['prevarticle'] = $this->article->getPrevArticle($articleid);
        $data['nextarticle'] = $this->article->getNextArticle($articleid);
        //相关推荐
        $data['recommend'] = $this->article->getInfoRecommend($data['articlebasic']->module_id,$data['articlebasic']->id);
        //面包屑
        $data['crumbs'] = $this->module->getCrumbsByModulename($data['articlebasic']->module_name);
        // print_r($data['crumbs']);exit;
        $this->load->view('home/info',$data);
	}
    
    /**
     * 获取文章相关推荐
     * @return [type] [description]
     */
	public function getRandRecommend()
	{
		$module_id = $this->input->post('module_id');
		$article_id = $this->input->post('article_id');
		$res = $this->article->getInfoRecommend($module_id,$article_id);
		echo json_encode(array('list'=>$res));
		exit;
	}

	public function articleViewadd1()
	{
		$id = $this->input->post('id');
		$this->article->articleViewadd1($id);
	}
}