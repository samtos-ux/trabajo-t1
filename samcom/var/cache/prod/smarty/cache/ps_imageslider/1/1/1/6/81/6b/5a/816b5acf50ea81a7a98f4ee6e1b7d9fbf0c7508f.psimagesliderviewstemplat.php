<?php
/* Smarty version 3.1.33, created on 2020-06-17 10:02:57
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9ce31b185e5_41406617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1587040546,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5ee9ce31b185e5_41406617 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://#">
            <figure>
              <img src="http://localhost:50/samcom/modules/ps_imageslider/images/e7b4eff652238a947905d18a2b8b0ab6e8f6d7f5_carrusel-1.png" alt="">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://#">
            <figure>
              <img src="http://localhost:50/samcom/modules/ps_imageslider/images/55b42ae19e6404f2657587f750cc4b43690e9719_carrusel-2.png" alt="">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://#">
            <figure>
              <img src="http://localhost:50/samcom/modules/ps_imageslider/images/7737752e3cf21f6ec7e8ec1a60d36e4ae9993f21_carrusel-3.png" alt="">
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Botones del carrusel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>
<?php }
}
