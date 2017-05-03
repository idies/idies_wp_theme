<?php
/*
 * Show the future page content *
 */ 
?>
<?php
while (have_posts()) : 
	the_post();
	the_content(); 
?>
<div class="well well-future intro">
Meeting the Big Data Challenge is not just about building faster computers, it is about <span class="emphasis">smarter computing</span>. The Challenge is not to find brute force correlations in Big Data, it is to <span class="emphasis">identify fundamental relationships</span>, to expand our understanding of the physical universe. The Challenge is about more than solving today's problems; we want to <span class="emphasis">set the stage for breakthroughs</span> we have barely begun to imagine. 

At IDIES we develop faster, smarter, better techniques to access and analyze Big Data, enabling the global scientific community to find Big Answers to Big Questions. 

Be part of the team that makes it happen. With your help, we will meet <span class="emphasis">and master</span> the Big Data Challenge. 

Learn about IDIES and find out how you can contribute.
</div>
<div class="well well-people">
<h2  id="people">MEET <small>THE TEAM</small></h2>
<div id="carousel-future-people" class="carousel slide" data-ride="carousel" data-interval="10000">
  <ol class="carousel-indicators">
    <li data-target="#carousel-future-people" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-future-people" data-slide-to="1"></li>
    <li data-target="#carousel-future-people" data-slide-to="2"></li>
    <li data-target="#carousel-future-people" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/wp-content/uploads/2017/05/szalay-wide-angle.jpg" alt="Alex Szalay">
      <div class="carousel-caption">Alex Szalay, founder of IDIES, began in the mid-1990's with a grant from the Seaver Foundation, followed closely by grants from the Moore and Keck Foundations. Alex leveraged the seed money, hiring post-docs and researchers to realize his vision of a scientific Big Data revolution.</div>
    </div>
    <div class="item">
      <img src="/wp-content/uploads/2017/05/andrewconnelly.jpg" alt="Andrew Connolly">
      <div class="carousel-caption">Professor Andrew Connolly of the Univ. of Washington, once a post-doc working with Alex Szalay, now shapes the scientific future of the LSST (Large Synoptic Survey Telescope). <a href="https://www.ted.com/talks/andrew_connolly_what_s_the_next_window_into_our_universe" target="_blank">View his TED</a> talk about the LSST.</div>
    </div>
    <div class="item">
      <img src="/wp-content/uploads/2017/05/idies_symposium_2014_19.jpg" alt="IDIES Affiliates Charles Meneveau and Thomas Haine">
      <div class="carousel-caption">IDIES Affiliates Charles Meneveau and Thomas Haine. Professor Meneveau co-manages the multi-Terabyte Johns Hopkins Turbulence Databases. Professor Haine is a oceanographer working with IDIES towards creating a Large-Scale Ocean Circulation Database.</div>
    </div>
    <div class="item">
      <img src="/wp-content/uploads/2017/05/pihD.png" alt="&Pi;hD">
      <div class="carousel-caption">&Pi;hD: Alex Szalay is working to reinvent the PhD at Johns Hopkins with a &pi; shaped training format – deep training in two disciplines (i.e. biochemistry and computer science).</div>
    </div>
<a class="left carousel-control" href="#carousel-future-people" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-future-people" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>  </div>
</div>
<div class="well well-science">
<h2  id="science">Learn <small>THE SCIENCE</small></h2>
<div id="carousel-future-science" class="carousel slide" data-ride="carousel" data-interval="10000">
  <ol class="carousel-indicators">
    <li data-target="#carousel-future-science" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-future-science" data-slide-to="1"></li>
    <li data-target="#carousel-future-science" data-slide-to="2"></li>
    <li data-target="#carousel-future-science" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/wp-content/uploads/2017/05/szalay-wide-angle.jpg" alt="Alex Szalay">
      <div class="carousel-caption">Alex Szalay, founder of IDIES, began in the mid-1990's with a grant from the Seaver Foundation, followed closely by grants from the Moore and Keck Foundations. Alex leveraged the seed money, hiring post-docs and researchers to realize his vision of a scientific Big Data revolution.</div>
    </div>
    <div class="item">
      <img src="/wp-content/uploads/2017/05/andrewconnelly.jpg" alt="Andrew Connolly">
      <div class="carousel-caption">Professor Andrew Connolly of the Univ. of Washington, once a post-doc working with Alex Szalay, now shapes the scientific future of the LSST (Large Synoptic Survey Telescope). <a href="https://www.ted.com/talks/andrew_connolly_what_s_the_next_window_into_our_universe" target="_blank">View his TED</a> talk about the LSST.</div>
    </div>
    <div class="item">
      <img src="/wp-content/uploads/2017/05/idies_symposium_2014_19.jpg" alt="IDIES Affiliates Charles Meneveau and Thomas Haine">
      <div class="carousel-caption">IDIES Affiliates Charles Meneveau and Thomas Haine. Professor Meneveau co-manages the multi-Terabyte Johns Hopkins Turbulence Databases. Professor Haine is a oceanographer working with IDIES towards creating a Large-Scale Ocean Circulation Database.</div>
    </div>
    <div class="item">
      <img src="/wp-content/uploads/2017/05/pihD.png" alt="&Pi;hD">
      <div class="carousel-caption">&Pi;hD: Alex Szalay is working to reinvent the PhD at Johns Hopkins with a &pi; shaped training format – deep training in two disciplines (i.e. biochemistry and computer science).</div>
    </div>
<a class="left carousel-control" href="#carousel-future-science" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-future-science" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>  </div>
</div>
<?php
endwhile;
?>
