
<script src="{{'/assets/js/jquery-3.7.0.js'}}"></script>
<script src="{{'/assets/js/jquery.dataTables.min.js'}}"></script>
<script src="{{ '/assets/js/main.js' }}"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>


<script>
    new DataTable('#example');
</script>


<script>
    $(document).on('click', '.userView', function()
{
    var_this = $(this).parents('tr');
    $('#v_id').val(_this.find('.id').text());
    $('#v_name').val(_this.find('.name').text());
    $('#v_email').val(_this.find('.email').text());
    $('#v_phone').val(_this.find('.phone').text());
    $('#v_prices').val(_this.find('.prices').text());
    $('#v_address').val(_this.find('.address').text());
    $('#v_details').val(_this.find('.details').text());

});
</script>