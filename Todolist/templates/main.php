<?php include_once "includes/header.php";?>


<div class="container todo-container">
   <div class="row">
     <div class="col-lg-5">
         <form action method id="todo-form"> 
          <h3 class="text-success text-center form-title">Add Todo</h3>
          <?php echo $error_message?><br>
          <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" class="form-control">
          </div>
          <div class="form-group">
            <label for="date">Date: </label>
            <input type="date" name="date" id="date" class="form-control">
          </div>
          <input type="submit" name="add-todo" value="Add Todo" id="add-todo" class="btn btn-success">
        </form>
     </div>
     <div class="col-lg-1"></div>
     <div class="col-lg-5 show-todos">
       <h3 class="text-center text-success ">My Todos</h3>
       <table class="table">
          <thead class="">
            <tr>
              <td scope="col">Title</td>
              <td scope="col">Date</td>
            </tr>
         </thead>
         <tbody id="tbody">
           
         </tbody>
       </table>

     </div>
    </div>
 

   </div>

</div>
 





<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="<?php echo $script?>"></script>


<?php include_once "includes/footer.php";?>
