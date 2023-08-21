<?php

require_once('../models/model_embed.php');
if(!isset($_SESSION)){session_start();}
Class Embed{


    private String $link;
    private String $caption;
    private String $id;

    
    public $member;
    function __construct(){
    
        $this->member=new Model_embed;
       
                }

               

    function save_live_video($data){
      
        
        if(isset($data['edit_id']) && !empty($data['edit_id'])){
           //run update
        
           $stat= $this->member->embed_update($data);
          

        }else{

            //run insert
            $link = $data['link'];
            $caption=$data['caption'];
           $stat= $this->member->embed_add($link,$caption);

        }
        
        return $stat;
         }
function view_embed($data){
$info =$this->member->embed_edit($data);
return $info;
    

}

}
?>