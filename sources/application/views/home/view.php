

<section >
    <div align = "left">
     <table class="h3 text-black">
      <tr>
         <td > <i class="fa fa-user" aria-hidden="true"></i>id:</td>
         <td> <?=$data['id']?></td>
      </tr>
      <tr>
          <td><i class="fa fa-tag" aria-hidden="true"></i>alias:</td>
          <td> <?=$data['alias']?></td>
      </tr>
      <tr>
          <td><i class="fa fa-eye" aria-hidden="true"></i>views:</td>
          <td> <?=$data['views']?></td>
      </tr>
      <tr>
          <td ><i class="fa fa-calendar" aria-hidden="true"></i>created:</td>
          <td> <?=$data['created']?></td>
      </tr>
         <tr>
          <td><i class="fa fa-calendar" aria-hidden="true"></i>expiration:</td>
          <td> <?=$data['expiration']?></td>
      </tr>
     </table>      
     

     </div>
     <div align = "center">
     <?php
        
        $dir = "./assets/uploads/asd";

        // Open a directory, and read its contents
        if (is_dir($dir)){
          if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
              echo "<a class='h3 text-black'>Filename:   " . $file ."</a>
               <button type='submit' class='btn btn-success'>Download</button>
              <br></br>";
            }
            closedir($dh);
          }
        }
        ?>
    </div>
</section>

 