<?php
/**
 * User: zhangfeng
 * Date: 12-6-13
 * Time: ����1:36
 */
class SelectedProvinceListGetGetRequest{
	private $apiParams = array();
	function __set($key,$value){
	  $this->apiParams[$key] = $value;
	}
	function __get($key){
        return  $this->apiParams[$key];
	}
    public function getAppJsonParams()
    {
        
        ksort($this->apiParams);
        return json_encode($this->apiParams);
    }
	    /**
     *
     * ��ȡ��������
     * @return string
     */
    public function getApiMethod()
    {
        return "jingdong.ware.selected.province.list.get";
    }
}
 