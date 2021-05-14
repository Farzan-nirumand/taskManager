<?php
add_action('admin_menu', 'Func_Menu');

function Func_Menu()
{
    add_menu_page(
        'مدیریت وظایف',
        'مدیریت وظایف',
        'manage_options',
        'menu_manager',
        'FuncMenuManager'
    );
    
}

function FuncMenuManager()
{
   echo '<h1>مدیریت وظایف</h1>';
   global $wpdb;

         if(isset($_GET['action'])&& $_GET['action']=="delete")
   {
       $item=intval($_GET['item']);
       if ($item>0)
       {
           $wpdb->delete($wpdb->prefix .'mytable',['id'=>$item]);
       }

   }
   
   if(isset($_GET['action'])&& $_GET['action']=="add")
   {
    include PLUGIN_TMPHW4 . 'admin/menudatabase/add.php';

       if(isset($_POST['submit1']))
       {
           $wpdb->insert(
               $wpdb->prefix.'mytable',[
                   'title' => $_POST['textbox1'],
                   'description' => $_POST['textbox2'],
                   'deadline' => $_POST['textbox3'],

               ]
           );
       }

   }

   if(isset($_GET['action'])&& $_GET['action']=="update")
   {
   $item=intval($_GET['item']);
   
       if(isset($_POST['submit1']))
       {
          // $item=intval($_GET['item']);

       if ($item>0)
       {
           $wpdb->update(
               $wpdb->prefix.'mytable',[
                   'title' => $_POST['textbox1'],
                   'description' => $_POST['textbox2'],
                   'deadline' => $_POST['textbox3'],

               ],['id'=>$item]
           );
        }
       }
         $getoko = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}mytable WHERE id=$item");
          //var_dump($getoko);
          include PLUGIN_TMPHW4 . 'admin/menudatabase/edit.php';

   }
   


   else{
    $hame = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}mytable");
    
    include PLUGIN_TMPHW4 . 'admin/menudatabase/view.php';

   }
}


?>