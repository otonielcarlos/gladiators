<?php $meta = get_post_meta(get_the_ID());?>
<?php if (isset($product)){ ?>
<div itemscope itemtype="http://schema.org/Product">
  <meta itemprop="name" content="<?php echo get_the_title(get_the_ID()); ?>">
    <meta itemprop="productID" content="<?php echo get_the_ID(); ?>">
    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <meta itemprop=“price” content=“<?php echo get_post_meta( get_the_ID(), ‘_regular_price’, true); ?>” />
        <meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
        <link itemprop="availability" href="http://schema.org/<?php echo $meta[‘_stock_status’][0] ? ‘InStock’ : ‘OutOfStock’; ?>" />
        <meta itemprop="itemCondition" itemtype="http://schema.org/OfferItemCondition" content="http://schema.org/NewCondition" />
  </div>
</div>
<?php } ?>