<script>
/**
 * Function : Separator commas with number .
 *
 * This function for added commas separator in number.
*/

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>
