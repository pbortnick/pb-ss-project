<script type="text/javascript">
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel();
  });
</script>
<div class="content-container">
  <article class="typography">
    <header>
      <h1>$Title</h1>
    </header>

    <div class="content">
      <% if $HomePageSlides %>
        <div class="owl-carousel">
          <% loop $HomePageSlides %>
            <% if $Image %>
              <h1>$Image</h1>
            <% end_if %>
            <% if $Title %>
              <h2>$Title</h2>
            <% end_if %>
          <% end_loop %>
        </div>
      <% end_if %>


    </div>
  </article>
</div>
