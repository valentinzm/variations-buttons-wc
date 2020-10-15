document.querySelector('.variations__button').addEventListener('click', addToCart);

function addToCart(e) {
    e.preventDefault();
    let qty = document.querySelector('.qty').value;
    let id = this.dataset.id;
    if (id == '' || id == null) {
        document.querySelector('.variations__message').classList.add('variations__show');
    } else {
        const msg = document.querySelector('.variations__message') !== null;
        if (msg) {
            document.querySelector('.variations__message').classList.remove('variations__show');
        } else {
            console.log('The element does not exists in the page.');
        }

        jQuery.ajax({
            type: 'post',
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'add_item',
                id: id,
                qty: qty,
            },
            success: function(result) {
                //document.location.reload(true);
                //alert('товар добавлен в корзину');
                document.querySelector('.woocommerce-message').classList.remove('product-added');
            }
        });
    }
}