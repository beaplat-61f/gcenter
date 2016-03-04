<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;

use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController
{

    // 系统首页
    public function index()
    {

        $category = D('Category')->getTree();
        $lists = D('Document')->lists(null);

        $this->assign('category', $category);//栏目
        $this->assign('lists', $lists);//列表
        $this->assign('page', D('Document')->page);//分页


        $this->display();
    }

    /**
     * 查询全部的栏目分类
     * @author 南宁网大网站技术部
     */
    public function all()
    {
        $field = 'id,name,pid,title,link_id,icon';
        $category = D('Category')->field($field)->select();
        $cateList = $this->unlimitedForLevel($category);
        $this->assign('category', $cateList);
        $this->display();
    }

    /**
     * 多维数组递归
     * @author 南宁网大网站技术部
     * @param $cate [传入的数组]
     * @param $name [子数组名]
     * @param $pid [父级ID]
     * @return array
     */
    public function unlimitedForLevel($cate, $name = 'child', $pid = 0)
    {
        $arr = array();
        foreach ($cate as $key => $v) {
            //判断，如果$v['pid'] == $pid的则压入数组Child
            if ($v['pid'] == $pid) {
                //递归执行
                $v[$name] = self::unlimitedForLevel($cate, $name, $v['id']);
                $arr[] = $v;
            }
        }
        return $arr;
    }

}