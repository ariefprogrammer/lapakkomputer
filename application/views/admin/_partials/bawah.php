
<!-- Sticky Footer -->
        <?php $this->load->view("admin/_partials/footer.php") ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>

<script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }

  function updateTotal(){
  var pricePer = $('#product_id').find('option:selected').data('harga_product');
  var quantity = $('#quantity').val();
 
  var total = pricePer * quantity;
    $('#totalPrice').text(total);
    }

$('#product_id').change(updateTotal);
$('#quantity').change(updateTotal);
</script>
</body>

</html>