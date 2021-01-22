<?php
class Model_customer extends CI_Model{
    
    
    
    function tampilkan_data(){
        
        return $this->db->get('customer');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from customer");
  }
    
    // function post(){
    //     $data=array(
    //        'nama_customer'=>  $this->input->post('nama_customer')
    //                 );
    //     $this->db->insert('customer',$data);
    // }
    function post($data)
    {
        $this->db->insert('customer',$data);
    }
    
    // function edit()
    // {
    //     $data=array(
    //        'nama_customer'=>  $this->input->post('customer')
    //                 );
    //     $this->db->where('customer_id',$this->input->post('id'));
    //     $this->db->update('customer',$data);
    // }
    
    function get_one($id)
    {
        $param  =   array('customer_id'=>$id);
        return $this->db->get_where('customer',$param);
    }
    function edit($data,$id)
    {
        $this->db->where('customer_id',$id);
        $this->db->update('customer',$data);
    }
   
    
    
    function delete($id)
    {
        $this->db->where('customer_id',$id);
        $this->db->delete('customer');
    }
}