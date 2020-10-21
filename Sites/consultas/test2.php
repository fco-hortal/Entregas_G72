<?php 
$var1 = $_POST["id"];   
$var2 = $_POST["name"];   
?>
<div class="collapse" id="collapseExample">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">name</th>
              <th scope="col">Accion 1</th>
              <th scope="col">Accion 2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <?php echo $var1;?>
              </td>
              <td>
                <?php echo $var2;?>
              </td>
              <td>
                <form>
                  <label for="birthday">Birthday:</label>
                  <input type="date" id="birthday" name="birthday">
                </form>
              </td>
              <td>
                <form>
                  <label for="quantity">Quantity (between 1 and 5):</label>
                  <input type="number" id="quantity" name="quantity" min="1" max="5">
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
