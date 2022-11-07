<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class AdminController extends BaseController
{
    protected $session;
    protected $menu;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->menu = $this->getAdminMenu();

        $this->session = \Config\Services::session();
    }

    public function render($viewPath='', $data=[]){

        return view($viewPath, $data);
    }

    private function getAdminMenu(){
        $menu = array();

        $menu['user'] = array(
            "name"=>"회원 관리",
            "icon"=>"fas fa-users",
            "link"=>"",
            "sub_menu"=>array(
                "user"=>array("name"=>"회원관리", "link"=>"/"),
                "admin"=>array("name"=>"관리자", "link"=>"/"),
            )
        );

        $menu['popup'] = array(
            "name"=>"팝업 관리",
            "icon"=>"fas fa-table",
            "link"=>"",
            "sub_menu"=>array(
            )
        );

        $menu['board'] = array(
            "name"=>"게시판 관리",
            "icon"=>"fas fa-columns",
            "link"=>"/admin/admin/board",
            "sub_menu"=>array(
            )
        );

        $menu['menu'] = array(
            "name"=>"메뉴 관리",
            "icon"=>"fas fa-chart-area",
            "link"=>"",
            "sub_menu"=>array(
            )
        );


        $menu['promise'] = array(
            "name"=>"약관 관리",
            "icon"=>"fas fa-chart-area",
            "link"=>"",
            "sub_menu"=>array(
            )
        );


        return $menu;
    }
}
