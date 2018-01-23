<?php
$cabecalho_title = "Mirror Fashion";


include("cabecalho.php");
?>
<body>
  <div class="container destaque">

   <section class="busca">
     <h2>Busca</h2>

     <form>
       <input type="search">
       <input type="image" src="img/busca.png">
     </form>
   </section><!-- fim .busca -->

   <section class="menu-departamentos">
     <h2>Departamentos</h2>

     <nav>
       <ul>
         <li><a href="#">Blusas e Camisas</a>
           <ul>
             <li><a href="#">Manga curta</a></li>
             <li><a href="#">Manga comprida</a></li>
             <li><a href="#">Camisa social</a></li>
             <li><a href="#">Camisa casual</a></li>
           </ul></li>
           <li><a href="#">Calças</a></li>
           <li><a href="#">Saias</a></li>
           <li><a href="#">Vestidos</a></li>
           <li><a href="#">Sapatos</a></li>
           <li><a href="#">Bolsas e Carteiras</a></li>
           <li><a href="#">Acessórios</a></li>
         </ul>
       </nav>
     </section><!-- fim .menu-departamentos -->

     <img src="img/destaque-home.png" alt="Promoção: Big City Night">
   </div><!-- fim .container .destaque -->
   <div class="container paineis">
     <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
     <section class="painel novidades">
       <h2>Novidades</h2>
       <ol>
         <!-- primeiro produto -->
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura1.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>

         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura2.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura3.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura4.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura5.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura6.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura7.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
       </ol>
     </section>

     <section class="painel mais-vendidos">
       <h2>Mais Vendidos</h2>
       <ol>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura8.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>

         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura9.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura10.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura11.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura12.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura13.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura14.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
         <li>
           <a href="produto.html">
             <figure>
               <img src="img/produtos/miniatura15.png">
               <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
             </figure>
           </a>
         </li>
       </ol>
     </section>
   </div>

   <?php include("rodape.php"); ?>


<script type="text/javascript" src="js/banner.js"></script>
 </body>
 </html>